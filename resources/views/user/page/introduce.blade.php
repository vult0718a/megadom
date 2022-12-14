@extends('user.layout.main')

@section('title')
<title>Giới thiệu</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/frontend/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/user/page/introduce.css">
@endsection

@section('content')
  <div class="introduce">
    <div class="banner">
      <div class="text-banner">
        <p class="text-small">TRANG CHỦ. VỀ MEGADOM. GIỚI THIỆU</p>
        <p class="text-bold">Giới thiệu</p>
      </div>
    </div>
    <div class="we container">
      <p class="we-title">CHÚNG TÔI LÀ AI?</p>
      <hr>
      <p class="we-content">Megadom là cơ sở y tế nam khoa cao cấp duy nhất tại Việt Nam chuyên cải thiện kích thước và thẩm mỹ dương vật với công nghệ Megaderm ĐỘC QUYỀN – HIỆN ĐẠI nhất hiện nay, nhằm mang lại sự an toàn, hiệu quả, và thoải mái nhất cho khách hàng.</p>
    </div>
    <div class="block-content-1 col container">
      <div class="left col-xl-8 col-lg-8 col-sm-12 col-12">
        <p class="question-title">TẠI SAO PHỤ NỮ CÓ QUYỀN LÀM ĐẸP MÀ ĐÀN ÔNG LẠI KHÔNG CÓ QUYỀN?</p>
        <hr>
        <p class="introduce-content">
          <span>Đó là một câu hỏi làm chúng tôi đã trăn trở rất nhiều. Việc làm đẹp cho “cậu nhỏ” ở Việt Nam hiện nay mới chỉ dừng lại ở việc tiêm mỡ tự thân hay làm to dương vât bằng bi…trong khi trên thế giới đã có nhiều phương pháp hiện đại hơn.</span>
          <span>Tháng 2/2020, trước đợt dịch Covid-19 bùng phát, bác sĩ Đức – Megadom đã quyết định quay trở lại Hàn Quốc để đưa kỹ thuật thẩm mỹ dương vật tiên tiến nhất về Việt Nam. Cho đến nay, chúng tôi đã và đang thực hiện rất nhiều ca phẫu thuật với mục đích “Tìm lại sự tự tin cho một người đàn ông”.</span>
          <span>Bên cạnh đó, hiện nay có rất nhiều phòng khám Nam khoa mở ra với những lời mời chào quảng cáo đánh vào tâm lý người bệnh để kiếm tiền. Chúng tôi không làm gì được với những chiêu trò ấy, nhưng tại phòng khám Megadom, chúng tôi cam kết mang đến một phác đồ điều trị mới – hiệu quả nhất và sự tận tâm tư vấn nhất.</span>
          <span>Chúng tôi không ngừng phấn đấu để trở thành một địa chỉ y tế uy tín, đáng tin cậy, luôn đồng hành để cung cấp những giải pháp tối ưu giúp mọi đàn ông Việt Nam “tận hưởng cuộc sống đích thực” của chính mình.</span> 	
        </p>
      </div>
      <img class="col-xl-4 col-lg-4 col-sm-12 col-12" id="image-1" src="/frontend/images/image14.png">
    </div>
    <div class="booking">
      <p class="booking-title">ĐẶT LỊCH TƯ VẤN MIỄN PHÍ</p>
      <div class="block-booking">ĐĂNG KÝ NGAY</div>
    </div>
    <div class="vision container">
      <p class="vision-title">TẦM NHÌN</p>
      <hr>
      <div class="vision-contnet col">
        <div class="vision-block vision-block-1 col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="content">Là phòng khám Nam khoa hàng đầu Việt Nam trong việc cung cấp trải nghiệm vượt trội cho khách hàng khi sử dụng dịch vụ y tế.</p>
        </div>
        <div class="vision-block vision-block-2 col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="content">Định hướng tiến ngang tầm với các cơ sở y tế lớn trên thế giới trong lĩnh vực nghiên cứu, chẩn đoán và điều trị kỹ thuật cao về ngành Nam khoa – Tiết niệu.</p>
        </div>
        <div class="vision-block vision-block-3 col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="content">Tiên phong cung cấp các giải pháp tối ưu về phẫu thuật thẩm mỹ trong chăm sóc sức khỏe sinh sản cho Nam giới tại Việt Nam."</p>
        </div>
      </div>
    </div>
    <div class="value">
      <div class="value-block-content">
        <div class="value-block value-1 col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="text-bold value-title-1">GIÁ TRỊ CỐT LÕI</p>
          <hr>
        </div>
        <div class="value-block value-2 col-xl-4 col-lg-4 col-sm-12 col-12">
          <img src="/frontend/images/value-2.png">
          <p class="text-medium value-title-2">BẢO MẬT</p>
          <p class="value-content value-content-2">Luôn đảm bảo nghiêm ngặt tính bảo mật của thông tin khi tương tác với bệnh nhân và các thành viên trong cộng đồng.</p>
        </div>
        <div class="value-block value-3 col-xl-4 col-lg-4 col-sm-12 col-12">
          <img src="/frontend/images/value-3.png">
          <p class="text-medium value-title-3">TRÁCH NHIỆM</p>
          <p class="value-content value-content-3">Đội ngũ y bác sĩ, nhân viên phòng khám luôn hành xử với tinh thần trách nhiệm, chuẩn mực và đạo đức nghề nghiệp cao nhất đối với bệnh nhân và cộng đồng."</p>
        </div>
        <div class="value-block value-4 col-xl-4 col-lg-4 col-sm-12 col-12">
          <img src="/frontend/images/value-4.png">
          <p class="text-medium value-title-4">CHẤT LƯỢNG KHÁM CHỮA BỆNH TIÊU CHUẨN QUỐC TẾ</p>
          <p class="value-content value-content-4">Theo đuổi hướng đến những kết quả điều trị tốt nhất, luôn tự hoàn thiện và phục vụ vượt mong đợi. </p>
        </div>
        <div class="value-block value-5 col-xl-4 col-lg-4 col-sm-12 col-12">
          <img src="/frontend/images/value-5.png">
          <p class="text-medium value-title-5">LẤY BỆNH NHÂN LÀM TRUNG TÂM</p>
          <p class="value-content value-content-5">Phòng khám có quy trình dịch vụ được thiết kế riêng tùy theo thông tin và yêu cầu của mỗi khách hàng, đặt lợi ích khách hàng lên hàng đầu, không thiên vị về các lựa chọn, lợi ích và rủi ro.</p>
        </div>
        <div class="value-block value-6 col-xl-4 col-lg-4 col-sm-12 col-12">
          <img src="/frontend/images/value-6.png">
          <p class="text-medium value-title-6">CHUYÊN MÔN CAO CÔNG NGHỆ ĐỘC QUYỀN</p>
          <p class="value-content value-content-6">Bác sĩ chuyên môn đầu ngành trong lĩnh vực Nam học ở Việt Nam. Công nghệ phẫu thuật và chất liệu phẫu thuật từ Hàn Quốc tiên phong và độc quyền sử dụng.</p>
        </div>
      </div>
    </div>
    <div class="block-content-2 container">
      <img class="col-xl-6 col-lg-6 col-sm-12 col-12" id="delicious-image" src="/frontend/images/image16b.png">
      <div class="content col-xl-6 col-lg-6 col-sm-12 col-12">
        <p class="delicious-title">TẬN TÂM VÌ KHÁCH HÀNG</p>
        <hr id="delicious-hr">
        <p class="delicious-content">Trải nghiệm của bệnh nhân rất quan trọng đối với Megadom. Chúng tôi đối xử với từng bệnh nhân bằng sự chăm sóc tận tình, lòng trắc ẩn và sự quan tâm sâu sắc. Chúng tôi luôn đồng hành cùng bạn trong từng bước, từ buổi tư vấn ban đầu, cho đến khi điều trị, và hơn thế nữa là cam kết hỗ trợ trọn đời. Chúng tôi tự hào về thành tích thành công xuất sắc và sự hài lòng cao của bệnh nhân tại Megadom. Với vô số các ca phẫu thuật đã được thực hiện cho đến nay, bạn có thể tin rằng mình đang được chăm sóc bởi một trong những chuyên gia hàng đầu trong lĩnh vực này.</p>
      </div>
    </div>
    <div class="library">
      <div class="text">
        <p class="text-bold">Thư viện</p>
        <p class="text-small">khám phá</p>
        <hr>
      </div>
    </div>
    <div class="difference container">
      <p class="difference-title-bold">ĐIỂM KHÁC BIỆT CỦA<br>MEGADOM</p>
      <hr>
      <div class="difference-content-block">
        <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="difference-title">CHUYÊN BIỆT VÀ ĐỘC QUYỀN</p>
          <p class="difference-content">Phòng khám chuyên về kỹ thuật làm to và làm dài dương vật với công nghệ và kỹ thuật phẫu thuật tạo hình dương vật bằng tấm độn sinh học MEGADERM độc quyền.</p>
        </div>
        <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="difference-title">BẢO HÀNH TRỌN ĐỜI</p>
          <p class="difference-content">Chúng tôi cam kết mang lại trải nghiệm hài lòng nhất cho khách hàng và bảo hành trọn đời các dịch vụ độc quyền cung cấp.</p>
        </div>
        <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="difference-title">HIỆU QUẢ CAO - AN TOÀN - TỰ NHIÊN</p>
          <p class="difference-content">Với bác sĩ có chuyên môn, kinh nghiệm cao, chúng tôi hoàn toàn đảm bảo kết quả điều trị và phẫu thuật an toàn, tự nhiên nhất có thể.</p>
        </div>
        <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="difference-title">DỊCH VỤ CHĂM SÓC CÁ NHÂN HÓA</p>
          <p class="difference-content">Chúng tôi cung cấp dịch vụ thăm khám, chữa bệnh được thiết kế riêng cho từng bệnh nhân. Chúng tôi tôn trọng mỗi bệnh nhân/ khách hàng của mình và mong muốn cung cấp dịch vụ tốt nhất có thể.</p>
        </div>
        <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="difference-title">TRANG THIẾT BỊ Y TẾ HIỆN ĐẠI VÀ VỆ SINH</p>
          <p class="difference-content">Duy trì môi trường y tế vệ sinh, ngăn ngừa mọi nguy cơ nhiễm trùng là ưu tiên hàng đầu của chúng tôi.</p>
        </div>
        <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="difference-title">BÁC SĨ CHUYÊN KHOA TIẾT NIỆU- NAM HỌC HÀNG ĐẦU</p>
          <p class="difference-content">Các khách hàng của chúng tôi được đảm bảo nhận sự thăm khám, chữa bệnh của bác sĩ chuyên môn cao và dày dặn kinh nghiệm trong lĩnh vực này.</p>
        </div>
        <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="difference-title">BẢO MẬT 100%</p>
          <p class="difference-content">Chúng tôi có nguyên tắc bảo mật tối đa thông tin khách hàng để mang lại sự an toàn, thoải mái tuyệt đối cho bệnh nhân.</p>
        </div>
        <div class="difference-block col-xl-4 col-lg-4 col-sm-12 col-12">
          <p class="difference-title">TRUNG THỰC VÀ TIN CẬY</p>
          <p class="difference-content">Sự trung thực và đáng tin cậy là 2 tính cách quan trọng của Megadom, cũng là triết lý hoạt động của chúng tôi để mang lại sự hài lòng cho khách hàng."</p>
        </div>
      </div>
    </div>
  </div>
@endsection
