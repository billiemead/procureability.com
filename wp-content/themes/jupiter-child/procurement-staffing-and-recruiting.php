<?php
/*
    Template Name: Procurement Staffing and Recruiting
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
        <?php get_template_part('partials/page', 'content'); ?>
    <?php endwhile; ?>
<?php endif; ?>
<!--Content-->

<?php $cta_background_image = get_field('cta_background_image'); ?>
<?php $cta_first_button = get_field('cta_first_button'); ?>
<?php $cta_second_button = get_field('cta_second_button'); ?>

<?php if ($cta_first_button || $cta_second_button) : ?>
    <!--CTA-->
<section class="py-[66px] bg-cover bg-center bg-no-repeat"
         style="background-image: url('<?= $cta_background_image['url']; ?>')">
    <div class="px-[15px]">
        <div class="text-center grid md:grid-cols-[auto_auto] md:justify-center gap-[32px]">
            <?php if ($cta_first_button) : ?>
                <div class="min-w-[0px]">
                    <a class="inline-block min-w-[272px] box-border py-[22px] px-[38px] bg-white rounded-[3px] transition-opacity hover:opacity-80"
                       href="<?= $cta_first_button['url']; ?>"
                       target="<?= $cta_first_button['target'] ?: '_self'; ?>"
                    >
                        <span class="font-poppins text-[#0098AE] text-[20px] leading-[1.3] font-[700] tracking-[0.1em] uppercase align-middle"><?= $cta_first_button['title']; ?></span>
                    </a>
                </div>
            <?php endif; ?>
            <?php if ($cta_second_button) : ?>
                <div class="min-w-[0px]">
                    <a class="inline-block min-w-[272px] box-border py-[22px] px-[38px] bg-white rounded-[3px] transition-opacity hover:opacity-80"
                       href="<?= $cta_second_button['url']; ?>"
                       target="<?= $cta_second_button['target'] ?: '_self'; ?>"
                    >
                        <span class="font-poppins text-[#3BA17C] text-[20px] leading-[1.3] font-[700] tracking-[0.1em] uppercase align-middle"><?= $cta_second_button['title']; ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
    <!--CTA-->
<?php endif; ?>

<?php $video_title = get_field('video_title'); ?>
<?php $video_video = get_field('video_video'); ?>
<?php if ($video_title && $video_video ) : ?>
    <!--Video-->
    <section id="video" class="py-[30px]">
        <div class="max-w-[930px] px-[15px] mx-auto">
            <div class="bg-[#0095b0] px-[15px] pt-[15px] pb-[40px]">
                <div>
                    <?= $video_video; ?>
                </div>
                <div class="text-center mt-[20px]">
                    <div class="text-[19px] leading-black text-white font-[700]"><?= $video_title; ?></div>
                </div>
            </div>
        </div>
    </section>
    <!--Video-->
<?php endif; ?>

<!--Form section-->
<?php get_template_part('partials/page', 'form-section'); ?>
<!--Form section-->

<!--Leadership-->
<?php get_template_part('partials/page', 'leadership'); ?>
<!--Leadership-->

<?php get_footer(); ?>
