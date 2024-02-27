<?php $leadership_section_title = get_field('leadership_title'); ?>
<?php $leadership_people = get_field('leadership_people'); ?>

<?php if ($leadership_people) : ?>
    <section class="pt-[32px] xl:pt-[80px] pb-[40px] xl:pb-[90px]">
        <div class="px-[33px] xl:px-0 max-w-[1180px] mx-auto">
            <?php if ($leadership_section_title) : ?>
                <div class="text-center mb-[24px] xl:mb-[48px]">
                    <span class="text-[#005E6B] text-[24px] font-[500]  leading-[1.47] xl:font-[500]" style="font-family: Poppins;
color: #005E6B;font-weight: 500;line-height: 140%; /* 33.6px */"><?= $leadership_section_title; ?></span>
                </div>
            <?php endif; ?>
            <div class="max-w-[180px] md:max-w-[398px] xl:max-w-[755px] mx-auto relative 12345">
                <div id="ourProfessionalTeam" class="swiper">
                    <div class="swiper-wrapper flex md:justify-center">
                        <?php foreach ($leadership_people as $key => $post_id) : ?>
                            <div class="swiper-slide xl:!w-[192px]">
                                <a class="block group cursor-pointer"
                                   data-fancybox="team"
                                   data-src="#leader-<?= $post_id ?>"
                                   data-thumb="<?= get_the_post_thumbnail_url($post_id); ?>"
                                   data-href="<?= get_permalink($post_id); ?>"
                                >
                                    <div class="w-[100px] h-[100px] md:w-[160px] md:h-[160px] rounded-full overflow-hidden mx-auto mb-[23px] relative">
                                        <div class="absolute inset-0 bg-cover"
                                             style="background-image: url('<?= get_the_post_thumbnail_url($post_id); ?>')"></div>
                                        <div class="hidden lg:block rounded-full absolute inset-0 group-hover:duration-[1s] group-hover:opacity-100 opacity-0 transition-all duration-[.3s] bg-[rgba(247,148,31,.68)]"></div>
                                        <div class="hidden absolute inset-0 lg:flex justify-center items-center transform scale-[1.5] group-hover:scale-[1] opacity-0 group-hover:opacity-100 transition-all duration-[.3s] group-hover:duration-[.6s]">
                                            <span class="text-white text-[18px] leading-[1.1] uppercase font-[600]">Click for bio</span>
                                        </div>
                                    </div>
                                    <div class="text-center text-[16px] leading-[1.5]">
                                        <div class="capitalize font-[600] text-[#393A40] text-[18px]" style="font-family: Poppins;"><?= get_field('leadership_name', $post_id); ?></div>
                                        <div class="capitalize text-[#393A40] text-[14px]"><?= get_field('leadership_title', $post_id); ?></div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="xl:hidden swiper-pagination"></div>
                </div>
                <?php if (count($leadership_people) > 1){?>
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
                <?php }?>
            </div>

            <?php foreach ($leadership_people as $key => $post_id):
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

        </div>
    </section>
<?php endif; ?>