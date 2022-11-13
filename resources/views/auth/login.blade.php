<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admins/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('admins/assets/img/favicon.png') }}">
  <title>
    Đăng nhập admin
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('admins/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('admins/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('admins/assets/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Đăng nhập</h4>
                </div>
              </div>
              <div class="card-body">
                <form class="text-start" method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="input-group input-group-outline my-3">
                    <input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required name="email">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                  </div>
                    @error('email')
                        <p class="mt-4 text-sm text-center" style="color:red">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                    @error('password')
                        <p class="mt-4 text-sm text-center" style="color:red">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                    @if(session('erro_login'))
                        <p class="mt-4 text-sm text-center" style="color:red">
                            <strong>{{ session('erro_login') }}</strong>
                        </p>
                    @endif
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Login</button>
                  </div>
                  <a href="{{ route('home') }}" class="text-primary text-gradient">Về trang chủ</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('admins/assets/js/core/bootstrap.min.js') }}"></script>
</body>

</html>