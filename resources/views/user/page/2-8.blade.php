@extends('user.layout.main')

@section('title')
<title>Dịch vụ khác</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/user/page/2-8.css">
@endsection

@section('content')
<div class="body-content">
    <div class="banner">
      <div class="text-banner">
        <p class="text-medium"><a style="text-decoration:none; color: white;" href="{{ route('home') }}">TRANG CHỦ.</a> PHẪU THUẬT NAM KHOA. <a style="text-decoration:none; color: white;" href="{{ route('2-8') }}">DỊCH VỤ KHÁC </p>
        <p class="text-bold">Dịch vụ khác</span></p>
      </div>
    </div>
    <div class='content-body'>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12" style="padding: 0px;">
                <p class="set-font-size" data-font-size="32">PHẪU THUẬT THẨM MỸ<br>CONG DƯƠNG VẬT</p>
                <hr>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12" style="padding: 0px;">
                <p  class="set-font-size" data-font-size="32">PHẪU THUẬT THẨM MỸ CHỈNH<br>CONG DƯƠNG VẬT</p>
                <!--<hr>-->
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-12 col-12" style="padding: 0px;">
                <p  class="set-font-size" data-font-size="32">TIỂU PHẪU GẮN BI DƯƠNG VẬT</p>
            </div>
        </div>
    </div>

    <div class="booking">
      <p class="booking-title">ĐẶT LỊCH TƯ VẤN MIỄN PHÍ</p>
      <div class="block-booking"><span><a href="{{ route('lien_he') }}" style="color: #fff;">ĐĂNG KÝ NGAY</a></span></div>
    </div>

    <div class="chose">
      <div class="container">
        <p class="text-bold left col-xl-6 col-lg-6 col-sm-12 col-12">LỰA CHỌN PHÒNG KHÁM NAM KHOA MEGADOM</p>
        <p class="right text-medium col-xl-6 col-lg-6 col-sm-12 col-12">Trải nghiệm của bệnh nhân rất quan trọng đối với Megadom. Chúng tôi đối xử với từng bệnh nhân bằng sự chăm sóc tận tình, lòng trắc ẩn và sự quan tâm sâu sắc. Các chuyên gia của Megadom luôn đồng hành cùng bạn trong từng bước, từ buổi tư vấn ban đầu, cho đến khi điều trị, và hơn thế nữa là cam kết hỗ trợ trọn đời. Chúng tôi tự hào về  những thành công đã đạt được và sự hài lòng cao của bệnh nhân tại Megadom. Với vô số các ca phẫu thuật đã được thực hiện cho đến nay, bạn có thể tin rằng mình đang được chăm sóc bởi một trong những chuyên gia hàng đầu trong lĩnh vực này.</p>
      </div>
      
    </div>

    <div class='main-wrapper-banner-library'>
    <div class="banner-container-banner-library">
      <div class="banner-content-banner-library">
        <p class="banner-text-big-banner-library">Thư viện</p>
        <p class="banner-text-under-banner-library"><a href="{{ route('library') }}">khám phá</a></p>
        <hr class="under-banner-library">
      </div>
    </div>
  </div>
</div>
@endsection