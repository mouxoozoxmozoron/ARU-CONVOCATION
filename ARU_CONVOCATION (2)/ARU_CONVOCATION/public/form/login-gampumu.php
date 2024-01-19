<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet"href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="crossorigin="anonymous"referrerpolicy="no-referrer" />
</head>
<body class="mama">
    <form id="create-account-form"> 
        <div class="title">
            <h2>LOGIN FORM</h2>
        </div>
       
       <!------EMAIL------------->
       <div class="input-group">
            <label for="email">email</label>
            <input type="text"id="email"placeholder="email@gmail.com"name="email">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <!------PASSWORD------------->
       <div class="input-group">
            <label for="password">password</label>
            <input type="password"id="password"placeholder="password"name="password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <button type="submit"class="btn">submit</button>
        <div class="para_2">
         <p class="para_3">if you don't have an account <a href="form-gampumu.php">Register Here</a></p>
        </div>
    </form>
    
    <script >
        
const form = document.querySelector('#create-account-form');
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');

form.addEventListener('submit', (event)=>{
    event.preventDefault();
    validateForm();
});

function validateForm(){
  //Email//
  if (emailInput.value.trim()==''){
    setError(emailInput, 'Provide email address');
   }
   else if(isEmailValid(emailInput.value)){
    setSuccess(emailInput);
   }
   else{
    setError(emailInput,'Provide valide email address');
   }

   //password//
   if (passwordInput.value.trim()==''){
    setError(passwordInput, 'password can not be Empty');
   }
   else if(passwordInput.value.trim().length < 6 || passwordInput.value.trim().length > 20){
       setError(passwordInput,'password must be min 6 and 20 characters');
   }
   else{
       setSuccess(passwordInput);
   }

}


    //function validation//
   function setError(element, errorMessage){
    const parent = element.parentElement;
    if(parent.classList.contains('success')){
        parent.classList.remove('success');
    }
    parent.classList.add('error');
    const paragraph = parent.querySelector('p');
    paragraph.textContent = errorMessage;
}
function setSuccess(element){
    const parent = element.parentElement;
    if(parent.classList.contains('error')){
        parent.classList.remove('error');
    }
    parent.classList.add('success');
}

function isEmailValid(email){
    const reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    return reg.test(email)
}

    </script>
</body>
</html>



