<?php $frontpage_recent_thought_leadership_title = get_field('frontpage_recent_thought_leadership_title'); ?>
<?php $frontpage_recent_thought_leadership_posts = get_field('frontpage_recent_thought_leadership_posts'); ?>

<section
        class="pb-[48px] pt-[65px] md:py-[64px] xl:py-[72px] bg-no-repeat bg-[length:868px_auto] md:bg-[length:1168px_auto] xl:bg-[length:1482px_auto] bg-[position:calc(50%+325px)_-75px] md:bg-[position:calc(50%+380px)_center] xl:bg-[position:calc(50%+757px)_center]"
        style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/homepage/section-bg-green.svg')">
    <div class="md:max-w-[640px] xl:max-w-[1200px] px-[34px] mx-auto">
        <div class="text-center mb-[32px] md:mb-[40px]">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] md:text-[36px] md:leading-[1.5] leading-[1.4] xl:leading-[1.5] font-[600]">
                <?= $frontpage_recent_thought_leadership_title; ?>
            </div>
        </div>
        <?php if ($frontpage_recent_thought_leadership_posts) : ?>
            <div id="recentThoughtLeadership" class="swiper">
                <div class="swiper-wrapper">
                    <?php foreach ($frontpage_recent_thought_leadership_posts as $post) : setup_postdata($post); ?>
                        <div class="swiper-slide">
                            <div>
                                <a href="<?= get_permalink(); ?>"
                                   aria-label="<?= the_title(); ?>"
                                   title="<?= the_title(); ?>"
                                   class="block pb-[55.32%] mb-[24px] md:mb-[42px] xl:mb-[32px] rounded-[6px] relative overflow-hidden z-20"
                                   >
                                    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat hover:scale-110 transition-transform ease-in-out duration-300 z-10" style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')"></div>
                                </a>
                                <div class="text-poppins text-[#393A40] text-[14px] md:text-[16px] leading-[1.7] md:leading-[1.65] mb-[16px] opacity-80">
                                    <?= the_title(); ?>
                                </div>
                                <a class="text-poppins text-[#007A8C] text-[14px] md:text-[16px] leading-[1.5] font-[500] transition-colors duration-500"
                                   href="<?= get_permalink(); ?>">Read More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div id="recentThoughtLeadershipPagination"
                     class="xl:hidden mt-[32px] md:mt-[40px] flex justify-center [&_span]:!mx-[8px] [&_span]:!w-[6px] [&_span]:!h-[6px] [&_span]:rounded-full [&_span]:!bg-[#DDE5E5] [&_span.swiper-pagination-bullet-active]:!bg-[#0098AE] [&_span]:!opacity-100 [&.swiper-pagination-lock]:!hidden"></div>
            </div>
        <?php endif; ?>
    </div>
</section>