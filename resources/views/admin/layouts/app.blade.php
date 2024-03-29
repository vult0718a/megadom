<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('public/admins/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('public/admins/assets/img/favicon.png') }}">
  @yield('title')
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <link href="{{ asset('public/admins/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admins/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="{{ asset('public/admins/assets/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
  <style>
    .cke_contents {
      height: 700px !important;
    }
  </style>
  @yield('style')
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ route('home') }}">
        <h3 class="ms-1 font-weight-bold text-white"><i class="fa fa-home me-sm-1"></i>Trang chủ</h3>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white @if(Route::is('admin') || Route::is('admin.create') || Route::is('admin.show')) active bg-gradient-primary @endif" href="{{ route('admin') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Admin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if(Route::is('admin.contact') || Route::is('admin.contact.show')) active bg-gradient-primary @endif" href="{{ route('admin.contact') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">article</i>
            </div>
            <span class="nav-link-text ms-1">Đặt lịch tư vấn</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if(Route::is('admin.info') || Route::is('admin.info.show')) active bg-gradient-primary @endif" href="{{ route('admin.info') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">store</i>
            </div>
            <span class="nav-link-text ms-1">Thông tin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if(Route::is('admin.category') || Route::is('admin.category.create')) active bg-gradient-primary @endif" href="{{ route('admin.category') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Danh mục</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if(Route::is('admin.testimonial') || Route::is('admin.testimonial.create')) active bg-gradient-primary @endif" href="{{ route('admin.testimonial') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">image</i>
            </div>
            <span class="nav-link-text ms-1">Lời chứng thực</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if(Route::is('admin.image_video') || Route::is('admin.image_video.create')) active bg-gradient-primary @endif" href="{{ route('admin.image_video') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">image</i>
            </div>
            <span class="nav-link-text ms-1">Thư viện hình ảnh</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if(Route::is('admin.post') || Route::is('admin.post.create') || Route::is('admin.post.show')) active bg-gradient-primary @endif" href="{{ route('admin.post') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Tin tức</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white @if(Route::is('admin.newspaper') || Route::is('admin.newspaper.create') || Route::is('admin.newspaper.show')) active bg-gradient-primary @endif" href="{{ route('admin.newspaper') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Báo chí về Megadom</span>
          </a>
        </li>
      
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Tìm kiếm...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body font-weight-bold p-0">
                <i class="fa fa-user me-sm-1 fixed-plugin-button-nav cursor-pointer"></i>
                <span class="d-sm-inline d-none fixed-plugin-button cursor-pointer">{{ Auth::user()->name }}</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Content -->
    @yield('content')
    <!-- End content -->
  </main>
  <div class="fixed-plugin">
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Thông tin cá nhân và cài đặt</h5>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <div class="mt-3">
          <h6 class="mb-0">Họ tên: </h6>
          <p class="text-sm">{{ Auth::user()->name }}</p>
        </div>
        <div class="mt-3">
          <h6 class="mb-0">Email: </h6>
          <p class="text-sm">{{ Auth::user()->email }}</p>
        </div>
        <hr class="horizontal dark my-sm-4">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Màu tab menu</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Loại tab menu</h6>
          <p class="text-sm">Chọn giữa 2 loại tab menu khác nhau.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changeEmail">
          Đổi email
        </button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#changePass">
          Đổi mật khẩu
        </button>
        <div class="mt-2 d-flex">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-primary btn-sm mb-0 me-3">Đăng xuất</button>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Thay đổi email -->
  <div class="modal fade" id="changeEmail" tabindex="-1" aria-labelledby="changeEmailLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changeEmailLabel">Thay đổi email</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.change-email') }}" method="POST">
              @csrf
              <input style="border: 1px solid #d2d6da;" type="email" class="form-control" id="email" name="email" placeholder="Nhập email mới">
              @error('email')
                  <span class="mt-4 text-sm text-center" style="color:red">
                      <strong>{{ $message }}</strong>
                  </span><br>
              @enderror
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Thay đổi mật khẩu -->
  <div class="modal fade" id="changePass" tabindex="-1" aria-labelledby="changePassLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changePasslLabel">Thay đổi mật khẩu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.change-password') }}" method="POST">
              @csrf
              <input style="border: 1px solid #d2d6da;" type="password" class="form-control" id="password" name="password" placeholder="Nhập password mới">
              @error('password')
                  <span class="mt-4 text-sm text-center" style="color:red">
                      <strong>{{ $message }}</strong>
                  </span><br>
              @enderror
              <br><input style="border: 1px solid #d2d6da;" type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Nhập lại password mới">
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đóng</button>
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="{{ asset('public/admins/assets/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('public/admins/assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/admins/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('public/admins/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ asset('public/admins/assets/js/material-dashboard.min.js?v=3.0.4') }}"></script>
  <script src="{{ asset('public/ckeditor/ckeditor.js') }}"></script>
  @yield('script')
</body>

</html>