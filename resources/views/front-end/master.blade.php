<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Institute of Science and Technology</title>
    <link rel="icon" href="{{ asset('back-end-assets') }}/assets/images/logoIST.png" type="image/png" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('front-end-assets')}}/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{asset('front-end-assets')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('front-end-assets')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('front-end-assets')}}/css/fresco.css" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{asset('front-end-assets')}}/css/style.css" rel="stylesheet">
</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

@include('front-end.include.header')

@yield('content')

@include('front-end.include.footer')


<!-- Back to Top -->
<a href="#" class="btn btn-warning rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="{{asset('front-end-assets')}}/js/vendor/jquery-3.2.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('front-end-assets')}}/lib/wow/wow.min.js"></script>
<script src="{{asset('front-end-assets')}}/lib/easing/easing.min.js"></script>
<script src="{{asset('front-end-assets')}}/lib/waypoints/waypoints.min.js"></script>
<script src="{{asset('front-end-assets')}}/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="{{asset('front-end-assets')}}/js/main.js"></script>
<script src="{{asset('front-end-assets')}}/js/fresco.min.js"></script>
</body>

</html>
