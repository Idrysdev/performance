
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NobleUI Responsive Bootstrap 4 Dashboard Template</title>
    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/core/core.css') }}">
    <!-- endinject -->
  <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather-font/css/iconfont.css') }}">
    <!-- endinject -->
  <!-- Layout styles -->  
    <link rel="stylesheet" href="{{ asset('assets/css/demo_1/style.css') }}">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
  <!-- Global site tag (gtag.js) - Google Analytics start -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146586338-1');
  </script>
  <!-- Google Analytics end -->
  @yield('styles')
</head>
<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
           @include('partials._sidebar')
        <!-- partial -->
    
        <div class="page-wrapper">
                    
            <!-- partial:partials/_navbar.html -->
           @include('partials._navbar')
            <!-- partial -->

            <div class="page-content">
                {{-- <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                      <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>
                </div> --}}
                @yield('content')
            </div>

            <!-- partial:partials/_footer.html -->
           @include('partials._footer')
            <!-- partial -->
        
        </div>
    </div>

    <!-- core:js -->
    <script src="{{ asset('assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/vendors/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/template.js') }}"></script>
    <!-- endinject -->
  <!-- custom js for this page -->
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
    <!-- end custom js for this page -->
    @yield('scripts')
</body>
</html>    
<!-- Localized -->