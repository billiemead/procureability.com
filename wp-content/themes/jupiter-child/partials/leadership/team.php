<?php $team = get_field('team'); ?>
<?php $cta_title = get_field('cta_title'); ?>
<?php $cta_text = get_field('cta_text'); ?>
<?php $cta_button = get_field('cta_button'); ?>

<section
        class="pt-[40px] md:pt-[56px] pb-[50px] md:pb-[75px] overflow-hidden bg-no-repeat bg-[left_calc(50%+338px+70px)_bottom_-145px]"
        data-x-data="leadership"
        style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/leadership/triangles-bg-leadership.png')">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <div class="text-center mb-[42px]">
            <h1 class="brand-text-gradient text-transparent bg-clip-text font-poppins text-[36px] leading-[1.27] font-semibold"><?= get_the_title(); ?></h1>
        </div>
        <div class="max-w-[345px] mx-auto sm:max-w-none sm:mx-0 sm:flex sm:flex-wrap sm:mr-[-26px] mb-[-42px]">
            <?php if ($team) : ?>
                <?php foreach ($team as $key => $post): setup_postdata($post);
                if ($key == 0){
                    $key = count($team);
                }
                ?>
                    <div class="w-full sm:w-6/12 md:w-4/12 lg:w-3/12 sm:pr-[26px] mb-[42px] box-border">
                        <a class="block group cursor-pointer"
                           data-x-on:click.prevent="handleClick($event, <?= $key; ?>, '<?= get_permalink(); ?>')"
                        >
                            <div class="pb-[100%] mx-auto mb-[30px] xl:mb-[14px] relative">
                                <div class="absolute inset-0 bg-cover rounded-full overflow-hidden"
                                     style="background-image: url('<?= get_the_post_thumbnail_url(null, 'image-size-550x550'); ?>')"></div>
                                <div class="absolute inset-0 bg-cover rounded-full overflow-hidden group-hover:opacity-100 opacity-0 transition-opacity"
                                     style="background-image: url('<?= get_field('leadership_casual_image'); ?>')">
                                    <!--shadow-->
                                    <div class="absolute bottom-0 left-0 right-0 h-[62.50%] bg-gradient-to-t from-[rgba(0,0,0,.8)] trans to-transparent"></div>
                                    <div class="absolute bottom-[40px] left-0 right-0 text-center">
                                        <span class="font-poppins text-white text-[18px] leading-normal font-semibold uppercase tracking-[0.14em]">read bio</span>
                                        <span>
                                            <svg class="align-text-bottom"
                                                 width="18" height="19" viewBox="0 0 18 19"
                                                 fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M4.65777 15.6578C4.65777 15.3546 4.77304 15.0515 5.00435 14.8202L10.4833 9.34201L5.00435 3.86384C4.54251 3.40121 4.54251 2.65121 5.00435 2.18858C5.46698 1.72673 6.21698 1.72673 6.67962 2.18858L12.9954 8.50437C13.4573 8.96701 13.4573 9.71701 12.9954 10.1796L6.67962 16.4954C6.21698 16.9573 5.46698 16.9573 5.00435 16.4954C4.77304 16.2641 4.65777 15.961 4.65777 15.6578Z"
                                                      fill="white"/></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="text-center mb-[6px]">
                                    <div class="font-poppins text-[22px] leading-normal font-medium text-[#0098AE] transition-colors group-hover:decoration-transparent underline decoration-dashed decoration-1 underline-offset-[6px]"><?= get_field('leadership_name'); ?></div>
                                </div>
                                <div class="text-center">
                                    <div class="font-poppins text-[16px] leading-normal text-[#61636B]"><?= get_field('leadership_title'); ?></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <?php if ($cta_title && $cta_text && $cta_button) : ?>
                    <div class="w-full sm:w-6/12 md:w-4/12 lg:w-3/12 sm:pr-[26px] mb-[42px] box-border">
                        <div class="max-w-[508px] m-auto">
                            <div class="text-center mb-[16px]">
                                <div class="font-poppins text-[42px] leading-[1.38] font-medium text-[#3BA17C]">
                                    <?= $cta_title; ?>
                                </div>
                            </div>
                            <div class="text-center mb-[32px]">
                                <div class="font-poppins text-[18px] leading-[1.6] opacity-80 text-[#5A5A5A]">
                                    <?= $cta_text; ?>
                                </div>
                            </div>
                            <div class="text-center">
                                <a class="inline-block border-2 group border-[#3BA17C] bg-white border-solid py-[16px] px-[40px] rounded-[3px] transition-colors hover:bg-[#3BA17C]"
                                   href="<?= $cta_button['url']; ?>"
                                   target="<?= $cta_button['target'] ?: '_self'; ?>"
                                >
                                    <span class="text-poppins text-[18px] leading-normal text-[#3BA17C] group-hover:text-white transition-colors font-semibold tracking-[0.14em] uppercase"><?= $cta_button['title']; ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <?php if ($team): ?>

            <div class="fixed inset-0 flex flex-col z-[300]" data-x-cloak data-x-transition.opacity.duration.500ms
                 data-x-show="showModal" data-x-ref="modal">
                <div class="bg-[#393A40] bg-opacity-80 absolute inset-0"></div>
                <div class="swiper h-full w-full" id="slider">
                    <div class="swiper-wrapper h-full w-full">
                        <?php foreach ($team as $post):
                            setup_postdata($post);

                            $permalink = get_permalink();
                            $title = get_the_title();
                            $leadership_name = get_field('leadership_name');
                            $leadership_title = get_field('leadership_title');
                            $leadership_bio = get_field('leadership_bio');
                            $leadership_casual_image = get_field('leadership_casual_image');
                            $leadership_socials = get_field('leadership_socials');
                            ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="h-full w-full flex flex-col box-border" data-x-on:click.self="closeModel">
                                    <div class="max-w-[1100px] w-[76.39%] bg-white m-auto rounded-[5px] overflow-hidden max-h-[625px] relative bg-no-repeat bg-[length:566px_auto] bg-[right_-170px_bottom_-190px]"
                                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/leadership/branding-star-leadership.svg')">
                                        <div class="absolute top-[14px] right-[14px]">
                                            <button data-x-on:click="closeModel"
                                                    class="border-none bg-transparent p-[10px] text-[#D6D6D6] hover:text-[#A1A1A1] transition-colors">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_720_25457)">
                                                        <path d="M0.780908 15.9998C0.62637 15.9998 0.475295 15.954 0.346792 15.8682C0.21829 15.7823 0.118132 15.6603 0.0589893 15.5175C-0.00015362 15.3747 -0.0156252 15.2176 0.0145315 15.0661C0.0446883 14.9145 0.119119 14.7753 0.228408 14.666L14.6659 0.228517C14.8124 0.0819852 15.0112 -0.000335693 15.2184 -0.000335693C15.4256 -0.000335693 15.6244 0.0819852 15.7709 0.228517C15.9174 0.375049 15.9998 0.57379 15.9998 0.781017C15.9998 0.988245 15.9174 1.18699 15.7709 1.33352L1.33341 15.771C1.26092 15.8437 1.17479 15.9013 1.07998 15.9405C0.985164 15.9798 0.883528 15.9999 0.780908 15.9998Z"
                                                              fill="currentColor"/>
                                                        <path d="M15.2186 15.9998C15.116 15.9999 15.0144 15.9798 14.9195 15.9405C14.8247 15.9013 14.7386 15.8437 14.6661 15.771L0.228609 1.33352C0.0820768 1.18699 -0.000244141 0.988245 -0.000244141 0.781017C-0.000244141 0.57379 0.0820768 0.375049 0.228609 0.228517C0.375141 0.0819852 0.573881 -0.000335693 0.781109 -0.000335693C0.988337 -0.000335693 1.18708 0.0819852 1.33361 0.228517L15.7711 14.666C15.8804 14.7753 15.9548 14.9145 15.985 15.0661C16.0151 15.2176 15.9997 15.3747 15.9405 15.5175C15.8814 15.6603 15.7812 15.7823 15.6527 15.8682C15.5242 15.954 15.3731 15.9998 15.2186 15.9998Z"
                                                              fill="currentColor"/>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_720_25457">
                                                            <rect width="16" height="16" fill="white"/>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </button>
                                        </div>

                                        <div class="grid grid-cols-4">
                                            <div class="h-[4px] bg-[#0098AE]"></div>
                                            <div class="h-[4px] bg-[#EF4F25]"></div>
                                            <div class="h-[4px] bg-[#3BA17C]"></div>
                                            <div class="h-[4px] bg-[#F6881B]"></div>
                                        </div>
                                        <div class="py-[48px] pb-[56px] box-border h-full">

                                            <div class="h-full flex flex-col">
                                                <div class="pb-[24px] flex-1 px-[40px] lg:px-[80px]">
                                                    <div>
                                                        <div class="brand-text-gradient text-transparent bg-clip-text font-poppins text-[22px] leading-normal font-semibold"><?= $leadership_name; ?></div>
                                                    </div>
                                                    <div>
                                                        <div class="font-poppins text-[#61636B] text-[18px] leading-normal"><?= $leadership_title; ?></div>
                                                    </div>
                                                </div>
                                                <div class="flex-0 grid gap-[60px] grid-cols-[53.09%_auto] overflow-y-auto overflow-x-hidden px-[40px] lg:px-[80px]">
                                                    <div>
                                                        <div class="[&_p]:!font-poppins [&_p]:text-[#61636B] [&_p]:text-[14px] [&_p]:leading-[1.7]">
                                                            <?= apply_filters('the_content', $leadership_bio); ?>
                                                        </div>
                                                        <?php if ($leadership_socials) : ?>
                                                            <div class="mt-[32px] space-x-[30px]">
                                                                <?php foreach ($leadership_socials as $leadership_social) : ?>
                                                                    <a href="<?= $leadership_social['url']; ?>"
                                                                       target="_blank"
                                                                       class="inline-flex items-center group">
                                                                        <img class="mr-[12px]"
                                                                             src="<?= get_stylesheet_directory_uri() . '/assets/img/socials/' . $leadership_social['network']['value'] . '.svg'; ?>"
                                                                             alt="<?= $leadership_social['network']['label']; ?>">
                                                                        <span class="font-poppins text-[16px] leading-[1.6] text-[#5A5A5A] underline decoration-transparent group-hover:decoration-current transition-colors"><?= $leadership_social['network']['label']; ?></span>
                                                                    </a>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div>
                                                        <?php if ($leadership_casual_image) : ?>
                                                            <div class="sticky top-0">
                                                                <div>
                                                                    <img class="block w-full h-auto rounded-full"
                                                                         src="<?= $leadership_casual_image; ?>"
                                                                         alt="<?= $leadership_name; ?>">
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>

                    <button id="teamSliderPrev"
                            class="z-[100] border-none absolute top-[50%] translate-y-[-50%] left-[4.17%] h-[60px] w-[60px] rounded-full bg-white bg-opacity-50 [&.swiper-button-disabled]:bg-opacity-20 [&.swiper-button-disabled]:cursor-default hover:[&:not(.swiper-button-disabled)]:bg-opacity-70 transition-all text-white hover:[&:not(.swiper-button-disabled)]:text-[#61636B]">
                        <svg class="relative top-[2px] right-[2px]" width="9" height="15" viewBox="0 0 9 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 1L1.5 7.5L8 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </button>
                    <button id="teamSliderNext"
                            class="z-[100] border-none absolute top-[50%] translate-y-[-50%] right-[4.17%] h-[60px] w-[60px] rounded-full bg-white bg-opacity-50 [&.swiper-button-disabled]:bg-opacity-20 [&.swiper-button-disabled]:cursor-default hover:[&:not(.swiper-button-disabled)]:bg-opacity-70 transition-all text-white hover:[&:not(.swiper-button-disabled)]:text-[#61636B]">
                        <svg class="relative top-[2px] left-[2px]" width="9" height="15" viewBox="0 0 9 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7.5 7.5L1 14" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
            </div>
        <?php endif; ?>
</section>