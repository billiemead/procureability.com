<?php $insights_title = get_field('insights_title'); ?>
<?php $insights_insights = get_field('insights_insights'); ?>
<?php $insights_cta = get_field('insights_cta'); ?>

<?php if ($insights_insights || $insights_cta) : ?>
    <section class="pt-[40px] md:pt-[80px] pb-[50px] md:pb-[100px]">
        <div class="max-w-[1200px] mx-auto px-[15px] lg:px-[34px]">
            <?php if ($insights_title) : ?>
                <div class="mb-[48px] text-center">
                    <div class="font-poppins text-black text-[28px] md:text-[36px] leading-[1.35] font-semibold"><?= $insights_title; ?></div>
                </div>
            <?php endif; ?>
            <div class="max-w-[346px] mx-auto md:max-w-none md:mx-0 grid gap-[48px] md:grid-cols-2 md:gap-x-[24px] lg:grid-cols-3 lg:gap-x-[24px] lg:gap-y-[80px]">
                <?php if ($insights_insights) : ?>
                    <?php foreach ($insights_insights as $key => $insight) : ?>
                        <div>
                            <div class="group" style="perspective: 1000px;">
                                <div class="pt-[117.19%] relative group-hover:rotate-y-[180deg] transition-transform duration-[1500ms] transform-style-3d group-hover:delay-100 delay-500 ease-out">
                                    <!--back-->
                                    <div class="absolute inset-0 rotate-y-[180deg] backface-hidden overflow-hidden rounded-[5px] border-solid border-2"
                                         style="border-color: rgba(<?= $insight['color']['red']; ?>, <?= $insight['color']['green']; ?>, <?= $insight['color']['blue']; ?>, .3)">
                                        <div class="absolute inset-0 bg-center bg-cover bg-no-repeat rounded-[5px]"
                                             style="background-image: url('<?= $insight['image']['url']; ?>')"></div>
                                        <div class="absolute inset-0 flex flex-col px-[40px] py-[40px] bg-white/90 backdrop-blur-[9px]">
                                            <div class="min-h-0 flex flex-col">
                                                <div class="mb-[12px]">
                                                    <div class="font-poppins text-[26px] leading-[1.35] font-semibold"
                                                         style="color: rgba(<?= $insight['color']['red']; ?>, <?= $insight['color']['green']; ?>, <?= $insight['color']['blue']; ?>, <?= $insight['color']['alpha']; ?>)"><?= $insight['title']; ?></div>
                                                </div>
                                                <div class="min-h-0 overflow-auto">
                                                    <div class="[&_p]:font-poppins [&_p]:text-[16px] [&_p]:leading-[1.7] [&_p]:text-[#61636B]"><?= $insight['content']; ?></div>
                                                </div>
                                            </div>
                                            <?php if ($insight['link']) : ?>
                                                <?php $button_color = 'rgba(' . $insight['color']['red'] . ',' . $insight['color']['green'] . ',' . $insight['color']['blue'] . ',' . $insight['color']['alpha'] . ')'; ?>
                                                <div class="mt-auto pt-[20px] lg:pt-[10px]">
                                                    <a class="inline-block py-[12px] px-[60px] text-center rounded-[3px] relative group/button overflow-hidden border-2 border-solid hover:!bg-transparent transition-colors duration-500"
                                                       href="<?= $insight['link']['url']; ?>"
                                                       style="border-color: <?= $button_color ?>; background-color: <?= $button_color; ?>; color: <?= $button_color; ?>"
                                                    >
                                                        <span class="relative font-poppins text-[18px] font-semibold leading-normal text-white group-hover/button:text-[currentColor] tracking-[0.14em] uppercase transition-colors duration-500"><?= $insight['link']['title']; ?></span>
                                                    </a>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <!--back-->
                                    <!--front-->
                                    <div class="absolute inset-0 rotate-0 backface-hidden overflow-hidden p-[40px] flex flex-col bg-cover bg-center bg-no-repeat rounded-[5px]"
                                         style="background-image: linear-gradient(45deg, rgba(<?= $insight['color']['red']; ?>, <?= $insight['color']['green']; ?>, <?= $insight['color']['blue']; ?>, <?= $insight['color']['alpha']; ?>) -15%, transparent 55%), url('<?= $insight['image']['url']; ?>');"
                                    >
                                        <div class="mt-auto">
                                            <div class="font-poppins text-[30px] leading-[1.35] text-white font-semibold"><?= $insight['title']; ?></div>
                                        </div>
                                    </div>
                                    <!--front-->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                <?php if ($insights_cta) : ?>
                    <div>
                        <div class="pt-[117.19%] relative">
                            <div class="absolute inset-0 rounded-[5px] p-[40px] border-2 border-solid border-[rgba(0,152,174,0.6)] shadow-[0px_9px_42px_rgba(0,152,174,0.16)] bg-no-repeat bg-[right_-100px_bottom_-156px]"
                                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/branding-star-tilted.svg')">
                                <div class="mb-[20px]">
                                    <div class="font-poppins text-[#393A40] text-[30px] leading-[1.3] font-semibold ">
                                        <?= $insights_cta['title']; ?>
                                    </div>
                                </div>
                                <div>
                                    <a class="inline-block pt-[11px] pb-[8px] px-[22px] text-center rounded-[3px] bg-[#3BA17C] border-2 border-solid group border-[#3BA17C] hover:bg-transparent transition-colors duration-500"
                                       href="<?= $insights_cta['button']['url']; ?>">
                                        <span class="font-poppins text-white text-[18px] leading-[1.3] font-semibold tracking-[0.1em] uppercase group-hover:text-[#3BA17C] transition-colors duration-500"><?= $insights_cta['button']['title']; ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>