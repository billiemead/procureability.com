<?php $post_hero_title = get_field('post_hero_title'); ?>
<?php $post_hero_content = get_field('post_hero_content'); ?>
<?php $post_hero_background_image = get_field('post_hero_background_image'); ?>

<section
        class="pt-[48px] pb-[280px] lg:py-[138px] bg-[#F1F8F6] bg-no-repeat bg-[length:616px_auto] bg-[calc(50%+24px)_bottom] lg:bg-[length:1100px_auto] lg:bg-[calc(50%+550px-50px)_bottom] xl:bg-[calc(50%+550px-147px)_bottom]"
        style="background-image: url('<?= $post_hero_background_image['url']; ?>')">
    <div class="max-w-[1200px] mx-auto px-[34px]">
        <div class="max-w-[516px] mx-auto lg:mx-0">
            <div class="[&_p]:!font-poppins [&_p]:text-[14px] [&_p]:leading-[1.7] lg:[&_p]:text-[20px] lg:[&_p]:leading-[1.8] [&_p]:text-[#61636B] [&_p:not(:last-child)]:!mb-[8px] lg:[&_p:not(:last-child)]:!mb-[16px] text-center lg:!text-left">
                <?= $post_hero_content; ?>
            </div>
        </div>
    </div>
</section>