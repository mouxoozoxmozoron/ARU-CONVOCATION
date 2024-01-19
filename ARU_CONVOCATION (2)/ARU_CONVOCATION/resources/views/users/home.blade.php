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

          <!--- anouncement row------->
          <div class="col-md-12">
            <div class="row">
                <div class="main-content-inside">
                    <div class="container">
                        
                        @if($announcement->isNotEmpty())
                        <h4 id="event_tittle" class =" text-align-center2 text-bold px-3">Anouncements</h4>
                        @endif
                        <div class="row">


                            <!------- col-md-4 -------->
                            @foreach($announcement as $announc)
                            <div class="col-md-4 my-2">
                                <div class="row title card-anouncement" style="width: 18rem">
                                    <h5 id="date_view" class="title" style = "background-color: #225294; ">
                                    {{$announc->publish_date}}
                                    </h5>
                                    <div class="col-md-12 px-0">
                                        <a class = "text-secondary"  href="{{$announc->url}}">
                                       {{$announc->tittle}}  </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>

                </div>
            </div>
          </div>


                  <!--- eVENTS/NEWS row------->
                  <div class="container-fluid px-0 my-3">
                    <div class="row">
                        <div class="container">
                                @if($available_news->isNotEmpty())
                                <h4 id="event_tittle" class =" text-align-center2 text-bold px-3">News And Event</h4>
                               @endif
                               <div class="container px-0">
                                <div class="row">
                                    <!------- col-md-4 -------->
                                    
                                    @foreach($available_news as $events)
                                    <div class="col-md-3 px-xs2 mb-5">
                                      <div class="card card-hover-secondary-2 h-100 shadow-md " style="width: 18rem;margin-left: 20px;">
                                       
                                        <img  class = "w-100 shadow-md img-fluid br-5"src="{{ asset('event_files/' . $events->file) }}" class="card-img-top" alt="...">
                                        <div class="col-md-12 mt-2 mb-1 text-bold " style = "padding-left: 10px;">
                                            <a id="event_link"  href={{"more_event/".$events->event_id}}>{{$events->tittle}}</a>
                                        </div>
                                        <div class="card-body">
                                            <p style="color: #212529"  class=" mb-1 text-bold">
                                                {{ implode(' ', array_slice(explode(' ', $events->description), 0, 10)) }}
                                                ......
                                                <a href={{"more_event/".$events->event_id}} >
                                                    <i class="fa fa-angle-double-right" aria-hidden="true"> Read More</i>
                                                   
                                                </a>                           
                                            </p>
                                            
                                         
                                        </div>
                                      </div> 
                                     
                                    </div>
                                      @endforeach
                                      {{$available_news->links()}}

                                    <!--- col-md-4 -------->
                               
                            </div>
                            </div>
                            
                       
                    </div>
                </div>
                </div>




                    <!--- eVENTS/NEWS WITH VIDEO row------->
                    <div class="container-fluid px-0 my-3">
                        <div class="row">
                                <div class="container-fluid">
                                    <div class="row">
                                        @foreach($video_event as $event_video)
                                        <div class="col-md-4 px-xs-2 mb-5">
                                          <div class="card card-hover-secondary-2 h-100 w-100 img-fluid" style="width: 29rem;"> 
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 w-100 m-r" style = "padding-left: -10px;">
                                                        {!! $event_video->video_url !!} 
                                                    </div>
                                                </div>
                                              
                                            </div>   
                                            <div class="col-md-12" style = "padding-left: 10px;">
                                                <a id="event_link"  href="">{{$event_video->tittle}}</a>
                                            </div>
                                            <div class="card-body">
                                              <p id="description" class="card-tex  text-bold">{{$event_video->description}}</p>
                                            </div>
                                          </div> 
                                        </div>
                                          @endforeach
                                          {{$video_event->links()}}
    
    
                                        <!--- col-md-4 -------->
                                    </div>
                            </div>
                        </div>
                    </div>

                  <style>
                    .m-r{
                        margin-left: -1px;
                    }
                    iframe{
                        width: 26rem!important;
                        padding-left: -4px;
                        border-radius: 5px;
                        margin-left: -2px;
                    }
                .fa, .fas {
                    font-size: 15px;
                    font-weight: 900;
                    color:#d55e1c;
                }
                    .br-5 {
                         border-radius: 5px;
                    }
                    .w-100 {
                        width: 100% !important;
                    }
                    .img-fluid, .img-thumbnail {
                        max-width: 100%;
                        height: auto;
                        }
                        img, svg {
                        vertical-align: middle;
                        }
                    
                    .text-bold {
                         font-family: Roboto-Bold, sans-serif;
                    }
                    .mt-2, .my-2 {
                     margin-top: .5rem !important;
                    }
                    .mb-1, .my-1 {
                        margin-bottom: .25rem !important;
                    }
                    .w-100 {
                        width: 100% !important;
                        }
                    .shadow-md {
                         box-shadow: 0 4px 8px 0 rgba(0, 0, 0, .12), 0 2px 4px 0 rgba(0, 0, 0, .08);
                        }
                    .text-secondary {
                            color: #225294 !important;
                            }
                             a{
                                text-decoration: none;
                                font-size: 14px;
                            }
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
                        font-size: 18px;
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