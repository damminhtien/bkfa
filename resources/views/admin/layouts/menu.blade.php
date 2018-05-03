<div class="side-nav">
    <div class="side-nav-inner">
        <div class="side-nav-logo">
            <a href="/home">
                <div class="logo logo-dark" style="background-image: url('img/logo.png')"></div>
                <div class="logo logo-white" style="background-image: url('img/logo.png')"></div>
            </a>
            <div class="mobile-toggle side-nav-toggle">
                <a href="/">
                    <i class="ti-arrow-circle-left"></i>
                </a>
            </div>
        </div>
        <ul class="side-nav-menu scrollable">
            <li class="nav-item active">
                <a class="mrg-top-30" href="/admin/">
                    <span class="icon-holder">
                            <i class="ti-home"></i>
                        </span>
                    <span class="title">{{ Lang::get('sub.about') }}</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                            <i class="ti-desktop"></i>
                        </span>
                    <span class="title">{{ Lang::get('sub.datasheet') }}</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="/admin/dethi/danhsach">{{ Lang::get('sub.exam') }}</a>
                    </li>
                    <li>
                        <a href="/admin/vien/danhsach">{{ Lang::get('sub.institute') }}</a>
                    </li>
                    <li>
                        <a href="/admin/mon/danhsach">{{ Lang::get('sub.subject') }}</a>
                    </li>
                    <li>
                        <a href="/admin/tintuc/danhsach">{{ Lang::get('sub.news') }}</a>
                    </li>
                    <li>
                        <a href="/admin/slide/danhsach">{{ Lang::get('sub.slide') }}</a>
                    </li>
                    <li>
                        <a href="/admin/user/danhsach">{{ Lang::get('sub.user') }}</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="ti-package"></i>
                    </span>
                    <span class="title">Apps</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Email</a>
                    </li>
                    <li>
                        <a href="#">Calendar</a>
                    </li>
                    <li>
                        <a href="#">Social</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                        <i class="ti-map-alt"></i>
                                    </span>
                                <span class="title">Map</span>
                                <span class="arrow">
                                        <i class="ti-angle-right"></i>
                                    </span>
                            </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Google Map</a>
                    </li>
                    <li>
                        <a href="#">Vector Map</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                        <i class="ti-cloud"></i>
                                    </span>
                                <span class="title">Extra</span>
                                <span class="arrow">
                                        <i class="ti-angle-right"></i>
                                    </span>
                            </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">Invoice</a>
                    </li>
                    <li>
                        <a href="#">Account Settings</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                    <li>
                        <a href="#">Gallery</a>
                    </li>
                    <li>
                        <a href="#">Sign In</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>