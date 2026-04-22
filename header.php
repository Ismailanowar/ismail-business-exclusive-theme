<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- TOP BAR -->
<div class="top-bar bg-dark text-light py-2 small">
    <div class="container d-flex justify-content-between">
        <div>
            📧 mdismailanowar@gmail.com | 📞 +880 1822067909
        </div>
        <div>
            Follow us: Facebook | LinkedIn | Twitter
        </div>
    </div>
</div>

<!-- MAIN NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand fw-bold" href="<?php echo home_url(); ?>">
            <?php bloginfo('name'); ?>
        </a>

        <!-- MOBILE TOGGLE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="mainMenu">

            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'navbar-nav ms-auto align-items-lg-center',
                'fallback_cb'    => false,
            ]);
            ?>

            <!-- CTA BUTTON -->
            <a href="<?php echo site_url('/contact');?>" class="btn btn-primary ms-lg-3 mt-3 mt-lg-0">
                Get Quote
            </a>

            <!-- SEARCH -->
            <form class="d-flex ms-lg-3 mt-3 mt-lg-0" role="search">
                <input class="form-control form-control-sm" type="search" placeholder="Search...">
            </form>

        </div>
    </div>
</nav>