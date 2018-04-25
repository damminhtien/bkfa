@extends('pages.layouts.index') 
@section('title', 'Chi tiết đề thi') 
@section('content')

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
        <div class="wrapper row">
            <div class="preview col-md-9">
                <table class="table">
                    <thead>
                        <tr>
                            <td>
                                <span class="fa fa-eye" data-toggle="tooltip" title="Tác giả: TTB"> {{$chitiet->gioithieu}}</span>
                            </td>
                            <td style="text-align: right;">
                                <a href="#" class="btn btn-general btn-white"><i class="fa fa-download"></i> Download</a>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                @include('pages.hienthitep')
                            </td>
                        </tr>
                        <td colspan="2">
                            <div class="row">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="pic-1"><img src="img/shop/shop-item-1.jpg" /></div>
                                    <div class="tab-pane" id="pic-2"><img src="img/shop/shop-item-3.jpg" /></div>
                                    <div class="tab-pane" id="pic-3"><img src="img/shop/shop-item-4.jpg" /></div>
                                    <div class="tab-pane" id="pic-4"><img src="img/shop/shop-item-5.jpg" /></div>
                                    <div class="tab-pane" id="pic-5"><img src="img/shop/shop-item-2.jpg" /></div>
                                </div>
                            </div>
                        </td>
                        </tr> -->
                        <tr>
                            <td style="text-align: center;" colspan="2">
                                <a href="#" class="btn btn-general btn-white" style="margin-top:10px; "><i class="fa fa-eye"></i> Xem thêm ...</a>
                                <a href="#" class="btn btn-general btn-white" style="margin-top:10px; "><i class="fa fa-download"></i> Tải xuống &nbsp</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <div class="stars">
                                        <form action="">
                                            <input class="star star-5" id="star-5" type="radio" name="star" />
                                            <label class="star star-5" for="star-5"></label>
                                            <input class="star star-4" id="star-4" type="radio" name="star" />
                                            <label class="star star-4" for="star-4"></label>
                                            <input class="star star-3" id="star-3" type="radio" name="star" />
                                            <label class="star star-3" for="star-3"></label>
                                            <input class="star star-2" id="star-2" type="radio" name="star" />
                                            <label class="star star-2" for="star-2"></label>
                                            <input class="star star-1" id="star-1" type="radio" name="star" />
                                            <label class="star star-1" for="star-1"></label>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="row">
                                    <textarea name="" id="" placeholder="Đánh giá bằng nhận xét" style="height: 74px; width: 100%;"></textarea>
                                    <button style="height: 38px; margin: 10px auto;" class="btn btn-general btn-green" role="button">Gửi</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <td colspan="2">
                            <div class="row">
                                <ul class="preview-thumbnail nav nav-tabs">
                                    <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/shop/shop-item-1.jpg" /></a></li>
                                    <li><a data-target="#pic-2" data-toggle="tab"><img src="img/shop/shop-item-3.jpg" /></a></li>
                                    <li><a data-target="#pic-3" data-toggle="tab"><img src="img/shop/shop-item-4.jpg" /></a></li>
                                    <li><a data-target="#pic-4" data-toggle="tab"><img src="img/shop/shop-item-5.jpg" /></a></li>
                                    <li><a data-target="#pic-5" data-toggle="tab"><img src="img/shop/shop-item-2.jpg" /></a></li>
                                </ul>
                            </div>
                        </td>
                        </tr> -->
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="related col-md-3">
                <h4 class="related-document">Tài liệu liên quan</h4>
                <div class="related-item">
                    <ol>
                        <li>
                            <div class="review-block-title" data-toggle="tooltip" title="Kế hoạch tổ chức chương trình thắp sáng ước mơ văn nghệ mừng xuân 2016">
                                <!--  <span class="number">1. </span> -->
                                <a href="#"><i class="fa fa-book"></i> Kế hoạch tổ chức chương trình thắp sáng ước mơ văn nghệ mừng xuân 2016</a>
                                <div style="text-align: center; color: #AFAFAF">
                                    <span class="fa fa-eye"> 300</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp</span>
                                    <span class="fa fa-download"> 10000</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="review-block-title" data-toggle="tooltip" title="Kế hoạch tổ chức chương trình thắp sáng ước mơ văn nghệ mừng xuân 2016">
                                <a href="#"><i class="fa fa-book"></i> Kế hoạch tổ chức chương trình thắp sáng ước mơ văn nghệ mừng xuân 2016</a>
                                <div style="text-align: center; color: #AFAFAF">
                                    <span class="fa fa-eye"> 300</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp</span>
                                    <span class="fa fa-download"> 10000</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="review-block-title" data-toggle="tooltip" title="Kế hoạch tổ chức chương trình thắp sáng ước mơ văn nghệ mừng xuân 2016">
                                <a href="#"><i class="fa fa-book"></i> Kế hoạch tổ chức chương trình thắp sáng ước mơ văn nghệ mừng xuân 2016</a>
                                <div style="text-align: center; color: #AFAFAF">
                                    <span class="fa fa-eye"> 300</span>
                                    <span>&nbsp&nbsp&nbsp&nbsp</span>
                                    <span class="fa fa-download"> 10000</span>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-md-12">
                <div class="service-h-tab">
                    <nav class="nav nav-tabs" id="myTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-expanded="true">Reviews</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile">Desciption</a>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="review-block">
                                <div class="row">
                                    <div class=" col-sm-3">
                                        <img src="img/client/avatar-3.jpg" class="img-rounded">
                                        <div class="review-block-name"><a href="#">Nktailor</a></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="rating">
                                            <div class="stars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="review-block-title">this was nice in buy</div>
                                        <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-block">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="img/client/avatar-1.jpg" class="img-rounded">
                                        <div class="review-block-name"><a href="#">Nktailor</a></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="rating">
                                            <div class="stars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="review-block-title">this was nice in buy</div>
                                        <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                                    </div>
                                </div>
                            </div>
                            <div class="review-block">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="img/client/avatar-2.jpg" class="img-rounded">
                                        <div class="review-block-name"><a href="#">Nktailor</a></div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="rating">
                                            <div class="stars">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                        </div>
                                        <div class="review-block-title">this was nice in buy</div>
                                        <div class="review-block-description">this was nice in buy. this was nice in buy. this was nice in buy. this was nice in buy this was nice in buy this was nice in buy this was nice in buy this was nice in buy</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute</p>
                            <p>Nulla est ullamco ut irure incididunt nulla Lorem Lorem minim irure officia enim reprehenderit. Magna duis labore cillum sint adipisicing exercitation ipsum. Nostrud ut anim non exercitation velit laboris fugiat cupidatat. Commodo esse dolore fugiat sint velit ullamco magna consequat voluptate minim amet aliquip ipsum aute</p>
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