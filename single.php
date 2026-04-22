<?php get_header(); ?>

<section class="py-5">
<div class="container">

<?php while (have_posts()) : the_post(); ?>

    <h1 class="mb-3"><?php the_title(); ?></h1>

    <p class="text-muted">
        <?php the_time('F j, Y'); ?> | <?php the_category(', '); ?>
    </p>

    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large', ['class'=>'img-fluid mb-4']); ?>
    <?php endif; ?>

    <div class="content">
        <?php the_content(); ?>
    </div>

    <!-- NAVIGATION -->
    <div class="d-flex justify-content-between mt-5">

        <div><?php previous_post_link(); ?></div>
        <div><?php next_post_link(); ?></div>

    </div>

<?php endwhile; ?>

</div>
</section>

<?php get_footer(); ?>