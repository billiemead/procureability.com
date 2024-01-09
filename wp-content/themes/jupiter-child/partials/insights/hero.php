<?php $hero_background_image = get_field('hero_background_image'); ?>

<section
        class="hero pt-[80px] pb-[60px] md:pt-[160px] xl:pt-[12.89%] md:pb-[100px] bg-no-repeat bg-[center_15%] bg-cover relative"
        style="background-image: url('<?= $hero_background_image ? $hero_background_image['url'] : null; ?>')">

    <div class="absolute inset-0"
         style="background: linear-gradient(180deg, rgba(34, 34, 34, 0.53) 0%, rgba(34, 34, 34, 0.483073) 56.99%, rgba(34, 34, 34, 0) 118.75%);"></div>

    <div class="max-w-[947px] mx-auto px-[34px] relative">
        <div class="text-center mb-[16px]">
            <h1 class="font-poppins text-[28px] md:text-[42px] leading-[1.2] font-semibold text-white"><?= get_the_title(); ?></h1>
        </div>
        <div class="text-center">
            <div class="hero__text font-poppins leading-[1.7] font-normal text-white [&_p]:text-white [&_p]:leading-[1.6]">
                <?= get_the_content(); ?>
            </div>
        </div>
    </div>
</section>