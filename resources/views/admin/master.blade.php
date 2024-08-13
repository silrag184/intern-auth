<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('back-end-assets') }}/assets/images/logoIST.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('back-end-assets') }}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('back-end-assets') }}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('back-end-assets') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('back-end-assets') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('back-end-assets') }}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{ asset('back-end-assets') }}/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('back-end-assets') }}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back-end-assets') }}/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{ asset('back-end-assets') }}/assets/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{ asset('back-end-assets') }}/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{ asset('back-end-assets') }}/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{ asset('back-end-assets') }}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{ asset('back-end-assets') }}/assets/css/header-colors.css" rel="stylesheet" />

    <title>Institute of Science and Technology</title>
</head>

<body class="">


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    @include('admin.include.header')
    <!--end top header-->

    <!--start sidebar -->
    @include('admin.include.left-sidebar')
    <!--start sidebar -->

    <!--start content-->
    <main class="page-content">
        @yield('content')
    </main>
    <!--end page main-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    @include('admin.include.right-sidebar ')
    <!--end switcher-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{ asset('back-end-assets') }}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{ asset('back-end-assets') }}/assets/js/jquery.min.js"></script>
<script src="{{ asset('back-end-assets') }}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{ asset('back-end-assets') }}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{ asset('back-end-assets') }}/assets/js/pace.min.js"></script>
<script src="{{ asset('back-end-assets') }}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{ asset('back-end-assets') }}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{ asset('back-end-assets') }}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!--app-->
<script src="{{ asset('back-end-assets') }}/assets/js/app.js"></script>
<script src="{{ asset('back-end-assets') }}/assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
</script>


</body>
</html>
