@extends('pages.layouts.index') @section('title', 'Danh sách đề thi') @section('content')

<div id="home-p" class="home-p pages-head1 text-center">
    <div class="container">
        <div class="input-group ">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Tìm kiếm">
            <div class="input-group-addon"><i class="fa fa-search"></i></div>
        </div>
    </div>
    <!--/end container-->
</div>

<section id="single-product-p1">
    <div class="container">
        <div  id="document" class="container-fluid ">
            <div class="wrapper row">
                @foreach($dethi as $ds)
                <div class="col-md-3 col-sm-6 desc-document wow fadeInUp" data-wow-delay="0.4s">
                    <a href="chi-tiet-de-thi/{{ $ds->idmon}}/de{{ $ds->iddethi }}.html" style="text-decoration: none;">
                        <div class="desc-document-cont">
                            <div class="thumbnail-blogs ">
                                <img src="upload/images/dethi/anh/{{$ds->urlanh}} " class="img-fluid " alt="{{$ds->gioithieu}} ">
                            </div>
                            <div>
                                <h3>{{cutString($ds->gioithieu, 33)." ..."}}</h3>
                                <p class="desc">{{$ds->nam}}</p>
                            </div>
                            <div class="document-footer">
                                <i class="fa fa-heart-o"> 1</i>
                                <i class="fa fa-eye"> {{$ds->luotxem}}</i>
                                <i class="fa fa-arrow-circle-o-down"> 3</i>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <nav aria-label="Page navigation" style="margin-top: 50px;">
                <ul class="pagination justify-content-center">
                    {{ $dethi->links() }}
                </ul>
            </nav>
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