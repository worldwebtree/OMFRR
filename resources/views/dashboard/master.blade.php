<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - @yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{ asset('frontend/plugins/pg-calendar/css/pignose.calendar.min.css') }}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('frontend/plugins/chartist/css/chartist.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css') }}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    {{-- Overwritten Styles --}}
    <style>
        .nav-list-item > a{
            background-color: #ffffff !important;
        }
        .nav-list-item > a:hover{
            background-color: #F3F1FA !important;
        }
        .home-icon > i:hover {
            color: #7571f9 !important;
            transition: .2s ease;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.10/dist/sweetalert2.all.min.js"></script>
    <!-- Pushed Style Css from the Chile Views -->
    @stack('css')
</head>

<body>
    <!--*******************
        Preloader start
    ********************-->
    <x-dashboardPreloader/>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->

        <!--**********************************
            Nav header end
        ***********************************-->
        <x-dashboardLogoHeader/>
        <!--**********************************
            Header start
        ***********************************-->
        <x-dashboardHeader/>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <x-dashboardSidebar/>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @yield('content')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <x-dashboardFooter/>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('frontend/plugins/common/common.min.js') }}"></script>
    <script src="{{ asset('frontend/js/custom.min.js') }}"></script>
    <script src="{{ asset('frontend/js/settings.js') }}"></script>
    <script src="{{ asset('frontend/js/gleek.js') }}"></script>

    <!-- Datamap -->
    <script src="{{ asset('frontend/plugins/d3v3/index.js') }}"></script>

    <script src="{{ asset('frontend/js/dashboard/dashboard-1.js') }}"></script>

    {{-- CK editor CDN --}}
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>

    <script src="{{ asset('frontend/js/plugins-init/bootstrap-show-password.js') }}"></script>

    <!-- Pushed JS from the Chiled Views -->
    @stack('js')

</body>

</html>
