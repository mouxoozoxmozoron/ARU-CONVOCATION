<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
    <style>
        .hidden{
            display: none;
        }
    </style>
    <link rel="stylesheet"href="css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="crossorigin="anonymous"referrerpolicy="no-referrer" />
</head>
<body class="mama">
    <form id="create-account-form"> 
        <!-------------conditional field--------------->
        <div class="title">
            <h2>Create Account</h2>
        </div>
            <div class="input-group"> 
              <label for="userType">Select user type</label> 
                <select id="userType" onchange="toggleField()">
                  <option value="graduate">graduant</option>
                  <option value="staff">staff</option>
                </select>
            </div>

          <div id="gradFields"  class="hidden" class="input-group ">
            <label for="graduYear">Year of graduation</label><br>
            <input type="date" id="gradYear" name="gradYear">
          </div>
          <div id="gradFields"  class="hidden" class="input-group ">
             <label for="graduCourses">Course of graduation</label><br>
             <input type="text" id="gradCourse" name="gradCourse">
          </div>
      
        <!---------USERNAME------------->
        <div class="input-group ">
            <label for="username">Name</label>
            <input type="text"id="username"placeholder="Full-name"name="username">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
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
        <!------CONFIRM PASSWORD------------->
       <div class="input-group">
            <label for="confirm password">confirm password</label>
            <input type="password"id="confirm-password"placeholder="password"name="confirm-password">
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <p>Error Message</p>
        </div>
        <button type="submit"class="btn">submit</button>
    </form>
    
    <script src="./gampumu.js"></script>
</body>
</html>



