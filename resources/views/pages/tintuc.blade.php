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
<style>
    #story{
        margin-top: 50px;
    }
    .news {
        border: 1px solid #dedede;
        padding: 50px;
    }
</style>
<!-- news list -->
<section id="story" class="about-p3">
    @php foreach ($tintuc as $tt) { if($tt->idtintuc % 2 != 0){ @endphp
    <div class="container news animated fadeInLeft">
        <div class="row">
            <div class="col-md-6">
                <div class="story-desc">
                    <a href="chi-tiet-tin-tuc/{{ $tt->idtintuc }}/{{ $tt->tenkhongdau }}.html" class="mb-2" style="text-decoration: none;"><h3>{{cutString($tt->tieude,80)}}</h3></a>
                    <br>
                    <div class="heading-border-light"></div>
                    <p>{{cutString($tt->gioithieu,200)}} ...</p>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-calendar"></i> Thời gian đăng: {{$tt->created_at}}
                        </div>
                        <br>
                        <div class="col-md-4">
                            <i class="fa fa-user"></i> Admin
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-eye"></i> {{$tt->luotxem}} lượt xem
                        </div>
                        <div class="col-md-4">
                            <a href="chi-tiet-tin-tuc/{{ $tt->idtintuc }}/{{ $tt->tenkhongdau }}.html" class="mb-2" style="text-decoration: none;">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-himg">
                    <img src="upload/images/tintuc/{{$tt->urlanh}}" class="img-fluid wow" data-wow-delay="0.1s" alt="" width="540" height="325">
                </div>
            </div>
        </div>
    </div>
    @php } else{ @endphp
    <div class="container news animated fadeInRight">
        <div class="row">
            <div class="col-md-6 ">
                <div class="story-himg story-himg-middle-u">
                    <img src="upload/images/tintuc/{{$tt->urlanh}}" class="img-fluid wow" data-wow-delay="0.1s" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-desc story-desc-middle ">
                    <a href="chi-tiet-tin-tuc/{{ $tt->idtintuc }}/{{ $tt->tenkhongdau }}.html" class="mb-2" style="text-decoration: none;"><h3>{{cutString($tt->tieude,80)}}</h3></a>
                    <div class="heading-border-light"></div>
                    <p>{{cutString($tt->gioithieu,200)}} ...</p>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-calendar"></i> Thời gian đăng: {{$tt->created_at}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <i class="fa fa-user"></i> Admin
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-eye"></i> {{$tt->luotxem}} views
                        </div>
                        <div class="col-md-4">
                            <a href="chi-tiet-tin-tuc/{{ $tt->idtintuc }}/{{ $tt->tenkhongdau }}.html" class="mb-2" style="text-decoration: none;">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
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