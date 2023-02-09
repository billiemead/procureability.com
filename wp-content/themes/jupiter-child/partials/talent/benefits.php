<?php $benefits_title = get_field('benefits_title'); ?>
<?php $benefits_benefits = get_field('benefits_benefits'); ?>

<section class="overflow-x-hidden pt-[48px] md:pt-[64px] xl:pt-[72px] pb-[48px] md:pb-[72px] xl:pb-[115px]">
    <div class="max-w-[1200px] mx-auto">
        <div class="text-center mb-[32px] md:mb-[40px]">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] leading-[1.4] md:text-[36px] md:leading-[1.5] font-[600]">
                <?= $benefits_title; ?>
            </div>
        </div>
        <div class="w-[304px] md:w-[636px] xl:w-auto mx-auto [&>div]:!overflow-visible">
            <div id="procureabilityBenefits" class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($benefits_benefits as $benefit) : ?>
                        <div class="swiper-slide">
                            <div class="pt-[130%] xl:pt-0 xl:!w-[390px] xl:!h-[512px] group">
                                <div class="inset-0 absolute xl:w-full xl:h-full xl:relative">
                                    <div class="!hidden rounded-[5px] overflow-hidden xl:block xl:group-active:opacity-0 xl:group-hover:opacity-0 xl:opacity-100 absolute inset-0 py-[28px] px-[28px] xl:!flex xl:!flex-col transition-opacity duration-300">
                                        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                                             style="background-image: url('<?= $benefit['cover']['url']; ?>')"></div>
                                        <div class="absolute inset-0"
                                             style="background: linear-gradient(0deg, rgba(<?= $benefit['color']['red']; ?>, <?= $benefit['color']['green']; ?>, <?= $benefit['color']['blue']; ?>, 0.7) 0%, rgba(<?= $benefit['color']['red']; ?>, <?= $benefit['color']['green']; ?>, <?= $benefit['color']['blue']; ?>, 0) 100%);"></div>
                                        <div class="mt-auto text-center relative">
                                            <div class="font-poppins text-white text-[24px] leading-[1.3] font-[600]">
                                                <?= $benefit['title']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-white xl:group-active:opacity-100 xl:group-hover:opacity-100 xl:opacity-0 py-[28px] px-[28px] flex flex-col absolute inset-0 transition-opacity duration-300 rounded-[5px] border border-solid"
                                         style="box-shadow: 0px 10px 20px rgba(<?= $benefit['color']['red']; ?>, <?= $benefit['color']['green']; ?>, <?= $benefit['color']['blue']; ?>, 0.3); border-color: rgb(<?= $benefit['color']['red']; ?>, <?= $benefit['color']['green']; ?>, <?= $benefit['color']['blue']; ?>)">
                                        <div class="mb-[10px] md:mb-[16px] xl:mb-[12px]">
                                            <div class="font-poppins text-[18px] leading-[1.2] md:text-[24px] md:leading-[1.3] font-[600]"
                                                 style="color: rgb(<?= $benefit['color']['red']; ?>, <?= $benefit['color']['green']; ?>, <?= $benefit['color']['blue']; ?>)">
                                                <?= $benefit['title']; ?>
                                            </div>
                                        </div>
                                        <div class="overflow-auto">
                                            <div class="[&_*]:!font-poppins [&_*]:!text-[#393A40] opacity-80 [&_*]:!text-[14px] [&_*]:!leading-[1.7] md:[&_*]:!text-[16px] md:[&_*]:!leading-[1.4] [&_ul]:!ml-[5px] [&_li]:!mb-[.5em] marker:text-[#0098AE] pr-[10px] xl:pr-0">
                                                <?= $benefit['content']; ?>
                                            </div>
                                            <?php if ($benefit['button']) : ?>
                                                <div class="mt-[30px]">
                                                    <a href="<?= $benefit['button']['url']; ?>"
                                                       target="<?= $benefit['button']['target'] ?: '_self' ?>"
                                                       class="block py-[12px] px-[12px] rounded-[3px] brand-button-gradient rounded-[3px] group/button relative text-center"
                                                    >
                                                        <div class="absolute inset-0 group-hover/button:opacity-0 opacity-100 transition-opacity duration-500"
                                                             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"></div>
                                                        <span class="relative font-poppins text-white text-[18px] leading-[1.51] font-[600] tracking-[0.1em] uppercase"><?= $benefit['button']['title']; ?></span>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
