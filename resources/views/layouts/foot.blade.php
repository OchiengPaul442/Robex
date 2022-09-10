<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="footer-contact">
                    <h2>Office Contact</h2>
                    <p><i class="fa fa-map-marker-alt"></i>123 Street, Kampala, Uganda</p>
                    <p><i class="fa fa-phone-alt"></i>+256 345 67890</p>
                    <p><i class="fa fa-envelope"></i>robex-co@gmail.com</p>
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
                    <a href="{{ route('services') }}">Building Construction</a>
                    <a href="{{ route('services') }}">House Renovation</a>
                    <a href="{{ route('services') }}">Architecture Design</a>
                    <a href="{{ route('services') }}">Interior Design</a>
                    <a href="{{ route('services') }}">Painting</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="footer-link">
                    <h2>Useful Pages</h2>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('contact') }}">Contact Us</a>
                    <a href="{{ route('team') }}">Our Team</a>
                    <a href="{{ route('projects') }}">Projects</a>
                    <a href="">Testimonial</a>
                </div>
            </div>
            {{-- news letter form --}}
            <div class="col-md-6 col-lg-3">
                <div class="newsletter">
                    <h2>Newsletter</h2>
                    <p>
                        Subscribe to our newsletter and get our latest news and updates. We don't do spam.         
                    </p>
                    @include('components.Forms.newsletter')
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-menu">
        <div class="f-menu">
            <a href="{{ route('terms') }}">Terms of use</a>
            <a href="{{ route('privacy') }}">Privacy policy</a>
            <a href="{{ route('home') }}">FQAs</a>
        </div>
    </div>
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; <a href="#">ROBEX-CO</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->