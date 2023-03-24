<?php $post_hero_title = get_field('post_hero_title'); ?>
<?php $post_hero_content = get_field('post_hero_content'); ?>
<?php $post_hero_image = get_field('post_hero_image'); ?>
<!--post hero-->

<!--padding-bottom: 215px;-->
<!--background-position: center bottom;-->
<!--background-size: 375px auto;-->

<section
        class="pb-[235px] lg:pb-[108px] pt-[125px] bg-no-repeat bg-[length:375px_auto] bg-[center_bottom] lg:bg-[calc(50%+375px)_bottom] xl:bg-[calc(50%+375px-80px)_bottom] lg:bg-[length:750px_auto]"
        style="background-image: url('<?= $post_hero_image['url']; ?>')">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <div class="max-w-[523px] mx-auto lg:ml-0">
            <?php if ($post_hero_title) : ?>
                <div class="mb-[16px]">
                    <div class="font-poppins text-[#393A40] text-[26px] lg:text-[36px] leading-[1.5] font-[600]"><?= $post_hero_title; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($post_hero_content) : ?>
                <div class="[&_p]:text-[#61636B] [&_p]:!font-poppins [&_p]:text-[16px] [&_p]:leading-[1.7]"><?= $post_hero_content; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--!post hero-->