@extends('user.layout.main')

@section('title')
<title>Làm to viền quy đầu</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/public/user/page/2-5.css">
@endsection

@section('content')
<div class="screen2-5">
    <div class="banner">
      <div class="text-banner">
        <p class="text-medium"><a href="{{ route('home') }}">TRANG CHỦ.</a> <a href="{{ route('2-4') }}">PHẪU THUẬT NAM KHOA.</a> <a href="{{ route('2-5') }}"><span>PHẪU THUẬT QUY ĐẦU</span></a></p>
        <p class="text-bold">Phẫu thuật làm <span>to viền quy đầu</span></p>
      </div>
    </div>
    <div class="define container">
      <div class="define-title">
        <p class="text-bold text-1">PHẪU THUẬT LÀM TO VIỀN QUY ĐẦU</p>
        <hr class="hr-1">
      </div>
      <p class="text-medium text-medium-1">Phẫu thuật làm to viền quy đầu là một phương pháp đã được áp dụng từ rất lâu trên Thế giới. Phương pháp này làm dày viền quy đầu lên bằng cách sử dụng chất chủ đạo Hyaluronic acid, hay còn được gọi là Filler. </p>
      <div class="block-content">
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold text-2">HYALURONIC ACID / FILLER</p>
          <hr class="hr-2">
          <p class="text-medium text-medium-2">Bản chất Hyaluronic acid là một chất làm đầy mô, tổ chức dưới da của cơ thể. Trong phẫu thuật thẩm mỹ Hyaluronic acid thường được sử dụng trong phẫu thuật độn cằm, nâng mũi, bơm môi. Filler tiêm vào viền quy đầu là những hạt ngậm nước, có cấu trúc tương tự như Hyaluronic acid trong cơ thể người.</p>
        </div>
        <img class="right col-xl-6 col-lg-6 col-sm-12 col-12  mobile-to-top" id="image-1" src="/public/frontend/images/home-penile11c.png">
      </div>
    </div>
    <!--<div class="booking">-->
    <!--  <p class="booking-title">ĐẶT LỊCH TƯ VẤN MIỄN PHÍ</p>-->
    <!--  <button data-link="{{ route('lien_he') }}" class="button-QA button-QA-url set-padding-button" data-padding-left="31" data-padding-top="25">-->
    <!--    <span class="set-font-size" data-font-size="18"><a href="{{ route('lien_he') }}">ĐĂNG KÝ NGAY</a></span>-->
    <!--  </button>-->
    <!--</div>-->
    <div class="booking">
      <p class="booking-title">ĐẶT LỊCH TƯ VẤN MIỄN PHÍ</p>
      <div class="block-booking"><a href="{{ route('lien_he') }}" style="color:#FFF">ĐĂNG KÝ NGAY</a></div>
    </div>
    <div class="expression expression-1 container">
        <div class="row">
          <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
            <img id="expression-image-1" src="/public/frontend/images/home-penile-1.png" style="width:100%">
          </div>
          <div class="right col-xl-6 col-lg-6 col-sm-12 col-12">
            <div class="expression-title-1">
              <p class="text-bold text-1">HIỆU QUẢ</p>
              <hr class="hr-2">
            </div>
            <div class="expression-content-1">
              <p class="text-medium text-medium-1">Thông thường, tiêm Filler vào viền quy đầu có thể duy trì được 12 - 18 tháng. Sau đó Filler sẽ tự tiêu và đào thải khỏi cơ thể. Bản chất Filler là chất làm đầy mô, là chất ngoại lai nên nó không tồn tại vĩnh viễn trong cơ thể.</p>
              <p class="text-medium text-medium-1">Nếu bạn lựa chọn chỉ làm to viền quy đầu thì sau khoảng hơn 1 năm thì có thể tiêm lại. Nếu kết hợp giữa làm to quy đầu và làm to viền quy đầu thì việc tiêm lại Filler là không cần thiết. Lý do là bởi việc phẫu thuật làm to quy đầu cũng giúp phần viền quy đầu tăng lên đáng kể. </p>
            </div>
          </div>
        </div>
    </div>
    <div class="chose">
      <div class="container">
        <p class="text-bold left col-xl-6 col-lg-6 col-sm-12 col-12">LỰA CHỌN PHÒNG KHÁM NAM KHOA MEGADOM</p>
        <p class="right text-medium col-xl-6 col-lg-6 col-sm-12 col-12">Trải nghiệm của bệnh nhân rất quan trọng đối với Megadom. Chúng tôi đối xử với từng bệnh nhân bằng sự chăm sóc tận tình, lòng trắc ẩn và sự quan tâm sâu sắc. Các chuyên gia của Megadom luôn đồng hành cùng bạn trong từng bước, từ buổi tư vấn ban đầu, cho đến khi điều trị, và hơn thế nữa là cam kết hỗ trợ trọn đời. Chúng tôi tự hào về  những thành công đã đạt được và sự hài lòng cao của bệnh nhân tại Megadom. Với vô số các ca phẫu thuật đã được thực hiện cho đến nay, bạn có thể tin rằng mình đang được chăm sóc bởi một trong những chuyên gia hàng đầu trong lĩnh vực này.</p>
      </div>
      
    </div>
    <div class="expression expression-2 container">
      <div class="row">
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
          <div class="expression-title-1">
            <p class="text-bold text-1">ƯU ĐIỂM CỦA PHƯƠNG PHÁP LÀM TO VIỀN QUY ĐẦU BẰNG FILLER</p>
            <hr class="hr-2">
          </div>
          <div class="expression-content-1">
            <p class="text-medium text-medium-1">Tiêm Filler vào viền quy đầu được đánh giá là một phương pháp tốt nhất hiện nay để làm to phần viền của quy đầu: </p>
            <ul class="text-medium">
              <li>Không gây kích ứng da,</li>
              <li>Hiệu quả trong thời gian dài, từ 12 - 18 tháng</li>
              <li>Tính thẩm mỹ cao</li>
            </ul>
            <p class="text-medium">Khi tiêm Filler vào viền quy đầu thì chỉ với một lượng nhỏ Filler, phần viền quy đầu sẽ to lên, các bác sĩ sẽ điều chỉnh để cho phần viền này to đều, căng và nhìn rất mịn.</a></p>
          </div>
        </div>
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-top">
          <img id="expression-image-1" src="/public/frontend/images/Rectangle-105.png" style="width:100%">
        </div>
      </div>
      <div class="row row-2">
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
          <img id="expression-image-2" src="/public/frontend/images/Rectangle-106.png" style="width:100%">
        </div>
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12">
            <div class="expression-title-2">
                <p class="text-bold text-2">QUY TRÌNH PHẪU THUẬT</p>
                <hr class="hr-2">
            </div>
            <p class="text-medium text-medium-3">Thời gian phẫu thuật khá nhanh, thường kéo dài trong 10-15 phút</p>
            <p class="text-medium text-medium-3"><b>Bước 1: Gây tê</b></p>
            <p class="text-medium text-medium-3">Người bệnh sẽ được gây tê ở gốc dương vật, đảm bảo gây tê toàn bộ dương vật.</p>
            <p class="text-medium text-medium-3"><b>Bước 2: Tiêm Filler vào viền quy đầu</b></p>
            <p class="text-medium text-medium-3">Bác sĩ sẽ dùng những loại kim nhỏ để đưa Filler vào viền quy đầu. Kim càng nhỏ thì nguy cơ chảy máu càng ít. Lượng Filler sẽ được đưa đều vào phần viền của quy đầu, tạo cho viền quy đầu to đều, không bị gồ ghề.</p>
            <p class="text-medium text-medium-3"><b>Bước 3: Băng gạc và sát trùng</b></p>
            <p class="text-medium text-medium-3">Tiêm Filler xong thì bác sĩ sẽ bịt chặt chỗ tiêm để bịt kín lỗ kim khi chọc vào viền quy đầu. Sau đó bạn sẽ được băng bằng gạc và sát trùng bằng Betadin.</p>
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
            <p class="text-bold text-1">KHI NÀO BẠN NÊN THỰC HIỆN PHẪU THUẬT LÀM TO VIỀN QUY ĐẦU</p>
            <hr class="hr-2">
            </div>
            <ul style="padding-left: 0px;">
              <li><p class="text-medium" style="margin-top: 20px">Nam giới đủ 21 tuổi trở lên muốn tăng kích thước viền quy đầu.</p></li>
              <li><p class="text-medium" style="margin-top: 20px">Những người không có viền quy đầu, dáng viền quy đầu không đẹp hoặc không rõ nét.</p></li>
            </ul>
            
            <div class="block-contact"><a href="{{ route('lien_he') }}" style="color: #fff;">LIÊN HỆ CHUYÊN GIA</a></div>
          </div>
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-top">
            <img id="expression-image-1" src="/public/frontend/images/Rectangle-140.png" style="width:100%">
        </div>
    </div>
  </div>

@endsection

@section('script')
    <script>
        $(".button-QA-url").click(function() {
            window.location.href = $(this).data('link');
        });
    </script>
    
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