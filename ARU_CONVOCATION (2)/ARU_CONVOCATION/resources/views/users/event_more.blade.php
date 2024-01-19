    <!----- .starting of users Navbar ------------->

    @include('users.users_header')
    <!----- ./Navbar ended here ------------->




    <!------Main Content --------->
            <div class="container-fluid">
                <div class="row">
                   <div class="container bg-color-main-section"">
                     <!------------ slide show --------------->
    <div id="carouselExampleInterval" class="carousel slide carousel-design" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!--- item 1-->
          <div class="carousel-item active" data-bs-interval="10000">
               <div class="row">
                <div class="col-md-12">
                    <img src="https://www.aru.ac.tz/uploads/gallery/565bc0fbdd4285bf9a6e1ab6e6b276f6.jpg" class="d-block w-100 img-size"alt="">
                </div>
               </div>
          </div>
          <!---- ./item 1------->

          <!----- itemn 2  -->
          <div class="carousel-item" data-bs-interval="2000">
            <div class="row">
                <div class="col-md-12">
                    <img src="https://www.aru.ac.tz/uploads/gallery/565bc0fbdd4285bf9a6e1ab6e6b276f6.jpg" class="d-block w-100 img-size"alt="">
                </div>
               </div>
          </div>
          <!----- ./item 2 ----------->


          <!---- item 3-------->
          <div class="carousel-item">
               <div class="row">
                <div class="col-md-12">
                    <img src="https://www.aru.ac.tz/uploads/gallery/565bc0fbdd4285bf9a6e1ab6e6b276f6.jpg" class="d-block w-100 img-size"alt="">
                </div>
               </div>
          </div>
          <!----- ./item 3 ---------->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> 
          </div>
      <!------ ./slide show ---------------->

 
         


                  <!--- eVENTS/NEWS row------->
                  <div  class="col-md-12">
                    <div class="row">
                        <div class="main-content-inside">
                          
                            <div class="container-fluid">
                              
                                <h4 id="event_tittle" class =" text-align-center2 text-bold px-3">EVENT</h4>
                    
                                <div class="row">
                                    <!------- col-md-4 -------->
                                   
                             
                                    <!------- ./colmd-4   video_url ------>
                              

                           
                               
                                    <div id="contain" class="card" style="width: auto;">
                                       
                                        <div class="col-md-12">
                                          <h1>{{$more_details->tittle}}</h1>
                                        </div>

                                        <img src="{{ asset('event_files/' . $more_details->file) }}" class="card-img-top" alt="...">
                                     
                                        <div class="card-body">
                                            <p style="color: #212529" >
                                              {{ $more_details->description}}
                                            </p>
                                            
                                         
                                        </div>
                                      </div> 
                                
    
                              
                       

                                    <!--- col-md-4 -------->
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>

                  <style>
                    #description{
                        color: #212529;
                        font-size: 20px;
                    }
                    #event_tittle{
                        color: #225294;
                        font-size: 35px;
                        font-weight: 400;

                    }
                    #event_link{
                        color: #dc3545;
                       
                        text-decoration: none;
                        font-size: 25px;
                        font-weight: 600;
                        font-family: sans-serif;
                    }
                    #anno_link{
                        color: #225294;
                        text-decoration: none;
                        font-size: 25px;
                        font-weight: 600;
                    }
                    #date_view{
                        padding: 10px;
                        font-size: 20px;
                        font-weight: 300;
                        font-family: sans-serif;
                    }

                    #contain{
                        padding: 5px 10px;
                        justify-content: space-around;
                        margin-left: 45px;
                    }
                  </style>








          <!----        ./anouncemrnt-->
      
                   </div>
                </div>
            </div>
    <!----------./Main Content ---------------->

    
    <!----------./user common footer----- dont forget to include this for mobile phones views----------->
   @include('users.user_footer')

   <!----------.//user common foote ended here---------------->