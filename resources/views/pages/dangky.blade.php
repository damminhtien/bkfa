<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no">
    <title>Đăng ký tài khoản BKFA.com - Kho tài liệu khổng lồ Bách Khoa</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="library/images/logo/favicon.png">

    <!-- plugins css -->
    <link rel="stylesheet" href="library/bower_components/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="library/bower_components/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="library/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- core css -->
    <link href="library/css/ei-icon.css" rel="stylesheet">
    <link href="library/css/themify-icons.css" rel="stylesheet">
    <link href="library/css/font-awesome.min.css" rel="stylesheet">
    <link href="library/css/animate.min.css" rel="stylesheet">
    <link href="library/css/app.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <div class="authentication">
            <div class="sign-up">
                <div class="row no-mrg-horizon">
                    <div class="col-md-6 no-pdd-horizon hidden-xs hidden-sm">
                        <div class="full-height bg" style="background-image: url('library/images/others/img-31.jpg')">
                            <div class="vertical-align full-height pdd-horizon-70">
                                <div class="table-cell">
                                    <div class="row">
                                        <div class="mr-auto ml-auto col-md-10">
                                            <div class="text-right">
                                                <img class="img-responsive mrg-left-auto mrg-btm-15" src="assets/images/logo/logo-white.png" alt="" width="170">
                                                <p class="text-white lead text-opacity lh-1-7">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white no-pdd-horizon">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="full-height height-100">
                                    <div class="vertical-align full-height pdd-horizon-70">
                                        <div class="table-cell">
                                            <div class="pdd-horizon-15">
                                                <h1 class="mrg-btm-30">Đăng ký tài khoản BKFA.com</h1>
                                                @if(count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    @foreach($errors->all() as $err)
                                                    {{$err}}<br>
                                                    @endforeach()
                                                </div>
                                                @endif

                                                @if(session('thongbao'))
                                                <div class="alert alert-success"> 
                                                    {{session('thongbao')}}
                                                </div>
                                                @endif
                                                <form action="dangky" method="POST">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Họ Tên</label>
                                                        <input type="text" name="ten" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Địa chỉ E-mail</label>
                                                        <input type="email" name="email" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Mật khẩu</label>
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="text-normal text-dark">Nhập lại mật khẩu</label>
                                                        <input type="password" class="form-control" name="password2" placeholder="Password">
                                                    </div>
                                                    <div class="checkbox font-size-13 mrg-btm-20">
                                                        <input id="agreement" name="agreement" type="checkbox" checked="">
                                                        <label for="agreement">Nhớ tài khoản</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-block border-radius-6">Đăng ký</button>
                                                    </div>
                                                </form>
                                                <p>Bạn đã có tài khoản? <a href="dangnhap">Đăng nhập</a></p>
                                                <hr>
                                                <small>Bằng việc đăng ký, bạn đã đồng ý với <a href="sign-up.html">Điều khoản & Chính sách</a></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="library/js/vendor.js"></script>

    <script src="library/js/app.min.js"></script>

    <!-- page js -->

</body>

</html>