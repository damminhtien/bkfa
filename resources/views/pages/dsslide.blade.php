@extends('pages.layouts.index') @section('title', 'Danh sách slide') @section('content')

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

<section id="single-product-p1">
    <div class="container">
        <div class="wrapper row">
            <div class="col-md-12">
                <div class="service-h-tab">
                    <nav class="nav nav-tabs" id="myTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Slide</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Gợi ý</a>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            @php
                            foreach ($slide as $ds) {
                                @endphp
                                <div class="review-block">
                                    <div class="row">
                                        <div class=" col-sm-3">
                                            <img src="upload/images/slide/{{$ds->urlanh}} " class="img-rounded">
                                            <div class="review-block-name" style="margin-left: 10px;"><a href="#"> Phạm Đăng Hải</a></div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="review-block-title">{{$ds->gioithieu}}</div>
                                            <div class="review-block-description">@php echo $ds->ghichu; @endphp</div>
                                            <br>
                                            <a href="/download-Slide/{{$ds->url}}" class="btn btn-general btn-white" style="padding: 5px;"><i class="fa fa-download"></i> Download</a>
                                        </div>
                                    </div>
                                </div>
                                @php
                            }
                            @endphp
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <strong>Slide đã được hệ thống sắp xếp theo thứ tự lượt tải giảm dần, các bạn hãy lựa chọn cho mình một combo thích hợp nha. Bản thân ad thì sẽ sắm combo đầu tiên vì khá đc nhiều bạn download. Như các bạ biết thì cái gì dùng nhiều tất sẽ tốt. </strong>
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
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card ">
                            <a href="#"><img class="card-img-top" src="img/item.jpg" alt=""></a>
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <a href="#">cấu trúc dữ liệu và giải thuật</a>
                                </div>
                                <strong>Một trong những môn quan trong, đòi hỏi ...</strong>
                                <div class="cart-icon text-center">
                                    <a href="#"><i class="fa fa-book" aria-hidden="true"></i> Slide</a>
                                    <a href="#"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Đề thi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card ">
                            <a href="#"><img class="card-img-top" src="img/item.jpg" alt=""></a>
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <a href="#">cấu trúc dữ liệu và giải thuật</a>
                                </div>
                                <strong>Một trong những môn quan trong, đòi hỏi ...</strong>
                                <div class="cart-icon text-center">
                                    <a href="#"><i class="fa fa-book" aria-hidden="true"></i> Slide</a>
                                    <a href="#"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Đề thi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card ">
                            <a href="#"><img class="card-img-top" src="img/item.jpg" alt=""></a>
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <a href="#">cấu trúc dữ liệu và giải thuật</a>
                                </div>
                                <strong>Một trong những môn quan trong, đòi hỏi ...</strong>
                                <div class="cart-icon text-center">
                                    <a href="#"><i class="fa fa-book" aria-hidden="true"></i> Slide</a>
                                    <a href="#"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Đề thi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card ">
                            <a href="#"><img class="card-img-top" src="img/item.jpg" alt=""></a>
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <a href="#">cấu trúc dữ liệu và giải thuật</a>
                                </div>
                                <strong>Một trong những môn quan trong, đòi hỏi ...</strong>
                                <div class="cart-icon text-center">
                                    <a href="#"><i class="fa fa-book" aria-hidden="true"></i> Slide</a>
                                    <a href="#"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Đề thi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection