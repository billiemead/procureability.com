<?php
/*
    Template Name: Digital services
    Template Post Type: page
*/
?>
<?php get_header(); ?>

    <div class="theme-styles-overwrite text-[#393A40]">
        <!--hero-->
        <section class="pt-[58px] pb-[48px] xl:pt-[140px] xl:pb-[70px] bg-center bg-cover bg-no-repeat"
                 style="background-image: url('<?= get_field('hero_background_image')['url']; ?>'); ">
            <div class="md:max-w-[636px] xl:max-w-[1010px] mx-auto px-[33px] md:px-0">
                <div class="mb-[24px] xl:mb-[32px] text-center">
                    <h1 class="text-[22px] leading-[1.2] font-[500] md:text-[32px] md:leading-[1.27] xl:text-[40px] xl:leading-[1.3] xl:font-[600] text-white"><?= get_field('hero_text') ?></h1>
                </div>
                <div class="text-center">
                    <a class="inline-block pt-[13px] pb-[11px] px-[30px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
                       href="#form"
                    >
                        <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                        ></div>
                        <span class="relative text-white text-[18px] leading-[1.51] font-[700] uppercase"><?= get_field('hero_button_text') ?></span>
                    </a>
                </div>
            </div>
        </section>
        <!--!hero-->

        <!--top content-->
        <section class="pt-[32px] pb-[40px] md:pt-[40px] md:pb-[48px] xl:pt-[95px] xl:pb-[100px]">
            <div class="px-[33px] xl:px-0 md:max-w-[636px] xl:max-w-[1180px] mx-auto grid gap-[32px] md:gap-[40px] xl:gap-[90px]">
                <?php $top_content_groups = get_field('top_content_group'); ?>
                <?php if ($top_content_groups) : ?>
                    <?php foreach ($top_content_groups as $key => $top_content_group) : ?>
                        <div class="xl:flex xl:items-center xl:justify-between">
                            <div class="xl:w-[calc((555/1180)*100%)] <?php if ($key % 2 !== 0) : ?>xl:order-2<?php endif; ?>">
                                <div class="text-[18px] leading-[1.3] font-[500] md:text-[20px] md:leading-[1.27] xl:text-[28px] xl:leading-[36px] xl:font-[600] mb-[16px]">
                                    <?= $top_content_group['title']; ?>
                                </div>
                                <div class="[&_p]:text-[14px] [&_p]:leading-[1.7] opacity-[.8] md:opacity-100 [&_p]:xl:text-[18px] [&_p]:xl:leading-[1.6] [&_p]:xl:opacity-100">
                                    <?= $top_content_group['text']; ?>
                                </div>
                            </div>
                            <div class="xl:w-[calc((540/1180)*100%)] <?php if ($key % 2 !== 0) : ?>xl:order-1<?php endif; ?>">
                                <div class="pb-[66.56%] md:pb-[39.37%] xl:pb-[66.67%] w-full relative">
                                    <div class="absolute rounded-[10px] inset-0 bg-no-repeat bg-top bg-cover"
                                         style="background-image: url('<?= $top_content_group['image']['url']; ?>')"></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>
        <!--!top content-->

        <!--form-->
        <section class="py-[32px] bg-[#0098AE] relative bg-cover bg-center bg-no-repeat"
                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/form-bg.png')">
            <div class="absolute inset-0 brand-bg-gradient opacity-[.25]"></div>
            <div class="relative px-[33px] md:px-0 md:max-w-[636px] xl:max-w-[1200px] mx-auto">
                <div class="xl:flex xl:items-center xl:justify-between">
                    <div class="xl:w-[calc((478/1200)*100%)] mb-[24px] xl:mb-0">
                        <div class="text-[24px] leading-[1.3] font-[500] mb-[16px] md:text-[34px] md:leading-[1.47] text-center xl:text-[33px] xl:leading-[1.38] xl:font-[600] xl:!text-left text-white xl:mb-[24px] xl:max-w-[368px]"><?= get_field('form_title'); ?></div>
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
                    <div class="xl:w-[calc((555/1200)*100%)]">
                        <div id="form"
                             class="relative bg-white mx-[-22px] md:mx-0 md:rounded-[6px] shadow-[0px_3px_20px_rgba(57,58,64,0.1)] py-[32px] px-[35px] md:pt-[40px] md:pb-[48px] md:px-[78px] xl:px-[54px] xl:pt-[50px] xl:pb-[46px] box-border">
                            <?php $form_name = get_field('form_name'); ?>
                            <?php if ($form_name) : ?>
                                <div class="font-poppins text-[16px] md:text-[18px] xl:text-[20px] leading-[1.5] font-[500] xl:opacity-80 mb-[32px] text-center text-[#393A40]"><?= $form_name; ?></div>
                            <?php endif; ?>
                            <?php $form_shortcode = get_field('form_shortcode'); ?>
                            <?php if ($form_shortcode) : ?>
                                <?= do_shortcode($form_shortcode); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--!form-->

        <!--quote-->
        <section class="pt-[64px] pb-[40px] md:pt-[80px] md:pb-[48px] xl:pt-[110px] xl:pb-[88px] bg-[#F7F9FA]">
            <div class="px-[33px] xl:px-[0] md:max-w-[636px] xl:max-w-[1180px] mx-auto">
                <div class="xl:flex xl:justify-around xl:items-center">
                    <div class="md:max-w-[452px] xl:msx-w-auto md:mx-auto xl:mx-0 xl:w-[calc((452/1180)*100%)] mb-[16px] md:mb-[31px] xl:mb-0">
                        <div class="text-center xl:!text-left">
                            <span class="text-[24px] leading-[1.27] font-[500] md:text-[26px] md:leading-[1.47] xl:text-[34px] xl:leading-[1.5] xl:font-[600] text-[#00A2B7] brand-text-gradient text-transparent bg-clip-text"><?= get_field('quote_title'); ?></span>
                        </div>
                    </div>
                    <div class="xl:w-[calc((575/1180)*100%)]">
                        <div class="pb-[16px] xl:pt-[14px] text-center md:!text-left md:max-w-[480px] xl:max-w-none md:mx-auto xl:pl-[64px]  md:pb-[33px] xl:max-w-auto xl:mx-0 xl:pr-[59px] xl:pl-[68px] xl:pb-[20px] xl:text-left relative box-border">
                            <svg class="hidden md:block absolute md:top-[-12px] xl:top-[8px] md:left-[-38px] xl:left-[22px] w-[30px] h-auto"
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="40"
                                 height="32" viewBox="0 0 40 32"
                                 fill="none">
                                <path opacity="0.2"
                                      d="M8.87301 0C6.37748 0 4.25165 0.844593 2.49553 2.53378C0.831845 4.31681 0 6.47522 0 9.009C0 10.5105 0.277282 11.9651 0.831845 13.3727C1.47883 14.7804 2.44932 16.4696 3.7433 18.4403L12.4777 31.25L18.0233 27.5901L11.2299 17.0327C12.8936 16.7511 14.3724 15.8596 15.6664 14.3581C16.9604 12.9504 17.6074 11.1674 17.6074 9.009C17.6074 6.47522 16.7293 4.31681 14.9732 2.53378C13.3095 0.844593 11.2761 0 8.87301 0ZM30.8497 0C28.3542 0 26.2284 0.844593 24.4722 2.53378C22.8085 4.31681 21.9767 6.47522 21.9767 9.009C21.9767 10.5105 22.254 11.9651 22.8085 13.3727C23.4555 14.7804 24.426 16.4696 25.72 18.4403L34.4544 31.25L40 27.5901L33.2066 17.0327C34.8703 16.7511 36.3491 15.8596 37.6431 14.3581C38.9371 12.9504 39.5841 11.1674 39.5841 9.009C39.5841 6.47522 38.706 4.31681 36.9499 2.53378C35.2862 0.844593 33.2528 0 30.8497 0Z"
                                      fill="#0098AE"/>
                            </svg>
                            <svg class="hidden md:block absolute md:bottom-[30px] xl:bottom-[20px] md:right-[0px] md:right-[50px] xl:right-[110px] w-[30px] h-auto"
                                 xmlns="http://www.w3.org/2000/svg"
                                 width="40"
                                 height="32" viewBox="0 0 40 32" fill="none">
                                <path opacity="0.2"
                                      d="M31.127 0C33.6225 0 35.7483 0.844595 37.5045 2.53378C39.1682 4.31682 40 6.47523 40 9.009C40 10.5105 39.7227 11.9651 39.1682 13.3727C38.5212 14.7804 37.5507 16.4696 36.2567 18.4403L27.5223 31.25L21.9767 27.5901L28.7701 17.0327C27.1064 16.7511 25.6276 15.8596 24.3336 14.3581C23.0396 12.9504 22.3926 11.1674 22.3926 9.009C22.3926 6.47523 23.2707 4.31682 25.0268 2.53378C26.6905 0.844595 28.7239 0 31.127 0ZM9.15029 0C11.6458 0 13.7716 0.844595 15.5278 2.53378C17.1915 4.31682 18.0233 6.47523 18.0233 9.009C18.0233 10.5105 17.746 11.9651 17.1915 13.3727C16.5445 14.7804 15.574 16.4696 14.28 18.4403L5.54563 31.25L0 27.5901L6.79339 17.0327C5.1297 16.7511 3.65087 15.8596 2.35689 14.3581C1.06291 12.9504 0.41592 11.1674 0.41592 9.009C0.41592 6.47523 1.29398 4.31682 3.05009 2.53378C4.71378 0.844595 6.74718 0 9.15029 0Z"
                                      fill="#0098AE"/>
                            </svg>
                            <p class="!text-[14px] !leading-[1.65] !tracking-[-0.01em] md:!text-[16px] md:!leading-[1.7] xl:!text-[18px] xl:!leading-[1.6] xl:!tracking-normal opacity-[.8] mb-[0] before:content-['“'] after:content-['”'] md:before:content-none md:after:content-none"><?= wp_strip_all_tags(get_field('quote_content')); ?></p>
                        </div>

                        <div class="xl:pr-[40px] xl:pl-[70px]">
                            <div class="flex items-center justify-center xl:justify-start">
                                <div class="w-[50px] md:w-[77px] mr-[16px]">
                                    <img class="block w-full"
                                         src="<?= get_field('quote_author_photo')['url']; ?>"
                                         alt="<?= get_field('quote_author_name'); ?>">
                                </div>
                                <div class="text-[12px] leading-[1.5] md:text-[16px] md:leading-[1.47] opacity-[.8]">
                                    <div class="font-[500]"><?= get_field('quote_author_name'); ?></div>
                                    <div><?= get_field('quote_author_position'); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--!quote-->

        <!--analytics-->
        <section class="pt-[32px] pb-[40px] md:pt-[40px] md:pb-[48px] xl:pt-[85px] xl:pb-[88px]">
            <div class="px-[33px] xl:px-0 max-w-[1180px] mx-auto">
                <div class="max-w-[404px] mx-auto mb-[16px] xl:mb-[40px]">
                    <div class="xl:flex xl:justify-center xl:items-center">
                        <div class="mb-[8px] xl:mb-0 xl:mr-[24px]">
                            <img class="block mx-auto xl:mx-0 md:w-[100px] xl:w-[95px]"
                                 src="<?= get_field('analytics_logo')['url']; ?>"
                                 alt="logo">
                        </div>
                        <div class="text-center xl:text-left">
                            <span class="brand-text-gradient text-transparent bg-clip-text text-[24px] leading-[1.47] font-[500] md:text-[26px] xl:text-[34px] xl:leading-[1.27] font-[600]"><?= get_field('analytics_title'); ?></span>
                        </div>
                    </div>
                </div>
                <div class="md:max-w-[603px] xl:max-w-[770px] mx-auto mb-[24px] md:mb-[32px] xl:mb-[40px] text-center xl:text-left">
                    <p class="text-[14px] opacity-[.8] xl:text-[16px] leading-[1.7] xl:opacity-100 mb-0">
                        <?= wp_strip_all_tags(get_field('analytics_content')); ?></p>
                </div>
                <div class="md:max-w-[636px] xl:max-w-[907px] mx-auto">
                    <div class="rounded-[5px] xl:rounded-[10px] border border-solid border-[#0098AE] overflow-hidden">
                        <div class="bg-[rgba(0,152,174,.1)] py-[25px] px-[40px] md:px-[58px] md:py-[16px] xl:py-[20px] xl:px-[46px] text-[16px] leading-[1.47] md:text-[20px] xl:text-[21px] xl:leading-[1.68] font-[500] text-center">
                            <?= get_field('analytics_list_title'); ?>
                        </div>
                        <?php $analytics_list = get_field('analytics_list'); ?>
                        <?php if ($analytics_list) : ?>
                            <ul class="pt-[24px] px-[24px] pb-[40px] md:pt-[36px] md:pb-[32px] md:px-[38px] xl:pt-[34px] xl:px-[60px] xl:pb-[42px] list-none xl:flex xl:flex-wrap [&_li:nth-child(odd)]:xl:w-[341px] [&_li:nth-child(even)]:xl:w-[399px] xl:justify-around m-0 text-[14px] leading-[1.4] md:text-[16px] xl:text-[18px] xl:leading-[2.1] space-y-[8px] md:space-y-[16px] xl:space-y-0 box-border">
                                <?php foreach ($analytics_list as $analytics_list_item) : ?>
                                    <li class="relative pl-[28px] ml-0 box-border">
                                        <svg class="absolute left-[5px] top-[6px] xl:left-0 xl:top-[11px] w-[12px] xl:w-[17px] h-auto"
                                             xmlns="http://www.w3.org/2000/svg" width="17"
                                             height="12" viewBox="0 0 17 12"
                                             fill="none">
                                            <path d="M2.25 6.75L6 10.5L14.75 1.75" stroke="#0098AE" stroke-width="3"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <?= $analytics_list_item['item']; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!--!analytics-->

        <?php $video_title = get_field('video_title'); ?>
        <?php $video_video = get_field('video_video'); ?>

        <?php if ($video_title || $video_video) : ?>
            <!--Video-->
            <section class="mb-[25px]" id="video">
                <div class="px-[15px] xl:px-0 max-w-[960px] mx-auto">
                    <div class="px-[15px] pt-[20px] md:pt-[50px] pb-[34px] md:pb-[64px] bg-[#00a3b7] rounded-[10px] md:rounded-[15px]">
                        <div>
                            <div class="pb-[56.25%] relative [&>*]:absolute [&>*]:inset-0 [&>*]:w-full [&>*]:h-full">
                                <?= $video_video; ?>
                            </div>
                        </div>
                        <?php if ($video_title) : ?>
                            <div class="text-center text-[18px] leading-[1.3] md:text-[25px] md:leading-none text-white font-[600] pt-[20px] md:pt-[55px]">
                                <?= $video_title; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <!--Video-->
        <?php endif; ?>

        <!--benefits-->
        <section class="bg-[#F7F9FA] pt-[32px] pb-[39px] xl:pt-[123px] xl:pb-[117px]">
            <div class="px-[33px] xl:px-0 md:max-w-[464px] xl:max-w-[1084px] mx-auto">
                <div class="relative">
                    <div class="hidden xl:block [&_div]:absolute [&_div]:right-[50%] [&_div]:top-[50%] [&_div]:translate-x-[50%] [&_div]:translate-y-[-50%] [&_div]:border [&_div]:border-solid [&_div]:border-[#01738C] [&_div]:rounded-full [&_div]:opacity-[.1]">
                        <div class="h-[633px] w-[633px]"></div>
                        <div class="h-[461px] w-[461px]"></div>
                        <div class="h-[293px] w-[293px]"></div>
                    </div>
                    <div class="xl:absolute xl:right-[50%] xl:top-[50%] xl:translate-x-[50%] xl:translate-y-[-50%] text-center mb-[25px] xl:mb-0">
                        <div class=" mb-[8px] xl:mb-0">
                            <span class="brand-text-gradient text-transparent bg-clip-text text-[24px] font-[500] xl:text-[34px] leading-[1.27] xl:font-[600]"><?= get_field('benefits_title'); ?></span>
                        </div>
                        <img class="max-w-[230px] block mx-auto" src="<?= get_field('benefits_logo')['url']; ?>" alt="logo">
                    </div>
                    <?php $benefits_list = get_field('benefits_list'); ?>
                    <?php if ($benefits_list) : ?>
                        <ul class="relative grid gap-y-[12px] md:gap-y-[10px] xl:grid-cols-[386px_386px] xl:gap-x-[312px] xl:gap-y-[24px] list-none m-0">
                            <?php foreach ($benefits_list as $key => $benefits_list_item) : ?>
                                <li class="wow fadeIn h-[67px] md:h-[75px] xl:w-[386px] xl:h-[90px] rounded-[100px] border border-solid border-[rgba(1,115,140,0.3)] bg-white flex justify-center items-center text-center py-[20px] px-[10px] box-border m-0 relative <?php if (in_array($key, array(2, 6))) {
                                    echo 'xl:left-[-43px]';
                                } else if (in_array($key, array(3, 7))) {
                                    echo 'xl:right-[-43px]';
                                } else if ($key == 4) {
                                    echo 'xl:left-[-86px]';
                                } else if ($key == 5) {
                                    echo 'xl:right-[-86px]';
                                } ?>"
                                    data-wow-delay="<?php if (in_array($key, array(0, 1))) : ?>0s<?php elseif (in_array($key, array(2, 3))) : ?>.05s<?php elseif (in_array($key, array(4, 5))) : ?>.1s<?php elseif (in_array($key, array(6, 7))) : ?>.15s<?php elseif (in_array($key, array(8, 9))) : ?>.2s<?php endif; ?>"
                                    data-wow-duration="2s">
                                    <span class="[&_br]:xl:hidden text-[14px] leading-[1.4] md:text-[16px] md:leading-[1.3] xl:text-[18px] xl:leading-[1.4] font-[500] xl:font-[400]"><?= $benefits_list_item['item']; ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!--!benefits-->

        <!--bottom content-->
        <section class="pt-[32px] pb-[48px] md:pt-[40px] xl:py-[83px] relative">
            <img class="hidden xl:block absolute top-[-75px] left-0"
                 src="<?= get_stylesheet_directory_uri(); ?>/page-digital-services/triangles-bg.svg" alt="triangles">
            <div class="relative px-[33px] xl:px-0 md:max-w-[646px] xl:max-w-[1200px] mx-auto grid gap-[48px] xl:gap-[107px]">
                <div>
                    <div class="max-w-[1069px] mx-auto text-center mb-[24px] md:mb-[20px] xl:mb-[32px]">
                        <div class="[&_p]:text-[14px] [&_p]:leading-[1.7] [&_p]:md:text-[18px] [&_p]:md:leading-[1.6] xl:opacity-80">
                            <?= get_field('bottom_content_top_text'); ?></div>
                    </div>
                    <div class="md:max-w-[527px] xl:max-w-[655px] mx-auto text-center text-[18px] leading-[1.47] font-[500] mb-[16px] md:mb-[24px] md:text-[20px] md:leading-[1.4] xl:text-[22px] font-[600] xl:mb-[40px]">
                        <?= get_field('bottom_content_title'); ?>
                    </div>
                    <?php $bottom_content_list = get_field('bottom_content_list'); ?>
                    <?php if ($bottom_content_list) : ?>
                        <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-[12px] md:gap-x-[36px] md:gap-y-[10px] xl:gap-[20px]">
                            <?php foreach ($bottom_content_list as $key => $bottom_content_list_item) : ?>
                                <div class="wow fadeIn py-[22px] px-[19px] rounded-[5px] md:rounded-[3px] border border-solid border-[rgba(0,152,174,0.4)] flex items-center justify-center text-center h-[72px] xl:h-[80px] box-border bg-white"
                                     data-wow-delay="<?= $key * 0.05; ?>s" data-wow-duration="2s">
                                    <span class="text-[14px] leading-[1.3] md:text-[16px] xl:text-[18px] font-[500]">
                                        <?= $bottom_content_list_item['item']; ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php $bottom_content_group = get_field('bottom_content_group'); ?>
                <?php if ($bottom_content_group) : ?>
                    <div class="grid gap-[32px] xl:gap-[100px]">
                        <?php foreach ($bottom_content_group as $key => $bottom_content_group_item) : ?>
                            <div>
                                <div class="xl:flex xl:items-center xl:justify-between">
                                    <div class="mb-[24px] xl:mb-0 xl:w-[calc((524/1200)*100%)] <?= ($key % 2 !== 0) ? 'xl:order-2' : null; ?>">
                                        <div class=" text-[24px] font-[500] mb-[16px] xl:text-[34px] leading-[1.47] xl:font-[600] xl:mb-[24px] <?= ($key % 2 !== 0) ? 'text-[#F6881B]' : 'text-[#3BA17C]'; ?>">
                                            <?= $bottom_content_group_item['title']; ?>
                                        </div>
                                        <div class="[&_p]:text-[14px] [&_p]:xl:text-[18px] [&_p]:leading-[1.6] [&_a]:font-[600] [&_a]:xl:font-[500] [&_a]:!underline [&_a]:!decoration-[transparent] [&_a]:!transition-all [&_a]:!duration-200 [&_a]:!decoration-[#3BA17C] [&_a]:!decoration-dotted [&_a]:!font-poppins [&_a]:!underline-offset-[6px] hover:[&_a]:!decoration-[transparent]">
                                            <?= apply_filters('the_content', $bottom_content_group_item['content']); ?>
                                        </div>
                                    </div>
                                    <?php $bottom_content_group_item_list = $bottom_content_group_item['list']; ?>
                                    <?php if ($bottom_content_group_item_list) : ?>
                                        <div class="xl:w-[calc((572/1200)*100%)] <?= ($key % 2 == 0) ? 'xl:order-1' : null; ?>">
                                            <div class="relative">
                                                <div class="hidden xl:block absolute inset-0 bg-center bg-auto bg-no-repeat "
                                                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/<?= $key === 0 ? 'list-bg-green.svg' : 'list-bg-red.svg'; ?>')"></div>
                                                <ul class="py-[7px] xl:py-0 relative rounded-[5px] border border-solid text-[14px] md:text-[16px] xl:text-[18px] xl:border-0 list-none text-[18px] font-[500] xl:font-[600] leading-[1.2] m-0 <?= ($key % 2 == 0) ? 'text-[#3BA17C] border-[rgba(59,161,124,0.4)]' : 'text-[#F6881B] border-[rgba(246,136,27,0.4)]'; ?>">
                                                    <?php foreach ($bottom_content_group_item_list as $bottom_content_group_item_list_item) : ?>
                                                        <li class="py-[20px] px-[10px] border-b last:border-0 border-solid xl:border-0 text-center xl:!text-left ml-0 xl:py-[28px] xl:h-[77px] box-border <?= ($key % 2 == 0) ? 'xl:pl-[122px] border-[rgba(59,161,124,0.4)]' : 'xl:pl-[50px] border-[rgba(246,136,27,0.4)]'; ?>"><?= $bottom_content_group_item_list_item['item']; ?></li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <!--!bottom content-->

        <!--team-->
        <section class="pt-[32px] xl:pt-[80px] pb-[40px] xl:pb-[90px] bg-[#F7F9FA]">
            <div class="px-[33px] xl:px-0 max-w-[1180px] mx-auto">
                <div class="text-center mb-[24px] xl:mb-[48px]">
                    <span class="brand-text-gradient text-transparent bg-clip-text text-[24px] font-[500] xl:text-[34px] leading-[1.47] xl:font-[600]"><?= get_field('team_title'); ?></span>
                </div>
                <div class="max-w-[180px] md:max-w-[398px] xl:max-w-[755px] mx-auto relative">
                    <div id="ourProfessionalTeam" class="swiper">
                        <?php $team_list = get_field('team_list'); ?>
                        <?php if ($team_list) : ?>
                            <div class="swiper-wrapper xl:flex xl:justify-center">
                                <?php foreach ($team_list as $team_list_item) : ?>
                                    <div class="swiper-slide xl:!w-[192px]">
                                        <a class="block group cursor-pointer"
                                           data-fancybox="team"
                                           data-src="#leader-<?= $team_list_item; ?>"
                                           data-thumb="<?= get_the_post_thumbnail_url($team_list_item); ?>"
                                           data-href="<?= get_permalink($team_list_item); ?>"
                                        >
                                            <div class="w-[100px] h-[100px] md:w-[160px] md:h-[160px] rounded-full overflow-hidden mx-auto mb-[23px] relative">
                                                <div class="absolute inset-0 bg-cover"
                                                     style="background-image: url('<?= get_the_post_thumbnail_url($team_list_item); ?>')"></div>
                                                <div class="hidden lg:block rounded-full absolute inset-0 group-hover:duration-[1s] group-hover:opacity-100 opacity-0 transition-all duration-[.3s] bg-[rgba(247,148,31,.68)]"></div>
                                                <div class="hidden absolute inset-0 lg:flex justify-center items-center transform scale-[1.5] group-hover:scale-[1] opacity-0 group-hover:opacity-100 transition-all duration-[.3s] group-hover:duration-[.6s]">
                                                    <span class="text-white text-[18px] leading-[1.1] uppercase font-[600]">Click for bio</span>
                                                </div>
                                            </div>
                                            <div class="text-center text-[16px] leading-[1.5]">
                                                <div class="capitalize font-[600] text-[#393A40]"><?= get_field('leadership_name', $team_list_item); ?></div>
                                                <div class="capitalize text-[#393A40] text-[14px]"><?= get_field('leadership_title', $team_list_item); ?></div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div class="xl:hidden swiper-pagination"></div>
                    </div>
                    <button id="ourProfessionalTeamPrevButton"
                            class="swiper-button-prev after:!content-none xl:!hidden absolute !left-[-64px] md:!left-[-119px] top-[50%] translate-y-[-50%] !w-[19px] !h-[19px] bg-transparent border-0 p-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                            <path d="M14.25 1.5L6.25 9.5L14.25 17.5" stroke="#61636B" stroke-width="1.6"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button id="ourProfessionalTeamNextButton"
                            class="swiper-button-next after:!content-none xl:!hidden absolute !right-[-64px] md:!right-[-100px] top-[50%] translate-y-[-50%] !w-[19px] !h-[19px] bg-transparent border-0 p-0">
                        <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5.25 1.5L13.25 9.5L5.25 17.5" stroke="#61636B" stroke-width="1.6"
                                  stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <?php $team_button_url = get_field('team_button_url'); ?>
                <?php $team_button_text = get_field('team_button_text'); ?>
                <?php if ($team_button_url && $team_button_text) : ?>
                    <div class="mt-[30px] xl:mt-[50px] text-center">
                        <a class="inline-block pt-[13px] pb-[11px] px-[47px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
                           href="<?= $team_button_url; ?>"
                        >
                            <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                            ></div>
                            <span class="relative text-white text-[18px] leading-[1.51] font-[600] uppercase"><?= $team_button_text; ?></span>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($team_list): ?>

                    <?php foreach ($team_list as $key => $post_id):
                        $permalink = get_permalink($post_id);
                        $title = get_the_title($post_id);
                        $leadership_name = get_field('leadership_name', $post_id);
                        $leadership_title = get_field('leadership_title', $post_id);
                        $leadership_bio = get_field('leadership_bio', $post_id);
                        $leadership_casual_image = get_field('leadership_casual_image', $post_id);
                        ?>
                        <div class="hidden max-w-[40%] w-[40%] min-w-[60%]"
                             id="leader-<?= $post_id; ?>"
                        >
                            <?php if ($leadership_casual_image) : ?>
                                <img class="leadership-content-photo" src="<?= $leadership_casual_image; ?>"
                                     alt="<?= $leadership_name; ?>">
                            <?php endif; ?>

                            <div class="leadership-content-text">
                                <div class="leadership-content-name"><strong><?= $leadership_name; ?></strong></div>
                                <div class="leadership-content-position"><strong><?= $leadership_title; ?></strong>
                                </div>

                                <?= apply_filters('the_content', $leadership_bio); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>
        </section>
        <!--!team-->

        <!--insights-->
        <section class="pt-[32px] md:pt-[48px] xl:pt-[73px] pb-[32px] md:pb-[48px] xl:pb-[88px]">
            <div class="px-[33px] md:px-0 md:max-w-[636px] xl:max-w-[1200px] mx-auto">
                <?php $insights_title = get_field('insights_title'); ?>
                <?php if ($insights_title) : ?>
                    <div class="mb-[24px] md:mb-[42px] text-center">
                        <span class="brand-text-gradient text-transparent bg-clip-text text-[24px] md:text-[26px] leading-[1.3] xl:text-[34px] lgleading-[1.27] font-[600]"><?= $insights_title; ?></span>
                    </div>
                <?php endif; ?>
                <?php $insights_list = get_field('insights_list'); ?>
                <?php if ($insights_list) : ?>
                    <div id="relatedInsights" class="swiper mb-[30px] xl:mb-[48px]">
                        <div class="swiper-wrapper xl:!grid xl:!grid-cols-3 xl:!gap-[24px] ">
                            <?php foreach ($insights_list as $insights_list_item): ?>
                                <div class="swiper-slide group">
                                    <a href="<?= get_permalink($insights_list_item); ?>" class="block pb-[55.47%] rounded-[6px] mb-[16px] md:mb-[24px] xl:mb-[32px] overflow-hidden relative">
                                        <div class="absolute inset-0 bg-no-repeat bg-cover bg-center group-hover:scale-[1.1] duration-[.4s] ease-linear"
                                             style="background-image: url('<?= get_the_post_thumbnail_url($insights_list_item); ?>')"></div>
                                    </a>
                                    <a href="<?= get_permalink($insights_list_item); ?>" class="text-[14px] md:text-[16px] leading-[1.65] text-[#393A40] xl:text-[24px] xl:leading-[1.27] xl:font-[500] mb-[8px] md:mb-[16px] xl:mb-[12px] opacity-80 xl:opacity-100">
                                        <?= get_the_title($insights_list_item); ?>
                                    </a>
                                    <div class="hidden xl:block text-[#393A40] text-[14px] leading-[1.65] md:text-[16px] opacity-[.8] md:mb-[16px]">
                                        <?= get_the_excerpt($insights_list_item); ?>
                                    </div>
                                    <a href="<?= get_permalink($insights_list_item); ?>" class="text-[#3BA17C] text-[16px] leading-[1.51] font-[500] uppercase xl:!normal-case group-hover:underline underline-offset-[5px] group-hover:text-[#3BA17C] !decoration-dotted">Read More</a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="xl:hidden swiper-pagination"></div>
                    </div>
                <?php endif; ?>
                <?php $insights_button_text = get_field('insights_button_text'); ?>
                <?php $insights_button_link = get_field('insights_button_link'); ?>
                <?php if ($insights_button_text && $insights_button_link) : ?>
                    <div class="text-center">
                        <a href="<?= $insights_button_link; ?>"
                           class="inline-block pt-[13px] pb-[11px] px-[20px] xl:px-[70px] brand-button-gradient rounded-[3px] border-0 group relative"
                        >
                            <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"></div>
                            <span class="relative text-white text-[16px] xl:text-[18px] leading-[1.51] font-[600] uppercase"><?= $insights_button_text; ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <!--!insights-->

    </div>


<?php get_footer(); ?>