<?php $video_title = get_field('video_title'); ?>
<?php $video_video = get_field('video_video'); ?>
<?php $video_video_es = get_field('video_video_es'); ?>

<section class="mb-[25px]" id="video">
    <div class="px-[15px] xl:px-0 max-w-[960px] mx-auto">
        <?php $video_hash = $_GET['video']; ?>
        <?php global $wp; ?>
        <?php if ($video_video && $video_video_es) : ?>
            <div class="flex justify-end">
                <a href="<?= home_url($wp->request); ?>#video"
                   class="bg-[#0093a5] text-white cursor-pointer block font-medium py-[10px] px-[20px] [&.active]:bg-[#00a3b7] [&.active]:font-extrabold <?= ($video_hash !== 'es') ? 'active' : null; ?>">
                    EN
                </a>
                <a href="<?= home_url($wp->request); ?>/?video=es#video"
                   class="bg-[#0093a5] text-white cursor-pointer block font-medium py-[10px] px-[20px] [&.active]:bg-[#00a3b7] [&.active]:font-extrabold <?= ($video_hash === 'es') ? 'active' : null; ?>">
                    ES
                </a>
            </div>
        <?php endif; ?>

        <div class="px-[15px] pt-[20px] md:pt-[50px] pb-[34px] md:pb-[64px] bg-[#00a3b7] rounded-[10px] md:rounded-[15px] <?= ($video_video && $video_video_es) ? 'rounded-tr-none' : null; ?>">
            <div>
                <?php if ($video_hash === 'es') : ?>
                    <div class="relative">
                        <?= $video_video_es; ?>
                    </div>
                <?php else: ?>
                    <div class="pb-[56.25%] relative [&>*]:absolute [&>*]:inset-0 [&>*]:w-full [&>*]:h-full">
                        <?= $video_video; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($video_title) : ?>
                <div class="text-center text-[18px] leading-[1.3] md:text-[25px] md:leading-none text-white font-[600] pt-[20px] md:pt-[55px]">
                    <?= $video_title; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>