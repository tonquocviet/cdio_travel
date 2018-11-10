<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DirEngine - Free Bootstrap 4 Template by Colorlib</title>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="source/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="source/css/animate.css">
    
    <link rel="stylesheet" href="source/css/owl.carousel.min.css">
    <link rel="stylesheet" href="source/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="source/css/magnific-popup.css">

    <link rel="stylesheet" href="source/css/aos.css">

    <link rel="stylesheet" href="source/css/ionicons.min.css">

    <link rel="stylesheet" href="source/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="source/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="source/css/flaticon.css">
    <link rel="stylesheet" href="source/css/icomoon.css">
    <link rel="stylesheet" href="source/css/style.css">
    {{-- Thêm --}}
    <link rel="stylesheet" type="text/css" href="source_2/css/main.css">
    <link rel="stylesheet" type="text/css" href="source_2/css/util.css">
    {{-- Thêm --}}
  </head>
  <body>

    @include('header')

    <!-- END nav -->
    @yield('content')

    @include('footer')
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="source/js/jquery.min.js"></script>
  <script src="source/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="source/js/popper.min.js"></script>
  <script src="source/js/bootstrap.min.js"></script>
  <script src="source/js/jquery.easing.1.3.js"></script>
  <script src="source/js/jquery.waypoints.min.js"></script>
  <script src="source/js/jquery.stellar.min.js"></script>
  <script src="source/js/owl.carousel.min.js"></script>
  <script src="source/js/jquery.magnific-popup.min.js"></script>
  <script src="source/js/aos.js"></script>
  <script src="source/js/jquery.animateNumber.min.js"></script>
  <script src="source/js/bootstrap-datepicker.js"></script>
  <script src="source/js/jquery.timepicker.min.js"></script>
  <script src="source/js/scrollax.min.js"></script>
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script> --}}
  <script src="source/js/google-map.js"></script>
  <script src="source/js/main.js"></script>
{{-- <script>
  $(document).ready(function(){
  $('ul li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});
});
</script> --}}
  {{-- CHECKOUT --}}
{{--   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
    @yield('script')
  </body>
</html>