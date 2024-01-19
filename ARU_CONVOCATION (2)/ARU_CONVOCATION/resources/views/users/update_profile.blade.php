
@include('users/user_header')


<head>
  @include('admin/admin_link_component')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aru convocation</title>

    <link rel="stylesheet" href="form/css.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="crossorigin="anonymous"referrerpolicy="no-referrer" />
</head>

@if(session('registration_failed'))
<h1>
<script type="text/javascript" >
  alert('This Account exist');
</script>
</h1>
@endif

<body class = "form-bg">
  


<center>
  <div id="anno" class="content-wrapper">

<form id="create_accoun" class="row g-3 needs-validation " action="{{ route('profile_data_check') }}" method="POST" enctype="multipart/form-data" novalidate>
 @csrf
 
 
  <div id="anno_tittle" >
    <h3 class="an_tittle">PROFILE UPDATE</h3> 
    
  </div>

  @foreach($update_my_data as $data_update)


  <div class="col-md-4 position-relative">
    <label for="validationTooltip01" class="form-label">First name</label>
    <input value="{{$data_update->first_name}}" name="fname" type="text" class="form-control" id="validationTooltip01" required>
    <div class="valid-tooltip">
      
    </div>
  </div>

  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Middle Name</label>
    <input value="{{$data_update->middle_name}}" name="mname" type="text" class="form-control" id="validationTooltip02"  required>
    <div class="valid-tooltip">
      
    </div>
  </div>

  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Last Name</label>
    <input value="{{$data_update->last_name}}" name="lname" type="text" class="form-control" id="validationTooltip02"  required>
    <div class="valid-tooltip">
     
    </div>
  </div>

  <div class="col-md-4 position-relative">
    <label for="validationTooltip02" class="form-label">Phone</label>
    <input value="{{$data_update->phone_number}}" name="phone" type="number" min = "0" class="form-control" id="validationTooltip02"  required>
    <div class="valid-tooltip">
   
    </div>
  </div>

  <input type="hidden" value="{{$data_update->id}}" name="id_update">

 <!-- profile picture     -->
    <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">profile photo</label>
    <input name="file" type="file" class="form-control" id="validationTooltip03" >
    <div class="invalid-tooltip">
    </div>
  </div> 




  <div class="col-md-4 position-relative">
    <label for="validationTooltip03" class="form-label">Email</label>
    <input value="{{$data_update->email}}" name="email" type="email" class="form-control" id="validationTooltip03" required>
    <div class="invalid-tooltip">
      
    </div>
  </div>

  <center>
  <div id="sbmt_btn" class="col-md-12">
    <button class="btn btn-success" type="submit" name="submit" >Register</button>
  </div>
</center>
</form>
@endforeach
</div>

</center>



<style>
  #anno{
    position:relative;
    margin: auto;
    display:inline-block;
  }
    #anno_tittle{
    background-color: #055bb5;;
    padding: 20px;
    margin-bottom: 2%;
  }
  .an_tittle{
    color: #ffffff;
  }
  #sbmt_btn{
width: 200px;
margin-top: 20px;
  }

  #gradFields{
    display:none;
  }
  #directorateField{
    display: none;
  }
  #departmentField{
    display: none;
  }
  #courseField{
    display: none;
  }
  #create_accoun .form-control{
    
    width: 80%;
  }
  #create_accoun{
    width: 80%;
   /* background-color: rgb(182, 172, 172);*/
   border: 2px solid white;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: 0.3s ease;
  }
  #create_accoun:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
</style>





<script>

  //js for conditional fields
  //conditional field//
  const form = document.querySelector('#create_accoun');

function toggleField(){

    // Remove the required attribute from hidden fields
    //var hiddenFields = [graduationField, courseList, directorateField, departmentField];
    //hiddenFields.forEach(function(field) {
       // field.querySelectorAll('select, input').forEach(function(input) {
          //  input.removeAttribute('required');
       // });
   // });


var userType=document.getElementById('userType').value;
var gradFields=document.getElementById('gradFields');
var directorateField = document.getElementById('directorateField');
var departmentField = document.getElementById('departmentField');
var graduationField = document.getElementById('graduationField');
var courseList = document.getElementById('courseList');






if (userType==='2') {
   gradFields.style.display='block';
   directorateField.style.display='block';
   graduationField.style.display = "none";
  courseList.style.display = 'none';
}
else if(userType==='3') {
   gradFields.style.display='block';
   departmentField.style.display="block";
   directorateField.style.display='none';
   graduationField.style.display = "none";
  courseList.style.display = 'none';
}
else{
  gradFields.style.display='none';
  departmentField.style.display="none";
  directorateField.style.display='none';
  graduationField.style.display = "block";
  courseList.style.display = 'block';
}
}
function checkValue(){
  var courseField = document.getElementById('courseField');
  var courseValue = document.getElementById('courseValue').value;
  console.log(courseValue);

  if(courseValue === 'other'){
    courseField.style.display='block';
  }else{
    courseField.style.display='none';
  }

}





// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

</script>




</body>
</html>