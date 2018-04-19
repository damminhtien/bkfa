@extends('pages.layouts.index')

@section('title')
    Trang chủ
@endsection

@section('content')

@include('pages.layouts.home')
<!-- latest news -->
<section id="service-h">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <div class="new_most">
                    <div class="single-news-img">
                        <img src="img/news/news-box-1.jpg" alt="" class="img-fluid">
                    </div>
                    <br>
                    <div class="">
                        <h3>We are Providing great Services</h3>
                        <div class="heading-border-light"></div>
                        <p>Businessbox offer the full spectrum of services to help organizations work better. Everything from creating standards of excellence to training your people to work in more effective ways.</p>
                        <div class="row">
                            <div class="col-md-3">
                                <i class="fa fa-calendar"></i> 17/4/2018
                            </div>
                            <div class="col-md-3">
                                <i class="fa fa-user"></i> Admin
                            </div>
                            <div class="col-md-3">
                                <i class="fa fa-comments-o"></i> 1 comments
                            </div>
                            <div class="col-md-3">
                                <a href="#" class="mb-2" style="text-decoration: none;">Read More <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-h-desc">
                    <h3>Latest News</h3>
                    <div class="heading-border-light"></div>
                    <div class="service-h-tab">
                        <nav class="nav nav-tabs" id="myTab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">News 1</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">News 2</a>
                            <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">New 3</a>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                                <div class="news-item">
                                    <a href="">
                                        <div class="right-news">
                                            <img src="img/news/news-6.jpg" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            <small><fa class="fa-watch"> Jan 1, 2019</fa></small>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="news-all" align="center">
                        <a href="ds-tintuc" class="btn btn-general btn-green" role="button">See More 1</a>
                        <a href="list-news.html" class="btn btn-general btn-green" role="button">See More 2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
<!-- about -->
<div class="overlay-thought"></div>
<section id="thought" class="bg-parallax thought-bg">
  <div class="container">
    <div id="thought-desc" class="row title-bar title-bar-thought owl-carousel owl-theme">
      <div class="col-md-12 ">
        <div class="heading-border bg-white"></div>
        <p class="wow fadeInUp" data-wow-delay="0.4s">Businessbox will deliver value to all the stakeholders and will attain excellence and leadership through such delivery of value. We will strive to support the stakeholders in all activities related to us. Businessbox provide great things.</p>
        <h6>John doe</h6>
      </div>
      <div class="col-md-12 thought-desc">
        <div class="heading-border bg-white"></div>
        <p class="wow fadeInUp" data-wow-delay="0.4s">Ensuring quality in Businessbox is an obsession and the high quality standards set by us are achieved through a rigorous quality assurance process. Quality assurance is performed by an independent team of trained experts for each project. </p>
        <h6>Tom John</h6>
      </div>
    </div>
  </div>         
</section>
<!-- end -->
<!-- documents most view -->
<section>
    <div  id="document" class="container-fluid ">
        <div class="row ">
            @foreach($dethi as $dt)
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp" data-wow-delay="0.4s">
                <div class="desc-document-cont">
                    <div class="thumbnail-blogs ">
                        <img src="upload/images/{{$dt->urlanh}} " class="img-fluid " alt="{{$dt->gioithieu}} ">
                    </div>
                    {{-- <div class="thumbnail-blogs">
                        <img src="upload/images/{{$dt->urlanh}}" class="img-fluid" alt="{{$dt->gioithieu}}">
                    </div> --}}
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
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 desc-document wow fadeInUp " data-wow-delay="0.4s ">
                <div class="desc-document-cont ">
                    <div class="thumbnail-blogs ">
                        <img src="img/document.png " class="img-fluid " alt="... ">
                    </div>
                    <div>
                        <h3>Công thức tích phân ba cấp ...</h3>
                        <p class="desc ">Trần Trọng Bình</p>
                    </div>
                    <div>
                        <a href="# "><i class="fa fa-heart-o "> 1</i></a>
                        <a href="# "><i class="fa fa-eye "></i> 2</a>
                        <a href="# "><i class="fa fa-arrow-circle-o-down "></i> 3</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
<!-- job -->
<section id="course " class="course bg-gray ">
    <div class="container ">
        <div class="row title-bar ">
            <div class="col-md-12 ">
                <h1 class="wow fadeInUp ">We committed to Website</h1>
                <div class="heading-border "></div>
                <p class="wow fadeInUp " data-wow-delay="0.4s ">Chúng tôi rất mong muốn nhận được sự đóng góp và phản hồi của bạn.</p>
            </div>
        </div>
        <div class="row wow animated fadeInUp " data-wow-duration="1s " data-wow-delay="0.5s ">
            <div class="col-md-3 col-sm-6 service-padding ">
                <div class="service-item ">
                    <div class="service-item-icon "> <i class="fa fa-paint-brush fa-3x "></i>
                    </div>
                    <div class="service-item-title ">
                        <h3>Web Design</h3>
                    </div>
                    <div class="service-item-desc ">
                        <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                        <div class="content-title-underline-light "></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding ">
                <div class="service-item ">
                    <div class="service-item-icon "> <i class="fa fa-laptop fa-3x "></i>
                    </div>
                    <div class="service-item-title ">
                        <h3>Web Devlopment</h3>
                    </div>
                    <div class="service-item-desc ">
                        <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                        <div class="content-title-underline-light "></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding ">
                <div class="service-item ">
                    <div class="service-item-icon "> <i class="fa fa-table fa-3x "></i>
                    </div>
                    <div class="service-item-title ">
                        <h3>Mobile Apps</h3>
                    </div>
                    <div class="service-item-desc ">
                        <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                        <div class="content-title-underline-light "></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 service-padding ">
                <div class="service-item right-bord ">
                    <div class="service-item-icon "> <i class="fa fa-search fa-3x "></i>
                    </div>
                    <div class="service-item-title ">
                        <h3>SEO Optimization</h3>
                    </div>
                    <div class="service-item-desc ">
                        <p>Laborum adipisicing do amet commodo occaecat do amet commodo occaecat.</p>
                        <div class="content-title-underline-light "></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
@endsection