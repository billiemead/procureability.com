<?php $hero_title = get_field('hero_title'); ?>
<?php $hero_leading = get_field('hero_leading'); ?>
<?php $hero_background_image = get_field('hero_background_image'); ?>
<?php $hero_procureability_button = get_field('hero_procureability_button'); ?>
<?php $hero_industry_button = get_field('hero_industry_button'); ?>

<!--hero-->
<section class="pt-[185px] pb-[45px] xl:pt-[170px] bg-no-repeat bg-cover"
         style="background-image: url(<?= $hero_background_image['url']; ?>)">
    <div class="max-w-[1010px] mx-auto px-[15px]">
        <div class="text-center mb-[8px]">
            <?php if ($hero_title) : ?>
                <h1 class="font-poppins text-white text-[32px] lg:text-[42px] leading-[1.27] font-[600] tracking-[0.02em] !m-0"><?= $hero_title; ?>
                </h1>
            <?php endif; ?>
        </div>
        <?php if ($hero_leading) : ?>
            <div class="text-center">
                <div class="font-poppins text-white text-[24px] leading-[1.6]"><?= $hero_leading; ?></div>
            </div>
        <?php endif; ?>
        <div class="text-center mt-[32px] grid md:auto-cols-max md:grid-flow-col md:justify-center gap-[16px]">
            <?php if ($hero_procureability_button) : ?>
                <div class="min-w-[0px]">
                    <a class="inline-block box-border py-[12px] px-[30px] bg-white rounded-[3px] transition-opacity hover:opacity-80"
                       href="<?= $hero_procureability_button['url']; ?>"
                       target="<?= $hero_procureability_button['target'] ?: '_self'; ?>"
                    >
                        <span class="font-poppins text-[#0098AE] text-[14px] md:text-[18px] leading-[1.51] font-[700] tracking-[0.1em] uppercase align-middle"><?= $hero_procureability_button['title']; ?></span>
                    </a>
                </div>
            <?php endif; ?>
            <?php if ($hero_industry_button) : ?>
                <div class="min-w-[0px]">
                    <a class="inline-block box-border py-[12px] px-[30px] bg-white rounded-[3px] transition-opacity hover:opacity-80"
                       href="<?= $hero_industry_button['url']; ?>"
                       target="<?= $hero_procureability_button['target'] ?: '_self'; ?>"
                    >
                        <span class="font-poppins text-[#3BA17C] text-[14px] md:text-[18px] leading-[1.51] font-[700] tracking-[0.1em] uppercase align-middle"><?= $hero_industry_button['title']; ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--!hero-->