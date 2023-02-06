@extends('user.layout.main')

@section('title')
<title>Bệnh lý tinh hoàn</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/public/user/page/3-3.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
@endsection

@section('content')
<div class="screen3-3">
    <div class="banner">
      <div class="text-banner">
        <p class="text-medium">TRANG CHỦ. PHẪU THUẬT NAM KHOA. <span>BỆNH LÝ TINH HOÀN<span></p>
        <p class="text-bold">Bệnh lý tinh hoàn</p>
      </div>
    </div>
    <div class="define container">
      <div class="define-title">
        <p class="text-bold text-1">BỆNH LÝ TINH HOÀN</p>
        <hr class="hr-1">
      </div>
      <p class="text-medium text-medium-1">Tinh hoàn là một bộ phận quan trọng trong cơ quan sinh dục của nam giới. Tinh hoàn tạo ra nội tiết tố nam, bao gồm testosterone và sản xuất tinh trùng, các tế bào sinh sản của nam giới. Rối loạn tinh hoàn có thể ảnh hưởng đến hoạt động tình dục và khả năng sinh sản của nam giới.</p>
      <div class="block-content">
        <div class="row">
          <div class="left">
            <p class="text-bold text-2">CÁC BỆNH THƯỜNG GẶP VỀ TINH HOÀN</p>
            <hr class="hr-2">
          </div>
        </div>
        <div class="row">
          <ul class="text-medium left col-xl-6 col-lg-6 col-sm-12 col-12">
            <li>Ung Thư Tinh Hoàn</li>
            <li>Xoắn Tinh Hoàn</li>
            <li>Viêm Tinh Hoàn, Viêm Mào Tinh Hoàn</li>
          </ul>
          <ul class="text-medium right col-xl-6 col-lg-6 col-sm-12 col-12">
            <li>Giãn Tĩnh Mạch Thừng Tinh</li>
            <li>Tràn Dịch Màn Tinh Hoàn</li>
            <li>Suy Sinh Dục</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="booking">
      <p class="booking-title">ĐẶT LỊCH TƯ VẤN MIỄN PHÍ</p>
      <div class="block-booking"><span><a href="{{ route('lien_he') }}" style="color: #fff;">ĐĂNG KÝ NGAY</a></span></div>
    </div>
    <div class="expression container">
      <div class="row">
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
          <div class="expression-title-1">
            <p class="text-bold text-1">BIỂU HIỆN</p>
            <hr class="hr-2">
          </div>
          <div class="expression-content-1">
            <p class="text-medium text-medium-1">Một số dấu hiệu hoặc triệu chứng phổ viến của các bệnh lý liên quan đến tinh hoàn có thể bao gồm:</p>
            <ul class="text-medium">
              <li>Đau ở bìu và / hoặc tinh hoàn.</li>
              <li>Một khối u hoặc sưng trên tinh hoàn.</li>
              <li>Da vùng bìu bị đổi màu.</li>
              <li>Cảm giác nóng ở bìu hoặc tinh hoàn.</li>
              <li>Có máu trong tinh dịch.</li>
              <li>Đau tinh hoàn và bụng dưới</li>
            </ul>
          </div>
        </div>
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12">
          <img id="expression-image-1" src="/public/frontend/images/rectangle3-2-4.png">
        </div>
      </div>
    </div>
    <div class="chose">
      <div class="container">
        <p class="text-bold left col-xl-6 col-lg-6 col-sm-12 col-12">LỰA CHỌN PHÒNG KHÁM NAM KHOA MEGADOM</p>
        <p class="right text-medium col-xl-6 col-lg-6 col-sm-12 col-12">Trải nghiệm của bệnh nhân rất quan trọng đối với Megadom. Chúng tôi đối xử với từng bệnh nhân bằng sự chăm sóc tận tình, lòng trắc ẩn và sự quan tâm sâu sắc. Các chuyên gia của Megadom luôn đồng hành cùng bạn trong từng bước, từ buổi tư vấn ban đầu, cho đến khi điều trị, và hơn thế nữa là cam kết hỗ trợ trọn đời. Chúng tôi tự hào về  những thành công đã đạt được và sự hài lòng cao của bệnh nhân tại Megadom. Với vô số các ca phẫu thuật đã được thực hiện cho đến nay, bạn có thể tin rằng mình đang được chăm sóc bởi một trong những chuyên gia hàng đầu trong lĩnh vực này.</p>
      </div>
      
    </div>
    <div class="expression container">
      <div class="row">
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
          <div class="expression-title-1">
            <p class="text-bold text-1">BẢO VỆ SỨC KHỎE TINH HOÀN</p>
            <hr class="hr-2">
          </div>
          <div class="expression-content-1">
            <p class="text-medium text-medium-1">Dưới đây là một số mẹo để giữ cho tinh hoàn của bạn luôn khỏe mạnh:</p>
            <ul class="text-medium">
              <li><b>Mang đồ bảo hộ:</b> Nếu bạn chơi thể thao hoặc tham gia các hoạt động cần nhiều thể lực, hãy sử dụng các dụng cụ hỗ trợ thể thao, chẳng hạn như mặc quần jockstrap.</li>
              <li><b>Vệ sinh sạch sẽ:</b> Tắm rửa kỹ lưỡng và thường xuyên. Mặc đồ lót và quần áo sạch sẽ.</li>
              <li><b>Quan hệ tình dục an toàn.</b></li>
              <li><b>Kiểm tra tinh hoàn thường xuyên:</b> Tất cả nam giới nên tự kiểm tra tinh hoàn thường xuyên, tốt nhất là hằng tháng. Việc làm này có thể giúp nam giới làm quen với cảm giác bình thường của tinh hoàn để có thể nhận ra bất kỳ thay đổi nào. Nếu bạn nhận ra những thay đổi trong tinh hoàn của mình như xuất hiện các cục u, tấy đỏ, đau hoặc những thay đổi khác, hãy đến gặp bác sĩ càng sớm càng tốt.</li>
            </ul>
          </div>
        </div>
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-top">
          <img id="expression-image-1" src="/public/frontend/images/rectangle3-3-5.png">
        </div>
      </div>
      <div class="row row-2">
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
          <img id="expression-image-2" src="/public/frontend/images/rectangle3-3-6.png">
        </div>
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12">
          <div class="expression-title-2">
            <p class="text-bold text-2">ĐIỀU TRỊ BỆNH LÝ TINH HOÀN TẠI MEGADOM</p>
            <hr class="hr-2">
          </div>
          <p class="text-medium text-medium-3">Việc điều trị bệnh lý tinh hoàn sẽ dựa trên các triệu chứng, nguyên nhân để đưa ra giải pháp mang lại kết quả tích cực nhất. Đội ngũ chuyên gia tại Megadom có thể giúp bạn giải quyết những lo lắng về sức khỏe của mình.</p>
          <div class="block-contact"><a href="{{ route('lien_he') }}" style="color: #fff;">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</a></div>
        </div>
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
    <div class="qa container">
      <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
        <div class="qa-title-1">
          <p class="text-bold text-1">TÔI CÓ THỂ LÀM GÌ ĐỂ NGĂN NGỪA BỆNH LÝ TINH HOÀN?</p>
          <hr class="hr-2">
        </div>
        <p class="text-medium">Hiện tại không có giải pháp nào được chứng minh giúp phòng ngừa ung thư tinh hoàn. Đây là lý do tại sao việc phát hiện sớm là rất quan trọng. Các chuyên gia khuyến cáo tất cả nam giới nên tự kiểm tra tinh hoàn hàng tháng. Đồng thời cũng không có phương pháp nào được khuyến nghị để phòng ngừa giãn tĩnh mạch thừng tinh, tràn dịch tinh hoàn hoặc xoắn tinh hoàn. Viêm mào tinh hoàn đôi khi có thể được ngăn ngừa bằng cách quan hệ tình dục an toàn và tránh khuân vác vật nặng.</p>
      </div>
      <div class="right col-xl-6 col-lg-6 col-sm-12 col-12">
        <div class="qa-title-2">
          <p class="text-bold text-2">TÔI CẦN BIẾT NHỮNG ĐIỀU GÌ KHÁC VỀ BỆNH LÝ TINH HOÀN?</p>
          <hr class="hr-2">
        </div>
        <p class="text-medium ">Hernias - Thoát vị bẹn đôi khi bị nhầm với bệnh tinh hoàn. Khi một phần dưới của cơ thành bụng yếu, một phần của ruột có thể phình ra. Khi ruột đẩy vào bìu, nó được gọi là thoát vị bẹn - phần bìu sưng lên và nó có thể bị nhầm lẫn là vấn đề về tinh hoàn. Giải pháp là phẫu thuật để cố định phần yếu của thành bụng.</p>
      </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script>
  let widthScreenMobile = $(this).width();
  if (widthScreenMobile <= 970) {
    $(".mobile-to-top").each(function() {
        $(this).parent().prepend(this);
    });

    $("img").each(function() {
        if ($(this).data('src-mobile')) {
          $(this).attr('src', $(this).data('src-mobile'));
        }
    });
  }
</script>
@endsection