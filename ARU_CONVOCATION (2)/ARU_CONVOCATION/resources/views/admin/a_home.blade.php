
 @if(session('event_success'))
<div id="a_alert" >
  <center>
<div id="green_alert" class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Event/News Published successfully
    </div>
  </div>
</center>
</div>
@endif

@if(session('announcemennt_success'))
<div id="a_alert" >
  <center>
<div id="green_alert" class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
      Announcement Published successfully
    </div>
  </div>
</center>
</div>
@endif



<style>
  #green_alert{
    color: green;
    text-decoration: none;
    text-transform: lowercase;
font-family: sans-serif;
font-size: 14px;
  }

  #a_alert{
    margin-left: 25%
    margin-right: 10%
  }
  </style>
 
 <!-- links with style goes here-->
@include('admin/admin_link_component')
 <!-- links with style end here-->

 <!-- admin content -->
@include('admin/common_header')
 <!-- end of admin content -->

   <!-- Admin dynamic content goes here -->
 @include('admin/admin_content')
  <!-- Admin dynamic content end  here -->
  
  <!-- Footer goes here -->
  @include('admin/footer')
  <!--footer goes here -->


