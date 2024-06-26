<?php
/*
    Template Name: Blog
    Template Post Type: page
*/
?>

<?php get_header(); ?>
<div
        id="theme-page"
        class="master-holder clearfix"
        itemscope="itemscope"
        itemtype="https://schema.org/Blog"
>

    <div class="master-holder-bg-holder">
        <div id="theme-page-bg" class="master-holder-bg js-el"></div>
    </div>

    <?php /** HERO */ ?>
    <?php get_template_part('partials/blog/hero'); ?>
    <?php /** !HERO */ ?>

    <?php /** CONTENT */ ?>
    <?php get_template_part('partials/blog/content'); ?>
    <?php /** !CONTENT */ ?>

    <?php /** WEBINARS AND PODCASTS */ ?>
    <?php get_template_part('partials/blog/blog'); ?>
    <?php /** !WEBINARS AND PODCASTS */ ?>

</div>

<?php get_footer(); ?>
