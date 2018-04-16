<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BKFA.COM | @yield('title')</title>
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Global Stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="css/animate/animate.min.css"> -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/news.css">
    <link rel="stylesheet" href="css/dstailieu.css">
    <link rel="stylesheet" href="css/chitiettailieu.css">
    <link rel="stylesheet" href="css/services.css">
</head>

<body id="page-top">
    @include('pages.layouts.header')
    @include('pages.layouts.login')

    @yield('content')

    @include('pages.layouts.footer')

    <!--Global JavaScript -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/wow/wow.min.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
    function click_vi() {
        document.getElementById("language").innerHTML = "<img src='img/vi.png' alt='Việt Nam' title='Việt Nam'> Việt Nam";
    }

    function click_en() {
        document.getElementById("language").innerHTML = "<img src='img/en.png' alt='English' title='English'> English";
    }
    </script>
    @yield('script')
</body>

</html>