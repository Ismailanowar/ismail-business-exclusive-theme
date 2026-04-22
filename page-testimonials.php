<?php
/* Template Name: Testimonial Page */
get_header();
?>


<!-- HERO -->
<section class="py-5 bg-light text-center">
    <div class="container">
        <h1>What Our Clients Say</h1>
        <p>Real feedback from our happy clients</p>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="py-5">
<div class="container">

<div class="row g-4">

    <!-- TESTIMONIAL 1 -->
    <div class="col-md-4">
        <div class="card testimonial-card h-100 text-center p-4">

            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="testimonial-img mb-3">

            <h5>John Doe</h5>

            <!-- STARS -->
            <div class="stars mb-2">
                ★★★★★
            </div>

            <p>
                Amazing service! My website traffic increased significantly after working with this team.
            </p>

        </div>
    </div>

    <!-- TESTIMONIAL 2 -->
    <div class="col-md-4">
        <div class="card testimonial-card h-100 text-center p-4">

            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="testimonial-img mb-3">

            <h5>Sarah Khan</h5>

            <div class="stars mb-2">
                ★★★★★
            </div>

            <p>
                Highly professional team. Delivered exactly what I needed on time.
            </p>

        </div>
    </div>

    <!-- TESTIMONIAL 3 -->
    <div class="col-md-4">
        <div class="card testimonial-card h-100 text-center p-4">

            <img src="https://randomuser.me/api/portraits/men/46.jpg" class="testimonial-img mb-3">

            <h5>Mark Lee</h5>

            <div class="stars mb-2">
                ★★★★☆
            </div>

            <p>
                Great experience. Their design quality is top-notch.
            </p>

        </div>
    </div>

</div>

</div>
</section>

<!-- CASE SUCCESS STORIES -->
<section class="py-5 bg-light">
<div class="container">

<h2 class="text-center mb-5">Success Stories</h2>

<div class="row align-items-center mb-5">

    <div class="col-md-6">
       <img src="https://randomuser.me/api/portraits/men/32.jpg" class="testimonial-img mb-3">
    </div>

    <div class="col-md-6">
        <h3>E-commerce Growth</h3>
        <p>
            We helped a client redesign their online store which resulted in a 150% increase in sales.
        </p>
        <ul>
            <li>Better UI/UX</li>
            <li>Faster loading speed</li>
            <li>Improved checkout process</li>
        </ul>
    </div>

</div>

</div>
</section>

<?php get_footer(); ?>