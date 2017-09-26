<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>test</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<link href="{{ asset('/user/css/bootstrap.min.css') }}" rel="stylesheet">


<link href="{{ asset('/user/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('/user/css/owl.theme.default.css') }}" rel="stylesheet">
<link href="{{ asset('/user/css/sweetalert.css') }}" rel="stylesheet">
<link href="{{ asset('/user/css/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('/user/scripts/Nivo-Lightbox/nivo-lightbox.css') }}" rel="stylesheet">

<link href="{{ asset('/user/scripts/Nivo-Lightbox/themes/default/default.css') }}" rel="stylesheet">

<link href="{{ asset('/user/css/jquery.nouislider.min.css') }}" rel="stylesheet">

<link href="{{ asset('/user/css/bootstrap-select.min.css') }}" rel="stylesheet">
<link href="{{ asset('/user/css/style.css') }}" rel="stylesheet">


</head>
<body class="home">     
        
        <header class="header fixed clearfix">
        <div class="container">
        <div class="row">
            <div class="left col-sm-3">
                <div class="logo"><a href="{{ url('/') }}"><img src=" {{ asset('/user/images/logo.png') }}" alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->


                <form class="header-search">
                    <input type="text" placeholder="I’m searching for ...">
                    <button type="submit"><i class="pe-7s-search"></i></button>
                </form>


            </div> <!-- end .left -->
            <div class="navigation clearfix col-lg-9 col-lg-push-3 text-right" style="left:0%">
                <nav class="main-nav">
                    <ul class="list-unstyled ">


                    @if (Auth::guest())
                            <li> <a href="#">Brands</a></li>
                            <li> <a href="#">Maps</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif


                    </ul>
                </nav> <!-- end .main-nav -->
                <a href="" class="responsive-menu-open"><i class="fa fa-bars"></i></a>
            </div> <!-- end .navigation --> 
            </div>
            </div>
            
        </header> <!-- end .header -->
<div class="responsive-menu">
            <a href="" class="responsive-menu-close"><i class="fa fa-times"></i></a>
            <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
        </div> <!-- end .responsive-menu -->

        <div class="section large transparent dark text-center searchdispensaries" style="background-image: url('images/background01.jpg');">
            <div class="inner">
                <div class="container "> 
                    <form method="post" action="https://caworksite.com/Weedulu/" name="locationform">
                        <div class="row">
                            <div class="col-sm-7 col-lg-5 col-sm-push-3 col-lg-push-3" style="margin-top: -100px">
                                <div class="form-group row">
                                <div class="col-xs-5"><i class="fa fa-crosshairs" aria-hidden="true" title="Current Location"></i> 
                                <input type="text" placeholder="Location" id="mylocation" class="" name="place">
                                <input type="hidden" id="myaddress" class="" name="address"></div>
                                <div class="col-xs-7"><input type="text" placeholder="Search by Brand" class=""></div>
                                </div> <!-- end .form-group -->
                            </div> <!-- end .col-sm-4 -->   
                            
                             
                        </div> <!-- end .row -->
                        <!--<button type="submit" class="button">Search places</button>-->
