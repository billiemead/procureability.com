<?php $post_hero_title = get_field('post_hero_title'); ?>
<?php $post_hero_content = get_field('post_hero_content'); ?>
<?php $post_hero_image = get_field('post_hero_image'); ?>
<!--post hero-->
<section class="pt-[75px] pb-[82px]">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <div class="grid lg:grid-cols-[560px_1fr] gap-[50px] lg:gap-[104px] items-center">
            <div>
                <?php if ($post_hero_title) : ?>
                    <div class="mb-[16px] max-w-[523px]">
                        <div class="font-poppins text-[#393A40] text-[36px] leading-[1.5] font-[600]"><?= $post_hero_title; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($post_hero_content) : ?>
                    <div class="[&_p]:text-[#61636B] [&_p]:!font-poppins [&_p]:text-[16px] [&_p]:leading-[1.7]"><?= $post_hero_content; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div>
                <div class="[&_img]:block [&_img]:max-w-full [&_img]:w-full [&_img]:h-auto [&_img]:rounded-[10px]">
                    <?= wp_get_attachment_image($post_hero_image['id'], 'full'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--!post hero-->