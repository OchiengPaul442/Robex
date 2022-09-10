<!-- Carousel Start -->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/carousel-1.jpg') }}" class="d-block w-100" alt="robex image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">We Are Professional</p>
                <h1 class="animated fadeInLeft">For Your Dream Project</h1>
                <a class="btn animated fadeInUp" href="{{ route('projects') }}">Find out More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/carousel-2.jpg') }}" class="d-block w-100" alt="robex image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">Professional Builder</p>
                <h1 class="animated fadeInLeft">We Build Your Home</h1>
                <a class="btn animated fadeInUp" href="{{ route('projects') }}">Find out More</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/carousel-3.jpg') }}" class="d-block w-100" alt="robex image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">We Are Trusted</p>
                <h1 class="animated fadeInLeft">For Your Dream Home</h1>
                <a class="btn animated fadeInUp" href="{{ route('projects') }}">Find out More</a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Carousel End -->
