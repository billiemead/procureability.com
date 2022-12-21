<?php $post_hero_title = get_field('post_hero_title'); ?>
<?php $post_hero_content = get_field('post_hero_content'); ?>
<?php $post_hero_background_image = get_field('post_hero_background_image'); ?>

<section
        class="pt-[48px] pb-[280px] lg:py-[150px] bg-[#F2F6F6] bg-no-repeat bg-[center_bottom] bg-[length:428px_auto] lg:bg-[left_calc(50%+373px)_bottom] lg:bg-[length:729px_auto]"
        style="background-image: url('<?= $post_hero_background_image['url']; ?>')">
    <div class="max-w-[1200px] mx-auto px-[34px]">
        <div class="max-w-[595px] mx-auto lg:mx-0">
            <div class="[&_p]:!font-poppins [&_p]:text-[14px] [&_p]:leading-[1.7] lg:[&_p]:text-[20px] lg:[&_p]:leading-[1.8] [&_p]:text-[#61636B] [&_p:not(:last-child)]:!mb-[8px] lg:[&_p:not(:last-child)]:!mb-[16px] text-center lg:!text-left">
                <?= $post_hero_content; ?>
            </div>
        </div>
    </div>
</section>