<h3 style="margin:-3% 17% 1% 3%;color:#fff;">Los Angeles, CA, USA</h3><div style="display:none"><div id="map_canvas" style="width:100%; height:450px;"></div></div>                 
                    </form>

                </div> <!-- end .container -->
 
            </div> <!-- end .inner -->
        </div> <!-- end .section -->

        <div class="section light">
            <div class="inner">
                <div class="container">
                    <h2 class="text-center">FEATURED DISPENSARIES</h2>
                    <div class="row">
                    <div class="homecategoryblock">
                                        <div class="col-xs-12">
                    
                            <a href="index.php/home/listdetails/Los Angeles/21" class="category-box" style="background-image: url('https://caworksite.com/Weedulu/images/map.jpg');"><div class="rating">0</div>
                                <div class="inner">                             
                                    <img src="{{ asset('/user/images/marker-02.png') }}" alt="icon">
                                    <span class="number"><img src="https://caworksite.com/Weedulu/uploads/5495new.jpeg" alt="icon"></span>                                  
                                    <span class="location">Los Angeles</span>
                                    <span class="title">Nameless Genetics</span>
                                                                        <span class="chat"><span title="Not Available For Chat"><img src="https://caworksite.com/Weedulu/images/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                                    </div> <!-- end .inner -->
                            </a> <!-- end .category-box -->
                        </div> <!-- end .col-md-3 -->
                                               <!--  </div> -->
                        </div> <!-- end .row -->
                                            <div class="text-center viewallbtn">
                        <a href="index.php/home/allcategory/Los Angeles" class="button">view all</a>
                    </div> <!-- end .text-center -->
                </div> <!-- end .container -->
            </div> <!-- end .inner -->
        </div> <!-- end .section -->
        
    <div class="section white">
        <div class="inner homedispensaries-stories">
          <div class="container">
            <h2 class="text-center">OTHER DISPENSARIES</h2>    
            <div class="row">
            <div class="homecategoryblock">
                        <div class="col-xs-12"> 
            <a href="index.php/home/listdetails/Los Angeles/22" class="category-box" style="background-image: url('https://caworksite.com/Weedulu/images/map.jpg');"><div class="rating">0</div>
                        <div class="inner">                             
                            <img src="https://caworksite.com/Weedulu/images/marker-02.png" alt="icon">
                            <span class="number"><img src="https://caworksite.com/Weedulu/uploads/5495new.jpeg" alt="icon"></span>                                  
                            <span class="location">Los Angeles</span>
                            <span class="title">Gfarmalabs</span>
                                                        <span class="chat"><span title="Not Available For Chat"><img src="https://caworksite.com/Weedulu/images/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                    </div> <!-- end .inner -->
                    </a> <!-- end .category-box -->
            </div> <!-- end .col-md-3 -->
                        <div class="col-xs-12"> 
            <a href="index.php/home/listdetails/Los Angeles/23" class="category-box" style="background-image: url('https://caworksite.com/Weedulu/images/map.jpg');"><div class="rating">0</div>
                        <div class="inner">                             
                            <img src="https://caworksite.com/Weedulu/images/marker-02.png" alt="icon">
                            <span class="number"><img src="https://caworksite.com/Weedulu/uploads/5495new.jpeg" alt="icon"></span>                                  
                            <span class="location">Los Angeles</span>
                            <span class="title">Andretti OG</span>
                                                        <span class="chat"><span title="Not Available For Chat"><img src="https://caworksite.com/Weedulu/images/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                    </div> <!-- end .inner -->
                    </a> <!-- end .category-box -->
            </div> <!-- end .col-md-3 -->
                        <div class="col-xs-12"> 
            <a href="index.php/home/listdetails/Los Angeles/24" class="category-box" style="background-image: url('https://caworksite.com/Weedulu/images/map.jpg');"><div class="rating">0</div>
                        <div class="inner">                             
                            <img src="https://caworksite.com/Weedulu/images/marker-02.png" alt="icon">
                            <span class="number"><img src="https://caworksite.com/Weedulu/images/default_profile.png" alt="icon"></span>                                    
                            <span class="location">Los Angeles</span>
                            <span class="title">HGH Extractions</span>
                                                        <span class="chat"><span title="Not Available For Chat"><img src="https://caworksite.com/Weedulu/images/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                    </div> <!-- end .inner -->
                    </a> <!-- end .category-box -->
            </div> <!-- end .col-md-3 -->
                        <div class="col-xs-12"> 
            <a href="index.php/home/listdetails/Los Angeles/25" class="category-box" style="background-image: url('https://caworksite.com/Weedulu/images/map.jpg');"><div class="rating">0</div>
                        <div class="inner">                             
                            <img src="https://caworksite.com/Weedulu/images/marker-02.png" alt="icon">
                            <span class="number"><img src="https://caworksite.com/Weedulu/images/default_profile.png" alt="icon"></span>                                    
                            <span class="location">Los Angeles</span>
                            <span class="title">Cookies Cartridge</span>
                                                        <span class="chat"><span title="Not Available For Chat"><img src="https://caworksite.com/Weedulu/images/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                    </div> <!-- end .inner -->
                    </a> <!-- end .category-box -->
            </div> <!-- end .col-md-3 -->
                        <div class="col-xs-12"> 
            <a href="index.php/home/listdetails/Los Angeles/26" class="category-box" style="background-image: url('https://caworksite.com/Weedulu/images/map.jpg');"><div class="rating">0</div>
                        <div class="inner">                             
                            <img src="https://caworksite.com/Weedulu/images/marker-02.png" alt="icon">
                            <span class="number"><img src="https://caworksite.com/Weedulu/uploads/1576download (10).jpg" alt="icon"></span>                                 
                            <span class="location">Los Angeles</span>
                            <span class="title">Trap Juice</span>
                                                        <span class="chat"><span title="Not Available For Chat"><img src="https://caworksite.com/Weedulu/images/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                    </div> <!-- end .inner -->
                    </a> <!-- end .category-box -->
            </div> <!-- end .col-md-3 -->
            
             </div> <!-- end homecategoryblock -->
            </div> <!-- end .row -->
            <br>
             <div class="row">
            <div class="homecategoryblock">

                            <div class="col-xs-12"> 
            <a href="index.php/home/listdetails/Los Angeles/27" class="category-box" style="background-image: url('https://caworksite.com/Weedulu/images/map.jpg');"><div class="rating">0</div>
                        <div class="inner">                             
                            <img src="https://caworksite.com/Weedulu/images/marker-02.png" alt="icon">
                            <span class="number"><img src="https://caworksite.com/Weedulu/uploads/1576download (10).jpg" alt="icon"></span>                                 
                            <span class="location">Los Angeles</span>
                            <span class="title">Apothecanna</span>
                                                        <span class="chat"><span title="Not Available For Chat"><img src="https://caworksite.com/Weedulu/images/chat-unavailable.png" alt="Chat"> Offline</span></span>
                                                    </div> <!-- end .inner -->
                    </a> <!-- end .category-box -->
            </div> <!-- end .col-md-3 -->
                        </div> <!-- end homecategoryblock -->
            </div> <!-- end .row -->

        </div> <!-- end .container -->
    </div> <!-- end .inner -->
