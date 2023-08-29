<?php $cta_pre_footer_title = get_field('cta_pre_footer_title'); ?>
<?php $cta_pre_footer_button = get_field('cta_pre_footer_button'); ?>
<?php $cta_pre_footer_background_image = get_field('cta_pre_footer_background_image'); ?>

<section class="py-[40px] md:py-[56px] xl:py-[82px] relative bg-[#0098AE]">
    <div class="absolute inset-0 opacity-25 bg-no-repeat bg-cover bg-center"
         style="background-image: url('<?= $cta_pre_footer_background_image['url']; ?>')"></div>
    <div class="max-w-[636px] xl:max-w-[746px] px-[34px] mx-auto relative">
        <div class="text-center mb-[24px] md:mb-[32px] xl:mb-[24px]">
            <div class="font-poppins text-white text-[22px] md:text-[36px] leading-[1.4] md:leading-[1.3] xl:leading-[1.5] font-[600]"><?= $cta_pre_footer_title; ?></div>
        </div>
        <div class="text-center">
            <a target="<?= $cta_pre_footer_button['target'] ?: '_self' ?>"
               class="inline-block py-[12px] px-[32px]  bg-[#3BA17C] rounded-[3px] group relative"
               href="<?= $cta_pre_footer_button['url']; ?>">
                <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                ></div>
                <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase relative"><?= $cta_pre_footer_button['title']; ?></span>
            </a>
        </div>
    </div>
</section>