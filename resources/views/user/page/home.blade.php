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

            <div class="row row-2 float-left">
              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
                <div style="width: 95%;" class="float-left">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                      <span class="title-header-content">LỢI ÍCH CỦA PHƯƠNG PHÁP LÀM TO DƯƠNG VẬT BẰNG SILICONE</span>
                      <br>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                      <span class="title-header-content"></span>
                      <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                      <div style="margin-top: 60px">
                        <span><b>Bền và có thể tháo dời dễ dàng</b><br>Nhìn <b>tự nhiên</b> và khó bị phát hiện<br>Được làm <b>silicone y tế, rất mềm</b><br>Chi phí <b>hợp lý</b><br>Phẫu thuật được bác sĩ <b>tùy chỉnh theo kích cỡ mong muốn</b> của bạn</span>
                      </div>
                      <br><a href="#">Khám phá thêm</a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                      <div style="margin-top: 60px">
                        <span>Làm to bằng silicon sẽ <b>tăng</b> chu vi dương vật lên từ <b>1-3cm</b> tuỳ thuộc vào kích cỡ của silicon và phụ thuộc vào độ giãn nở của da thân dương vật.<br><b>Tỷ lệ thành công của phương pháp silicon là 100%</b> (bất kỳ tác dụng phụ nào xảy ra thường là kết quả của việc bệnh nhân không tuân thủ hướng dẫn sau phẫu thuật, điều này sẽ được chuyên gia của Megadom giải thích đầy đủ trước khi làm thủ thuật).</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                  <img src="/frontend/images/rectangle105g.png" width="95%" class="float-right">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class='main-wrapper-6'>
    <div class="banner-container-6">
      <div class="banner-content-6">
        <p class="banner-text-big-6">Thư viện</p>
        <p class="banner-text-under-6">khám phá</p>
        <hr class="under-6">
      </div>
    </div>
  </div>

  <div class="vision container">
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
      <div class="col-xl-12 col-lg-12 col-sm-12 col-12 main-content-text">
        <div>
          <div>
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                <img src="/frontend/images/home-penile2.png" width="95%" class="float-left">
              </div>

              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
                <div style="width: 95%;" class="float-right">
                  <span class="title-header-content">PHẪU THUẬT KÉO DÀI DƯƠNG VẬT</span>
                  <br>
                  <hr class="line-header-content">
                  <div style="margin-top: 60px">
                    <span>Không phải tất cả đàn ông đều may mắn có được kích thước dương vật họ muốn - một số nam giới có dương vật rất ngắn, hay còn gọi là hội chứng dương vật nhỏ - micropenis. Đây là tình trạng chiều dài dương vật dưới 3 inch (7.62cm). Phẫu thuật kéo dài dương vật bằng phương pháp cắt dây chằng chéo tại Megadom có thể giúp bạn cải thiện chiều dài cũng như mang lại hình dáng và cấu trúc dương vật khiến bạn trở nên nam tính và tự tin hơn.</span>
                    <br><br><br><span>Bạn sẽ không còn lo lắng về việc tham gia những hoạt động như đi bơi hay e ngại việc tiến xa hơn trong một mối quan hệ tình cảm. Bạn cũng không còn suy nghĩ quá nhiều liệu dương vật của mình có đạt chiều dài chuẩn hay không. Tại Megadom, bạn có thể lựa chọn chiều dài phù hợp nhất với bạn thân. Bác sĩ Đức là một trong những bác sĩ chuyên khoa Tiết niệu - Nam học hàng đầu tại Việt Nam và có thể giúp bạn trong hành trình lấy lại sự tự tin vào cơ thể của mình.</span>
                  </div>
                  <br><a href="#">Khám phá thêm</a>
                </div>
              </div>
            </div>

            <div class="row row-2 float-left">
              <div class="col-xl-6 col-lg-6 col-sm-12 col-12 main-content-text">
                <div style="width: 95%;" class="float-left">
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                      <span class="title-header-content">PHẪU THUẬT CẮT DÂY CHẰNG CHÉO KẾT HỢP LOẠI BỎ LỚP XƯƠNG MU</span>
                      <br>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                      <span class="title-header-content">LÝ DO BẠN NÊN CHỌN MEGADOM</span>
                      <br>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                      <div style="margin-top: 60px">
                        <span>Dương vật dài ra trung bình 2-3 cm<br>Thời gian phẫu thuật nhanh chóng<br>Không gây rối loạn cương dương<br>Không ảnh hưởng gì đến sinh sản</span>
                      </div>
                      <br><a href="#">Khám phá thêm</a>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-sm-6 col-12">
                      <div style="margin-top: 60px">
                        <span>Bác sĩ chuyên môn đầu ngành. Công nghệ phẫu thuật và chất liệu phẫu thuật từ Hàn Quốc tiên phong và độc quyền sử dụng.<br><br><br>Đảm bảo phẫu thuật an toàn tuyệt đối, quy trình tiệt trùng theo tiêu chuẩn của Bộ Y tế.</span>
                      </div>
                      <br><a href="#">Khám phá thêm</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
                  <img src="/frontend/images/rectangle105h.png" width="95%" class="float-right">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="difference container">
    <p class="difference-title-bold">CÂU HỎI THƯỜNG GẶP VỀ PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
    <hr>
    <div class="difference-content-block">
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title">(1) Phẫu thuật làm to dương vật có ảnh hưởng đến độ cương dương sau này không?</p>
        <p class="difference-content">Phẫu thuật làm to Dương Vật không ảnh hưởng đến việc bơm máu vào dương vât, nó nằm ngoài thân dương vật. Độ cương dương trước phẫu thuật như thế nào thì sau vẫn vậy.</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title">(2) Phẫu thuật làm to dương vật có ảnh hưởng gì đến sức khỏe không?</p>
        <p class="difference-content">Hoàn toàn không ảnh hưởng gì nhiều đến sức khỏe. Phẫu thuật chỉ kéo dài 40 – 60p, sau khi làm xong người bệnh có thể tự đi về nhà. Người bệnh chỉ bị đau duy nhất ở 2 mũi tiêm gây tê gốc dương vât.</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title">(3) Mức độ cải thiện sau khi làm to dương vật là như thế nào?</p>
        <p class="difference-content">Tùy thuộc vào độ co giãn da của thân dương vật mà Dr. Megadom quyết định đặt tấm độn dày hay mỏng. Mức độ cải thiện về chu vi thấp nhất là 2cm, nhiều nhất là 5cm.</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title">(4) Còn các phương pháp tăng kích cỡ dương vật không phẫu thuật thì sao?</p>
        <p class="difference-content">Thật không may, không có phương pháp không phẫu thuật để mở rộng dương vật đã được chứng minh là hiệu quả. Các phương pháp không phẫu thuật để đạt được một dương vật lớn hơn có thể bao gồm bơm, thuốc viên hoặc jelqing, nhưng không có bằng chứng nào cho thấy những phương pháp này có hiệu quả và đôi khi có thể gây hại cho bệnh nhân..</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title">(5) Các phương pháp tăng kích thước dương vật khác thì sao (tiêm mỡ tự thân, tiêm Filler)?</p>
        <p class="difference-content">Một số phương pháp làm to dương vật khác như tiêm mỡ tự thân, tiêm Filler khoảng 10 năm về trước được áp dụng rất nhiều. Nhưng đến nay thì những nhược điểm của phương pháp này được bộc lộ rất rõ. Sau khi mỡ tự thân hoặc Filler được tiêm vào thì chúng không ổn định, sẽ di chuyển dần dần xuống phía dưới của thân dương vật. Làm cho hình dạng dương vật bị biến dạng. Hoặc lớp mỡ này tiêu đi không đồng đều và co nhỏ lại tạo thành những cục trên thân dương vật. Hậu quả là dương vật chỗ to chỗ nhỏ. Thời gian tác dụng của tiêm mỡ và Filler chỉ có tác dụng 4-6 tháng, và thường thì người bệnh sẽ phải làm 3-5 lần tiêm nhắc lại.</p>
      </div>
      <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
        <p class="difference-title">(6) Nếu trường hợp phẫu thuật xảy ra các biến chứng không mong muốn thì sao?</p>
        <p class="difference-content">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có tỷ lệ thành công là 100%, có một số trường hợp người bệnh bị kích ứng nhẹ tại chỗ và chỉ cần dùng thuốc là khỏi. Nếu xảy ra tình trạng đào thải hoặc những biến chứng khác sau phẫu thuật, Megadom cam kết sẽ trả lại bệnh nhân chi phí phẫu thuật, đồng thời tiến hành phẫu thuật tháo tấm độn miễn phí. Nếu có bất kỳ chi phí nào phát sinh thêm sau phẫu thuật thì Megadom sẽ chịu trách nhiệm chi trả toàn bộ</p>
      </div>
    </div>
  </div>
</div>
@endsection
