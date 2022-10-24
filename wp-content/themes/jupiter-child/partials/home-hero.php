<?php $frontpage_hero_title = get_field('frontpage_hero_title'); ?>
<?php $frontpage_hero_text = get_field('frontpage_hero_text'); ?>
<?php $frontpage_hero_button_text = get_field('frontpage_hero_button_text'); ?>
<?php $frontpage_hero_button_link = get_field('frontpage_hero_button_link'); ?>
<?php $frontpage_hero_background_image = get_field('frontpage_hero_background_image'); ?>

<?php $frontpage_hero_ukraine_text_1 = get_field('frontpage_hero_ukraine_text_1'); ?>
<?php $frontpage_hero_ukraine_text_2 = get_field('frontpage_hero_ukraine_text_2'); ?>
<?php $frontpage_hero_ukraine_read_more_text = get_field('frontpage_hero_ukraine_read_more_text'); ?>
<?php $frontpage_hero_ukraine_read_more_link = get_field('frontpage_hero_ukraine_read_more_link'); ?>
<?php $frontpage_hero_ukraine_image = get_field('frontpage_hero_ukraine_image'); ?>

<section
        class="bg-no-repeat bg-center bg-cover"
        style="background-image: url('<?= $frontpage_hero_background_image['url'] ?>')">
    <div class="pt-[104px] md:pt-[133px] xl:pt-[213px] pb-[60px] md:pb-[74px] xl:pb-[150px]">
        <div class="px-[34px] xl:max-w-[1200px] mx-auto">
            <div class="text-center font-poppins text-white text-[28px] md:text-[42px] leading-[1.2] md:leading-[1.27] font-[600] mb-[16px]">
                <?= $frontpage_hero_title; ?>
            </div>
            <div class="text-center font-poppins text-white text-[14px] xl:text-[24px] leading-[1.7] xl:leading-[1.6] mb-[32px]"><?= $frontpage_hero_text; ?>
            </div>
            <div class="text-center">
                <a class="inline-block  py-[12px] px-[48px] bg-[#3BA17C] rounded-[3px] relative group"
                   href="<?= $frontpage_hero_button_link['url']; ?>">
                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg')"
                    ></div>
                    <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase"><?= $frontpage_hero_button_text; ?></span></a>
            </div>
        </div>
    </div>
    <div class="py-[12px] md:py-[10px] xl:py-[12px] bg-[#0098AE] bg-opacity-90">
        <div class="px-[34px] xl:max-w-[1200px] mx-auto">
            <div class="flex justify-center items-center">
                <div class="mr-[10px] md:mr-[12px] xl:mr-[16px] [&_img]:w-[39px] md:[&_img]:w-[60px] xl:[&_img]:w-[78px] [&_img]:h-auto">
                    <?= wp_get_attachment_image($frontpage_hero_ukraine_image['id']); ?>
                </div>
                <div class="font-poppins text-white text-[12px] md:text-[16px] xl:text-[20px] leading-[1.46] md:leading-[1.4] tracking-[0.08em] md:tracking-[0.1em] font-[600] uppercase mr-[12px] md:mr-[15px] xl:mr-[20px]">
                    <?= $frontpage_hero_ukraine_text_1; ?>
                </div>
                <span class="xl:max-w-[642px] leading-none">
                    <span class="hidden xl:inline font-poppins text-white text-[14px] leading-[1.6]"><?= $frontpage_hero_ukraine_text_2; ?></span>
                    <a href="<?= $frontpage_hero_ukraine_read_more_link['url']; ?>"
                       class="font-poppins text-[#FFD700] text-[11px] xl:text-[14px] leading-[1.51] font-[500]"><span><?= $frontpage_hero_ukraine_read_more_text; ?></span>
                        <svg class="align-middle ml-[4px]" xmlns="http://www.w3.org/2000/svg" width="8" height="13"
                             viewBox="0 0 8 13"
                             fill="none">
                            <path opacity="0.5" d="M1 11.5212L6.5 6.02124L1 1.02124" stroke="#FFD700"
                                  stroke-width="1.5"/>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </div>
</section>