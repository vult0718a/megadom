@extends('user.layout.main')

@section('title')
<title>Liên hệ</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/frontend/bootstrap/css/bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="/user/page/contact.css">
@endsection

@section('content')
  <!-- <div class="contact-screen">
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
      <form>
        <div class="input-block">
          <div class="block block-1">
            <p class="text-small">Họ và tên<span>*</span></p>
            <input type="text" name="name" id="name"value="{{ old('name') }}" require class="form-control">
          </div>
          <div class="block block-2">
            <p class="text-small">Điện thoại<span>*</span></p>
            <input type="text" pattern="[0-9]{10}" name="phone" id="phone" require value="{{ old('phone') }}" class="form-control">
          </div>
          <div class="block block-3">
            <p class="text-small">Email<span>*</span></p>
            <input type="email" name="email" id="email" require value="{{ old('email') }}" class="form-control">
          </div>
          <div class="block block-4">
            <p class="text-small">Địa chỉ<span>*</span></p>
            <select id="address" require name="address">
              <option value="Hà Nội" selected>Hà Nội</option>
              <option value="Hồ Chí Minh">Hồ Chí Minh</option>
              <option value="Đà Nẵng">Đà Nẵng</option>
            </select>
          </div>
          <div class="block block-5">
            <p class="text-small">Bạn đang quan tâm tới vấn đề gì?<span>*</span></p>
            <input type="text" name="content" id="content" require value="{{ old('content') }}" class="form-control">
          </div>
          <div class="block block-6">
            <p class="text-small">Bạn biết đến chúng tôi qua đâu?<span>*</span></p>
            <select id="know" require name="know">
              <option value="Mạng xã hội" selected>Mạng xã hội</option>
              <option value="Người thân giới thiệu">Người thân giới thiệu</option>
              <option value="Google">Google</option>
            </select>
          </div>
          <div class="rule-title">Điều khoản dịch vụ<span>*</span></div>
          <div class="rules">
            <div class="rules-content">By submitting this form I give Megadom, a Medical Corporation, Penuma, and its affiliates permission to contact me and agree to the terms of the <span>Privacy Policy</span>.</div>
            <div class="accept"><input type="checkbox" require name="accept" id="accept"><span>I accept the Terms and Conditions.</span></div>
            <button type="button" id="register"><span class="register">ĐĂNG KÝ TƯ VẤN</span></button>
          </div>
        </div>
      </form>
      </div>
    </div>
    <div class="block-hide"></div>
  </div> -->
  <div class="body-content">
    <div class='main-wrapper'>
      <div class="banner-container">
        <div class="banner-content">
          <p class="banner-text-small">TRANG CHỦ. LIÊN HỆ</p>
          <p class="banner-text-big">Liên hệ</p>
        </div>
      </div>
    </div>

    <div class='main-content'>
      <div>
        <p class="text-normal">PHÒNG KHÁM NAM KHOA MEGADOM</p>
        <div class="contact-text"><img id="icon" src="/frontend/images/phone.png"><span>098 534 2323</span></div>
        <div class="contact-text"><img id="icon" src="/frontend/images/vector1a.png"><span>megaderm.vn@gmail.com</span></div>
        <div class="contact-text"><img id="icon" src="/frontend/images/vector1b.png"><span>Tầng 2, Bệnh viện Đức Phúc- Số 48 P. Ô Đồng Lâm, Phương Liên, Đống Đa, Hà Nội</span></div>
        <form class="form-contact">
          <div class="form-group">
            <label for="name" class="title-form-contact">Họ và tên<span style="color: red;">*</span></label>
            <input type="text" class="form-control input-form-contact" name="name" id="name"value="{{ old('name') }}" require>
          </div>
          <div class="form-group">
            <label for="phone" class="title-form-contact">Điện thoại<span style="color: red;">*</span></label>
            <input type="text" class="form-control input-form-contact" pattern="[0-9]{10}" name="phone" id="phone" require value="{{ old('phone') }}">
          </div>
          <div class="form-group">
            <label for="email" class="title-form-contact">Email<span style="color: red;">*</span></label>
            <input type="email" class="form-control input-form-contact" name="email" id="email" require value="{{ old('email') }}">
          </div>
          <div class="form-group">
            <label for="address" class="title-form-contact">Địa chỉ<span style="color: red;">*</span></label>
            <select id="address" require name="address" class="form-control input-form-contact">
              <option value="Hà Nội">Hà Nội</option>
              <option value="Đà Nẵng">Đà Nẵng</option>
              <option value="Thành phố Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
            </select>
          </div>
          <div class="form-group">
            <label for="content" class="title-form-contact">Bạn đang quan tâm tới vấn đề gì?<span style="color: red;">*</span></label>
            <input type="text" class="form-control input-form-contact" name="content" id="content" require value="{{ old('content') }}">
          </div>
          <div class="form-group">
            <label for="know" class="title-form-contact">Bạn biết đến chúng tôi qua đâu?<span style="color: red;">*</span></label>
            <select id="know" require name="know" class="form-control input-form-contact">
              <option value="Mạng xã hội">Mạng xã hội</option>
              <option value="Người thân giới thiệu">Người thân giới thiệu</option>
              <option value="Google">Google</option>
            </select>
          </div>
          <div class="form-group">
            <label for="" class="title-form-contact">Điều khoản dịch vụ<span style="color: red;">*</span></label>
            <div class="input-form-contact-polici">
              By submitting this form I give Megadom, a Medical Corporation, Penuma, and its affiliates permission to contact me and agree to the terms of the <span style="color: #051BE2;">Privacy Policy</span>.
            </div>
          </div>
          <div class="checkbox-form-contact">
            <input type="checkbox" class="form-check-input" name="accept" id="accept"><span>I accept the Terms and Conditions.</span>
          </div>
          <div>
            <button type="button" id="register" class="button-QA">
                <span>ĐĂNG KÝ TƯ VẤN</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script>
  $('#register').click(function() {
    if ($("#accept").is(":checked")) {
      let name = $("#name").val();
      let phone = $("#phone").val();
      let email = $("#email").val();
      let address = $("#address").val();
      let content = $("#content").val();
      let know = $("#know").val();
      $.ajax({
        type: "POST",
        url: "{{ route('admin.contact.store') }}",
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
          name : name,
          phone : phone,
          email : email,
          address : address,
          content : content,
          know : know
        },
        success: function (data) {
          alert("Đăng ký thành công!");
          location.reload();
        },
        error: function (e) {
          let errors = e.responseJSON.errors;
          if (errors) {
            let message = '';
            $.each( errors, function( key, value ) {
              message += value + '\n';
            });
            alert(message);
          } else {
            alert("Đăng ký thất bại!");
          }
          
        }
      });
    } else {
      alert('Bạn cần đồng ý với điều khoản dịch vụ');
      $("#accept").focus();
    }
  });
</script>
@endsection