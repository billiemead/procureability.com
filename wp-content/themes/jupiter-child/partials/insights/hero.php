<?php $hero_background_image = get_field('hero_background_image'); ?>

<section
        class="hero pt-[80px] pb-[60px] md:pt-[160px] md:pb-[100px] bg-no-repeat bg-[center_bottom] bg-cover relative overflow-hidden">

    <div class="rellax absolute inset-0" data-rellax-percentage="0.5" data-rellax-speed="2">
        <div class="hero__bg2 absolute top-[-0px] left-0 right-0 bg-cover bg-[center_center] bg-no-repeat"
             style="background-image: url('<?= $hero_background_image ? $hero_background_image['url'] : null; ?>')"></div>
    </div>

    <div class="absolute top-0 bottom-0 left-0 right-0"
         style="background: linear-gradient(180deg, rgba(34, 34, 34, 0.53) 0%, rgba(34, 34, 34, 0.483073) 56.99%, rgba(34, 34, 34, 0) 118.75%);"></div>

    <div class="max-w-[947px] mx-auto px-[34px] relative">
        <div class="text-center mb-[16px]">
            <div class="font-poppins text-[28px] md:text-[42px] leading-[1.2] font-semibold text-white"><?= get_the_title(); ?></div>
        </div>
        <div class="text-center">
            <div class="hero__text font-poppins leading-[1.7] font-normal text-white [&_p]:text-white [&_p]:leading-[1.6]">
                <?= get_the_content(); ?>
            </div>
        </div>
    </div>
</section>