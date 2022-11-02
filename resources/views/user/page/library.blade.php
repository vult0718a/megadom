@extends('user.layout.main')

@section('title')
<title>Thư viện</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/user/page/library.css">
@endsection

@section('content')
  <div class="library-screen">
    <div class="banner banner-1">
      <div class="text-banner">
        <p class="text-small">TRANG CHỦ. THƯ VIỆN</p>
        <p class="text-bold">Thư viện</p>
      </div>
    </div>
    <div class="photo">
      <div class="photo-block block-1">
        <p class="text-bold">ẢNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
        <p class="text-medium">Phẫu thuật tăng kích thước dương vật có thể giúp những nam giới mắc hội chứng dương vật nhỏ hoặc bất kỳ nam giới muốn dương vật lớn hơn về tổng thể. Chu vi dương vật có thể tăng từ 2 - 5 cm.</p>
        <a href=""><div class="more-info"><span>TÌM HIỂU THÊM</span></div></a>
      </div>
      <div class="photo-block block-2">
        <p class="text-bold">ẢNH PHẪU THUẬT KÉO DÀI DƯƠNG VẬT</p>
        <p class="text-medium">Với hai phương pháp phẫu thuật kéo dài dương vật bằng cắt dây chằng chéo và loại bỏ lớp mỡ xương mu, chiều dài của dương vật có thể tăng thêm trung bình từ 2-3cm. Thời gian phẫu thuật ngắn. Sau 2 tuần bệnh nhân có thể sinh hoạt tình dục bình thường.</p>
        <a href=""><div class="more-info"><span>TÌM HIỂU THÊM</span></div></a>
      </div>
      <div class="photo-block block-3">
        <p class="text-bold"><span>ẢNH PHẪU THUẬT</span> QUY ĐẦU</p>
        <p class="text-medium">Ngoài phẫu thuật làm to viền quy đầu bằng Filler thì phẫu thuật làm to quy đầu bằng Megafill là phương pháp đầu tiên cũng là độc quyền của hệ thống phòng khám Nam Khoa Megadom. Phương pháp này sử dụng chất liệu là Megafill, có bản chất giống như tấm độn sinh học Megaderm nhưng ở dạng bột. Đều được cấu tạo từ mô cơ thể người và tồn tại vĩnh viễn trong dương vật.</p>
        <a href=""><div class="more-info"><span>TÌM HIỂU THÊM</span></div></a>
      </div>
      <div class="photo-block block-4">
        <p class="text-bold"><span>ẢNH PHẪU THUẬT</span> KHÁC</p>
        <p class="text-medium">Bạn có thể tìm thấy các dịch vụ phẫu thuật dương vật khác tại Megadom từ phẫu thuật thẩm mỹ cong dương vật, phẫu thuật thẩm mỹ chỉnh cong dương vật, phẫu thuật điều trị vùi lấp dương vật, v.v...</p>
        <a href=""><div class="more-info"><span>TÌM HIỂU THÊM</span></div></a>
      </div>
    </div>
    <div class="banner banner-2">
      <div class="text-banner">
        <p class="text-small">TRANG CHỦ. THƯ VIỆN</p>
        <p class="text-bold">Video</p>
      </div>
    </div>
    <div class="more-media">
      <div class="media-block block-1">
        <p class="text-bold">QUÁ TRÌNH PHẪU THUẬT</p>
        <p class="text-medium">Video cận cảnh của các cuộc phẫu thuật thực tế. Bạn có thể xem quy trình từng bước của các ca phẫu thuật quan trọng.</p>
        <a href=""><div class="more-info"><span>TÌM HIỂU THÊM</span></div></a>
      </div>
      <div class="media-block block-2">
        <p class="text-bold">MEGADOM GIẢI ĐÁP</p>
        <p class="text-medium">Các chuyên gia chia sẻ kiến thức chuyên sâu về các bệnh lý nam khoa như xuất tinh sớm, rối loạn cương dương hay phẫu thuật tăng kích thước dương vật, phẫu thuật kéo dài dương vật, v.v...</p>
        <a href=""><div class="more-info"><span>TÌM HIỂU THÊM</span></div></a>
      </div>
      <div class="media-block block-3">
        <p class="text-bold">PHỎNG VẤN BỆNH NHÂN THỰC HIỆN PHẪU THUẬT</p>
        <p class="text-medium text-3">Các bệnh nhân chia sẻ ký do tại sao họ muốn thực hiện phẫu thuật dương vật và kết quả sau phẫu thuật đã thay đổi cuộc sống của họ như thế nào.</p>
        <a href=""><div class="more-info"><span>TÌM HIỂU THÊM</span></div></a>
      </div>
    </div>
    <div class="banner banner-3">
      <div class="text-banner">
        <p class="text-small">TRANG CHỦ. THƯ VIỆN</p>
        <p class="text-bold"><span>Cảm nhận</span> của khách hàng</p>
      </div>
    </div>
    <div class="video">
      <div class="text-title">
        <p class="text-small">CẢM NHẬN CỦA KHÁCH HÀNG</p>
        <p class="text-bold">Video</p>
        <hr>
      </div>
      <div class="video-list">
        <div class="video-block video-horizontal video-1">
          <a href=""><div class="see"><span>XEM</span></div></a>
          <p class="text-bold">QUY TRÌNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT VÀ NHỮNG LƯU Ý HẬU PHẪU</p>
          <img src="/frontend/images/rectangle84a.png">
        </div>
        <div class="video-block video-horizontal video-2">
          <a href=""><div class="see"><span>XEM</span></div></a>
          <p class="text-bold">QUY TRÌNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT VÀ NHỮNG LƯU Ý HẬU PHẪU</p>
          <img src="/frontend/images/rectangle84a.png">
        </div>
        <div class="video-block video-vertical video-3">
          <a href=""><div class="see"><span>XEM</span></div></a>
          <p class="text-bold">LOREM IPSUM IS SIMPLY IS DUMMY TEXT WHAT IS THAT OH MY GOD IS WHAT HAPPENED?</p>
          <img src="/frontend/images/rectangle84b.png">
        </div>
        <div class="video-block video-vertical video-4">
          <a href=""><div class="see"><span>XEM</span></div></a>
          <p class="text-bold">LOREM IPSUM IS SIMPLY IS DUMMY TEXT WHAT IS THAT OH MY GOD IS WHAT HAPPENED?</p>
          <img src="/frontend/images/rectangle84b.png">
        </div>
        <div class="video-block video-vertical video-5">
          <a href=""><div class="see"><span>XEM</span></div></a>
          <p class="text-bold">LOREM IPSUM IS SIMPLY IS DUMMY TEXT WHAT IS THAT OH MY GOD IS WHAT HAPPENED?</p>
          <img src="/frontend/images/rectangle84b.png">
        </div>
      </div>
      <hr class="video-hr">
      <div class="comment">
        <p class="text-medium comment-1">Trước kia tôi còn ngần ngại khi nghĩ đến việc làm to "chỗ ấy". Nhưng để cải thiện chuyện chăn gối, tôi đã tìm hiểu từ nhiều nguồn thông tin.  Thật sự đã không lầm khi đặt niềm tin vào Megadom. Tôi đã tự tin hơn rất nhiều!</p>
        <p class="text-medium comment-2">Chỉ khi gặp Megadom, tôi mới thấy nhẹ người vì được "bắt đúng bênh". Không hề đau đơn hay khó khăn gì như tôi lo sợ, giờ thì vợ tôi còn thích hơn cả.</p>
        <p class="text-medium comment-3">Bác sĩ nhiệt tình và chu đáo nên tôi cảm thấy an tâm. Phẫu thuật cũng không đau đớn gì và hiệu quả rõ rệt. Tôi nghĩ mình đã chọn đúng.</p>
      </div>
    </div>
    <div class="testimonials">
      <div class="text-title">
        <p class="text-small">CẢM NHẬN CỦA KHÁCH HÀNG</p>
        <p class="text-bold">LỜI CHỨNG THỰC</p>
        <hr>
      </div>
      <div class="letter">
        <img id="image-1" src="/frontend/images/rectangle85.png">
        <img id="image-2" src="/frontend/images/rectangle87.png">
        <img id="image-3" src="/frontend/images/rectangle88.png">
        <img id="image-4" src="/frontend/images/rectangle89.png">
        <img id="image-5" src="/frontend/images/rectangle90.png">
        <img id="image-6" src="/frontend/images/rectangle91.png">
      </div>
    </div>
  </div>
  
@endsection