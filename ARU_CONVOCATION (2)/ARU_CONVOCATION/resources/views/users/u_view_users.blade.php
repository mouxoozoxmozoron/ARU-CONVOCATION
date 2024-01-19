
    <!----- .starting of users Navbar ------------->

    @include('users.users_header')
    <!----- ./Navbar ended here ------------->







    <!------Main Content --------->
         
                <div class="content-wrapper">
                    <table id="table" class="table table-striped table-hover">
                     <thead>
                       <tr>
                        <th scope="col">profile Picture</th>
                         <th scope="col">FirstName</th>
                         <th scope="col">MiddleName</th>
                         <th scope="col">LastName</th>
                         <th scope="col">Gender</th>
                         <th scope="col">Phone</th>
                         <th scope="col">Email</th>
                         <th scope="col">Action</th>
                       </tr>
                     </thead>
                 
                     <tbody>
                 
                       <tr>
                         @foreach($users_alist as $users)
                       
                         <td style = "width: 10%;">  <img  class = "w-10 shadow-md rounded-circle br-5" src="{{ asset('profile_photo/' . $users->file) }}" class="card-img-top" alt="..."></td>
                         <td >{{$users->first_name}}</td>
                         <td>{{$users->middle_name}}</td>
                         <td>{{$users->last_name}}</td>
                         <td>{{$users->gender}}</td>
                         <td>{{$users->phone_number}}</td>
                         <td>{{$users->email}}</td>
                    
                         <td id="dbtn" >
                                      <a class="btn btn-info" href="{{'user_profile/'.$users->id}}" role="button">More</a>
                                 </td>
                       </tr>
                       @endforeach
                 
                 
                 
                  
                     </tbody>
                   </table>
                  {{$users_alist->links()}}
                 </div>
                 
                 <style>
                  .w-10{
                    width: 60%;
                    height: 30%;
                    margin: auto;
                    display: block;
                  }
                     .btn
                    {
                        border-radius: 2px;
                        height: 30px;
                    }
                 </style>
                 
                 
                 @if(session('aprove_success'))
                 <script type="text/javascript" >
                     alert('Account Approved');
                 </script>
                 @endif
                 
                 @if(session('block_success'))
                 <script type="text/javascript" >
                     alert('Account Blocked');
                 </script>
                 @endif
                 
                 @if(session('un_block_success'))
                 <script type="text/javascript" >
                     alert('Account Un-Blocked');
                 </script>
                 @endif
                 
                 @if(session('user_delete_success'))
                 <script type="text/javascript" >
                     alert('Account Deleted');
                 </script>
                 @endif




          
    <!----------./Main Content ---------------->



   
    <!----------./user common footer----- dont forget to include this for mobile phones views----------->
    @include('users.user_footer')

    <!----------.//user common foote ended here---------------->