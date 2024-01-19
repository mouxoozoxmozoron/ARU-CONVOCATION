

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aru convocation</title>
    <style>

        .hidden{
            display: none;
        }
       
    </style>
    <link rel="stylesheet"href="form/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="crossorigin="anonymous"referrerpolicy="no-referrer" />
</head>


@if(session('registration_failed'))
<h1>
<script type="text/javascript" >
  alert('This Account exist');
</script>
</h1>
@endif


<body class="mama">

    <form  id="create-account-form"  action="register_check" method="POST" enctype="multparty/form-data"> 
      @csrf
      <!-------------conditional field--------------->
       <div>
      <center>
        <div class="title">
  
          <h2>Login</h2>
  
      </div>
    </center> 



    <div class="mainDiv" > <!------START OF MAIN DIV------------->

      

            <div class="input-group"> 
              <label for="userType">Select user type</label> 
              
              <select id="userType" name="u_type" onchange="toggleField()">
                <option value="" selected>--select--</option>

                @foreach($user_type as $user_type)
                <option value="{{$user_type->id}}" default="" >{{$user_type->type}}</option> <br>
                @endforeach
                </select>
            </div>




      
        <!---------USERNAME------------->
        <div class="input-group ">
            <label for="username">First Name</label>
            <input type="text"id="fname"placeholder="First Name"name="fname">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>


        <div class="input-group ">
          <label for="username">Middle Name</label>
          <input type="text"id="mname"placeholder="Middle Name"name="mname">
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <p>Error Message</p>
      </div>

      <div class="input-group ">
        <label for="username">Last Name</label>
        <input type="text"id="lname"placeholder="Last Name"name="lname">
        <i class="fas fa-check-circle"></i>
        <i class="fas fa-exclamation-circle"></i>
        <p>Error Message</p>
      </div>

     <!---------gender------------->
      <div class="input-group ">
      <label for="username">Gender</label>

      <input type="radio" name="gender" value="Male"> <h4>Male</h4> <br>
      <input type="radio" name="gender" value="Female"><h4>Female</h4> <br>
      <input type="radio" name="gender" value="Others"><h4>Others</h4> <br>
      <i class="fas fa-check-circle"></i>
      <i class="fas fa-exclamation-circle"></i>
      <p>Error Message</p>
     </div>

   </div>


  <div>

   <!---------phone------------->
 <div class="input-group ">
  <label for="username">phone</label>
 <input type="number" name="phone" min="0" placeholder="your phone number"  required><br>
 <i class="fas fa-check-circle"></i>
 <i class="fas fa-exclamation-circle"></i>
 <p>Error Message</p>
</div>





  <!---------year------------->
  <div id="gradFields"  class="hidden" class="input-group ">
    <label for="graduYear">Year of graduation</label><br> <br>
    <input type="date" id="gradYear" name="gradYear"> <br>



    <!---------course------------->

     <label for="graduCourses">Course Graduated</label><br>
     <select id="userType" name="course" >
      <option value="" selected>--select--</option>

      @foreach($courses as $course)
      <option value="{{$course->id}}" default="" >{{$course->course_name}}</option> <br>
      @endforeach
      
      </select>
  </div>                                                                                  

   <!------profile photo------------->
  <div class="input-group">
    <label for="photo">Profile photo</label>
    <input type="file"id="photo" name="profile_photo">
    <i class="fas fa-check-circle"></i>
    <i class="fas fa-exclamation-circle"></i>
    <p>Error Message</p>
</div>


       <!------EMAIL------------->
       <div class="input-group">
            <label for="email">email</label>
            <input type="text"id="email"placeholder="email@gmail.com"name="email" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>




        <!------PASSWORD------------->
       <div class="input-group">
            <label for="password">password</label>
            <input type="password"id="password"placeholder="password"name="password" required>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>

      </div>

    </div >  <!------END OF MAIN DIV------------->

        <button type="submit" name="submit" class="btn">submit</button>
    </form>
    
    <script src="form/gampumu.js"></script>
</body>
</html>
