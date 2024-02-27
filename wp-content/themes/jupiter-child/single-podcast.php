<?php

$templatePodcast = get_field('template_podcast');

?>

<?php get_header(); ?>

<?php if ($templatePodcast == 'one_column'): ?>

    <?php /** ONE COLUMN TEMPLATE */ ?>
    <?php get_template_part('partials/single-podcast/one-column-template'); ?>
    <?php /** !ONE COLUMN TEMPLATE */ ?>

<?php elseif ($templatePodcast == 'two_column'): ?>

    <?php /** TWO COLUMN TEMPLATE */ ?>
    <?php get_template_part('partials/single-podcast/two-column-template'); ?>
    <?php /** !TWO COLUMN TEMPLATE */ ?>

<?php endif; ?>

<?php /** YOUTUBE VIDEO */ ?>
<?php get_template_part('partials/single-podcast/partials/youtube-video'); ?>
<?php /** !YOUTUBE VIDEO */ ?>

<?php get_footer(); ?>
