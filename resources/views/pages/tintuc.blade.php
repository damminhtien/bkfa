@extends('pages.layouts.index') @section('title', 'Tin tức 2') @section('content')
<!-- home news list -->
<div id="home-p" class="home-p pages-head1 text-center">
    <div class="container">
        <h1 class="wow fadeInUp" data-wow-delay="0.1s">News</h1>
        <p>Discover more</p>
    </div>
    <!--/end container-->
</div>
<!-- end -->
<!-- news list -->
<section id="story" class="about-p3">
    <style>
    .news {
        border: 1px solid #dedede;
        padding: 50px;
    }
    </style>
    @php foreach ($tintuc as $tt) { if($tt->idtintuc % 2 != 0){ @endphp
    <div class="container news">
        <div class="row">
            <div class="col-md-6">
                <div class="story-desc">
                    <h3>{{$tt->tieude}}</h3>
                    <div class="heading-border-light"></div>
                    <p>{{$tt->gioithieu}}</p>
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fa fa-calendar"></i> {{$tt->created_at}}
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-user"></i> Admin
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-comments-o"></i> 1 comments
                        </div>
                        <div class="col-md-3">
                            <a href="chi-tiet-tin-tuc/{{ $tt->idtintuc }}/{{ $tt->tenkhongdau }}.html" class="mb-2" style="text-decoration: none;">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-himg">
                    <img src="upload/images/tintuc/{{$tt->urlanh}}" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="" width="540" height="325">
                </div>
            </div>
        </div>
    </div>
    @php } else{ @endphp
    <div class="container news">
        <div class="row">
            <div class="col-md-6 ">
                <div class="story-himg story-himg-middle-u">
                    <img src="upload/images/tintuc/{{$tt->urlanh}}" class="img-fluid wow fadeInUp" data-wow-delay="0.1s" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-desc story-desc-middle ">
                    <h3>{{$tt->tieude}}</h3>
                    <div class="heading-border-light"></div>
                    <p>{{$tt->gioithieu}}</p>
                    <div class="row">
                        <div class="col-md-3">
                            <i class="fa fa-calendar"></i> {{$tt->created_at}}
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-user"></i> Admin
                        </div>
                        <div class="col-md-3">
                            <i class="fa fa-comments-o"></i> 1 comments
                        </div>
                        <div class="col-md-3">
                            <a href="chi-tiet-tin-tuc/{{ $tt->idtintuc }}/{{ $tt->tenkhongdau }}.html" class="mb-2" style="text-decoration: none;">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php } } @endphp
    <nav aria-label="Page navigation" style="margin-top: 50px;">
        <ul class="pagination justify-content-center">
            {{ $tintuc->links() }}
        </ul>
    </nav>
</section>
<!-- end -->
@endsection