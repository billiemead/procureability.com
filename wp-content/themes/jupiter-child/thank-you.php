<?php
/*
    Template Name: Thank You
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<main>

    <?php /** HERO */ ?>
    <?php get_template_part('partials/thank-you/hero'); ?>
    <?php /** !HERO */ ?>

    <?php /** CTA */ ?>
    <?php get_template_part('partials/thank-you/cta'); ?>
    <?php /** !CTA */ ?>

    <?php /** FEATURED CONTENT */ ?>
    <?php get_template_part('partials/thank-you/featured-content'); ?>
    <?php /** !FEATURED CONTENT */ ?>

</main>

<?php get_footer(); ?>

