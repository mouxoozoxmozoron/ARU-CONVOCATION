@if(session('update_success')){
  <script>
    alert('profile updated successfully');
  </script>
}
@endif




    <!----- .starting of users Navbar ------------->

@include('users.users_header')
    <!----- ./Navbar ended here ------------->




          
    <!----------Main Content --  my_profile  -------------->
    <div class="content-wrapper">
    <div class="card"style="max-width: 540px;" id ="create_account">
      <div class="row g-0">


      @foreach($my_profile_details as $users_details)
        <div class="col-md-12" style = "margin: auto; display: block; text-align:center;">
          <img  class = "w-10 shadow-md rounded-circle br-5"src="{{ asset('profile_photo/' . $users_details->file) }}" class="card-img-top" alt="...">
        </div>
      <h2 class="card-title" style = "text-align: center;">{{$users_details->first_name}} Profile</h2>
      <div class="card-body">
        <div class="col-md-12">
          <div class="row">

       
            <div class="col-md-4">
              <h5 class="card-title">First Name</h5>
               <h5 class="card-header"><small class="text-muted">{{$users_details->first_name}}</small></h5>
            </div>

            <div class="col-md-4">
              <h5 class="card-title">Middle Name</h5>
            <h5 class="card-header"><small class="text-muted">{{$users_details->middle_name}}</small></h5>
            </div>

            <div class="col-md-4">
              <h5 class="card-title">Last Name</h5>
             <h5 class="card-header"><small class="text-muted">{{$users_details->last_name}}</small></h5>
            </div>
          </div>
        </div>

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
              <h5 class="card-title">Gender</h5>
              <h5 class="card-header"><small class="text-muted">{{$users_details->gender}}</small></h5>
            </div>

            <div class="col-md-4">
              <h5 class="card-title">Email</h5>
              <h5 class="card-header"><small class="text-muted">{{$users_details->email}}</small></h5>      
            </div>

            <div class="col-md-4">
              <h5 class="card-title">Phone</h5>
              <h5 class="card-header"><small class="text-muted">{{$users_details->phone_number}}</small></h5>
            </div>
          </div>
        </div>
        <div class="col-md-12 w-100 my-2" style = "margin:auto; display:block; text-align: center;">
          <a href={{"profile_updation/".$users_details->id}}  class="btn btn-info"" >Update Your Profile</a>
        </div>
   @endforeach
      </div>
      </div>
    </div>
    </div>
    <style>
      .w-10{
        width: 22%;
      }
      #create_account{
          width: 60%;
          margin: auto;
          display: block;
         /* background-color: rgb(182, 172, 172);*/
         border: 2px solid white;
         box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
         transition: 0.3s ease;
        }
        #create_account:hover{
          box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }
         </style>
 <!----------./user common footer----- dont forget to include this for mobile phones views----------->
   @include('users.user_footer')

       <!----------.//user common foote ended here---------------->