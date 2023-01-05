<?php $post_hero_title = get_field('post_hero_title'); ?>
<?php $post_hero_content = get_field('post_hero_content'); ?>
<?php $post_hero_background_image = get_field('post_hero_background_image'); ?>

<section
        class="pt-[48px] pb-[370px] lg:pt-[105px] lg:pb-[95px] bg-[#F2F6F6] bg-no-repeat bg-[center_bottom] bg-[length:657px_auto] lg:bg-[left_calc(50%+282px)_bottom] lg:bg-[length:877px_auto]"
        style="background-image: url('<?= $post_hero_background_image['url']; ?>')">
    <div class="max-w-[1200px] mx-auto px-[34px]">
        <div class="max-w-[495px] mx-auto lg:mx-0">
            <div class="mb-[16px] text-center lg:!text-left">
                <span class="text-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] lg:text-[36px] leading-[1.4] lg:leading-[1.5] font-[600]"><?= $post_hero_title; ?></span>
            </div>
            <div class="[&_p]:!font-poppins [&_p]:text-[14px] lg:[&_p]:text-[16px] [&_p]:text-[1.7] [&_p]:text-[#61636B] [&_p:not(:last-child)]:!mb-[8px] lg:[&_p:not(:last-child)]:!mb-[16px] text-center lg:!text-left">
                <?= $post_hero_content; ?>
            </div>
        </div>
    </div>
</section>