<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.bagianAdmin.headerAdmin')
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.bagianAdmin.sidebarAdmin')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">
                @include('admin.bagianAdmin.navbarAdmin')

                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>

            @include('admin.bagianAdmin.footerAdmin')

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('admin.bagianAdmin.logout-modal')

    <!-- JS Scripts -->
    <script src="{{ asset('assets/adminAssets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/adminAssets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/adminAssets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('assets/adminAssets/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('assets/adminAssets/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/adminAssets/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/adminAssets/js/demo/chart-pie-demo.js') }}"></script>

</body>
</html>