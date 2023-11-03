<?php $featured_content_title = get_field('featured_content_title'); ?>
<?php $featured_content_posts = get_posts(array(
    'posts_per_page' => 10,
    'meta_query' => array(
        'relation' => 'OR',
        array(
            'key' => 'hidden',
            'value' => 0,
            'compare' => '='
        ),
        array(
            'key' => 'hidden',
            'compare' => 'NOT EXISTS',
        ),
    )
)); ?>

<section
        class="py-[48px] md:py-[64px] xl:py-[72px]">
    <div class="max-w-[636px] xl:max-w-[1200px] px-[34px] mx-auto">
        <?php if ($featured_content_title) : ?>
            <div class="text-center mb-[32px] md:mb-[40px]">
                <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] leading-[1.4] md:text-[36px] md:leading-[1.5] font-[600]"><?= $featured_content_title; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($featured_content_posts) : ?>
            <div class="relative">
                <div id="featuredContent" class="swiper mb-[32px] xl:mb-[48px] relative">
                    <div class="swiper-wrapper">
                        <?php foreach ($featured_content_posts as $post) : setup_postdata($post); ?>
                            <div class="swiper-slide">
                                <div>
                                    <a href="<?= get_permalink(); ?>"
                                       class="block pb-[52.12%] md:pb-[55.32%] mb-[24px] xl:mb-[32px] rounded-[6px] relative overflow-hidden z-20"
                                    >
                                        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat hover:scale-110 transition-transform ease-in-out duration-300 z-10"
                                             style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')"></div>
                                    </a>
                                    <a class="block mb-[12px] group/title"
                                       href="<?= get_permalink(); ?>" title="<?= the_title(); ?>">
                                        <span class="font-poppins text-[#393A40] text-[18px] xl:text-[24px] leading-[1.2] xl:leading-[1.27] font-[500] group-hover/title:text-[#3BA17C] transition-colors line-clamp-2"><?= the_title(); ?></span>
                                    </a>
                                    <div class="block font-poppins text-[#393A40] text-[14px] xl:text-[16px] leading-[1.7] xl:leading-[1.65] mb-[16px] "
                                         href="<?= get_permalink(); ?>">
                                        <span class="line-clamp-3"><?= get_the_excerpt(); ?></span>
                                    </div>
                                    <a class="font-poppins text-[#3BA17C] text-[14px] xl:text-[16px] leading-[1.5] font-[500] transition-colors duration-500"
                                       href="<?= get_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div id="featuredContentPagination"
                         class="xl:!hidden mt-[24px] xl:mt-[40px] flex justify-center [&_span]:!mx-[8px] [&_span]:!w-[6px] [&_span]:!h-[6px] [&_span]:rounded-full [&_span]:!bg-[#DDE5E5] [&_span.swiper-pagination-bullet-active]:!bg-[#0098AE] [&_span]:!opacity-100"></div>
                </div>
                <div class="absolute hidden xl:block top-[88px] left-[-25px] min-[13500px]:left-[-48px]">
                    <button class="bg-transparent border-0 p-0 text-[#393A40] [&.swiper-button-disabled]:opacity-60"
                            id="featuredContentPrevNavigation">
                        <svg class="block" xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18"
                             fill="none">
                            <g clip-path="url(#clip0_2320_2094)">
                                <path d="M10 1.99219L3.5 8.49219L10 14.9922" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2320_2094">
                                    <rect width="16" height="16.0718" fill="white"
                                          transform="matrix(-1 0 0 1 16 0.992188)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
                <div class="absolute hidden xl:block top-[88px] right-[-25px] min-[1350px]:right-[-48px]">
                    <button class="bg-transparent border-0 p-0 text-[#393A40] [&.swiper-button-disabled]:opacity-60"
                            id="featuredContentNextNavigation">
                        <svg class="block" xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18"
                             fill="none">
                            <g clip-path="url(#clip0_2320_2092)">
                                <path d="M6 1.99219L12.5 8.49219L6 14.9922" stroke="currentColor" stroke-width="2"
                                      stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_2320_2092">
                                    <rect width="16" height="16.0718" fill="white" transform="translate(0 0.992188)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </button>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>