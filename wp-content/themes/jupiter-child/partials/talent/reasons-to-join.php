<?php $reasons_to_join_title = get_field('reasons_to_join_title'); ?>
<?php $reasons_to_join_leading = get_field('reasons_to_join_leading'); ?>
<?php $reasons_to_join_image = get_field('reasons_to_join_image'); ?>
<?php $reasons_to_join = get_field('reasons_to_join'); ?>

<section class="pt-[48px] md:pt-[64px] md:pb-[15px] xl:pt-[72px] xl:pb-[18px]">
    <div class="max-w-[636px] xl:max-w-[1200px] px-[34px] md:px-0 mx-auto">
        <div class="text-center mb-[20px] xl:mb-[16px]">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] leading-[1.4] md:text-[36px] md:leading-[1.5] font-[600]">
                <?= $reasons_to_join_title; ?>
            </div>
        </div>
        <div class="text-center max-w-[870px] mx-auto">
            <div class="[&_p]:!font-poppins [&_p]:text-[#393A40] [&_p]:text-[16px] [&_p]:leading-[1.7]"><?= $reasons_to_join_leading; ?></div>
        </div>
        <div class="xl:grid xl:grid-cols-[490px_minmax(0,auto)] xl:gap-[70px] mt-[65px]">
            <?php if ($reasons_to_join_image) : ?>
                <div class="mb-[24px] md:mb-[40px] xl:mb-0 [&_img]:block [&_img]:w-full [&_img]:h-auto xl:[&_img]:max-w-full">
                    <?= wp_get_attachment_image($reasons_to_join_image['id'], 'full'); ?>
                </div>
            <?php endif; ?>
            <?php if ($reasons_to_join) : ?>
                <div class="relative h-full box-border pb-[75px]">
                    <div id="reasonsToJoin"
                         class="swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($reasons_to_join as $reason) : ?>
                                <div class="swiper-slide">
                                    <div class="">
                                        <div class="font-poppins text-[#61636B] text-[18px] leading-[1.2] md:text-[24px] md:leading-[1.7] font-[600] tracking-[0.03em] uppercase mb-[16px] md:mb-[12px] xl:mb-[16px]">
                                            <?= $reason['title']; ?>
                                        </div>
                                        <div class="[&_p]:!font-poppins font-poppins [&_p]:!text-[#61636B] text-[#61636B] [&_li]:!text-[16px] [&_p]:text-[16px] [&_p]:leading-[1.7] leading-[1.7] marker:text-[#0098AE] [&_ul_li]:mt-[.5em]"><?= $reason['content']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div id="reasonsToJoinPagination"
                             class="xl:!hidden mt-[32px] flex justify-center [&_span]:!mx-[8px] [&_span]:!w-[6px] [&_span]:!h-[6px] [&_span]:rounded-full [&_span]:!bg-[#DDE5E5] [&_span.swiper-pagination-bullet-active]:!bg-[#3BA17C] [&_span]:!opacity-100"></div>
                    </div>
                    <div class="hidden xl:block xl:absolute bottom-0 left-0">
                        <div id="reasonsToJoinNavigationPrev"
                             class="absolute xl:!static left-[-20px] top-[115px] z-50 xl:translate-y-0 [&.swiper-button-disabled]:opacity-30 [&.swiper-button-disabled]:cursor-default [&:not(.swiper-button-disabled)]:hover:opacity-70 cursor-pointer xl:bg-[#cdeaf0] text-[#0098AE] h-[20px] w-[20px] xl:w-[60px] xl:h-[60px] rounded-full inline-flex justify-center items-center xl:mr-[10px]">
                            <svg class="relative xl:left-[-3px]" width="13" height="23" viewBox="0 0 13 23" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.7676 1.82773L1.76758 11.8277L11.7676 21.8277" stroke="currentColor"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div id="reasonsToJoinNavigationNext"
                             class="absolute xl:!static right-[-20px] top-[115px] z-50 xl:translate-y-0 [&.swiper-button-disabled]:opacity-30 [&.swiper-button-disabled]:cursor-default [&:not(.swiper-button-disabled)]:hover:opacity-70 cursor-pointer xl:bg-[#cdeaf0] text-[#0098AE] h-[20px] w-[20px] xl:w-[60px] xl:h-[60px] rounded-full inline-flex justify-center items-center">
                            <svg class="relative xl:right-[-3px]" width="13" height="23" viewBox="0 0 13 23" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.23242 21.6945L11.2324 11.6945L1.23243 1.69449" stroke="currentColor"
                                      stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
