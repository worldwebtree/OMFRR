<!DOCTYPE html>

<html lang="en">
    <!-- head -->
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!-- Basic Page Needs
        ================================================== -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Specific Meta
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="MobileOptimized" content="320" />

        <!-- Titles
        ================================================== -->
        <title>{{ config('app.name') }}- Home</title>

        <!-- CSS ( Bootstrap + Owlcarouses + Fontawesome + Animate + Select2 + Custom Style )
        ======================================================================================= -->
        <link href="{{ asset('frontend/Styles/assets/css/base.css') }}" rel="stylesheet">
    </head>
    <!-- end head -->

    <!--body start-->
    <body>
        <!-- preloader -->
        <x-frontend-loader/>
        <!-- end preloader -->

        <!-- header -->
        <x-frontend-header/>

        <!-- =============================
        *
        *   Page Content Start
        *
        =============================== -->

        <!-- main content -->
        @yield('content')

        <!-- footer -->
        <x-frontend-footer/>

        <!-- Back to Top
        ================================================== -->
        <x-frontend-back-top-btn/>

        <!-- All The JS Files
        ================================================== -->
        <script src="{{ asset('frontend/Styles/assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/bootstrap/js/bootstrap-dropdownhover.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/owlcarousel/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/jquery-ui/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/jquery-ui/js/jquery.ui.touch-punch.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/library/datepicker/js/datepicker.js') }}"></script>
        <script src="{{ asset('frontend/Styles/assets/js/script.js') }}"></script>
    </body>

<!-- Mirrored from wporganic.com/html/weddingdir/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 02 Feb 2022 17:27:44 GMT -->
</html>