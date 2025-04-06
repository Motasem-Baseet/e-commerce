<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/simplebar.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Overpass:wght@100;200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Feather Icons CSS (using local file as per your structure) -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/feather.css') }}">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/uppy.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/jquery.steps.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/app-dark.css') }}" id="darkTheme" disabled>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- Font Awesome CDN (Latest) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    @stack('styles')
</head>
<body class="vertical light">
    <div class="wrapper">
        @include('partials.topnav')
        @include('partials.sidebar')
        
        <main role="main" class="main-content">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('admin/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.stickOnScroll.js') }}"></script>
    <script src="{{ asset('admin/assets/js/tinycolor-min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/config.js') }}"></script>
    <script src="{{ asset('admin/assets/js/d3.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/topojson.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datamaps.all.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datamaps-zoomto.js') }}"></script>
    <script src="{{ asset('admin/assets/js/datamaps.custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/Chart.min.js') }}"></script>
    <script>
        Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
        Chart.defaults.global.defaultFontColor = colors.mutedColor;
    </script>
    <script src="{{ asset('admin/assets/js/gauge.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/apexcharts.custom.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/uppy.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/quill.min.js') }}"></script>
    <!-- DataTables JS -->
    <script src="{{ asset('admin/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/apps.js') }}"></script>
    <!-- Feather Icons JS (local, if included in your template) -->
    <script src="{{ asset('admin/assets/js/feather.min.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js" integrity="sha512-b+nQTCdtTBIRIbraqNEwsjB6UvL3UEMkXnhzd8awtCYh0Kcsjl9uEgwVFVbhoj3uu1DO1ZMacNvLoyJJiNfcvg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap JS & Popper.js (required for Bootstrap's interactive components like modals) -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            feather.replace();
        });
    </script>

    @include('partials.scripts')
    @stack('scripts')

    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-56159088-1');
    </script>
</body>
</html>
</body>
</html>