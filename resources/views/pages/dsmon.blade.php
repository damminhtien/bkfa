@extends('pages.layouts.index')
@section('title', 'Danh sách tài liệu')

@section('content')

<div id="home-p" class="home-p pages-head2 text-center">
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
<!-- Danh sách tài liệu -->
<section id="document-1" class="document-1">
    <div class="container">
        <div class="row">
            @foreach($dsmon as $ds)
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
        <nav aria-label="Page navigation" style="margin-top: 50px;">
            <ul class="pagination justify-content-center">
                {{ $dsmon->links() }}
            </ul>
        </nav>
    </div>
</section>
<!-- end -->
@endsection