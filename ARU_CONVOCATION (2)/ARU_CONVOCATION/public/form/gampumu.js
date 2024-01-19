
const form = document.querySelector('#create-account-form');
const fnameInput = document.querySelector('#fname');
const mnameInput = document.querySelector('#mname');
const lnameInput = document.querySelector('#lname');
const emailInput = document.querySelector('#email');
const passwordInput = document.querySelector('#password');
const confirmPasswordInput = document.querySelector('#confirm-password');




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







form.addEventListener('submit', (event)=>{
     validateForm();
     if(isFormValid()==true){
        form.submit();
     }
     else{
        event.preventDefault();
     }
    });


function isFormValid(){
    const inputContainers=form.querySelectorAll('.input-group');
    let result=true;
    inputContainers.forEach((container)=>{
        if(container.classList.contains('error')){
            result=false;
        }
    });
    return result;
}

function validateForm(){
    //Fname//

    if (fnameInput.value.trim()==''){
     setError(fnameInput, 'Name can not be Empty');
     
    }

    else{
       setSuccess(fnameInput);
      
    }


     //Mname//

     if (mnameInput.value.trim()==''){
        setError(mnameInput, 'Name can not be Empty');
        
       }
   
       else{
          setSuccess(mnameInput);
         
       }


        //Lname//

    if (lnameInput.value.trim()==''){
        setError(lnameInput, 'Name can not be Empty');
        
       }
   
       else{
          setSuccess(lnameInput);
         
       }


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





//conditional field//
function toggleField(){

    var userType=document.getElementById('userType').value;
    var gradFields=document.getElementById('gradFields');

    if (userType==='1') {
        gradFields.classList.remove('hidden');
    }
    else{
        gradFields.classList.add('hidden');
    }
}


