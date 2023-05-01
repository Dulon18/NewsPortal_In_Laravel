<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <!--

    Template 2108 Dashboard

 http://www.tooplate.com/view/2108-dashboard

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="{{ url('backend/css/fontawesome.min.css') }}">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="{{ url('backend/css/fullcalendar.min.css') }}">
    <!-- https://fullcalendar.io/ -->
    <link rel="stylesheet" href="{{ url('backend/css/bootstrap.min.css') }}">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="{{ url('backend/css/tooplate.css') }}">
    @yield('links')
</head>

<body id="reportsPage">
    <div class="" id="home">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @include('backend.fixed.nav')
                </div>
            </div>
            <!-- row -->
            <div class="row tm-content-row tm-mt-big">
                @yield('content')
            </div>
            @include('backend.fixed.footer')
        </div>
    </div>
    <script src="{{ url('backend/js/jquery-3.3.1.min.js') }}"></script>
    <!-- https://jquery.com/download/ -->
    <script src="{{ url('backend/js/moment.min.js') }}"></script>
    <!-- https://momentjs.com/ -->
    <script src="{{ url('backend/js/utils.js') }}"></script>
    <script src="{{ url('backend/js/Chart.min.js') }}"></script>
    <!-- http://www.chartjs.org/docs/latest/ -->
    <script src="{{ url('backend/js/fullcalendar.min.js') }}"></script>
    <!-- https://fullcalendar.io/ -->
    <script src="{{ url('backend/js/bootstrap.min.js') }}"></script>
    <!-- https://getbootstrap.com/ -->
    <script src="{{ url('backend/js/tooplate-scripts.js') }}"></script>
    <script>
        let ctxLine,
            ctxBar,
            ctxPie,
            optionsLine,
            optionsBar,
            optionsPie,
            configLine,
            configBar,
            configPie,
            lineChart;
        barChart, pieChart;
        // DOM is ready
        $(function() {
            updateChartOptions();
            drawLineChart(); // Line Chart
            drawBarChart(); // Bar Chart
            drawPieChart(); // Pie Chart
            drawCalendar(); // Calendar

            $(window).resize(function() {
                updateChartOptions();
                updateLineChart();
                updateBarChart();
                reloadPage();
            });
        })
    </script>
    @yield('scripts')
</body>

</html>
