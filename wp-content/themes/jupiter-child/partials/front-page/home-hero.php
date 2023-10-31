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
<?php $frontpage_hero_ukraine_popup_text = get_field('frontpage_hero_ukraine_popup_text'); ?>

<?php $frontpage_hero_banner_title = get_field('frontpage_hero_banner_title'); ?>
<?php $frontpage_hero_banner_text = get_field('frontpage_hero_banner_text'); ?>

<section
        class="bg-no-repeat bg-center bg-[auto_125%] xl:bg-cover xl:bg-[center_top_16%]"
        data-no-lazy="1"
        style="background-image: url('<?= $frontpage_hero_background_image['url'] ?>')">
    <div class="pt-[104px] md:pt-[133px] xl:pt-[252px] pb-[60px] md:pb-[74px] xl:pb-[48px]">
        <div class="px-[34px] xl:max-w-[1096px] mx-auto">
            <h1 class="text-center font-poppins text-white text-[28px] md:text-[42px] leading-[1.2] md:leading-[1.27] font-[600] mb-[16px]">
                <?= $frontpage_hero_title; ?>
            </h1>
            <div class="md:max-w-[608px] xl:max-w-full mx-auto text-center font-poppins text-white text-[14px] md:text-[16px] xl:text-[24px] leading-[1.7] md:leading-[1.7] mb-[32px]"><?= $frontpage_hero_text; ?>
            </div>
            <div class="text-center">
                <a class="inline-block py-[12px] px-[48px] bg-[#3BA17C] rounded-[3px] relative group"
                   href="<?= $frontpage_hero_button_link['url']; ?>">
                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg')"
                    ></div>
                    <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase"><?= $frontpage_hero_button_text; ?></span></a>
            </div>
        </div>
    </div>
    <?php if ($frontpage_hero_banner_title && $frontpage_hero_banner_text) : ?>
        <div class="py-[12px] md:py-[10px] xl:py-[20px] bg-[#0098AE] bg-opacity-90">
            <div class="px-[34px] xl:max-w-[1200px] mx-auto">
                <div class="max-w-[858px] mx-auto">
                    <div class="text-center mb-[4px]">
                        <div class="font-poppins text-white text-[18px] leading-[1.5] font-semibold"><?= $frontpage_hero_banner_title; ?></div>
                    </div>
                </div>
                <div class="max-w-[728px] mx-auto">
                    <div class="text-center">
                        <div class="[&_p]:!font-poppins [&_p]:text-white [&_p]:!text-[14px] [&_p]:!leading-[1.6] [&_p]:mb-0 [&_a]:text-[#FFD700] [&_a]:!font-poppins [&_a]:!text-[14px] [&_a]:!leading-[1.6] [&_a]:!underline [&_a:hover]:!no-underline [&_a:hover]:!text-[#FFD700] [&_a]:!decoration-dotted [&_a]:underline-offset-2 [&_a]:decoration-[#FFD700] [&_a:hover]:decoration-transparent">
                            <?= $frontpage_hero_banner_text; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>