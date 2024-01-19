@include('admin/admin_link_component')

<form id = "create_account" action="{{ route('announc_update_check') }}" method="POST" enctype="multipart/form-data">
  <h2 style = "text-align: center;">Update Announcemennt</h2>
  @csrf
  <input type="text" class = "form-control" name="tittle" value="{{ $details->tittle }}">
  <input type="text" class = "form-control" name="url" value="{{ $details->url }}">
  <input type="date"  class = "form-control"name="publish_date" value="{{ $details->publish_date }}">
  <input type="hidden" class = "form-control" name="id_update" value="{{ $details->announce_id }}">
  <button type="submit" name="submit" class="btn btn-success" role="button">Update</button>
</form>

<style>
  form{
   /* text-align: center;*/
    margin: auto;
    display: block;
    width:35%;
    margin-top: 20%;
    background: 
  }
  #create_account{
    width: 50%;
   /* background-color: rgb(182, 172, 172);*/
   border: 2px solid white;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: 0.3s ease;
  }
  #create_account:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
</style>

    

      

