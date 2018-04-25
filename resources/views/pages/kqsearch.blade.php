@extends('pages.layouts.index') 
@section('title', 'Kết quả tìm kiếm') 
@section('content')
<!-- home -->
<div id="home-p" class="home-p pages-head1 text-center">
    <div class="container">
        <div class="input-group ">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Tìm kiếm">
            <div class="input-group-addon"><i class="fa fa-search"></i></div>
        </div>
    </div>
    <!--/end container-->
</div>
<!-- kết quả search -->
<section>
    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-11 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-h-desc">
                <h3>Kết quả tìm kiếm</h3>
                <div class="heading-border-light"></div>
                <hgroup>
                    <h2 class="lead"><strong class="cl-blue">3</strong> Kết quả tìm kiếm cho <strong class="cl-blue">vlxxx.com</strong></h2>
                </hgroup>
                <div class="service-h-tab">
                    <nav class="nav nav-tabs" id="myTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Đề thi</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Slide</a>
                        <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">Tin tức</a>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div id="document" class="container-fluid ">
                                <div class="row ">
                                    @foreach($dethi as $dt)
                                    <div class="col-md-3 col-sm-6 desc-document wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="desc-document-cont">
                                            <div class="thumbnail-blogs ">
                                                <img src="upload/images/{{$dt->urlanh}} " class="img-fluid " alt="{{$dt->gioithieu}} ">
                                            </div>
                                            {{--
                                            <div class="thumbnail-blogs">
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

                                </div>
                            </div>
                            <div class="result-view" align="left">
                                <a href="#" class="btn btn-general btn-green" role="button">Xem thêm</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div>abcdxyz</div>
                            <br>
                            <br>
                            <div class="result-view" align="left">
                                <a href="#" class="btn btn-general btn-green" role="button">Xem thêm</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                            <div class="row">  
                                <section class="col-xs-12 col-sm-6 col-md-12">
                                    <article class="search-result row">
                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="img/search/s-1.jpg" class="img-fluid" alt="Lorem ipsum" /></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2">
                                            <ul class="meta-search">
                                                <li><i class="fa fa-calendar"></i> <span>02/15/2014</span></li>
                                                <li><i class="fa fa-clock-o"></i> <span>4:28 pm</span></li>
                                                <li><i class="fa fa-tags"></i> <span>People</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                                            <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>
                                        </div>
                                        <span class="clearfix borda"></span>
                                    </article>
                                    <article class="search-result row">
                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="img/search/s-2.jpg" class="img-fluid" alt="Lorem ipsum" /></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2">
                                            <ul class="meta-search">
                                                <li><i class="fa fa-calendar"></i> <span>02/13/2014</span></li>
                                                <li><i class="fa fa-clock-o"></i> <span>8:32 pm</span></li>
                                                <li><i class="fa fa-tags"></i> <span>Food</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-7">
                                            <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>
                                        </div>
                                        <span class="clearfix borda"></span>
                                    </article>
                                    <article class="search-result row">
                                        <div class="col-xs-12 col-sm-12 col-md-3">
                                            <a href="#" title="Lorem ipsum" class="thumbnail"><img src="img/search/s-3.jpg" class="img-fluid" alt="Lorem ipsum" /></a>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-2">
                                            <ul class="meta-search">
                                                <li><i class="fa fa-calendar"></i> <span>01/11/2014</span></li>
                                                <li><i class="fa fa-clock-o"></i> <span>10:13 am</span></li>
                                                <li><i class="fa fa-tags"></i> <span>Sport</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-7">
                                            <h3><a href="#" title="">Voluptatem, exercitationem, suscipit, distinctio</a></h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>
                                        </div>
                                        <!-- <span class="clearfix border"></span> -->
                                    </article>
                                </section>
                            </div>
                            <br>
                            <br>
                            <div class="result-view" align="left">
                                <a href="#" class="btn btn-general btn-green" role="button">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
@endsection