<?php
/*
    Template Name: Contact
    Template Post Type: page
*/
?>

<?php get_fields(); ?>
<?php //https://support.advancedcustomfields.com/forums/topic/get_field-vs-get_fields-resource-calls/ ?>

<?php get_header(); ?>
    <div class="bg-[#F7F9FA] bg-[left_calc(50%+250px)_top_-196px] bg-no-repeat lg:bg-[length:34%] lg:bg-[left_calc(50%+552px)_top_156px]"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/brand-star.svg')">
        <?php get_template_part('partials/contact/hero'); ?>

        <?php get_template_part('partials/contact/form'); ?>

        <?php get_template_part('partials/contact/map'); ?>

        <?php get_template_part('partials/contact/our-clients'); ?>

        <?php get_template_part('partials/contact/cta'); ?>
    </div>

<?php get_footer(); ?>