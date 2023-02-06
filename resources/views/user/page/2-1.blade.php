@extends('user.layout.main')

@section('title')
<title>Làm to Megaderm</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="public/user/page/2-1.css">
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
  <div class="screen2-1">
    <div class="banner">
      <div class="container">
        <div class="text-banner col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold set-font-size set-line-height" data-font-size="64" data-line-height="75">Phẫu thuật tăng kích cỡ dương vật</p>
          <div class="vertical"></div>
          <p class="text-medium set-font-size" data-font-size="28">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng.</p>
          <p class="text-small set-font-size" data-font-size="18">Nhiều người đàn ông rất không hài lòng với kích thước dương vật của mình - đôi khi cảm thấy xấu hổ khi để lộ mình khỏa thân hoặc cảm thấy ngại ngùng khi tìm kiếm bạn tình hoặc bước vào một mối quan hệ tình cảm. Cho dù bạn mong muốn có một dương vật dài hơn, to hơn hay tổng thể lớn hơn, thì việc tăng kích thước dương vật đều có thể thực hiện được tại Megadom.</p>
          <div class="block-contact set-font-size" data-font-size="22"><a href="{{ route('lien_he') }}" style="color: #FFF">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</a></div>
        </div>
      </div>
    </div>
    <div class="tag container col-xl-6 col-lg-6 col-sm-12 col-12">
      <a href="#1"><div class="tag-block block-1"><span class="set-font-size" data-font-size="18">Đây Là Phẫu Thuật Gì? </span></div></a>
      <a href="#2"><div class="tag-block block-2"><span class="set-font-size" data-font-size="18">Tấm Độn Sinh Học Megaderm</span></div></a>
      <a href="#3"><div class="tag-block block-3"><span class="set-font-size" data-font-size="18">Ưu Điểm Của Phương Pháp</span></div></a>
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
      <div class="container">
        <div class="text-banner col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-small">Nhiều người đàn ông rất không hài lòng với kích thước dương vật của mình - đôi khi cảm thấy xấu hổ khi để lộ mình khỏa thân hoặc cảm thấy ngại ngùng khi tìm kiếm bạn tình hoặc bước vào một mối quan hệ tình cảm. Cho dù bạn mong muốn có một dương vật dài hơn, to hơn hay tổng thể lớn hơn, thì việc tăng kích thước dương vật đều có thể thực hiện được tại Megadom.</p>
          <div class="block-contact"><a href="{{ route('lien_he') }}" style="color: #FFF">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</a></div>
        </div>
      </div>
    </div>
    <div class="concept">
      <div class="concept-top">
        <div class="concept-top-contnet col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right" data-width-block="690" data-margin-right="136">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="1">PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG TẤM ĐỘN MEGADERM LÀ GÌ?</p>
          <hr>
          <p class="text-medium concept-text-medium-1 set-font-size" data-font-size="18">Phẫu thuật tăng kích thước dương vật là một phẫu thuật điều trị ngoại trú nhằm mục đích tăng chiều dài hoặc chu vi của dương vật. Tấm độn sinh học Megaderm được chứng nhận theo tiêu chuẩn FDA (Mỹ), KFDA (Hàn Quốc) và đã được Bộ Y Tế Việt Nam cấp phép sử dụng. Tháng 2/2020, ThS.BS Nguyễn Văn Đức - Dr. Megadom đã quyết định quay trở lại Hàn Quốc để đưa kỹ thuật thẩm mỹ dương vật tiên tiến nhất về Việt Nam. Bác sĩ Đức là người đầu tiên đưa tấm độn sinh học Megaderm trong phẫu thuật dương vật và đã thay đổi cuộc sống của hàng ngàn nam giới. </p>
        </div>
        <iframe id="iframe-3" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-top" width="100%" data-width-block="690" data-height-block="388" src="https://youtube.com/embed/_XYFO1385Pw"></iframe>
      </div>
      <div class="concept-bottom">
        <div class="concept-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="2">TẤM ĐỘN SINH HỌC MEGADERM</p>
          <hr>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12 set-margin-right set-width-block" data-width-block="690" data-margin-right="138">
            <img id="concept-img-1" style="width:100%" src="/public/frontend/images/2-1-1.png">
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block" data-width-block="690">
            <p class="text-medium set-font-size" data-font-size="18">Tấm độn sinh học là một chất liệu được chế tạo ra từ da của người hoặc của động vật. Sau khi được loại bỏ toàn bộ các tế bào, các loại kháng nguyên, được tập hợp lại để tạo nên như một tấm lưới. </p>
            <p class="text-title title-1 set-font-size" data-font-size="28">ƯU ĐIỂM CỦA TẤM ĐỘN SINH HỌC MEGADERM</p>
            <ul class="text-small text-small-1 set-font-size" data-font-size="18">
              <li>Được cấu tạo từ mô cơ thể sống, không có ảnh hưởng gì đến cơ thể,nguy cơ thải ghép thấp, cực hiếm, tỉ lệ là 1/10.000. Tích hợp một cách tự nhiên vào cơ thể của người bệnh. </li>
              <li>Có khả năng tích hợp tự nhiên, vĩnh viễn vào cơ thể người, trở thành một tổ chức mô sống dưới da giống như một bộ phần bình thường khác của cơ thể.</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right" data-width-block="690"  data-margin-right="138">
            <p class="text-title set-font-size" data-font-size="28">ỨNG DỤNG CỦA TẤM ĐỘN SINH HỌC MEGADERM</p>
            <ul class="text-small set-font-size" data-font-size="18">
              <li>Trong chuyên ngành phẫu thuật tạo hình: Nó có tác dụng trong những phẫu thuật phải ghép da, tạo mô nâng đỡ để cho da phát triển, phủ kín bề mặt tại vị trí thiếu da như: đầu mũi, da tại nơi bị bỏng hoặc tai nạn.</li>
              <li>Trong Nam khoa: Đặt phía dưới da của dương vật để làm tăng kích thước của dương vật, làm giảm độ nhạy cảm của da dương vật và từ đó làm tăng thời gian quan hệ lên từ 30-40%.</li>
              <li>Trong chuyên ngành Tai Mũi Họng: được sử dụng rất nhiều trong chuyên ngành này, nó được phủ lên bề mặt tổn thương để tăng quá trình tái tạo mô.</li>
            </ul>
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block mobile-to-top" data-width-block="690">
            <img id="concept-img-1" style="width:100%" src="/public/frontend/images/2-1-2.png">
          </div>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12 set-margin-right set-width-block" data-width-block="690" data-margin-right="138">
            <!-- <img id="concept-img-3" style="width:100%" src="/public/frontend/images/home-penile3.png"> -->
            <iframe id="iframe-3" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-top" width="100%" data-width-block="690" data-height-block="388" src="https://youtube.com/embed/G9vOHHS0qUE" style="padding:0;border: none;"></iframe>
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block" data-width-block="690">
            <p class="text-medium set-font-size" data-font-size="28" id="3" style="text-align: inherit;">ƯU ĐIỂM CỦA TẤM MEGADERM TRONG PHẪU THUẬT LÀM TO DƯƠNG VẬT</p>
            <ul class="text-small text-small-1 set-font-size" data-font-size="18">
              <li>Tấm độn sinh học được tạo ra từ mô của người nên không có nguy cơ thải ghép ra khỏi cơ thể.</li>
              <li>Có khả năng tích hợp vĩnh viễn với cơ thể người bệnh.</li>
              <li>Sờ, nhìn tự nhiên như da thật, không hề nhận ra đã can thiệp phẫu thuật</li>
              <li>Được sản xuất trong môi trường vô trùng tuyệt đối nên không có nguy cơ nhiễm trùng cho người bệnh</li>
              <li>Nhiều loại kích cỡ khác nhau, về cả chiều dài và độ dày của tấm độn nên có nhiều sự lựa chọn cho người bệnh</li>
              <li>Được chứng nhận theo tiêu chuẩn FDA (của Mỹ), KFDA (của Hàn) và đã được Bộ Y Tế Việt Nam cấp phép sử dụng</li>
              <li>Ngoài tăng kích thước, tấm động sinh học còn giúp hỗ trợ cải thiện tình trạng xuất tinh sớm, kéo dài thời gian quan hệ.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="booking booking-2">
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
        <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-1-4.png">
        <!-- <div class="vertical"></div> -->
        <div class="text col-xl-6 col-lg-6 col-sm-12 col-12 line-x">
          <p class="text-medium text-1 set-font-size" data-font-size="18"><b>Tỷ Lệ Đào Thải:</b> Tấm độn sinh học Megaderm được cấu tạo từ mô cơ thể, sẽ rất ít tạo ra những ảnh hưởng xấu đến cơ thể của người cấy ghép. Tình trạng đào thải rất hiếm khi xảy ra.</p>
          <p class="text-medium text-2 set-font-size" data-font-size="18"><b>Thẩm Mỹ:</b> Tấm độn sinh học Megaderm sẽ được phẫu thuật để dàn đều theo chiều dài dương vật và không gây gồ ghề sau một thời gian sử dụng. Sờ vào không phát hiện ra được.</p>
          <p class="text-medium text-3 set-font-size" data-font-size="18"><b>Hậu Phẫu Thuật:</b> Một thời gian sau khi cấy ghép, tấm độn sẽ tự “dung nhập” vào với mô tế bào của cơ thể bệnh nhân và tồn tại vĩnh viễn.</p>
          <p class="text-medium text-4 set-font-size" data-font-size="18"><b>Tác Dụng Về Lâu Dài:</b> Sau khi phẫu thuật làm to bằng tấm đệm, bệnh nhân sẽ giảm cảm giác tiếp xúc da, điều này không phải là nhược điểm mà là lợi thế giúp các nam giới kéo dài thời gian quan hệ. Đồng thời tấm độn sinh học Megaderm cũng là một phương cuối cùng điều trị rối loạn xuất tinh sớm ở đàn ông.</p>
        </div>
        <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-hide" id="image-3" src="/public/frontend/images/2-1-4.png">
      </div>
    </div>
    <div class="result set-width-block set-margin-left set-margin-right" data-width-block="1522" data-margin-right="199" data-margin-left="199">
      <div class="top">
        <div class="result-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="11">KẾT QUẢ TRƯỚC VÀ SAU PHẪU THUẬT</p>
          <hr>
        </div>
        <div class="block-text-medium block-text-medium-1 set-font-size set-width-block" data-width-block="690" data-font-size="18">Xem <a href="https://drmegadom.com/hinh-anh-video-cam-nhan-chi-tiet">thư viện ảnh trước và sau khi phẫu thuật</a> tăng kích cỡ dương vật của chúng tôi để tìm hiểu xem những kết quả bạn có thể đạt được nếu phẫu thuật.</div>
        <div class="result-left col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right" data-width-block="690" data-margin-right="142">
          <!-- <img id="image-1" class="set-height-block" data-height-block="406"> -->
          <table class="set-height-block set-width-block" data-height-block="406" data-width-block="690">
            <tr style="background-color: #0429B7; color: white">
              <th>Bệnh nhân</th>
              <th>Tuổi</th>
              <th>Trước <span style="display: block;">(Chu vi x Chiều dài)</th>
              <th>Sau <span style="display: block;">(Chu vi x Chiều dài)</span></th>
            </tr>
            <tr>
              <td>Quang</td>
              <td>32T</td>
              <td>Trước 7cm X 12cm</td>
              <td>Sau 9,5cm X 13cm</td>
            </tr>
            <tr>
              <td>Vân</td>
              <td>45T</td>
              <td>Trước 6cm X 7cm</td>
              <td>Sau 9cm X 9cm</td>
            </tr>
            <tr>
              <td>Đức</td>
              <td>28T</td>
              <td>Trước 7,3cm X 9cm</td>
              <td>Sau 10,5cm X 10cm</td>
            </tr>
            <tr>
              <td>Nam</td>
              <td>52T</td>
              <td>Trước 7,5cm X 9,4cm</td>
              <td>Sau 10,8cm X 12cm</td>
            </tr>
          </table>
          <button data-link="{{ route('picture_video') }}" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25" style="margin-top: 50px">
            <span class="set-font-size" data-font-size="22">THƯ VIỆN HÌNH ẢNH</span>
          </button>
        </div>
        <div class="image-2 col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block" data-width-block="690">
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
      <div class="bottom-block-2">
        <div class="left col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right" data-width-block="690" data-margin-right="138">
          <div class="effective-title">
            <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="5">HIỆU QUẢ TĂNG KÍCH THƯỚC CỦA TẤM ĐỘN SINH HỌC MEGADERM</p>
            <hr>
          </div>
          <iframe id="iframe-2" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-show" width="100%" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/O91o8VlO_fs"></iframe>
          <div class="text-medium text-medium-4 set-font-size" data-font-size="18">Tuỳ thuộc vào chiều dài và độ dày của Tấm độn sinh học mà chu vi dương vật sẽ tăng được nhiều hay ít. Có 2 loại kích cỡ của tấm độn sinh học này là 4×5cm và 5x6cm tuỳ thuộc vào chiều dài của dương vật. Mức độ cải thiện về chu vi dương vật sẽ phụ thuộc vào độ dày của tấm độn sinh học:
            <ul class="text-small">
              <li>Với độ dày 3-3,5mm thì chu vi của dương vật sẽ tăng lên 2-2,5cm.</li>
              <li>Với độ dày 3,5-4mm thì chu vi của dương vật sẽ tăng lên 3-4cm. </li>
              <li>Với độ dày 4-5mm thì chu vi dương vật sẽ tăng lên 4-5cm</li>
            </ul>
          </div>
        </div>
        <iframe id="iframe-2" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-hide" width="100%" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/O91o8VlO_fs"></iframe>
      </div>
    </div>
    <div class="backround-before-surgery">
      <div class="before-surgery container">
        <p class="text-bold-1 set-font-size" data-font-size="48" id="6">Trước phẫu thuật</p>
        <div class="step step-1">
          <p class="text-bold set-font-size" data-font-size="18">Bước 1: Gửi câu hỏi và đăng ký tư vấn phẫu thuật tăng kích thước dương vật</p>
          <p class="text-medium set-font-size" data-font-size="18">Đầu tiên, chúng tôi yêu cầu bạn gửi câu hỏi về phẫu thuật tăng kích thước dương vật bằng tấm độn Megaderm - bạn sẽ được chỉ định đích thân chuyên gia tư vấn hỗ trợ giải đáp các thắc mắc và cung cấp thông tin đầy đủ về quy trình phẫu thuật.</p>
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
          <p class="text-medium text-1 set-font-size" data-font-size="18">Quy trình tăng kích thước dương vật bằng tấm độn Megaderm là một phẫu thuật ngoại trú tương đối ngắn (40-60 phút), thường bệnh nhân có thể ra viện ngay trong ngày.</p>
          <p class="text-medium text-2 set-font-size" data-font-size="18">Trong quá trình thực hiện, bệnh nhân đầu tiên được cạo sạch lông mu và được sát khuẩn bằng Betadin. Dưới đây là quy trình phẫu thuật tăng kích cỡ dương vật bằng tấm độn sinh học tại Megadom:</p>
          <div class="text-medium text-3">
            <p class="left-step step-1 set-font-size" data-font-size="18"><b>Bước 1:</b> Bệnh nhân được gây tê tại gốc dương vật bằng 2 mũi tiêm gây tê.</p>
            <p class="left-step step-2 set-font-size" data-font-size="18"><b>Bước 2:</b> Rạch da hình vành khăn quanh thân dương vật phía dưới viền quy đầu 2cm.</p>
            <p class="left-step step-3 set-font-size" data-font-size="18"><b>Bước 3:</b> Tách rộng tổ chức dưới da thân dương vật xuống phía dưới gốc dương vật</p>
            <p class="left-step step-4 set-font-size" data-font-size="18"><b>Bước 4:</b> Cầm máu kỹ</p>
            <p class="left-step step-5 set-font-size" data-font-size="18"><b>Bước 5:</b> Lựa chọn kích thước tấm độn sinh học, đặt tấm độn sinh học lên phía trên dương vật.</p>
            <p class="left-step step-6 set-font-size" data-font-size="18"><b>Bước 6:</b> Khâu cố định tấm độn sinh học</p>
            <p class="left-step step-7 set-font-size" data-font-size="18"><b>Bước 7:</b> Khâu phục hồi tổ chức dưới da và lớp da thân dương vật</p>
          </div>
        </div>
        <!-- <div class="vertical"></div> -->
        <div class="right col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold-3 set-font-size" data-font-size="24">Sau phẫu thuật</p>
          <p class="text-medium text-1 set-font-size" data-font-size="18">Bệnh nhân nghỉ ngơi 1 tiếng sau phẫu thuật. Người bệnh có thể ra viện ngay sau đó.</p>
          <p class="text-medium text-2 set-font-size" data-font-size="18">Người bệnh chỉ đau duy nhất 2 mũi tiêm gây tê tại gốc dương vật, cảm giác đau giống như lấy máu ở tay. Rất đơn giản và nhẹ nhàng, không đau. Trong quá trình phẫu thuật người bệnh hoàn toàn tỉnh táo.</p>
          <p class="text-medium text-1 set-font-size" data-font-size="18">Sau phẫu thuật người bệnh đi đứng và sinh hoạt bình thường và có thể đi ô tô, máy bay, xe máy.</p>
          <p class="text-medium text-1 set-font-size" data-font-size="18">Người bệnh không cần nghỉ ngơi tại nhà sau phẫu thuật.</p>
        </div>
      </div>
    </div>
    <div class="result set-width-block set-margin-left set-margin-right" data-width-block="1522" data-margin-right="199" data-margin-left="199">
      <div class="bottom">
        <div class="evaluate-title container">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="7">ĐÁNH GIÁ VÀ PHẢN HỒI CỦA BỆNH NHÂN SAU PHẪU THUẬT</p>
          <hr>
          <p class="text-medium text-medium-2 set-font-size" data-font-size="18">Megadom đã giúp hàng trăm bệnh nhân đạt được kích thước dương vật mà họ mong muốn.</p>
        </div>
        <div class="bottom-block-1">
          <iframe id="iframe-1" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block set-margin-right video-custom" width="100%" data-width-block="690" data-height-block="388" data-margin-right="138" src="https://www.youtube.com/embed/Ggc0XpG43uA"></iframe>
          <div class="text-medium text-medium-3 col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-font-size" data-width-block="690" data-font-size="18"><span>Bệnh nhân 1:</span> Vốn là một người cầu toàn, anh luôn muốn hoàn thiện ngoại hình của bản thân, từ cân nặng, làn da, mái tóc đến cả kích thước dương vật. Từ năm 22 tuổi, anh đã luôn cảm thấy tự ti vì kích thước dương vật quá nhỏ, thậm chí gặp phải áp lực tâm lý nặng nề trước sự im lặng và coi thường của bạn bè. Sau khi biết đến phương pháp tăng kích thước dương vật bằng tấm độn sinh học, anh lại lo lắng việc sử dụng tấm độn sẽ ảnh hưởng đến hoạt động và chức năng của dương vật. Anh đã phải mất đến 6 năm để tìm hiểu về những phương pháp tăng kích thước phù hợp, tìm hiểu về bác sĩ Đức và cả những phản hồi từ những bệnh nhân đã phẫu thuật tại Megadom trước khi quyết định lựa chọn phẫu thuật.</div>
          <div class="text-medium text-medium-3 col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-font-size" data-width-block="690" data-font-size="18" style="margin-top: 30px;"><a href="https://www.youtube.com/watch?v=fc1uVUtDCgI&list=PL8dlk_Wk12E2lO6K0shNkgldQD9dcAz3m" target="_blank">Xem thêm feedback của khách hàng</a></div>
        </div>
      </div>
    </div>
    <div class="note container set-width-block set-margin-left set-margin-right" data-width-block="1522" data-margin-right="199" data-margin-left="199">
      <div class="note-title">
        <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="8">NHỮNG LƯU Ý HẬU PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG TẤM ĐỘN MEGADERM</p>
        <hr>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-1-3.png">
      <div class="text col-xl-6 col-lg-6 col-sm-12 col-12">
        <p class="text-medium text-1 set-font-size" data-font-size="18">Sau khi phẫu thuật, bệnh nhân có thể sinh hoạt bình thường.</p>
        <p class="text-medium text-2 set-font-size" data-font-size="18">Bệnh nhân sẽ tự thay băng tại nhà trong vòng 1 tuần.</p>
        <p class="text-medium text-3 set-font-size" data-font-size="18">Bệnh nhân nên mặc quần áo và quần lót rộng rãi trong vài tuần đầu tiên.</p>
        <p class="text-medium text-3 set-font-size" data-font-size="18">Lưu ý quan trọng hậu phẫu thuật là bệnh nhân cần kiêng cữ rượu bia và quan hệ trong vòng 2 tháng. Điều này giúp tránh việc giảm sức đề kháng, đồng thời cho tấm độn có thời gian tích hợp vào thân dương vật.</p>
        <p class="text-medium text-3 set-font-size" data-font-size="18">Sau 2 tháng người bệnh có thể quan hệ tình dục bình thường.</p>
        <p class="text-medium text-3 set-font-size" data-font-size="18">Tuyệt đối không đi bơi trong 2 tuần đầu sau phẫu thuật.</p>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-hide" id="image-3" src="/public/frontend/images/2-1-3.png">
    </div>
    <div class="booking booking-2">
      <p class="text-semibold col-xl-9 col-lg-9 col-sm-9 col-12 set-font-size" data-font-size="28">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng! </p>
      <button data-link="{{ route('lien_he') }}" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25">
        <span class="set-font-size" data-font-size="22">ĐẶT LỊCH KHÁM</span>
      </button>
    </div>
    <div class="when container">
      <div class="when-title">
        <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="9">KHI NÀO THÌ BẠN NÊN THỰC HIỆN PHẪU THUẬT<span> TĂNG KÍCH THƯỚC DƯƠNG VẬT</span></p>
        <hr>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-1-5.png">
      <p class="text-medium note set-font-size" data-font-size="18">Những nam giới có nhu cầu cải thiện kích thước dương vật hoặc có bệnh lý gây kích thước dương vật nhỏ dưới chuẩn thì có thể phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm:</p>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-hide" id="image-3" src="/public/frontend/images/2-1-5.png">
      <ul class="text-small col-xl-6 col-lg-6 col-sm-12 col-12">
        <li class="set-font-size" data-font-size="18">Người có kích thước dương vật quá nhỏ so với bình thường. <a href="https://onlinelibrary.wiley.com/doi/epdf/10.1111/andr.12978" target="_blank">Theo dữ liệu thống kê từ 14594 nam giới Việt Nam</a> công bố vào năm 2021, chu vi dương vật trung bình của nam giới Việt Nam là 8.39cm.</li>
        <li class="set-font-size" data-font-size="18">Người có kích thước dương vật không tương xứng với cơ thể (cơ thể quá to nhưng dương vật lại quá nhỏ). Nhiều người béo phì và béo bụng còn khiến dương vật ngắn và dương vật bị vùi vào trong.</li>
        <li class="set-font-size" data-font-size="18">Các trường hợp bị chấn thương, ảnh hưởng đến hình dạng và kích thước của dương vật.</li>
        <li class="set-font-size" data-font-size="18">Người có kích thước dương vật ở mức bình thường nhưng vẫn có cảm giác thiếu tự tin trước đối phương.</li>
        <li class="set-font-size" data-font-size="18">Người bị xuất tinh sớm nhưng không muốn sử dụng thuốc.</li>
        <li class="set-font-size" data-font-size="18">Vợ sau những lần đẻ thường dẫn đến khó đạt được khoái cảm trong lúc quan hệ.</li>
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
          <button class="collapsible set-font-size" data-font-size="18"><span>Phương pháp đặt miếng độn Megaderm/Silicon có biến chứng gì không?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Dù là một phẫu thuật nhỏ nhưng vẫn là 1 loại phẫu thuật y khoa, bắt buộc phải được thực hiện bởi bác sĩ có tay nghề và kinh nghiệm. Đã là phẫu thuật, sẽ không tránh được một số biến chứng có thể xảy ra như: Chảy máu vết mổ, nhiễm trùng vết mổ, sưng nề tại vết mổ... Những biến chứng này đều có thể hạn chế được tối đa nhờ vào kỹ thuật và kinh nghiệm của bác sĩ phẫu thuật. Trong trường hợp hãn hữu có xảy ra thì đều có những phương pháp khắc phục ngay sau đó.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon thì có ảnh hưởng gì đến khả năng sinh con hay không?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Phẫu thuật tăng kích thước dương vật là tác động vào phía dưới da của thân dương vật, không liên quan gì đến tinh hoàn và ống dẫn tinh cả, nên không ảnh hưởng gì đến chức năng của tinh hoàn. Vì vậy nó không ảnh hưởng đến khả năng sinh sản của người bệnh.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có ảnh hưởng gì đến độ cương cứng của dương vật không?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Phẫu thuật tăng kích thước dương vật là việc đặt tấm độn sinh học hoặc miếng độn silicon vào phía dưới da của thân dương vật. Không liên quan gì đến việc tưới máu vào thân dương vật nên không ảnh hưởng đến độ cương cứng của dương vật.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm có đau không?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Một số ít bệnh nhân sau khi phẫu thuật thì người bệnh gặp phải tình trạng đau nhẹ khi dương vật cương lên, đó là do da của dương vật chưa giãn ra nên khi cương sẽ hơi tức tức ở dương vật. Tình trạng này sẽ kết thúc sau 2-3 ngày.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Các phương pháp tăng kích thước dương vật khác thì sao (tiêm mỡ tự thân, tiêm Filler)?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Một số phương pháp làm to dương vật khác như tiêm mỡ tự thân, tiêm Filler khoảng 10 năm về trước được áp dụng rất nhiều. Nhưng đến nay thì những nhược điểm của phương pháp này được bộc lộ rất rõ. Sau khi mỡ tự thân hoặc Filler được tiêm vào thì chúng không ổn định, sẽ di chuyển dần dần xuống phía dưới của thân dương vật. Làm cho hình dạng dương vật bị biến dạng. Hoặc lớp mỡ này tiêu đi không đồng đều và co nhỏ lại tạo thành những cục trên thân dương vật. Hậu quả là dương vật chỗ to chỗ nhỏ. Thời gian tác dụng của tiêm mỡ và Filler chỉ có tác dụng 6-18tháng, và thường thì người bệnh sẽ phải làm 3-5 lần tiêm nhắc lại.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Liệu có phương pháp tăng kích thước dương vật không phẫu thuật hiệu quả không?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Thật không may, chưa có phương pháp tăng kích thước dương vật không phẫu thuật được chứng minh là hiệu quả. Các phương pháp đó có thể bao gồm kem bôi, thuốc viên hoặc jelqing. Tuy nhiên, không có bằng chứng nào cho thấy những phương pháp này có hiệu quả và đôi khi có thể gây hại cho bệnh nhân.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Nếu trường hợp phẫu thuật xảy ra các biến chứng không mong muốn thì sao?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có tỷ lệ thành công là 100%, có một số trường hợp người bệnh bị kích ứng nhẹ tại chỗ và chỉ cần dùng thuốc là khỏi. Nếu xảy ra tình trạng đào thải hoặc những biến chứng khác sau phẫu thuật, Megadom cam kết sẽ trả lại bệnh nhân chi phí phẫu thuật, đồng thời tiến hành phẫu thuật tháo tấm độn miễn phí. Nếu có bất kỳ chi phí nào phát sinh thêm sau phẫu thuật thì Megadom sẽ chịu trách nhiệm chi trả toàn bộ.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phương pháp phẫu thuật Penuma?</span></button>
          <div class="content">
            <p class="set-font-size" data-font-size="18">Tấm độn Penuma hiện này mới chỉ được Mỹ cho phép lưu hành tại nội bộ tại một số bang (Beverly Hills, Chicago, Washington D.c, Phoenix, Bay Area, New York, Louisiana, và cuối cùng là Miami) và chưa có giấy phép lưu hành tại Việt Nam và quan trọng hơn là nó không phù hợp với người Châu Á. Ngoài ra chi phí cho một lần phẫu thuật cũng khá cao khoảng: 15000$ tương đương với 350 triệu, ngoài ra tại Mỹ đây được coi là phẫu thuật tự chọn và do đó, mọi chi phí và rủi ro của người bệnh đều không được bảo hiểm chi trả.</p>
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