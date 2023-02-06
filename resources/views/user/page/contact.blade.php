@extends('user.layout.main')



@section('title')

<title>Liên hệ</title>

@endsection



@section('style')

<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap4.min.css">

<link rel="stylesheet" type="text/css" href="public/user/page/contact.css">

@endsection



@section('content')

  <div class="body-content">

    <div class="banner">
      <div class="text-banner">
        <p class="text-medium"><a style="text-decoration:none; color: white;" href="{{ route('home') }}">TRANG CHỦ.</a> <a style="text-decoration:none; color: white;" href="{{ route('lien_he') }}">LIÊN HỆ</a></p>
        <p class="text-bold">Liên hệ</span></p>
      </div>
    </div>



    <div class='main-content'>

      <div>

        <p class="text-normal set-font-size" data-font-size="38">PHÒNG KHÁM NAM KHOA MEGADOM</p>

        <div class="contact-text set-font-size" data-font-size="18"><img id="icon" style="width: 24px" class="set-size-image" data-size-width="24" src="/public/frontend/images/phone.png"><span>{{ $info->phone }}</span></div>

        <div class="contact-text set-font-size" data-font-size="18"><img id="icon" style="width: 24px" class="set-size-image" data-size-width="24" src="/public/frontend/images/vector1a.png"><span>{{ $info->email }}</span></div>

        <form class="form-contact">

          <div class="form-group">

            <label for="name" class="title-form-contact set-font-size" data-font-size="20">Họ và tên<span style="color: red;">*</span></label>

            <input type="text" class="form-control input-form-contact set-font-size" data-font-size="20" name="name" id="name"value="{{ old('name') }}" require>

          </div>

          <div class="form-group">

            <label for="phone" class="title-form-contact set-font-size" data-font-size="20">Điện thoại<span style="color: red;">*</span></label>

            <input type="text" class="form-control input-form-contact set-font-size" data-font-size="20" pattern="[0-9]{10}" name="phone" id="phone" require value="{{ old('phone') }}">

          </div>

          <div class="form-group">

            <label for="email" class="title-form-contact set-font-size" data-font-size="20">Email<span style="color: red;">*</span></label>

            <input type="email" class="form-control input-form-contact set-font-size" data-font-size="20" name="email" id="email" require value="{{ old('email') }}">

          </div>

          <div class="form-group">

            <label for="address" class="title-form-contact set-font-size" data-font-size="20">Địa chỉ<span style="color: red;">*</span></label>

            <select id="address" require name="address" class="form-control input-form-contact set-font-size" data-font-size="20">

              <option value="Hà Nội">Tp.Hà Nội

              <option value="Tp.Hồ chí Minh">Tp.Hồ chí Minh

              <option value="An Giang">An Giang

              <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu

              <option value="Bắc Giang">Bắc Giang

              <option value="Bắc Kạn">Bắc Kạn

              <option value="Bạc Liêu">Bạc Liêu

              <option value="Bắc Ninh">Bắc Ninh

              <option value="Bến Tre">Bến Tre

              <option value="Bình Định">Bình Định

              <option value="Bình Dương">Bình Dương

              <option value="Bình Phước">Bình Phước

              <option value="Bình Thuận">Bình Thuận

              <option value="Cà Mau">Cà Mau

              <option value="Cao Bằng">Cao Bằng

              <option value="Đắk Lắk">Đắk Lắk

              <option value="Đắk Nông">Đắk Nông

              <option value="Điện Biên">Điện Biên

              <option value="Đồng Nai">Đồng Nai

              <option value="Đồng Tháp">Đồng Tháp

              <option value="Gia Lai">Gia Lai

              <option value="Hà Giang">Hà Giang

              <option value="Hà Nam">Hà Nam

              <option value="Hà Tĩnh">Hà Tĩnh

              <option value="Hải Dương">Hải Dương

              <option value="Hậu Giang">Hậu Giang

              <option value="Hòa Bình">Hòa Bình

              <option value="Hưng Yên">Hưng Yên

              <option value="Khánh Hòa">Khánh Hòa

              <option value="Kiên Giang">Kiên Giang

              <option value="Kon Tum">Kon Tum

              <option value="Lai Châu">Lai Châu

              <option value="Lâm Đồng">Lâm Đồng

              <option value="Lạng Sơn">Lạng Sơn

              <option value="Lào Cai">Lào Cai

              <option value="Long An">Long An

              <option value="Nam Định">Nam Định

              <option value="Nghệ An">Nghệ An

              <option value="Ninh Bình">Ninh Bình

              <option value="Ninh Thuận">Ninh Thuận

              <option value="Phú Thọ">Phú Thọ

              <option value="Quảng Bình">Quảng Bình

              <option value="Quảng Bình">Quảng Bình

              <option value="Quảng Ngãi">Quảng Ngãi

              <option value="Quảng Ninh">Quảng Ninh

              <option value="Quảng Trị">Quảng Trị

              <option value="Sóc Trăng">Sóc Trăng

              <option value="Sơn La">Sơn La

              <option value="Tây Ninh">Tây Ninh

              <option value="Thái Bình">Thái Bình

              <option value="Thái Nguyên">Thái Nguyên

              <option value="Thanh Hóa">Thanh Hóa

              <option value="Thừa Thiên Huế">Thừa Thiên Huế

              <option value="Tiền Giang">Tiền Giang

              <option value="Trà Vinh">Trà Vinh

              <option value="Tuyên Quang">Tuyên Quang

              <option value="Vĩnh Long">Vĩnh Long

              <option value="Vĩnh Phúc">Vĩnh Phúc

              <option value="Yên Bái">Yên Bái

              <option value="Phú Yên">Phú Yên

              <option value="Tp.Cần Thơ">Tp.Cần Thơ

              <option value="Tp.Đà Nẵng">Tp.Đà Nẵng

              <option value="Tp.Hải Phòng">Tp.Hải Phòng

            </select>

          </div>

          <div class="form-group">

            <label for="content" class="title-form-contact set-font-size" data-font-size="20">Bạn đang quan tâm tới vấn đề gì?<span style="color: red;">*</span></label>

            <input type="text" class="form-control input-form-contact set-font-size" data-font-size="20" name="content" id="content" require value="{{ old('content') }}">

          </div>

          <div class="form-group">

            <label for="know" class="title-form-contact set-font-size" data-font-size="20">Bạn biết đến chúng tôi qua đâu?<span style="color: red;">*</span></label>

            <select id="know" require name="know" class="form-control input-form-contact set-font-size" data-font-size="20">

              <option value="Website">Website</option>

              <option value="Youtube">Youtube</option>

              <option value="Facebook">Facebook</option>

              <option value="Tiktok">Tiktok</option>

              <option value="Khác">Khác</option>

            </select>

          </div>

          <div>

            <button type="button" id="register" class="button-QA">

                <span class="set-font-size" data-font-size="20">ĐĂNG KÝ TƯ VẤN</span>

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
        window.location.href = "{{ route('success') }}";
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
  });
</script>

@endsection