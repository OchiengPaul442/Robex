<section id="contact">
    <!-- Contact Start -->
    <div class="contact wow fadeInUp">
        <div class="container">
            <div class="section-header text-center">
                <h2>For Any Query</h2>
                <p>Get In Touch</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <div class="contact-item">
                            <i class="flaticon-address"></i>
                            <div class="contact-text">
                                <h2>Location</h2>
                                <p>123 Street, Kampala, Uganda</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-call"></i>
                            <div class="contact-text">
                                <h2>Phone</h2>
                                <p>+256 345 67890</p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="flaticon-send-mail"></i>
                            <div class="contact-text">
                                <h2>Email</h2>
                                <p>Robex-co@gmail.com</p>
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
