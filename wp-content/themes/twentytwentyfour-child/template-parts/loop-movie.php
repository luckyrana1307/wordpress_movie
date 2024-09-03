<?php
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$rating = get_field('rating');
$cats = get_the_terms(get_the_ID(), 'category');
?>

<div class="column ss2" style="background: linear-gradient(45deg, <?php echo esc_attr($first_color); ?>, <?php echo esc_attr($second_color); ?>);">
    <?php if (has_post_thumbnail()): ?>
    <picture>
        <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title_attribute(); ?>">
    </picture>    
    <?php endif; ?>

    <h4><?php the_title(); ?></h4>

    <?php if (!empty($cats) || !empty($rating)): ?>
    <ul>
        <?php if (!empty($cats)): ?>
            <strong>Category:</strong>
            <li>
                <?php foreach ($cats as $cat): ?>
                    <span><?php echo esc_html($cat->name); ?></span>
                <?php endforeach; ?>
            </li>
        <?php endif; ?>

        <?php if (!empty($rating)): ?>
            <strong>Rating:</strong>
            <span><?php echo esc_html($rating); ?></span>
        <?php endif; ?>
    </ul>
    <?php endif; ?>
</div>

<style>
.column.ss2 {
    background: linear-gradient(45deg, <?php echo esc_attr($first_color); ?>, <?php echo esc_attr($second_color); ?>);
}
</style>
