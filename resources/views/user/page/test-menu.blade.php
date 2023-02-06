@extends('user.layout.main')

@section('title')
<title>Trang chủ</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="public/user/page/home.css">
@endsection
<style>
  nav.dropdown-menu-top{width: 100%;float: left;height: 85px;background: }
  nav>ul{width: 100%;height: inherit;font-family: 'WorkSans-Bold';font-size: 18px;padding: 0 70px;color: #fff;text-align: center;line-height: 85px}
  nav>ul>li{float: left;height: inherit;}
  ul{list-style: none;background: #111B27}
  nav ul ul{display: none;width: 100%;position: relative;top:0;text-align: left;z-index: 1}
  nav ul ul li{height: 45px;line-height: 45px;font-size: 16px}
  nav>ul>li:nth-child(1){width: 18%;padding-left: 4%}
  nav>ul>li:nth-child(2){width: 21%}
  nav>ul>li:nth-child(3){width: 18%}
  nav>ul>li:nth-child(4){width: 16%}
  nav>ul>li:nth-child(5){width: 11%}
  nav>ul>li:nth-child(6){width: 13.5%}
  nav>ul>li:hover ul{display: block;}
  nav ul li a,nav ul li a:hover{color: #fff}

</style>
@section('content')
<nav class="dropdown-menu-top">
  <ul class="menu-top">
    <li>VỀ MEGADOM
      <ul>
        <li><a href="{{ route('introduce') }}">Giới thiệu</a></li>
        <li><a href="{{ route('doctor') }}">Đội ngũ bác sĩ</a></li>
      </ul>
    </li>
    <li>THẨM MỸ NAM KHOA
      <ul>
        <li><a href="{{ route('2-1') }}">Làm to Megaderm</a></li>
        <li><a href="{{ route('2-2') }}">Làm to Silicone</a></li>
        <li><a href="{{ route('2-3') }}">Phẫu thuật kéo dài</a></li>
        <li><a href="{{ route('2-5') }}">Phẫu thuật làm to viền quy đầu</a></li>
        <li><a href="{{ route('2-6') }}">Phẫu thuật làm to Megafill</a></li>
        <li><a href="{{ route('2-7') }}">Phẫu thuật điều trị xuất tinh sớm</a></li>
        <li><a href="{{ route('2-8') }}">Dịch vụ khác</a></li>
      </ul>
    </li>
    <li>BỆNH LÝ NAM KHOA
      <ul>
        <li><a href="{{ route('3-1') }}">Rối loạn cương dương</a></li>
        <li><a href="{{ route('3-2') }}">Rối loạn xuất tinh</a></li>
        <li><a href="{{ route('testicular_disease') }}">Bệnh lý tinh hoàn</a></li>
        <li><a href="{{ route('erectile-dysfunction') }}">Vô sinh hiếm muộn</a></li>
        <li><a href="{{ route('menopause') }}">Mãn dục nam giới</a></li>
        <li><a href="{{ route('sexually_transmitted_diseases') }}">Bệnh lây qua đường tình dục</a></li>
      </ul>
    </li>
    <li><a href="{{ route('library') }}">THƯ VIỆN</a>
      <ul style="width: 120%;padding-left: 10px;">
        <li><a href="#">Hình ảnh video cảm nhận chi tiết</a></li>
      </ul>
    </li>
    <li><a href="#">TIN TỨC</a>
      <ul style="width: 140%;padding-left: 10px;">
        <li><a href="#">Tin tức - bài viết chi tiết</a></li>
        <li><a href="#">Báo chí nói về Megadom</a></li>
        <li><a href="#">Hoạt động phòng khám</a></li>
      </ul>
    </li>
    <li><a href="{{ route('lien_he') }}">LIÊN HỆ</a></li>
  </ul>
</nav>
@endsection
