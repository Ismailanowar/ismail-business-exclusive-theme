<?php
/* Template Name: Services Page */
get_header();
?>

<section class="py-5 bg-light">
<div class="container">

<h1 class="text-center mb-4">Our Services</h1>

<!-- FILTER BUTTONS -->
<div class="text-center mb-5">

    <button class="btn btn-outline-primary filter-btn" data-filter="all">All</button>

    <?php
    $terms = get_terms([
        'taxonomy' => 'service_category',
        'hide_empty' => true
    ]);

    foreach ($terms as $term) {
        echo '<button class="btn btn-outline-primary filter-btn" data-filter="'.$term->slug.'">'.$term->name.'</button>';
    }
    ?>

</div>

<!-- SERVICES GRID -->
<div class="row g-4" id="serviceContainer">

<?php
$services = new WP_Query([
    'post_type' => 'service',
    'posts_per_page' => -1
]);

if ($services->have_posts()) :
while ($services->have_posts()) : $services->the_post();

$terms = get_the_terms(get_the_ID(), 'service_category');
$term_classes = '';

if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        $term_classes .= $term->slug . ' ';
    }
}
?>

<div class="col-md-4 service-item <?php echo $term_classes; ?>">

    <div class="card service-card h-100">

        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('medium', ['class'=>'card-img-top']); ?>
        <?php endif; ?>

        <div class="card-body text-center">
            <h5><?php the_title(); ?></h5>
            <p><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
     <a href="<?php the_permalink(); ?>" class="btn btn-primary">
                                View Details
                            </a>
        </div>

    </div>

</div>

<?php endwhile; wp_reset_postdata(); endif; ?>

</div>

</div>
</section>

<?php get_footer(); ?>