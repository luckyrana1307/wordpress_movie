<?php
/*
Template Name: Movie Template
*/
get_header();

$args = [
    'post_type' => 'movie',
    'posts_per_page' => -1
];

$movies = new WP_Query($args);
?>

<main>
    <?php
    if ($movies->have_posts()) : 
    ?>
    <div class="js-movie">
        <?php 
        while ($movies->have_posts()) : $movies->the_post();
            get_template_part('template-parts/loop', 'movie');
        endwhile;
        wp_reset_postdata(); // Reset the global $post object
        ?>
    </div>
    <?php endif; ?>
</main>

<?php
get_footer();
?>
