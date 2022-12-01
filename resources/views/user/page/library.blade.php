@extends('user.layout.main')

@section('title')
<title>Thư viện</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/frontend/bootstrap/css/bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="/user/page/library.css">
@endsection

@section('content')
<div class="body-content">
  <div class='main-wrapper'>
    <div class="banner-container">
      <div class="banner-content">
        <p class="banner-text-small">TRANG CHỦ. THƯ VIỆN</p>
        <p class="banner-text-big">Thư viện</p>
      </div>
    </div>
  </div>
  <div class="body-content-2 row">
    <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
      <div>
        <div>
          <p class="content-2-title">ẢNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
          <p class="content-2-content">Phẫu thuật tăng kích thước dương vật có thể giúp những nam giới mắc hội chứng dương vật nhỏ hoặc bất kỳ nam giới muốn dương vật lớn hơn về tổng thể. Chu vi dương vật có thể tăng từ 2 - 5 cm.</p>
          <button href="#" class="button-QA">
            <span>TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
      <div>
        <div>
          <p class="content-2-title">ẢNH PHẪU THUẬT KÉO DÀI DƯƠNG VẬT</p>
          <p class="content-2-content">Với hai phương pháp phẫu thuật kéo dài dương vật bằng cắt dây chằng chéo và loại bỏ lớp mỡ xương mu, chiều dài của dương vật có thể tăng thêm trung bình từ 2-3cm. Thời gian phẫu thuật ngắn. Sau 2 tuần bệnh nhân có thể sinh hoạt tình dục bình thường.</p>
          <button href="#" class="button-QA">
            <span>TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
      <div>
        <div>
          <p class="content-2-title">ẢNH PHẪU THUẬT QUY ĐẦU</p>
          <p class="content-2-content">Ngoài phẫu thuật làm to viền quy đầu bằng Filler thì phẫu thuật làm to quy đầu bằng Megafill là phương pháp đầu tiên cũng là độc quyền của hệ thống phòng khám Nam Khoa Megadom. Phương pháp này sử dụng chất liệu là Megafill, có bản chất giống như tấm độn sinh học Megaderm nhưng ở dạng bột. Đều được cấu tạo từ mô cơ thể người và tồn tại vĩnh viễn trong dương vật.</p>
          <button href="#" class="button-QA">
            <span>TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-sm-6 col-12">
      <div>
        <div>
          <p class="content-2-title">ẢNH PHẪU THUẬT KHÁC</p>
          <p class="content-2-content">Bạn có thể tìm thấy các dịch vụ phẫu thuật dương vật khác tại Megadom từ phẫu thuật thẩm mỹ cong dương vật, phẫu thuật thẩm mỹ chỉnh cong dương vật, phẫu thuật điều trị vùi lấp dương vật, v.v...</p>
          <button href="#" class="button-QA">
            <span>TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class='main-wrapper-2'>
    <div class="banner-container-2">
      <div class="banner-content-2">
        <p class="banner-text-small" style="font-size: 28px;">TRANG CHỦ. THƯ VIỆN</p>
        <p class="banner-text-big" style="font-size: 110px;">Video</p>
      </div>
    </div>
  </div>

  <div class="body-content-3 row">
    <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
      <div>
        <div>
          <p class="content-3-title">QUÁ TRÌNH PHẪU THUẬT</p>
          <p class="content-3-content">Video cận cảnh của các cuộc phẫu thuật thực tế. Bạn có thể xem quy trình từng bước của các ca phẫu thuật quan trọng.</p>
          <button href="#" class="button-QA">
            <span>TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
      <div>
        <div>
          <p class="content-3-title">MEGADOM GIẢI ĐÁP</p>
          <p class="content-3-content">Các chuyên gia chia sẻ kiến thức chuyên sâu về các bệnh lý nam khoa như xuất tinh sớm, rối loạn cương dương hay phẫu thuật tăng kích thước dương vật, phẫu thuật kéo dài dương vật, v.v...</p>
          <button href="#" class="button-QA">
            <span>TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>

    <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
      <div>
        <div>
          <p class="content-3-title">PHỎNG VẤN BỆNH NHÂN THỰC HIỆN PHẪU THUẬT</p>
          <p class="content-3-content">Các bệnh nhân chia sẻ ký do tại sao họ muốn thực hiện phẫu thuật dương vật và kết quả sau phẫu thuật đã thay đổi cuộc sống của họ như thế nào.</p>
          <button href="#" class="button-QA">
            <span>TÌM HIỂU THÊM</span>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class='main-wrapper-3'>
    <div class="banner-container-3">
      <div class="banner-content-3">
        <p class="banner-text-small" style="font-size: 28px;">TRANG CHỦ. THƯ VIỆN</p>
        <p class="banner-text-big">Cảm nhận<br>của khách hàng</p>
      </div>
    </div>
  </div>

  <div class="body-content-4">
    <span class="text-small">CẢM NHẬN CỦA KHÁCH HÀNG</span><br>
    <span class="text-big">Video</span>
    <hr class="line-full-page">
    <div class="row">
      <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-4.png">
          <div class="bottom-left-1">
            <button href="#" class="button-QA-1">
              <span>XEM</span>
            </button><br><br>
            <p >QUY TRÌNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT VÀ NHỮNG LƯU Ý HẬU PHẪU</p>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-5.png">
          <div class="bottom-left-1">
            <button href="#" class="button-QA-1">
              <span>XEM</span>
            </button><br><br>
            <p>QUY TRÌNH PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT VÀ NHỮNG LƯU Ý HẬU PHẪU</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-6.png">
          <div class="bottom-left-1" style="font-size: 22px;">
            <button href="#" class="button-QA-1">
              <span>XEM</span>
            </button><br><br>
            <p>LOREM IPSUM IS SIMPLY IS DUMMY TEXT WHAT IS THAT OH MY GOD IS WHAT HAPPENED?</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-7.png">
          <div class="bottom-left-1" style="font-size: 22px;">
            <button href="#" class="button-QA-1">
              <span>XEM</span>
            </button><br><br>
            <p>LOREM IPSUM IS SIMPLY IS DUMMY TEXT WHAT IS THAT OH MY GOD IS WHAT HAPPENED?</p>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-8.png">
          <div class="bottom-left-1" style="font-size: 22px;">
            <button href="#" class="button-QA-1">
              <span>XEM</span>
            </button><br><br>
            <p>LOREM IPSUM IS SIMPLY IS DUMMY TEXT WHAT IS THAT OH MY GOD IS WHAT HAPPENED?</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="line-full-page" style="margin-bottom: 64px">
    <div class="row text-body-content-4">
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div style="width: 95%">
          <p>Trước kia tôi còn ngần ngại khi nghĩ đến việc làm to "chỗ ấy". Nhưng để cải thiện chuyện chăn gối, tôi đã tìm hiểu từ nhiều nguồn thông tin.  Thật sự đã không lầm khi đặt niềm tin vào Megadom. Tôi đã tự tin hơn rất nhiều!</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div style="width: 95%">
          <p>Trước kia tôi còn ngần ngại khi nghĩ đến việc làm to "chỗ ấy". Nhưng để cải thiện chuyện chăn gối, tôi đã tìm hiểu từ nhiều nguồn thông tin.  Thật sự đã không lầm khi đặt niềm tin vào Megadom. Tôi đã tự tin hơn rất nhiều!</p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div style="width: 95%">
          <p>Trước kia tôi còn ngần ngại khi nghĩ đến việc làm to "chỗ ấy". Nhưng để cải thiện chuyện chăn gối, tôi đã tìm hiểu từ nhiều nguồn thông tin.  Thật sự đã không lầm khi đặt niềm tin vào Megadom. Tôi đã tự tin hơn rất nhiều!</p>
        </div>
      </div>
    </div>
  </div>

  <div class="body-content-4">
    <span class="text-small">CẢM NHẬN CỦA KHÁCH HÀNG</span><br>
    <span class="text-big">LỜI CHỨNG THỰC</span>
    <hr class="line-full-page">
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-9.png">
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-10.png">
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-12.png">
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-12.png">
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-13.png">
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-sm-12 col-12">
        <div>
          <img class="darken" src="/frontend/images/image4-14.png">
        </div>
      </div>
    </div>
  </div>

</div>
@endsection