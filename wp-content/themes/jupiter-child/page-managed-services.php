<?php

/*
    Template Name: Managed services page
    Template Post Type: page
*/

$approach = get_field('approach');
$video = get_field('video');
$services = get_field('services');
$support = get_field('support');
$model = get_field('model');
$opportunities = get_field('opportunities');
$issues = get_field('issues');
$faq = get_field('faq');
$industries = get_field('industries');
$technology = get_field('technology');
$results = get_field('results');
$advantages = get_field('advantages');
$help = get_field('help');
$insights = get_field('insights');

get_header();
?>

<div class="custom-page managed-services-page">
    <section class="hero">
        <div class="hero__bg--managed-services"
             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/managed-services/header-ver2.jpg')"></div>

        <div class="container">
            <div class="hero__wrapper d-flex flex-column justify-content-center align-items-center">
                <h1 class="hero__title text-center hero-text-gradient"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="cp-approach md:pt-0 before:content-[''] before:block before:h-[76px] before:mt-[-76px] invisible" id="video-1">
        <div class="container">
            <div>
                <div>
                    <h4 class="cp-approach__title text-gradient"><?= $approach['title'] ?></h4>

                    <div class="cms-content [&_p]:!mb-[20px]"><?= $approach['text'] ?></div>
                </div>

                <div class="hidden cp-approach__scl">
                    <!--                    --><?php //echo do_shortcode('[sharethis-inline-buttons]') ?>
                    <div class="cp-approach__list">
                        <div class="cp-approach__item">
                            <a href="<?= $approach['social']['youtube'] ?>" class="cp-approach__link" target="_blank">
                                <img src="/wp-content/themes/jupiter-child/dist/img/icon/youtube.svg"
                                     alt="YouTube icon">
                            </a>
                        </div>

                        <div class="cp-approach__item">
                            <a href="<?= $approach['social']['linkedin'] ?>" class="cp-approach__link" target="_blank">
                                <img src="/wp-content/themes/jupiter-child/dist/img/icon/linkedin.svg"
                                     alt="LinkedIn icon">
                            </a>
                        </div>

                        <div class="cp-approach__item">
                            <a href="<?= $approach['social']['email'] ?>" class="cp-approach__link" target="_blank">
                                <img src="/wp-content/themes/jupiter-child/dist/img/icon/envelope.svg" alt="Email icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php $video_title = $video['video_title']; ?>
    <?php $video_video = $video['video_video']; ?>
    <?php if ($video_title && $video_video) : ?>
        <!--Video-->
        <section id="video-2" class="pb-[30px] pt-[15px] md:pt-0 before:content-[''] before:block before:h-[76px] before:mt-[-76px] invisible">
            <div class="max-w-[930px] px-[15px] mx-auto">
                <div class="bg-[#0095b0] px-[15px] pt-[15px] pb-[40px]">
                    <div>
                        <?= $video_video; ?>
                    </div>
                    <div class="text-center mt-[20px]">
                        <div class="text-[19px] text-white font-[700]"><?= $video_title; ?></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Video-->
    <?php endif; ?>

    <!--Form section-->
    <?php get_template_part('partials/page', 'form-section'); ?>
    <!--Form section-->
    <section class="cp-services">
        <div class="container text-center">
            <h3 class="cp-services__title text-gradient"><?= $services['title'] ?></h3>

            <div class="cp-services__subtitle"><?= $services['subtitle'] ?></div>

            <?php if (!empty($services['list'])) : ?>
                <div class="cp-services__list text-left justify-content-center row owl-carousel js-services-slider">
                    <?php foreach ($services['list'] as $item) : ?>
                        <div class="cp-services__col col-md-6 col-lg-4">
                            <div class="cp-services__item d-flex align-items-center">
                                <div class="cp-services__icon">
                                    <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                </div>

                                <div class="cp-services__text"><?= $item['title'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="cp-support">
        <div class="container">
            <div class="cp-support__wrapper d-flex align-items-center">
                <div class="cp-support__schedule">
                    <img src="<?= $support['image']['url'] ?>" alt="<?= $support['image']['alt'] ?>">
                </div>

                <div class="cp-support__desc">
                    <div class="cp-support__text"><?= $support['text'] ?></div>

                    <?php if ($support['btn_link'] && $support['btn_text']) : ?>
                        <a class="inline-block py-[12px] px-[32px]  bg-[#3BA17C] rounded-[3px] group relative js-smooth-scroll"
                           href="<?= $support['btn_link'] ?>">
                            <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg');"></div>
                            <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase relative"><?= $support['btn_text'] ?></span>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>

    <section class="cp-model">
        <div class="container">
            <div class="cp-model__wrapper text-center">
                <h3 class="cp-model__title text-gradient"><?= $model['title'] ?></h3>

                <?php if (!empty($model['list'])) : ?>
                    <div class="cp-model__list d-flex align-items-center justify-content-center text-left">
                        <?php foreach ($model['list'] as $item) : ?>
                            <div class="cp-model__item d-flex align-items-center">
                                <div class="cp-model__icon">
                                    <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                </div>

                                <div class="cp-model__text"><?= $item['title'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="cp-opportunities">
        <div class="container">
            <div class="cp-opportunities__wrapper d-flex align-items-center">
                <div class="cp-opportunities__left">
                    <h2 class="cp-opportunities__title text-gradient"><?= $opportunities['title'] ?></h2>

                    <div class="cp-opportunities__text"><?= $opportunities['text'] ?></div>


                    <?php if ($opportunities['btn_link'] && $opportunities['btn_text']) : ?>
                        <a class="hidden min-[992px]:inline-block py-[12px] px-[32px]  bg-[#3BA17C] rounded-[3px] group relative js-smooth-scroll"
                           href="<?= $opportunities['btn_link'] ?>">
                            <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg');"></div>
                            <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase relative"><?= $opportunities['btn_text'] ?></span>
                        </a>
                    <?php endif; ?>
                </div>

                <div class="cp-opportunities__right">
                    <div class="cp-opportunities__photo">
                        <img src="<?= $opportunities['photo']['url'] ?>" alt="<?= $opportunities['photo']['alt'] ?>">
                    </div>

                    <div class="cp-opportunities__quote"><?= $opportunities['quote'] ?></div>

                    <div class="cp-opportunities__ceo d-flex align-items-center">
                        <div class="cp-opportunities__photo d-flex align-items-end">
                            <img src="<?= $opportunities['photo']['url'] ?>"
                                 alt="<?= $opportunities['photo']['alt'] ?>">
                        </div>

                        <div class="cp-opportunities__author">
                            <div class="cp-opportunities__name"><?= $opportunities['name'] ?></div>

                            <div class="cp-opportunities__position"><?= $opportunities['position'] ?></div>
                        </div>
                    </div>
                </div>

                <a href="<?= $opportunities['btn_link'] ?>"
                   class="cp-opportunities__btn btn btn_type2"><?= $opportunities['btn_text'] ?></a>
            </div>
        </div>
    </section>

    <section data-x-data="managedServices" class="cp-issues">
        <div class="container text-center">
            <h3 class="cp-issues__title text-gradient"><?= $issues['title'] ?></h3>

            <div class="cp-issues__subtitle"><?= $issues['subtitle'] ?></div>

            <?php if (!empty($issues['list'])) : ?>
                <div class="cp-issues__list row text-left owl-carousel js-support-slider">
                    <?php foreach ($issues['list'] as $key => $item) : ?>
                        <div class="cp-issues__col col-md-6 col-lg-3">
                            <a data-x-on:click="setActiveSlide(<?= $key; ?>)"
                               class="cp-issues__item d-flex align-items-center js-popup">
                                <div class="cp-issues__icon">
                                    <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                </div>

                                <div class="cp-issues__text"><span><?= $item['title'] ?></span></div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($issues['list']) : ?>
            <div data-x-cloak data-x-transition.opacity data-x-show="modal"
                 class="fixed inset-0 flex flex-col z-[501] overflow-auto">
                <div class="m-auto w-full max-w-[820px] relative">
                    <div data-x-on:click.outside="toggleModal"
                         class="pt-[50px] pb-[20px] px-[20px] md:px-[60px] md:py-[46px] rounded-[10px] bg-white relative m-[15px]">
                        <button data-x-on:click="toggleModal"
                                class="absolute top-[15px] right-[15px] md:top-[30px] md:right-[40px] bg-transparent border-0 p-0 z-20 text-[rgba(57,58,64,.6)]">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.17209 23.9997C0.940287 23.9997 0.713675 23.931 0.520921 23.8022C0.328167 23.6735 0.177931 23.4904 0.0892164 23.2763C0.000501992 23.0621 -0.0227054 22.8265 0.0225297 22.5991C0.0677649 22.3718 0.17941 22.1629 0.343344 21.999L21.9996 0.342791C22.2194 0.122993 22.5175 -0.000488281 22.8283 -0.000488281C23.1392 -0.000488281 23.4373 0.122993 23.6571 0.342791C23.8769 0.562589 24.0004 0.8607 24.0004 1.17154C24.0004 1.48238 23.8769 1.78049 23.6571 2.00029L2.00084 23.6565C1.89211 23.7655 1.76292 23.8519 1.6207 23.9108C1.47848 23.9697 1.32602 23.9999 1.17209 23.9997Z"
                                      fill="currentColor"/>
                                <path d="M22.8283 23.9997C22.6743 23.9999 22.5219 23.9697 22.3797 23.9108C22.2375 23.8519 22.1083 23.7655 21.9995 23.6565L0.34328 2.00029C0.123481 1.78049 0 1.48238 0 1.17154C0 0.8607 0.123481 0.562589 0.34328 0.342791C0.563078 0.122993 0.861188 -0.000488281 1.17203 -0.000488281C1.48287 -0.000488281 1.78098 0.122993 2.00078 0.342791L23.657 21.999C23.821 22.1629 23.9326 22.3718 23.9778 22.5991C24.0231 22.8265 23.9999 23.0621 23.9112 23.2763C23.8224 23.4904 23.6722 23.6735 23.4795 23.8022C23.2867 23.931 23.0601 23.9997 22.8283 23.9997V23.9997Z"
                                      fill="currentColor"/>
                            </svg>
                        </button>
                        <?php if (!empty($issues['list'])) : ?>
                            <div id="supportingYourSuccessSlider" class="swiper">
                                <div class="swiper-wrapper lg:items-center">
                                    <?php foreach ($issues['list'] as $key => $item) : ?>
                                        <div class="swiper-slide  box-border ">
                                            <div class="text-[#ef4f25] text-[24px] leading-[1.35] font-medium mb-[16px]"><?= $item['title'] ?></div>
                                            <div class="text-[16px] leading-[1.65]"><?= $item['text'] ?></div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <div id="supportingYourSuccessSliderPagination"
                                     class="xl:!hidden mt-[20px] flex justify-center [&_span]:!h-[10px] [&_span]:!w-[10px] [&_span]:!rounded-full [&_span]:!mx-[6px] [&_.swiper-pagination-bullet-active]:!bg-[#ef4f25] [&_span]:!bg-[#777] [&_span]:!opacity-100"></div>
                            </div>
                            <div class="absolute left-[-130px] top-[50%] mt-[-34px] hidden xl:block">
                                <button id="supportingYourSuccessSliderNavPrev"
                                        class="[&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:cursor-default transition-opacity opacity-100 duration-[.2s] hover:opacity-80 w-[74px] h-[74px] rounded-full bg-[hsla(0,0%,100%,.9)] border-none flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22"
                                         viewBox="0 0 12 22"
                                         fill="none">
                                        <path d="M11 1L1 11L11 21" stroke="#393A40" stroke-linecap="round"
                                              stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="absolute right-[-130px] top-[50%] mt-[-34px] hidden xl:block">
                                <button id="supportingYourSuccessSliderNavNext"
                                        class="[&.swiper-button-disabled]:opacity-50 [&.swiper-button-disabled]:cursor-default transition-opacity opacity-100 duration-[.2s] hover:opacity-80 w-[74px] h-[74px] rounded-full bg-[hsla(0,0%,100%,.9)] border-none flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="22"
                                         viewBox="0 0 12 22"
                                         fill="none">
                                        <path d="M1.23242 1L11.2324 11L1.23242 21" stroke="#393A40"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div data-x-cloak data-x-transition.opacity data-x-show="modal"
                 class="bg-[#393A40] bg-opacity-80 fixed inset-0 z-[500]"></div>
        <?php endif; ?>
    </section>

    <section class="cp-faq">
        <div class="container">
            <div class="cp-faq__wrapper">
                <h3 class="cp-faq__title text-gradient"><?= $faq['title'] ?></h3>

                <?php if (!empty($faq['list'])) : ?>
                    <div class="cp-faq__list js-accordion">
                        <?php foreach ($faq['list'] as $item) : ?>
                            <div class="cp-faq__item js-accordion-item">
                                <div class="cp-faq__question js-accordion-trigger"><span><?= $item['question'] ?></span>
                                </div>

                                <div class="cp-faq__answer js-accordion-content"><?= $item['answer'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="cp-industries">
        <div class="container text-center">
            <h3 class="cp-industries__title text-gradient"><?= $industries['title'] ?></h3>

            <?php if (!empty($industries['list'])) : ?>
                <div class="cp-industries__list row owl-carousel js-industries-slider">
                    <?php foreach ($industries['list'] as $item) : ?>
                        <div class="cp-industries__col col-md-4">
                            <div class="cp-industries__item">
                                <div class="cp-industries__icon d-flex align-items-center justify-content-center">
                                    <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                </div>

                                <div class="cp-industries__text"><?= $item['title'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if ($industries['btn_link'] && $industries['btn_text']) : ?>
                <div class="relative z-20">
                    <a class="hidden min-[768px]:inline-block py-[12px] px-[32px]  bg-[#3BA17C] rounded-[3px] group relative js-smooth-scroll"
                       href="<?= $industries['btn_link'] ?>">
                        <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg');"></div>
                        <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase relative"><?= $industries['btn_text'] ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="cp-technology">
        <div class="container text-center">
            <div class="cp-technology__logo">
                <img src="<?= $technology['logo']['url'] ?>" alt="<?= $technology['logo']['alt'] ?>">
            </div>

            <h2 class="cp-technology__title text-gradient"><?= $technology['title'] ?></h2>

            <div class="cp-technology__subtitle"><?= $technology['text'] ?></div>

            <div class="cp-technology__about d-flex text-left">
                <div class="cp-technology__left d-flex">
                    <div class="cp-technology__wrapper align-self-center">
                        <h3 class="cp-technology__name"><?= $technology['name'] ?></h3>

                        <div class="cp-technology__desc"><?= $technology['description'] ?></div>
                    </div>
                </div>

                <div class="cp-technology__right">
                    <?php if (!empty($technology['list'])) : ?>
                        <div class="cp-technology__list">
                            <?php foreach ($technology['list'] as $item) : ?>
                                <div class="cp-technology__item d-flex align-items-center">
                                    <div class="cp-technology__icon">
                                        <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                    </div>

                                    <div class="cp-technology__text"><?= $item['text'] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="cp-technology__list cp-technology__list_mobile">
                            <?php foreach ($technology['list'] as $key => $item) : ?>
                                <?php if ($key != 0): ?>
                                    <div class="cp-technology__item d-flex align-items-center">
                                        <div class="cp-technology__icon">
                                            <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                        </div>

                                        <div class="cp-technology__text"><?= $item['text'] ?></div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="cp-technology__more-w text-center">
                        <a href="#" class="cp-technology__more">Show all benefits</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cp-results" id="results">
        <div class="container">
            <div class="cp-results__wrapper d-flex align-items-center">
                <div class="cp-results__left">
                    <div class="cp-results__type"><?= $results['type'] ?></div>

                    <h2 class="cp-results__title"><?= $results['title'] ?></h2>

                    <div class="cp-results__text"><?= $results['text'] ?></div>
                </div>

                <div class="cp-results__right">
                    <div class="cp-results__subtitle"><?= $results['right_title'] ?></div>

                    <?php if ($results['highlights']) : ?>
                        <div class="cp-results__highlights d-flex">
                            <?php foreach ($results['highlights'] as $item) : ?>
                                <div class="cp-results__highlight">
                                    <div class="cp-results__number"><?= $item['number'] ?></div>

                                    <div class="cp-results__txt"><?= $item['text'] ?></div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section data-x-data="{open: false}" class="cp-advantages">
        <div class="container text-center">
            <div class="mb-[40px]">
                <h2 class="cp-advantages__title text-gradient"><?= $advantages['title'] ?></h2>
                <div class="cp-advantages__text"><?= $advantages['text'] ?></div>
            </div>

            <?php if ($advantages['list']) : ?>
                <div data-x-cloak data-x-show="open" data-x-collapse>
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-[30px] gap-y-[55px] px-[20px] pb-[40px] box-border text-left">
                        <?php foreach ($advantages['list'] as $item) : ?>
                            <div>
                                <div class="flex gap-[24px] mb-[16px] items-center">
                                    <div class="w-[62px]">
                                        <img class="block mx-auto" src="<?= $item['icon']['url'] ?>"
                                             alt="<?= $item['icon']['alt'] ?>">
                                    </div>
                                    <div class="cp-advantages__name"><?= $item['title'] ?></div>
                                </div>
                                <div class="cp-advantages__desc"><?= $item['text'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="text-center">
                    <a data-x-on:click.prevent="open = !open"
                       data-x-text="open ? 'Hide all advantages' : 'Show all advantages'"
                       class="cp-advantages__link cursor-pointer"></a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section class="cp-help">
        <div class="container text-center">
            <h2 class="cp-help__title"><?= $help['title'] ?></h2>

            <div class="cp-help__text"><?= $help['text'] ?></div>

            <?php if ($help['btn_link'] && $help['btn_text']) : ?>
                <a class="inline-block py-[12px] px-[32px]  bg-[#3BA17C] rounded-[3px] group relative js-smooth-scroll"
                   href="<?= $help['btn_link'] ?>">
                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg');"></div>
                    <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase relative"><?= $help['btn_text'] ?></span>
                </a>
            <?php endif; ?>
        </div>
    </section>

    <section class="cp-insights">
        <div class="container text-center">
            <h2 class="cp-insights__title text-gradient">Related Insights</h2>

            <?php if (!empty($insights)) : ?>
                <div class="cp-insights__list text-left row owl-carousel js-insights-slider">
                    <?php foreach ($insights as $item) : ?>
                        <div class="cp-insights__col col-lg-4">
                            <a href="<?= get_permalink($item->ID) ?>" class="cp-insights__item">
                                <div class="cp-insights__image">
                                    <img src="<?= get_the_post_thumbnail_url($item->ID) ?>"
                                         alt="<?= $item->post_title ?>">
                                </div>

                                <div class="cp-insights__heading"><?= $item->post_title ?></div>

                                <div class="cp-insights__more">Read More</div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!--Leadership-->
    <?php get_template_part('partials/page', 'leadership'); ?>
    <!--Leadership-->

</div>

<?php get_footer(); ?>
