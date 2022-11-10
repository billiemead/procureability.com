<?php
/*
    Template Name: insights
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

<?php $insights = get_field('insights'); ?>
<?php if ($insights) : ?>
    <section class="pt-[32px] pb-[30px]">
        <div class="max-w-[930px] px-[15px] mx-auto">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-[30px]">
                <?php $i = 0; ?>
                <?php foreach ($insights as $insight) : ?>
                    <?php while ($i < 15) : ?>
                        <div class="relative overflow-hidden shadow-[1px_1px_3px_rgb(0,0,0,.3)]">
                            <a class="block group" target="<?= $insight['link']['target'] ?: '_self'; ?>"
                               href="<?= $insight['link']['url']; ?>">
                                <div class="translate-x-0 group-hover:translate-x-full duration-[.35s] ease-in-out [&_img]:block [&_img]:w-full [&_img]:max-w-full [&_img]:h-auto">
                                    <?= wp_get_attachment_image($insight['cover']['ID'], 'full', false, array('alt' => $insight['link']['title'])); ?>
                                </div>
                                <div class="absolute inset-0 translate-x-[-100%] group-hover:translate-x-0 duration-[.35s] ease-in-out [&_img]:block [&_img]:w-full [&_img]:max-w-full [&_img]:h-auto">
                                    <?= wp_get_attachment_image($insight['content']['ID'], 'full', false, array('alt' => $insight['link']['title'])); ?>
                                </div>
                            </a>
                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php $cta_title = get_field('cta_title'); ?>
<?php $cta_subscribe = get_field('cta_subscribe'); ?>
<?php $cta_login = get_field('cta_login'); ?>

<?php if ($cta_title || $cta_subscribe || $cta_login) : ?>
    <section class="pt-[20px] pb-[72px]">
        <div class="max-w-[930px] px-[15px] mx-auto">
            <?php if ($cta_title) : ?>
                <div class="mb-[45px] text-center">
                    <div class="text-[30px] text-[#777777] leading-[1.66]"><?= $cta_title; ?></div>
                </div>
            <?php endif; ?>
            <?php if ($cta_subscribe || $cta_login) : ?>
                <div class="md:flex md:justify-center">
                    <div class="mb-[22px] md:mb-0 md:w-3/12 px-[15px] box-border text-center">
                        <a target="<?= $cta_subscribe['target'] ?: '_self'; ?>"
                           class="inline-block py-[13px] px-[19px] text-[14px] box-border leading-[normal] text-[rgb(87,172,133)] hover:text-white hover:bg-[rgb(87,172,133)] border-[rgb(87,172,133)] border-solid border-2 rounded-[5px] duration-[.2s] ease-in-out"
                           href="<?= $cta_subscribe['url']; ?>"><?= $cta_subscribe['title']; ?></a>
                    </div>
                    <div class="md:w-3/12 px-[15px] box-border text-center">
                        <a target="<?= $cta_login['target'] ?: '_self'; ?>"
                           class="inline-block py-[13px] px-[19px] text-[14px] box-border leading-[normal] text-[rgb(56,161,181)] hover:text-white hover:bg-[rgb(56,161,181)] border-[rgb(56,161,181)] border-solid border-2 rounded-[5px] duration-[.2s] ease-in-out"
                           href="<?= $cta_login['url']; ?>"><?= $cta_login['title']; ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>
