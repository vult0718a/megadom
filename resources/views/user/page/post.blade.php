@extends('user.layout.main')

@section('title')
<title>Tin tức</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/user/page/post.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
@endsection

@section('content')
<div class="post-screen">
    <div class="banner">
        <div class="text-banner">
            <p class="text-small">TRANG CHỦ. TIN TỨC</p>
            <p class="text-bold">TIN TỨC</p>
        </div>
    </div>
    <div class="content">
        <div class="header-content">
            <div>
                <button href="#" class="button-QA">
                    <span>ĐẶT CÂU HỎI  CHO MEGADOM</span>
                </button>
            </div>

            <div class="input-group">
                <input type="text" class="form-control input-search" placeholder="Tìm kiếm trong tin tức">
                <div class="input-group-append btn-search">
                    <i class="fa fa-search icon-btn-search"></i>
                </div>
            </div>
        </div>

        <div class="body-content">
            <div class="left-content">
                @foreach($posts as $post)
                    <div class="post-content">
                        <div class="post-content__body">
                            <img src="{{ asset('storage/images/post/'.$post->id.'/image.png') }}" alt="Image post" width="952px" height="460px" class="image_post">
                            <span class="title_post">{{ $post->title }}</span><br>
                            <span class="time_post">{{ date('M d, Y', strtotime($post->created_at)) }}</span><br>
                            <div style="height: 144px; margin-top: 28px">
                                <span class="content_post">{{ $post->short_content }}</span><br>
                            </div>
                            <a href="{{ route('post.detail', $post->id) }}" class="button-QA">
                                <span>ĐỌC THÊM</span>
                            </a>
                        </div>
                    </div>
                @endforeach
                <center>{{ $posts->links('pagination.default') }}</center>
            </div>
            <div class="right-content">
                <div class="title-right-content"><span>DANH MỤC</span></div>
                @foreach($categories as $category)
                    <div class="post-categoris"><span>{{ $category->title }}</span></div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection