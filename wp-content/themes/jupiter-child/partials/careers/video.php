<?php $video_title = get_field('video_title'); ?>
<?php $video_video = get_field('video_video'); ?>
<?php if ($video_title || $video_video) : ?>
    <!--Video-->
    <section id="video">
        <div class="max-w-[1200px] px-[15px] mx-auto">
            <div class="px-[15px] lg:px-[48px] pt-[20px] lg:pt-[48px] pb-[20px] lg:pb-[40px] bg-[#F7F9FA]">
                <?php if ($video_video) : ?>
                    <div>
                        <?= $video_video; ?>
                    </div>
                <?php endif; ?>
                <?php if ($video_title) : ?>
                    <div class="text-center mt-[20px] lg:mt-[44px]">
                        <div class="font-poppins text-[24px] leading-[1.4] text-[#393A40] font-[600] tracking-[0.05em] uppercase"><?= $video_title; ?></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--Video-->
<?php endif; ?>