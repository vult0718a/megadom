@extends('user.layout.main')

@section('title')
<title>Báo chí nói về Megadom</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/user/page/newspaper.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
@endsection

@section('content')
<div>
    <div class='main-wrapper'>
        <div class="banner-container">
        <div class="banner-content">
            <p class="banner-text-small set-font-size" data-font-size="24"><a style="text-decoration:none; color: white;" href="{{ route('home') }}">TRANG CHỦ. </a><a style="text-decoration:none; color: white;" href="{{ route('post') }}">TIN TỨC</a></p>
            <p class="banner-text-big set-font-size set-height-block" data-font-size="64" data-height-block="75">Báo chí nói về<br>Megadom</p>
        </div>
        </div>
    </div>

    <div class="content set-width-block" data-width-block="1522">
        @foreach($newspapers as $newspaper)
            <div class="body-content">
                  <!--<a href="{{ $newspaper->url }}" target="_blank"><img src="{{ asset('public/storage/images/newspaper/'.$newspaper->id.'/image.png') }}" style="margin-bottom: 150px; width: 960px; padding: 0px;" alt="home-penile" class="col-xl-7 col-lg-7 col-sm-12 col-12 set-size-image img-mobile" data-size-width="960"></a>-->
                    <a href="{{ $newspaper->url }}" target="_blank"><img src="{{ asset('public/storage/images/newspaper/'.$newspaper->id.'.'.$newspaper->extension) }}" style="margin-bottom: 150px; width: 960px; padding: 0px;" alt="home-penile" class="col-xl-7 col-lg-7 col-sm-12 col-12 set-size-image img-mobile" data-size-width="960"></a>
                    <div class="col-xl-5 col-lg-5 col-sm-12 col-12 set-width-block set-margin-left" data-width-block="493" style="margin-bottom: 150px; width: 493px; padding: 0px; margin-left: 68px" data-margin-left="68">
                    <a href="{{ $newspaper->url }}" target="_blank" style="text-decoration: none"><h3 class="title-body-content-1 set-font-size" data-font-size="32">{{ $newspaper->title }}</h3></a>
                    <hr class="line-header-content" style="margin-left:0">
                    <div style="text-align: justify;" class="margin-50">
                        <span class="text-body-content-1 set-font-size" data-font-size="18">{{ $newspaper->short_content }}</span>
                    </div>
                    <button data-link="{{ $newspaper->url }}" class="button-QA button-url">
                        <span class="set-font-size" data-font-size="22">TÌM HIỂU THÊM</span>
                    </button>
                </div>
            </div>
        @endforeach
        <div class="col-xl-12 col-lg-12 col-sm-12 col-12">{{ $newspapers->links('pagination.default') }}</div>
    </div>
</div>
@endsection

@section('script')
<script>

    $(".button-url").click(function() {
        window.open($(this).data('link'), '_blank');
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