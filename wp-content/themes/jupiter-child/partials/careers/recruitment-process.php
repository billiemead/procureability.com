<?php $recruitment_process_title = get_field('recruitment_process_title'); ?>
<?php $recruitment_process_leading = get_field('recruitment_process_leading'); ?>
<?php $recruitment_process_steps_image = get_field('recruitment_process_steps_image'); ?>

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
    <?php if ($recruitment_process_steps_image) : ?>
        <div class="bg-no-repeat bg-[center_top] pt-[115px]"
             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/talent-test/city-test.svg')">
            <div class="max-w-[1200px] mx-auto">
                <div class="w-full bg-[length:1200px_auto] bg-no-repeat bg-[center_top_100px] overflow-auto pb-[15px] px-[15px] box-border">

                    <div class="text-center px-[15px] box-border overflow-x-auto">
                        <img class="min-w-[540px] max-w-[100%]" src="<?= $recruitment_process_steps_image['url'] ?>" alt="Recruitment Proccess">
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>