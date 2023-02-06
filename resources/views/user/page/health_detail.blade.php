@extends('user.layout.main')

@section('title')
<title>Thông tin sức khỏe</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/public/frontend/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/public/user/page/post_detail.css')}}">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
@endsection

@section('content')
<div>
    <div class='main-wrapper'>
        <div class="banner-container">
        <div class="banner-content">
            <p class="banner-text-small set-font-size" data-font-size="28">TRANG CHỦ. <a style="text-decoration:none; color: white;" href="{{ route('thong-tin-suc-khoe') }}">THÔNG TIN SỨC KHỎE</a></p>
            <p class="banner-text-big set-font-size set-height-block" data-font-size="96" data-height-block="113">Thông tin <br>sức khỏe</p>
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
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12 button-hide" style="padding: 0px;">
                <button href="#" class="button-QA">
                    <span><a style="text-decoration:none; color: white;" href="https://drmegadom.com/lien-he">ĐẶT CÂU HỎI CHO MEGADOM</a></span>
                </button>
            </div>
        </div>

        <div class="body-content col">
            <div class="col-xl-3 col-lg-3 col-sm-12 col-12 left-content sticky-detail table-contents-pc" id="left-content">
                <div>
                    <span>Mục lục bài viết</span>
                    <div class="list-header">
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-sm-12 col-12 center-content" id="right-content">
                <div class="post-content">
                    <div class="post-content__body">
                        <img style="width:100%" src="{{ asset('public/storage/images/post/'.$health->id.'.'.$health->extension) }}" alt="Image post" width="100%" class="image_post">
                        <p class="title_post">{{ $health->title }}</p>
                        <p class="time_post">{{ date('M d, Y', strtotime($health->created_at)) }}</p>
                        <div class="col-xl-3 col-lg-3 col-sm-12 col-12 left-content sticky-detail table-contents-mobile" id="left-content">
                            <div>
                                <span>Mục lục bài viết</span>
                                <div class="list-header">
                                </div>
                            </div>
                        </div>
                        <div class="content_post_block mt-28-custom">
                            <span class="content_post">{!! $health->content !!}</span><br>
                        </div>
                    </div>
                </div>
                <a href="{{ route('thong-tin-suc-khoe') }}" class="button-QA margin-left-18">
                    <span>TRỞ LẠI THÔNG TIN SỨC KHỎE</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
        // let html = ''; 
        // $('.content_post').find(":header").each(function() {
        //     let str = $(this).text().toLowerCase().replace(/\b[a-z]/g, function(letter) {
        //         return letter.toUpperCase();
        //     });
        //     html += `<p>` + str + `</p>`;
        // });
        // $('.list-header').html(html);

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
    
    ////////////////////////////
    let ToC = "<nav role='navigation' class='table-of-contents'>" + "<ol>";
    
    let newLine, el, title, link, count = 1;
    
    $(".content_post h1").each(function() {
      el = $(this);
      el.attr("id","i"+count++)
      title = el.text();
      link = "#" + el.attr("id");
    
      newLine =
        "<li>" +
          "<a href='" + link + "'>" +
            title +
          "</a>" +
        "</li>";
    
      ToC += newLine;
    
    });
    
    ToC +=
       "</ol>" +
      "</nav>";
    $(".list-header").prepend(ToC);
    
    ////////////////////
    $(".table-of-contents a").on("click", function(){
        if($(document).width() > 1023){
            $("body, html").animate({scrollTop: $($(this).attr('href')).offset().top-85},300);
        }else{
            $("body, html").animate({scrollTop: $($(this).attr('href')).offset().top},300);
        }
    });
</script>
@endsection