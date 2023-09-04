<?php
/*
    Template Name: Procurement Staffing and Recruiting
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php

$hero_title = get_field('hero_title');
$hero_background_image = get_field('hero_image');
$hero_button = get_field('hero_button');

?>

<!--hero-->
<section
        class="pt-[58px] pb-[48px] xl:pt-0 xl:pb-0 bg-center bg-cover bg-no-repeat xl:min-h-[480px] xl:flex xl:flex-col xl:justify-center xl:items-center"
        style="background-image: url('<?= $hero_background_image ? $hero_background_image['url'] : ''; ?>'); ">
    <div class="md:max-w-[636px] xl:max-w-[480px] mx-auto px-[33px] md:px-0">
        <?php if ($hero_title) : ?>
            <div class="text-center">
                <h1 class="font-poppins text-[22px] leading-[1.2] font-medium md:text-[32px] xl:text-[42px] text-white mb-0"><?= $hero_title; ?></h1>
            </div>
        <?php endif; ?>
        <?php if ($hero_button) : ?>
            <div class="text-center mt-[24px]">
                <a href="<?= $hero_button['url']; ?>"
                   target="<?= $hero_button['target'] ? $hero_button['target'] : '_self'; ?>"
                   class="inline-block pt-[13px] pb-[11px] px-[30px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
                >
                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                    ></div>
                    <span class="relative font-poppins text-white text-[18px] leading-[1.51] font-[700] uppercase tracking-[2px]"><?= $hero_button['title']; ?></span>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>
<!--!hero-->

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
<?php if ($video_title && $video_video) : ?>
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
