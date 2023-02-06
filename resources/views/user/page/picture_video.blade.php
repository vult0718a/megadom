@extends('user.layout.main')

@section('title')
<title>Hình ảnh video cảm nhận chi tiết</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/public/frontend/bootstrap/css/bootstrap4.min.css">
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
<link rel="stylesheet" type="text/css" href="public/user/page/picture_video.css">
<style>
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: black;
  overflow-x: hidden;
  z-index: 10000;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

.title-noti {
  color: #fff;
  font-size: 32px;
}

.title-content-noti {
  color: #a3a3a3;
  font-size: 24px;
}

.button-noti {
  background: #0429B7;
  padding: 25px 31px 25px 31px;
  border: #0429B7;
  font-style: normal;
  font-weight: 700;
  font-size: 18px;
  text-align: center;
  color: #FFFFFF;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
@endsection

@section('content')
<div id="myNav" class="overlay">
  <div class="overlay-content">
    <p class="title-noti">HÌNH ẢNH THƯ VIỆN<br>CHỨA KHỎA THÂN.</p>
    <p class="title-content-noti">Tôi ít nhất 18 tuổi</p>
    <button class="button-noti" onclick="closeNav()">TÔI ĐỒNG Ý</button><br><br>
    <button class="button-noti" onclick="returnLink()">KHÔNG ĐỒNG Ý</button>
  </div>
</div>

<div class="picture-video">
  <div class="picture-video-title">
    <h1 class="text-bold set-font-size" data-font-size="38">THƯ VIỆN HÌNH ẢNH</h1>
    <hr noshade>
  </div>
  <section class="text-medium set-font-size" data-font-size="22">Hình ảnh trước và sau phẫu thuật của các ca phẫu thuật thực tế. Bạn có thể xem dự đoán trước kết quả đạt được.</section>
  <div class="back set-font-size" data-font-size="22"><a href="{{ route('library') }}" style="color: #000000;"><< Trở lại thư viện</a></div>
  <div class="image justify-content-between" style="display: inline-block">
    @foreach($imageGallerys as $imageGallery)
      <img src="{{asset($imageGallery->image)}}" class="col-xl-3 col-lg-3 col-sm-12 col-12">
    @endforeach
  </div>
  <div class="title-1">
    <h2 class="text-bold set-font-size" data-font-size="38">QUYẾT ĐỊNH PHẪU THUẬT</h2>
    <hr>
    <div class="content-1 set-font-size" data-font-size="22">
        <p>Khi quyết định xem phẫu thuật dương vật có phù hợp với bạn hay không, chúng tôi khuyên bạn nên thận trọng, kỹ lưỡng và đánh giá toàn diện - bạn có thể đọc lời chứng thực của bệnh nhân và xem hình ảnh trước và sau phẫu thuật.</p>
        <br>
        <p>Nếu bạn muốn tìm hiểu thêm thông tin hữu ích về phẫu thuật dương vật, thì bạn đã đến đúng nơi. Với gần chục năm kinh nghiệm là bác sĩ phẫu thuật thẩm mỹ và tiết niệu được đánh giá cao hàng đầu, ThS.BS Nguyễn Văn Đức đã thực hiện vô số ca phẫu thuật dương vật, đồng thời hiểu rõ những rủi ro và lợi ích của mỗi loại phẫu thuật.</p>
    </div>
  </div>

  <div class="title-2">
    <h2 class="text-bold set-font-size" data-font-size="38">NGHIÊN CỨU VỀ PHẪU THUẬT DƯƠNG VẬT</h2>
    <hr>
    <div class="content-2 set-font-size" data-font-size="22">
        <p>Thư viện hình ảnh trước và sau của Megadom có thể giúp bạn hiểu rõ hơn về kết quả mà mình có thể đạt được. Tuy nhiên, kết quả sẽ khác nhau dựa vào tình trạng của mỗi người cũng như tay nghề và kinh nghiệm của bác sĩ phẫu thuật. Bạn cũng có thể xem cận cảnh các video phẫu thuật để hiểu rõ hơn về các phương pháp.</p>
        <br>
        <p>Sau khi xem xét video quá trình phẫu thuật, lợi ích và rủi ro của mỗi phương pháp và bộ sưu tập ảnh hậu phẫu thuật của chúng tôi, bạn đã quyết định được loại phẫu thuật nào phù hợp với mình - bước tiếp theo là đặt lịch tư vấn. Trong quá trình bạn tham vấn với Megadom, chúng tôi sẽ xem xét tất cả các biến chứng, rủi ro, lợi ích có thể xảy ra, cũng như các lựa chọn thay thế không phẫu thuật.</p>
    </div>
  </div>

  <div class="title-3">
    <h2 class="text-bold set-font-size" data-font-size="38">ĐẶT LỊCH TƯ VẤN</h2>
    <hr>
    <div class="content-3 set-font-size" data-font-size="22">
        <p>Nếu bạn đã sẵn sàng để thực hiện bước tiếp theo trong hành trình kéo dài dương vật của mình, hãy gọi cho chúng tôi ngay hôm nay để đặt lịch tư vấn cho bạn . Chúng tôi sẽ giúp bạn xác định xem bạn có phải là ứng cử viên sáng giá cho Cấy ghép Penuma hay không.</p>
        <br>
        <p>Nếu bạn đã sẵn sàng để thực hiện bước tiếp theo trong hành trình lấy lại sự tự tin cho chính mình, hãy gọi cho Megadom ngay hôm nay để <a href="{{ route('lien_he') }}">đặt lịch tư vấn</a>. Chúng tôi sẽ giúp bạn xác định phương án phẫu thuật phù hợp nhất.</p>
      </div>
    </div>
  </div>
@endsection

@section('script')
<script>
  document.getElementById("myNav").style.width = "100%";
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
  function returnLink() {
    if(history.length === 1){
        window.location = "{{ route('library') }}"
    } else {
        history.back();
    }
  }
</script>
@endsection
