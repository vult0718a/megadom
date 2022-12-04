@extends('user.layout.main')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('style')
  <link rel="stylesheet" type="text/css" href="/frontend/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/user/page/home.css">
@endsection

@section('content')
<div class="body-content">
  <div class='main-wrapper'>
    <div class="banner-container">
      <div class="banner-content">
        <p class="banner-text-small">Bạn đang tìm giải pháp làm to dương vật?</p>
        <p class="banner-text-big"><b>MEGADOM</b><br>CÓ THỂ GIÚP BẠN</p>
        <p class="banner-text-medium">TÌM HIỂU THÊM VỀ QUÁ TRÌNH PHẪU  THUẬT &#10140;</p>
      </div>
      <div class="img-banner">
        <img class="image-logo" src="/frontend/images/logotienphong.png">
        <img class="image-logo" src="/frontend/images/baodanviet.png">
        <img class="image-logo" src="/frontend/images/baoeva.png">
        <img class="image-logo" src="/frontend/images/logobao24h.png">
        <img class="image-logo" src="/frontend/images/logobaogiadinh.png">
        <img class="image-logo" src="/frontend/images/logovtvcab.png">
      </div>
    </div>
  </div>

  <div class='main-wrapper-2'>
    <div class="banner-container-2">
      <div class="banner-content-2">
        <p class="banner-text-small-2">MEGADOM</p>
        <p class="banner-text-big-2">Giải đáp</p>
      </div>
    </div>
  </div>

  <div class='main-wrapper-3'>
    <div>
      <div class="block-img-wrapper-3">
        <div class="content-wrapper-3">
          <img src="/frontend/images/answers1.png" style="filter: brightness(50%);">
          <div>
            <button class="button-QA">
                <span>Megadom Giải đáp</span>
            </button>
            <p>BẠO DÂM BIẾN THÁI TÌNH DỤC HAY BỆNH LÝ</p>
          </div>
        </div>
      </div>
      <div class="block-img-wrapper-3">
        <div class="content-wrapper-3">
          <img src="/frontend/images/answers2.png" style="filter: brightness(50%);">
          <div>
            <button class="button-QA">
                <span>Megadom Giải đáp</span>
            </button>
            <p>NGUY CƠ KHI SỬ DỤNG DỤNG CỤ TÌNH DỤC</p>
          </div>
        </div>
      </div>
      <div class="block-img-wrapper-3">
        <div class="content-wrapper-3">
          <img src="/frontend/images/answers3.png" style="filter: brightness(50%);">
          <div>
            <button class="button-QA">
                <span>Megadom Giải đáp</span>
            </button>
            <p>CÁC PHƯƠNG PHÁP KÉO DÀI VÀ TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align: center; display: block;">
      <button class="button-wrapper-3">
        <span>XEM TOÀN BỘ</span>
      </button>
    </div>
  </div>

  <div class='main-wrapper-4'>
    <div class="banner-container-4">
      <div class="banner-content-4">
        <div style="width: 80%; margin: auto">
          <div class="col-xl-6 col-lg-6 col-sm-12 col-12 content-wrapper-4">
            <span class="title-text">PHẪU THUẬT TĂNG<br>KÍCH THƯỚC DƯƠNG VẬT</span>
            <hr class="hr-wrapper-4-left">
            <span class="content-text">Phẫu thuật tăng kích thước dương vật ở Megadom không gây mê, không đau đớn và có thể duy trì kích thước dương vật lâu dài.</span>
            <br><br><a href="#">Khám phá thêm</a> | <a href="#">Thư viện</a>
          </div>

          <div class="col-xl-6 col-lg-6 col-sm-12 col-12 content-wrapper-4" style="text-align: right;">
            <span class="title-text">PHẪU THUẬT<br>KÉO DÀI DƯƠNG VẬT</span>
            <hr class="hr-wrapper-4-right">
            <span class="content-text">Lấy lại sự tự tin của bạn chỉ bằng phẫu thuật kéo dài dương vật. Duy nhất chúng tôi có thể làm dài tối đa dương vật của bạn.</span>
            <br><br><a href="#">Khám phá thêm</a> | <a href="#">Thư viện</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class='main-wrapper-5'>
    <div class="banner-container-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-12 col-12 parent">
              <img class="image1" src="/frontend/images/channels4_profile2.png">
              <img class="image2" src="/frontend/images/channels4_profile.png">
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 col-12 content-wrapper-5">
              <span class="title-text">ĐỘI NGŨ BÁC SĨ</span>
              <hr class="hr-wrapper-4-left">
              <span class="content-text">ThS.BS Nguyễn Văn Đức là một trong những bác sĩ tiết niệu thành công nhất tại Việt Nam. Anh đã cống hiến sự nghiệp chuyên môn của mình để giúp nam giới giải quyết nhiều vấn đề  về dương vật. Từ việc tăng kích cỡ dương vật đến các phương pháp điều trị dị tật dương vật cũng như các vấn đề nam khoa khác.<br>Bác sĩ Đức là người tiên phong trong lĩnh vực điều trị dương vật trong nước, và cho đến nay đã thực hiện thành công hàng trăm ca phẫu thuật dương vật. 	</span>
              <br><br><a href="#">Khám phá thêm</a>
            </div>
        </div>
    </div>
  </div>



  <div class='main-content'>
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-sm-12 col-12 main-content-text">
        <div>
          <div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                <img src="/frontend/images/image16r.png" width="95%" class="float-left">
              </div>

              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
                <div style="width: 95%;" class="float-right">
                  <span class="title-header-content">PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG TẤM ĐỘN SINH HỌC MEGADERM</span>
                  <br>
                  <hr class="line-header-content">
                  <div style="margin-top: 60px">
                    <span>Phẫu thuật tăng kích thước dương vật đã đi một chặng đường dài trên thế giới. Tuy nhiên phương pháp này chưa được nhiều người biết đến tại Việt Nam. Với sự phát triển của khoa học y tế, tấm độn sinh học Megaderm ra đời với nhiều tiềm năng trong việc cấy ghép, nam giới có thể đạt được chiều dài, chu vi và kích thước dương vật mong muốn. Tại Megadom, bạn có thể yên tâm rằng ca phẫu thuật được thực hiện bởi một trong những bác sĩ phẫu thuật dương vật giỏi nhất cả nước - với hàng ngàn bệnh nhân nam hài lòng.</span>
                    <br><br><br><span>Hãy tưởng tượng bạn có kích thước dương vật khiến bạn cảm thấy tự tin, bạn thực sự thích điều đó và nghĩ rằng bạn là một người đàn ông bản lĩnh và nam tính. Quá trình phẫu thuật đơn giản, nhanh chóng và chỉ mất một thời gian ngắn sau đó có thể sinh hoạt lại bình thường. Tấm độn Megaderm® có thể tồn tại vĩnh viễn, giống như một bộ phận của cơ thể người. --</span>
                  </div>
                  <br><a href="#">Khám phá thêm</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>
@endsection
