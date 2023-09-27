<?php
/*
    Template Name: Single form
    Template Post Type: page
*/
?>

<?php get_header(); ?>

    <!--Hero-->
<?php get_template_part('partials/page', 'hero'); ?>
    <!--Hero-->

    <!--Content-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="py-[50px]">
            <div class="mx-auto px-[15px] max-w-[500px]">
                <h1 class="font-roboto text-[25px] text-[#ef932f] leading-[1.3] font-bold mb-[16px]"><?= get_the_title(); ?></h1>
                <div class="cms-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
    <!--Content-->

<?php get_footer(); ?>