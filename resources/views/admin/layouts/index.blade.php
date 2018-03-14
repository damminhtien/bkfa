<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>BKFA.com - Kho tài liệu khổng lồ Bách Khoa</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">
    <!-- plugins css -->
    <base href="{{asset('')}}" > 
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../bower_components/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="../bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <!-- page plugins css -->
    <link rel="stylesheet" href="../bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="../bower_components/nvd3/build/nv.d3.min.css" />
    <!-- core css -->
    <link href="assets/css/ei-icon.css" rel="stylesheet">
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Side Nav START -->
            @include('admin.layouts.menu')
            <!-- Side Nav END -->
            <div class="page-container">
                <!-- Header START -->
                @include('admin.layouts.header')
                <!-- Header END -->
                <!-- theme configurator START -->
                @include('admin.layouts.config')
                <!-- theme configurator END -->
                <!-- Theme Toggle Button START -->
                <button class="theme-toggle btn btn-rounded btn-icon">
                    <i class="ti-palette"></i>
                </button>
                <!-- Theme Toggle Button END -->
                <!-- Page Container START -->
                <div class="main-content">
                    @yield('content')
                </div>
                <!-- Page Container END -->
            </div>
        </div>
    </div>
    <script src="assets/js/vendor.js"></script>
    <!-- page plugins js -->
    <script src="../bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/js/maps/jquery-jvectormap-us-aea.js"></script>
    <script src="../bower_components/d3/d3.min.js"></script>
    <script src="../bower_components/nvd3/build/nv.d3.min.js"></script>
    <script src="../bower_components/jquery.sparkline/index.js"></script>
    <script src="../bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <!-- page js -->
    <script src="assets/js/dashboard/dashboard.js"></script>
    @yield('script')
</body>

</html>