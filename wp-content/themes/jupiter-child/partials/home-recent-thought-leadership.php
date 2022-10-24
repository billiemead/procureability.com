<?php $frontpage_recent_thought_leadership_title = get_field('frontpage_recent_thought_leadership_title'); ?>
<?php $frontpage_recent_thought_leadership_posts = get_field('frontpage_recent_thought_leadership_posts'); ?>

<section
        class="pb-[48px] pt-[65px] md:py-[64px] xl:py-[72px] bg-no-repeat bg-[length:434px_auto] md:bg-[length:584px_auto] xl:bg-[length:741px_auto] bg-[position:calc(50%+61px)_-75px] md:bg-[position:calc(50%+145px)_center] xl:bg-[position:calc(50%+370px)_center]"
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
                                   class="block pb-[55.32%] mb-[24px] md:mb-[42px] xl:mb-[32px] rounded-[6px] bg-cover bg-no-repeat bg-center"
                                   style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')"></a>
                                <div class="text-poppins text-[#393A40] text-[14px] md:text-[16px] leading-[1.7] md:leading-[1.65] mb-[16px] opacity-80">
                                    <?= the_title(); ?>
                                </div>
                                <a class="text-poppins text-[#3BA17C] text-[14px] md:text-[16px] leading-[1.5] font-[500]"
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