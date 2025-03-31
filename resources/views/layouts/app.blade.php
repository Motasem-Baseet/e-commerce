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