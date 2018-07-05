<!DOCTYPE html>
<html lang="en">
    
<head>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="shortcut icon" href="{{ asset('assets/theme/html/favicon.ico') }}" />

  <!-- Fonts START -->
  {{ Html::style('assets/googleapis-font.css') }}
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <!-- <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"> -->
  {{ Html::style('assets/plugins/font-awesome/css/font-awesome.min.css') }}
  <!-- <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  {{ Html::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <!-- <link href="assets/pages/css/animate.css" rel="stylesheet"> -->
  {{ Html::style('assets/pages/css/animate.css') }}
  <!-- <link href="assets/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet"> -->
  {{ Html::style('assets/plugins/fancybox/source/jquery.fancybox.css') }}
  <!-- <link href="assets/plugins/owl.carousel/assets/owl.carousel.css" rel="stylesheet"> -->
  {{ Html::style('assets//plugins/owl.carousel/assets/owl.carousel.css') }}
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <!-- <link href="assets/corporate/css/style.css" rel="stylesheet"> -->
  {{ Html::style('assets/style.css') }}

  <!-- <link href="assets/corporate/css/custom.css" rel="stylesheet"> -->
  {{ Html::style('assets/custom.css') }}
  <!-- Theme styles END -->
  
  <!-- jquery confirm -->
  {{ Html::style('assets/js/jquery-confirm-master/dist/jquery-confirm.min.css') }}
</head>

<!-- Body BEGIN -->
<body class="p-pembangunan">
     
    <!-- BEGIN HEADER -->
        @include('header')
    <!-- END HEADER -->

    <!-- BEGIN MAIN CONTENT -->
    <div class="main">
        <div>
            <div class="main-content">
                @yield('tabs')
            </div>
        </div>
    </div>
    <!-- END MAIN -->

    <!-- BEGIN FOOTER -->
        @include('footer')
    <!-- END FOOTER --> 

    <button onclick="toggleFullScreen(this);" id="btn-fullscreen"><i class="fa fa-expand icon"></i></button>


    <!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) --> 
    <!-- <script src="assets/plugins/jquery.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/plugins/jquery.min.js') }}
    <!-- <script src="assets/plugins/jquery-migrate.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/plugins/jquery-migrate.min.js') }}
    <!-- <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> -->
    {{ Html::script('assets/plugins/bootstrap/js/bootstrap.min.js') }}
    {{ Html::script('assets/js/jquery-confirm-master/dist/jquery-confirm.min.js') }}
    <!-- END CORE PLUGINS -->

    {{ Html::script('assets/js/full.js') }}


    @yield('scripts')
</body>
<!-- END BODY -->
</html>