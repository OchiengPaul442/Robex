<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    {{-- css link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- main css --}}
    <link rel="stylesheet" href="{{ asset('/css/loader.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
    {{-- lib css --}}
    <link rel="stylesheet" href="{{ asset('/lib/flaticon/font/flaticon.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/lib/animate/animate.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/lib/owlcarousel/assets/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/lib/lightbox/css/lightbox.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/lib/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('/lib/slick/slick-theme.css') }}" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <title>{{ $title }}</title>
</head>

<body>
    <div class="wrapper">
        {{-- header section --}}
        @include('layouts.site.head')
        {{-- main content --}}
        @include('components.carousels.home')
        <!-- Feature Start-->
        <div class="feature wow fadeInUp" data-wow-delay="0.1s">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-worker"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Expert Worker</h3>
                                <x-carbon-checkmark-outline style="width: 50px; color:orange;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-building"></i>
                            </div>
                            <div class="feature-text">
                                <h3>Quality Work</h3>
                                <x-carbon-checkmark-outline style="width: 50px; color:orange;" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-call"></i>
                            </div>
                            <div class="feature-text">
                                <h3>24/7 Support</h3>
                                <x-carbon-checkmark-outline style="width: 50px; color:orange;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->

        {{-- about section --}}
        <section id="about">
            <div id="about" class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="{{ asset('img/Premium Photo Future building construction engineering project_.jpg') }}"
                                    alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <h2 class="fw-bold">Cube Engineering</h2>
                                <small>SERVE YOU BETTER</small>
                                <div class="Line mt-4 mb-4"></div>
                                <p>About Us</p>
                            </div>
                            <div class="about-text">
                                <p>
                                    Cube Engineering and General Supplies Ltd is a multi-disciplinary engineering firm
                                    duly
                                    registered as a limited Company with an aim to provide quality services in the
                                    industry.
                                    Cube Engineering was founded on 7th March 2021 and incorporated on 14th July 2021 in
                                    Kampala
                                    Uganda.
                                    <br>
                                    <br>
                                    Since its inception it has been at the forefront of providing a wide range of
                                    engineering services ranging from routine maintenance, Heavy duty machinery
                                    overhauls to
                                    turn key project management, implementation and Execution. Cube Engineering’s
                                    expertise
                                    has been developed from former employees of different organizations who have been
                                    involved in execution of number of construction, mechanical and electrical projects.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Begin About Section --}}
            <div class="About_sec wow fadeInUp" id="about" data-wow-delay="0.2s">
                <div class="Center">
                    <h3>More about us</h3>
                    <div class="Line mt-4"></div>
                    {{-- Begin Tab side --}}
                    <div class="Tabside">
                        <ul>
                            <li><a href="#" class="tabLink activeLink" id="cont-1">Mission</a></li>
                            <li><a href="#" class="tabLink" id="cont-2">vision</a></li>
                            <li><a href="#" class="tabLink" id="cont-3">Values</a></li>
                        </ul>
                        <div class="clear"></div>
                        <div class="tabcontent" id="cont-1-1">
                            <div class="TabImage">
                                <div class="img1">
                                    <figure><img src="{{ asset('img/vision.jpg') }}" alt="image"></figure>
                                </div>
                                <div class="img2">
                                    <figure><img src="{{ asset('img/tech1.jpg') }}" alt="image"></figure>
                                </div>
                            </div>
                            <div class="Description">
                                <h3>Our Mission</h3>
                                <p>
                                    To be the leader in offering the highest degree of technical and operational
                                    efficiency for
                                    our
                                    clients through provision of high quality engineering work.
                                </p>
                            </div>
                        </div>
                        <div class="tabcontent hide" id="cont-2-1">
                            <div class="TabImage">
                                <div class="img1">
                                    <figure><img src="{{ asset('img/vision.jpg') }}" alt="image"></figure>
                                </div>
                                <div class="img2">
                                    <figure><img src="{{ asset('img/tect2.jpg') }}" alt="image"></figure>
                                </div>
                            </div>
                            <div class="Description">
                                <h3>Our Vision</h3>
                                <p>
                                    To be the leading Services Provider in the engineering sector with high focus on
                                    Customer
                                    Satisfaction
                                </p>
                            </div>
                        </div>
                        <div class="tabcontent hide" id="cont-3-1">
                            <div class="TabImage">
                                <div class="img1">
                                    <figure><img src="{{ asset('img/vision.jpg') }}" alt="image"></figure>
                                </div>
                                <div class="img2">
                                    <figure><img src="{{ asset('img/tech3.jpg') }}" alt="image">
                                    </figure>
                                </div>
                            </div>
                            <div class="Description">
                                <h3>Our Core Values</h3>
                                <p><span>Integrity:</span> Honesty and strong moral principles.</p>
                                <p><span>Customer Satisfaction:</span> Exceed customer expectations.</p>
                                <p><span>Professionalism:</span> Skill, good judgement and individual adherence to the
                                    set
                                    standards.</p>
                                <p><span>Innovation:</span> Take pro-active steps to drive performance.</p>
                                <p><span>Teamwork:</span> Collaborate with others to achieve company goals.</p>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    {{-- End Tab Side --}}
                </div>
            </div>
        </section>
        {{-- end of about section --}}

        {{-- Facts section --}}
        <section id="facts">
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">16</h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">29</h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">29</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <span class="d-flex gap-2">
                                            <h2 data-toggle="counter-up">10</h2><span class="fs-3">+</span>
                                        </span>
                                        <p>Running Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of facts section --}}

        {{-- Services section --}}
        <section id="services">
            <div class="service wow fadeInUp">
                <div class="section-header text-center">
                    <p>Our Services</p>
                    <h2>Services We Provide</h2>
                </div>
                <div class="row d-flex gap-4 justify-content-around flex-wrap">
                    @foreach ($services as $service)
                        <div class="service-card">
                            <input type="hidden" value="{{ $service->id }}">
                            <img src="{{ asset('img/supplies.jpg') }}" alt="">
                            <div class="service-card-content">
                                <h2 class="service-card-title text-capitalize">{{ $service->name }}</h2>
                                <a href="{{ route('service.show', $service->id) }}" class="serivce-button">Learn
                                    More</a>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="service-card">
                        <img src="{{ asset('img/industry.jpg') }}" alt="">
                        <div class="service-card-content">
                            <h2 class="service-card-title">INDUSTRIAL INSTALLATIONS</h2>
                            <a href="" class="serivce-button">Learn More</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="{{ asset('img/supplies.jpg') }}" alt="">
                        <div class="service-card-content">
                            <h2 class="service-card-title">GENERAL
                                SUPPLIES</h2>
                            <a href="" class="serivce-button">Learn More</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="{{ asset('img/electrical.jpg') }}" alt="">
                        <div class="service-card-content">
                            <h2 class="service-card-title">ENGINEERING SERVICES</h2>
                            <a href="" class="serivce-button">Learn More</a>
                        </div>
                    </div>
                    <div class="service-card">
                        <img src="{{ asset('img/oiland gas.jpg') }}" alt="">
                        <div class="service-card-content">
                            <h2 class="service-card-title">OIL & GAS</h2>
                            <a href="" class="serivce-button">Learn More</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        {{-- end of services section --}}

        {{-- portfolio section --}}
        <section id="portfolio" class="wow fadeIn">
            <div class="section-header text-center">
                <p>Projects</p>
                <h2>Supported projects</h2>
            </div>
            <div class="container-fluid bg-portfolio py-5">
                <div class="container py-5">
                    <div class="row m-0 portfolio-container">
                        {{-- @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                                <div class="position-relative overflow-hidden">
                                    <div class="portfolio-img">
                                        <img class="img-fluid w-100"
                                            src="{{ asset('/storage/images/'.$project->image) }}" alt="">
                                    </div>
                                    <div class="portfolio-text">
                                        <h4 class="font-weight-bold mb-4">{{ $project->projectname }}</h4>
                                        <div class="d-flex flex-column align-items-center justify-content-center">
                                            <p class="text-center" class="text-center">{{ $project->description }}</p>
                                            </p>
                                            <a class="btn btn-sm btn-secondary m-1" href="{{ asset('assets/images/' . $project->image) }}"
                                                data-lightbox="portfolio">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="img/project2.jpg" alt="">
                                </div>
                                <div class="portfolio-text">
                                    <h4 class="font-weight-bold mb-4">Industrial Installations</h4>
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <p class="text-center">Industrial Installations (electrical and mechanical works).</p>
                                        <a class="btn btn-sm btn-secondary m-1" href="img/project2.jpg"
                                            data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="img/aircon.jpg" alt="">
                                </div>
                                <div class="portfolio-text">
                                    <h4 class="font-weight-bold mb-4">Air Conditioning</h4>
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <p class="text-center">Installation of Air Conditioning Systems.</p>
                                        <a class="btn btn-sm btn-secondary m-1" href="img/aircon.jpg"
                                            data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                                </div>
                                <div class="portfolio-text">
                                    <h4 class="font-weight-bold mb-4">Apartment project</h4>
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <p class="text-center">Supplied lifting belts to the Construction site at old Kampala.</p>
                                        <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-3.jpg"
                                            data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                                </div>
                                <div class="portfolio-text">
                                    <h4 class="font-weight-bold mb-4">Housing Project</h4>
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <p class="text-center">Supplied bearings for the construction of this lovely home at Entebbe.</p>
                                        <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-4.jpg"
                                            data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                                </div>
                                <div class="portfolio-text">
                                    <h4 class="font-weight-bold mb-4">Housing Project</h4>
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <p class="text-center">Supplied a number of solar warning lights to this lovely home located at Birongo off the express high way.</p>
                                        <a class="btn btn-sm btn-secondary m-1" href="img/portfolio-5.jpg"
                                            data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 p-0 portfolio-item">
                            <div class="position-relative overflow-hidden">
                                <div class="portfolio-img">
                                    <img class="img-fluid w-100" src="img/project1.jpg" alt="">
                                </div>
                                <div class="portfolio-text">
                                    <h4 class="font-weight-bold mb-4">Electrical Wiring</h4>
                                    <div class="d-flex flex-column align-items-center justify-content-center">
                                        <p class="text-center">Electrical Wiring (Residentials, Apartments and Storeyed buildings).</p>
                                        <a class="btn btn-sm btn-secondary m-1" href="img/project1.jpg"
                                            data-lightbox="portfolio">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of projects section --}}

        {{-- FAQs section --}}
        <section id="FAQs">
            <div class="faqs">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Frequently Asked Question</p>
                        <h2>You May Ask</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="accordion-1">
                                @foreach ($FAQs->slice(0,5) as $FAQ) 
                                    <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse"
                                                href="#collapse{{ $FAQ->id }}">
                                                {{ $FAQ->question }}
                                            </a>
                                        </div>
                                        <div id="collapse{{ $FAQ->id }}" class="collapse"
                                            data-parent="#accordion-1">
                                            <div class="card-body">
                                                {{ $FAQ->answer }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                {{-- <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                            Why should I get professional help for construction?
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Construction is a combination of multiple service elements. it involves
                                            careful
                                            planning of the usage of hundreds of building materials and services
                                            provided by
                                            multiple individual contractors. The qualtiy of the construction is actually
                                            dependent on all these major and minor factors, due to which there has to be
                                            a
                                            clear-cut planned approach in the usuage of these elements.
                                            A good contractor, with his expertise in building homes, takes utmost care
                                            in
                                            carefully purchasing the construction materials and professionally combines
                                            them to
                                            create the best possible house that suits your dream and budget.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                            What are your fees? </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Cube Engineering being a Ugandan Contractor, there are no hidden charges
                                            associated
                                            with our services. The construction rate or the cost that would be incurred
                                            for the
                                            construction would be agreed upon at the outset.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                            How can I get in touch with you?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            We are always available through our website, Facebook and twitter pages.
                                            In addition, our services associates would handle your calls from 8:00 AM -
                                            5:00 PM
                                            Monday - Friday.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                            How do you ensure that my engineering data is kept confidential?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            We follow a careful procedure to take care that none of your confidential
                                            data is
                                            published, disclosed, distributed, or sold. Additionally, we make our
                                            employees sign
                                            a non-disclosure agreement during the hiring process, assuring further peace
                                            of
                                            mind.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                            What processes are undertaken to ensure the quality of engineering services?
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            We follow strict quality assurance processes to make sure that we deliver
                                            high
                                            quality engineering services to our customers.
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="accordion-2">
                                @foreach ($FAQs->slice(5,10) as $FAQ)
                                    <div class="card wow fadeInRight" data-wow-delay="0.{{ $FAQ->id }}s">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse"
                                                href="#collapse{{ $FAQ->id }}">
                                                {{ $FAQ->question }}
                                            </a>
                                        </div>
                                        <div id="collapse{{ $FAQ->id }}" class="collapse"
                                            data-parent="#accordion-2">
                                            <div class="card-body">
                                                {{ $FAQ->answer }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                            What is the project turnaround time?
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            We guarantee a turnaround time of 24 hours in most cases. However, the
                                            project
                                            turnaround time will also depend on project complexity, technology used, and
                                            the
                                            skills required to achieve quality results.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                            How much experience does Flatworld have in providing engineering services?
                                        </a>
                                    </div>
                                    <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            We have an experience of more than (2 years), and have been serving
                                            customers around
                                            Uganda through our multiple delivery centers.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                            Will we collaborate on a project?
                                        </a>
                                    </div>
                                    <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            Yes, if a particular project is also on our road-map we would love to
                                            collaborate so
                                            that we can both achieve our goals quicker.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.4s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                            What is product development?
                                        </a>
                                    </div>
                                    <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            We use this term to describe the process of bringing ideas from first
                                            concept all
                                            the way into production. Every new product starts as an idea which grows and
                                            morphs
                                            and expands as it develops into a final product. Some products are sold at
                                            stores,
                                            some solve specific problems, some stay in a factory to make production
                                            easier.
                                            These all start with ideas and end up as useful things.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.5s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                            Is consultancy your main line of business?
                                        </a>
                                    </div>
                                    <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            Absolutely No, We design a lot of our own product, but our specialist skills
                                            have
                                            value and therefore we sell our expertise as well as our own products.
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of FAQs --}}

        {{-- Testimonial section --}}
        <section id="testimonials">
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                <div class="section-header text-center">
                    <p>Testimonials</p>
                    <h2 style="color: white">From Our Customers</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                {{-- @foreach ($testimonials as $testimonial)
                                    <div class="slider-nav"><img
                                            src="{{ asset('/storage/images/'.$testimonial->profileimage) }}"
                                            alt="Testimonial">
                                    </div>
                                @endforeach --}}
                                <div class="slider-nav"><img src="{{ asset('img/pro1.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="slider-nav"><img src="{{ asset('img/pro2.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="slider-nav"><img src="{{ asset('img/pro3.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="slider-nav"><img src="{{ asset('img/pro4.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="slider-nav"><img src="{{ asset('img/pro1.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="slider-nav"><img src="{{ asset('img/pro2.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="slider-nav"><img src="{{ asset('img/pro3.jpg') }}" alt="Testimonial">
                                </div>
                                <div class="slider-nav"><img src="{{ asset('img/pro4.jpg') }}" alt="Testimonial">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                {{-- @foreach ($testimonials as $testimonial)
                                    <div class="slider-item">
                                        <h3>{{ $testimonial->customername }}</h3>
                                        <h4>{{ $testimonial->occupation }}</h4>
                                        <p>{{ $testimonial->comments }}
                                        </p>
                                    </div>
                                @endforeach --}}
                                <div class="slider-item">
                                    <h3>John Okema</h3>
                                    <h4>Business owner</h4>
                                    <p>Cube Engineering is prompt to responding to their client’s requests, especially
                                        during time-crunching situations.
                                    </p>
                                </div>
                                <div class="slider-item">
                                    <h3>Derrick Marques</h3>
                                    <h4>Civil Engineer</h4>
                                    <p>From the beginning, Cube Engineering has been a good partner to work with. They
                                        have committed the resources, the time and the talent to make the relationship a
                                        win-win. They have been committed to serving our needs and to improving the
                                        quality and scope of their expertise.
                                    </p>
                                </div>
                                <div class="slider-item">
                                    <h3>Stella kyankyu</h3>
                                    <h4>Head teacher</h4>
                                    <p>Cube Engineering has been a tremendous resource for our engineering department.
                                        They are very precise and attentive to all our needs and have been able to learn
                                        our procedures quicker than I ever thought possible.
                                    </p>
                                </div>
                                <div class="slider-item">
                                    <h3>Grace Kansiime</h3>
                                    <h4>Human Resource Manager</h4>
                                    <p>Great Job by the Outsource2india Team! Up to our standards!
                                    </p>
                                </div>
                                <div class="slider-item">
                                    <h3>John Doe</h3>
                                    <h4>Business owner</h4>
                                    <p>Cube Engineering is prompt to responding to their client’s requests, especially
                                        during time-crunching situations.
                                    </p>
                                </div>
                                <div class="slider-item">
                                    <h3>Derrick Marques</h3>
                                    <h4>Civil Engineer</h4>
                                    <p>From the beginning, Cube Engineering has been a good partner to work with. They
                                        have committed the resources, the time and the talent to make the relationship a
                                        win-win. They have been committed to serving our needs and to improving the
                                        quality and scope of their expertise
                                    </p>
                                </div>
                                <div class="slider-item">
                                    <h3>Stella kyankyu</h3>
                                    <h4>Head teacher</h4>
                                    <p>Cube Engineering has been a tremendous resource for our engineering department.
                                        They are very precise and attentive to all our needs and have been able to learn
                                        our procedures quicker than I ever thought possible.
                                    </p>
                                </div>
                                <div class="slider-item">
                                    <h3>Grace Kansiime</h3>
                                    <h4>Human Resource Manager</h4>
                                    <p>Great Job by the Outsource2india Team! Up to our standards!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of testimonial section --}}

        {{-- contact section --}}
        <section id="contact">
            <!-- Contact Start -->
            <div class="contact wow fadeInUp">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Get In Touch</p>
                        <h2>For Any Query</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="flaticon-address"></i>
                                    <div class="contact-text">
                                        <h2>Location</h2>
                                        <p>Blue Heights, Level 3 Nkrumah Rd</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-call"></i>
                                    <div class="contact-text">
                                        <h2>Phone</h2>
                                        <p>+256 776024658</p>
                                        <p>+256774764199</p>
                                        <p>+256708881648</p>
                                    </div>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-send-mail"></i>
                                    <div class="contact-text">
                                        <h2>Email</h2>
                                        <p class="d-flex flex-wrap">cubeengineeringlimited@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- contact form section --}}
                        <div class="col-md-6">
                            <div class="contact-form">
                                <div id="success"></div>
                                @include('components.Forms.contact')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
        </section>
        {{-- end of contact section --}}

        {{-- partners section --}}
        <section id="partners">
            <div class="container wow fadeIn">
                <div class="section-header text-center">
                    <p>Partners</p>
                    <h2>Our key partners</h2>
                </div>
                <div class="text-center">
                    <div class="row align-items-center">
                        <div class="col">
                            <img width="280px" src="{{ asset('img/image 1.svg') }}" alt="partner-logos">
                        </div>
                        <div class="col">
                            <img width="280px" src="{{ asset('img/image 3.svg') }}" alt="partner-logos">
                        </div>
                        <div class="col">
                            <img width="280px" src="{{ asset('img/image 4.svg') }}" alt="partner-logos">
                        </div>
                        <div class="col">
                            <img width="280px" src="{{ asset('img/image 5.svg') }}" alt="partner-logos">
                        </div>
                        <div class="col">
                            <img width="280px" src="{{ asset('img/image 6.svg') }}" alt="partner-logos">
                        </div>

                        <div class="col">
                            <img width="280px" src="{{ asset('img/image 7.svg') }}" alt="partner-logos">
                        </div>

                        <div class="col">
                            <img width="280px" src="{{ asset('img/image 9.svg') }}" alt="partner-logos">
                        </div>
                        <div class="col">
                            <img width="280px" src="{{ asset('img/image 8.svg') }}" alt="partner-logos">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- end of partners section --}}

        {{-- TIMELINE --}}
        <section id="timeline">
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="row align-items-end mb-4 timeline-head">
                        <div class="col-lg-6">
                            <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Daily Reminder</h6>
                            <h1 class="section-title mb-3">Always Deliver more than expected.</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="owl-carousel timeline-carousel position-relative">
                                <div class="timeline d-flex flex-column text-center rounded overflow-hidden">
                                    <div class="position-relative">
                                        <div class="timeline-img">
                                            <img class="img-fluid w-100" src="{{ asset('img/augst 002.jpg') }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="timeline-social d-flex flex-column align-items-center justify-content-center">
                                            <a class="btn btn-secondary btn-social mb-2" href="https://twitter.com/CubeEngineers?s=20&t=YOPh578w5sA3VX3KHRhieg"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-secondary btn-social mb-2" href="https://mail.google.com"><i
                                                    class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column timeline-text text-center py-4">
                                        <h5 class="font-weight-bold">Full Name</h5>
                                    </div>
                                </div>
                                <div class="timeline d-flex flex-column text-center rounded overflow-hidden">
                                    <div class="position-relative">
                                        <div class="timeline-img">
                                            <img class="img-fluid w-100" src="{{ asset('img/augst 003(1).jpg') }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="timeline-social d-flex flex-column align-items-center justify-content-center">
                                            <a class="btn btn-secondary btn-social mb-2" href="https://twitter.com/CubeEngineers?s=20&t=YOPh578w5sA3VX3KHRhieg"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-secondary btn-social mb-2" href="https://mail.google.com"><i
                                                    class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column timeline-text text-center py-4">
                                        <h5 class="font-weight-bold">Full Name</h5>
                                    </div>
                                </div>
                                <div class="timeline d-flex flex-column text-center rounded overflow-hidden">
                                    <div class="position-relative">
                                        <div class="timeline-img">
                                            <img class="img-fluid w-100" src="{{ asset('img/new1.jpeg') }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="timeline-social d-flex flex-column align-items-center justify-content-center">
                                            <a class="btn btn-secondary btn-social mb-2" href="https://twitter.com/CubeEngineers?s=20&t=YOPh578w5sA3VX3KHRhieg"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-secondary btn-social mb-2" href="https://mail.google.com"><i
                                                    class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column timeline-text text-center py-4">
                                        <h5 class="font-weight-bold">Full Name</h5>
                                    </div>
                                </div>
                                <div class="timeline d-flex flex-column text-center rounded overflow-hidden">
                                    <div class="position-relative">
                                        <div class="timeline-img">
                                            <img class="img-fluid w-100" src="{{ asset('img/sept03.jpg') }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="timeline-social d-flex flex-column align-items-center justify-content-center">
                                            <a class="btn btn-secondary btn-social mb-2" href="https://twitter.com/CubeEngineers?s=20&t=YOPh578w5sA3VX3KHRhieg"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-secondary btn-social mb-2" href="https://mail.google.com"><i
                                                    class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column timeline-text text-center py-4">
                                        <h5 class="font-weight-bold">Full Name</h5>
                                    </div>
                                </div>
                                <div class="timeline d-flex flex-column text-center rounded overflow-hidden">
                                    <div class="position-relative">
                                        <div class="timeline-img">
                                            <img class="img-fluid w-100" src="{{ asset('img/new2.jpeg') }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="timeline-social d-flex flex-column align-items-center justify-content-center">
                                            <a class="btn btn-secondary btn-social mb-2" href="https://twitter.com/CubeEngineers?s=20&t=YOPh578w5sA3VX3KHRhieg"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-secondary btn-social mb-2" href="https://mail.google.com"><i
                                                    class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column timeline-text text-center py-4">
                                        <h5 class="font-weight-bold">Full Name</h5>
                                    </div>
                                </div>
                                <div class="timeline d-flex flex-column text-center rounded overflow-hidden">
                                    <div class="position-relative">
                                        <div class="timeline-img">
                                            <img class="img-fluid w-100" src="{{ asset('img/SEPT 02.jpg') }}"
                                                alt="">
                                        </div>
                                        <div
                                            class="timeline-social d-flex flex-column align-items-center justify-content-center">
                                            <a class="btn btn-secondary btn-social mb-2" href="https://twitter.com/CubeEngineers?s=20&t=YOPh578w5sA3VX3KHRhieg"><i
                                                    class="fab fa-twitter"></i></a>
                                            <a class="btn btn-secondary btn-social mb-2" href="https://mail.google.com"><i
                                                    class="fa fa-envelope"></i></a>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column timeline-text text-center py-4">
                                        <h5 class="font-weight-bold">Full Name</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        {{-- END OF TIMELINE --}}

        {{-- google maps to business --}}
        <section>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7594577220207!2d32.58001141521419!3d0.31122996411729714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177dbdd0eca93c03%3A0x38c6dc5b1d215262!2sBlue%20Heights!5e0!3m2!1sen!2sug!4v1663617359157!5m2!1sen!2sug"
                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="mt-5"></iframe>
        </section>
        {{-- end of google maps to business --}}

        {{-- floating call button --}}
        <section>
            <span class="floating-call-btn">
                <a href="tel:+256776024658">
                    <i class="fa fa-phone my-float"></i>
                </a>
            </span>
        </section>
        {{-- end of floating call button --}}

        {{-- modals --}}
        @include('components.modals.errors')
        {{-- end of main content --}}

        {{-- footer section --}}
        @include('layouts.site.foot')

        {{-- back to top button --}}
        @include('components.Button.scrolltotop')
    </div>
    {{-- loader --}}
    @include('components.loaders.main')
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
