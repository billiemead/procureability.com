<?php
/*
    Template Name: Landing
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php /** CONTENT */ ?>
<?php get_template_part('partials/landing/content'); ?>
<?php /** !CONTENT */ ?>

<?php /** POSTS */ ?>
<?php get_template_part('partials/landing/posts'); ?>
<?php /** !POSTS */ ?>

<?php /** CTA FILE DOWNLOAD */ ?>
<?php get_template_part('partials/landing/cta-file-download'); ?>
<?php /** !CTA FILE DOWNLOAD */ ?>

<?php /** CTA */ ?>
<?php get_template_part('partials/landing/cta'); ?>
<?php /** !CTA */ ?>


<?php get_footer(); ?>

