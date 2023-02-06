@extends('user.layout.main')

@section('title')
<title>Phẫu thuật kéo dài</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/public/user/page/2-3.css">
<style>
  .collapsible {
    background-color: #FFFFFF;
    cursor: pointer;
    width: 100%;
    border: none;
    outline: none;
    padding: 22px 30px;
    font-family: 'WorkSans-SemiBold';
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 170%;
    text-align: justify;
    color: #000000;
    display: inline-flex;
    align-items: center;
  }

  .qa .collapsible span {
    width: 92%;
  }

  .collapsible:after {
    content: url(/public/frontend/images/vector-down.png);
    margin: auto;
    
  }
  
  .active:after {
    content: url(/public/frontend/images/vector-down.png);
    transform: rotate(180deg);
  }
  
  .content {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #FFFFFF;
    color: #000000;
    width: 100%;
    margin-bottom: 8px;

    font-family: 'WorkSans-Medium';
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 170%;
    text-align: justify;
    color: #000000;
    padding-left: 30px;
    padding-right: 97px;
  }
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    text-align: center;
  }
</style>
@endsection

@section('content')
  <div class="screen2-3">
    <div class="banner">
      <div>
        <div class="text-banner col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold set-font-size set-line-height" data-font-size="64" data-line-height="75">Phẫu thuật kéo dài dương vật</p>
          <div class="vertical set-width-block set-height-block set-margin-top" data-width-block="10" data-height-block="95" data-margin-top="59"></div>
          <p class="text-medium set-font-size set-line-height set-width-block set-margin-top set-margin-left" data-margin-top="-98" data-margin-left="46" data-font-size="28" data-line-height="33" data-width-block="448">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng.</p>
          <p class="text-small set-font-size set-line-height set-width-block" data-font-size="18" data-width-block="617">Có nhiều yếu tố ảnh hưởng đến chất lượng đời sống tình dục của nam giới. Nếu bạn cho rằng dương vật của mình quá ngắn hoặc bạn không hài lòng với chiều dài dương vật của mình, Megadom có thể giúp bạn. Bác sĩ Đức là một trong những bác sĩ chuyên khoa Tiết niệu - Nam học hàng đầu tại Việt Nam và có thể giúp bạn trong hành trình lấy lại sự tự tin vào cơ thể của mình.</p>
          <div class="block-contact set-font-size" data-font-size="22"><a href="{{ route('lien_he') }}" style="color: #fff;">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</a></div>
        </div>
      </div>
    </div>
    <div class="tag container col-xl-6 col-lg-6 col-sm-12 col-12">
      <a href="#1"><div class="tag-block block-1"><span class="set-font-size" data-font-size="18">Đây Là Phẫu Thuật Gì? </span></div></a>
      <a href="#2"><div class="tag-block block-2"><span class="set-font-size" data-font-size="18">Các Phương Pháp Kéo Dài Dương Vật</span></div></a>
      <a href="#4"><div class="tag-block block-9"><span class="set-font-size" data-font-size="18">Tính Khả Thi Và Những Biến Chứng</span></div></a>
      <a href="#11"><div class="tag-block block-4"><span class="set-font-size" data-font-size="18">Ảnh Trước Và Sau Phẫu Thuật</span></div></a>
      <a href="#5"><div class="tag-block block-6"><span class="set-font-size" data-font-size="18">Hiệu Quả Của Phương Pháp</span></div></a>
      <a href="#6"><div class="tag-block block-7"><span class="set-font-size" data-font-size="18">Quy Trình Phẫu Thuật</span></div></a>
      <a href="#7"><div class="tag-block block-5"><span class="set-font-size" data-font-size="18">Trải Nghiệm Của Khách Hàng</span></div></a>
      <a href="#8"><div class="tag-block block-8"><span class="set-font-size" data-font-size="18">Lưu Ý</span></div></a>
      <a href="#9"><div class="tag-block block-10"><span class="set-font-size" data-font-size="18">Ai Nên Thực Hiện Phẫu Thuật</span></div></a>
      <a href="#10"><div class="tag-block block-11"><span class="set-font-size" data-font-size="18">Câu Hỏi Thường Gặp</span></div></a>
    </div>
    <div class="banner banner1">
        <div>
          <p class="text-small set-font-size set-line-height" data-font-size="18">Có nhiều yếu tố ảnh hưởng đến chất lượng đời sống tình dục của nam giới. Nếu bạn cho rằng dương vật của mình quá ngắn hoặc bạn không hài lòng với chiều dài dương vật của mình, Megadom có thể giúp bạn. Bác sĩ Đức là một trong những bác sĩ chuyên khoa Tiết niệu - Nam học hàng đầu tại Việt Nam và có thể giúp bạn trong hành trình lấy lại sự tự tin vào cơ thể của mình.</p>
          <div class="block-contact"><a href="{{ route('lien_he') }}" style="color: #fff;">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</a></div>
        </div>
    </div>
    <div class="concept">
      <div class="concept-top">
        <div class="concept-top-contnet col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right padding-0" data-width-block="690" data-margin-right="136">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="1">PHẪU THUẬT KÉO DÀI DƯƠNG VẬT LÀ GÌ?</p>
          <hr>
          <p class="text-medium concept-text-medium-1 set-font-size" data-font-size="18">Phẫu thuật kéo dài dương vật là một phẫu thuật điều trị ngoại trú nhằm mục đích tăng chiều dài của dương vật. Phẫu thuật kéo dài dương vật bằng cắt dây chằng treo không phải là việc kéo giãn dương vật mà là đem phần ẩn của dương vật - vốn bị chôn dưới da, ra bên ngoài bằng kỹ thuật cắt dây treo. Kết hợp với phương pháp loại bỏ lớp mỡ trên xương mu và loại bỏ lớp xơ quanh thân dương vật, chiều dài dương vật có thể tăng tối đa. Thời gian phẫu thuật kéo dài 60-90 phút, bệnh nhân có thể về trong ngày.</p>
        </div>
        <iframe id="iframe-3" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-top" width="100%" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/y753p6Invro"></iframe>
      </div>
      <div class="concept-bottom" id="2">
        <div class="concept-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45">CÁC PHƯƠNG PHÁP KÉO DÀI DƯƠNG VẬT</p>
          <hr>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12">
            <img id="concept-img-1" style="width:100%" src="/public/frontend/images/home-penile-3x.png">
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12">
            <div class="text text-small-1">
              <p class="text-title set-font-size" data-font-size="28" class="text-title">CẮT BÁN PHẦN DÂY CHẰNG TREO</p>
              <p class="text-medium concept-text-medium-1 set-font-size" data-font-size="18">Dây chằng treo dương vật là dây chằng bám vào thân dương vật, giúp cho dương vật khi cương lên thì nó nằm ở góc 3h (hay thẳng đứng). Nếu dây chằng này có vấn đề thì sẽ dẫn đến một số hậu quả: </p>
              <p class="text-medium concept-text-medium-1 set-font-size" data-font-size="18">- Nếu dây chằng treo dương vật bám sâu về phía quy đầu của dương vật thì sẽ làm cho chiều dài dương vật ngắn lại. Giữa xương mu và dương vật tạo thành một cái gờ rất cao.</p>
              <p class="text-medium concept-text-medium-1 set-font-size" data-font-size="18">- Nếu dây chằng này bám không đúng chính giữa của thân dương vật thì làm dương vật lệch sang một bên trái hoặc phải. Điều này làm cho dương vật lệch gây mất thẩm mỹ, gây khó khăn trong quan hệ tình dục.</p>
              <p class="text-medium concept-text-medium-1 set-font-size" data-font-size="18">- Dây chằng này thực chất không phải là một “sợi dây” hay sợi gân, mà nó là một tấm phên hình tam giác. Việc kéo dài dương vật bằng cắt dây chằng treo dương vật không phải là cắt đứt hoàn toàn dây chằng này mà chỉ cắt một phần dây chằng.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12">
            <p class="text-title set-font-size" data-font-size="28" class="text-title">LỚP MỠ TRÊN XƯƠNG MU</p>
            <ul class="text-small set-font-size" data-font-size="18">
              <li>Lớp mỡ trên xương mu càng dày sẽ càng làm chiều dài dương vật ngắn lại, trong khi chiều dài dương vật không thay đổi.</li>
              <li>Thông thường lớp mỡ này sẽ làm dương vật ngắn đi từ 1-2cm, tuỳ thuộc vào độ dày mỏng của lớp mỡ này.</li>
              <li>Việc loại bỏ lớp mỡ này sẽ làm dương vật dài ra khoảng 1cm.</li>
            </ul>
            <p class="text-title set-font-size" data-font-size="28" class="text-title">LOẠI BỎ LỚP XƠ QUANH THÂN DƯƠNG VẬT</p>
            <ul class="text-small set-font-size" data-font-size="18">
              <li>Bao quanh thân dương vật được cấu tạo bởi lớp xơ. Khi lớp xơ quá nhiều thì sẽ gây co kéo kích thước và hình dạng dương vật.</li>
              <li>Nếu mảng xơ quá dày sẽ tạo thành bệnh lý cong dương vật.</li>
              <li>Loại bỏ lớp xơ này sẽ giúp sự giãn nở của mô cương và khả năng cải thiện chiều dài là tốt nhất.</li>
            </ul>
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-top">
            <img id="concept-img-1" style="width:100%" src="/public/frontend/images/home-penile4.png">
          </div>
        </div>
      </div>
    </div>
    <div class="booking booking-1">
      <p class="text-semibold col-xl-9 col-lg-9 col-sm-9 col-12 set-font-size" data-font-size="28">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng! </p>
      <button data-link="{{ route('lien_he') }}" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25">
        <span class="set-font-size" data-font-size="22">ĐẶT LỊCH KHÁM</span>
      </button>
    </div>
    <div class="result set-width-block set-margin-left set-margin-right" data-width-block="1522" data-margin-right="199" data-margin-left="199"">
      <div class="top">
        <div class="result-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="11">KẾT QUẢ TRƯỚC VÀ SAU PHẪU THUẬT</p>
          <hr>
        </div>
        <div class="block-text-medium block-text-medium-1 set-font-size set-width-block" data-width-block="690" data-font-size="18">Xem <a href="https://drmegadom.com/hinh-anh-video-cam-nhan-chi-tiet">thư viện ảnh trước và sau khi phẫu thuật</a> tăng kích cỡ dương vật của chúng tôi để tìm hiểu xem những kết quả bạn có thể đạt được nếu phẫu thuật.</div>
        <div class="result-left col-xl-6 col-lg-6 col-sm-12 col-12" set-width-block set-margin-right" data-width-block="690" data-margin-right="142">
          <!-- <div class="text-medium text-medium-1 set-font-size set-width-block" data-width-block="690" data-font-size="18">Xem <a>thư viện ảnh trước và sau khi phẫu thuật</a> tăng kích cỡ dương vật của chúng tôi để tìm hiểu xem những kết quả bạn có thể đạt được nếu phẫu thuật.</div> -->
          <!-- <img id="image-1" class="set-height-block" data-height-block="406"> -->
          <table class="set-height-block set-width-block" data-height-block="406" data-width-block="690">
            <tr style="background-color: #0429B7; color: white">
              <th>Bệnh nhân</th>
              <th>Tuổi</th>
              <th>Trước <span style="display: block;">(Chu vi x Chiều dài)</th>
              <th>Sau <span style="display: block;">(Chu vi x Chiều dài)</span></th>
            </tr>
            <tr>
              <td>Bệnh nhân #1</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Bệnh nhân #2</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Bệnh nhân #3</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>Bệnh nhân #4</td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table><br>
          <button data-link="{{ route('picture_video') }}" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25" style="margin-top: 50px">
            <span class="set-font-size" data-font-size="22">THƯ VIỆN HÌNH ẢNH</span>
          </button>
        </div>
        <div class="image-2 col-xl-6 col-lg-6 col-sm-12 col-12 set-margin-top" data-margin-top="180px">
          <div class="backround set-height-block" data-height-block="480">
            <div class="text">
              <p class="text-bold set-font-size" data-font-size="28">HÌNH ẢNH CHỨA YẾU TỐ NHẠY CẢM</p>
              <p class="text-medium set-font-size" data-font-size="24">TÔI ĐÃ TRÊN 18 TUỔI</p>
              <button href="#" class="button-QA set-padding-button" data-padding-left="31" data-padding-top="25">
                <span class="set-font-size" data-font-size="18">XÁC NHẬN</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="bottom-block-2">
          <div class="concept-top-contnet col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right padding-0" data-width-block="690" data-margin-right="136">
            <div class="effective-title">
              <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="5">HIỆU QUẢ CỦA PHƯƠNG PHÁP</p>
              <hr>
            </div>
            <iframe id="iframe-2" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-show" width="100%" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/O91o8VlO_fs"></iframe>
            <div class="text-medium text-medium-4 set-font-size" data-font-size="18">
              <p class="text-medium text-1">Phẫu thuật kéo dài dương vật bằng cắt dây chằng treo dương vật kết hợp loại bỏ lớp xương mu và loại bỏ lớp xơ quanh thân dương vật sẽ làm dương vật dài ra từ 1-2cm. Sự gia tăng chiều dài trên dương vật sẽ phụ thuộc vào 3 yếu tố: các cấu trúc giải phẫu; thân dương vật và vị trí của dây chằng treo.</p>
              <p class="text-medium text-2">Nếu sau phẫu thuật các bệnh nhân tăng cân lên 3-5kg thì lớp mỡ trên xương mu này sẽ lại phát triển và có thể làm chiều dài dương vật ngắn đi.</p>
            </div>
          </div>
          <iframe id="iframe-2" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-hide" width="100%" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/O91o8VlO_fs"></iframe>
        </div>
      </div>
    </div>
    <div class="backround-before-surgery">
      <div class="before-surgery container">
        <p class="text-bold-1 set-font-size" data-font-size="48" id="6">Trước phẫu thuật</p>
        <div class="step step-1">
          <p class="text-bold set-font-size" data-font-size="18">Bước 1: Gửi câu hỏi và đăng ký tư vấn phẫu thuật kéo dài dương vật</p>
          <p class="text-medium set-font-size" data-font-size="18">Đầu tiên, chúng tôi yêu cầu bạn gửi câu hỏi về phẫu thuật kéo dài dương vật - bạn sẽ được chỉ định đích thân chuyên gia tư vấn hỗ trợ giải đáp các thắc mắc và cung cấp thông tin đầy đủ về quy trình phẫu thuật.</p>
        </div>
        <div class="step step-2">
          <p class="text-bold set-font-size" data-font-size="18">Bước 2: Xác định bạn có đủ điều kiện để thực hiện phẫu thuật</p>
          <p class="text-medium set-font-size" data-font-size="18">Trong giai đoạn trước phẫu thuật, đội ngũ y tế của chúng tôi sẽ xác định xem bạn có đủ điều kiện để thực hiện phẫu thuật hay không.</p>
        </div>
        <div class="step step-3">
          <p class="text-bold set-font-size" data-font-size="18">Bước 3: Tư vấn trực tiếp trước phẫu thuật</p>
          <p class="text-medium set-font-size" data-font-size="18">Trong quá trình tư vấn trực tiếp trước phẫu thuật, bác sĩ của Megadom chia sẻ chi tiết về quy trình, các biến chứng tiềm ẩn, rủi ro có thể gặp phải cũng như tất cả các hướng dẫn trước và sau phẫu thuật để quá trình diễn ra thuận lợi nhất.</p>
        </div>
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold-2 set-font-size" data-font-size="24">Trong phẫu thuật</p>
          <div class="text-medium text-3">
            <p class="left-step step-1 set-font-size" data-font-size="18"><b>Bước 1:</b> Khám và tư vấn bệnh nhân trước phẫu thuật</p>
            <p class="left-step step-2 set-font-size" data-font-size="18"><b>Bước 2:</b> Bệnh nhân sẽ được lấy máu xét nghiệm, khi có kết quả phẫu thuật sẽ lên phòng phẫu thuật.</p>
            <p class="left-step step-3 set-font-size" data-font-size="18"><b>Bước 3:</b> Người bệnh sẽ được tiến hành gây tê gốc dương vật.</p>
            <p class="left-step step-4 set-font-size" data-font-size="18"><b>Bước 4:</b> Rạch da hình vành khăn cách viền quy đầu khoảng 1,5cm.</p>
            <p class="left-step step-5 set-font-size" data-font-size="18"><b>Bước 5:</b> Bộc lộ toàn bộ thân dương vật đến sát cân trắng của vật hang. Tiến hành loại bỏ toàn bộ xơ quanh thân dương vật.</p>
            <p class="left-step step-6 set-font-size" data-font-size="18"><b>Bước 6:</b> Bộc lộ phần gốc dương vật, tiến hành cắt bán phần dây chằng treo dương vật.</p>
            <p class="left-step step-7 set-font-size" data-font-size="18"><b>Bước 7:</b> Khâu phục hồi da thân dương vật theo các lớp giải phẫu.</p>
          </div>
        </div>
        <!--<div class="vertical"></div>-->
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold-3 set-font-size" data-font-size="24">Sau phẫu thuật</p>
          <p class="text-medium text-1 set-font-size" data-font-size="18">Phẫu thuật sử dụng phương pháp gây tê tại chỗ nên bệnh nhân có thể xuất viện luôn trong ngày.</p>
          <p class="text-medium text-2 set-font-size" data-font-size="18">Sau phẫu thuật, bác sĩ sẽ theo dõi bệnh nhân trong vòng 2-3 tiếng để đánh giá về vấn đề gây tê. Sau đó người bệnh sẽ về nhà để theo dõi.</p>
        </div>
      </div>
    </div>
    <div class="result">
      <div class="evaluate-title container">
        <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="7">ĐÁNH GIÁ VÀ PHẢN HỒI CỦA BỆNH NHÂN SAU PHẪU THUẬT</p>
        <hr>
        <p class="text-medium text-medium-2 set-font-size" data-font-size="18">Megadom đã giúp hàng trăm bệnh nhân đạt được kích thước dương vật mà họ mong muốn.</p>
      </div>
      <div class="bottom-block-1">
        <iframe id="iframe-1" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom set-margin-right" width="100%" data-margin-right="138" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/Tl_eFOXUSzU"></iframe>
        <div class="text-medium text-medium-3 col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block padding-0 set-font-size" data-width-block="690" data-font-size="18"><span>Bệnh nhân 1:</span> Điều đau đớn nhất khi đến tuổi trưởng thành của anh là dương vật của mình không phát triển bình thường giống với bạn bè đồng trang lứa. Trong khi các bạn anh đến tuổi vị thành niên có chiều dài 10- 13cm, dương vật của anh khi cương cứng lên cũng chỉ dài khoảng 6- 7cm. Con số 10cm trở nên xa xỉ hơn khi anh phải trải qua 2 cuộc phẫu thuật tăng kích thước nhưng chiều dài gần như không được cải thiện. Dương vật quá ngắn khiến anh luôn mặc cảm trước những bạn gái khác bởi vì khi không thể mang lại khoái cảm và sự hoà hợp trong chuyện ‘yêu’ thì những mối tình dần cũng sẽ đi vào dĩ vãng.</div>
        <div class="text-medium text-medium-3 col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-font-size" data-width-block="690" data-font-size="18" style="margin-top: 30px;"><a href="https://www.youtube.com/watch?v=fc1uVUtDCgI&list=PL8dlk_Wk12E2lO6K0shNkgldQD9dcAz3m" target="_blank">Xem thêm feedback của khách hàng</a></div>
      </div>
    </div>
    <div class="note container">
      <div class="note-title">
        <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="8">NHỮNG LƯU Ý HẬU PHẪU THUẬT<br>KÉO DÀI DƯƠNG VẬT</p>
        <hr>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-1-3.png">
      <div class="text col-xl-6 col-lg-6 col-sm-12 col-12">
        <p class="text-medium text-1 set-font-size" data-font-size="18">Bệnh nhân có thể sinh hoạt bình thường.</p>
        <p class="text-medium text-2 set-font-size" data-font-size="18">Trong thời gian hồi phục, bệnh nhân cần hạn chế quan hệ tình dục ít nhất 6 tuần.</p>
        <p class="text-medium text-3 set-font-size" data-font-size="18">Sau khi phẫu thuật, bệnh nhân nên mặc quần áo và quần lót rộng rãi trong vài tuần đầu tiên.</p>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-hide" id="image-3" src="/public/frontend/images/2-1-3.png">
    </div>
    <div class="booking booking-1">
      <p class="text-semibold col-xl-9 col-lg-9 col-sm-9 col-12 set-font-size" data-font-size="28">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng! </p>
      <button data-link="{{ route('lien_he') }}" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25">
        <span class="set-font-size" data-font-size="22">ĐẶT LỊCH KHÁM</span>
      </button>
    </div>
    <div class="backround-feasibility">
      <div class="feasibility container">
        <div class="feasibility-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="4">TÍNH KHẢ THI VÀ NHỮNG BIẾN CHỨNG</p>
          <hr>
        </div>
        <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-3-3.png">
        <!--<div class="vertical"></div>-->
        <div class="text col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-medium text-2 set-font-size" data-font-size="18"><b>Thẩm Mỹ:</b> Phẫu thuật kéo dài dương vật đơn thuần sẽ có sẹo phía trên gốc dương vật, ngay trên xương mu. Đó là vùng có nhiều lông mu nên sẽ không nhìn thấy sẹo.</p>
          <p class="text-medium text-3 set-font-size" data-font-size="18"><b>Hậu Phẫu Thuật:</b> Không ảnh hưởng gì đến độ cương cứng của dương vật. Không ảnh hưởng gì đến sinh sản vì phẫu thuật làm dài dương vật không tác động đến tinh hoàn hoặc ống dẫn tinh.</p>
          <p class="text-medium text-4 set-font-size" data-font-size="18"><b>Tác Dụng Về Lâu Dài:</b> Phương pháp loại bỏ lớp mỡ trên xương mu có nhược điểm là nếu sau phẫu thuật bệnh nhân béo lên 3-5kg, thì lớp mỡ trên xương mu này lại phát triển. Và lại làm chiều dài dương vật ngắn đi.</p>
        </div>
        <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-hide" id="image-3" src="/public/frontend/images/2-3-3.png">
      </div>
    </div>
    <div class="when container">
      <div class="when-title">
        <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="9">KHI NÀO BẠN NÊN THỰC HIỆN PHẪU THUẬT KÉO DÀI DƯƠNG VẬT</p>
        <hr>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-1-5.png">
      <p class="text-medium note set-font-size" data-font-size="18">Những nam giới có nhu cầu cải thiện chiều dài dương vật hoặc có bệnh lý khiến chiều dài dương vật dưới chuẩn thì có thể phẫu thuật kéo dài dương vật tại Megadom:</p>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-hide" id="image-3" src="/public/frontend/images/2-1-5.png">
      <!--<div class="vertical"></div>-->
      <ul class="text-small col-xl-6 col-lg-6 col-sm-12 col-12">
        <li class="set-font-size" data-font-size="18">Người có chiều dài dương vật quá ngắn so với bình thường. <a href="https://onlinelibrary.wiley.com/doi/epdf/10.1111/andr.12978" target="_blank">Theo dữ liệu thống kê từ 14594 nam giới Việt Nam</a> công bố vào năm 2021, chiều dài dương vật trung bình của nam giới Việt Nam ở trạng thái thường và khi kéo dài lần lượt là 9.03cm và 14.67cm.</li>
        <li class="set-font-size" data-font-size="18">Người có chiều dài dương vật không tương xứng với cơ thể (cơ thể quá to nhưng dương vật lại quá nhỏ). Nhiều người béo phì và béo bụng còn khiến dương vật ngắn và dương vật bị vùi vào trong.</li>
        <li class="set-font-size" data-font-size="18">Các trường hợp bị chấn thương, ảnh hưởng đến hình dạng và chiều dài của dương vật.</li>
        <li class="set-font-size" data-font-size="18">Người có chiều dài dương vật ở mức bình thường nhưng vẫn có cảm giác thiếu tự tin trước đối phương.</li>
      </ul>
      <button data-link="{{ route('lien_he') }}" style="margin-left: auto;margin-right: auto;display: block;" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25">
        <span class="set-font-size" data-font-size="22">LIÊN HỆ CHUYÊN GIA</span>
      </button>
    </div>
    <div class="backround-qa">
      <div class="qa container set-width-block set-margin-left set-margin-right" data-width-block="1270" data-margin-right="325" data-margin-left="325">
        <div class="qa-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="10">CÂU HỎI THƯỜNG GẶP</p>
          <hr>
        </div>
        <div class="qa-content">
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật kéo dài dương vật có ảnh hưởng gì đến khả năng sinh con hay không?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Phẫu thuật tăng kích thước dương vật là tác động vào phía dưới da của thân dương vật, không liên quan gì đến tinh hoàn cả, nên không ảnh hưởng gì đến chức năng của tinh hoàn. Vì vậy nó không ảnh hưởng đến khả năng sinh sản của người bệnh.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật kéo dài dương vật có ảnh hưởng gì đến độ cương cứng của dương vật không?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Phẫu thuật tăng kích thước dương vật là việc đặt tấm độn sinh học hoặc miếng độn silicon vào phía dưới da của thân dương vật. Không liên quan gì đến việc tưới máu vào thân dương vật nên không ảnh hưởng đến độ cương cứng của dương vật.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Sau khi phẫu thuật kéo dài dương vật thì bao lâu có thể quan hệ tình dục?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Đối với phẫu thuật làm dài dương vật thì sau 2 tuần bệnh nhân có thể quan hệ tình dục bình thường.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật kéo dài dương vật có để lại sẹo không?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Phẫu thuật kéo dài dương vật đơn thuần sẽ có sẹo phía trên gốc dương vật, ngay trên xương mu. Đó là vùng có nhiều lông mu nên sẽ không nhìn thấy sẹo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('script')
  <script>
    $(".link-url").click(function() {
      window.location.href = $(this).data('link');
    });

    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + 20 + "px";
        } 
      });
    }

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
    ////////////////////
    $("div.tag.container a").on("click", function(){
        if($(document).width() > 769){
            $("body, html").animate({scrollTop: $($(this).attr('href')).offset().top-85},300);
        }else{
            $("body, html").animate({scrollTop: $($(this).attr('href')).offset().top},300);
        }
    });
  </script>
@endsection