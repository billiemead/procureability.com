<?php $insights_title = get_field('insights_title'); ?>
<?php $insights_button = get_field('insights_button'); ?>
<?php $insights_query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => 3)); ?>

<!--insights-->
<section class="py-[48px] md:py-[64px] xl:py-[72px]">
    <div class="max-w-[636px] xl:max-w-[1200px] px-[34px] mx-auto">
        <div class="text-center mb-[32px] md:mb-[40px]">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] leading-[1.4] md:text-[36px] md:leading-[1.5] font-[600]"><?= $insights_title; ?>
            </div>
        </div>
        <?php if ($insights_query->have_posts()) : ?>
            <div id="clientSuccessStories" class="swiper mb-[32px] xl:mb-[48px]">
                <div class="swiper-wrapper">
                    <?php while ( $insights_query->have_posts() ) : $insights_query->the_post(); ?>
                        <div class="swiper-slide">
                            <div>
                                <a href="<?= get_permalink(); ?>"
                                   class="block pb-[52.12%] md:pb-[55.32%] mb-[24px] xl:mb-[32px] rounded-[6px] relative overflow-hidden"
                                >
                                    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat hover:scale-110 transition-transform ease-in-out duration-300"
                                         style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')"></div>
                                </a>
                                <div class="font-poppins text-[#393A40] text-[18px] xl:text-[24px] leading-[1.2] xl:leading-[1.27] font-[500] mb-[12px]">
                                    <?= the_title(); ?>
                                </div>
                                <div class="font-poppins text-[#393A40] text-[14px] xl:text-[16px] leading-[1.7] xl:leading-[1.65] mb-[16px]">
                                    <?= get_the_excerpt(); ?>
                                </div>
                                <a class="font-poppins text-[#3BA17C] transition-colors text-[14px] xl:text-[16px] leading-[1.5] font-[500]"
                                   href="<?= get_permalink(); ?>">Read More</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
                <div id="clientSuccessStoriesPagination"
                     class="xl:!hidden mt-[24px] xl:mt-[40px] flex justify-center [&_span]:!mx-[8px] [&_span]:!w-[6px] [&_span]:!h-[6px] [&_span]:rounded-full [&_span]:!bg-[#DDE5E5] [&_span.swiper-pagination-bullet-active]:!bg-[#0098AE] [&_span]:!opacity-100"></div>
            </div>
        <?php endif; ?>
        <div class="text-center">
            <a class="inline-block py-[12px] px-[25px] md:px-[34px] bg-[#3BA17C] rounded-[3px] relative group"
               href="<?= $insights_button['url']; ?>">
                <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                ></div>
                <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase"><?= $insights_button['title']; ?></span>
            </a>
        </div>
    </div>
</section>
<!--!insights-->