<?php $frontpage_industry_leader_in_procurement_title = get_field('frontpage_industry_leader_in_procurement_title'); ?>
<?php $frontpage_industry_leader_in_procurement_text = get_field('frontpage_industry_leader_in_procurement_text'); ?>
<?php $frontpage_industry_leader_in_procurement_clients = get_field('frontpage_industry_leader_in_procurement_clients'); ?>

<section id="ourclients" class="pt-[40px] md:pt-[56px] xl:py-[72px] pb-[62px] md:pb-[50px] bg-[#F7F9FA] ">
    <div class="px-[34px]">
        <div class="max-w-[210px] md:max-w-full mb-[16px] mx-auto text-center">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] md:text-[36px] leading-[1.4] md:leading-[1.5] font-[600]">
                <?= $frontpage_industry_leader_in_procurement_title; ?>
            </div>
        </div>
        <div class="max-w-[275px] md:max-w-[632px] mb-[20px] md:mb-[30px] mx-auto [&_p]:!font-poppins [&_p]:text-[#393A40] [&_p]:opacity-80 [&_p]:text-[14px] md:[&_p]:text-[16px] [&_p]:leading-[1.7] md:[&_p]:leading-[1.65] [&_p]:mb-0 text-center">
            <p><?= $frontpage_industry_leader_in_procurement_text; ?></p>
        </div>
        <?php if ($frontpage_industry_leader_in_procurement_clients) : ?>
            <div class="md:max-w-[632px] xl:max-w-[1200px] mx-auto">
                <div class="relative">
                    <div id="industryLeaders" class="swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($frontpage_industry_leader_in_procurement_clients as $client) : ?>
                                <div class="swiper-slide !h-auto min-h-[64px] flex justify-center items-center [&_img]:w-auto [&_img]:max-h-[80px] [&_img]:h-auto [&_img]:max-w-full">
                                    <?= wp_get_attachment_image($client['image']['id'], 'full'); ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div id="industryLeadersNavigationPrev"
                         class="absolute left-[-20px] md:left-[-30px] top-[50%] z-50 translate-y-[-50%] [&.swiper-button-disabled]:opacity-30 [&.swiper-button-disabled]:cursor-default [&:not(.swiper-button-disabled)]:hover:opacity-70 cursor-pointer text-[#0098AE] h-[20px] w-[20px] inline-flex justify-center items-center">
                        <svg class="relative xl:left-[-3px]" width="13" height="23" viewBox="0 0 13 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.7676 1.82773L1.76758 11.8277L11.7676 21.8277" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div id="industryLeadersNavigationNext"
                         class="absolute right-[-20px] md:right-[-30px] z-50 top-[50%] z-50 translate-y-[-50%] [&.swiper-button-disabled]:opacity-30 [&.swiper-button-disabled]:cursor-default [&:not(.swiper-button-disabled)]:hover:opacity-70 cursor-pointer text-[#0098AE] h-[20px] w-[20px] inline-flex justify-center items-center">
                        <svg class="relative xl:right-[-3px]" width="13" height="23" viewBox="0 0 13 23" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.23242 21.6945L11.2324 11.6945L1.23243 1.69449" stroke="currentColor"
                                  stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div id="industryLeadersPagination"
                     class="hidden md:flex md:flex-wrap mt-[32px] justify-center [&_span]:!mx-[8px] [&_span]:!w-[6px] [&_span]:!h-[6px] [&_span]:rounded-full [&_span]:!bg-[#DDE5E5] [&_span.swiper-pagination-bullet-active]:!bg-[#3BA17C] [&_span]:!opacity-100"></div>
            </div>
        <?php endif; ?>
    </div>
</section>