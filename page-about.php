<?php
/* Template Name: About Page */
get_header();
?>

<!-- HERO -->
<section class="about-hero text-white d-flex align-items-center">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">About Our Company</h1>
        <p class="lead">We build modern digital solutions for businesses</p>
    </div>
</section>

<!-- COMPANY STORY -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c"
                     class="img-fluid rounded shadow">
            </div>

            <div class="col-md-6">
                <h2 class="mb-3">Company Story</h2>
                <p>
                    We started as a small development team and grew into a full-service digital agency.
                    Our mission is to help businesses grow with technology and innovation.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- MISSION & VISION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center g-4">

            <div class="col-md-6">
                <div class="p-4 mission-box">
                    <img src="https://cdn-icons-png.flaticon.com/512/190/190411.png" width="60">
                    <h3 class="mt-3">Our Mission</h3>
                    <p>Deliver high-quality digital solutions for global businesses.</p>
                </div>
            </div>

            <div class="col-md-6">
                <div class="p-4 mission-box">
                    <img src="https://cdn-icons-png.flaticon.com/512/854/854878.png" width="60">
                    <h3 class="mt-3">Our Vision</h3>
                    <p>Become a global leader in web development and innovation.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TEAM -->
<section class="py-5">
    <div class="container text-center">

        <h2 class="mb-5">Our Team</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card team-card shadow-sm">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>John Doe</h5>
                        <p>CEO</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card team-card shadow-sm">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Jane Smith</h5>
                        <p>Developer</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card team-card shadow-sm">
                    <img src="https://randomuser.me/api/portraits/men/46.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Mark Lee</h5>
                        <p>Designer</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ACHIEVEMENTS -->
<section class="achievements text-white text-center py-5">
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <h2>100+</h2>
                <p>Projects</p>
            </div>

            <div class="col-md-3">
                <h2>50+</h2>
                <p>Clients</p>
            </div>

            <div class="col-md-3">
                <h2>10+</h2>
                <p>Awards</p>
            </div>

            <div class="col-md-3">
                <h2>5+</h2>
                <p>Years</p>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>