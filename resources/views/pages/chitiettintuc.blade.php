@extends('pages.layouts.index') @section('title', 'Chi tiết tin tức') @section('content')
<div id="home-p" class="home-p pages-head1 text-center">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">&nbsp</h1>
        <p>&nbsp</p>
    </div>
    <!--/end container-->
</div>
<!--====================================================
                      NEWS DETAILS
======================================================-->
<section id="single-news-p1" class="single-news-p1">
    <div class="container">
        <div class="row">
            <!-- left news details -->
            <div class="col-md-9">
                <div class="single-news-p1-cont">
                    <div class="single-news-img">
                        <img src="upload/images/tintuc/{{$chitiet->urlanh}}" alt="" class="img-fluid">
                    </div>
                    <div class="single-news-desc">
                        <h3>{{$chitiet->tieude}}</h3>
                        <ul class="list-inline">
                            <li><i class="fa fa-calendar"></i> Đăng bài: {{$chitiet->created_at}}</li>
                            <li><i class="fa fa-calendar"></i> Sửa lần cuối: {{$chitiet->updated_at}}</li>
                            <div class="row">
                                <div class="col-md-6">
                                    <li>Đăng bởi: <i class="fa fa-user"></i><span class="text-theme-colored2"> Admin</span></li>
                                </div>
                                <div class="col-md-6">
                                    <li><i class="fa fa-eye"></i> {{$chitiet->luotxem}} lượt xem</li>  
                                </div>
                            </div>
                        </ul>
                        <hr>
                        <div class="bg-light-gray">
                            <b>{{$chitiet->gioithieu}}</b>
                            <br>
                            @php
                            echo $chitiet->noidung;
                            @endphp
                        </div>
                        <!-- <div class="comments-container">
                            <ul id="comments-list" class="comments-list">
                                <li>
                                    <div class="comment-main-level">
                                        <div class="comment-avatar"><img src="img/client/avatar-2.jpg" alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name by-author"><a href="#">John Boss</a></h6>
                                                <span>before 20 minutes</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="comments-list reply-list">
                                        <li>
                                            <div class="comment-avatar"><img src="img/client/avatar-6.jpg" alt=""></div>
                                            <div class="comment-box sub-comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name"><a href="#">Tresa Ben</a></h6>
                                                    <span>hace 10 minutos</span>
                                                    <i class="fa fa-reply"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="comment-avatar"><img src="img/client/avatar-2.jpg" alt=""></div>
                                            <div class="comment-box sub-comment-box">
                                                <div class="comment-head">
                                                    <h6 class="comment-name by-author"><a href="#">John Boss</a></h6>
                                                    <span>before 10 minutes</span>
                                                    <i class="fa fa-reply"></i>
                                                    <i class="fa fa-heart"></i>
                                                </div>
                                                <div class="comment-content">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment-main-level">
                                        <div class="comment-avatar"><img src="img/client/avatar-1.jpg" alt=""></div>
                                        <div class="comment-box">
                                            <div class="comment-head">
                                                <h6 class="comment-name"><a href="#">Blensan Trul</a></h6>
                                                <span>before 10 minutes</span>
                                                <i class="fa fa-reply"></i>
                                                <i class="fa fa-heart"></i>
                                            </div>
                                            <div class="comment-content">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit omnis animi et iure laudantium vitae, praesentium optio, sapiente distinctio illo?
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> -->
                        <style>
                            .comment-box-sn ul li{
                                display: inline-block;
                                padding-right: 50px;
                                font-size: 20px;
                                margin-left: -30px; 
                            }
                        </style>
                        <div class="comment-box-sn">
                            {!!Share::page('http://jorenvanhocht.be', 'Share title')
                                ->facebook()
                                ->twitter()
                                ->googlePlus()
                                ->linkedin('Extra linkedin summary can be passed here')!!}
                            <!-- <h5>Leave a Reply</h5>
                            <textarea name="" id="" placeholder="Comment"></textarea>
                            <input type="text" name="email" placeholder="Email Id" class="form-control">
                            <br>
                            <input type="text" name="text" placeholder="Name" class="form-control">
                            <br>
                            <button class="btn btn-general btn-green" style="width: 100%;" role="button">Send</button> -->
                            <div class= "fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#bkfa#chitiettintuc{{$chitiet->idtintuc}}" data-numposts="5"></div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- Right news details -->
            <div class="col-md-3">
                <div class="small-news-box">
                    @php foreach ($tingannhat as $tgn) { @endphp
                    <div class="right-side-sn-cont">
                        <a href="chi-tiet-tin-tuc/{{ $tgn->idtintuc }}/{{ $tgn->tenkhongdau }}.html">
                            <img src="upload/images/tintuc/{{$tgn->urlanh}}" alt="" class="img-fluid">
                            <p>{{$tgn->tieude}}</p>
                        </a>
                        <small><fa class="fa-watch"> {{$tgn->created_at}}</fa></small>
                        <p>{{$tgn->gioithieu}}</p>
                    </div>
                    @php } @endphp
                </div>
            </div>
        </div>
    </div>
</section>
@endsection