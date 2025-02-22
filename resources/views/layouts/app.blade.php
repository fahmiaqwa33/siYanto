<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('src/assets/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('src/assets/images/favicon.png') }}" />
</head>
<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            @include('partials.sidebar') <!-- Pastikan Anda telah membuat partial sidebar -->
            @include('partials.navbar')  <!-- Pastikan Anda telah membuat partial navbar -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content') <!-- Tempat konten spesifik halaman -->
                </div>
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('src/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('src/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('src/assets/vendors/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('src/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('src/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('src/assets/js/template.js') }}"></script>
    <script src="{{ asset('src/assets/js/settings.js') }}"></script>
    <script src="{{ asset('src/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('src/assets/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{ asset('src/assets/js/jquery.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('src/assets/js/dashboard.js') }}"></script>
    <!-- <script src="assets/js/Chart.roundedBarCharts.js"></script> -->
    <!-- End custom js for this page-->
</body>
</html>
