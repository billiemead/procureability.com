<?php $hero_image = get_field('hero_image'); ?>
<?php $hero_title = get_field('hero_title'); ?>
<?php $hero_leading = get_field('hero_leading'); ?>
<?php $hero_subscribe_to_insights = get_field('hero_subscribe_to_insights'); ?>
<?php $hero_back_to_main = get_field('hero_back_to_main'); ?>

<section class="overflow-hidden bg-no-repeat"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/thank-you-triangle.svg')">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <div class="xl:grid xl:grid-cols-[50%_auto] xl:gap-[45px]">
            <div class="py-[70px] xl:py-[140px]">
                <?php if ($hero_title) : ?>
                    <div class="mb-[8px]">
                        <div class="font-poppins text-[36px] md:text-[42px] leading-[1.38] font-semibold brand-text-gradient text-transparent bg-clip-text"><?= $hero_title; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($hero_leading) : ?>
                    <div class="mb-[32px]">
                        <div class="font-poppins text-[16px] leading-[1.7] text-[#61636B]"><?= $hero_leading; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="grid auto-cols-max grid-flow-row md:grid-flow-col gap-[40px] justify-center md:justify-start md:items-center">
                    <?php if ($hero_subscribe_to_insights) : ?>
                        <div>
                            <a class="inline-block py-[12px] px-[38px] uppercase bg-[#3BA17C] rounded-[3px] group relative"
                               target="<?= $hero_subscribe_to_insights['target'] ? $hero_subscribe_to_insights['target'] : '_self' ?>"
                               href="<?= $hero_subscribe_to_insights['url']; ?>">
                                <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center rocket-lazyload"
                                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg');"
                                ></div>
                                <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] font-[700]"><?= $hero_subscribe_to_insights['title']; ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if ($hero_back_to_main) : ?>
                        <div class="text-center md:!text-left">
                            <a class="text-[#3BA17C] font-poppins text-[18px] leading-[1.5] tracking-[2px] uppercase font-semibold !underline !decoration-dotted decoration-[#3BA17C] underline-offset-[8px] hover:text-[#3BA17C] hover:decoration-transparent transition-color duration-500"
                               target="<?= $hero_back_to_main['target'] ? $hero_back_to_main['target'] : '_self' ?>"
                               href="<?= $hero_back_to_main['url']; ?>"><?= $hero_back_to_main['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($hero_image) : ?>
                <div class="hidden xl:block relative">
                    <?= wp_get_attachment_image($hero_image['ID'], 'full', false, array('class' => 'block absolute top-0 left-0 h-full w-auto')) ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
