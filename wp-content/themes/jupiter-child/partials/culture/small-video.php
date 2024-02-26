<?php $small_video_title = get_field('small_video_title'); ?>
<?php $small_video_text = get_field('small_video_text'); ?>
<?php $small_video_button = get_field('small_video_button'); ?>
<?php $small_video_video = get_field('small_video_video'); ?>
<?php $small_video_poster = get_field('small_video_poster'); ?>

<section class="py-[40px] md:py-[50px]">
    <div class="max-w-[1200px] px-[34px] mx-auto">
        <div class="grid md:grid-cols-[43%_49%] gap-[30px] md:gap-[8%] items-center">
            <div>
                <?php if ($small_video_title) : ?>
                    <div class="mb-[8px] text-center md:!text-left">
                        <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] md:text-[36px] leading-[1.4] font-medium tracking-[-0.02em]"><?= $small_video_title; ?></div>
                    </div>
                <?php endif; ?>
                <?php if ($small_video_text) : ?>
                    <div class="mb-[32px] text-center md:!text-left">
                        <div class="font-poppins text-[16px] leading-[1.7] text-[#393A40]"><?= $small_video_text; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($small_video_button) : ?>
                    <div class="text-center md:!text-left">
                        <a class="inline-block py-[12px] px-[38px] uppercase bg-[#3BA17C] rounded-[3px] group relative"
                           href="<?= $small_video_button['url']; ?>">
                            <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg')"
                            ></div>
                            <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] font-[700]"><?= $small_video_button['title']; ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($small_video_video) : ?>
                <div class="-mx-[34px] md:mx-0">
                    <div class="[&_.mejs-video_.mejs-controls]:opacity-0 [&_.mejs-video_.mejs-overlay-button]:hidden rounded-[3px] shadow-lg shadow-gray-400 overflow-hidden">
                        <?= do_shortcode('[video width="0" height="0" mp4="' . $small_video_video['url'] . '" poster="' . $small_video_poster['url'] . '"][/video]') ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>