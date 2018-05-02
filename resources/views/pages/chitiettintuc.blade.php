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
                            <li>Posted: <span class="text-theme-colored2"> 9/9/2018</span></li>
                            <li>By: <span class="text-theme-colored2">Admin</span></li>
                            <li><i class="fa fa-comments-o"></i> 1 comments</li>
                        </ul>
                        <hr>
                        <div class="bg-light-gray">
                            <b>{{$chitiet->gioithieu}}</b>
                            <br>
                            @php
                            echo $chitiet->noidung;
                            @endphp
                        </div>
                        <div class="comments-container">
                            <ul id="comments-list" class="comments-list">
                                <li>
                                    <div class="comment-main-level">
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img src="img/client/avatar-2.jpg" alt=""></div>
                                        <!-- Contenedor del Comentario -->
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
                                    <!-- Respuestas de los comentarios -->
                                    <ul class="comments-list reply-list">
                                        <li>
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="img/client/avatar-6.jpg" alt=""></div>
                                            <!-- Contenedor del Comentario -->
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
                                            <!-- Avatar -->
                                            <div class="comment-avatar"><img src="img/client/avatar-2.jpg" alt=""></div>
                                            <!-- Contenedor del Comentario -->
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
                                        <!-- Avatar -->
                                        <div class="comment-avatar"><img src="img/client/avatar-1.jpg" alt=""></div>
                                        <!-- Contenedor del Comentario -->
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
                        </div>
                        <div class="comment-box-sn">
                            <h5>Leave a Reply</h5>
                            <textarea name="" id="" placeholder="Comment"></textarea>
                            <input type="text" name="email" placeholder="Email Id" class="form-control">
                            <br>
                            <input type="text" name="text" placeholder="Name" class="form-control">
                            <br>
                            <button class="btn btn-general btn-green" style="width: 100%;" role="button">Send</button>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            <!-- Right news details -->
            <div class="col-md-3">
                <div class="small-news-box">
                    <a href="">
                        <div class="right-side-sn-cont">
                            <img src="img/news/news-6.jpg" alt="" class="img-fluid">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                        </div>
                    </a>
                    <a href="">
                        <div class="right-side-sn-cont">
                            <img src="img/news/news-9.jpg" alt="" class="img-fluid">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                        </div>
                    </a>
                    <a href="">
                        <div class="right-side-sn-cont">
                            <img src="img/news/news-7.jpg" alt="" class="img-fluid">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                        </div>
                    </a>
                    <a href="">
                        <div class="right-side-sn-cont">
                            <img src="img/news/news-3.jpg" alt="" class="img-fluid">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection