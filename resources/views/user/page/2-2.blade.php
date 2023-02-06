@extends('user.layout.main')

@section('title')
<title>Làm to Silicone</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/public/user/page/2-2.css">
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
  <div class="screen2-2">
    <div class="banner">
      <div class="container">
        <div class="text-banner col-xl-6 col-lg-6 col-sm-12 col-12">
          <p class="text-bold set-font-size set-line-height" data-font-size="64" data-line-height="75">Phẫu thuật tăng kích cỡ dương vật bằng Silicon</p>
          <div class="vertical"></div>
          <p class="text-medium set-font-size" data-font-size="28">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng.</p>
          <p class="text-small set-font-size" data-font-size="18">Với sự phát triển của khoa học, đã có rất nhiều phương pháp phẫu thuật làm to dương vật ra đời với nhiều cải tiến về hiệu quả và cả tính an toàn cho nam giới. Tuy nhiên, làm to dương vật bằng thủ thuật đặt Silicon vẫn luôn là phương pháp phổ biến nhất bởi chi phí dễ tiếp cận, hiệu quả cao và sự an toàn của nó.</p>
          <div class="block-contact set-font-size" data-font-size="22"><a href="{{ route('lien_he') }}" style="color: #FFF">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</a></div>
        </div>
      </div>
    </div>
    <div class="tag container col-xl-6 col-lg-6 col-sm-12 col-12">
      <a href="#1"><div class="tag-block block-1"><span class="set-font-size" data-font-size="18">Đây Là Phẫu Thuật Gì? </span></div></a>
      <a href="#2"><div class="tag-block block-2"><span class="set-font-size" data-font-size="18">Các loại tấm độn Silicon</span></div></a>
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
        <iframe id="iframe-3" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-show" width="100%" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/tWUol7ryj1c"></iframe>
        <div class="concept-top-contnet col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right" data-width-block="690" data-margin-right="136">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="1">PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG SILICON LÀ GÌ?</p>
          <hr>
          <p class="text-medium concept-text-medium-1 set-font-size" data-font-size="18">Phẫu thuật tăng kích thước dương vật là một phẫu thuật điều trị ngoại trú nhằm mục đích tăng chiều dài hoặc chu vi của dương vật. Phẫu thuật tăng kích thước dương vật bằng Silicon là hoạt động cấy ghép các miếng độn bằng Silicon y tế với các hình dạng khác nhau vào dưới da để tăng chu vi dương vật cho bệnh nhân, được KFDA chấp thuận về độ an toàn. Thời gian phẫu thuật khá ngắn, trung bình 15-30 phút.</p>
        </div>
        <iframe id="iframe-3" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-hide" width="100%" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/tWUol7ryj1c"></iframe>
      </div>
      <div class="concept-bottom">
        <div class="concept-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="2">CÁC LOẠI TẤM ĐỘN SILICON</p>
          <hr>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12 set-margin-right set-width-block" data-width-block="690" data-margin-right="138">
            <img id="concept-img-1" style="width:100%" src="/public/frontend/images/2-2-1.png">
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block" data-width-block="690">
            <p class="text-medium set-font-size" data-font-size="18">Miếng độn Silicon được sản xuất tại Hàn Quốc với nhiều kích cỡ và hình dạng khác nhau để phù hợp với chu vi dương vật của từng người. Hiện tại có 1 loại hình dạng chính là Ring và T-ring. Chúng được thiết kế với 3 kích cỡ khác nhau là nhỏ, vừa và lớn.</p>
            <p class="text-title title-1 set-font-size" data-font-size="28">SILICON DẠNG RING</p>
            <ul class="text-small text-small-1 set-font-size" data-font-size="18">
              <li>Silicon dạng Ring trông giống như một chiếc nhẫn, có 2 loại khác nhau bao gồm loại trơn hay còn được gọi là dạng chữ C; và loại có mấu - hay còn được gọi là dạn hình hoa hướng dương:</li>
              <li>Loại “Ring”: là một vòng hình chữ C, có đầy đủ 3 loại kích thước là small, medium và big. Bề mặt trơn nhẵn sẽ giúp cho phần thân dương vật to một cách tự nhiên, không nổi gồ lên, không sần sùi. Tạo cho người bệnh và bạn tình một cảm giác tự nhiên nhất.</li>
              <li>Loại “Sunflower”: cũng có đầy đủ 3 kích thước khác nhau để phù hợp với kích thước dương vật khác nhau. Trên mặt của vòng có những vùng lượn sóng, sau khi đặt vào thân dương vật thì sẽ tạo cho dương vật hình thù giống như vậy.</li>
            </ul>
            <p class="text-title title-1 set-font-size" data-font-size="28">SILICON DẠNG T-RING</p>
            <ul class="text-small text-small-1 set-font-size" data-font-size="18">
              <li>Được coi là một phiên bản nâng cấp từ dạng ring, T-ring được thiết kế có thêm phần đuôi chữ T và cũng có 2 dạng là dạng thẳng và dạng lượn sóng, mỗi dạng này cũng có 3 size khác nhau để phù hợp với kích thước dương vật. So với dạng Ring thì silicon dạng T-ring có ưu điểm là giúp tăng đều về chu vi của dương vật, thẩm mỹ hơn rất nhiều, đồng thời khó bị phát hiện hơn so với loại Ring.</li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="concept-left col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right" data-width-block="690"  data-margin-right="138">
            <p class="text-title set-font-size" data-font-size="28" id="3">ỨNG DỤNG CỦA TẤM ĐỘN SILICON TRONG PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
            <ul class="text-small set-font-size" data-font-size="18">
              <li>Tấm độn Silicon đa dạng về hình dáng, kích thước, nam giới có nhiều lựa chọn để phù hợp với dương vật của mình.</li>
              <li>Quy trình đơn giản, có thể dễ dàng đưa tấm độn Silicon và với rất ít biến chứng.</li>
              <li>Có thể dễ dàng lấy miếng Silicon ra dễ dàng bằng một can thiệp tiểu phẫu.</li>
              <li>Ngoài tăng kích thước, tấm động sinh học còn giúp hỗ trợ cải thiện tình trạng xuất tinh sớm, kéo dài thời gian quan hệ.</li>
            </ul>
          </div>
          <div class="concept-right col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block mobile-to-top" data-width-block="690">
            <img id="concept-img-1" style="width:100%" src="/public/frontend/images/2-2-2.png">
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
          </table>
          <button data-link="{{ route('picture_video') }}" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25" style="margin-top: 50px">
            <span class="set-font-size" data-font-size="22">THƯ VIỆN HÌNH ẢNH</span>
          </button>
        </div>
        <div class="image-2 col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block" data-width-block="690">
          <div class="backround set-height-block" data-height-block="480" >
            <div class="text">
              <p class="text-bold set-font-size" data-font-size="28" >HÌNH ẢNH CHỨA YẾU TỐ NHẠY CẢM</p>
              <p class="text-medium set-font-size" data-font-size="24" >TÔI ĐÃ TRÊN 18 TUỔI</p>
              <button href="#" class="button-QA set-padding-button" data-padding-left="31" data-padding-top="25">
                <span class="set-font-size" data-font-size="18">XÁC NHẬN</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="bottom-block-2">
          <div class="left col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-margin-right" data-width-block="690" data-margin-right="138">
            <div class="effective-title">
              <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="5">HIỆU QUẢ TĂNG KÍCH THƯỚC CỦA TẤM ĐỘN SILICON</p>
              <hr>
            </div>
            <iframe id="iframe-2" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-show" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/O91o8VlO_fs"></iframe>
            <div class="text-medium text-medium-4 set-font-size" data-font-size="18">
              <p class="text-medium text-1">Trong số các phương pháp tăng kích thước dương vật tại Megadom thì hiệu quả nhất là phương pháp tăng kích thước bằng tấm độn sinh học Megaderm, kế tiếp đến là tăng kích thước bằng T-ring và cuối cùng là loại Ring.</p>
              <p class="text-medium text-2">Mặc dù hiệu quả tăng kích thước của Silicon không bằng tấm độn sinh học Magaderm nhưng giá thành của phẫu thuật Sillicon lại phải chăng hơn rất nhiều. Nếu bạn chưa đủ kinh phí để phẫu thuật bằng tấm độn sinh học thì Silicon là một lựa chọn tối ưu hơn. Khi so sánh giữa việc đặt bi thì sử dụng Silicon lại tốt hơn rất nhiều.</p>
              <p class="text-medium text-3">Sử dụng Silicon thì thời gian tác dụng của Silicon sẽ kéo dài từ 6-8 năm, việc lấy bỏ tấm Silicon là rất dễ dàng và nhanh chóng.</p>
              <p class="text-medium text-4">Tỷ lệ thành công của phương pháp Silicon là 100%, có một số người bệnh bị kích ứng nhẹ tại chỗ và chỉ cần dùng thuốc là hết.</p>
              <p class="text-medium text-5">Phẫu thuật tăng kích thước dương vật bằng Silicon sẽ tăng chu vi dương vật lên từ 1-3cm tuỳ thuộc vào kích cỡ của Silicon và phụ thuộc vào độ giãn nở của da thân dương vật.</p>
            </div>
          </div>
          <iframe id="iframe-2" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block video-custom mobile-to-hide" data-width-block="690" data-height-block="388" src="https://www.youtube.com/embed/O91o8VlO_fs"></iframe>
        </div>
      </div>
    </div>
    <div class="backround-before-surgery">
      <div class="before-surgery container">
        <p class="text-bold-1 set-font-size" data-font-size="48" id="6">Trước phẫu thuật</p>
        <div class="step step-1">
          <p class="text-bold set-font-size" data-font-size="18">Bước 1: Gửi câu hỏi và đăng ký tư vấn phẫu thuật tăng kích thước dương vật</p>
          <p class="text-medium set-font-size" data-font-size="18">Đầu tiên, chúng tôi yêu cầu bạn gửi câu hỏi về phẫu thuật tăng kích thước dương vật bằng tấm độn Megadom - bạn sẽ được chỉ định đích thân chuyên gia tư vấn hỗ trợ giải đáp các thắc mắc và cung cấp thông tin đầy đủ về quy trình phẫu thuật.</p>
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
          <p class="text-medium text-1 set-font-size" data-font-size="18">Quy trình tăng kích thước dương vật bằng tấm độn Silicon là một phẫu thuật ngoại trú tương đối ngắn (15-30 phút), thường bệnh nhân có thể ra viện ngay sau khi phẫu thuật.</p>
          <p class="text-medium text-2 set-font-size" data-font-size="18">Trong quá trình thực hiện, bệnh nhân đầu tiên được cạo sạch lông mu và được sát khuẩn bằng Betadin. Dưới đây là quy trình phẫu thuật tăng kích cỡ dương vật bằng tấm độn Silicon tại Megadom:</p>
          <div class="text-medium text-3">
            <p class="left-step step-1 set-font-size" data-font-size="18"><b>Bước 1:</b> Bệnh nhân được gây tê tại gốc dương vật bằng 2 mũi tiêm gây tê.</p>
            <p class="left-step step-2 set-font-size" data-font-size="18"><b>Bước 2:</b> Rạch da dương vật gần phía quy đầu dài khoảng 3cm.</p>
            <p class="left-step step-3 set-font-size" data-font-size="18"><b>Bước 3:</b> Tách rộng tổ chức dưới da thân dương vật xuống phía dưới gốc dương vật</p>
            <p class="left-step step-4 set-font-size" data-font-size="18"><b>Bước 4:</b> Cầm máu kỹ</p>
            <p class="left-step step-5 set-font-size" data-font-size="18"><b>Bước 5:</b> Lựa chọn kích thước tấm độn Silicone, đặt tấm độn vào dưới da dương vật.</p>
            <p class="left-step step-6 set-font-size" data-font-size="18"><b>Bước 6:</b> Khâu cố định tấm độn Silicone</p>
            <p class="left-step step-7 set-font-size" data-font-size="18"><b>Bước 7:</b> Khâu phục hồi tổ chức dưới da và lớp da thân dương vật</p>
          </div>
        </div>
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
      <div class="evaluate-title container">
        <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="7">ĐÁNH GIÁ VÀ PHẢN HỒI CỦA BỆNH NHÂN SAU PHẪU THUẬT</p>
        <hr>
        <p class="text-medium text-medium-2 set-font-size" data-font-size="18">Megadom đã giúp hàng trăm bệnh nhân đạt được kích thước dương vật mà họ mong muốn.</p>
      </div>
      <div class="bottom-block-1">
        <!-- <iframe id="iframe-1" class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block set-margin-right video-custom" width="100%" data-width-block="690" data-height-block="388" data-margin-right="138" src="https://www.youtube.com/embed/1fCJ2cCtP8Q"></iframe> -->
        <img class="col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-height-block set-margin-right video-custom" id="image-5"  width="100%" data-width-block="690" data-height-block="388" data-margin-right="138" style="padding:0;" src="/public/frontend/images/maxresdefault.jpg">
        <div class="text-medium text-medium-3 col-xl-6 col-lg-6 col-sm-12 col-12 set-width-block set-font-size" data-width-block="690" data-font-size="18"><span>Bệnh nhân 1:</span> Vốn là Việt Kiều tại Anh Quốc nhưng anh đã vượt qua rất nhiều khó khắn trong thời điểm Covid để trở về Việt Nam làm phẫu thuật tăng kích thước dương vật tại Megadom. Đây là trường hợp rất đặc biệt vì anh phải chi tới 200 triệu tiền vé máy bay một chiều từ Anh về Việt Nam. Khi mới về, anh tiếp tục mất tới 3 tuần để cách ly tập trung và thêm 1 tuần cách ly tại nhà. Chia sẻ về lý do phẫu thuật, anh nói rằng mình và người yêu không hòa hợp trong chuyện chăn gối. Mặc dù người yêu không nói ra nhưng anh nhận ra sự thất vọng và khó chịu từ cô. Đây cũng là nguyên nhân chính dẫn đến sự bất hòa trong mối quan hệ của hai người.</div>
      </div>
    </div>
    <div class="note container set-width-block set-margin-left set-margin-right" data-width-block="1522" data-margin-right="199" data-margin-left="199">
      <div class="note-title">
        <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="8">NHỮNG LƯU Ý HẬU PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG TẤM ĐỘN SILICON</p>
        <hr>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-1-3.png">
      <div class="text col-xl-6 col-lg-6 col-sm-12 col-12">
        <p class="text-medium text-1 set-font-size" data-font-size="18">Sau khi phẫu thuật, bệnh nhân có thể sinh hoạt bình thường.</p>
        <p class="text-medium text-2 set-font-size" data-font-size="18">Bệnh nhân nên mặc quần áo và quần lót rộng rãi trong vài tuần đầu tiên.</p>
        <p class="text-medium text-3 set-font-size" data-font-size="18">Sau 2 tuần, bệnh nhân có thể quan hệ tình dục.</p>
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
    <div class="backround-feasibility">
      <div class="feasibility container">
        <div class="feasibility-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="4">TÍNH KHẢ THI VÀ NHỮNG BIẾN CHỨNG</p>
          <hr>
        </div>
        <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-1-4.png">
        <div class="text col-xl-6 col-lg-6 col-sm-12 col-12 line-x">
          <p class="text-medium text-1 set-font-size" data-font-size="18"><b>Tỷ Lệ Đào Thải:</b> Silicon là vật liệu bên ngoài (không phải vật liệu tự thân giống Megaderm) nên vẫn có khả năng bị đào thải.</p>
          <p class="text-medium text-2 set-font-size" data-font-size="18"><b>Thẩm Mỹ:</b> Giữ 2 loại Ring và T-ring thì Silicon T-ring sẽ giúp tăng kích thước dương vật đều hơn và khó bị phát hiện hơn.</p>
          <p class="text-medium text-3 set-font-size" data-font-size="18"><b>Hậu Phẫu Thuật:</b> Vì silicon là vật liệu bên ngoài nên mới đầu có thể gây cảm giác hơi kích ứng. Tuy nhiên cảm giác này sẽ dần biến mất theo thời gian khi miếng độn ổn định đúng vị trí.</p>
          <p class="text-medium text-4 set-font-size" data-font-size="18"><b>Tác Dụng Về Lâu Dài:</b> Sau khi phẫu thuật làm to bằng Silicon, bệnh nhân sẽ giảm cảm giác tiếp xúc da, điều này không phải là nhược điểm mà là lợi thế giúp các nam giới kéo dài thời gian quan hệ. Đồng thời đây cũng là một phương án giúp điều trị rối loạn xuất tinh sớm ở đàn ông. Thời gian tác dụng của silicon sẽ kéo dài từ 6-8 năm, việc lấy bỏ tấm silicon khi bạn không thích là rất dễ dàng và nhanh chóng.</p>
        </div>
        <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-hide" id="image-3" src="/public/frontend/images/2-1-4.png">
      </div>
    </div>
    <div class="when container">
      <div class="when-title">
        <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="9">KHI NÀO THÌ BẠN NÊN THỰC HIỆN PHẪU THUẬT<span> TĂNG KÍCH THƯỚC DƯƠNG VẬT</span></p>
        <hr>
      </div>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-show" id="image-3" src="/public/frontend/images/2-2-3.png">
      <p class="text-medium note set-font-size" data-font-size="18">Những nam giới có nhu cầu cải thiện kích thước dương vật hoặc có bệnh lý gây kích thước dương vật nhỏ dưới chuẩn thì có thể phẫu thuật tăng kích thước dương vật bằng tấm độn Silicon:</p>
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12 mobile-to-hide" id="image-3" src="/public/frontend/images/2-2-3.png">
      <ul class="text-small col-xl-6 col-lg-6 col-sm-12 col-12">
        <li class="set-font-size" data-font-size="18">Người có kích thước dương vật quá nhỏ so với bình thường. <a href="https://onlinelibrary.wiley.com/doi/epdf/10.1111/andr.12978" target="_blank">Theo dữ liệu thống kê từ 14594 nam giới Việt Nam</a> công bố vào năm 2021, chu vi dương vật trung bình của nam giới Việt Nam là 8.39cm.</li>
        <li class="set-font-size" data-font-size="18">Người có kích thước dương vật không tương xứng với cơ thể (cơ thể quá to nhưng dương vật lại quá nhỏ). Nhiều người béo phì và béo bụng còn khiến dương vật ngắn và dương vật bị vùi vào trong.</li>
        <li class="set-font-size" data-font-size="18">Các trường hợp bị chấn thương, ảnh hưởng đến hình dạng và kích thước của dương vật.</li>
        <li class="set-font-size" data-font-size="18">Người có kích thước dương vật ở mức bình thường nhưng vẫn có cảm giác thiếu tự tin trước đối phương.</li>
        <li class="set-font-size" data-font-size="18">Người bị xuất tinh sớm nhưng không muốn sử dụng thuốc.</li>
      </ul>
      <button data-link="{{ route('lien_he') }}" style="margin-left: auto;margin-right: auto;display: block;" class="button-QA set-padding-button link-url" data-padding-left="31" data-padding-top="25">
        <span class="set-font-size" data-font-size="22">LIÊN HỆ CHUYÊN GIA</span>
      </button>
    </div>
    <!--<button href="#" class="button-QA set-padding-button set-width-block" style="margin-left: auto;margin-right: auto;" data-padding-left="31" data-width-block="291" data-padding-top="25">-->
    <!--  <span class="set-font-size" data-font-size="22">LIÊN HỆ CHUYÊN GIA</span>-->
    <!--</button>-->
    <div class="backround-qa">
      <div class="qa container set-width-block set-margin-left set-margin-right" data-width-block="1270" data-margin-right="325" data-margin-left="325">
        <div class="qa-title">
          <p class="text-bold set-font-size set-line-height" data-font-size="38" data-line-height="45" id="10">CÂU HỎI THƯỜNG GẶP</p>
          <hr>
        </div>
        <div class="qa-content">
          <button class="collapsible set-font-size" data-font-size="18"><span>Phương pháp đặt miếng độn Megaderm/Silicon có biến chứng gì không?</span></button>
          <div class="content">
            <p class="set-font-size"  data-font-size="18">Dù là một phẫu thuật nhỏ nhưng vẫn là 1 loại phẫu thuật y khoa, bắt buộc phải được thực hiện bởi bác sĩ có tay nghề và kinh nghiệm. Đã là phẫu thuật, sẽ không tránh được một số biến chứng có thể xảy ra như: Chảy máu vết mổ, nhiễm trùng vết mổ, sưng nề tại vết mổ... Những biến chứng này đều có thể hạn chế được tối đa nhờ vào kỹ thuật và kinh nghiệm của bác sĩ phẫu thuật. Trong trường hợp hãn hữu có xảy ra thì đều có những phương pháp khắc phục ngay sau đó.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon thì có ảnh hưởng gì đến khả năng sinh con hay không?</span></button>
          <div class="content">
            <p class="set-font-size"  data-font-size="18">Phẫu thuật tăng kích thước dương vật là tác động vào phía dưới da của thân dương vật, không liên quan gì đến tinh hoàn và ống dẫn tinh cả, nên không ảnh hưởng gì đến chức năng của tinh hoàn. Vì vậy nó không ảnh hưởng đến khả năng sinh sản của người bệnh.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có ảnh hưởng gì đến độ cương cứng của dương vật không?</span></button>
          <div class="content">
            <p class="set-font-size"  data-font-size="18">Phẫu thuật tăng kích thước dương vật là việc đặt tấm độn sinh học hoặc miếng độn silicon vào phía dưới da của thân dương vật. Không liên quan gì đến việc tưới máu vào thân dương vật nên không ảnh hưởng đến độ cương cứng của dương vật.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm có đau không?</span></button>
          <div class="content">
            <p class="set-font-size"  data-font-size="18">Một số ít bệnh nhân sau khi phẫu thuật thì người bệnh gặp phải tình trạng đau nhẹ khi dương vật cương lên, đó là do da của dương vật chưa giãn ra nên khi cương sẽ hơi tức tức ở dương vật. Tình trạng này sẽ kết thúc sau 2-3 ngày.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Các phương pháp tăng kích thước dương vật khác thì sao (tiêm mỡ tự thân, tiêm Filler)?</span></button>
          <div class="content">
            <p class="set-font-size"  data-font-size="18">Một số phương pháp làm to dương vật khác như tiêm mỡ tự thân, tiêm Filler khoảng 10 năm về trước được áp dụng rất nhiều. Nhưng đến nay thì những nhược điểm của phương pháp này được bộc lộ rất rõ. Sau khi mỡ tự thân hoặc Filler được tiêm vào thì chúng không ổn định, sẽ di chuyển dần dần xuống phía dưới của thân dương vật. Làm cho hình dạng dương vật bị biến dạng. Hoặc lớp mỡ này tiêu đi không đồng đều và co nhỏ lại tạo thành những cục trên thân dương vật. Hậu quả là dương vật chỗ to chỗ nhỏ. Thời gian tác dụng của tiêm mỡ và Filler chỉ có tác dụng 6-18tháng, và thường thì người bệnh sẽ phải làm 3-5 lần tiêm nhắc lại.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Liệu có phương pháp tăng kích thước dương vật không phẫu thuật hiệu quả không?</span></button>
          <div class="content">
            <p class="set-font-size"  data-font-size="18">Thật không may, chưa có phương pháp tăng kích thước dương vật không phẫu thuật được chứng minh là hiệu quả. Các phương pháp đó có thể bao gồm kem bôi, thuốc viên hoặc jelqing. Tuy nhiên, không có bằng chứng nào cho thấy những phương pháp này có hiệu quả và đôi khi có thể gây hại cho bệnh nhân.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Nếu trường hợp phẫu thuật xảy ra các biến chứng không mong muốn thì sao?</span></button>
          <div class="content">
            <p class="set-font-size"  data-font-size="18">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có tỷ lệ thành công là 100%, có một số trường hợp người bệnh bị kích ứng nhẹ tại chỗ và chỉ cần dùng thuốc là khỏi. Nếu xảy ra tình trạng đào thải hoặc những biến chứng khác sau phẫu thuật, Megadom cam kết sẽ trả lại bệnh nhân chi phí phẫu thuật, đồng thời tiến hành phẫu thuật tháo tấm độn miễn phí. Nếu có bất kỳ chi phí nào phát sinh thêm sau phẫu thuật thì Megadom sẽ chịu trách nhiệm chi trả toàn bộ.</p>
          </div>
          <button class="collapsible set-font-size" data-font-size="18"><span>Phương pháp phẫu thuật Penuma</span></button>
          <div class="content">
            <p class="set-font-size"  data-font-size="18">Tấm độn Penuma hiện này mới chỉ được Mỹ cho phép lưu hành tại nội bộ tại một số bang (Beverly Hills, Chicago, Washington D.c, Phoenix, Bay Area, New York, Louisiana, và cuối cùng là Miami) và chưa có giấy phép lưu hành tại Việt Nam và quan trọng hơn là nó không phù hợp với người Châu Á. Ngoài ra chi phí cho một lần phẫu thuật cũng khá cao khoảng: 15000$ tương đương với 350 triệu, ngoài ra tại Mỹ đây được coi là phẫu thuật tự chọn và do đó, mọi chi phí và rủi ro của người bệnh đều không được bảo hiểm chi trả.</p>
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