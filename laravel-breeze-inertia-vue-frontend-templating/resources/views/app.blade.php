<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

         <!-- Bootstrap CSS --> 
         <link rel="stylesheet" href="assets/css/bootstrap.min.css">
         <!-- Animate Min CSS -->
         <link rel="stylesheet" href="assets/css/animate.min.css">
         <!-- Flaticon CSS -->
         <link rel="stylesheet" href="assets/fonts/flaticon.css">
         <!-- Boxicons CSS -->
         <link rel="stylesheet" href="assets/css/boxicons.min.css">
         <!-- Magnific Popup CSS -->
         <link rel="stylesheet" href="assets/css/magnific-popup.css">
         <!-- Owl Carousel Min CSS --> 
         <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
         <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
         <!-- Nice Select Min CSS --> 
         <link rel="stylesheet" href="assets/css/nice-select.min.css">
         <!-- Meanmenu CSS -->
         <link rel="stylesheet" href="assets/css/meanmenu.css">
         <!-- Jquery Ui CSS -->
         <link rel="stylesheet" href="assets/css/jquery-ui.css">
         <!-- Style CSS -->
         <link rel="stylesheet" href="assets/css/style.css">
         <!-- Responsive CSS -->
         <link rel="stylesheet" href="assets/css/responsive.css">
         <!-- Theme Dark CSS -->
         <link rel="stylesheet" href="assets/css/theme-dark.css">
 
         <!-- Favicon -->
         <link rel="icon" type="image/png" href="assets/img/favicon.png">

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">

        <div class="preloader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="sk-cube-area">
                        <div class="sk-cube1 sk-cube"></div>
                        <div class="sk-cube2 sk-cube"></div>
                        <div class="sk-cube4 sk-cube"></div>
                        <div class="sk-cube3 sk-cube"></div>
                    </div>
                </div>
            </div>
        </div>
        
        @inertia

         <!-- Jquery Min JS -->
         <script src="assets/js/jquery.min.js"></script>
         <!-- Bootstrap Bundle Min JS -->
         <script src="assets/js/bootstrap.bundle.min.js"></script>
         <!-- Magnific Popup Min JS -->
         <script src="assets/js/jquery.magnific-popup.min.js"></script>
         <!-- Owl Carousel Min JS -->
         <script src="assets/js/owl.carousel.min.js"></script>
         <!-- Nice Select Min JS -->
         <script src="assets/js/jquery.nice-select.min.js"></script>
         <!-- Wow Min JS -->
         <script src="assets/js/wow.min.js"></script>
         <!-- Jquery Ui JS -->
         <script src="assets/js/jquery-ui.js"></script>
         <!-- Meanmenu JS -->
         <script src="assets/js/meanmenu.js"></script>
         <!-- Ajaxchimp Min JS -->
         <script src="assets/js/jquery.ajaxchimp.min.js"></script>
         <!-- Form Validator Min JS -->
         <script src="assets/js/form-validator.min.js"></script>
         <!-- Contact Form JS -->
         <script src="assets/js/contact-form-script.js"></script>
         <!-- Custom JS -->
         <script src="assets/js/custom.js"></script>
    </body>
</html>
