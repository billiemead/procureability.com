<?php $frontpage_industry_leader_in_procurement_title = get_field('frontpage_industry_leader_in_procurement_title'); ?>
<?php $frontpage_industry_leader_in_procurement_text = get_field('frontpage_industry_leader_in_procurement_text'); ?>
<?php $frontpage_industry_leader_in_procurement_clients = get_field('frontpage_industry_leader_in_procurement_clients'); ?>

<section class="pt-[40px] md:pt-[56px] xl:py-[72px] pb-[62px] md:pb-[50px] bg-[#F7F9FA] ">
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
            <div class="md:max-w-[632px] xl:max-w-[1200px] mx-auto grid grid-cols-2 md:grid-cols-3 xl:grid-cols-6 gap-x-[18px] gap-y-[20px] xl:gap-x-[60px]">
                <?php foreach ($frontpage_industry_leader_in_procurement_clients as $client) : ?>
                    <div class="min-h-[64px] flex justify-center items-center [&_img]:max-w-full">
                        <?= wp_get_attachment_image($client['image']['id'], 'full'); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
