<?php $video = get_field('video_code'); ?>
<?php $video_es = get_field('video_code_es'); ?>
<?php $video_text = get_field('video_text'); ?>

<section class="mb-[25px] pt-[50px]" id="video">
    <div class="px-[15px] xl:px-0 max-w-[960px] mx-auto">
        <?php $video_hash = $_GET['video']; ?>
        <?php global $wp; ?>
        <div class="flex justify-end">
            <a href="<?= home_url($wp->request); ?>#video"
               class="font-poppins text-[#00626B] text-[20px] bg-[#f3f6f5] text-white cursor-pointer block font-medium py-[10px] px-[20px] [&.active]:text-[#fff] [&.active]:bg-[#00626B] font-extrabold <?= ($video_hash !== 'es') ? 'active' : null; ?>">
                EN
            </a>
            <a href="<?= home_url($wp->request); ?>/?video=es#video"
               class="font-poppins text-[#00626B] text-[20px] bg-[#f3f6f5] text-white cursor-pointer block font-medium py-[10px] px-[20px] [&.active]:text-[#fff] [&.active]:bg-[#00626B] font-extrabold <?= ($video_hash === 'es') ? 'active' : null; ?>">
                ES
            </a>
        </div>

        <div class="px-[15px] pt-[20px] md:pt-[50px] pb-[34px] md:pb-[64px] bg-[#00a3b7] rounded-[10px] md:rounded-[15px] !rounded-tr-none">
            <div>
                <?php if ($video_hash == 'es') { ?>
                    <div class="relative">
                        <?= $video_es; ?>
                    </div>
                <?php } else { ?>
                    <div class="pb-[56.25%] relative [&_*]:absolute [&_*]:inset-0 [&_*]:w-full [&_*]:h-full">
                        <?= $video; ?>
                    </div>
                <?php } ?>
            </div>
            <?php if ($video_text) : ?>
                <div class="font-poppins text-center text-[18px] leading-[1.3] md:text-[25px] md:leading-none text-white font-[600] pt-[20px] md:pt-[55px]">
                    <?= $video_text; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>