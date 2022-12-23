<?php
/*
    Template Name: Client success stories
    Template Post Type: post
*/
?>

<?php get_header(); ?>

<!--Content-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php // get_template_part('partials/page', 'content'); ?>
        <section class="pt-[35px] md:pt-[60px] pb-[90px] md:pb-[135px]">
            <div class="max-w-[990px] px-[15px] box-border mx-auto">
                <div class="mb-[16px] md:mb-[66px]">
                    <h1 class="text-[#404040] text-[30px] leading-[1.3] font-[600] uppercase"><?= get_the_title(); ?></h1>
                </div>
                <div class="cms-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
<!--Content-->


<?php get_footer(); ?>

