<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- css link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- lib css --}}
    <link rel="stylesheet" href="{{ asset('lib/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/lightbox/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/slick/slick-theme.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <div class="wrapper">
        {{-- header section --}}
        @include('layouts.head')
        {{-- main content --}}
        @yield('content')
        {{-- footer section --}}
        @include('layouts.foot')
        {{-- back to top button --}}
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    {{-- js links --}}
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/slick/slick.min.js') }}"></script>
</body>

</html>