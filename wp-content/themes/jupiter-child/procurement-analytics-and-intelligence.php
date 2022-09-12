<?php
/*
    Template Name: Procurement Analytics and Intelligence
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

    <!--Tabs-->
<?php get_template_part('partials/page', 'tabs'); ?>
    <!--Tabs-->

    <!--Bottom content-->
<?php get_template_part('partials/page-procurement-analytics-and-intelligence', 'bottom-content'); ?>
    <!--Bottom content-->

    <!--Form section-->
<?php get_template_part('partials/page', 'form-section'); ?>
    <!--Form section-->

    <!--Leadership-->
<?php get_template_part('partials/page', 'leadership'); ?>
    <!--Leadership-->

<?php get_footer(); ?>