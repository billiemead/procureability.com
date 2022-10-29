<?php $frontpage_welcome_to_procureability_title = get_field('frontpage_welcome_to_procureability_title'); ?>
<?php $frontpage_welcome_to_procureability_feature = get_field('frontpage_welcome_to_procureability_feature'); ?>

<section
        class="overflow-x-hidden pt-[48px] md:pt-[64px] xl:pt-[72px] pb-[48px] md:pb-[72px] xl:pb-[115px] bg-no-repeat bg-[length:868px_auto] md:bg-[length:1168px_auto] xl:bg-[length:1482px_auto] bg-[position:calc(50%-325px)_-75px] md:bg-[position:calc(50%-380px)_center] xl:bg-[position:calc(50%-757px)_center]"
        style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/homepage/section-bg-blue.svg')"
>
    <div class="max-w-[1200px] mx-auto">
        <div class="text-center mb-[32px] md:mb-[40px]">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] leading-[1.4] md:text-[36px] md:leading-[1.5] font-[600]">
                <?= $frontpage_welcome_to_procureability_title; ?>
            </div>
        </div>
        <div class="w-[304px] md:w-[636px] xl:w-auto mx-auto [&>div]:!overflow-visible">
            <div id="welcomeToProcureability" class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($frontpage_welcome_to_procureability_feature as $feature) : ?>
                        <div class="swiper-slide !w-[288px] !h-[338px] p-[8px] group">
                            <div class="w-full h-full relative">
                                <div class="!hidden rounded-[5px] overflow-hidden xl:block xl:group-active:opacity-0 xl:group-hover:opacity-0 xl:opacity-100 absolute inset-0 py-[28px] px-[28px] xl:!flex xl:!flex-col transition-opacity">
                                    <div class="absolute inset-0 bg-cover bg-center"
                                         style="background-image: url('<?= $feature['cover']['url']; ?>')"></div>
                                    <div class="absolute inset-0"
                                         style="background: linear-gradient(0deg, rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>, 0.7) 0%, rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>, 0) 100%);"></div>
                                    <div class="mt-auto text-center relative">
                                        <div class="font-poppins text-white text-[24px] leading-[1.3] font-[600]">
                                            <?= $feature['title']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-white xl:group-active:opacity-100 xl:group-hover:opacity-100 xl:opacity-0 py-[28px] px-[28px] flex flex-col absolute inset-0 transition-opacity rounded-[5px] border border-solid"
                                     style="box-shadow: 0px 10px 20px rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>, 0.3); border-color: rgb(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>)">
                                    <div class="text-center mb-[10px] md:mb-[16px] xl:mb-[12px]">
                                        <div class="font-poppins text-[18px] leading-[1.2] md:text-[24px] md:leading-[1.3] font-[600]"
                                             style="color: rgb(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>)">
                                            <?= $feature['title']; ?>
                                        </div>
                                    </div>
                                    <div class="text-center mb-[28px]">
                                        <div class="font-poppins text-[#393A40] opacity-80 text-[14px] leading-[1.7] md:text-[16px] md:leading-[1.4]">
                                            <?= $feature['text']; ?>
                                        </div>
                                    </div>
                                    <div class="text-center mt-auto">
                                        <a class="font-roboto text-[14px] leading-[1.1] xl:text-[16px] leading-[1.2] font-[500] uppercase"
                                           href="<?= $feature['button_link']['url']; ?>"
                                           style="color: rgb(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>)"><?= $feature['button_text']; ?>
                                            <svg class="relative top-[1px] ml-[5px]" xmlns="http://www.w3.org/2000/svg" width="8" height="13" viewBox="0 0 8 13" fill="none">
                                                <path d="M1 11.75L6.5 6.25L1 1.25" stroke="currentColor" stroke-opacity="0.6" stroke-width="1.5"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
