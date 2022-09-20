<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- favicon --}}

    <link rel="shortcut icon" href="{{ asset('img/logo.svg') }}" type="image/x-icon">
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
        <div class="main-service-con">
            <div class="d-flex justtify-content-between gap-3 selected-service">
                <div class="service-img-det">
                    <img src="{{ asset('img/construct-1.jpg') }}" width="100%;" alt="">
                </div>
                <div class="p-4 service-about-det">
                    <h1>Service Name</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas dicta delectus reiciendis
                        aliquam
                        dolore modi possimus vero iusto quod natus accusantium, molestiae asperiores tempore qui earum.
                        Quibusdam omnis hic quia.
                    </p>
                </div>
            </div>
            {{-- Services section --}}
            <section id="services">
                <div class="service wow fadeInUp">
                    <div class="">
                        <div class="section-header text-center">
                            <p>Other Services</p>
                            <h2>Include</h2>
                        </div>
                        <div class="row d-flex gap-4 justify-content-around flex-wrap">
                            <div class="service-card Service-1">
                                <div class="service-card-content">
                                    <h2 class="service-card-title">INDUSTRIAL INSTALLATIONS</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, dolore laudantium
                                        possimus,
                                        ad
                                        iure at magnam temporibus natus quisquam perspiciatis ipsum.</p>
                                    <a href="{{ route('service') }}" class="serivce-button">Learn More</a>
                                </div>
                            </div>
                            <div class="service-card Service-2">
                                <div class="service-card-content">
                                    <h2 class="service-card-title">GENERAL
                                        SUPPLIES</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, dolore laudantium
                                        possimus,
                                        ad
                                        iure at magnam temporibus natus quisquam perspiciatis ipsum.</p>
                                    <a href="{{ route('service') }}" class="serivce-button">Learn More</a>
                                </div>
                            </div>
                            <div class="service-card Service-3">
                                <div class="service-card-content">
                                    <h2 class="service-card-title">ENGINEERING SERVICES</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, dolore laudantium
                                        possimus,
                                        ad
                                        iure at magnam temporibus natus quisquam perspiciatis ipsum.</p>
                                    <a href="{{ route('service') }}" class="serivce-button">Learn More</a>
                                </div>
                            </div>
                            <div class="service-card Service-4">
                                <div class="service-card-content">
                                    <h2 class="service-card-title">OIL & GAS</h2>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Amet, dolore laudantium
                                        possimus,
                                        ad
                                        iure at magnam temporibus natus quisquam perspiciatis ipsum.</p>
                                    <a href="{{ route('service') }}" class="serivce-button">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- end of services section --}}

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
