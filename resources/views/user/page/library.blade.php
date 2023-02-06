@extends('user.layout.main')

@section('title')
<title>Thư viện</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="public/user/page/library.css">
@endsection

@section('content')
<div class="body-content">
  <div class='main-wrapper'>
    <div class="banner-container">
      <div class="banner-content">
        <p class="banner-text-small set-font-size" data-font-size="24"><a href="{{ route('home') }}" class="set-font-size" data-font-size="24">TRANG CHỦ.</a> <a href="{{ route('library') }}"class="set-font-size" data-font-size="24">THƯ VIỆN</a></p>
        <p class="banner-text-big set-font-size set-line-height" data-font-size="64" data-line-height="75">Thư viện</p>
      </div>
    </div>
  </div>
  <div class="body-content-2 row">
    <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
      <div style="height: auto;">
        <div>
          <p class="content-2-title set-font-size set-height-block" data-font-size="22" data-height-block="66">ẢNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
          <p class="content-2-content set-font-size " data-font-size="18" >Phẫu thuật tăng kích thước dương vật có thể giúp những nam giới mắc hội chứng dương vật nhỏ hoặc bất kỳ nam giới muốn dương vật lớn hơn về tổng thể. Chu vi dương vật có thể tăng từ 2 - 5 cm.</p>
          <button data-link="{{ route('picture_video') }}" class="button-QA button-QA-url set-padding-button" data-padding-left="31" data-padding-top="25">
            <span class="set-font-size" data-font-size="18">TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
      <div style="height: auto;">
        <div>
          <p class="content-2-title set-font-size set-height-block" data-font-size="22" data-height-block="66">ẢNH PHẪU THUẬT KÉO DÀI DƯƠNG VẬT</p>
          <p class="content-2-content set-font-size" data-font-size="18">Với hai phương pháp phẫu thuật kéo dài dương vật bằng cắt dây chằng chéo và loại bỏ lớp mỡ xương mu, chiều dài của dương vật có thể tăng thêm trung bình từ 1-2cm. Thời gian phẫu thuật ngắn. Sau 2 tuần bệnh nhân có thể sinh hoạt tình dục bình thường.</p>
          <button data-link="{{ route('picture_video') }}" class="button-QA button-QA-url set-padding-button" data-padding-left="31" data-padding-top="25">
            <span class="set-font-size" data-font-size="18">TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
      <div style="height: auto;">
        <div>
          <p class="content-2-title set-font-size set-height-block" data-font-size="22" data-height-block="66">ẢNH PHẪU THUẬT QUY ĐẦU</p>
          <p class="content-2-content set-font-size" data-font-size="18">Ngoài phẫu thuật làm to viền quy đầu bằng Filler thì phẫu thuật làm to quy đầu bằng Megafill là phương pháp đầu tiên cũng là độc quyền của hệ thống phòng khám Nam Khoa Megadom. Phương pháp này sử dụng chất liệu là Megafill, có bản chất giống như tấm độn sinh học Megaderm nhưng ở dạng bột. Đều được cấu tạo từ mô cơ thể người và tồn tại vĩnh viễn trong dương vật.</p>
          <button data-link="{{ route('picture_video') }}" class="button-QA button-QA-url set-padding-button" data-padding-left="31" data-padding-top="25">
            <span class="set-font-size" data-font-size="18">TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
      <div style="height: auto;">
        <div>
          <p class="content-2-title set-font-size set-height-block" data-font-size="22" data-height-block="66">ẢNH PHẪU THUẬT KHÁC</p>
          <p class="content-2-content set-font-size" data-font-size="18">Bạn có thể tìm thấy các dịch vụ phẫu thuật dương vật khác tại Megadom từ phẫu thuật thẩm mỹ cong dương vật, phẫu thuật thẩm mỹ chỉnh cong dương vật, phẫu thuật điều trị vùi lấp dương vật, v.v...</p>
          <button data-link="{{ route('picture_video') }}" class="button-QA button-QA-url set-padding-button" data-padding-left="31" data-padding-top="25">
            <span class="set-font-size" data-font-size="18">TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class='main-wrapper-2'>
    <div class="banner-container-2">
      <div class="banner-content-2">
        <p class="banner-text-small set-font-size" data-font-size="28"><a href="{{ route('home') }}" class="set-font-size" data-font-size="28">TRANG CHỦ.</a> <a href="{{ route('library') }}" class="set-font-size" data-font-size="28">THƯ VIỆN</a></p>
        <p class="banner-text-big set-font-size set-line-height" data-font-size="110" data-line-height="129"><a href="https://www.youtube.com/@BacsiDuc" target="_blank" style="color: #fff; text-decoration: none">Video</a></p>
      </div>
    </div>
  </div>

  <div class="body-content-3 row">
    <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
      <div>
        <div>
          <p class="content-3-title set-font-size set-height-block button-QA-url" data-link="https://youtube.com/playlist?list=PL8dlk_Wk12E0dd5-KEnEYmRGtL6MlItyp" data-font-size="22" data-height-block="66">QUÁ TRÌNH PHẪU THUẬT</p>
          <p class="content-3-content set-font-size set-height-block" data-font-size="18" data-height-block="158">Video cận cảnh của các cuộc phẫu thuật thực tế. Bạn có thể xem quy trình từng bước của các ca phẫu thuật quan trọng.</p>
          <button data-link="https://youtube.com/playlist?list=PL8dlk_Wk12E0dd5-KEnEYmRGtL6MlItyp" class="button-QA set-padding-button button-QA-url" data-padding-left="31" data-padding-top="25">
            <span class="set-font-size" data-font-size="18">TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
      <div>
        <div>
          <p class="content-3-title set-font-size set-height-block button-QA-url" data-link="https://youtube.com/playlist?list=PL8dlk_Wk12E0dd5-KEnEYmRGtL6MlItyp" data-font-size="22" data-height-block="66">MEGADOM GIẢI ĐÁP</p>
          <p class="content-3-content set-font-size set-height-block" data-font-size="18" data-height-block="158">Các chuyên gia chia sẻ kiến thức chuyên sâu về các bệnh lý nam khoa như xuất tinh sớm, rối loạn cương dương hay phẫu thuật tăng kích thước dương vật, phẫu thuật kéo dài dương vật, v.v...</p>
          <button data-link="https://youtube.com/playlist?list=PL8dlk_Wk12E0skhxVwvKAyqkvyD82lhD8" class="button-QA set-padding-button button-QA-url" data-padding-left="31" data-padding-top="25">
            <span class="set-font-size" data-font-size="18"><a href=""></a> TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
      <div>
        <div>
          <p class="content-3-title set-font-size set-height-block button-QA-url" data-link="https://youtube.com/playlist?list=PL8dlk_Wk12E0dd5-KEnEYmRGtL6MlItyp" data-font-size="22" data-height-block="66">PHỎNG VẤN BỆNH NHÂN THỰC HIỆN PHẪU THUẬT</p>
          <p class="content-3-content set-font-size set-height-block" data-font-size="18" data-height-block="158">Các bệnh nhân chia sẻ ký do tại sao họ muốn thực hiện phẫu thuật dương vật và kết quả sau phẫu thuật đã thay đổi cuộc sống của họ như thế nào.</p>
          <button data-link="https://youtube.com/playlist?list=PL8dlk_Wk12E2lO6K0shNkgldQD9dcAz3m" class="button-QA set-padding-button button-QA-url" data-padding-left="31" data-padding-top="25">
            <span class="set-font-size" data-font-size="18">TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class='main-wrapper-3'>
    <div class="banner-container-3">
      <div class="banner-content-3">
        <p class="banner-text-small set-font-size" data-font-size="28"><a href="{{ route('home') }}" class="set-font-size" data-font-size="28">TRANG CHỦ.</a> <a href="{{ route('library') }}" class="set-font-size" data-font-size="28">THƯ VIỆN</a></p>
        <p class="banner-text-big set-font-size set-line-height" data-font-size="64" data-line-height="75">Cảm nhận<br>của khách hàng</p>
      </div>
    </div>
  </div>

  <div class="body-content-4 bc4">
    <p class="text-small set-font-size set-line-height" data-font-size="28" data-line-height="45">CẢM NHẬN CỦA KHÁCH HÀNG</p>
    <p class="text-big set-font-size set-line-height" data-font-size="110" data-line-height="150">Video</p>
    <hr class="line-full-page">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
        <div>
          <a target="_blank" href="https://www.youtube.com/watch?v=Ggc0XpG43uA&t=1s" style="color:#fff">
            <img class="darken" src="/public/frontend/images/fb02a.jpg">
          </a>
          <!-- <div class="bottom-left-1">
            <button href="#" class="button-QA-1">
              <span><a target="_blank" href="https://www.youtube.com/watch?v=Ggc0XpG43uA&t=1s" style="color:#fff">XEM</a></span>
            </button>
            <p class="set-font-size set-line-height" data-font-size="22" data-line-height="45">QUY TRÌNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT VÀ NHỮNG LƯU Ý HẬU PHẪU</p>
          </div> -->
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
        <div>
          <a target="_blank" href="https://www.youtube.com/watch?v=Tl_eFOXUSzU" style="color:#fff">
            <img class="darken" src="/public/frontend/images/fb03a.jpg">
          </a>
          
          <!-- <div class="bottom-left-1">
            <button class="button-QA-1">
              <span><a target="_blank" href="https://www.youtube.com/watch?v=Tl_eFOXUSzU" style="color:#fff">XEM</a></span>
            </button>
            <p class="set-font-size set-line-height" data-font-size="22" data-line-height="45">QUY TRÌNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT VÀ NHỮNG LƯU Ý HẬU PHẪU</p>
          </div> -->
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/public/frontend/images/image4-6.png">
          <div class="bottom-left-1">
            <button data-link="https://drmegadom.com/cau-chuyen-khach-hang" class="button-QA-1 link-url">
              <span>XEM</span>
            </button>
            <p class="set-font-size set-line-height" data-font-size="22" data-line-height="45">CHÀNG TRAI VIỆT KIỀU VÀ TÂM SỰ CỦA MỘT NGƯỜI MẸ</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/public/frontend/images/image4-7.png">
          <div class="bottom-left-1">
            <button data-link="https://drmegadom.com/cau-chuyen-khach-hang" class="button-QA-1 link-url">
              <span>XEM</span>
            </button>
            <p class="set-font-size set-line-height" data-font-size="22" data-line-height="45">CUỘC SỐNG LÀ SỰ TRẢI NGHIỆM</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/public/frontend/images/image4-8.png">
          <div class="bottom-left-1">
            <button data-link="https://drmegadom.com/cau-chuyen-khach-hang" class="button-QA-1 link-url">
              <span>XEM</span>
            </button>
            <p class="set-font-size set-line-height" data-font-size="22" data-line-height="45">MẢNH GHÉP HOÀN MỸ</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="line-full-page" style="margin-bottom: 64px">
    <div class="row text-body-content-4">
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div style="width: 95%">
          <p class="set-font-size set-line-height" data-font-size="22" data-line-height="37">Trước kia tôi còn ngần ngại khi nghĩ đến việc làm to "chỗ ấy". Nhưng để cải thiện chuyện chăn gối, tôi đã tìm hiểu từ nhiều nguồn thông tin.  Thật sự đã không lầm khi đặt niềm tin vào Megadom. Tôi đã tự tin hơn rất nhiều!</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div style="width: 95%">
          <p class="set-font-size set-line-height" data-font-size="22" data-line-height="37">Chỉ khi gặp Megadom, tôi mới thấy nhẹ người vì được "bắt đúng bênh". Không hề đau đớn hay khó khăn gì như tôi lo sợ, giờ thì vợ tôi còn thích hơn cả.</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div style="width: 95%">
          <p class="set-font-size set-line-height" data-font-size="22" data-line-height="37">Bác sĩ nhiệt tình và chu đáo nên tôi cảm thấy an tâm. Phẫu thuật cũng không đau đớn gì và hiệu quả rõ rệt. Tôi nghĩ mình đã chọn đúng.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="body-content-4 bc4-1" id="loi-chung-thuc">
    <p class="text-small set-font-size set-line-height" data-font-size="28" data-line-height="45">CẢM NHẬN CỦA KHÁCH HÀNG</p>
    <p class="text-big set-font-size set-line-height" data-font-size="110" data-line-height="150">LỜI CHỨNG THỰC</p>
    <hr class="line-full-page">
    <div class="image-content">
      @foreach($testimonials as $testimonial)
        <img class="darken" src="{{asset($testimonial->image)}}">
      @endforeach
    </div>
  </div>

