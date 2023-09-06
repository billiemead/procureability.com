<?php
/*
    Template Name: Procurement Transformation
    Template Post Type: page
*/
?>

<?php get_header(); ?>

    <!--Hero-->
<?php get_template_part('partials/procurement-transformation/hero'); ?>
    <!--Hero-->

    <!--Content-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="section section--content">
            <div class="section-container">
                <div class="cms-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!--Content-->

    <!--Form section-->
<?php get_template_part('partials/page', 'form-section'); ?>
    <!--Form section-->

    <!--Leadership-->
<?php get_template_part('partials/page', 'leadership'); ?>
    <!--Leadership-->

<?php get_footer(); ?>