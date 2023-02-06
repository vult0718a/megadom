@extends('user.layout.main')

@section('title')
<title>Đăng ký tư vấn thành công</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/user/page/success.css">
@endsection

@section('content')
<div class="success">
    <img src="/public/frontend/images/success.png" class="set-size-image" data-size-width="150">
    <div class="text">
      <p class="text-normal set-font-size" data-font-size="32"><span class="first-text">CẢM ƠN BẠN ĐÃ ĐĂNG KÝ TƯ VẤN!</span>CHÚNG TÔI SẼ LIÊN HỆ VỚI BẠN <span class="br-text">TRONG THỜI GIAN SỚM NHẤT</span></p>
    </div>
</div>
@endsection