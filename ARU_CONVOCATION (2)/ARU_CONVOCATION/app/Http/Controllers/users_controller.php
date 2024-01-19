<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\Hash;
use App\Models\user;
use App\Models\user_type;
use App\models\course;
use App\Models\event;
use App\Models\department;

use App\Models\announcement;

class users_controller extends Controller
{
    //
public function register()
{
    $course = course::all();
    $types = user_type::all();
    $u_department = department::all();

    //when passing too many data to the view  you need an assosiative array
    return view('users/register', [
        'user_type' => $types,
        'courses' => $course,
        'user_department' => $u_department,
    ]);
}


    public function register_check(Request $req){
      $image=$req->file;
//we will need to prevent mult registration here
        $user_details=user::where('email', $req->email )->first();
        if($user_details){
           return redirect('sign_up')->with('registration_failed', 'This Account exist');
        }
else{


       $new_user= new user;
       




       $new_user->status=0;
       $new_user->behavior=1;
       $new_user->role=2;
       $new_user->course_name=$req->written_course;
       $new_user->directorate=$req->directorate;
       $new_user->department=$req->department;
       $new_user->user_tittle=$req->tittle;
       $new_user->user_type=$req->u_type;
       $new_user->first_name=$req->fname;
       $new_user->middle_name=$req->mname;
       $new_user->last_name=$req->lname;
       $new_user->gender=$req->gender;
       $new_user->phone_number=$req->phone;
       $new_user->email=$req->email;
       $new_user->graduation_year=$req->gradYear;
       $new_user->program_graduated=$req->course;
       $new_user->password=Hash::make($req->password);

       IF($image){
           $image_name=Time().'.'.$image->getClientOriginalExtension();
       $req->file->move('profile_photo', $image_name);
       $new_user->file=$image_name;
       }
 

      // $imageName = Time().'.'.$req->file('image')->getClientOriginalExtension();
      // $req->file('image')->move('profile_photo', $imageName);
      // $new_user->profile_picture = $imageName;
       


     $reg=  $new_user->save();     
        return redirect('/')->with('success', 'Account created successifuly');

      }
}



public function login(){
    return view('users/login');
}


//control login functionality
public function  login_check(Request $req){
 $user_details=user::where('email', $req->email )->get();
 
 if( $user_details->isEmpty()){
    return redirect('sign_in')->with('login_failure', 'login failed');
 }

else{

 if( hash::check($req->password, $user_details[0]->password)){
    //session
    if($user_details[0]->status=='0'){
        return redirect('/')->with('Un_aproved_user', 'Your Account ids waiting for Admin Approve, you cant login now');
    }

    elseif($user_details[0]->behavior=='0'){
        return redirect('/')->with('blocked_user', 'ARU disabled this Account, please contact ARU Convocation admin');
    }
    
    else{

$req->session()->put('user_id', $user_details[0]->id);
$req->session()->put('username', $user_details[0]->first_name);

if($user_details[0]->role=='1'){
    $user_count=user::all();
    $event_count=event::all();
    $announcement_count=announcement::all();
    $req->session()->put('admin_is_online', $user_details[0]->email);
    
    return view('admin/a_home', 
    [
        'users_list_count'=>$user_count, 
         'events_number'=>$event_count,
         'announcement_number'=> $announcement_count,
]);
    

}

else if($user_details[0]->role !=='1'){
    return redirect('/')->with('success_login', 'login successfuly');
}
 }
 }


else {
    return redirect('sign_in')->with('login_failure', 'login failed');
}
}

}

//handdle the admin home button
public function a_user_list_count(){
    $user_count=user::all();
    $event_count=event::all();
    $announcement_count=announcement::all();

    return view('admin/a_home', 
    [
        'users_list_count'=>$user_count, 
         'events_number'=>$event_count,
         'announcement_number'=> $announcement_count,
]);
}

//Admin user list
public function a_user_list(){
    $user_list=user::paginate(7);
return view('admin/a_view_users', ['users_alist'=>$user_list]);
}

//admin action
public function aprove_user($id){
    $Account_status=1;
    user::where('id', $id)->update(['status' => $Account_status]);
    return redirect('a_users')->with('aprove_success', 'Account Aproved successifuly');

}

public function block_user($id){
    $Account_behaviour=0;
    user::where('id', $id)->update(['behavior' => $Account_behaviour]);
    return redirect('a_users')->with('block_success', 'Account Blocked successifuly');
}

public function un_block_user($id){
    $Account_behaviour=1;
    user::where('id', $id)->update(['behavior' => $Account_behaviour]);
    return redirect('a_users')->with('un_block_success', 'Account unBlocked successifuly');
}

public function delete_user($id){
    user::where('id', $id)->delete();
    return redirect('a_users')->with('user_delete_success', 'Account Deleted successifuly');
}

public function users_community(){
    $user_list=user::where('role', 2)->paginate(10);
    return view('users/u_view_users', ['users_alist'=>$user_list]);
}

public function users_profile($id){
    $user_to_view=user::where('id',$id)->get();
    return view('users/u_profile', ['user_profile'=>$user_to_view]);
    
   
}

public function my_profile(){
    $my_profile_data=user::where('id', session('user_id'))->get();

    return view('users/my_profile', ['my_profile_details'=>$my_profile_data]);
}


public function profile_update($id){
    $user_list=user::where('id', $id)->get();
    return view('users/update_profile', ['update_my_data'=>$user_list]);
}


public function profile_data_check(Request $req){

$id = $req->id_update;
    

$my_data = user::find($id);



$image=$req->file;
    IF($image){
        $image_name=Time().'.'.$image->getClientOriginalExtension();
    $req->file->move('profile_photo', $image_name);
    $my_data->file=$image_name;
    }



//phone  users_community

$my_data->status=0;
$my_data->first_name=$req->fname;
$my_data->middle_name=$req->mname;
$my_data->last_name=$req->lname;
$my_data->email=$req->email;
$my_data->phone_number=$req->phone;

$my_data->save();
return redirect('my_profile')->with('update_success', 'Announcement Published Successfully');

}

}