</div> <!-- end .section -->
        
        <div class="section light lastsection">
            <div class="inner">
                <div class="container">
                <div class="row text-center">
                <div class="col-sm-6"><a href=""><img src="{{ asset('/user/images/youtube-icon.png') }}"> WEEDULU.TV ON YOUTUBE CHANNEL</a></div>
                <div class="col-sm-6"><a href="therapeutic-cannibis.html"><img src="{{ asset('/user/images/therapeutic.png') }}"> THERAPEUTIC USES OF CANNIBIS</a></div>
                </div>
                
                </div>
                </div>
                </div>
        </div>

        <footer class="footer">
        <div class="container inner">                   
                    <div class="row">
                        <div class="col-sm-6 col-md-5"> 
                                <div class="logo"><a href="index.html"><img src="{{ asset('/user/images/logo-dark.png') }}" alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->
                                <p class="text-justify">Dictumst porta turpis donec interdum viverra lacus platea sem ut, ultrices laoreet et Dictumst porta turpis donec interdum viverra lacus  platea sem ut, ultrices laoreet etDictumst porta turpis donec interdum viverra lacus platea sem ut, ultrices laoreet et Dictumst porta turpis donec interdum viverra lacus  platea sem ut, ultrices laoreet. </p>                             
                              <!-- end .services -->
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-2 col-sm-6">
                            <h3>Navigation</h3><ul class="footer-links"> 
                                                        <li><a href="https://caworksite.com/Weedulu/"> DISPENSARIES</a></li>
                            <!-- <li><a href="#"> DOCTORS</a></li>
                            <li><a href="#"> PROMO VIDEO</a></li> -->
                            <li><a href="https://caworksite.com/Weedulu/index.php/brand"> BRANDS</a></li>
                            <!-- <li><a href="#"> THERAPEUTIC USES OF CANNIBIS </a></li>
                            <li><a href="#"> WEEDULU PROMO AD SPOT</a></li> --></ul>
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-2 col-sm-6">
                            <h3>Connect</h3><ul class="footer-links"> 
                            <li><a href="#" target="_blank"> FACEBOOK</a></li>
                            <li><a href="#" target="_blank"> INSTAGRAM</a></li>
                            <li><a href="#" target="_blank"> TWITTER</a></li>
                            <li><a href="#" target="_blank"> GOOGLE+</a></li>
                            <li><a href="#" target="_blank"> YOUTUBE</a></li></ul>
                        </div> <!-- end .col-sm-4 -->
                        <div class="col-md-3 col-sm-6 mobileapplinks">
                            <h3>Mobile Apps</h3>
                            <ul class="footer-links">
                            <li><a href=""><i class="fa fa-apple"></i> Download for IOS</a></li>
                            <li><a href=""><i class="fa fa-android"></i> Download for ANDROID</a></li>
                            </ul>
                        </div> <!-- end .col-sm-4 -->
                    </div> <!-- end .row -->
                </div> 
            <div class="bottom">Copyright &copy; 2017, Weedulu. All Rights Reserved</div>
        </footer> <!-- end .footer -->

        <script type="text/javascript"  src="{{ asset('/user/js/jquery-3.1.0.min.js') }}"></script>
                <script type="text/javascript"  src="{{ asset('/user/js/bootstrap.min.js') }}"></script>

                        <script type="text/javascript"  src="{{ asset('/user/js/owl.carousel.min.js') }}"></script>
                        <script type="text/javascript" src="{{ asset('/user/js/richmarker.js') }}"></script>
                         <script type="text/javascript" src="{{ asset('/user/js/countdown.js') }}"></script>
                                                         <script type="text/javascript"  src="{{ asset('/user/js/sweetalert.min.js') }}"></script>

                          <script type="text/javascript" src="{{ asset('/user/scripts/Nivo-Lightbox/nivo-lightbox.min.js') }}"></script>
                                                                  <script type="text/javascript"  src="{{ asset('/user/js/jquery.nouislider.all.min.js') }}"></script>

                           <script type="text/javascript" src="{{ asset('/user/js/bootstrap-select.min.js') }}"></script>
                            <script type="text/javascript" src="{{ asset('/user/js/jquery.nicescroll.min.js') }}"></script>
                                         <script type="text/javascript"  src="{{ asset('/user/js/scripts.js') }}"></script>

                           
<script src='https://www.google.com/recaptcha/api.js'></script>
        <script type="text/javascript" src="http://www.youtube.com/player_api"></script>

        </body></html>
