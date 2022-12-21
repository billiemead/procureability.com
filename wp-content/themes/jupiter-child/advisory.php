<?php
/*
    Template Name: Advisory
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php /** HERO */ ?>
<?php get_template_part('partials/advisory/hero'); ?>
<?php /** !HERO */ ?>

<?php /** POST HERO */ ?>
<?php get_template_part('partials/advisory/post-hero'); ?>
<?php /** !POST HERO */ ?>

<?php /** FEATURES */ ?>
<?php get_template_part('partials/advisory/features'); ?>
<?php /** !FEATURES */ ?>

<?php /** VIDEO */ ?>
<?php get_template_part('partials/advisory/video'); ?>
<?php /** !VIDEO */ ?>

<?php /** FORM */ ?>
<?php get_template_part('partials/advisory/form'); ?>
<?php /** !FORM */ ?>

<?php /** INSIGHTS */ ?>
<?php get_template_part('partials/advisory/insights'); ?>
<?php /** !INSIGHTS */ ?>

<?php get_footer(); ?>
