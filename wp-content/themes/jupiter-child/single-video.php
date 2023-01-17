<?php
/*
    Template Name: Single video
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<section id="video" class="pt-[45px] pb-[55px]">
    <div class="max-w-[930px] px-[15px] mx-auto">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <div class="bg-[#0095b0] px-[15px] pt-[15px] pb-[20px]">
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <div class="text-center mt-[20px]">
                        <div class="text-[19px] text-white font-[700]"><?= get_the_title(); ?></div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('partials/page', 'form-section'); ?>

<?php get_footer(); ?>