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
        <div class="hero__bg"
             style="background-image: url('/wp-content/themes/jupiter-child/dist/img/pages/managed-services/hero-bg.jpg')"></div>

        <div class="container">
            <div class="hero__wrapper d-flex flex-column justify-content-center align-items-center">
                <h1 class="hero__title text-center hero-text-gradient"><?php the_title(); ?></h1>
            </div>
        </div>
    </section>

    <section class="cp-approach" id="video">
        <div class="container">
            <div class="cp-approach__wrapper d-flex">
                <div class="cp-approach__desc">
                    <h4 class="cp-approach__title text-gradient"><?= $approach['title'] ?></h4>

                    <div class="cp-approach__text"><?= $approach['text'] ?></div>
                </div>

                <div class="cp-approach__scl">
<!--                    --><?php //echo do_shortcode('[sharethis-inline-buttons]') ?>
                    <div class="cp-approach__list">
                        <div class="cp-approach__item">
                            <a href="<?= $approach['social']['youtube'] ?>" class="cp-approach__link" target="_blank">
                                <img src="/wp-content/themes/jupiter-child/dist/img/icon/youtube.svg" alt="YouTube icon">
                            </a>
                        </div>

                        <div class="cp-approach__item">
                            <a href="<?= $approach['social']['linkedin'] ?>" class="cp-approach__link" target="_blank">
                                <img src="/wp-content/themes/jupiter-child/dist/img/icon/linkedin.svg" alt="LinkedIn icon">
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
    <?php if ($video_title && $video_video ) : ?>
        <!--Video-->
        <section id="video" class="py-[30px]">
            <div class="max-w-[930px] px-[15px] mx-auto">
                <div class="bg-[#0095b0] px-[15px] pt-[15px] pb-[40px]">
                    <div>
                        <?= $video_video; ?>
                    </div>
                    <div class="text-center mt-[20px]">
                        <div class="text-[19px] leading-black text-[#000] font-[700] capitalize"><?= $video_title; ?></div>
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

            <?php if(!empty($services['list'])) : ?>
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

                    <a href="<?= $support['btn_link'] ?>" class="cp-support__btn btn"><?= $support['btn_text'] ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="cp-model">
        <div class="container">
            <div class="cp-model__wrapper text-center">
                <h3 class="cp-model__title text-gradient"><?= $model['title'] ?></h3>

                <?php if(!empty($model['list'])) : ?>
                    <div class="cp-model__list d-flex align-items-center justify-content-center text-left">
                        <?php foreach($model['list'] as $item) : ?>
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

                    <a href="<?= $opportunities['btn_link'] ?>" class="cp-opportunities__btn btn btn_type2 js-smooth-scroll"><?= $opportunities['btn_text'] ?></a>
                </div>

                <div class="cp-opportunities__right">
                    <div class="cp-opportunities__photo">
                        <img src="<?= $opportunities['photo']['url'] ?>" alt="<?= $opportunities['photo']['alt'] ?>">
                    </div>

                    <div class="cp-opportunities__quote"><?= $opportunities['quote'] ?></div>

                    <div class="cp-opportunities__ceo d-flex align-items-center">
                        <div class="cp-opportunities__photo d-flex align-items-end">
                            <img src="<?= $opportunities['photo']['url'] ?>" alt="<?= $opportunities['photo']['alt'] ?>">
                        </div>

                        <div class="cp-opportunities__author">
                            <div class="cp-opportunities__name"><?= $opportunities['name'] ?></div>

                            <div class="cp-opportunities__position"><?= $opportunities['position'] ?></div>
                        </div>
                    </div>
                </div>

                <a href="<?= $opportunities['btn_link'] ?>" class="cp-opportunities__btn btn btn_type2"><?= $opportunities['btn_text'] ?></a>
            </div>
        </div>
    </section>

    <section class="cp-issues">
        <div class="container text-center">
            <h3 class="cp-issues__title text-gradient"><?= $issues['title'] ?></h3>

            <div class="cp-issues__subtitle"><?= $issues['subtitle'] ?></div>

            <?php if(!empty($issues['list'])) : ?>
                <div class="cp-issues__list row text-left owl-carousel js-support-slider">
                    <?php foreach ($issues['list'] as $key => $item) : ?>
                        <div class="cp-issues__col col-md-6 col-lg-3">
                            <a href="#issue-<?= $key+1 ?>" class="cp-issues__item d-flex align-items-center js-popup" data-mfp-src="#issues-popup">
                                <div class="cp-issues__icon">
                                    <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                </div>

                                <div class="cp-issues__text"><span><?= $item['title'] ?></span></div>
                            </a>

                            <div class="cp-issues-popup mfp-hide" id="mfp-issue-<?= $key ?>">
                                <div class="cp-issues-popup__title"><?= $item['title'] ?></div>

                                <div class="cp-issues-popup__text"><?= $item['text'] ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if(!empty($issues['list'])) : ?>
            <div class="cp-issues-popup mfp-hide" id="issues-popup">
                <div class="cp-issues-popup__list owl-carousel js-issues-popup-slider">
                    <?php foreach ($issues['list'] as $key => $item) : ?>
                        <div class="cp-issues-popup__item" data-hash="issue-<?= $key+1 ?>">
                            <div class="cp-issues-popup__title"><?= $item['title'] ?></div>

                            <div class="cp-issues-popup__text"><?= $item['text'] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>
    </section>

    <section class="cp-faq">
        <div class="container">
            <div class="cp-faq__wrapper">
                <h3 class="cp-faq__title text-gradient"><?= $faq['title'] ?></h3>

                <?php if(!empty($faq['list'])) : ?>
                    <div class="cp-faq__list js-accordion">
                        <?php foreach ($faq['list'] as $item) : ?>
                            <div class="cp-faq__item js-accordion-item">
                                <div class="cp-faq__question js-accordion-trigger"><span><?= $item['question'] ?></span></div>

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

            <?php if(!empty($industries['list'])) : ?>
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

            <a href="<?= $industries['btn_link'] ?>" class="cp-industries__btn btn"><?= $industries['btn_text'] ?></a>
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
                    <?php if(!empty($technology['list'])) : ?>
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
                                <?php if($key != 0 ): ?>
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

                    <?php if($results['highlights']) : ?>
                        <div class="cp-results__highlights d-flex">
                            <?php foreach($results['highlights'] as $item) : ?>
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

    <section class="cp-advantages">
        <div class="container text-center">
            <h2 class="cp-advantages__title text-gradient"><?= $advantages['title'] ?></h2>

            <div class="cp-advantages__text"><?= $advantages['text'] ?></div>

            <div class="cp-advantages__wrapper">
                <?php if(!empty($advantages['list'])) : ?>
                    <div class="cp-advantages__list row text-left">
                        <?php foreach ($advantages['list'] as $item) : ?>
                            <div class="cp-advantages__item col-md-6 col-lg-4">
                                <div class="cp-advantages__top d-flex align-items-center">
                                    <div class="cp-advantages__icon">
                                        <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                                    </div>

                                    <div class="cp-advantages__name"><?= $item['title'] ?></div>
                                </div>

                                <div class="cp-advantages__desc"><?= $item['text'] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <a href="#" class="cp-advantages__link">Show all advantages</a>
        </div>
    </section>

    <section class="cp-help">
        <div class="container text-center">
            <h2 class="cp-help__title"><?= $help['title'] ?></h2>

            <div class="cp-help__text"><?= $help['text'] ?></div>

            <a href="<?= $help['btn_link'] ?>" class="cp-help__btn btn btn_type3"><?= $help['btn_text'] ?></a>
        </div>
    </section>

    <section class="cp-insights">
        <div class="container text-center">
            <h2 class="cp-insights__title text-gradient">Related Insights</h2>

            <?php if(!empty($insights)) : ?>
                <div class="cp-insights__list text-left row owl-carousel js-insights-slider">
                    <?php foreach ($insights as $item) : ?>
                        <div class="cp-insights__col col-lg-4">
                            <a href="<?= get_permalink($item->ID) ?>" class="cp-insights__item">
                                <div class="cp-insights__image">
                                    <img src="<?= get_the_post_thumbnail_url($item->ID) ?>" alt="<?= $item->post_title ?>">
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
