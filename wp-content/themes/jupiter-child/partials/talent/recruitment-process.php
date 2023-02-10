<?php $recruitment_process_title = get_field('recruitment_process_title'); ?>
<?php $recruitment_process_leading = get_field('recruitment_process_leading'); ?>
<?php $recruitment_process_steps = get_field('recruitment_process_steps'); ?>

<section class="pt-[30px] lg:pt-[80px]">
    <div class="max-w-[636px] xl:max-w-[742px] px-[34px] md:px-0 mx-auto mb-[50px]">
        <?php if ($recruitment_process_title) : ?>
            <div class="text-center mb-[20px] xl:mb-[16px]">
                <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] leading-[1.4] md:text-[36px] md:leading-[1.5] font-[600]">
                    <?= $recruitment_process_title; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($recruitment_process_leading) : ?>
            <div class="text-center max-w-[870px] mx-auto">
                <div class="[&_p]:!font-poppins [&_p]:text-[#393A40] [&_p]:text-[16px] [&_p]:leading-[1.7]"><?= $recruitment_process_leading; ?></div>
            </div>
        <?php endif; ?>
    </div>
    <?php if ($recruitment_process_steps) : ?>
        <div class="bg-no-repeat bg-[center_top] pt-[115px]"
             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/talent-test/city-test.svg')">
            <div class="max-w-[1200px] mx-auto">
                <div class="w-full bg-[length:1200px_auto] bg-no-repeat bg-[center_top_100px] overflow-auto pb-[15px] px-[15px] box-border"
                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/talent-test/road-test.svg')">
                    <div class="flex">
                        <?php foreach ($recruitment_process_steps as $step) : ?>
                            <div class="px-[15px] box-border w-1/2 md:w-1/3 lg:w-3/12 flex-[1_0_auto] text-center"
                                 style="color: rgb(<?= $step['color']['red']; ?>, <?= $step['color']['green']; ?>, <?= $step['color']['blue']; ?>)">
                                <svg class="mb-[25px] md:mb-[57px]" xmlns="http://www.w3.org/2000/svg" width="86" height="121"
                                     viewBox="0 0 86 121"
                                     fill="none">
                                    <path d="M83.4022 45.6404C82.1926 68.3854 63.0322 85.8598 40.6062 84.6705C18.1802 83.4811 0.981003 64.0785 2.19063 41.3334C3.40026 18.5884 22.5607 1.11405 44.9867 2.30338C67.4126 3.49271 84.6119 22.8954 83.4022 45.6404Z"
                                          fill="currentColor"/>
                                    <path d="M42.7954 120.861L9.48633 67.8327L76.1045 67.8327L42.7954 120.861Z"
                                          fill="currentColor"/>
                                    <path d="M67.7829 44.0357C67.0525 57.7686 55.2729 68.308 41.4723 67.5761C27.6717 66.8442 17.0762 55.1182 17.8065 41.3853C18.5368 27.6525 30.3165 17.1131 44.1171 17.845C57.9177 18.5769 68.5132 30.3029 67.7829 44.0357Z"
                                          fill="white"/>
                                </svg>
                                <div class="font-poppins text-[18px] md:text-[24px] leading-[1.3] font-[600]"><?= $step['title']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>
<!--test-->