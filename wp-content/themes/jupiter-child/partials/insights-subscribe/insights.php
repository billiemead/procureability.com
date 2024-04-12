<?php $insights_title = get_field('insights_title'); ?>
<?php $insights_insights = get_field('insights_insights'); ?>
<?php $insights_button = get_field('insights_button'); ?>
<?php $form_form = get_field('form_form'); ?>

<section class="py-[50px] lg:pt-[84px] lg:pb-[100px] bg-[#F7F9FA] lg:bg-none">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        <?php if ($insights_title) : ?>
            <div class="text-center mb-[40px]">
                <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[32px] lg:text-[36px] leading-normal font-semibold">
                    <?= $insights_title; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($insights_insights) : ?>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-[24px] gap-y-[40px]">
                <?php foreach ($insights_insights as $insight) : ?>
                    <?php if ($insight['post']) : ?>
                        <div class="group/card">
                            <div class="mb-[20px]">
                                <a href="<?= get_the_permalink($insight['post']); ?>" title=" <?= get_the_title($insight['post']); ?>"
                                   class="block pt-[52.47%] rounded-[5px] overflow-hidden relative group z-20"
                                >
                                    <div class="absolute bg-cover bg-no-repeat bg-center inset-0 group-hover:scale-110 transition-transform ease-in-out duration-300 z-10"
                                         style="background-image: url('<?= get_the_post_thumbnail_url($insight['post'], 'large') ?>');"></div>
                                </a>
                            </div>
                            <?php if ($insight['category']) : ?>
                                <div class="mb-[12px]">
                                    <a
                                        href="<?= $insight['category_link'] ?>"
                                        class="font-poppins text-[12px] leading-[1.2] tracking-[0.2em] font-medium uppercase"
                                        style="color: rgba(<?= $insight['color']['red']; ?>, <?= $insight['color']['green']; ?>, <?= $insight['color']['blue']; ?>, <?= $insight['color']['alpha']; ?>)"
                                        title="<?= $insight['category'] ?>"
                                        target="_blank"
                                    >
                                        <?= $insight['category']; ?>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div>
                                <a href="<?= get_the_permalink($insight['post']); ?>" title=" <?= get_the_title($insight['post']); ?>"
                                   class="font-poppins text-[22px] leading-[1.4] font-semibold text-[#393A40] group-hover/card:text-[#0098AE]">
                                    <?= get_the_title($insight['post']); ?>
                                </a>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if ($insights_button && $form_form) : ?>
            <div class="text-center mt-[56px]">
                <button class="inline-block bg-[#3ba17c] pt-[13px] pb-[11px] lg:p-[16px] max-w-[300px] lg:max-w-[420px] w-full uppercase  rounded-[3px] group relative box-border border-none"
                        data-x-data="{}"
                        data-x-on:click="document.getElementById('subscribe').scrollIntoView({ behavior: 'smooth' })"
                >
                    <div class="absolute  inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg')"
                    ></div>
                    <span class="font-poppins text-white text-[16px] lg:text-[20px] leading-[1.5] font-semibold tracking-[0.1em] uppercase"><?= $insights_button['title']; ?></span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</section>