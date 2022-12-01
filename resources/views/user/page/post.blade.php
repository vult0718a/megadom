@extends('user.layout.main')

@section('title')
<title>Tin tức</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/user/page/post.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
@endsection

@section('content')
<div>
    <div class='main-wrapper'>
        <div class="banner-container">
        <div class="banner-content">
            <p class="banner-text-small">TRANG CHỦ. TIN TỨC</p>
            <p class="banner-text-big">Tin tức</p>
        </div>
        </div>
    </div>

    <div class="content">
        <div class="header-content col">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12" style="padding: 0px;">
                <button href="#" class="button-QA" style="width: 100%;">
                    <span>ĐẶT CÂU HỎI  CHO MEGADOM</span>
                </button>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12"></div>
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12 text-right" style="padding: 0px;">
                <div class="input-group" style="width: 100%;">
                    <input type="text" class="form-control input-search" placeholder="Tìm kiếm trong tin tức">
                    <div class="input-group-append btn-search">
                        <i class="fa fa-search icon-btn-search"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="body-content col">
            <div class="col-xl-9 col-lg-9 col-sm-8 col-8 left-content" style="padding-left: 0px;">
                @foreach($posts as $post)
                    <div class="post-content">
                        <div class="post-content__body">
                            <img src="{{ asset('storage/images/post/'.$post->id.'/image.png') }}" alt="Image post" class="image_post">
                            <br>
                            <span class="title_post">{{ $post->title }}</span><br>
                            <span class="time_post">{{ date('M d, Y', strtotime($post->created_at)) }}</span><br>
                            <p class="content_post">{{ $post->short_content }}</p>
                            <button data-link="{{ route('post.detail', $post->id) }}" class="button-QA post-detail">
                                <span>TÌM HIỂU THÊM</span>
                            </button>
                        </div>
                    </div>
                @endforeach
                <center>{{ $posts->links('pagination.default') }}</center>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-4 col-4 right-content">
                <div class="title-right-content"><span>DANH MỤC</span></div>
                @foreach($categories as $category)
                    <div class="post-categoris"><span>{{ $category->title }}</span></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(".post-detail").click(function() {
        window.location.href = $(this).data('link');
    });
</script>
@endsection