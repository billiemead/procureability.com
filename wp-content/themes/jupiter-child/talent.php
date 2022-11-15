<?php
/*
    Template Name: Talent
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php /** HERO */ ?>
<?php get_template_part('partials/talent/hero'); ?>
<?php /** !HERO */ ?>

<?php /** POST HERO */ ?>
<?php get_template_part('partials/talent/post-hero'); ?>
<?php /** !POST HERO */ ?>

<?php /** CAREER CATEGORIES */ ?>
<?php get_template_part('partials/talent/career-categories'); ?>
<?php /** !CAREER CATEGORIES */ ?>

<?php /** BENEFITS */ ?>
<?php get_template_part('partials/talent/benefits'); ?>
<?php /** !BENEFITS */ ?>

<?php if (have_posts()) : ?>
    <!--Content-->
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('partials/page', 'content'); ?>
    <?php endwhile; ?>
    <!--Content-->
<?php endif; ?>


<?php /** VIDEO */ ?>
<?php get_template_part('partials/talent/video'); ?>
<?php /** !VIDEO */ ?>

<?php /** CLIENTS */ ?>
<?php get_template_part('partials/talent/clients'); ?>
<?php /** !CLIENTS */ ?>

<?php /** FORM */ ?>
<?php get_template_part('partials/talent/form'); ?>
<?php /** !FORM */ ?>

<?php /** TEAM */ ?>
<?php get_template_part('partials/talent/team'); ?>
<?php /** !TEAM */ ?>

<?php /** INSIGHTS */ ?>
<?php get_template_part('partials/talent/insights'); ?>
<?php /** !INSIGHTS */ ?>

<?php get_footer(); ?>