<?php
/*
    Template Name: Webinars and podcasts
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php /** HERO */ ?>
<?php get_template_part('partials/webinars-and-podcasts/hero'); ?>
<?php /** !HERO */ ?>

<?php /** CONTENT */ ?>
<?php get_template_part('partials/webinars-and-podcasts/content'); ?>
<?php /** !CONTENT */ ?>

<?php /** WEBINARS AND PODCASTS */ ?>
<?php get_template_part('partials/webinars-and-podcasts/webinars-and-podcasts'); ?>
<?php /** !WEBINARS AND PODCASTS */ ?>

<?php get_footer(); ?>
