<?php $big_video_title = get_field('big_video_title'); ?>
<?php $big_video_video = get_field('big_video_video'); ?>
<?php $big_video_poster = get_field('big_video_poster'); ?>

<section class="pt-[40px] md:pt-[80px]">
    <div class="max-w-[1200px] mx-auto px-[34px]">
        <?php if ($big_video_title) : ?>
            <div class="mb-[40px] text-center">
                <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] md:text-[36px] leading-[1.3] tracking-[-0.02em] font-medium [&_br]:hidden md:[&_br]:inline">
                    <?= $big_video_title; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($big_video_video) : ?>
            <div class="-mx-[34px] md:mx-0">
                <?= wp_video_shortcode(array('mp4' => $big_video_video['url'], 'class' => 'w-full h-auto rounded-[3px] cursor-pointer', 'width' => 0, 'height' => 0,
                    'preload' => true, 'poster' => $big_video_poster['url'])) ?>
            </div>
        <?php endif; ?>
    </div>
</section>