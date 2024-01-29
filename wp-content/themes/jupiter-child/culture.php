<?php
/*
    Template Name: Culture
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php /** HERO */ ?>
<?php get_template_part('partials/culture/hero'); ?>
<?php /** !HERO */ ?>

<?php /** POST HERO */ ?>
<?php get_template_part('partials/culture/post-hero'); ?>
<?php /** !POST HERO */ ?>

<?php /** QUOTES */ ?>
<?php get_template_part('partials/culture/quotes'); ?>
<?php /** !QUOTES */ ?>

<?php /** BIG VIDEO */ ?>
<?php get_template_part('partials/culture/big-video'); ?>
<?php /** !BIG VIDEO */ ?>

<div class="bg-no-repeat bg-[right_bottom_500px] md:bg-[left_calc(50%+360px)_center]"
     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/culture/triangle-bg-culture.svg')">
    <?php /** REASONS TO JOIN */ ?>
    <?php get_template_part('partials/culture/reasons-to-join'); ?>
    <?php /** !REASONS TO JOIN */ ?>

    <?php /** SMALL VIDEO */ ?>
    <?php get_template_part('partials/culture/small-video'); ?>
    <?php /** !SMALL VIDEO */ ?>

    <?php /** GALLERY */ ?>
    <?php get_template_part('partials/culture/gallery'); ?>
    <?php /** !GALLERY */ ?>
</div>

<?php /** CTA */ ?>
<?php get_template_part('partials/culture/cta'); ?>
<?php /** !CTA */ ?>

<?php get_footer(); ?>
