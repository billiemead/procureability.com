<?php
/*
    Template Name: About page
    Template Post Type: page
*/
?>

<?php get_header(); ?>

    <!--Hero-->
<?php get_template_part('partials/page', 'hero'); ?>
    <!--Hero-->

<?php if (have_posts()) : ?>
    <!--Content-->
    <?php while (have_posts()) : the_post(); ?>
        <section class="pt-[20px] md:pt-[50px]">
            <div class="max-w-[1000px] px-[15px] mx-auto">
                <h1 class="section-h1"><?= get_the_title(); ?></h1>
                <div class="cms-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
    <!--Content-->
<?php endif; ?>

<?php $video = get_field('video_code'); ?>
<?php if ($video) : ?>
    <!--Video-->
    <section class="pb-[50px]">
        <div class="max-w-[960px] mx-auto">
            <div class="px-[15px] pt-[20px] md:pt-[50px] pb-[34px] md:pb-[64px] bg-[#00a3b7] rounded-[15px]">
                <div>
                    <div class="pb-[56.25%] relative [&_*]:absolute [&_*]:inset-0 [&_*]:w-full [&_*]:h-full">
                        <?= $video; ?>
                    </div>
                </div>
                <?php $video_text = get_field('video_text'); ?>
                <?php if ($video_text) : ?>
                    <div class="text-center text-[25px] leading-none text-white font-[600] pt-[20px] md:pt-[55px]">
                        <?= $video_text; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--!Video-->
<?php endif; ?>

<?php $cta_title = get_field('cta_title'); ?>
<?php $cta_text = get_field('cta_text'); ?>
<?php $cta_button_text = get_field('cta_button_text'); ?>
<?php $cta_button_url = get_field('cta_button_url'); ?>
<?php $cta_background_image = get_field('cta_background_image'); ?>

<?php if ($cta_title && $cta_text && $cta_button_text && $cta_button_url && $cta_background_image) : ?>
    <!--CTA-->
    <section class="relative overflow-y-hidden py-[90px] lg:py-[140px] bg-cover bg-center bg-no-repeat"
             style="background-image: url('<? $cta_background_image['utl']; ?>')">
        <div class="h-[300%] w-full absolute top-[-150%]">
            <div class="rellax absolute inset-0" data-rellax-percentage="0.5" data-rellax-speed="5">
                <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                     style="background-image: url('https://procureability.com/wp-content/uploads/2020/03/procureability-about4.jpg')"></div>
            </div>
        </div>
        <div class="relative z-20 max-w-[1000px] mx-auto">
            <div class="text-center mb-[36px] lg:mb-[86px] text-[40px] leading-none text-white font-[600]"><?= $cta_title; ?>
            </div>
            <div class="text-center mb-[40px] lg:mb-[90px] [&_p]:text-[25px] [&_p]:leading-[1.5] [&_p]:text-white px-[50px]">
                <?= $cta_text; ?>
            </div>
            <div class="text-center">
                <a class="inline-block py-[11px] px-[20px] text-[#24B9CD] bg-white border border-[#24B9CD] border-solid rounded-[3px] hover:bg-[#D1D1D1] hover:text-[#24B9CD] active:relative active:top-[1px]"
                   href="<?= $cta_button_url; ?>"><?= $cta_button_text; ?></a>
            </div>
        </div>
    </section>
    <!--!CTA-->
<?php endif; ?>

<?php $advantages_title = get_field('advantages_title'); ?>
<?php $advantages_image = get_field('advantages_image'); ?>

<?php if ($advantages_title && $advantages_image) : ?>
    <!--Advantages-->
    <section>
        <div class="bg-[#575b65] py-[25px]">
            <div class="text-center">
                <div class="text-[40px] leading-none font-[600] text-white uppercase pt-[15px] mb-[16px]"><?= $advantages_title; ?>
                </div>
            </div>
        </div>
        <div class="bg-[#f7941e]">
            <div class="max-w-[1000px] mx-auto">
                <img class="block max-w-full"
                     src="<?= $advantages_image['url']; ?>" alt="<?= $advantages_image['alt']; ?>">
            </div>
        </div>
    </section>
    <!--!Advantages-->
<?php endif; ?>

<?php $experts_title = get_field('experts_title'); ?>
<?php $experts_text = get_field('experts_text'); ?>
<?php $quotes_title = get_field('quotes_title'); ?>
<?php $quotes_quotes = get_field('quotes_quotes'); ?>

<?php if ($experts_title && $experts_text || $quotes_title && $quotes_quotes) : ?>
    <!--Experts and Quotes-->
    <section class="pt-[20px] pb-[45px] md:pt-[50px] md:pb-[65px]">
        <div class="max-w-[1000px] mx-auto">
            <div class="grid gap-[20px] md:gap-0 md:grid-cols-2">
                <?php if ($experts_title && $experts_text) : ?>
                    <div class="px-[15px]">
                        <div class="text-[25px] leading-[1.66] mb-[20px]"><?= $experts_title; ?></div>
                        <div><?= $experts_text; ?></div>
                    </div>
                <?php endif; ?>
                <?php if ($quotes_title && $quotes_quotes) : ?>
                    <div class="px-[15px]">
                        <div class="text-[25px] leading-[1.66] mb-[20px]"><?= $quotes_title; ?></div>
                        <?php if ($quotes_quotes) : ?>
                            <div class="space-y-[20px]">
                                <?php foreach ($quotes_quotes as $quotes_quote) : ?>
                                    <div class="py-[15px] pr-[16px] pl-[70px] bg-[rgba(0,0,0,.05)] relative">
                                        <svg class="absolute top-[20px] left-[20px] w-[32px] h-[35px]"
                                             xmlns="http://www.w3.org/2000/svg" fill="#ddd"
                                             viewBox="0 0 1664 1792">
                                            <path d="M768 960v384q0 80-56 136t-136 56h-384q-80 0-136-56t-56-136v-704q0-104 40.5-198.5t109.5-163.5 163.5-109.5 198.5-40.5h64q26 0 45 19t19 45v128q0 26-19 45t-45 19h-64q-106 0-181 75t-75 181v32q0 40 28 68t68 28h224q80 0 136 56t56 136zm896 0v384q0 80-56 136t-136 56h-384q-80 0-136-56t-56-136v-704q0-104 40.5-198.5t109.5-163.5 163.5-109.5 198.5-40.5h64q26 0 45 19t19 45v128q0 26-19 45t-45 19h-64q-106 0-181 75t-75 181v32q0 40 28 68t68 28h224q80 0 136 56t56 136z"></path>
                                        </svg>
                                        <?= $quotes_quote['text'] ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--Experts and Quotes-->
<?php endif; ?>


<?php get_footer(); ?>