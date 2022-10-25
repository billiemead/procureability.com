<?php
/*
    Template Name: Simple page layout
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<!--Hero-->
<?php get_template_part('partials/page', 'hero'); ?>
<!--Hero-->

<!--Content-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('partials/page', 'content'); ?>
    <?php endwhile; ?>
<?php endif; ?>
<!--Content-->

<!--Form section-->
<?php get_template_part('partials/page', 'form-section'); ?>
<!--Form section-->

<?php get_footer(); ?>
