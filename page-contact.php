<?php
/* Template Name: Contact Page */
get_header();
?>

<!-- HERO -->
<section class="py-5 bg-light text-center">
    <div class="container">
        <h1>Contact Us</h1>
        <p>We are here to help you. Reach out anytime.</p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-5">
<div class="container">

<div class="row g-5">

    <!-- CONTACT FORM -->
    <div class="col-md-6">

        <h3 class="mb-4">Send Message</h3>

        <form>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Your Name">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" placeholder="Email Address">
            </div>

            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Subject">
            </div>

            <div class="mb-3">
                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
            </div>

            <button class="btn btn-primary w-100">
                Send Message
            </button>

        </form>

    </div>

    <!-- CONTACT INFO -->
    <div class="col-md-6">

        <h3 class="mb-4">Contact Info</h3>

        <p><strong>📍 Address:</strong> Chattogram, Bangladesh</p>
        <p><strong>📞 Phone:</strong> +880 1822067909</p>
        <p><strong>📧 Email:</strong> mdismailanowar@gmail.com</p>

        <!-- MAP -->
        <div class="map mt-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18..."
                width="100%" height="300"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>

    </div>

</div>

</div>
</section>

<?php get_footer(); ?>