<?php $cta_second_text = get_field('cta_second_text'); ?>
<?php $cta_second_button = get_field('cta_second_button'); ?>
<section class="py-[40px] bg-cover bg-center bg-no-repeat"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/cta-bg.png')">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <div class="lg:flex lg:justify-center lg:items-center lg:gap-[64px]">
            <?php if ($cta_second_text) : ?>
                <div class="text-center lg:!text-left mb-[30px] lg:mb-0">
                    <div class="font-poppins text-white text-[28px] leading-[1.5] font-semibold"><?= $cta_second_text; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($cta_second_button) : ?>
                <div class="text-center lg:!text-left">
                    <a href="<?= $cta_second_button['url']; ?>"
                       class="inline-block pt-[13px] pb-[11px] px-[35px] brand-button-gradient rounded-[3px] border-0 group relative"
                    >
                        <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"></div>
                        <span class="relative font-poppins text-white text-[16px] xl:text-[18px] leading-[1.51] tracking-[0.1em] font-bold uppercase"><?= $cta_second_button['title']; ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>