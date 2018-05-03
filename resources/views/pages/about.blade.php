@extends('pages.layouts.index')
@section('title', 'About')

@section('content')

<!--====================================================
                       HOME-P
======================================================-->
<div id="home-p" class="home-p pages-head6 text-center">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">We offer a huge opportunity for growth</h1>
        <p>Discover more about Team</p>
    </div>
    <!--/end container-->
</div>
<!--====================================================
                      TEAM 
======================================================-->
<section id="comp-offer" class="team-p2" style="padding: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6  desc-comp-offer">
                <h2>Team Member</h2>
                <div class="heading-border-light"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 ">
                <div class="team-p2-cont wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/team/tien.gif" class="img-fluid" alt="damminhtien" style="width: 261px; height: 307px;">
                    <h5>Đàm Minh Tiến</h5>
                    <h6>Quản trị viên</h6>
                    <ul class="list-inline social-icon-f top-data">
                        <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="team-p2-cont wow fadeInUp" data-wow-delay="0.4s">
                    <img src="img/team/binh.gif" class="img-fluid" alt="trantrongbinh" style="width: 261px; height: 307px;">
                    <h5>Trần Trọng Bình</h5>
                    <h6>Quản trị viên</h6>
                    <ul class="list-inline social-icon-f top-data">
                        <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="team-p2-cont wow fadeInUp" data-wow-delay="0.6s">
                    <img src="img/team/toan.gif" class="img-fluid" alt="maivantoan" style="width: 261px; height: 307px;">
                    <h5>Mai Văn Toàn</h5>
                    <h6>Quản trị viên</h6>
                    <ul class="list-inline social-icon-f top-data">
                        <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 ">
                <div class="team-p2-cont wow fadeInUp" data-wow-delay="0.2s">
                    <img src="img/team/thai.gif" class="img-fluid" alt="nguyenvanthai" style="width: 261px; height: 307px;">
                    <h5>Nguyễn Văn Thái</h5>
                    <h6>Quản trị viên</h6>
                    <ul class="list-inline social-icon-f top-data">
                        <li><a href="#" target="_empty"><i class="fa top-social fa-facebook"></i></a></li>
                        <li><a href="#" target="_empty"><i class="fa top-social fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====================================================
                    CONTACT HOME
======================================================-->
<div class="overlay-contact-h"></div>
<section id="contact-h" class="bg-parallax contact-h-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-h-cont">
                    <h3 class="cl-white">Liên Hệ</h3>
                    <br>
                    <form>
                        <div class="form-group cl-white">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                        </div>
                        <div class="form-group cl-white">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group cl-white">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5"></textarea>
                        </div>
                        <button class="btn btn-general btn-white" role="button"><i fa fa-right-arrow></i>Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection