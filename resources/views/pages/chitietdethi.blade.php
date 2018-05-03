@extends('pages.layouts.index') @section('title', 'Chi tiết đề thi') @section('content')
<div id="home-p" class="home-p pages-head5 text-center">
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
<section id="single-product-p1">
    <div class="container">
        <div>
            @if(count($errors) > 0)
                <br><br>
                <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}}<br>
                @endforeach()
                </div>
            @endif

            @if(session('thongbao'))
                <br><br>
                <div class="alert alert-success"> 
                    {{session('thongbao')}}
                </div>
            @endif
        </div>
        <br><br>
        <div class="wrapper row">
            <div class="preview col-md-9">
                <table>
                    <thead>
                        <tr>
                            <td>
                                <span class="fa fa-user" data-toggle="tooltip" title="Tác giả: BKFA.COM" style="margin-left: 20px;"> BKFA.COM</span>
                            </td>
                            <td style="text-align: right;">
                                <a href="/download-de-thi/{{$chitiet->url}}" class="btn btn-general btn-white" style="margin-right: 15px;"><i class="fa fa-download"></i> Download</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="fa fa-paperclip" style="margin-left: 20px; font-size: 20px;"> <b>{{$chitiet->gioithieu}}</b></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div style="margin-left: 20px;">
                                @php echo($chitiet->ghichu);@endphp
                                </div>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                @include('pages.hienthitep')
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <!-- id="test" action="danhgia/2/4/5" method="post" -->
                                    <div class="stars" style="text-align: center;">
                                         <form >
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="hidden" name="iddethi" value="{{$chitiet->iddethi}}">
                                                <input type="hidden" name="iduser" value="{{ (Auth::check()) ? Auth::user()->id : -1}}">
                                                <input name="star" class="star star-5" id="star-5" type="radio" value="5" />
                                                <label class="star star-5" for="star-5"></label>
                                                <input name="star" class="star star-4" id="star-4" type="radio" value="4"/>
                                                <label class="star star-4" for="star-4"></label>
                                                <input name="star" class="star star-3" id="star-3" type="radio" value="3" />
                                                <label class="star star-3" for="star-3"></label>
                                                <input name="star" class="star star-2" id="star-2" type="radio" value="2" />
                                                <label class="star star-2" for="star-2"></label>
                                                <input name="star" class="star star-1" id="star-1" type="radio" value="1" />
                                                <label class="star star-1" for="star-1">
                                                </label>               
                                            </form>
                                        <div class="btn btn-outline-primary">Lượt đánh giá trung bình | <span id="data"></span> / 5</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        {{-- <tr>
                            <td colspan="2">
                                <div class="row">
                                    <textarea name="" id="" placeholder="Đánh giá bằng nhận xét" style="height: 74px; width: 100%;"></textarea>
                                    <button style="height: 38px; margin: 10px auto;" class="btn btn-general btn-green" role="button">Gửi</button>
                                </div>
                            </td>
                        </tr> --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="related col-md-3">
                <h4 class="related-document">Tài liệu liên quan</h4>
                <div class="related-item">
                    @php
                    foreach ($lienquan as $lq) {
                        @endphp
                        <li>
                            <div class="review-block-title" data-toggle="tooltip" title="Kế hoạch tổ chức chương trình thắp sáng ước mơ văn nghệ mừng xuân 2016">
                                <!--  <span class="number">1. </span> -->
                                <a href="chi-tiet-de-thi/{{ $lq->idmon}}/de{{ $lq->iddethi }}.html"><i class="fa fa-book"></i> {{$lq->gioithieu}}</a>
                                <div style="text-align: center; color: #AFAFAF">
                                    <style>
                                        .lienquan>div{
                                            margin: 5px auto; padding: 10px; text-align: center;
                                        }
                                    </style>
                                    <div class="row lienquan">
                                        <div class="col-xs-4"><span class="fa fa-calendar"> {{$lq->nam}}</span></div>
                                        <div class="col-xs-4"><span class="fa fa-eye"> {{$lq->luotxem}}</span></div>
                                        <div class="col-xs-4"><span class="fa fa-download"> 10000</span></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @php
                    }
                    @endphp
                </div>
            </div>
            <div class="col-md-12">
                <div class="service-h-tab">
                    <nav class="nav nav-tabs" id="myTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Comments</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile"><i class="fa fa-file-pdf-o"></i> Lời giải</a>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="review-block">
                                <div class="row">
                                    <div class="col-sm-12">
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
                                            <div class= "fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#bkfa#chitietdethi{{$chitiet->iddethi}}" data-numposts="5" data-width="750"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <a href="/download-loi-giai/{{$chitiet->urlloigiai}}" class="btn btn-general btn-white" style="margin-top:10px;"><i class="fa fa-download"></i> Download</a>
                            <br><br>
                            @include('pages.hienthiloigiai')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="document-1" class="document-1" style="padding-top:0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="shop-p1-title">
                    <h3>Liên quan</h3>
                    <div class="heading-border-light"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="row" style="padding: 0px">
                    @php
                    foreach ($mon as $m) {
                        @endphp
                         <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card ">
                               {{--  <a href="#"><img class="card-img-top" src="img/item.jpg" alt=""></a> --}}
                                <div class="card-body text-center">
                                    <div class="card-title">
                                        <a href="#"><strong style="color: #000">{{$m->ten}}</strong></a>
                                    </div>
                                    <p style="color: #0C48BA">{{$m->gioithieu}}</p>
                                    <div class="cart-icon text-center" style="position:absolute; bottom:20px; margin-left: 22px;">
                                        <a href="danh-sach-slide/{{ $m->idmon }}/{{ $m->tenkhongdau }}.html"><i class="fa fa-book" aria-hidden="true"></i> Slide</a>
                                        <a href="danh-sach-de-thi/{{ $m->idmon }}/{{ $m->tenkhongdau }}.html"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Đề thi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php
                    }
                    @endphp
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
    <script src="js/ajaxDanhGia.js"></script>
@endsection