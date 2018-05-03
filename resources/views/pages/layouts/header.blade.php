<header id="header">
    <!-- Top Navbar  -->
    <div class="top-menubar">
        <div class="topmenu">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <ul class="list-inline top-contacts">
                            <li>
                                <i class="fa fa-envelope"></i> Email: <a href="mailto:info@themeborn.com">bkfa.com@gmail.com</a>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i> Hotline: (+84) 96 105 6808
                            </li>
                            <li class="dropdown">
                                <form action="{{ route('switchLang2') }}" class="form-lang" method="post">
                                    <style>
                                        select {
                                          border-bottom: 1px solid #c9c9c9;
                                          border-top: 0;
                                          border-left: 0;
                                          border-right: 0;
                                          color: #444444;
                                          -webkit-appearance: button;
                                          -webkit-border-radius: 2px;
                                          -webkit-padding-end: 20px;
                                          -webkit-padding-start: 2px;
                                          -webkit-user-select: none;
                                          background-color: white;
                                          background-image: url('/img/down.png');
                                          background-position: 97% auto;
                                          background-repeat: no-repeat;
                                          background-size: contain;
                                          overflow: hidden;
                                          padding: 1px 2px;
                                          text-overflow: ellipsis;
                                          white-space: nowrap;
                                          min-width: 100px;

                                          option {
                                            position: relative;
                                          }
                                        }
                                        option:visited
                                        {
                                        background:red;
                                        text-decoration:none;
                                        }
                                    </style>
                                    <select name="locale2" onchange='this.form.submit();'>
                                        <option value="en">{{ trans('sub.lang.en') }}</option>
                                        <option value="vi"{{ Lang::locale() === 'vi' ? 'selected' : '' }}>{{ trans('sub.lang.vi') }}</option>
                                    </select>
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <ul class="list-inline top-data">
                            <li><a href="https://www.facebook.com/bkfateam/" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/BKFA_Team" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/105336153943636624010?hl=vi" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                            @if(!Auth::user())
                            <li>
                                <a href="dangnhap" class="log-top">{{ Lang::get('sub.login') }}</a>
                            </li>
                            <li>
                                <a href="dangky" class="log-top">{{ Lang::get('sub.register') }}</a>
                            </li>
                            @else
                            <li>
                                <a href="nguoidung" class="log-top">
                                    <span class ="glyphicon glyphicon-user"></span>
                                    {{ Auth::user()->ten }}
                                </a>
                            </li>
                            <li>
                                <a href="dangxuat" class="log-top">{{ Lang::get('sub.logout') }}</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" id="mainNav" data-toggle="affix" style="z-index: 10">
        <div class="container">
            <a class="navbar-brand smooth-scroll" href="/"><img src="img/logo.png" alt="logo"></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="/">{{ Lang::get('sub.home') }}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Lang::get('sub.document') }}</a>
                        <div class="dropdown-menu dropdown-cust" aria-labelledby="navbarDropdownMenuLink">
                            @foreach($vien as $v)
                            <a class="dropdown-item" href="danh-sach-mon/{{ $v->idvien }}/{{ $v->tenkhongdau }}.html">{{$v->ten}}</a>
                            @endforeach
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle smooth-scroll" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Lang::get('sub.tech') }}</a>
                        <div class="dropdown-menu dropdown-cust mega-menu" aria-labelledby="navbarDropdownMenuLink">
                            <div class="row">
                                <div class="col-md-6">
                                    <a class="dropdown-item" href="kien-thuc-lap-trinh">PHP</a>
                                    <a class="dropdown-item" href="kien-thuc-lap-trinh">Java</a>
                                    <a class="dropdown-item" href="kien-thuc-lap-trinh">C#</a>
                                    <a class="dropdown-item" href="kien-thuc-lap-trinh">NodeJs</a>
                                </div>
                                <div class="col-md-6" style="border-left: 1px solid #dedede;">
                                    <a class="dropdown-item" href="kien-thuc-lap-trinh">Laravel</a>
                                    <a class="dropdown-item" href="kien-thuc-lap-trinh">React Native</a>
                                    <a class="dropdown-item" href="kien-thuc-lap-trinh">AngularJs</a>
                                    <a class="dropdown-item" href="kien-thuc-lap-trinh">Git&GitHub</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link smooth-scroll" href="about">{{ Lang::get('sub.about') }}</a></li>
                    <li class="nav-item">
                        <i class="search fa fa-search search-btn"></i>
                        <div class="search-open">
                            <form action="tim-kiem" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="input-group animated fadeInUp">
                                    <input type="text" class="form-control" placeholder="{{ Lang::get('sub.search') }}" aria-describedby="basic-addon2" name="search">
                                     <span class="input-group-addon" id="basic-addon2">{{ Lang::get('sub.search2') }}</span>
                                </div>


                            </form>


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
                                                    <i class="fa fa-phone"></i> Hotline: (+84) 96 105 6808
                                                </li>
                                                <li class="dropdown">
                                                    <form action="{{ route('switchLang2') }}" class="form-lang" method="post">
                                                        <div style="font-family: serif; font-size: 120%; background-color: #3366ff">
                                                            <select name="locale2" onchange='this.form.submit();'>
                                                                <option value="en">{{ trans('sub.lang.en') }}</option>
                                                                <option value="vi"{{ Lang::locale() === 'vi' ? 'selected' : '' }}>{{ trans('sub.lang.vi') }}</option>
                                                            </select>
                                                            {{ csrf_field() }}
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3">
                                            <ul class="list-inline top-data">
                                                <li><a href="https://www.facebook.com/bkfateam/" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                                                <li><a href="https://twitter.com/BKFA_Team" target="_empty"><i class="fa top-social fa-twitter"></i></a></li>
                                                <li><a href="https://plus.google.com/105336153943636624010?hl=vi" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                                                @if(!Auth::user())
                                                <li>
                                                    <a href="dangnhap" class="log-top">{{ Lang::get('sub.login') }}</a>
                                                </li>
                                                <li>
                                                    <a href="dangky" class="log-top">{{ Lang::get('sub.register') }}</a>
                                                </li>
                                                @else
                                                <li>
                                                    <a href="nguoidung" class="log-top">
                                                        <span class ="glyphicon glyphicon-user"></span>
                                                        {{ Auth::user()->ten }}
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="dangxuat" class="log-top">{{ Lang::get('sub.logout') }}</a>
                                                </li>
                                                @endif
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