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
                        <a class="nav-item nav-link active" id="test-profile-tab" data-toggle="tab" href="#test-profile" role="tab" aria-controls="test-profile">{{ Lang::get('sub.subject') }}</a>
                        <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">{{ Lang::get('sub.exam') }}</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Slide</a>
                        <a class="nav-item nav-link" id="my-profile-tab" data-toggle="tab" href="#my-profile" role="tab" aria-controls="my-profile">{{ Lang::get('sub.news') }}</a>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="test-profile" role="tabpanel" aria-labelledby="test-profile-tab">
                         <div id="document-1" class="row">
                            @foreach($mon as $ds)
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card ">
                                 {{--  <a href="#"><img class="card-img-top" src="img/item.jpg" alt=""></a> --}}
                                 <div class="card-body text-center">
                                    <div class="card-title">
                                        <a href="#"><strong style="color: #000">{{$ds->ten}}</strong></a>
                                    </div>
                                    <p style="color: #0C48BA">{{$ds->gioithieu}}</p>
                                    <div class="cart-icon text-center" style="position:absolute; bottom:20px; margin-left: 22px;">
                                        <a href="danh-sach-slide/{{ $ds->idmon }}/{{ $ds->tenkhongdau }}.html"><i class="fa fa-book" aria-hidden="true"></i> Slide</a>
                                        <a href="danh-sach-de-thi/{{ $ds->idmon }}/{{ $ds->tenkhongdau }}.html"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Đề thi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>    
                </div>
                        <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="row ">
                                @foreach($dethi as $ds)
                                <div class="col-md-3 col-sm-6 desc-document wow fadeInUp" data-wow-delay="0.4s">
                                    <a href="chi-tiet-de-thi/{{ $ds->idmon}}/de{{ $ds->iddethi }}.html" style="text-decoration: none;">
                                        <div class="desc-document-cont">
                                            <div class="thumbnail-blogs ">
                                                <img src="upload/images/dethi/anh/{{$ds->urlanh}} " class="img-fluid " alt="{{$ds->gioithieu}} ">
                                            </div>
                                            <div>
                                                <h3>{{cutString($ds->gioithieu, 33)." ..."}}</h3>
                                                <p class="desc"><span class="fa fa-user" style="color: #1520F5"></span><b style="color: #731717"> BKFA</b></p>
                                            </div>
                                            <div class="document-footer">
                                                <i class="fa fa-calendar"> {{$ds->nam}}</i>
                                                <i class="fa fa-eye"> {{$ds->luotxem}}</i>
                                                <i class="fa fa-arrow-circle-o-down">3</i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row">
                     @php
                            foreach ($slide as $ds) {
                                @endphp
                                <div class="review-block">
                                    <div class="row">
                                        <div class=" col-sm-3">
                                            <img src="upload/images/slide/{{$ds->urlanh}} " class="img-rounded">
                                        </div>
                                        <div class="col-sm-1"></div>
                                        <div class="col-sm-8">
                                            <div class="review-block-title">{{$ds->gioithieu}}</div>
                                            <p><i class="fa fa-calendar"></i> {{$ds->updated_at}}</p>
                                            <div class="review-block-description">@php echo $ds->ghichu; @endphp</div>
                                            <br>
                                            <a onclick="myFunction({{$ds->idslide}})" href="/download-Slide/{{$ds->idslide}}/{{$ds->url}}" class="btn btn-general btn-white" style="padding: 5px;"><i class="fa fa-download"></i> Download</a>
                                            <span style="margin-left: 20px;"><i class="fa fa-download number{{$ds->idslide}}" style="color: #900;"> {{$ds->luotxem}}</i></span>
                                        </div>
                                    </div>
                                </div>
                                @php
                            }
                            @endphp
                    </div>
                </div>
                <div class="tab-pane fade" id="my-profile" role="tabpanel" aria-labelledby="my-profile-tab">
                    <div class="row">  
                        <section class="col-xs-12 col-sm-6 col-md-12">
                            @php
                                foreach($tintuc as $mn){
                                    @endphp
                                    <div class="news-item">
                                        <a href="chi-tiet-tin-tuc/{{ $mn->idtintuc }}/{{ $mn->tenkhongdau }}.html">
                                            <div class="right-news">
                                                <img src="upload/images/tintuc/{{$mn->urlanh}}" alt="" class="img-fluid" style="width: 120px;height: 80px;float: left;margin-right: 15px;">
                                                <p>{{$mn->tieude}}</p>
                                                <small><fa class="fa-watch">{{$mn->created_at}}</fa></small>
                                            </div>
                                        </a>
                                    </div>
                                    @php
                                }
                                @endphp
                        </section>
                    </div>
                </div>
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
@if(!Auth::user())
    @section('script')
        <script>
            function myFunction(id){
                alert('Bạn cần phải đăng nhập để có thể Download tài liệu');
            }
        </script>
    @endsection
    @else
    @section('script')
        <script>
            function myFunction(id){
                var $tmp = Number($('.number'+ id).html()) + 1;
                console.log($('.number'+ id).html());
                $('.number' + id + ':first').html(" " + $tmp);
              }
        </script>
    @endsection
@endif