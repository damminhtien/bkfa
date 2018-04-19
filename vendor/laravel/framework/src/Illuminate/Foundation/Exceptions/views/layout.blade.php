<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>BKFA.COM | @yield('title')</title>
    <base href="{{asset('')}}">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Global Stylesheets -->
    <link href="library/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="library/css/font-awesome.min.css">
    <!--  css -->
    <link rel="stylesheet" href="css/pages/404.css">
</head>

<body>
<!--====================================================
                        PAGE CONTENT
======================================================-->
    <section class="hero-area">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="block text-center">
                        <h1 class="animated wow fadeInLeft" data-wow-delay="0.3s" data-wow-duration=".2s">@yield('code')</h1>
                        <p class="animated wow fadeInRight" data-wow-delay="0.5s" data-wow-duration=".5s">@yield('message')</p>
                        <div class="animated wow fadeInUp text-center" data-wow-delay="0.7s" data-wow-duration=".7s">
                            <span>
                        <a class="btn btn-general btn-blue" href="/" role="button">Quay trở về BKFA home</a>
                      </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Global Javascript -->
    <script src="library/js/jquery/jquery.min.js"></script>
    <script src="library/js/bootstrap/bootstrap.min.js"></script>
</body>

</html>