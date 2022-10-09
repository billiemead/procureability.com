<?php get_header(); ?>
<?php /** HERO */ ?>
<?php get_template_part('partials/home-hero'); ?>
<?php /** !HERO */ ?>

<?php /** ABOUT */ ?>
<?php $about_fields = get_field('about'); ?>

<?php if ($about_fields) : ?>
    <?php get_template_part('partials/home-about', null, $about_fields); ?>
<?php endif; ?>
<?php /** !ABOUT */ ?>

<?php /** UKRAINE BANNER */ ?>
<?php $ukraine_banner = get_field('ukraine_banner') ?>

<?php if ($ukraine_banner) : ?>
    <?php get_template_part('partials/ukraine-banner', null, $ukraine_banner); ?>
<?php endif; ?>
<?php /** !UKRAINE BANNER */ ?>

<?php /** SERVICES */ ?>
<?php $services = get_field('services'); ?>
<?php if ($services) : ?>
    <?php get_template_part('partials/services', null, $services); ?>
<?php endif; ?>
<?php /** !SERVICES */ ?>

<?php /** PROCUREMENT */ ?>
<?php $procurement = get_field('procurement'); ?>

<?php if ($procurement) : ?>
    <?php if ($procurement['btn_txt'] && $procurement['btn_link']) : ?>
        <?php $procurement['btn']['text'] = $procurement['btn_txt'];
        $procurement['btn']['link'] = $procurement['btn_link']; ?>
    <?php endif; ?>

    <?php get_template_part('partials/image-plus-text', null, array_merge([
        'reverse' => true,
        'color' => "blue",
        'bg' => "transparent"
    ], $procurement)); ?>
<?php endif; ?>
<?php /** !PROCUREMENT */ ?>

<?php /** FINGERTIPS SERVICES */ ?>
<?php $fingertips_services = get_field('fingertips_services'); ?>

<?php if ($fingertips_services) : ?>
    <?php get_template_part('partials/fingertips_services', null, $fingertips_services); ?>
<?php endif; ?>
<?php /** !FINGERTIPS SERVICES */ ?>

<?php /** SOLUTIONS */ ?>
<?php $solutions = get_field('solutions'); ?>

<?php if ($solutions) : ?>
    <?php if ($solutions['btn_txt'] && $solutions['btn_link']) : ?>
        <?php $solutions['btn']['text'] = $solutions['btn_txt'];
        $solutions['btn']['link'] = $solutions['btn_link']; ?>
    <?php endif; ?>

    <?php get_template_part('partials/image-plus-text', null, array_merge([
        'reverse' => false,
        'text_color' => false,
        'bg' => 'transparent'
    ], $solutions)); ?>
<?php endif; ?>
<?php /** !SOLUTIONS */ ?>

<?php /** PHASES */ ?>
<?php $phases = get_field('phases'); ?>

<?php if ($phases) : ?>
    <?php get_template_part('partials/phases', null, $phases); ?>
<?php endif; ?>
<?php /** !PHASES */ ?>

<?php /** STAFFING SOLUTIONS */ ?>
<?php $staffing_solutions = get_field('staffing_solutions'); ?>

<?php if ($staffing_solutions) : ?>
    <?php if ($staffing_solutions['btn_txt'] && $staffing_solutions['btn_link']) : ?>
        <?php $staffing_solutions['btn']['text'] = $staffing_solutions['btn_txt'];
        $staffing_solutions['btn']['link'] = $staffing_solutions['btn_link']; ?>
    <?php endif; ?>

    <?php get_template_part('partials/image-plus-text', null, array_merge([
        'reverse' => true,
        'text_color' => 'orange',
        'bg' => 'transparent'
    ], $staffing_solutions)); ?>
<?php endif; ?>
<?php /** !STAFFING SOLUTIONS */ ?>

<?php /** ANALYTICS */ ?>
<?php $analytics = get_field('analytics'); ?>

<?php if ($analytics) : ?>
    <?php if ($analytics['btn_txt'] && $analytics['btn_link']) : ?>
        <?php $analytics['btn']['text'] = $analytics['btn_txt'];
        $analytics['btn']['link'] = $analytics['btn_link']; ?>
    <?php endif; ?>

    <?php get_template_part('partials/image-plus-text', null, array_merge([
        'reverse' => false,
        'text_color' => false,
        'bg' => '#f0f0f0'
    ], $analytics)); ?>
<?php endif; ?>
<?php /** !ANALYTICS */ ?>

<?php /** TESTIMONIALS */ ?>
<?php get_template_part('partials/testimonials'); ?>
<?php /** !TESTIMONIALS */ ?>

<?php /** POSTS */ ?>
<?php get_template_part('partials/grid_posts'); ?>
<?php /** !POSTS */ ?>

<?php /** CTA LET'S TALK */ ?>
<?php get_template_part('partials/home-cta-lets-talk'); ?>
<?php /** !CTA LET'S TALK */ ?>

<?php /** TRUSTED BY */ ?>
<?php get_template_part('partials/home-trusted-by'); ?>
<?php /** !TRUSTED BY */ ?>

<?php get_footer(); ?>
