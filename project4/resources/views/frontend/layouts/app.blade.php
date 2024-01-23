<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Harmic - Organic Food HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/images/favicon.ico')}}" />

    <!-- CSS
    ============================================ -->

    <!-- Vendor CSS (Contain Bootstrap, Icon Fonts) -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/vendor/Pe-icon-7-stroke.css')}}" />

    <!-- Plugin CSS (Global Plugins Files) -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/plugins/magnific-popup.min.css')}}" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

</head>

<body>

    <div class="main-wrapper">

        <!-- Begin Main Header Area -->
        @include('frontend.layouts.header')
        <!-- Main Header Area End Here -->

        <!-- Begin Slider Area -->
                @yield('content')
        <!-- Begin Footer Area -->
        
        @include('frontend.layouts.footer')
        <!-- Footer Area End Here -->

 
</body>

</html>