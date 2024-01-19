
@if(session('success'))

<div id="green_alert" class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Account Created Successifully
    </div>
  </div>

@endif

@if(session('Un_aproved_user'))
<div id="blue_alert" class="alert alert-primary d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
    <div>
        Your Account ids waiting for Admin Approve, you cant login now
    </div>
  </div>
@endif

@if(session('blocked_user'))
<div id="blue_alert" class="alert alert-primary d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
    <div>
        ARU disabled this Account, please contact ARU Convocation admin
    </div>
  </div>
@endif





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- favicons --><meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <title>ARDHI|Home</title>
    
    <link rel="apple-touch-icon" sizes="57x57" href="https://www.aru.ac.tz/site/images/icon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.aru.ac.tz/site/images/icon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.aru.ac.tz/site/images/icon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.aru.ac.tz/site/images/icon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.aru.ac.tz/site/images/icon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.aru.ac.tz/site/images/icon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.aru.ac.tz/site/images/icon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.aru.ac.tz/site/images/icon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.aru.ac.tz/site/images/icon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://www.aru.ac.tz/site/images/icon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.aru.ac.tz/site/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://www.aru.ac.tz/site/images/icon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.aru.ac.tz/site/images/icon/favicon-16x16.png">
    <style media="screen">
      p img{
        width: 100%
      }
    </style>
    <!---bootstrap link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous">
      <!--- ./bootstrap link-->

      <!-------  icon-Link ------->
      <link rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


      <!-------  ./icon-Link ------->
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
  
      <!------- styles css blue_alert------>
    <style>
  #green_alert{
    color: green;
    text-decoration: none;
    text-transform: lowercase;
font-family: sans-serif;
font-size: 14px;
  }
  #blue_alert{
    color: blue;
    background-color:rgb(156, 156, 236);
    text-decoration: none;
    text-transform: lowercase;
font-family: sans-serif;
font-size: 14px;
  }



        .text-color{
            color: #225294;
            font-weight: 900!important;
            line-height: 3;
        
        }
        .bg-color{
            background-color: #D55E1C;;
        }
        nav .nav-link{
            color: #fff;

        }
        nav .nav-link:hover{
          background-color: #80902D;
          color: #fff;
        }
        .bg-color-main-section{
            background-color: #D55E1C;
        }
        .text-align-center{
            text-align: center;
           
            color: #fff;
            padding-top: 10px;
        }
        .carousel-design{
            height: 450px;
            width: 100%;
        }
        .img-size{
            height: 430px;
            max-width: 100%;
            overflow: hidden;
        }
        .img-size img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(0.8);
        }
        .text-align-center2{
            text-align: center;
            line-height: 3;
            font-weight: bold;
            color:#225294
           
        }
       .card-anouncement{
        background: #FFF;
          margin: 0 0 20px;
        padding: 20px;
       border-radius: 2px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: 0.3s ease;
}
        .card-anouncement:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            display: flex;
        }
        .title{
         width: 130px;
         display: inline-block;
         color: #fff;
         font-size: 0.75rem;
        font-weight: 600;
        margin: 0 0 10px;
        text-transform: uppercase;
        padding: 8px 10px;
        
        }
        .w-30{
            width: 50px;
        }
        .blinkAnouncement{
            animation: blink 1s steps(1, end) infinite;
        }
        
    @keyframes blink {
    0% {
    opacity: 1;
    }
    50% {
    opacity: 0;
    }
    100% {
    opacity: 1;
   }
  }

  .ega-footer {
  font-size: 14px;
  background: #225294;
  padding: 1em 0;
    padding-bottom: 1em;
}

  .footer-content {
  background-color: #225294;
  padding: 30px 0 10px;
    padding-right: 0px;
    padding-left: 0px;
  color: #797979;
  font: 400 15px/25px Roboto;
}

  .footer-heading {
  color: #f2f2f2;
  font: 400 19px/25px Roboto-Bold;
  display: inline-block;
  margin-top: 0;
}
.container.max-1920 {
  max-width: 1920px;
}
.h1, h1 {
  font-size: 2.5rem;
}
.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
  margin-bottom: .5rem;
  font-weight: 500;
  line-height: 1.2;
}
.text-right a{
    display: inline-flex;
    float: right;
    text-decoration: none;
    padding: 0 5px;
    background-color: #f2f2f2;
}
.bolded{
    color: #fff;
    text-decoration: none;
}
.text-justify{
    color: #fff;
}
.link{
    text-decoration: none;
    color: #fff;
}
p{
    color: #fff;
}
    </style>
    <!------- ./styles css ------>

</head>
<body>
    <!-------------- container ------------>
<div class="container">
    <div class="row align-item-center">
        <div class="col-md-2">
            <img src="home/images/logo.jpg" alt="">
        </div>
        <div class="col-lg-8">
            <div class="text-center header-info">
            <h3>  </h3>
            <h2 class = "text-color">ARU CONVOCATION </h2>
                <!---    <h2 class = "text-color">ARU CONVOCATION </h2>-------->
            </div>
            </div>
            <div class="col-md-2">
                <img src="https://www.aru.ac.tz/site/images/logo.jpg" alt="">
            
            </div>
            
    </div>
    </div>
    <!-----   ./container  -------------------->

    <!--- Navbar-------------->
        <nav class="navbar navbar-expand-sm navbar-light bg-color sticky-top">
            <div class="container-fluid ">
              <a class="navbar-brand " href="#">ARU CONVOCATION</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>

                  @if(session('user_id'))
                  <li class="nav-item">
                    <a class="nav-link" href="community_usetrs">Community</a>
                </li>
                @endif

                  <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                  </li>

                  @if(session('user_id'))
                  <li class="nav-item">
                    <a class="nav-link" href="sign_out">Logout</a>
                </li>
                @endif

                @if(!session('user_id'))
                <li class="nav-item">
                  <a class="nav-link" href="sign_in">Login</a>
              </li>
              @endif

                       @if(session('user_id'))
              <li class="nav-item">
                <a class="nav-link" href="my_profile">Profile</a>
            </li>
            @endif
              

              
              @if(!session('user_id'))
              <li class="nav-item">
                <a class="nav-link" href="sign_up">Signup</a>
            </li>
            @endif

            @if(session('admin_is_online'))
            <li class="nav-item">
              <a class="nav-link" href="a_home">Admin_Control</a>
          </li>
          @endif

                  <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                  </li>
              </ul>
              </div>
            </div>
          </nav>