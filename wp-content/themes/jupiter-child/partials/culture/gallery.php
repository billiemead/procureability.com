<?php $gallery_title = get_field('gallery_title'); ?>
<?php $gallery_gallery = get_field('gallery_gallery'); ?>

<section class="pt-[40px] md:pt-[50px]">
    <?php if ($gallery_title) : ?>
        <div class="text-center max-w-[894px] mx-auto px-[34px] mb-[20px]">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] md:text-[36px] leading-[1.4] font-medium tracking-[-0.02em] [&_br]:hidden [&_br]:inline"><?= $gallery_title; ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($gallery_gallery) : ?>
        <div class="overflow-hidden">
            <div class="grid grid-flow-col gap-[10px] xl:gap-[20px] py-[10px] xl:py-[20px] w-min" data-x-data="run"
                 data-x-ref="wrapper" data-x-intersect.once="start">
                <template data-x-for="row in rows">
                    <div class="grid grid-cols-[240px_240px_112px_240px_214px_240px] xl:grid-cols-[450px_450px_210px_450px_400px_450px] gap-[10px] xl:gap-[20px] [&_img:not(.lazyloaded)]:w-0 [&_img:not(.lazyloaded)]:h-0">
                        <div class="row-span-2">
                            <?= wp_get_attachment_image($gallery_gallery[0]['ID'], 'full', false, array('class' => 'block w-full h-auto')); ?>
                        </div>
                        <div class="col-span-2">
                            <?= wp_get_attachment_image($gallery_gallery[1]['ID'], 'full', false, array('class' => 'block w-full h-auto')); ?>
                        </div>
                        <div>
                            <?= wp_get_attachment_image($gallery_gallery[2]['ID'], 'full', false, array('class' => 'block w-full h-auto')); ?>
                        </div>
                        <div>
                            <?= wp_get_attachment_image($gallery_gallery[3]['ID'], 'full', false, array('class' => 'block w-full h-auto')); ?>
                        </div>
                        <div class="row-span-2">
                            <?= wp_get_attachment_image($gallery_gallery[4]['ID'], 'full', false, array('class' => 'block w-full h-auto')); ?>
                        </div>
                        <div>
                            <?= wp_get_attachment_image($gallery_gallery[5]['ID'], 'full', false, array('class' => 'block w-full h-auto')); ?>
                        </div>
                        <div class="col-span-2 col-start-3">
                            <?= wp_get_attachment_image($gallery_gallery[6]['ID'], 'full', false, array('class' => 'block w-full h-auto')); ?>
                        </div>
                        <div>
                            <?= wp_get_attachment_image($gallery_gallery[7]['ID'], 'full', false, array('class' => 'block w-full h-auto')); ?>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    <?php endif; ?>
</section>