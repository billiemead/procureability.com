<?php $gallery_title = get_field('gallery_title'); ?>
<?php $gallery_text = get_field('gallery_text'); ?>
<?php $gallery_photos = get_field('gallery_photos'); ?>

<section class="pb-[24px] pt-[80px] bg-[#F7F9FB]">
    <div class="max-w-[1200px] mx-auto box-border px-[15px]">
        <div class="grid lg:grid-cols-2 gap-[24px]">
            <div>
                <div class="lg:max-w-[503px]">
                    <?php if ($gallery_title) : ?>
                        <div class="lg:max-w-[366px] mb-[16px]">
                            <div class="font-poppins text-[36px] leading-[1.4] font-semibold text-[#393A40]">
                                <?= $gallery_title; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($gallery_text) : ?>
                        <div>
                            <div class="font-poppins text-[20px] leading-[1.6] text-[#61636B]">
                                <?= $gallery_text; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($gallery_photos) : ?>
                <?php foreach ($gallery_photos as $gallery_photo) : ?>
                    <div>
                        <img class="block w-full max-w-full"
                             src="<?= $gallery_photo['url']; ?>"
                             alt="<?= $gallery_photo['alt']; ?>"
                             title="<?= $gallery_photo['title']; ?>"
                        >
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>