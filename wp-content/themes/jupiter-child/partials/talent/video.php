<?php $video_title = get_field('video_title'); ?>
<?php $video_video = get_field('video_video'); ?>
<?php if ($video_title || $video_video) : ?>
    <!--Video-->
    <section id="video" class="pb-[30px]">
        <div class="max-w-[930px] px-[15px] mx-auto">
            <div class="px-[15px] pt-[15px] pb-[40px]">
                <?php if ($video_video) : ?>
                    <div>
                        <?= $video_video; ?>
                    </div>
                <?php endif; ?>
                <?php if ($video_title) : ?>
                    <div class="text-center mt-[20px]">
                        <div class="text-[19px] leading-black text-[#000] font-[700]"><?= $video_title; ?></div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!--Video-->
<?php endif; ?>