<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\user_type;
use App\models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\announcement;
use App\Models\event;
use Ramsey\Uuid\Type\Time;

class announcement_controller extends Controller
{
    public function home_controlck(){
        $announc=announcement::where('announce_status', '1')->paginate(4);
        $events=event::where('event_status', '1')->where('event_type', '2')->paginate(4);
        $events_video=event::where('event_status', '1')->where('event_type', '1')->paginate(3);
       return view ('users/home', [
        'announcement'=> $announc,
       'available_news'=>$events,
       'video_event'=>$events_video
    ]
       );
    }
    


    public function create_event(){
        return view('admin/create_event');
    }
    public function create_announcement(){
        return view('admin/create_announce');
    }

    //view more about event
    public function more_event($id){
$event_details=event::where('event_id', $id)->first();
return view('users/event_more', ['more_details'=>$event_details]);
    }
    

    //Admin View Contents
    public function a_Announcement_list(){
        $announc_list=announcement::join('users', 'announcements.created_by', '=', 'users.id' )->get();
        return view('admin/a_announc_list', ['announcement_list'=> $announc_list]);
    }
    public function a_Events_list(){
        $event_list=event::join('users', 'users.id'  , '=',  'events.created_by')->get();
        return view('admin/a_events_list', ['eventsnews_list'=> $event_list]);
    }

    //announc_updatye_check
    public function event_delete($id){
        event::where('event_id', $id)->delete();
        return redirect('a_Events_list')->with('event_delete_success', 'evemt_deleted');
    }

    public function event_publish($id){
        $event_status=1;
        event::where('event_id', $id)->update(['event_status'=> $event_status]);
        return redirect('a_Events_list')->with('event_publish_success', 'evemt_published');
    }

    public function event_un_publish($id){
        $event_status=0;
        event::where('event_id', $id)->update(['event_status'=> $event_status]);
        return redirect('a_Events_list')->with('event_un_publish_success', 'evemt_unpublished');
    }

    public function event_update($id){
        $event_data = event::where('event_id', $id)->first();
        return view('admin/update_event',['details'=>$event_data]);
    }



    //annoucement action
    public function announc_publish($id){
        $announc_status_on=1;
        announcement::where('announce_id', $id)->update(['announce_status'=> $announc_status_on]);
        return redirect('a_Announcement_list')->with('announce_publish', 'announcement published');
    }

    public function announc_un_publish($id){
        $announc_status_off=0;
        announcement::where('announce_id', $id)->update(['announce_status'=> $announc_status_off]);
        return redirect('a_Announcement_list')->with('announce_un_publish', 'announcement un-published');
    }

    public function announc_delete($id){
        announcement::where('announce_id', $id)->delete();
       return redirect('a_Announcement_list')->with('announce_delete', 'announcement deleted');
    }

    public function announc_update($id){
      $announce_data = announcement::where('announce_id', $id)->first();
      return view('admin/update_announc',['details'=>$announce_data]);
    }



    //UPDATE DATA IN DATABASE
    public function announc_update_check(Request $req){
        // Get the announcement ID from the request
        $id = $req->id_update;
    
        // Find the announcement by ID
        $announce_data = Announcement::find($id);
    
        // Check if the announcement exists
        if (!$announce_data) {
            return 'Announcement not found'; // You might want to handle this case appropriately
        }
    
        // Update the announcement data
        $announce_data->tittle = $req->tittle; // Typo: 'tittle' should be 'title'
        $announce_data->url = $req->url;
        $announce_data->publish_date = $req->publish_date;
    
        // Save the updated data
        $announce_data->save();
    
       return redirect('a_Announcement_list')->with('announc_update', 'Announcement upaded succesfully');
    }
    

    
public function event_update_check(Request $req){
    $id = $req->id_update;
    
    // Find the announcement by ID
    $event_data = event::find($id);

    // Check if the announcement exists
    if (!$event_data) {
        return 'eVENT  not found'; // You might want to handle this case appropriately
    }

    $image=$req->file;
IF($image){
    $image_name=Time().'.'.$image->getClientOriginalExtension();
$req->file->move('event_files', $image_name);
$event_data->file=$image_name;
}

    // Update the announcement data
    $event_data->video_url=$req->video_url;
    $event_data->tittle = $req->event_tittle; // Typo: 'tittle' should be 'title'
 
    $event_data->description=$req->event_details;


    // Save the updated data
    $event_data->save();

  //  return redirect('a_Announcement_list')->with('announc_update', 'Announcement upaded succesfully');
  return redirect('a_Events_list')->with('eventc_update', 'Event  upaded succesfully');
}





public function event_check(Request $req){
$new_event=new event;
$available_video=$req->video_url;

if($available_video){
    $event_type=1;
}
else{
    $event_type=2;
}

$new_event->event_status=1;

$new_event->video_url=$req->video_url;

$new_event->created_by=session('user_id');
$new_event->tittle=$req->event_tittle;
$new_event->description=$req->event_details;
$new_event->event_type=$event_type;

$image=$req->file;
IF($image){
    $image_name=Time().'.'.$image->getClientOriginalExtension();
$req->file->move('event_files', $image_name);
$new_event->file=$image_name;
}

$new_event->save();
return redirect('a_home')->with('event_success', 'Event Published Successfully');
}



    public function announcement_check(Request $req){
$announcement_store = new announcement;

$announcement_store->announce_status=1;
$announcement_store->tittle=$req->ann_tittle;
$announcement_store->url=$req->ann_link;
$announcement_store->created_by=session('user_id');
$announcement_store->publish_date=$req->publish_date;
$announcement_store->save();
return redirect('a_home')->with('announcemennt_success', 'Announcement Published Successfully');

    }
}
