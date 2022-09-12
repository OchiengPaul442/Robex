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
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
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
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
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
                        <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->

{{-- about section --}}
@include('pages.includes.about')

{{-- Facts section --}}
@include('pages.includes.Facts')

{{-- Services section --}}
@include('pages.includes.services')

{{-- why us section --}}
{{-- @include('pages.includes.why') --}}

{{-- projects section --}}
@include('pages.includes.projects')

{{-- Testimonial section --}}
@include('pages.includes.testimonial')

{{-- FAQs section --}}
@include('pages.includes.FAQs')

{{-- news section --}}
@include('pages.includes.news')

{{-- contact section --}}
@include('pages.includes.contact')

{{-- partners --}}
@include('pages.includes.partners')

{{-- modals --}}
@include('components.modals.errors')