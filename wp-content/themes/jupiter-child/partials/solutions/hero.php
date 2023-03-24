<?php $hero_title = get_field('hero_title'); ?>
<?php $hero_leading = get_field('hero_leading'); ?>
<?php $hero_button = get_field('hero_button'); ?>
<?php $hero_background_image = get_field('hero_background_image'); ?>

<!--hero-->
<section
        class="pt-[205px] pb-[54px] bg-no-repeat bg-center md:bg-[left_25%_top_-35%] xl:bg-center xxl:bg-[center_25%] bg-cover"
        style="background-image: url(<?= $hero_background_image['url']; ?>)">
    <div class="max-w-[697px] mx-auto px-[15px]">
        <div class="text-center mb-[8px]">
            <?php if ($hero_title) : ?>
                <h1 class="font-poppins text-white text-[42px] leading-[1.27] font-[600] tracking-[0.02em] !m-0"><?= $hero_title; ?>
                </h1>
            <?php endif; ?>
        </div>
        <?php if ($hero_leading) : ?>
            <div class="text-center">
                <div class="font-poppins text-white text-[24px] leading-[1.6]"><?= $hero_leading; ?></div>
            </div>
        <?php endif; ?>
        <div class="text-center mt-[32px]">
            <a class="inline-block py-[12px] px-[30px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
               href="<?= $hero_button['url']; ?>"
               target="<?= $hero_button['target'] ?: '_self'; ?>"
            >
                <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                ></div>
                <span class="relative font-poppins text-white text-[14px] md:text-[18px] leading-[1.51] font-[700] tracking-[0.1em] uppercase"><?= $hero_button['title']; ?></span>
            </a>
        </div>
    </div>
</section>
<!--!hero-->
