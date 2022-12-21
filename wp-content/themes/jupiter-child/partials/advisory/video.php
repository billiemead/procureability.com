<?php $video_title = get_field('video_title'); ?>
<?php $video_video = get_field('video_video'); ?>

<?php if ($video_video) : ?>
    <section class="pr-[10px] lg:pt-[20px] pb-[30px] lg:pb-[80px]">
        <div class="max-w-[1200px] mx-auto px-[15px] box-border">
            <div class="p-[10px] md:p-[48px] bg-[#F7F9FA]">
                <div>
                    <?= $video_video; ?>
                </div>
                <?php if ($video_title) : ?>
                    <div class="text-center mt-[15px] md:mt-[46px]">
                        <span class="font-poppins text-[#393A40] text-[18px] md:text-[24px] leading-[1.4] font-semibold tracking-[0.05em]"><?= $video_title; ?></span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>