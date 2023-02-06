@extends('user.layout.main')

@section('title')
<title>Đội ngũ bác sĩ</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/user/page/doctor.css">
<style>
  .carousel-cell {
    width: 100%;
    margin-right: 10px;
  }
</style>
@endsection

@section('content')
  <div class="body-content">
    <div class='main-wrapper'>
      <div class="banner-container">
        <div class="banner-content">
          <p class="banner-text-small"><a style="text-decoration:none; color: white;" href="{{ route('home') }}">TRANG CHỦ.</a> VỀ MEGADOM. <a style="text-decoration:none; color: white;" href="{{ route('doctor') }}">ĐỘI NGŨ BÁC SĨ</a></p>
          <p class="banner-text-big">Đội ngũ bác sĩ</p>
        </div>
      </div>
    </div>

    <div class='main-content'>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
          <div class="float-left width-95 ">
            <span class="set-font-size" data-font-size="22">Ths. Bs Nguyễn Văn Đức tốt nghiệp chuyên ngành Bác sĩ Đa khoa trường Đại học Y Hà Nội. Từ năm 2015 đến nay công tác tại tại khoa phẫu thuật tiết niệu – Bệnh viện Xanh Pôn. </span><br>
            <br><span class="set-font-size" data-font-size="22">Ths. Bs Nguyễn Văn Đức hiện đang là thành viên của hội Nam khoa thế giới (ISSM ) và Hội thận học – Niệu khoa Việt Nam (VUNA). </span><br>
            <br><span class="set-font-size" data-font-size="22">Trên phạm vi toàn quốc, Thạc sĩ Nguyễn Văn Đức là bác sĩ đầu tiên đưa tấm độn sinh học Megadom® về Việt Nam và đã được Sở Y Tế cấp phép..</span><br>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-top">
          <div class="float-right width-95">
            <img class="width-100 margin-bt-34" src="/public/frontend/images/image1-2-1.png">
          </div>
        </div>
      </div>
    </div>

    <div class='main-content'>
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
          <div class="float-left width-95">
            <h3 class="title-header-content set-font-size" data-font-size="38">QUÁ TRÌNH HỌC TẬP VÀ CÔNG TÁC</h3>
            <hr class="line-header-content">
            <div class="margin-top-70">
              <ul class="content-text-1 set-font-size" data-font-size="22">
                <li>Trình độ học vấn: Thạc sĩ, Bác sĩ</li>
                <li>Tốt nghiệp Đại học Y Hà Nội – chuyên ngành Bác sĩ đa khoa</li>
                <li>Tốt nghiệp khoá đào tạo từ xa của Trường đại học Johns Hopkins – Mỹ năm 2017.</li>
                <li>Hoàn thành khoá học “Phẫu thuật thẩm mỹ Dương vật” chuỗi hệ thống Phòng khám Nam khoa StanTop HD – Hàn Quốc.</li>
                <li>Hoàn thành khoá học “Nam khoa chuyên sâu’ của hội PRISM (Post Graduate International School of Mens Health)</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
          <div class="float-right width-95">
            <h3 class="title-header-content set-font-size" data-font-size="38">TRÌNH ĐỘ CHUYÊN MÔN</h3>
            <hr class="line-header-content">
            <div class="margin-top-70">
              <ul class="content-text-1 set-font-size" data-font-size="22">
                <li>Thành viên của Hội Y học giới tính thế giới (ISSM)</li>
                <li>Thành viên của hội Tiết Niệu – Thận học Việt Nam.</li>
                <li>Tham gia hàng trăm ca phẫu thuật thẩm mỹ dương vật tại Hàn Quốc.</li>
                <li>Gần 10 năm kinh nghiệm điều trị và phẫu thuật tại Khoa Phẫu thuật Tiết Niệu – Nam Học, Bệnh viện đa khoa Xanh Pôn.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class='main-content-full set-margin-top' data-margin-top="150">
      <div>
          <h3 class="title-body-content-full set-font-size" data-font-size="24">BẰNG CẤP VÀ CHỨNG CHỈ QUỐC TẾ</h3>
          <hr class="line-header-content-center">
          <div class="slider slider-pc">
            <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a1.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a2.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a3.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a4.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a5.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a6.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a7.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a8.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a9.jpg" width="100%" />
              </div>
              <div class="gallery-cell">
                <img src="/public/frontend/images/a10.jpg" width="100%" />
              </div>
            </div>
          </div>

          <div class="slider slider-mobile">
            <div class="carousel js-flickity" data-flickity-options='{ "wrapAround": true }'>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a1.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a2.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a3.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a4.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a5.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a6.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a7.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a8.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a9.jpg" width="100%" />
              </div>
              <div class="carousel-cell">
                <img src="/public/frontend/images/a10.jpg" width="100%" />
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="booking">
      <p class="booking-title booking-title-custom set-font-size" data-font-size="32">ĐẶT LỊCH TƯ VẤN MIỄN PHÍ</p>
      <button href="#" class="button-QA-booking set-padding-button" data-padding-left="31" data-padding-top="25" style="margin-left: 327px">
        <span class="set-font-size" data-font-size="32"><a style="text-decoration:none; color: white;" href="{{ route('lien_he') }}">ĐĂNG KÝ NGAY</a></span>
      </button>
    </div>

    <div class='main-content'>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 main-content-text">
          <div>
            <h3 class="title-header-content set-font-size" data-font-size="38">HỎI ĐÁP CHUYÊN GIA</h3>
            <hr class="line-header-content">
            <div style="margin-top: 50px">
              <div class="row">
                <div class="col-xl-4 col-lg-4 col-sm-12 col-12 main-content-image">
                  <div>
                  <a style="color: #000000" href="{{ route('hoi-dap-chuyen-gia') }}"><img src="/public/frontend/images/image1-2-4.png"></a>
                    <p><a style="color: #000000" href="{{ route('hoi-dap-chuyen-gia') }}" class="set-font-size" data-font-size="22">CHUỖI HẠT NGỌ KHÁC SÙI MÀO GÀ NHƯ THẾ NÀO? CÓ NGUY HIỂM KHÔNG?</a></p>
                  </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-12 col-12 main-content-image">
                  <div>
                  <a style="color: #000000" href="{{ route('hoi-dap-chuyen-gia') }}"><img src="/public/frontend/images/image1-2-5.png"></a>
                    <p><a style="color: #000000" href="{{ route('hoi-dap-chuyen-gia') }}" class="set-font-size" data-font-size="22">NHỮNG DẠNG DA BAO QUY ĐẦU CẦN CẮT</a></p>
                  </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-sm-12 col-12 main-content-image">
                  <div>
                  <a style="color: #000000" href="{{ route('hoi-dap-chuyen-gia') }}"><img src="/public/frontend/images/image1-2-6.png"></a>
                    <p><a style="color: #000000" href="{{ route('hoi-dap-chuyen-gia') }}" class="set-font-size" data-font-size="22">SỰ THẬT VỀ THUỐC TRÁNH THAI DÀNH CHO NAM</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class='main-content main-content-custom'>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 main-content-text">
          <div>
            <h3 class="title-header-content set-font-size" data-font-size="38">PHẪU THUẬT NAM KHOA</h3>
            <div>
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text main-content-text-custom">
                  <div class="float-left width-95">
                    <hr class="line-header-content">
                    <div class="margin-top-60">
                      <span class="set-font-size" data-font-size="22">Khi thuốc, thực phẩm chức năng hoặc các phương pháp tự nhiên không hiệu quả trong việc giải quyết các vấn đề sức khỏe của bệnh nhân, thì phẫu thuật có thể là lựa chọn thích hợp.</span>
                      <br><br><br><span class="set-font-size" data-font-size="22">ThS Nguyễn Văn Đức, bác sĩ tiết niệu và phẫu thuật nam khoa với gần 10 năm kinh nghiệm, chuyên về tiết niệu, sức khỏe tình dục nam giới, tăng cường sinh lý nam và khả năng sinh sản cũng như các phẫu thuật khác nhau để giải quyết vô số vấn đề mà nam giới có thể gặp phải, bao gồm rối loạn cương dương, xuất tinh sớm hoặc kích thước dương vật không đạt yêu cầu.</span>
                    </div>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text-custom">
                  <div class="float-right width-95">
                    <span class="text-title-content-4 set-font-size" data-font-size="32">DANH MỤC PHẪU THUẬT</span>
                    <ul class="content-text-1 margin-top-40 set-font-size" data-font-size="22">
                      <li>Phẫu thuật dương vật: <a style="color: #0062FF;" href="{{ route('2-1') }}">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học</a>, <a style="color: #0062FF;" href="{{ route('2-2') }}">Phẫu thuật tăng kích thước dương vật bằng silicon</a>, <a style="color: #0062FF;" href="{{ route('2-3') }}">Phẫu thuật kéo dài dương vật</a>, Phẫu thuật thẩm mỹ cong dương vật, Phẫu thuật thẩm mỹ chỉnh cong dương vật. Phẫu thuật điều trị vùi lấp dương vật</li>
                      <li>Phẫu thuật quy đầu: <a style="color: #0062FF;" href="{{ route('2-4') }}">Phẫu thuật cắt bao quy đầu</a>, <a style="color: #0062FF;" href="{{ route('2-6') }}">Phẫu thuật làm to quy đầu bằng Megafill</span>, <a style="color: #0062FF;" href="{{ route('2-5') }}">Phẫu thuật làm to viền quy đầu bằng Filler</a>.</li>
                      <li>Phẫu thuật khác: <a style="color: #0062FF;" href="{{ route('2-7') }}">Phẫu thuật điều trị xuất tinh sớm</a>, Tiểu phẫu gắn bi dương vật, Phẫu thuật cấp cứu gãy dương vật, Phẫu thuật điều trị ung thư dương vật.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
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


    <div class='main-content margin-bottom-142'>
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-sm-12 col-12 main-content-text">
          <div>
            <h3 class="title-header-content set-font-size" data-font-size="38">CẢM NHẬN KHÁCH HÀNG</h3>
            <hr class="line-header-content">
            <div class="margin-top-70">
              <div style="margin-top: 36px;" class="set-font-size" data-font-size="22">
                <p style="font-style: italic">"Mặc dù khi đi khám ở bệnh viện, bác sĩ nói rằng cậu nhỏ của mình hoàn toàn khỏe mạnh, có thể hoạt động tốt nhưng kích thước lại thấp dưới mức trung bình, lúc đo chiều dài chỉ được 8cm. Nghĩ đến tương lai sau này, mình đã tìm đến Megadom với mong muốn cho cậu nhỏ vừa to vừa dài hơn. Trải qua phẫu thuật, kích thước của mình đã tăng đáng kể. Bạn gái cũng bất ngờ vì sự thay đổi này, thậm chí cuộc yêu còn trở nên sung mãn hơn trước."</p>
                <p style="text-align: right;"><b>_Khách hàng giấu tên</b></p>
                <hr>
              </div>

              <div style="margin-top: 36px;" class="set-font-size" data-font-size="22">
                <p style="font-style: italic">"Phẫu thuật không đau và nguy hiểm như ban đầu mình nghĩ. Lúc đầu nghe đến cách phẫu thuật cậu nhỏ mình khá lo lắng, sợ phẫu thuật xong chỗ đó lại hỏng thì không biết phải làm sao. May mắn phẫu thuật diễn ra suôn sẻ. Hiện nay tâm trạng của mình rất thoải mái và yên tâm. Chỗ đấy vẫn hoạt động bình thường, mà lại còn khoẻ với lâu hơn trước."</p>
                <p style="text-align: right;"><b>_Khách hàng giấu tên</b></p>
                <hr>
              </div>

              <div style="margin-top: 36px;" class="set-font-size" data-font-size="22">
                <p style="font-style: italic">"Chuyện tình cảm trước đây của tôi đều không đi đến đâu vì hai người bạn gái cũ đều không hài lòng về chuyện quan hệ. Từ đó, bản thân cũng mặc cảm mà không dám quen thêm ai. Đến khám ở Megadom tôi mới biết đến phẫu thuật tăng kích thước cậu nhỏ. Sau phẫu thuật tôi đã an tâm hơn, không còn vướng bận về chỗ đó nhiều như trước nữa."</p>
                <p style="text-align: right;"><b>_Khách hàng giấu tên</b></p>
                <hr>
              </div>

              <div style="margin-top: 36px;" class="set-font-size" data-font-size="22">
                <p style="font-style: italic">"Nhiều năm nay, bản thân mình vẫn muốn tân trang lại chỗ đó nhưng không biết nên làm như thế nào. Tình cờ xem được video của bác sĩ Đức trên youtube nên mình đã đặt lịch để tư vấn. Dù nói chuyện qua điện thoại nhưng bác sĩ rất nhiệt tình, không tạo cảm giác xa cách mà rất chân thành. Vì thế mình đã quyết định lựa chọn dịch vụ tại Megadom. Đây thực sự là một lựa chọn đúng đắn, mình hài lòng về cả đội ngũ bác sĩ, y tá, cơ sở vật chất và cả dịch vụ của phòng khám."</p>
                <p style="text-align: right;"><b>_Khách hàng giấu tên</b></p>
                <hr>
              </div>
            </div>
          </div>
          <button data-link="{{ route('library') }}#loi-chung-thuc" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25">
              <span class="set-font-size" data-font-size="32">XEM TẤT CẢ</span>
          </button>
        </div>
      </div>
    </div>

  </div>
@endsection

@section('script')
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>
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
@endsection