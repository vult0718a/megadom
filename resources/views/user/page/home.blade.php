@extends('user.layout.main')

@section('title')
  <title>Trang chủ</title>
@endsection

@section('style')
  <link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/user/page/home.css">
@endsection

@section('content')
<div class="body-content">
  <div class='main-wrapper'>
    <div class="banner-container">
      <div class="banner-content">
        <p class="banner-text-small">Bạn đang tìm giải pháp làm to dương vật? </p>
        <p class="banner-text-big"><b>MEGADOM</b><br>CÓ THỂ GIÚP BẠN</p>
        <a href="https://www.youtube.com/watch?v=Hvn63NmrK0s" class="banner-text-medium" target="_blank" style="color:#FFFFFF">TÌM HIỂU THÊM VỀ QUÁ TRÌNH PHẪU  THUẬT <span class="icon-banner">&#10140;</span></a>
      </div>
      <div class="img-banner">
        <a href="https://tienphong.vn/bac-si-nam-khoa-chi-ra-nhung-luu-y-song-con-cho-quy-ong-muon-tang-kich-co-cau-nho-post1394293.tpo" target="_blank"><img class="image-logo" src="/public/frontend/images/logotienphong.png"></a>
        <a href="https://danviet.vn/giai-e-cho-anh-chang-bung-to-lo-so-rut-20211123022147615.htm" target="_blank"><img class="image-logo" src="/public/frontend/images/baodanviet.png"></a>
        <a href="https://eva.vn/suc-khoe/nguoi-yeu-bo-vi-cua-quy-be-thanh-nien-ha-noi-choi-lon-mot-lan-cho-thien-ha-tram-tro-c131a498347.html" target="_blank"><img class="image-logo" src="/public/frontend/images/baoeva.png"></a>
        <a href="https://www.24h.com.vn/suc-khoe-doi-song/thuc-pham-tu-nhien-lam-tang-kich-co-cau-nho-bac-sy-dam-bao-an-toan-100-c62a1314406.html" target="_blank"><img class="image-logo" src="/public/frontend/images/logobao24h.png"></a>
        <a href="https://giadinh.suckhoedoisong.vn/chong-xuat-tinh-som-vo-co-the-co-con-duoc-khong-172211126153226907.htm" target="_blank"><img class="image-logo" src="/public/frontend/images/logobaogiadinh.png"></a>
        <a href="https://www.youtube.com/watch?v=tWoGPXtsgsw&t=718s" target="_blank"><img class="image-logo" src="/public/frontend/images/logovtvcab.png"></a>
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
          <img src="/public/frontend/images/answers1.png" style="filter: brightness(50%);">
          <div>
            <button class="button-QA button-QA-url" data-link="https://youtu.be/gAcaCIbfhpg">
                <span>Megadom Giải đáp</span>
            </button>
            <p><a href="https://youtu.be/gAcaCIbfhpg" target="_blank" style="text-decoration:none; color: white;">BẠO DÂM BIẾN THÁI TÌNH DỤC HAY BỆNH LÝ</a></p>
          </div>
        </div>
      </div>
      <div class="block-img-wrapper-3">
        <div class="content-wrapper-3">
          <img src="/public/frontend/images/answers2.png" style="filter: brightness(50%);">
          <div>
            <button class="button-QA button-QA-url" data-link="https://youtu.be/tWoGPXtsgsw">
                <span>Megadom Giải đáp</span>
            </button>
            <p><a href="https://youtu.be/tWoGPXtsgsw" target="_blank" style="text-decoration:none; color: white;">NGUY CƠ KHI SỬ DỤNG DỤNG CỤ TÌNH DỤC</a></p>
          </div>
        </div>
      </div>
      <div class="block-img-wrapper-3">
        <div class="content-wrapper-3">
          <img src="/public/frontend/images/answers3.png" style="filter: brightness(50%);">
          <div>
            <button class="button-QA button-QA-url" data-link="https://youtu.be/Hvn63NmrK0s">
                <span>Megadom Giải đáp</span>
            </button>
            <p><a href="https://youtu.be/Hvn63NmrK0s" target="_blank" style="text-decoration:none; color: white;">CÁC PHƯƠNG PHÁP KÉO DÀI VÀ TĂNG KÍCH THƯỚC DƯƠNG VẬT</a></p>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align: center; display: block;">
      <button class="button-wrapper-3 button-QA-url" data-link="https://www.youtube.com/@BacsiDuc">
        <span>XEM TOÀN BỘ</span>
      </button>
    </div>
  </div>

  <div class='main-wrapper-4'>
    <div class="banner-container-4">
      <div class="banner-content-4">
        <div class="width-80">
          <div class="col-xl-6 col-lg-6 col-sm-12 col-12 content-wrapper-4">
            <span class="title-text">PHẪU THUẬT TĂNG<br>KÍCH THƯỚC DƯƠNG VẬT</span>
            <hr class="hr-wrapper-4-left">
            <span class="content-text" style="display: inline-block;width: 68%;">Phẫu thuật tăng kích thước dương vật ở Megadom không gây mê, không đau đớn và có thể duy trì kích thước dương vật lâu dài.</span>
            <br><br><a href="{{ route('2-1') }}" class="link-custom">Khám phá thêm</a> | <a href="{{ route('library') }}" class="link-custom">Thư viện</a>
          </div>

          <div class="col-xl-6 col-lg-6 col-sm-12 col-12 content-wrapper-4 content-wrapper-4-block-2" style="text-align: right;">
            <span class="title-text">PHẪU THUẬT<br>KÉO DÀI DƯƠNG VẬT</span>
            <hr class="hr-wrapper-4-right">
            <span class="content-text" style="display: inline-block;width: 68%;text-align: right;">Lấy lại sự tự tin của bạn chỉ bằng phẫu thuật kéo dài dương vật. Duy nhất chúng tôi có thể làm dài tối đa dương vật của bạn.</span>
            <br><br><a href="{{ route('2-3') }}" class="link-custom">Khám phá thêm</a> | <a href="{{ route('library') }}" class="link-custom">Thư viện</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class='main-wrapper-5'>
    <div class="banner-container-5">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-sm-0 col-0 parent">
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-12 col-12 content-wrapper-5">
              <span class="title-text">ĐỘI NGŨ BÁC SĨ</span>
              <hr class="hr-wrapper-4-left hr-wrapper-4-left-custom">
              <span class="content-text">ThS.BS Nguyễn Văn Đức là một trong những bác sĩ tiết niệu thành công nhất tại Việt Nam. Anh đã cống hiến sự nghiệp chuyên môn của mình để giúp nam giới giải quyết nhiều vấn đề  về dương vật. Từ việc tăng kích cỡ dương vật đến các phương pháp điều trị dị tật dương vật cũng như các vấn đề nam khoa khác.<br>Bác sĩ Đức là người tiên phong trong lĩnh vực điều trị dương vật trong nước, và cho đến nay đã thực hiện thành công hàng trăm ca phẫu thuật dương vật. 	</span>
              <br><br><a href="{{ route('doctor') }}" class="link-custom">Khám phá thêm</a>
            </div>
        </div>
    </div>
  </div>

  <div class='main-content'>
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-sm-12 col-12 main-content-text main-content-text-custom">
        <div>
          <div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 img-home-1">
                <img src="/public/frontend/images/image16r.png" data-src-mobile="/public/frontend/images/image16r-1.png" class="float-left width-95 ">
              </div>

              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
                <div class="float-right width-95">
                  <span class="title-header-content">PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG TẤM ĐỘN SINH HỌC MEGADERM</span>
                  <br>
                  <hr class="line-header-content">
                  <div class="mr-60 mr-60-custom" style="text-align: justify;">
                    <span>Phẫu thuật tăng kích thước dương vật đã đi một chặng đường dài trên thế giới. Tuy nhiên phương pháp này chưa được nhiều người biết đến tại Việt Nam. Với sự phát triển của khoa học y tế, tấm độn sinh học Megaderm ra đời với nhiều tiềm năng trong việc cấy ghép, nam giới có thể đạt được chiều dài, chu vi và kích thước dương vật mong muốn. Tại Megadom, bạn có thể yên tâm rằng ca phẫu thuật được thực hiện bởi một trong những bác sĩ phẫu thuật dương vật giỏi nhất cả nước - với hàng ngàn bệnh nhân nam hài lòng.</span>
                    <br><br><span>Hãy tưởng tượng bạn có kích thước dương vật khiến bạn cảm thấy tự tin, bạn thực sự thích điều đó và nghĩ rằng bạn là một người đàn ông bản lĩnh và nam tính. Quá trình phẫu thuật đơn giản, nhanh chóng và chỉ mất một thời gian ngắn sau đó có thể sinh hoạt lại bình thường. Tấm độn Megaderm® có thể tồn tại vĩnh viễn, giống như một bộ phận của cơ thể người.</span>
                  </div>
                  <br>
                  <a href="{{ route('2-1') }}" class="link-custom">Khám phá thêm</a>
                </div>
              </div>
            </div>

            <div class="row row-2 float-left">
              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
                <div class="width-95">
                  <span class="title-header-content">LỢI ÍCH CỦA PHƯƠNG PHÁP LÀM TO DƯƠNG VẬT BẰNG SILICONE</span>
                  <br>
                </div>
                <div class="float-left width-95" style="text-align: justify;">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12 content-header-content-2">
                      <div class="mr-60">
                        <span><b>Bền và có thể tháo dời dễ dàng</b><br><br>Nhìn <b>tự nhiên</b> và khó bị phát hiện<br><br>Được làm <b>silicone y tế, rất mềm</b><br><br>Chi phí <b>hợp lý</b><br><br>Phẫu thuật được bác sĩ <b>tùy chỉnh theo form mong muốn</b> của bạn</span>
                      </div>
                      <br>
                      <a href="{{ route('2-2') }}" class="link-custom link-custom-2">Khám phá thêm</a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12 content-header-content-2">
                      <div class="mr-60">
                        <span>Làm to bằng silicon sẽ <b>tăng</b> chu vi dương vật lên từ <b>1-2cm</b> tuỳ thuộc vào kích cỡ của silicon và phụ thuộc vào độ giãn nở của da thân dương vật.<br><br><b>Tỷ lệ thành công của phương pháp silicon là 100%</b> (bất kỳ tác dụng phụ nào xảy ra thường là kết quả của việc bệnh nhân không tuân thủ hướng dẫn sau phẫu thuật, điều này sẽ được chuyên gia của Megadom giải thích đầy đủ trước khi làm thủ thuật).</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mobile-to-top">
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12 img-home-2">
                  <img src="/public/frontend/images/rectangle105g.png" data-src-mobile="/public/frontend/images/rectangle105g-1.png" class="float-right width-95">
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

  <div class="vision">
    <p class="vision-title">CẢM NHẬN CỦA KHÁCH HÀNG</p>
    <hr>
    <div class="vision-contnet col">
      <div class="vision-block vision-block-1 col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="content">“Trước kia tôi còn ngần ngại khi nghĩ đến việc làm to "chỗ ấy". Nhưng để cải thiện chuyện chăn gối, tôi đã tìm hiểu từ nhiều nguồn thông tin.  Thật sự đã không lầm khi đặt niềm tin vào Megadom. Tôi đã tự tin hơn rất nhiều!”</p>
      </div>
      <div class="vision-block vision-block-2 col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="content">Chỉ khi gặp Bác sĩ Đức, tôi mới thấy nhẹ người vì được "bắt đúng bênh". Không hề đau đơn hay khó khăn gì như tôi lo sợ, giờ thì vợ tôi còn thích hơn cả.</p>
      </div>
      <div class="vision-block vision-block-3 col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="content">“Bác sĩ nhiệt tình và chu đáo nên tôi cảm thấy an tâm. Phẫu thuật cũng không đau đớn gì và hiệu quả rõ rệt. Tôi nghĩ mình đã chọn đúng.”</p>
      </div>
    </div>
  </div>

  <div class='main-content'>
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-sm-12 col-12 main-content-text main-content-text-custom">
        <div>
          <div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 img-home-2">
                <img src="/public/frontend/images/home-penile2.png" data-src-mobile="/public/frontend/images/home-penile2-1.png" class="float-left width-95">
              </div>

              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
                <div class="float-right width-95">
                  <span class="title-header-content">PHẪU THUẬT KÉO DÀI DƯƠNG VẬT</span>
                  <br>
                  <hr class="line-header-content">
                  <div class="mr-60 mr-60-custom" style="text-align: justify;">
                    <span>Không phải tất cả đàn ông đều may mắn có được kích thước dương vật họ muốn - một số nam giới có dương vật rất ngắn so với chiều dài trung bình. Theo dữ liệu thống kê từ 14594 nam giới Việt Nam công bố vào năm 2021, chiều dài dương vật trung bình của nam giới Việt Nam ở trạng thái bình thường và khi kéo dài lần lượt là 9.03cm và 14.67cm. Phẫu thuật kéo dài dương vật tại Megadom có thể giúp bạn cải thiện chiều dài cũng như mang lại hình dáng và cấu trúc dương vật khiến bạn trở nên nam tính và tự tin hơn.</span>
                    <br><br><br><span>Bạn sẽ không còn lo lắng về việc tham gia những hoạt động như đi bơi hay e ngại việc tiến xa hơn trong một mối quan hệ tình cảm. Bạn cũng không còn suy nghĩ quá nhiều liệu dương vật của mình có đạt chiều dài chuẩn hay không. Tại Megadom, bạn có thể lựa chọn chiều dài phù hợp nhất với bạn thân. Bác sĩ Đức là một trong những bác sĩ chuyên khoa Tiết niệu - Nam học hàng đầu tại Việt Nam và có thể giúp bạn trong hành trình lấy lại sự tự tin vào cơ thể của mình.</span>
                  </div>
                  <br><a href="{{ route('2-3') }}" class="link-custom link-custom-2">Khám phá thêm</a>
                </div>
              </div>
            </div>

            <div class="row row-2 float-left">
              <div class="main-content-text main-content-text-custom">
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12 col-custom mobile-to-top">
                  <div class="width-95">
                    <div class="col-xl-6 col-lg-6 col-sm-12 col-12 col-custom" style="padding-left: 0px; padding-right: 25px">
                      <span class="title-header-content">PHẪU THUẬT KÉO DÀI TẠI MEGADOM</span>
                      <div class="mr-60 mr-60-custom">
                        <span>Dương vật dài ra trung bình 1-2 cm<br><br>Thời gian phẫu thuật nhanh chóng<br><br>Không gây rối loạn cương dương<br><br>Không ảnh hưởng gì đến sinh sản</span>
                        <br>
                        <br><a href="{{ route('2-3') }}" class="link-custom link-custom-2">Khám phá thêm</a>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-12col-12 col-custom" style="padding-right: 0px; padding-left: 25px">
                      <span class="title-header-content">LÝ DO BẠN NÊN CHỌN MEGADOM</span>
                      <div class="mr-60 mr-60-custom">
                        <span>Bác sĩ chuyên môn đầu ngành. Công nghệ phẫu thuật và chất liệu phẫu thuật từ Hàn Quốc tiên phong và độc quyền sử dụng.<br><br><br>Đảm bảo phẫu thuật an toàn tuyệt đối, quy trình tiệt trùng theo tiêu chuẩn của Bộ Y tế.</span>
                        <br>
                        <br><a href="{{ route('introduce') }}" class="link-custom link-custom-2">Khám phá thêm</a>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-sm-12 col-12 col-custom mobile-to-top">
                  <img src="/public/frontend/images/rectangle105h.png" class="float-right width-95">
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  
  <div class='main-wrapper-7'>
    <div class="banner-container-7">
      <div class="banner-content-7">
        <p class="banner-text-big-7">Tin tức</p>
        <p class="banner-text-small-7"><a href="{{ route('post') }}" style="color: #FFFFFF;">xem tất cả tin tức</a></p>
        <hr>
      </div>
    </div>

    <div class="row">
      <div class="col-xl-6 col-lg-6 col-sm-12 col-12 img-wrapper-7">
        <img src="/public/frontend/images/image16.png" width="100%">
        <div>
          <p><a href="https://drmegadom.com/tin-tuc/19" style="color:#FFFFFF">KÍCH THƯỚC DƯƠNG VẬT: HIỂU THẾ NÀO CHO ĐÚNG</a></p>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-sm-12 col-12 img-wrapper-7">
        <img src="/public/frontend/images/image16a.png" width="100%">
        <div>
          <p><a href="https://drmegadom.com/tin-tuc/3" style="color:#FFFFFF">TẠI SAO DƯƠNG VẬT CỦA TÔI LẠI NHỎ NHƯ THẾ</a></p>
        </div>
      </div>
    </div>
  </div>
 

  <div class="difference">
    <p class="difference-title-bold" style="color:#0429B7; width: 55%; margin: 100px auto 0;">CÂU HỎI THƯỜNG GẶP VỀ PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
    <hr>
    <div class="difference-content-block">
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title" style="color:#0429B7">(1) Phẫu thuật làm to dương vật có ảnh hưởng đến độ cương dương sau này không?</p>
        <p class="difference-content">Phẫu thuật làm to Dương Vật không ảnh hưởng đến việc bơm máu vào dương vât, nó nằm ngoài thân dương vật. Độ cương dương trước phẫu thuật như thế nào thì sau vẫn vậy.</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title" style="color:#0429B7">(2) Phẫu thuật làm to dương vật có ảnh hưởng gì đến sức khỏe không?</p>
        <p class="difference-content">Hoàn toàn không ảnh hưởng gì nhiều đến sức khỏe. Phẫu thuật chỉ kéo dài 40 – 60p, sau khi làm xong người bệnh có thể tự đi về nhà. Người bệnh chỉ bị đau duy nhất ở 2 mũi tiêm gây tê gốc dương vật.</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title" style="color:#0429B7">(3) Mức độ cải thiện sau khi làm to dương vật là như thế nào?</p>
        <p class="difference-content">Tùy thuộc vào độ co giãn da của thân dương vật mà Dr. Megadom quyết định đặt tấm độn dày hay mỏng. Mức độ cải thiện về chu vi thấp nhất là 2cm, nhiều nhất là 5cm.</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title" style="color:#0429B7">(4) Còn các phương pháp tăng kích cỡ dương vật không phẫu thuật thì sao?</p>
        <p class="difference-content">Thực tế, không có phương pháp làm to dương vật tự nhiên nào được chứng minh là hiệu quả với nam giới sau 21 tuổi trừ giảm cân. Các cách không phẫu thuật để đạt được một dương vật lớn hơn có thể bao gồm thực phẩm, thuốc hay Jelqing. Tuy nhiên, không có bằng chứng nào cho thấy những phương pháp này có hiệu quả và đôi khi có thể gây hại cho bệnh nhân. Trước khi quyết định lựa chọn bất kỳ phương án nào, bạn nên tham khảo ý kiến của bác sĩ để hiểu những rủi ro tiềm ẩn cũng như lựa chọn biện pháp an toàn nhất.</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title" style="color:#0429B7">(5) Các phương pháp tăng kích thước dương vật khác thì sao (tiêm mỡ tự thân, tiêm Filler)?</p>
        <p class="difference-content">Một số phương pháp làm to dương vật khác như tiêm mỡ tự thân, tiêm Filler khoảng 10 năm về trước được áp dụng rất nhiều. Nhưng đến nay thì những nhược điểm của phương pháp này được bộc lộ rất rõ. Sau khi mỡ tự thân hoặc Filler được tiêm vào thì chúng không ổn định, sẽ di chuyển dần dần xuống phía dưới của thân dương vật làm cho hình dạng dương vật bị biến dạng. Hoặc lớp mỡ này tiêu đi không đồng đều và co nhỏ lại tạo thành những cục trên thân dương vật. Hậu quả là dương vật chỗ to chỗ nhỏ. </p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title" style="color:#0429B7">(6) Nếu trường hợp phẫu thuật xảy ra các biến chứng không mong muốn thì sao?</p>
        <p class="difference-content">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có tỷ lệ thành công là 100%, có một số trường hợp người bệnh bị kích ứng nhẹ tại chỗ và chỉ cần dùng thuốc là khỏi. Nếu xảy ra tình trạng đào thải hoặc những biến chứng khác sau phẫu thuật, Megadom cam kết sẽ trả lại bệnh nhân chi phí phẫu thuật, đồng thời tiến hành phẫu thuật tháo tấm độn miễn phí. Nếu có bất kỳ chi phí nào phát sinh thêm sau phẫu thuật thì Megadom sẽ chịu trách nhiệm chi trả toàn bộ.</p>
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

  $(".button-QA-url").click(function() {
      window.open($(this).data('link'), '_blank');
  });
</script>
@endsection