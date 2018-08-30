<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuat Thai</title> 
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/iconfonts/font-awesome/css/font-awesome.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.base.css') !!}">
    <link rel="stylesheet" href="{!! asset('vendors/css/vendor.bundle.addons.css') !!}">
    
</head>
<body>
        <div class='main'>
            <div class="flex-center position-ref full-height">
                <div class="container-scroller">
                        @include('admin.partial.header')
                        <div class="container-fluid page-body-wrapper">
                        @include('admin.partial.sidepanel')
                        @yield('content')
                        </div>
                </div>
            </div>
        </div>
</body>

    <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  
</html>