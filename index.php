<?php get_header(); ?>

<section class="py-5 bg-light">
<div class="container">

    <h1 class="text-center mb-5">Latest Articles</h1>

    <div class="row g-4">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="col-md-4">

            <div class="card blog-card h-100">

                <!-- FEATURE IMAGE -->
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium', ['class'=>'card-img-top']); ?>
                <?php endif; ?>

                <div class="card-body">

                    <!-- CATEGORY -->
                    <div class="mb-2">
                        <?php the_category(' '); ?>
                    </div>

                    <h5><?php the_title(); ?></h5>

                    <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>

                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">
                        Read More
                    </a>

                </div>

            </div>

        </div>

    <?php endwhile; endif; ?>

    </div>

</div>
</section>

<?php get_footer(); ?>