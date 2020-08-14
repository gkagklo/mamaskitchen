<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Mama's Kitchen</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/open-iconic-bootstrap.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">   
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/jquery.timepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">      
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


    <style>
            #map{
                height:400px;
                 width:100%;
            }

          .carousel-item {
            height: 100vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
          }
      
    </style>

    </head>


    <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
        <nav class="navbar navbar-expand-lg navbar-dark site_navbar bg-dark site-navbar-light" id="site-navbar">
          <div class="container">
            <a class="navbar-brand" href="/">Mama's Kitchen</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
    
            <div class="collapse navbar-collapse" id="site-nav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="#section-home" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="#section-about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#section-menu" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="#section-events" class="nav-link">Events</a></li>
                <li class="nav-item"><a href="#section-gallery" class="nav-link">Gallery</a></li>
                <li class="nav-item"><a href="#section-contact" class="nav-link">Contact</a></li>
                <li class="nav-item"><a  href="#" data-toggle="modal" data-target="#reservationModal" class="nav-link">Reservation</a></li>
              
              </ul>
            </div>
          </div>
        </nav>
        <!-- END nav -->


      <section class="site-section" id="section-home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              @foreach($sliders as $key => $slider)
            <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" @if($key==0) class="active" @endif></li>
            @endforeach    
          </ol>
          <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            @foreach($sliders as $key => $slider)
          <div class="carousel-item @if($key==0) active @endif" style="background-image: url('{{asset('uploads/slider/'.$slider->image)}}')">
              <div class="carousel-caption d-none d-md-block">
                <h2 class="display-4"> {{ strtoupper($slider->title) }} </h2>
                <p class="lead" style="color:black"> {{ ucfirst($slider->sub_title) }} </p>
              </div>
            </div>
            @endforeach        
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
      </section>

  
        <section class="site-section" id="section-about">
          <div class="container">
            <div class="row">
              <div class="col-md-5 site-animate mb-5">
                <h4 class="site-sub-title">Our Story</h4>
                <h2 class="site-primary-title display-4">Welcome</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>    
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-6 site-animate img" data-animate-effect="fadeInRight">
                <img src="{{asset('frontend/images/about_img_1.jpg')}}" alt="Free Template by colorlib.com" class="img-fluid">
              </div>
            </div>
          </div>
        </section>
        <!-- END section -->
   
        <hr>
        
        <section class="site-section" id="section-menu">
            <div class="container">
              <div class="row">
                <div class="col-md-12 text-center mb-5 site-animate">
                    <h4 class="site-sub-title">Our menu</h4>
                  <h2 class="display-4">Have a look to our menu</h2>
                  <div class="row justify-content-center">
                    <div class="col-md-7">
                      <p class="lead"></p>
                    </div>
                  </div>
                </div>
      
                <div class="col-md-12 text-center"> 
                  <ul class="nav site-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">        
                        @foreach($categories as $category)
                          <li class="nav-item site-animate">
                            <a class="nav-link" id="pills-breakfast-tab" data-toggle="pill" href="#{{$category->slug}}" role="tab" aria-controls="pills-breakfast" aria-selected="false"> {{ $category->name }} <span>{{ $category->items->count() }}</span> </a>
                          </li>
                         @endforeach
                  </ul>      
                  <div class="tab-content text-left">
                      @foreach($categories as $category)
                    <div class="tab-pane fade" id="{{$category->slug}}" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                        @foreach($category->items as $item) 
                      <div class="row">
                        <div class="col-md-6 site-animate">
                          <div class="media menu-item">
                           <a href="{{asset('uploads/item/'.$item->image)}}" target="_blank"> <img class="mr-3"  src="{{asset('uploads/item/'.$item->image)}}" class="img-fluid" alt="Free Template by colorlib.com" > </a>
                            <div class="media-body">
                              <h5 class="mt-0"> {{ $item->name }} </h5>
                              <p> {{ $item->description }} </p>
                            <h6 class="text-primary menu-price"> {{ $item->price }}&euro; </h6>
                            </div>
                          </div>     
                        </div>          
                      </div>
                      @endforeach
                    </div>
                     @endforeach
                  </div>     
                </div>
              </div>
            </div>
          </section>
          <!-- END section -->


   
        <section class="site-section bg-light" id="section-events">
          <div class="container">
            
            <div class="row">
              <div class="col-md-12 text-center mb-5 site-animate">
                <h4 class="site-sub-title">Our events</h4>
                <h2 class="display-4">Have a look to our events</h2>
                <div class="row justify-content-center">
                  <div class="col-md-7">
                    <p class="lead"></p>
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="owl-carousel site-owl">
            @foreach($events as $event)
                  <div class="item">
                    <div class="media d-block mb-4 text-center site-media site-animate border-0">
                      <img src="{{asset('uploads/event/'.$event->image)}}" alt="Have a look to our events" class="img-fluid" style="width:400px;height:300px;">
                      <div class="media-body p-md-5 p-4">
                        <h5 class="text-primary"> {{ $event->title }} </h5>
                        <h5 class="mt-0 h4"> {{ $event->description }} </h5>
                        <p class="mb-4"> {{ $event->event_date }} {{ $event->event_time }}  </p>
                      </div>
                    </div>
                  </div>
            @endforeach
          
                </div>
              </div>
              
            </div>
          </div>
        </section>
        <!-- END section -->
     

    
        <section class="site-section" id="section-gallery">
          <div class="container">
            <div class="row site-custom-gutters">
    
              <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Have a look to our place</h2>
                <div class="row justify-content-center">
                  <div class="col-md-7">
                    <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
    @foreach($galleries as $gallery)
              <div class="col-md-4 site-animate">
                <a href="{{asset('uploads/gallery/'.$gallery->image)}}" class="site-thumbnail image-popup">
                  <img src="{{asset('uploads/gallery/'.$gallery->image)}}" alt="Have a look to our place" class="img-fluid">
                </a>
              </div>
    @endforeach
            </div>
          </div>
        </section>
        <!-- END section -->
    
        <section class="site-section bg-light" id="section-contact">
          <div class="container">
            <div class="row">
    
              <div class="col-md-12 text-center mb-5 site-animate">
                <h2 class="display-4">Get In Touch</h2>
                <div class="row justify-content-center">
                  <div class="col-md-7">
                    <p class="lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                </div>
              </div>
    
              <div class="col-md-7 mb-5 site-animate">
                <form class="contact-form" method="post" action="{{route('contact.send')}}">
                    {!! csrf_field() !!}
                  <div class="form-group">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" class="form-control"  id="name" name="name" placeholder="Name" required>
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                        <label for="subject" class="sr-only">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                      </div>
                  <div class="form-group">
                    <label for="message" class="sr-only">Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Write your message" required ></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg" value="Send Message">
                  </div>
                </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-4 site-animate">
                <p><img src="images/about_img_1.jpg" alt="" class="img-fluid"></p>
                <p class="text-black">
                  Address: <br> 121 Street, Melbourne Victoria <br> 3000 Australia <br> <br>
                  Phone: <br> 90 987 65 44 <br> <br>
                  Email: <br> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                </p>
    
              </div>
              
            </div>
          </div>
        </section>
        <div id="map"></div>
        <!-- END section -->
        
    
        <footer class="site-footer site-bg-dark site-section">
          <div class="container">
            <div class="row mb-5">
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-4 site-animate">
                    <h2 class="site-heading-2">About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, similique, delectus blanditiis odit expedita amet. Sed labore ipsum vel dolore, quis, culpa et magni autem sequi facere eos tenetur, ex?</p>
                  </div>
                  <div class="col-md-1"></div>
                  <div class="col-md-3 site-animate">
                    <div class="site-footer-widget mb-4">
                      <h2 class="site-heading-2">The Restaurant</h2>
                      <ul class="list-unstyled">
                        <li><a href="#section-about" class="py-2 d-block">About Us</a></li>
                        <li><a href="#section-menu" class="py-2 d-block">Menu</a></li>
                        <li><a href="#section-events" class="py-2 d-block">Events</a></li>
                        <li><a href="#section-gallery" class="py-2 d-block">Gallery</a></li>
                        <li><a href="#section-contact" class="py-2 d-block">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-2 site-animate">
                     <div class="site-footer-widget mb-4">
                      <h2 class="site-heading-2">Categories</h2>
                      <ul class="list-unstyled">
                        @foreach($categories as $category)
                      <li><a href="#section-menu" class="py-2 d-block"> {{ $category->name }} </a></li>
                      @endforeach
                      </ul>
                    </div>
                  </div>
         
                </div>
              </div>
             
            </div>
            <div class="row site-animate">
               <div class="col-md-12 text-center">
                <div class="site-footer-widget mb-4">
                  <ul class="site-footer-social list-unstyled ">
                    <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                    <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                    <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <p>&copy;
    Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by Gkagklo</p>
              </div>
            </div>
          </div>
        </footer>
    
        
        
    
        <!-- Modal -->
        <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="bg-image" style="background-image: url(frontend/images/reservation_1.jpg);"></div>
                  </div>
                  <div class="col-lg-12 p-5">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <small>CLOSE </small><span aria-hidden="true">&times;</span>
                    </button>
                    <h1 class="mb-4">Reserve A Table</h1>  
                    <form class="reservation-form" method="post" action="{{ route('reservation.reserve') }}">
                        {!! csrf_field() !!}
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <label for="name">Name</label>
                          <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-md-6 form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                              </div>
                      </div>
                      <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="num_people">Guests</label>
                                <input type="number" class="form-control" id="num_people" name="num_people" min="0" required>
                            </div>
                        <div class="col-md-6 form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" id="phone" name="phone" required>
                        </div>
                      </div>
    
                      <div class="row">
                            <div class="col-md-6 form-group">
                              <label for="date">Date</label>
                              <input type="date"  class="form-control"  name="date" required>
                            </div>
                            <div class="col-md-6 form-group">
                              <label for="time">Time</label>
                              <input type="time"  class="form-control"  name="time" required>
                            </div>
                          </div>
    
                      <div class="row">
                        <div class="col-md-12 form-group">
                          <label for="message">Message</label>
                          <textarea class="form-control" id="message"  name="message" cols="30" rows="7" ></textarea>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-12 form-group">
                          <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                        </div>
                      </div>
    
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
    
        <!-- END Modal -->

        <!-- loader -->
        <div id="site-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
    
        <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}" ></script>
        <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('frontend/js/google-map.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

  
    <script>
        function initMap(){

            // Map options
            var options = {
                zoom:12,
                center:{lat:40.64361,lng:22.93086}
            }

            // New map
            var map = new google.maps.Map(document.getElementById('map'),options);

            // Add a marker
            var marker = new google.maps.Marker({
                position:{lat:40.64361,lng:22.93086},
                map:map
            });
        }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI7InBGtLRBUut_eBRQjxqkwxC794KWCM&callback=initMap">
    </script>
 
 {!! Toastr::message() !!} 
    </body>
</html>