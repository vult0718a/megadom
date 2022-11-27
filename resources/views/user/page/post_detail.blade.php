@extends('user.layout.main')

@section('title')
<title>Tin tức</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/user/page/post_detail.css">
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
        <div class="header-content col">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12 text-center">
                <button href="#" class="button-QA">
                    <span>ĐẶT CÂU HỎI CHO MEGADOM</span>
                </button>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12"></div>
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12 text-center">
                <div class="input-group">
                    <input type="text" class="form-control input-search" placeholder="Tìm kiếm trong tin tức">
                    <div class="input-group-append btn-search">
                        <i class="fa fa-search icon-btn-search"></i>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="body-content col">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12 left-content">
                <div>
                    <span>Mục lục bài viết</span>
                    <div class="list-header">
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-8 col-8 center-content">
                <div class="post-content">
                    <div class="post-content__body">
                        <img src="{{ asset('storage/images/post/'.$post->id.'/image.png') }}" alt="Image post" width="100%" class="image_post">
                        <span class="title_post">{{ $post->title }}</span><br>
                        <span class="time_post">{{ date('M d, Y', strtotime($post->created_at)) }}</span><br>
                        <div style="margin-top: 28px">
                            <span class="content_post">{!! $post->content !!}</span><br>
                        </div>
                    </div>
                </div>
                <a href="{{ route('post') }}" class="button-QA">
                    <span>TRỞ LẠI TIN TỨC</span>
                </a>
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
        let html = ''; 
        $('.content_post').find(":header").each(function() {
            let str = $(this).text().toLowerCase().replace(/\b[a-z]/g, function(letter) {
                return letter.toUpperCase();
            });
            html += `<p>` + str + `</p>`;
        });
        $('.list-header').html(html);
    </script>
@endsection