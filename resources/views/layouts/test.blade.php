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
                <div class="logo"><a href="https://caworksite.com/Weedulu/"><img src="https://caworksite.com/Weedulu/images/logo.png" alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->
                <form class="header-search">
                    <input type="text" placeholder="I’m searching for ...">
                    <button type="submit"><i class="pe-7s-search"></i></button>
                </form>
            </div> <!-- end .left -->
            <div class="navigation clearfix col-lg-9 col-lg-push-3 text-right" style="left:0%">
                <nav class="main-nav">
                    <ul class="list-unstyled ">
                        <li class="">
                            <a href="https://caworksite.com/Weedulu/index.php/brand">Brands</a>
                        </li>
                        <!--<li class="menu-item-has-children">
                            <a href="index.html">About Us</a>
                            <ul>
                                <li><a href="how-it-works.html">How It Works</a></li>
                                <li><a href="blog.html">Blog</a></li>                               
                            </ul>
                        </li> -->
                         <li class="">
                            <a href="https://caworksite.com/Weedulu/index.php/home/alldispensary">Maps</a>                          
                        </li> 
                        <li class="">
                            <a href="https://caworksite.com/Weedulu/index.php/mylisting/dashboard" class="">My Account</a>                      
                        </li>
                        <!--<li class="">
                            <a href="list.html">Shop</a>                            
                        </li>-->
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
   @yield('content')


        <footer class="footer">
        <div class="container inner">                   
                    <div class="row">
                        <div class="col-sm-6 col-md-5"> 
                                <div class="logo"><a href="index.html"><img src="images/logo-dark.png" alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->
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
