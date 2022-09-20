<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-md-6 col-lg-3">
                <div class="footer-contact">
                    <h2>Office Contact</h2>
                    <p><i class="fa fa-map-marker-alt"></i>Blue Heights, Level 3 Nkrumah Rd</p>
                    <p><i class="fa fa-phone-alt"></i>+256 776024658</p>
                    <p><i class="fa fa-phone-alt"></i>+256774764199</p>
                    <p><i class="fa fa-phone-alt"></i>+256708881648</p>
                    <p><i class="fa fa-envelope"></i>cubeengineeringlimited.com</p>
                    <div class="footer-social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>Services Areas</h2>
                    <a href="#services">Industrial installations</a>
                    <a href="#services">General supplies</a>
                    <a href="#services">Engineering services</a>
                    <a href="#services">Oil & Gas</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>Useful Pages</h2>
                    @if (Request::is('privacy', 'service', 'terms'))
                        <a href="{{ route('index') }}">About Us</a>
                        <a href="{{ route('index') }}">Contact Us</a>
                        <a href="{{ route('index') }}">Projects</a>
                        <a href="{{ route('index') }}">Testimonial</a>
                    @else
                        <a href="#about">About Us</a>
                        <a href="#contact">Contact Us</a>
                        <a href="#projects">Projects</a>
                        <a href="#testimonials">Testimonial</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="{{ route('terms') }}">Terms of use</a>
            <a href="{{ route('privacy') }}">Privacy policy</a>
            <a href="#FAQs">FQAs</a>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#home">Cube Engineering</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
