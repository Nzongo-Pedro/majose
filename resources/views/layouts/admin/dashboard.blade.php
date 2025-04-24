<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pt-br" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title> @yield('title') | {{env('APP_NAME')}} </title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/animation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard/css/style.css')}}">

    <!-- Font -->
    <link rel="stylesheet" href="{{asset('dashboard/font/fonts.css')}}">

    <!-- Icon -->
    <link rel="stylesheet" href="{{asset('dashboard/icon/style.css')}}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{asset('dashboard/images/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('dashboard/images/favicon.png')}}">

    @stack('css')
</head>

<body class="body">

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                @include('components.dashboard.leftMenu')
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    @include('components.dashboard.headerNavbar')
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    @yield('content')
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <script src="{{asset('dashboard/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/js/bootstrap-select.min.js')}}"></script>
    <script src="{{asset('dashboard/js/zoom.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/apexcharts.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-1.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-2.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-3.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-4.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-5.js')}}"></script>
    <script src="{{asset('dashboard/js/apexcharts/line-chart-6.js')}}"></script>
    <!-- <script src="{{asset('dashboard/js/switcher.js')}}"></script> -->
    <script src="{{asset('dashboard/js/theme-settings.js')}}"></script>
    <script src="{{asset('dashboard/js/main.js')}}"></script>

    @stack('js')

</body>

</html>