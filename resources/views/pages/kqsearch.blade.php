@extends('pages.layouts.index') 
@section('title', 'Kết quả tìm kiếm') 
@section('content')
<!-- home -->
<div id="home-p" class="home-p pages-head1 text-center">
    <div class="container">
        <form action="tim-kiem" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="input-group ">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Tìm kiếm" name="search">
                <button type="submit" class="input-group-addon"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!--/end container-->
</div>
<!-- kết quả search -->
<section>
    <div class="row">
        <div class="col-xs-11 col-sm-11 col-md-11 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-h-desc">
                <h3>{{ Lang::get('sub.resultsearch') }}</h3>
                <div class="heading-border-light"></div>
                <hgroup>
                    <h2 class="lead"><strong class="cl-blue">{{$sokq}}</strong> {{ Lang::get('sub.resultsearch') }}: {{$req}} <strong class="cl-blue"></strong></h2>
                </hgroup>
                <div class="service-h-tab">
                    <nav class="nav nav-tabs" id="myTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">{{ Lang::get('sub.exam') }}</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Slide</a>
                        <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">{{ Lang::get('sub.news') }}</a>
                        <a class="nav-item nav-link" id="my-profile-tab2" data-toggle="tab" href="#my-profile2" role="tab" aria-controls="my-profile2">{{ Lang::get('sub.news') }}</a>
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
                               @foreach($slide as $sl)
                               <div class="col-md-3 col-sm-6 desc-document wow fadeInUp" data-wow-delay="0.4s">
                                <div class="desc-document-cont">
                                    <div class="thumbnail-blogs ">

                                    </div>
                                    {{--
                                        <div class="thumbnail-blogs">

                                        </div> --}}
                                        <div>
                                            <h3>{{cutString($sl->gioithieu, 33)." ..."}}</h3>
                                            <p class="desc">{{$sl->nam}}</p>
                                        </div>
                                        <div>
                                            <a href="#"><i class="fa fa-heart-o"> 1</i></a>
                                            <a href="#"><i class="fa fa-eye"></i> 2</a>
                                            <a href="#"><i class="fa fa-arrow-circle-o-down"></i> 3</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <br>
                                <br>
                                <div class="result-view" align="left">
                                    <a href="#" class="btn btn-general btn-green" role="button">Xem thêm</a>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                                <div class="row">  
                                    <section class="col-xs-12 col-sm-6 col-md-12">
                                        @foreach($tintuc as $tt)
                                        <article class="search-result row">
                                            <div class="col-xs-12 col-sm-12 col-md-3">
                                                <a href="#" title="{{$tt->tieude}}" class="thumbnail"><img src="upload/tintuc/{{$tt->tieudeurlanh}}" class="img-fluid" alt="{{$tt->tieude}}" /></a>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-2">
                                                <ul class="meta-search">
                                                    <li><i class="fa fa-calendar"></i> <span>
                                                        {{$tt->updated_at->format('m/d/Y')}}
                                                    </span></li>
                                                    <li><i class="fa fa-clock-o"></i> <span>{{$tt->updated_at->format('H:i:s')}}</span></li>
                                                    <li><i class="fa fa-tags"></i> <span>People</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-7 excerpet">
                                                <h3><a href="#" title="">{{cutString($tt->gioithieu, 10)." ..."}}</a></h3>
                                                <p>{!!cutString($tt->noidung, 50) ."..."!!}</p>
                                            </div>
                                            <span class="clearfix borda"></span>
                                        </article>
                                        @endforeach
                                    </section>
                                </div>
                                <br>
                                <br>
                                <div class="result-view" align="left">
                                    <a href="#" class="btn btn-general btn-green" role="button">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="my-profile2" role="tabpanel" aria-labelledby="my-profile-tab2">
                            <div id="document-1" class="row">
                                
                                <div class="col-lg-3 col-md-6 mb-4">
                                    <div class="card ">
                                       {{--  <a href="#"><img class="card-img-top" src="img/item.jpg" alt=""></a> --}}
                                        <div class="card-body text-center">
                                            <div class="card-title">
                                                <a href="#"><strong style="color: #000">abc</strong></a>
                                            </div>
                                            <p style="color: #0C48BA">dm dm dmd dm dm dmd m</p>
                                            <div class="cart-icon text-center" style="position:absolute; bottom:20px; margin-left: 22px;">
                                                <a href="danh-sach-slide.html"><i class="fa fa-book" aria-hidden="true"></i> Slide</a>
                                                <a href="danh-sach-de-thi.html"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Đề thi</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                            <br>
                            <div class="result-view" align="left">
                                <a href="#" class="btn btn-general btn-green" role="button">{{ Lang::get('sub.seemore') }}</a>
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