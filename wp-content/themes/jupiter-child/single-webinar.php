<?php

$templateWebinar = get_field('template_webinar');

?>

<?php get_header(); ?>

<?php if ($templateWebinar == 'one_column'): ?>

    <?php /** ONE COLUMN TEMPLATE */ ?>
    <?php get_template_part('partials/single-webinar/one-column-template'); ?>
    <?php /** !ONE COLUMN TEMPLATE */ ?>

<?php elseif ($templateWebinar == 'two_column'): ?>

    <?php /** TWO COLUMN TEMPLATE */ ?>
    <?php get_template_part('partials/single-webinar/two-column-template'); ?>
    <?php /** !TWO COLUMN TEMPLATE */ ?>

<?php endif; ?>

<?php /** YOUTUBE VIDEO */ ?>
<?php get_template_part('partials/single-webinar/partials/youtube-video'); ?>
<?php /** !YOUTUBE VIDEO */ ?>

<?php get_footer(); ?>
