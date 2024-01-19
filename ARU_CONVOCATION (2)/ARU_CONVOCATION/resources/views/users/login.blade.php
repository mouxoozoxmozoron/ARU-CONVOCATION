

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>convocation-login</title>

    <link rel="stylesheet"href="form/css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="crossorigin="anonymous"referrerpolicy="no-referrer" />




    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </symbol>
      <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
      </symbol>
      <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
      </symbol>
    </svg>



<style>
  #red_alert{
    color:red;
    text-decoration: none;
    text-transform: lowercase;
font-family: sans-serif;
font-size: 14px;
  }
.create_account{
  width: 60%;
  margin: auto;
  display: block;
  border-radius: 5px;
 /* background-color: rgb(182, 172, 172);*/
 border: 2px solid white;
 box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
 transition: 0.3s ease;
}
.create_account:hover{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
 </style>

  </head>
<body class="mama">

    <form id="create-account-form"  class = "create_account" action="login_check" method="POST" enctype="multparty/form-data"> 
      @csrf
            <center>
      <div class="title">
        <img style = "margin-top:14px;" src="https://www.aru.ac.tz/site/images/logo.jpg" width='11%'alt="">

    </div>


    @if(session('login_failure'))

    <div id="red_alert" class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <div>
       Incorrect Email or Pssword
      </div>
    </div>
  
  @endif

  </center> 
       <!------EMAIL------------->
       <div class="input-group">
            <label for="email">email</label>
            <input type="text"id="email"placeholder="email@gmail.com"name="email" required >
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

        <button type="submit" name="submit" class="btn">submit</button>


         <!------alternative------------->
        <div id="link_dive" class="input-group">
          <center> 
          <h2 id="link" >Dont have Account? 
            <a href="sign_up">Register</a>
         
          </h2>
        </center>

                </div>
    </form>
    <script src="form/gampumu.js"></script>
</body>
</html>


