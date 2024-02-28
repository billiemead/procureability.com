<?php
/*
    Template Name: Supply chain and logistics
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/page', 'hero'); ?>

<?php if (have_posts()) : ?>
    <!--Content-->
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('partials/page', 'content'); ?>
    <?php endwhile; ?>
    <!--Content-->
<?php endif; ?>


<?php $experience_title = get_field('experience_title'); ?>
<?php $experience_tiles = get_field('experience_tiles'); ?>
<?php if ($experience_title || $experience_tiles) : ?>
    <!--Experience-->
    <section class="section section--experience">
        <div class="section-container">
            <?php if ($experience_title) : ?>
                <div class="section-title">
                    <?= $experience_title; ?>
                </div>
            <?php endif; ?>

            <?php if ($experience_tiles) : ?>
                <div class="experience-tiles">
                    <?php foreach ($experience_tiles as $experience_tile) : ?>
                        <div class="experience-tile">
                            <div class="experience-tile__icon">
                                <?= file_get_contents($experience_tile['icon']['url']) ?>
                            </div>
                            <div class="experience-tile__title"><?= $experience_tile['title']; ?></div>
                            <div class="experience-tile__text"><?= $experience_tile['text']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Experience-->
<?php endif; ?>


<?php $video_title = get_field('video_title'); ?>
<?php $video_video = get_field('video_video'); ?>
<?php if ($video_title && $video_video ) : ?>
    <!--Video-->
<section id="video" class="py-[30px]">
    <div class="max-w-[930px] px-[15px] mx-auto">
        <div class="bg-[#13839C] px-[15px] pt-[15px] pb-[40px]">
            <div>
                <?= $video_video; ?>
            </div>
            <div class="text-center mt-[20px]">
                <div class="font-poppins text-[19px] leading-black text-[#fff] font-[700] capitalize"><?= $video_title; ?></div>
            </div>
        </div>
    </div>
</section>
    <!--Video-->
<?php endif; ?>


    <!--Form section-->
<?php get_template_part('partials/page', 'form-section'); ?>
    <!--Form section-->


<?php $program_outline_title = get_field('program_outline_title'); ?>
<?php $program_outline_image = get_field('program_outline_image'); ?>
<?php if ($program_outline_title || $program_outline_image) : ?>
    <!--Program outline-->
    <section class="section section--program-outline">
        <div class="section-container">
            <?php if ($program_outline_title) : ?>
                <div class="section-title section-title--center"><?= $program_outline_title; ?></div>
            <?php endif; ?>
            <?php if ($program_outline_image) : ?>
                <img class="program-outline-image" src="<?= $program_outline_image['url']; ?>"
                     alt="<?= $program_outline_image['alt']; ?>">
            <?php endif; ?>
        </div>
    </section>
    <!--Program outline-->
<?php endif; ?>


<?php $faq_title = get_field('faq_title'); ?>
<?php $faq_list = get_field('faq_list'); ?>
<?php if ($faq_title || $faq_list) : ?>
    <!--FAQ-->
    <section class="section section--faq">
        <div class="section-container section-container--slightly-wider">

            <?php if ($faq_title) : ?>
                <div class="section-title"><?= $faq_title; ?></div>
            <?php endif; ?>


            <?php if ($faq_list) : ?>
                <div class="faqs">
                    <?php foreach ($faq_list as $key => $faq_list_item) : ?>
                        <div class="faqs__item faq" data-x-data="{active: false}"
                             data-x-init="<?= $key ?> === 0 ? active = true : null">
                            <div class="faq__question" data-x-on:click="active = !active">
                                <span class="faq__icon" data-x-bind:class="{'active' : active}"></span>
                                <?= $faq_list_item['question']; ?></div>
                            <div class="faq__answer-wrapper" data-x-show="active"
                                 data-x-collapse.duration.750ms>
                                <div class="faq__answer"><?= $faq_list_item['answer']; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--FAQ-->
<?php endif; ?>

<?php $examples_title = get_field('examples_title'); ?>
<?php $examples_list = get_field('examples_list'); ?>
<?php if ($examples_title || $examples_list) : ?>
    <!--Examples-->
    <?php $examples_background_image = get_field('examples_background_image'); ?>
    <section class="examples rocket-lazyload" data-bg="<?= $examples_background_image['url']; ?>">
        <div class="examples-container">

            <?php if ($examples_title) : ?>
                <div class="examples-title"><?= $examples_title; ?></div>
            <?php endif; ?>

            <?php if ($examples_list) : ?>
                <ul class="examples-list">
                    <?php foreach ($examples_list as $examples_list_item) : ?>
                        <li class="examples-list__item">
                            <svg class="examples-list__item-icon" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 1792 1792">
                                <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                            </svg>
                            <span><?= $examples_list_item['example']; ?></span></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
    <!--Examples-->
<?php endif; ?>

    <!--Studies-->
    <section class="section">
        <div class="section-container">
            <?php $studies_title = get_field('studies_title'); ?>
            <?php if ($studies_title) : ?>
                <h2 class="section-title"><?= $studies_title; ?></h2>
            <?php endif; ?>

            <?php $studies_query = new WP_Query(array('category_name' => 'supply-chain-and-logistics-case-studies', 'posts_per_page' => 3)); ?>

            <?php if ($studies_query->have_posts()) : ?>
                <div id="clientSuccessStories" class="swiper mb-[32px] xl:mb-[48px]">
                    <div class="swiper-wrapper">
                        <?php while ($studies_query->have_posts()) : $studies_query->the_post(); ?>
                            <div class="swiper-slide">
                                <div>
                                    <a href="<?= get_permalink(); ?>"
                                       class="block pb-[52.12%] md:pb-[55.32%] mb-[24px] xl:mb-[32px] rounded-[6px] relative overflow-hidden z-20"
                                       title="<?= get_the_title(); ?>"
                                    >
                                        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat hover:scale-110 transition-transform ease-in-out duration-300 z-10"
                                             style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')"></div>
                                    </a>
                                    <a class="block mb-[12px] group/title"
                                       href="<?= get_permalink(); ?>"
                                       title="<?= get_the_title(); ?>"
                                    >
                                        <span class="font-poppins text-[#393A40] text-[18px] xl:text-[24px] leading-[1.2] xl:leading-[1.27] font-[500] group-hover/title:text-[#3BA17C] transition-colors line-clamp-2"><?= the_title(); ?></span>
                                    </a>
                                    <div class="block font-poppins text-[#393A40] text-[14px] xl:text-[16px] leading-[1.7] xl:leading-[1.65] mb-[16px] "
                                         href="<?= get_permalink(); ?>">
                                        <span class="line-clamp-3"><?= get_the_excerpt(); ?></span>
                                    </div>
                                    <a
                                            class="font-poppins text-[#005E6B] text-[14px] xl:text-[16px] leading-[1.5] font-[500] transition-colors duration-500"
                                            href="<?= get_permalink(); ?>"
                                            title="Read more about the <?= get_the_title(); ?>"
                                    >Read More</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div id="clientSuccessStoriesPagination"
                         class="xl:!hidden mt-[24px] xl:mt-[40px] flex justify-center [&_span]:!mx-[8px] [&_span]:!w-[6px] [&_span]:!h-[6px] [&_span]:rounded-full [&_span]:!bg-[#DDE5E5] [&_span.swiper-pagination-bullet-active]:!bg-[#0098AE] [&_span]:!opacity-100"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Studies-->

    <!--Blog-->
    <section class="section">
        <div class="section-container">
            <?php $blog_title = get_field('blog_title'); ?>
            <?php if ($blog_title) : ?>
                <h2 class="section-title"><?= $blog_title; ?></h2>
            <?php endif; ?>

            <?php $blog_query = new WP_Query(array('category_name' => 'supply-chain-management', 'posts_per_page' => 3)); ?>

            <?php if ($blog_query->have_posts()) : ?>
                <div id="supplyChainAndLogisticsBlog" class="swiper mb-[32px] xl:mb-[48px]">
                    <div class="swiper-wrapper">
                        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                            <div class="swiper-slide">
                                <div>
                                    <a href="<?= get_permalink(); ?>"
                                       class="block pb-[52.12%] md:pb-[55.32%] mb-[24px] xl:mb-[32px] rounded-[6px] relative overflow-hidden z-20"
                                       title="<?= get_the_title(); ?>"
                                    >
                                        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat hover:scale-110 transition-transform ease-in-out duration-300 z-10"
                                             style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')"></div>
                                    </a>
                                    <a class="block mb-[12px] group/title"
                                       href="<?= get_permalink(); ?>"
                                       title="<?= get_the_title(); ?>"
                                    >
                                        <span class="font-poppins text-[#393A40] text-[18px] xl:text-[24px] leading-[1.2] xl:leading-[1.27] font-[500] group-hover/title:text-[#3BA17C] transition-colors line-clamp-2"><?= the_title(); ?></span>
                                    </a>
                                    <div class="block font-poppins text-[#393A40] text-[14px] xl:text-[16px] leading-[1.7] xl:leading-[1.65] mb-[16px] "
                                         href="<?= get_permalink(); ?>">
                                        <span class="line-clamp-3"><?= get_the_excerpt(); ?></span>
                                    </div>
                                    <a class="font-poppins text-[#005E6B] text-[14px] xl:text-[16px] leading-[1.5] font-[500] transition-colors duration-500"
                                       href="<?= get_permalink(); ?>"
                                       title="Read more about the <?= get_the_title(); ?>"
                                    >Read More</a>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                    <div id="supplyChainAndLogisticsBlogPagination"
                         class="xl:!hidden mt-[24px] xl:mt-[40px] flex justify-center [&_span]:!mx-[8px] [&_span]:!w-[6px] [&_span]:!h-[6px] [&_span]:rounded-full [&_span]:!bg-[#DDE5E5] [&_span.swiper-pagination-bullet-active]:!bg-[#0098AE] [&_span]:!opacity-100"></div>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Blog-->

    <!--Leadership-->
<?php get_template_part('partials/page', 'leadership'); ?>
    <!--Leadership-->

<?php get_footer(); ?>

