<?php get_header(); ?>

<section class="py-5">
    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <h1 class="mb-4"><?php the_title(); ?></h1>

            <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('large', ['class'=>'img-fluid mb-4']); ?>
            <?php endif; ?>

            <div class="content mb-5">
                <?php the_content(); ?>
            </div>

            <!-- PRICING (optional) -->
            <div class="pricing p-4 bg-light">
                <h3>Pricing</h3>
                <p>Starting from $199</p>
            </div>

        <?php endwhile; ?>

    </div>
</section>

<?php get_footer(); ?>