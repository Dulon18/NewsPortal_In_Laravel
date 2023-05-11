<!DOCTYPE html>
<html lang="en">

<!-- index-0.html  Tue, 07 Jan 2020 03:35:33 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>News &mdash; Portal</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ url('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ url('assets/modules/jqvmap/dist/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/modules/weather-icon/css/weather-icons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/modules/weather-icon/css/weather-icons-wind.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/modules/summernote/summernote-bs4.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/components.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="layout-4">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <!-- Start app top navbar -->
            @include('backend.fixed.nav')
            <!-- Start main left sidebar menu -->
            @include('backend.fixed.sidebar')
            <!-- Start app main Content -->
            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>
@include('backend.fixed.footer')
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ url('assets/bundles/lib.vendor.bundle.js') }}"></script>
    <script src="{{ url('js/CodiePie.js') }}"></script>

    <!-- JS Libraies -->
    <script src="{{ url('assets/modules/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ url('assets/modules/simple-weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ url('assets/modules/jqvmap/dist/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('assets/modules/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ url('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ url('assets/modules/chocolat/dist/js/jquery.chocolat.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ url('js/page/index-0.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ url('js/scripts.js') }}"></script>
    <script src="{{ url('js/custom.js') }}"></script>
</body>

<!-- index-0.html  Tue, 07 Jan 2020 03:35:42 GMT -->

</html>
