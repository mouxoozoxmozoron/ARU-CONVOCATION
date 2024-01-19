  <!-- link to include every where -->
@include('admin/admin_link_component')

<!-- Navbar -->
<nav  class="main-header navbar navbar-expand navbar-white navbar-light "style = "position: fixed; top: 140px; display: inline-flex; padding: 0 20% 0 0; width: 100%;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a  href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a  href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  
  <div class="container" id = "top-header">
        <div class="row">
            <div class="col-md-2 col-sm-1 col-1">
                    <img class = "logo"  src="https://www.aru.ac.tz/site/images/emblem.png" height= "120" width = "120"alt="">
            </div>
            <div class="col-md-8 col-sm-9 col-9" >
                <h1 style = "text-align: center;margin-top: 27px;margin-left:23%; color: #225294; font-weight: 900">ARU CONVOCATION</h1>
                </div>
                <div class="col-md-2 col-sm-1 col-1" >
                <img src="https://www.aru.ac.tz/site/images/logo.jpg" alt="">
                </div>
        </div>
        </div>
        <br><br><br>




     <!--side bar inclussion   -->

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-bg top2-fixed ">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="admin/images/profile vector.png" class="img-circle elevation-2" alt="User Image">
          </div> 
          <div class="info">
            <a href="" class="d-block">Admin</a>
            
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul id = "spide-icon" class=" nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open" >
              <a href="" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
            
  
                <li class="nav-item" id = "sidebtn-hover">
                  <a href="a_home" class="nav-link">
              
                    <p>Home</p>
                  </a>
                </li>

            <li class="nav-item" id = "sidebtn-hover">
              <a href="" class="nav-link">
          
                <p>News</p>
              </a>
            </li>
  
            <li class="nav-item" id = "sidebtn-hover">
              <a href="create_announc" class="nav-link">
          
                <p>New Announcement</p>
              </a>
            </li>

            <li class="nav-item" id = "sidebtn-hover">
              <a href=" create_event" class="nav-link">
          
                <p>New Event/News</p>
              </a>
            </li>
            
  
            <li class="nav-item" id = "sidebtn-hover">
              <a href="a_users" class="nav-link">
          
                <p>View Users</p>
              </a>
            </li>


            <li class="nav-item" id = "sidebtn-hover">
              <a href="a_Announcement_list" class="nav-link">
          
                <p>Announcements List</p>
              </a>
            </li>

                  <li class="nav-item" id = "sidebtn-hover">
              <a href="a_Events_list" class="nav-link">
          
                <p>Events/News List</p>
              </a>
            </li>
  
            <li class="nav-item" id = "sidebtn-hover">
              <a href="sign_out" class="nav-link">
          
                <p>Logout</p>
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>



   <!-- Admin dynamic content goes here -->



   <div id="anno" class="content-wrapper)">
    <form  id="create_account" action="announcement_check" method="POST" class="row g-3 needs-validation" novalidate>
      @csrf
  

  <div class = "container">
  <div class="row">
    
      <h3 class="an_tittle">New Announcement</h3>
   
  </div>
</div>
        <div class="col-md-12">
          <div class="row">
        <div class="col-md-4">
          <label for="validationCustom01" class="form-label">Announcement Tittle</label>
          <input type="text" class="form-control" id="validationCustom01" name="ann_tittle" value="" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>  <br>

            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">URL </label>
              <input type="text" class="form-control" id="validationCustom01" name="ann_link" value="" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div> <br>

          
                <div class="col-md-4">
                  <label for="validationCustom01" class="form-label">Publisher Date </label>
                  <input type="date" class="form-control" id="validationCustom01"  name="publish_date" value="" required>
                  <div class="valid-feedback">
                    Looks good!
                  </div>
                </div> <br>
              </div>
            </div>
        <div class="col-12">
          <button class="btn btn-success" type="submit">Publish </button>
        </div>
      </form>

    
  </div>
  

<script>
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

<style>

  .an_tittle{
   color: #fff;
   font-family: sans-serif;
   font-size: 28px;
   background-color: #225294;
   padding: 15px;
   text-align: center;
  }
  #create_account{
    margin: auto;
    display:block;
    text-align: center;
    width: 45%;
   /* background-color: rgb(182, 172, 172);*/
   border: 2px solid white;
   box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        transition: 0.3s ease;
  }
  #create_account:hover{
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }
</style>


  <!-- Admin dynamic content end  here -->
  

  <!-- footer goes here-->
