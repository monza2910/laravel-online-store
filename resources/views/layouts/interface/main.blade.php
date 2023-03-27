<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets/interface/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/interface/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/interface/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/interface/css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/interface/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/interface/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/interface/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/interface/css/style.css')}}" type="text/css">
</head>
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    @include('layouts.interface.header')
    <!-- Header Section End -->

    {{-- Content --}}
    @yield('content')
    {{-- End Content --}}

    <!-- Js Plugins -->
    <script src="{{asset('assets/interface/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/interface/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/interface/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/interface/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/interface/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/interface/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/interface/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/interface/js/mixitup.min.js')}}"></script>
    <script src="{{asset('assets/interface/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/interface/js/main.js')}}"></script>
</body>

</html>
