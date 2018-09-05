<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/arise/sport/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 03:28:07 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Arise Admin Dashboard">
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Themeforest, Bootstrap, C3 Graphs, D3 Graphs, NVD3 Graphs, Admin Skin, Black Admin Dashboard, Grey Admin Dashboard, Dark Admin Dashboard, Simple Admin Dashboard, Simple Admin Theme, Simple Bootstrap Dashboard, Invoice, Tasks, Profile">
    <meta name="author" content="Ramji">
    @php
        $path = Config::get('constants.ADMIN_TEMPLATE_URL');
    @endphp
    <link rel="shortcut icon" href="{{$path}}/img/fav.png">
    <title>Dashboard - Admin Dashboard - Arise Admin Panel, Arise Dashboard</title>
    <link href="{{$path}}/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="{{$path}}/css/main.css" rel="stylesheet" media="screen">
    <link href="{{$path}}/fonts/icomoon/icomoon.css" rel="stylesheet">
    <link href="{{$path}}/css/c3/c3.css" rel="stylesheet">
    <link href="{{$path}}/css/nvd3/nv.d3.css" rel="stylesheet">
    <link href="{{$path}}/css/horizontal-bar/chart.css" rel="stylesheet">
    <link href="{{$path}}/css/heatmap/cal-heatmap.css" rel="stylesheet">
    <link rel="stylesheet" href="{{$path}}/css/circliful/circliful.css">
    <link rel="stylesheet" href="{{$path}}/css/odometer.css">
    <!--[if lt IE 9]>
            <script src="{{$path}}/js/html5shiv.js"></script>
            <script src="{{$path}}/js/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    @include('admin.layouts.loading')
    @include('admin.layouts.header')
    @include('admin.layouts.navbar')

    @yield('main-content')

    <footer>Copyright Arise Admin <span>2016</span></footer>
    <script src="{{$path}}/js/jquery.js"></script>
    <script src="{{$path}}/js/bootstrap.min.js"></script>
    <script src="{{$path}}/js/sparkline/retina.js"></script>
    <script src="{{$path}}/js/sparkline/custom-sparkline.js"></script>
    <script src="{{$path}}/js/scrollup/jquery.scrollUp.js"></script>
    <script src="{{$path}}/js/d3/d3.v3.min.js"></script>
    <script src="{{$path}}/js/d3/d3.powergauge.js"></script>
    <script src="{{$path}}/js/c3/c3.min.js"></script>
    <script src="{{$path}}/js/c3/c3.custom.js"></script>
    <script src="{{$path}}/js/nvd3/nv.d3.js"></script>
    <script src="{{$path}}/js/nvd3/nv.d3.custom.boxPlotChart.js"></script>
    <script src="{{$path}}/js/horizontal-bar/horizBarChart.min.js"></script>
    <script src="{{$path}}/js/horizontal-bar/horizBarCustom.js"></script>
    <script src="{{$path}}/js/gaugemeter/gaugeMeter-2.0.0.min.js"></script>
    <script src="{{$path}}/js/gaugemeter/gaugemeter.custom.js"></script>
    <script src="{{$path}}/js/heatmap/cal-heatmap.min.js"></script>
    <script src="{{$path}}/js/heatmap/cal-heatmap.custom.js"></script>
    <script src="{{$path}}/js/odometer/odometer.min.js"></script>
    <script src="{{$path}}/js/odometer/custom-odometer.js"></script>
    <script src="{{$path}}/js/peity/peity.min.js"></script>
    <script src="{{$path}}/js/peity/custom-peity.js"></script>
    <script src="{{$path}}/js/circliful/circliful.min.js"></script>
    <script src="{{$path}}/js/circliful/circliful.custom.js"></script>
    <script src="{{$path}}/js/custom.js"></script>
</body>
<!-- Mirrored from bootstrap.gallery/arise/sport/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Sep 2018 03:29:11 GMT -->

</html>
