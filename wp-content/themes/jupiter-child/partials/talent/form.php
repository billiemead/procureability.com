<!--form-->
<section class="py-[32px] bg-[#0098AE] relative bg-cover bg-center bg-no-repeat"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/form-bg.png')">
    <div class="absolute inset-0 brand-bg-gradient opacity-[.25]"></div>
    <div class="relative px-[33px] md:px-0 md:max-w-[636px] xl:max-w-[1200px] mx-auto">
        <div class="xl:flex xl:items-center xl:justify-between">
            <div class="xl:w-[calc((478/1200)*100%)] mb-[24px] xl:mb-0">
                <div class="text-[24px] leading-[1.3] font-[500] mb-[16px] md:text-[34px] md:leading-[1.47] text-center xl:text-[33px] xl:leading-[1.38] xl:font-[600] xl:!text-left text-white xl:mb-[24px] xl:max-w-[368px]"><?= get_field('form_list_title'); ?></div>
                <?php $form_list = get_field('form_list'); ?>
                <?php if ($form_list) : ?>
                    <ul class="list-none ml-0 text-[14px] leading-[1.7] text-white xl:text-[18px] xl:leading-[1.6] xl:opacity-90 mb-0 space-y-[12px]">
                        <?php foreach ($form_list as $form_list_item) : ?>
                            <li class="relative pl-[23px] ml-0">
                                <svg class="absolute top-[8px] left-0" width="16" height="12"
                                     viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M15.0608 3.06065L6.69577 11.4257L0.939453 5.66935L3.06077 3.54803L6.69577 7.18302L12.9395 0.939331L15.0608 3.06065Z"
                                          fill="#F6881B"/>
                                </svg>

                                <div class="font-[600]"><?= $form_list_item['title']; ?></div>
                                <div class="font-[400]"><?= $form_list_item['text']; ?></div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="xl:w-[calc((555/1200)*100%)] mb-[-64px]">
                <div id="form"
                     class="relative bg-white w-full md:rounded-[6px] shadow-[0px_3px_20px_rgba(57,58,64,0.1)] py-[32px] px-[35px] md:pt-[40px] md:pb-[48px] md:px-[78px] xl:px-[54px] xl:pt-[50px] xl:pb-[46px] box-border">
                    <?php $form_title = get_field('form_title'); ?>
                    <?php if ($form_title) : ?>
                        <div class="text-[16px] md:text-[18px] xl:text-[20px] leading-[1.5] font-[500] xl:opacity-80 mb-[32px] text-center"><?= $form_title; ?></div>
                    <?php endif; ?>
                    <?php $form = get_field('form_form'); ?>
                    <?php if ($form) : ?>
                        <div class="digital-services-form">
                            <?= do_shortcode($form); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--!form-->