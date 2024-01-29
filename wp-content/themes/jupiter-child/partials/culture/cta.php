<?php $cta_title = get_field('cta_title'); ?>
<?php $cta_button = get_field('cta_button'); ?>

<section class="py-[40px] md:py-[60px] bg-[#F7F9FB] bg-no-repeat bg-[position:left_center,right_center]
"
         data-no-lazy="1"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/culture/triangle-green-cta-left.png'), url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/culture/triangle-green-cta-right.png');">
    <div class="max-w-[882px] mx-auto px-[34px]">
        <?php if ($cta_title) : ?>
            <div class="mb-[24px] text-center">
                <div class="font-poppins text-[22px] md:text-[30px] leading-[1.4] font-semibold tracking-[-0.02em] text-[#393A40]">
                    <?= $cta_title; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($cta_button) : ?>
            <div class="text-center">
                <a class="inline-block py-[12px] px-[38px] uppercase bg-[#3BA17C] rounded-[3px] group relative"
                   href="<?= $cta_button['url']; ?>">
                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg')"
                    ></div>
                    <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] font-[700]"><?= $cta_button['title']; ?></span>
                </a>
            </div>
        <?php endif; ?>
    </div>
</section>