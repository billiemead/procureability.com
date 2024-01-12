<?php $hero_title = get_field('hero_title'); ?>
<?php $hero_leading = get_field('hero_leading'); ?>
<?php $hero_features = get_field('hero_features'); ?>

<section class="py-[50px] lg:pt-[60px] lg:pb-[100px] bg-[#F7F9FA] bg-no-repeat bg-right-top"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/insights-subscribe/triangle-blue.svg');">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <?php if ($hero_title | $hero_leading) : ?>
            <div class="max-w-[788px] mx-auto mb-[56px]">
                <?php if ($hero_title) : ?>
                    <div class="text-center mb-[16px]">
                        <h1 class="font-poppins text-[36px] lg:text-[42px] leading-[1.5] brand-text-gradient text-transparent bg-clip-text font-semibold"><?= $hero_title; ?></h1>
                    </div>
                <?php endif; ?>
                <?php if ($hero_leading) : ?>
                    <div class="text-center">
                        <div class="font-poppins text-[16px] lg:text-[18px] leading-[1.5] text-[#393A40]"><?= $hero_leading ?></div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
        <?php if ($hero_features) : ?>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-y-[30px] md:gap-y-0 max-w-[375px] mx-auto md:max-w-none md:mx-0">
                <?php foreach ($hero_features as $feature) : ?>
                    <div class="text-center relative md:after:content-[''] md:after:block after:h-[96px] md:after:w-[1px] md:after:absolute md:after:right-0 md:after:top-[50%] md:after:-translate-y-[50%] md:after:bg-[#A0B0B8] md:last:after:content-none px-[15px]">
                        <div class="font-poppins text-[45px] lg:text-[60px] leading-normal font-medium tracking-[0.03em]"
                             style="color: rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>, <?= $feature['color']['alpha']; ?>);"><?= $feature['number']; ?></div>
                        <div class="font-poppins text-[16px] lg:text-[20px] leading-[1.24] tracking-[1.5px] text-[#474747] uppercase opacity-[85]">
                            <?= $feature['title']; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>