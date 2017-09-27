<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

        
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

<body>

<header class="header fixed clearfix">
        <div class="container">
        <div class="row">
            <div class="left col-sm-3">
                <div class="logo"><a href=" {{ url('/') }}"><img src=" {{ asset('user/images/logo.png') }} " alt="ExploreCity" class="img-responsive"></a></div> <!-- end .logo -->
                <form class="header-search">
                    <input placeholder="I’m searching for ..." type="text">
                    <button type="submit"><i class="pe-7s-search"></i></button>
                </form>
            </div> <!-- end .left -->
            <div class="navigation clearfix col-lg-9 col-lg-push-3 text-right" style="left:0%">
             @include('layouts/navigation')
               
            </div> <!-- end .navigation --> 
            </div>
            </div>
            
        </header>
        
    <div id="app">
      

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
