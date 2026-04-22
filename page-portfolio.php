<?php
/* Template Name:Portfolio Page */
get_header();
?>

<!-- HERO -->
<section class="portfolio-hero text-center text-white">
    <div class="container">
        <h1 class="display-4 fw-bold">Our Projects</h1>
        <p>Explore our latest work and success stories</p>
    </div>
</section>

<!-- PROJECT GALLERY -->
<section class="py-5">
<div class="container">

<h2 class="text-center mb-5">Project Gallery</h2>

<div class="row g-4">

    <!-- Project 1 -->
    <div class="col-md-4 d-flex">
    <div class="card portfolio-card h-100 w-100">
            <img src="https://images.unsplash.com/photo-1559028012-481c04fa702d" class="card-img-top">
            <div class="card-body">
                <h5>E-commerce Website</h5>
                <p>Modern online store design with payment integration.</p>
            </div>
        </div>
    </div>

    <!-- Project 2 -->
    <div class="col-md-4 d-flex">
    <div class="card portfolio-card h-100 w-100">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f" class="card-img-top">
            <div class="card-body">
                <h5>Business Landing Page</h5>
                <p>High-converting landing page for startups.</p>
            </div>
        </div>
    </div>

    <!-- Project 3 -->
    <div class="col-md-4 d-flex">
    <div class="card portfolio-card h-100 w-100">
            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085" class="card-img-top">
            <div class="card-body">
                <h5>Portfolio Website</h5>
                <p>Creative personal portfolio with animations.</p>
            </div>
        </div>
    </div>

</div>

</div>
</section>

<!-- CASE STUDIES -->
<section class="py-5 bg-light">
<div class="container">

<h2 class="text-center mb-5">Case Studies</h2>

<div class="row align-items-center mb-5">
    <div class="col-md-6">
        <img src="https://picsum.photos/600/400" class="img-fluid rounded">
    </div>
    <div class="col-md-6">
        <h3>Client Growth Project</h3>
        <p>We redesigned a business website and increased conversions by 200% within 3 months.</p>
        <ul>
            <li>UI/UX redesign</li>
            <li>SEO optimization</li>
            <li>Performance improvement</li>
        </ul>
    </div>
</div>

</div>
</section>

<!-- BEFORE AFTER -->
<section class="py-5">
<div class="container text-center">

<h2 class="mb-5">Before & After</h2>

<div class="ba-slider">

    <!-- BEFORE IMAGE -->
    <img src="https://picsum.photos/id/1015/800/500" class="before-img">

    <!-- AFTER IMAGE -->
    <div class="after-wrapper">
        <img src="https://picsum.photos/id/1016/800/500" class="after-img">
    </div>

    <!-- HANDLE -->
    <div class="slider-handle"></div>

</div>

</div>
</section>

<?php get_footer(); ?>