@extends('user.layout.main')

@section('title')
<title>contact</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/user/page/contact.css">
@endsection

@section('content')
  <div class="contact-screen">
    <div class="banner">
      <div class="text-banner">
        <p class="text-small">TRANG CHỦ. LIÊN HỆ</p>
        <p class="text-bold">Liên hệ</p>
      </div>
    </div>
    <div class="form-input">
      <p class="text-normal">PHÒNG KHÁM NAM KHOA MEGADOM</p>
      <div class="contact contact-1"><img id="icon" src="/frontend/images/phone.png"><span>098 534 2323</span></div>
      <div class="contact contact-2"><img id="icon" src="/frontend/images/vector1a.png"><span>megaderm.vn@gmail.com</span></div>
      <div class="contact contact-3"><img id="icon" src="/frontend/images/vector1b.png"><span>Tầng 2, Bệnh viện Đức Phúc- Số 48 P. Ô Đồng Lâm, Phương Liên, Đống Đa, Hà Nội</span></div>
        <div class="input-block">
          <div class="block block-1">
            <p class="text-small">Họ và tên<span>*</span></p>
            <input type="text" class="form-control">
          </div>
          <div class="block block-2">
            <p class="text-small">Điện thoại<span>*</span></p>
            <input type="number" class="form-control">
          </div>
          <div class="block block-3">
            <p class="text-small">Email<span>*</span></p>
            <input type="text" class="form-control">
          </div>
          <div class="block block-4">
            <p class="text-small">Địa chỉ<span>*</span></p>
            <select id="cars">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="vw">VW</option>
              <option value="audi" selected>Audi</option>
            </select>
          </div>
          <div class="block block-5">
            <p class="text-small">Bạn đang quan tâm tới vấn đề gì?<span>*</span></p>
            <input type="text" class="form-control">
          </div>
          <div class="block block-6">
            <p class="text-small">Bạn biết đến chúng tôi qua đâu?<span>*</span></p>
            <select id="cars">
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="vw">VW</option>
              <option value="audi" selected>Audi</option>
            </select>
          </div>
          <div class="rule-title">Điều khoản dịch vụ<span>*</span></div>
          <div class="rules">
            <div class="rules-content">By submitting this form I give Megadom, a Medical Corporation, Penuma, and its affiliates permission to contact me and agree to the terms of the <span>Privacy Policy</span>.</div>
            <div class="accept"><input type="checkbox" name="accept"><span>I accept the Terms and Conditions.</span></div>
            <button type="submit" name="register"><span class="register">ĐĂNG KÝ TƯ VẤN</span></button>
          </div>
        </div>
      </div>
    </div>
    <div class="block-hide"></div>
  </div>
@endsection