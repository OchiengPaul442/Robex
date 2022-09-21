<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- favicon --}}

    <link rel="shortcut icon" href="{{ asset('img/logo-black.png') }}" type="image/x-icon">
    {{-- css link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('/css/loader.css') }}" type="text/css">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{ $title }}</title>

</head>

<body>
    <div class="wrapper">
        {{-- header section --}}
        @include('layouts.site.head')
        <div class="container">
            <div class="service-category" id="industry-section">
                <input type="hidden" value="{{ $service->id }}">
                <div>
                    <img src="{{ asset('assets/images/'.$service->image) }}" width="100%" height="450px" alt="">
                </div>
                <div class="p-4" style="width:100%;">
                    <h1>{{ $service->name }}</h1>
                    <ul>
                        {{ $service->details }}
                    </ul>
                </div>
            </div>         
        </div>
        {{-- footer section --}}
        @include('layouts.site.foot')
        @include('components.Button.scrolltotop')
    </div>
    {{-- loader --}}
    {{-- @include('components.loaders.main') --}}
    {{-- js links --}}
    <script src="{{ asset('/js/main.js') }}"></script>
    <script src="{{ asset('js/validations.js') }}"></script>
    <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('/lib/slick/slick.min.js') }}"></script>
</body>

</html>
