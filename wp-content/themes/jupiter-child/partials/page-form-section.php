<?php $form_section_form_shortcode = get_field('form_section_form_shortcode'); ?>

<?php if ($form_section_form_shortcode) : ?>
    <!--Form section-->
    <section class="py-[32px] bg-[#0098AE] bg-center bg-cover bg-no-repeat"
             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/form-section-bg.png')">
        <div class="max-w-[1200px] px-[33px] md:px-0 mx-auto">
            <div class="lg:grid lg:grid-cols-2 lg:gap-[76px] lg:items-center">
                <div class="pt-[40px] pb-[32px] lg:py-0 md:px-[34px] lg:px-0">
                    <?php $form_section_title = get_field('form_section_title'); ?>
                    <?php if ($form_section_title) : ?>
                        <div class="mb-[16px] lg:mb-[24px]">
                            <h2 class="font-poppins text-[24px] lg:text-[36px] leading-[1.38] text-white font-[600]"><?= $form_section_title; ?></h2>
                        </div>
                    <?php endif; ?>

                    <?php $form_section_list = get_field('form_section_list'); ?>
                    <?php if ($form_section_list) : ?>
                        <ul class="font-poppins text-[16px] lg:text-[18px] leading-[1.6] text-white space-y-[16px] list-none !m-0">
                            <?php foreach ($form_section_list as $form_section_list_item) : ?>
                                <li class="pl-[26px] lg:pl-[30px] !mx-0 relative">
                                    <svg class="absolute left-0 top-[8px]" width="15" height="11" viewBox="0 0 15 11"
                                         fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.24467 8.83995L2.39684 5.99212C2.24339 5.83867 2.03527 5.75246 1.81825 5.75246C1.60124 5.75246 1.39311 5.83867 1.23966 5.99212C1.08621 6.14558 1 6.3537 1 6.57072C1 6.67817 1.02116 6.78457 1.06229 6.88385C1.10341 6.98312 1.16368 7.07333 1.23966 7.14931L4.67018 10.5798C4.99025 10.8999 5.50729 10.8999 5.82736 10.5798L14.5103 1.89684C14.6638 1.74339 14.75 1.53527 14.75 1.31825C14.75 1.10124 14.6638 0.893113 14.5103 0.739661C14.3569 0.586209 14.1488 0.5 13.9317 0.5C13.7147 0.5 13.5066 0.586209 13.3532 0.739661L5.24467 8.83995Z"
                                              fill="white" stroke="white" stroke-width="0.2"/>
                                    </svg>
                                    <span class="opacity-80"><?= $form_section_list_item['form_section_list_item']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
                <div class="">
                    <div id="form"
                         class="relative bg-white mx-[-22px] md:mx-0 lg:rounded-[6px] lg:shadow-[0px_3px_20px_rgba(57,58,64,0.1)] px-[34px] py-[32px] lg:py-[48px] lg:px-[56px] box-border">
                        <?php $form_section_form_title = get_field('form_section_form_title'); ?>
                        <?php if ($form_section_form_title) : ?>
                            <div class="mb-[24px] lg:mb-[32px] lg:text-center">
                                <span class="font-poppins text-[18px] xl:text-[20px] leading-[1.5] font-[600] lg:font-[500] opacity-80 text-center text-[#393A40] font-semibold lg:font-medium"><?= $form_section_form_title; ?></span>
                            </div>
                        <?php endif; ?>
                        <?= do_shortcode($form_section_form_shortcode); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Form section-->
<?php endif; ?>
