<?php

$team_title = get_field('team_title');
$team_list = get_field('team_list');
$team_button = get_field('team_button');

?>

<section class="pt-[100px] xl:pt-[112px] pb-[40px] xl:pb-[88px] bg-[#F7F9FA]">
    <div class="px-[33px] xl:px-0 max-w-[1180px] mx-auto">
        <div class="text-center mb-[24px] xl:mb-[56px]">
            <span class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[24px] font-[500] xl:text-[34px] leading-[1.47] xl:font-[600]"><?= $team_title; ?></span>
        </div>
        <div class="max-w-[180px] md:max-w-[398px] xl:max-w-[755px] mx-auto relative">
            <div id="ourProfessionalTeam" class="swiper">
                <?php if ($team_list) : ?>
                    <div class="swiper-wrapper xl:flex xl:justify-between">
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
                                        <div class="rounded-full absolute inset-0 group-hover:duration-[1s] group-hover:opacity-100 opacity-0 transition-all duration-[.3s] bg-[rgba(247,148,31,.68)]"></div>
                                        <div class="hidden absolute inset-0 md:flex justify-center items-center transform scale-[1.5] group-hover:scale-[1] opacity-0 group-hover:opacity-100 transition-all duration-[.3s] group-hover:duration-[.6s]">
                                            <span class="text-white text-[18px] leading-[1.1] uppercase font-[600]">Click for bio</span>
                                        </div>
                                    </div>
                                    <div class="text-center text-[16px] leading-[1.5]">
                                        <div class="capitalize font-[600] text-[#393A40]"><?= get_field('leadership_name', $team_list_item); ?></div>
                                        <div class="capitalize text-[#393A40]"><?= get_field('leadership_title', $team_list_item); ?></div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div class="xl:hidden swiper-pagination"></div>
            </div>
            <button id="ourProfessionalTeamPrevButton"
                    class="swiper-button-prev after:!content-none !block xl:!hidden absolute !left-[-64px] md:!left-[-119px] top-[50%] translate-y-[-50%] !w-[19px] !h-[19px] bg-transparent border-0 p-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" viewBox="0 0 20 19" fill="none">
                    <path d="M14.25 1.5L6.25 9.5L14.25 17.5" stroke="#61636B" stroke-width="1.6"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button id="ourProfessionalTeamNextButton"
                    class="swiper-button-next after:!content-none !block xl:!hidden absolute !right-[-64px] md:!right-[-100px] top-[50%] translate-y-[-50%] !w-[19px] !h-[19px] bg-transparent border-0 p-0">
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.25 1.5L13.25 9.5L5.25 17.5" stroke="#61636B" stroke-width="1.6"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <?php if ($team_button) : ?>
            <div class="mt-[30px] xl:mt-[50px] text-center">
                <a class="inline-block pt-[13px] pb-[11px] px-[47px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
                   href="<?= $team_button['url']; ?>"
                >
                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                    ></div>
                    <span class="relative text-white text-[18px] leading-[1.51] font-[600] uppercase"><?= $team_button['title']; ?></span>
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