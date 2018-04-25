<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>BKFA.com - Kho tài liệu khổng lồ Bách Khoa</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="library/images/logo/favicon.png">
    <!-- plugins css -->
    <base href="{{asset('')}}" > 
    <link rel="stylesheet" href="../library/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../library/bower_components/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="../library/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <!-- page plugins css -->
    <link rel="stylesheet" href="../library/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="../library/bower_components/nvd3/build/nv.d3.min.css" />
     <!-- page plugins css -->
    <link rel="stylesheet" href="../library/bower_components/datatables/media/css/jquery.dataTables.css" />
    <!-- core css -->
    <link href="library/css/ei-icon.css" rel="stylesheet">
    <link href="library/css/themify-icons.css" rel="stylesheet">
    <link href="library/css/font-awesome.min.css" rel="stylesheet">
    <link href="library/css/animate.min.css" rel="stylesheet">
    <link href="library/css/app.css" rel="stylesheet">
    @yield('style')
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
    <script src="library/js/vendor.js"></script>
    <!-- page plugins js -->
    <script src="../library/bower_components/bower-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="library/js/maps/jquery-jvectormap-us-aea.js"></script>
    <script src="../library/bower_components/d3/d3.min.js"></script>
    <script src="../library/bower_components/nvd3/build/nv.d3.min.js"></script>
    <script src="../library/bower_components/jquery.sparkline/index.js"></script>
    <script src="../library/bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="library/js/app.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>    
    <!-- page js -->
    <script src="library/js/dashboard/dashboard.js"></script>
    <!-- page plugins js -->
    <script src="../library/bower_components/datatables/media/js/jquery.dataTables.js"></script>

    <!-- page js -->
    <script src="library/js/table/data-table.js"></script>
    @yield('script')
</body>

</html>