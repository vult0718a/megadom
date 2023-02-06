<style>

  nav.dropdown-menu-top{width: 100%;float: left;height: 85px;position: relative;top: 1px}

  nav>ul{width: 100%;height: inherit;font-family: 'WorkSans-Bold';font-size: 18px;padding: 0 70px;color: #fff;text-align: center;line-height: 85px}

  nav>ul>li{float: left;height: inherit;}

  nav>ul,nav ul ul{list-style: none;background: #111B27}

  nav ul ul{display: none;width: 100%;position: relative;top:0;text-align: left;z-index: 1}

  nav ul ul li{height: 45px;line-height: 45px;font-size: 15px}

  nav>ul>li:nth-child(1){width: 18%;padding-left: 4%}

  nav>ul>li:nth-child(2){width: 21%}

  nav>ul>li:nth-child(3){width: 18%}

  nav>ul>li:nth-child(4){width: 16%}

  nav>ul>li:nth-child(5){width: 11%}

  nav>ul>li:nth-child(6){width: 13.5%}

  nav>ul>li:hover ul{display: block;}

  nav ul li a,nav ul li a:hover{color: #fff}



  .menu-mobile{

    height: 85px;

    color: #fff;

    font-size: 66px;

    padding-left: 66px;

    display: none;

  }



  .hotline-phone{float: right;width: 170px;height: 124px;position: relative;right: 328px;text-align: right;padding-top: 37px;}

.sticky-detail{
  position: sticky;
  position: -webkit-sticky;
  top: 85px;
  overflow-y: scroll;
  overflow-x: hidden;
  bottom: 0;
}

@media(max-width:1200px){
  .hotline-phone{right: 266px}
  .sticky-detail{
    position: unset;
  }
}

.table-contents-pc {
  display: block;
}
.table-contents-mobile {
  display: none;
}
.header-pc {
  display: block;
}

.header-mobile {
  display: none;
  height: 50px;
  background: #0429B7;
}

.button-bar {
  padding-top: 17px;
  padding-left: 20px;
}

.icon-bar {
  color: #E0E0E0;
  padding-right: 10px;
}

.icon-bar > a {
  font-size: 18px;
  margin-right: 10px;
  color: #E0E0E0;
}

.icon-bar > a > i {
  padding-top: 17px;
}

.bar1, .bar2, .bar3 {
  width: 22px;
  height: 3px;
  background-color: #E0E0E0;
  margin-bottom: 4px;
  transition: 0.4s;
}

.bar2 {
  width: 18px;
}

.bar3 {
  width: 14px;
}

@media(max-width:1023px){
  .header-pc {
    display: none !important;
  }
  .top-header {
    display: none !important;
  }
  .header-mobile {
    display: flex;
  }
  .menu-mobile{display: block;}
  .menu-top{
    display: none;
    position: relative;
    z-index: 99;
    width: 300px;
    height: 275px;
    padding-right: 0!important;
  }
  nav>ul>li:nth-child(1),nav>ul>li:nth-child(2),nav>ul>li:nth-child(3),nav>ul>li:nth-child(4),nav>ul>li:nth-child(5),nav>ul>li:nth-child(6){
    height: 45px;
    width: 100%!important;
    text-align: left;
    line-height: 45px;
    padding-left: 5px!important;
  }

  nav ul ul{
    position: relative;
    left: 264px;
    top: -45px;
  }

}
.mt-28-custom {
    margin-top: 28px;
  }
@media(max-width:768px){
  .table-contents-pc {
    display: none;
  }
  .table-contents-mobile {
    display: block;
  }
  .mt-28-custom {
    margin-top: 0px;
  }
}

.sidenav {
  background-color: rgb(0 0 0 / 69%);
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  margin-left: 30%;
  font-size: 36px;
  color: #fff;
}

.list-menu-mobile {
  width: 86%;
  height: 100%;
  background-color: black;
}

.list-menu-header {
  width: 100%;
  height: 50px;
  background-color: #0429B7;
}

.list-menu-header > a {
  font-family: 'WorkSans-Medium';
  font-style: normal;
  font-weight: 700;
  font-size: 14px;
  line-height: 16px;
  color: #FFFFFF;
  text-align: center;
  overflow: hidden;
  white-space: nowrap;
  padding-top: 16px;
  text-decoration: none;
}

.sidenav {
  padding-top: 0px;
  display: flex;
}

.btn-close-mobile {
  height: 50px;
  width: 14%;
}

.sidenav-content {
  height: 100%;
  background-color: black;
}

.sidenav-content a, .dropdown-btn {
  padding: 15px;
  text-decoration: none;
  font-weight: 700;
  font-size: 14px;
  line-height: 16px;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  color: #FFFFFF;
  display: flex;
}



.sticky-detail::-webkit-scrollbar {
    display: none;
}

.dropdown-container {
  display: none;
  background-color: #2D2D2D;
  padding-left: 15px;
}

.dropdown-container-2 {
  background-color: #434343;
  margin-left: -15px;
  padding-left: 30px;
}

.fa-caret-right {
  padding-right: 24px;
  padding-left: 18px;
}

.hidden-custom {
  visibility: hidden;
}

.dropdown-btn > .hidden-custom {
  visibility: unset;
}

.sticky {
  position: fixed;
  top: 0;
  width: 100%;
  max-width: 1920px;
}

.sticky + .content {
  padding-top: 102px;
}

.top-header {
  background-color: #0429B7;
  display: flex;
}

</style>

<nav class="header-mobile">
  <div class="button-bar" onclick="openNav()">
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
  </div>
  <a href="{{ route('home') }}" style="margin: auto;"><img id="logo" src="{{ asset('/public/frontend/images/logo-megadom-1-no-padding-mobile.png') }}"></a>
  <div class="icon-bar">
    <a href="{{ route('lien_he') }}"><i class="fa fa-user" aria-hidden="true"></i></a>
  </div>
</nav>
<div id="mySidenav" class="sidenav">
  <div class="list-menu-mobile">
    <div class="list-menu-header">
      <a href="{{ route('lien_he') }}">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</a>
    </div>
    <div class="list-menu-body">
      <div class="sidenav-content">
        <a href="{{ route('home') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Trang chủ</span></a>

        <a class="dropdown-btn"><i class="fa fa-caret-right hidden-custom"></i><span>Về Megadom</span></a>
          <div class="dropdown-container">
            <a href="{{ route('introduce') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Giới thiệu</span></a>
            <a href="{{ route('doctor') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Đội ngũ bác sĩ</span></a>
          </div>

        <a class="dropdown-btn"><i class="fa fa-caret-right hidden-custom"></i><span>Thẩm mỹ nam khoa</span></a>

        <div class="dropdown-container">
          <a class="dropdown-btn"><i class="fa fa-caret-right hidden-custom"></i><span>Phẫu thuật tăng kích thước dương vật</span></a>
          <div class="dropdown-container dropdown-container-2">
            <a href="{{ route('2-1') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Làm to bằng Megaderm</span></a>
            <a href="{{ route('2-2') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Làm to bằng Silicon</span></a>
          </div>
          <a href="{{ route('2-6') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Phẫu thuật làm to quy đầu</span></a>
          <a href="{{ route('2-3') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Phẫu thuật kéo dài dương vật</span></a>
          <a href="{{ route('2-4') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Cắt bao quy đầu</span></a>
          <a href="{{ route('2-5') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Phẫu thuật làm to viền quy đầu</span></a>
          <a href="{{ route('2-7') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Phẫu thuật điều trị xuất tinh sớm</span></a>
          <a href="{{ route('2-8') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Dịch vụ khác</span></a>
        </div>

        <a class="dropdown-btn"><i class="fa fa-caret-right hidden-custom"></i><span>Bệnh lý nam khoa</span></a>
        <div class="dropdown-container">
          <a href="{{ route('3-1') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Rối loạn cương dương</span></a>
          <a href="{{ route('3-2') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Rối loạn xuất tinh</span></a>
          <a href="{{ route('3-3') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Bệnh lý tinh hoàn</span></a>
          <a href="{{ route('3-4') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Vô sinh - hiếm muộn</span></a>
          <a href="{{ route('3-7') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Tuyến tiền liệt</span></a>
          <a href="{{ route('3-5') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Mãn dục nam giới</span></a>
          <a href="{{ route('sexually_transmitted_diseases') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Bệnh lây qua đường tình dục</span></a>
        </div>
        <a href="{{ route('library') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Thư viện</span></a>

        <a class="dropdown-btn"><i class="fa fa-caret-right hidden-custom"></i><span onclick='openLink("{{ route('post') }}")'>Tin tức</span></a>
        <div class="dropdown-container">
          <a href="{{ route('hoi-dap-chuyen-gia') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Hỏi đáp chuyên gia</span></a>
          <a href="{{ route('thong-tin-suc-khoe') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Thông tin sức khỏe</span></a>
          <a href="{{ route('cau-chuyen-khach-hang') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Câu chuyện khách hàng</span></a>
          <a href="{{ route('newspaper') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Báo chí nói về Megadom</span></a>
          <a href="{{ route('clinic_activities') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Hoạt động phòng khám</span></a>
        </div>

        <a href="{{ route('lien_he') }}"><i class="fa fa-caret-right hidden-custom"></i><span>Liên hệ</span></a>
      </div>
    </div>
  </div>
  <div class="btn-close-mobile">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
</div>

<div class="top-header">
    <div class="img-logo">
      <a href="{{ route('home') }}"><img class="set-size-image" data-size-width="430" src="{{ asset('/public/frontend/images/logo-megadom-1-no-padding.png') }}"></a>
    </div>
    <div class="info-menu">
      <div style="text-align: right">
        <span class="hotline set-font-size" data-font-size="24">Hotline</span>
        <p class="phone-number set-font-size" data-font-size="24">096 154 4622</p>
      </div>
      <div class="order-calender set-font-size" data-font-size="22">
        <a style="color: #fff; text-decoration: none" target="_blank" href="https://drmegadom.com/lien-he">ĐẶT LỊCH KHÁM</a>
      </div>
    </div>
</div>
<nav class="header header-pc" id="myHeader">
  <nav class="dropdown-menu-top">
    <section class="menu-mobile"><section>≡</section></section>
    <ul class="menu-top set-font-size" data-font-size="18">
      <li>VỀ MEGADOM
        <ul class="ve-megadom">
          <li class="set-font-size" data-font-size="15"><a href="{{ route('introduce') }}">GIỚI THIỆU</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('doctor') }}">ĐỘI NGŨ BÁC SĨ</a></li>
        </ul>
      </li>
      <li>THẨM MỸ NAM KHOA
        <ul>
          <li class="set-font-size" data-font-size="15">PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT
            <ul>
              <li class="set-font-size" data-font-size="15"><a href="{{ route('2-1') }}">TẤM ĐỘN SINH HỌC MEGADERM</a></li>
              <li class="set-font-size" data-font-size="15"><a href="{{ route('2-2') }}">SILICON</a></li>
            </ul>
          </li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('2-6') }}">PHẪU THUẬT LÀM TO QUY ĐẦU</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('2-3') }}">PHẪU THUẬT KÉO DÀI DƯƠNG VẬT</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('2-4') }}">CẮT BAO QUY ĐẦU</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('2-5') }}">PHẪU THUẬT LÀM TO VIỀN QUY ĐẦU</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('2-7') }}">PHẪU THUẬT ĐIỀU TRỊ XUẤT TINH SỚM</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('2-8') }}">DỊCH VỤ KHÁC</a></li>
        </ul>
      </li>
      <li>BỆNH LÝ NAM KHOA
        <ul>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('3-1') }}">RỐI LOẠN CƯƠNG DƯƠNG</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('3-2') }}">RỐI LOẠN XUẤT TINH</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('3-3') }}">BỆNH LÝ TINH HOÀN</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('3-4') }}">VÔ SINH - HIẾM MUỘN</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('3-7') }}">TUYẾN TIỀN LIỆT</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('3-5') }}">MÃN DỤC NAM GIỚI</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('sexually_transmitted_diseases') }}">BỆNH LÂY QUA ĐƯỜNG TÌNH DỤC</a></li>
        </ul>
      </li>
      <li><a href="{{ route('library') }}">THƯ VIỆN</a>
      </li>
      <li><a href="{{ route('post') }}">TIN TỨC</a>
        <ul style="width: 150%;">
          <li class="set-font-size" data-font-size="15"><a href="{{ route('hoi-dap-chuyen-gia') }}">HỎI ĐÁP CHUYÊN GIA</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('thong-tin-suc-khoe') }}">THÔNG TIN SỨC KHỎE</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('cau-chuyen-khach-hang') }}">CÂU CHUYỆN KHÁCH HÀNG</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('newspaper') }}">BÁO CHÍ NÓI VỀ MEGADOM</a></li>
          <li class="set-font-size" data-font-size="15"><a href="{{ route('clinic_activities') }}">HOẠT ĐỘNG PHÒNG KHÁM</a></li>
        </ul>
      </li>
      <li><a href="{{ route('lien_he') }}">LIÊN HỆ</a></li>
    </ul>
  </nav>
</nav>