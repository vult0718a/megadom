<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="{{asset('public/favicon.ico')}}">

    <!-- Import title -->
    @yield('title')

    <!-- link icon -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">-->

    <!-- link bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/bootstrap/css/bootstrap.min.css')}}">

    <!-- link font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">

    <!-- link slider -->
    <link rel="stylesheet" href="{{asset('public/frontend/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/owlcarousel/assets/owl.theme.default.min.css')}}">

    <!-- link css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/style.css')}}">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css'>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Import style -->
    @yield('style')
</head>
<body style="max-width: 1920px; margin: auto;">
    <!-- Menu -->
    @include('user.layout.header')

    <!-- Content -->
    @yield('content')

    <!-- footer -->
    @include('user.layout.footer')
    <!-- siick slider -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{asset('public/frontend/owlcarousel/owl.carousel.min.js')}}"></script>
    
    <!-- javascrip -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'></script>

    <!-- js jquery bootstrap -->
    <script type="text/javascript" src="{{asset('public/frontend/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!--<script type="text/javascript" src="{{asset('public/frontend/js/script.js')}}"></script>-->
    <script>
      $(".menu-mobile").on("click",function(){
        $(".menu-top").slideToggle(300);
      });
      if($(document).width()>1023){
        $(".menu-top").show();
      }

      let widthScreen = $(this).width();
      let tile = Number(widthScreen) < Number(1920) ? Number((widthScreen/1920)).toFixed(5) : 1;
      resize(tile);

      $(window).resize(function(){
        let widthScreen = $(this).width();
        let tile = Number(widthScreen) < Number(1920) ? Number((widthScreen/1920)).toFixed(5) : 1;
        resize(tile);
      });

      function resize(tile) {
        $(".set-font-size").each(function() {
          let fontSize = Number($(this).data('font-size')*tile);
          $(this).css("font-size", fontSize + "px");
        });

        $(".set-width-block").each(function() {
          let widthBlock = Number($(this).data('width-block')*tile);
          $(this).css("width", widthBlock + "px");
        });

        $(".set-margin-top").each(function() {
          let widthBlock = Number($(this).data('margin-top')*tile);
          $(this).css("margin-top", widthBlock + "px");
        });

        $(".set-margin-left").each(function() {
          let widthBlock = Number($(this).data('margin-left')*tile);
          $(this).css("margin-left", widthBlock + "px");
        });

        $(".set-margin-right").each(function() {
          let widthBlock = Number($(this).data('margin-right')*tile);
          $(this).css("margin-right", widthBlock + "px");
        });

        $(".set-size-image").each(function() {
          let widthBlock = Number($(this).data('size-width')*tile);
          $(this).css("width", widthBlock + "px");
        });

        $(".set-padding-top").each(function() {
          let widthBlock = Number($(this).data('padding-top')*tile);
          $(this).css("padding-top", widthBlock + "px");
        });

        $(".set-margin-top").each(function() {
          let widthBlock = Number($(this).data('margin-top')*tile);
          $(this).css("margin-top", widthBlock + "px");
        });

        $(".set-height-block").each(function() {
          let heightBlock = Number($(this).data('height-block')*tile);
          $(this).css("height", heightBlock + "px");
        });

        $(".set-padding-button").each(function() {
          let paddingLeft = Number($(this).data('padding-left')*tile);
          let paddingTop = Number($(this).data('padding-top')*tile);
          $(this).css("padding", paddingTop + "px " + paddingLeft + "px");
        });

        $(".set-line-height").each(function() {
          let widthBlock = Number($(this).data('line-height')*tile);
          $(this).css("line-height", widthBlock + "px");
        });
      }

      window.onscroll = function() {
        myFunction();
      };
      let header = document.getElementById("myHeader");
      let sticky = header.offsetTop;
      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }

      function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }

      let dropdown = document.getElementsByClassName("dropdown-btn");
      let iy;

      for (iy = 0; iy < dropdown.length; iy++) {
        dropdown[iy].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          } else {
            dropdownContent.style.display = "block";
          }
        });
      }

      function openLink(url) {
        window.location.href = url;
      }
    </script>

    <!-- Import script -->
    @yield('script')
</body>
</html>