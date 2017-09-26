<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <header class="header fixed clearfix">
        <div class="container">
        <div class="row">
            <div class="left col-sm-3">
                <div class="logo"><a href="https://caworksite.com/Weedulu/"><img src="https://caworksite.com/Weedulu/images/logo.png" alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->
                <form class="header-search">
                    <input placeholder="I’m searching for ..." type="text">
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
            
        </header>
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                  
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
