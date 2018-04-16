@extends('pages.layouts.index')

@section('title')
    Trang chủ
@endsection

@section('content')

@include('pages.layouts.home')
<!-- latest news -->
<section id="single-news-p1" class="single-news-p1" >
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="single-news-p1-cont" style="box-shadow: 1px 1px 1px rgba(0,0,0,0.1);">
                    <div class="single-news-img">
                        <img src="img/news/news-box-1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="single-news-desc m-0 pt-1 pb-0 px-0">
                        <h3>Reduction of AC energy wastage through clamp meter</h3>
                        <ul class="list-inline">
                            <li>Posted: <span class="text-theme-colored2"> 9/9/2018</span></li>
                            <li>By: <span class="text-theme-colored2">Admin</span></li>
                            <li><i class="fa fa-comments-o"></i> 1 comments</li>
                            <li> <a href="#" class="mb-2">Read More <i class="fa fa-long-arrow-right"></i></a></li>
                        </ul>
                        <hr>
                        <div class="bg-light-gray text-center">
                            <a href="news-list.html"><i class="fa fa-arrow-circle-o-right"></i> View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
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
                            <img src="img/news/news-6.jpg" alt="" class="img-fluid">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                        </div>
                    </a>
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
<!-- end -->

<!-- documents most view -->
<section id="comp-offer">
    <div class="container-fluid">
        <div class="row">
            @foreach($dethi as $dt)
            <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
                <div class="desc-comp-offer-cont">
                    <div class="thumbnail-blogs">
                        <img src="upload/images/{{$dt->urlanh}}" class="img-fluid" alt="{{$dt->gioithieu}}">
                    </div>
                    <div>
                        <h3>{{cutString($dt->gioithieu, 33)." ..."}}</h3>
                        <p class="desc">{{$dt->nam}}</p>
                    </div>
                    <div>
                        <a href="#"><i class="fa fa-heart-o"> 1</i></a>
                        <a href="#"><i class="fa fa-eye"></i> 2</a>
                        <a href="#"><i class="fa fa-arrow-circle-o-down"></i> 3</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
                <div class="desc-comp-offer-cont">
                    <div class="thumbnail-blogs">
                        <img src="img/document.png" class="img-fluid" alt="...">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="#"><i class="fa fa-heart-o"> 1</i></a>
                        <a href="#"><i class="fa fa-eye"></i> 2</a>
                        <a href="#"><i class="fa fa-arrow-circle-o-down"></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
                <div class="desc-comp-offer-cont">
                    <div class="thumbnail-blogs">
                        <img src="img/document.png" class="img-fluid" alt="...">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="#"><i class="fa fa-heart-o"> 1</i></a>
                        <a href="#"><i class="fa fa-eye"></i> 2</a>
                        <a href="#"><i class="fa fa-arrow-circle-o-down"></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="0.4s">
                <div class="desc-comp-offer-cont">
                    <div class="thumbnail-blogs">
                        <img src="img/document.png" class="img-fluid" alt="...">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="#"><i class="fa fa-heart-o"> 1</i></a>
                        <a href="#"><i class="fa fa-eye"></i> 2</a>
                        <a href="#"><i class="fa fa-arrow-circle-o-down"></i> 3</a>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- end -->

<!-- job -->
<section id="business-growth-p1" class="business-growth-p1 bg-gray">
    <div class="container">
        <div class="row title-bar">
            <div class="col-md-12">
                <h1 class="wow fadeInUp">We committed to helping</h1>
                <div class="heading-border"></div>
                <p class="wow fadeInUp" data-wow-delay="0.4s">We committed to helping you maintain your oral healthTooth.We are an innovative company. We develop and design websites for costumers around the world. Our clients are some of the most forward-looking companies in the world.</p>
            </div>
        </div>
        <div class="row wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="col-md-3 col-sm-6 service-padding">
                <div class="service-item">
                    <div class="service-item-icon"> <i class="fa fa-paint-brush fa-3x"></i>
                    </div>
                    <div class="service-item-title">
                        <h3>Web Design</h3>
                    </div>
                    <div class="service-item-desc">
                        <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                        <div class="content-title-underline-light"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding">
                <div class="service-item">
                    <div class="service-item-icon"> <i class="fa fa-laptop fa-3x"></i>
                    </div>
                    <div class="service-item-title">
                        <h3>Web Devlopment</h3>
                    </div>
                    <div class="service-item-desc">
                        <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                        <div class="content-title-underline-light"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding">
                <div class="service-item">
                    <div class="service-item-icon"> <i class="fa fa-table fa-3x"></i>
                    </div>
                    <div class="service-item-title">
                        <h3>Mobile Apps</h3>
                    </div>
                    <div class="service-item-desc">
                        <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                        <div class="content-title-underline-light"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding">
                <div class="service-item right-bord">
                    <div class="service-item-icon"> <i class="fa fa-search fa-3x"></i>
                    </div>
                    <div class="service-item-title">
                        <h3>SEO Optimization</h3>
                    </div>
                    <div class="service-item-desc">
                        <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                        <div class="content-title-underline-light"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
@endsection