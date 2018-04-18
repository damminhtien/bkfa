<header>
    <!-- Top Navbar  -->
    <div class="top-menubar">
        <div class="topmenu">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <ul class="list-inline top-contacts">
                            <li>
                                <i class="fa fa-envelope"></i> Email: <a href="mailto:info@themeborn.com">bkfa@gmil.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> Hotline: (1) 0969696969
                            </li>
                            <li class="dropdown">
                                <a id="language" class="dropdown-toggle" href="#" data-toggle="dropdown"><img src="img/vi.png" alt="Việt Nam" title="Việt Nam"> Việt Nam</a>
                                <div class="dropdown-menu">
                                    <a onclick="click_en()" class="dropdown-item" href="#"><img src="img/en.png" alt="" title="English" /> English</a>
                                    <a onclick="click_vi()" class="dropdown-item" href="#"><img src="img/vi.png" alt="" title="Việt Nam" /> Việt Nam</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <ul class="list-inline top-data">
                            <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                            <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                            <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                            <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" id="mainNav" data-toggle="affix" style="z-index: 10">
        <div class="container">
            <a class="navbar-brand smooth-scroll" href="index.html"><img src="img/logo-s.png" alt="logo"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="index.html">Trang chủ</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài liệu</a>
                        <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                            @foreach($vien as $v)
                            <a class="dropdown-item" href="danh-sach-tai-lieu/{{ $v->idvien }}/{{ $v->tenkhongdau }}.html">{{$v->ten}}</a>
                            @endforeach
                            <a class="dropdown-item" href="chitiet.html">Công Nghệ Thông Tin</a>
                            <a class="dropdown-item" href="#">Điện tử viễn thông</a>
                            <a class="dropdown-item" href="#">Cơ khí</a>
                            <a class="dropdown-item" href="#">Công nghệ may</a>
                            <a class="dropdown-item" href="#">Đại cương</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Công nghệ</a>
                        <div class="dropdown-menu dropdown-cust mega-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="dropdown-item" href="#">PHP</a>
                                    <a class="dropdown-item" href="single-product.html">Nodejs</a>
                                    <a class="dropdown-item" href="#">Laravel</a>
                                    <a class="dropdown-item" href="#">Git&GitHub</a>
                                    <a class="dropdown-item" href="#">Chịch</a>
                                </div>
                                <div class="col-md-6" style="border-left: 1px solid #dedede;">
                                    <a class="dropdown-item" href="#">PHP</a>
                                    <a class="dropdown-item" href="single-product.html">Nodejs</a>
                                    <a class="dropdown-item" href="#">Laravel</a>
                                    <a class="dropdown-item" href="#">Git&GitHub</a>
                                    <a class="dropdown-item" href="#">Chịch</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="index.html">Liên hệ</a></li>
                    <li class="nav-item">
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <div class="input-group animated fadeInUp">
                                <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2">
                                <span class="input-group-addon" id="basic-addon2">Go</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="top-menubar-nav">
                            <div class="topmenu ">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <ul class="list-inline top-contacts">
                                                <li>
                                                    <i class="fa fa-envelope"></i> Email: <a href="mailto:info@htmlstream.com">bkfa@gmail.com</a>
                                                </li>
                                                <li>
                                                    <i class="fa fa-phone"></i> Hotline: (1) 0969696969
                                                </li>
                                                <li class="dropdown">
                                                    <a id="language" class="dropdown-toggle" href="#" data-toggle="dropdown"><img src="img/vi.png" alt="Việt Nam" title="Việt Nam"> Việt Nam</a>
                                                    <div class="dropdown-menu">
                                                        <a onclick="click_en()" class="dropdown-item" href="#"><img src="img/en.png" alt="" title="English" /> English</a>
                                                        <a onclick="click_vi()" class="dropdown-item" href="#"><img src="img/vi.png" alt="" title="Việt Nam" /> Việt Nam</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-inline top-data">
                                                <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                                                <li><a href="#" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                                                <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                                                <li><a href="#" class="log-top" data-toggle="modal" data-target="#login-modal">Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
</header>