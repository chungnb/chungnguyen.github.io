<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('../template/vendors/feather/feather.css') }}"> 
    <link rel="stylesheet" href="{{ asset('../template/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../template/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('../template/vendors/typicons/typicons.css') }}">
    <link rel="stylesheet" href="{{ asset('../template/vendors/simple-line-icons/css/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('../template/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('../template/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../template/js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('../template/css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('../template/images/favicon.png') }}" />
</head>
<body>
    
    @yield('content')
    
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
    </footer>
    <!-- /.global_footer -->

   <!-- plugins:js -->
<script src="{{ asset('../template/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('../template.vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('../template/vendors/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('../template/vendors/progressbar.js/progressbar.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('../template/js/off-canvas.js') }}"></script>
<script src="{{ asset('../template/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('../template/js/template.js') }}"></script>
<script src="{{ asset('../template/js/settings.js') }}"></script>
<script src="{{ asset('../template/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('../template/js/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ asset('../template/js/dashboard.js') }}"></script>
<!-- <script src="../../js/Chart.roundedBarCharts.js"></script> -->
</body>
</html>