<?php
/*
    Template Name: Whitepapers
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php /** HERO */ ?>
<?php get_template_part('partials/whitepapers/hero'); ?>
<?php /** !HERO */ ?>

<?php /** WHITEPAPERS */ ?>
<?php get_template_part('partials/whitepapers/whitepapers'); ?>
<?php /** !WHITEPAPERS */ ?>

<?php /** CTA */ ?>
<?php get_template_part('partials/whitepapers/cta'); ?>
<?php /** !CTA */ ?>

<?php get_footer(); ?>
