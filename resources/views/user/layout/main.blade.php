<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Import title -->
    @yield('title')

    <!-- link icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- link font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- link slider -->
    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css'>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Import style -->
    @yield('style')
</head>
<body>
    <!-- Menu -->
    <!-- @include('user.layout.header') -->

    <!-- Content -->
    @yield('content')

    <!-- footer -->
    <!-- @include('user.layout.footer') -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- js jquery bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
    <!-- siick slider -->
    <script type="text/javascript" src="/frontend/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- javascrip -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'></script>
    <script>
        $(document).ready(function () {
            var mql = window.matchMedia("screen and (max-width: 767px)")
            mediaqueryresponse(mql)
            mql.addListener(mediaqueryresponse)

            function mediaqueryresponse(mql) {
                if (mql.matches) {
                    $('#menu-top').removeClass('in');
                } else {
                    $('#menu-top').addClass('in');
                }
            }

            if ($('.previous').hasClass("disabled")) {
                $('.previous').css({ display: "none" });
            }

            $('.number-page').each(function() {
                if (!$(this).hasClass("active")) {
                    $(this).css({ display: "none" });
                }
            });

            if ($('.number-page.active').next().hasClass("number-page")) {
                $('.number-page.active').next().removeAttr('style');
            }

            if ($('.number-page.active').prev().hasClass("number-page")) {
                $('.number-page.active').prev().removeAttr('style');
            }
        });
    </script>

    <!-- Import script -->
    @yield('script')
</body>
</html>