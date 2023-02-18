<?php
/*
    Template Name: insights
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php /** HERO */ ?>
<?php get_template_part('partials/insights/hero'); ?>
<?php /** !HERO */ ?>

<?php /** INSIGHTS */ ?>
<?php get_template_part('partials/insights/insights'); ?>
<?php /** !INSIGHTS */ ?>

<?php /** CTA */ ?>
<?php get_template_part('partials/insights/cta'); ?>
<?php /** !CTA */ ?>

<?php get_footer(); ?>
