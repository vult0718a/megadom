@extends('user.layout.main')

@section('title')
<title>Hỏi đáp chuyên gia</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/public/frontend/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('public/user/page/post.css')}}">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
@endsection

@section('content')
<div>
    <div class='main-wrapper'>
        <div class="banner-container">
        <div class="banner-content">
            <p class="banner-text-small set-font-size" data-font-size="28">TRANG CHỦ. <a style="text-decoration:none; color: white;" href="{{ route('hoi-dap-chuyen-gia') }}">TIN TỨC</a></p>
            <p class="banner-text-big set-font-size set-height-block" data-font-size="96" data-height-block="113">Hỏi đáp<br>chuyên gia</p>
        </div>
        </div>
    </div>

    <div class="content">
        <div class="header-content col">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12" style="padding: 0px;">
                <button href="#" class="button-QA" style="width: 100%;">
                    <span><a style="text-decoration:none; color: white;" href="{{ route('lien_he') }}">ĐẶT CÂU HỎI CHO MEGADOM</a></span>
                </button>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12"></div>
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12 text-right" style="padding: 0px;">
                <div class="input-group" style="width: 100%;">
                    <input type="text" class="form-control input-search" placeholder="Tìm kiếm trong tin tức" style="z-index: 0;">
                    <div class="input-group-append btn-search">
                        <i class="fa fa-search icon-btn-search"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-4 col-4 right-content">
                <div class="title-right-content set-font-size" data-font-size="24"><span>DANH MỤC</span></div>
                @foreach($categories as $category)
                    <div class="post-categoris"><span><a style="color: #0062FF;" href="{{ route('hoi-dap-chuyen-gia').'?category='.$category->id }}">{{ $category->title }}</a></span></div>
                @endforeach
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12" style="padding: 0px;">
                <button href="#" class="button-QA" style="width: 100%;">
                    <span><a style="text-decoration:none; color: white;" href="https://drmegadom.com/lien-he">ĐẶT CÂU HỎI CHO MEGADOM</a></span>
                </button>
            </div>
        </div>

        <div class="body-content col">
            <div class="col-xl-9 col-lg-9 col-sm-8 col-8 left-content" style="padding-left: 0px;">
                @foreach($experts as $expert)
                    <div class="post-content">
                        <div class="post-content__body">
                            <!--<a href="{{ route('expert.detail', $expert->id) }}"><img style="width:100%" src="{{ asset('public/storage/images/expert/'.$expert->id.'.png') }}" alt="Image post" class="image_post"></a>-->
                            <a href="{{ route('expert.detail', $expert->id) }}"><img style="width:100%" src="{{ asset('public/storage/images/post/'.$expert->id.'.'.$expert->extension) }}" alt="Image post" class="image_post"></a>
                            <br>
                            <a href="{{ route('expert.detail', $expert->id) }}" style="text-decoration:none"><span class="title_post set-font-size" data-font-size="28">{{ $expert->title }}</span></a><br>
                            <span class="time_post set-font-size" data-font-size="22">{{ date('M d, Y', strtotime($expert->created_at)) }}</span><br>
                            <p class="content_post set-font-size" data-font-size="18">{{ $expert->short_content }}</p>
                            <button data-link="{{ route('expert.detail', $expert->id) }}" class="button-QA post-detail set-padding-button" data-padding-left="31" data-padding-top="25">
                                <span class="set-font-size" data-font-size="22">ĐỌC THÊM</span>
                            </button>
                        </div>
                    </div>
                @endforeach
                <center>{{ $experts->links('pagination.default') }}</center>
            </div>

            <div class="col-xl-3 col-lg-3 col-sm-4 col-4 right-content sticky-detail">
                <div class="title-right-content"><span>DANH MỤC</span></div>
                @foreach($categories as $category)
                    <div class="post-categoris set-font-size" data-font-size="18"><span><a style="color: #0062FF;" href="{{ route('hoi-dap-chuyen-gia').'?category='.$category->id }}">{{ $category->title }}</a></span></div>
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


    let widthScreenMobile = $(this).width();
    if (widthScreenMobile <= 767) {
        removeSize();
        $(".mobile-to-top").each(function() {
            $(this).parent().prepend(this);
        });

        $("img").each(function() {
            if ($(this).data('src-mobile')) {
                $(this).attr('src', $(this).data('src-mobile'));
            }
        });
        }

        $(window).resize(function(){
        let widthScreenMobileResize = $(this).width();
        if (widthScreenMobileResize <= 767) {
            removeSize();
        }
    });

    function removeSize() {
        $(".set-font-size").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-width-block").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-margin-left").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-margin-right").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-size-image").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-padding-top").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-margin-top").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-height-block").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-padding-button").each(function() {
          $(this).removeAttr("style");
        });

        $(".set-line-height").each(function() {
          $(this).removeAttr("style");
        });
    }
</script>
@endsection
