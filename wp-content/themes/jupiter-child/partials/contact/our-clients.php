<?php $the_query = new WP_Query(array('page_id' => get_option('page_on_front'))); ?>

<?php if ($the_query->have_posts()) : ?>
    <?php /** INDUSTRY LEADER IN PROCUREMENT */ ?>
    <?php while ($the_query->have_posts()) : ?>
        <?php $the_query->the_post(); ?>
        <?php get_template_part('partials/front-page/home-industry-leader-in-procurement'); ?>
    <?php endwhile; ?>
    <?php /** !INDUSTRY LEADER IN PROCUREMENT */ ?>
<?php endif; ?>

<?php wp_reset_postdata(); ?>