</div>
@endsection

@section('script')
    <script>
      $(".button-QA-url").click(function() {
          window.open($(this).data('link'), '_blank');
      });
      $(".link-url").click(function() {
        window.location.href = $(this).data('link');
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

    <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>-->
    <script>
    	$(function(){
    // 		$('.body-content-2>div:nth-child(2) .content-2-content').css('height','auto');
    // 		$('.body-content-2>div:nth-child(1) .content-2-content').css('height',$('.body-content-2>div:nth-child(2) .content-2-content').css('height'));
    // 		$('.body-content-2>div:nth-child(3) .content-2-content').css('height','auto');
    // 		$('.body-content-2>div:nth-child(4) .content-2-content').css('height',$('.body-content-2>div:nth-child(3) .content-2-content').css('height'));
    		if($(document).width()>=1200){
        		$('.body-content-2>div:nth-child(3) .content-2-content').css('height','auto');
        		$('.body-content-2>div:nth-child(1) .content-2-content').css('height',$('.body-content-2>div:nth-child(3) .content-2-content').css('height'));
        		$('.body-content-2>div:nth-child(2) .content-2-content').css('height',$('.body-content-2>div:nth-child(3) .content-2-content').css('height'));
        		$('.body-content-2>div:nth-child(4) .content-2-content').css('height',$('.body-content-2>div:nth-child(3) .content-2-content').css('height'));
    		}
    	});
    </script>
@endsection