<?php $frontpage_our_advantages_title = get_field('frontpage_our_advantages_title'); ?>
<?php $frontpage_our_advantages_advantages = get_field('frontpage_our_advantages_advantages'); ?>


<section class="pt-[72px] pb-[92px]">
    <div class="max-w-[636px] xl:max-w-[1200px] px-[34px] md:px-0 mx-auto">
        <div class="text-center mb-[13px]">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[36px] leading-[1.5] font-[600]">
                <?= $frontpage_our_advantages_title; ?>
            </div>
        </div>
        <div class="xl:grid xl:grid-cols-2 xl:items-end xl:gap-[107px]">
            <div class="mb-[24px] md:mb-[40px] xl:mb-0">
                <img class="block w-full xl:max-w-full"
                     src="/wp-content/themes/jupiter-child/assets/img/pages/homepage/our-advantages.png" alt="">
            </div>
            <?php if ($frontpage_our_advantages_advantages) : ?>
                <div class="relative">
                    <div id="ourAdvantages"
                         class="swiper max-w-[252px] mx-auto xl:!mx-0 md:max-w-[457px] xl:max-w-[400px]]">
                        <div class="swiper-wrapper">
                            <?php foreach ($frontpage_our_advantages_advantages as $advantage) : ?>
                                <div class="swiper-slide">
                                    <div class="text-center xl:!text-left">
                                        <div class="font-poppins text-[#61636B] text-[18px] leading-[1.2] md:text-[24px] md:leading-[1.7] font-[600] tracking-[0.03em] uppercase mb-[16px] md:mb-[12px] xl:mb-[16px]">
                                            <?= $advantage['title']; ?>
                                        </div>
                                        <div class="font-poppins text-[#61636B] text-[16px] leading-[1.7]"><?= $advantage['text']; ?>
                                        </div>
                                        <div class="mt-[32px]">
                                            <a class="inline-block py-[12px] px-[38px] uppercase bg-[#3BA17C] rounded-[3px] group relative"
                                               href="<?= $advantage['button_link']['url']; ?>">
                                                <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                                                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg')"
                                                ></div>
                                                <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] font-[700]"><?= $advantage['button_text']; ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div id="ourAdvantagesPagination"
                             class="xl:!hidden mt-[32px] flex justify-center [&_span]:!mx-[8px] [&_span]:!w-[6px] [&_span]:!h-[6px] [&_span]:rounded-full [&_span]:!bg-[#DDE5E5] [&_span.swiper-pagination-bullet-active]:!bg-[#3BA17C] [&_span]:!opacity-100"></div>
                    </div>
                    <div id="ourAdvantagesNavigationPrev"
                         class="xl:mt-[66px] absolute xl:!static left-[-20px] top-[50%] z-50 translate-y-[-50%] xl:translate-y-0 [&.swiper-button-disabled]:opacity-30 [&.swiper-button-disabled]:cursor-default cursor-pointer xl:bg-[#cdeaf0] text-[#0098AE] h-[20px] w-[20px] xl:w-[60px] xl:h-[60px] rounded-full inline-flex justify-center items-center xl:mr-[10px]">
                        <svg class="relative xl:left-[-3px]" width="13" height="23" viewBox="0 0 13 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.7676 1.82773L1.76758 11.8277L11.7676 21.8277" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div id="ourAdvantagesNavigationNext"
                         class="xl:mt-[66px] absolute xl:!static right-[-20px] top-[50%] z-50 translate-y-[-50%] xl:translate-y-0 [&.swiper-button-disabled]:opacity-30 [&.swiper-button-disabled]:cursor-default cursor-pointer xl:bg-[#cdeaf0] text-[#0098AE] h-[20px] w-[20px] xl:w-[60px] xl:h-[60px] rounded-full inline-flex justify-center items-center">
                        <svg class="relative xl:right-[-3px]" width="13" height="23" viewBox="0 0 13 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.23242 21.6945L11.2324 11.6945L1.23243 1.69449" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
