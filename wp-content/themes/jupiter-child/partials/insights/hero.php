<?php

$hero_title = get_field('hero_title');
$hero_text = get_field('hero_text');
$hero_background_image = get_field('hero_image');
$hero_button = get_field('hero_button');

?>

<!--hero-->
<section
        class="pt-[58px] pb-[48px] xl:pt-0 xl:pb-0 bg-center bg-cover bg-no-repeat xl:min-h-[480px] xl:flex xl:flex-col xl:justify-center xl:items-center"
        style="background-image: url('<?= $hero_background_image ? $hero_background_image['url'] : ''; ?>'); ">
    <div class="md:max-w-[636px] xl:max-w-[718px] mx-auto px-[33px] md:px-0">
        <?php if ($hero_title) : ?>
            <div class="text-center">
                <h1 class="font-poppins text-[22px] leading-[1.27] font-medium md:text-[32px] xl:text-[42px] text-white mb-0"><?= $hero_title; ?></h1>
            </div>
        <?php endif; ?>
        <?php if ($hero_text) : ?>
            <div class="text-center mt-[8px]">
                <div class="font-poppins font-normal text-[16px] md:text-[24px] leading-[1.4] text-white"><?= $hero_text; ?></div>
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