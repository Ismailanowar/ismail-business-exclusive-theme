<?php
/* Template Name: Landing Page */
get_header();
?>

<!-- HERO SECTION -->
<section class="landing-hero text-white d-flex align-items-center">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <h1 class="display-5 fw-bold">Grow Your Business Online</h1>
                <p class="lead">
                    We build high converting websites that bring you real customers.
                </p>

                <a href="#leadform" class="btn btn-warning btn-lg mt-3">
                    Get Free Consultation
                </a>
            </div>

            <div class="col-md-6 text-center">
                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786"
                     class="img-fluid rounded shadow">
            </div>

        </div>
    </div>
</section>

<!-- FEATURES -->
<section class="py-5">
<div class="container text-center">

    <h2 class="mb-5">Why Choose Us</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="feature-box p-4 shadow-sm">
                <h4>Fast Delivery</h4>
                <p>We deliver projects quickly without compromising quality.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box p-4 shadow-sm">
                <h4>High Conversion</h4>
                <p>Our designs are optimized to generate more leads.</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-box p-4 shadow-sm">
                <h4>24/7 Support</h4>
                <p>We are always available to help your business grow.</p>
            </div>
        </div>

    </div>

</div>
</section>

<!-- TESTIMONIAL -->
<section class="py-5 bg-light text-center">
<div class="container">

    <h2 class="mb-5">What Clients Say</h2>

    <div class="row">

        <div class="col-md-4">
            <p>"Amazing service, my sales increased!"</p>
            <h6>- John Doe</h6>
        </div>

        <div class="col-md-4">
            <p>"Very professional team, highly recommended."</p>
            <h6>- Sarah Khan</h6>
        </div>

        <div class="col-md-4">
            <p>"Best web agency I have worked with."</p>
            <h6>- Mark Lee</h6>
        </div>

    </div>

</div>
</section>

<!-- LEAD FORM -->
<section id="leadform" class="py-5 landing-form text-white">
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-6">

            <h2 class="text-center mb-4">Get Free Quote</h2>

            <form>

                <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Your Name">
                </div>

                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>

                <div class="mb-3">
                    <textarea class="form-control" placeholder="Your Requirement"></textarea>
                </div>

                <button class="btn btn-warning w-100 btn-lg">
                    Submit Request
                </button>

            </form>

        </div>

    </div>

</div>
</section>

<?php get_footer(); ?>