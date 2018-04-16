@extends('pages.layouts.index')
@section('title', 'Danh sách tài liệu')

@section('content')
<!-- Danh sách tài liệu -->
<section id="document-1" class="document-1">
    <div class="container">
        <div class="input-group ">
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Tìm kiếm">
            <div class="input-group-addon"><i class="fa fa-search"></i></div>
        </div>
        <div class="row">
            @foreach($dsmon as $ds)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card ">
                    {{-- <a href="#"><img class="card-img-top" src="upload/images/{{$dt->urlanh}}" alt=""></a> --}}
                    <div class="card-body text-center">
                        <div class="card-title">
                            <a href="#">{{$ds->ten}}</a>
                        </div>
                        <strong>{{$ds->gioithieu}}</strong>
                        <div class="cart-icon text-center">
                            <a href="#"><i class="fa fa-book" aria-hidden="true"></i> Slide</a>
                            <a href="chi-tiet-tai-lieu/{{ $ds->idmon }}/{{ $ds->tenkhongdau }}.html"><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Đề thi</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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
</section>
<!-- end -->
@endsection