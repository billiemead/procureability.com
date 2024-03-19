<?php
/*
    Template Name: Positive Pressure: The merits of sustainable and responsible sourcing
    Template Post Type: post
*/

$statBoxShow = get_field('show_stat_box');
$statBoxPercentage = get_field('percentage_stat_box');
$statBoxText = get_field('text_stat_box');

$sourcesShow = get_field('show_sources');
$sourcesTitle = get_field('title_sources');
$sources = get_field('sources');

$ctaShow = get_field('show_cta');
$ctaTitle = get_field('title_cta');
$ctaText = get_field('text_cta');
$ctaBanner = get_field('banner_cta');
$ctaButtonText = get_field('button_label_cta');
$ctaButtonLink = get_field('button_link_cta');

$postThumbnailUrl = get_the_post_thumbnail_url(get_the_ID());

get_header(); ?>

<main class="pt-[25px] md:pt-[50px] pb-[100px] px-[15px] max-w-[960px] mx-auto positive-pressure-the-merits-of-sustainable-and-responsible-sourcing">
    <div class="mb-[20px] md:mb-[32px]">
        <h1 class="text-[30px] font-poppins text-left text-[#404040] font-semibold mb-0"><?= get_the_title() ?></h1>
    </div>

    <?php if ($statBoxShow): ?>
        <div class="mb-[32px] rounded-[7.25px] border border-solid border-[rgba(0,152,174,0.40)] bg-[#fff] px-[20px] py-[20px] text-[#393A40] font-poppins text-[16px] font-medium leading-[1.5] [&_sup]:relative [&_sup]:top-0 [&_sup]:text-[8px]">
            <span class="text-[24px] text-[#0098AE]"><?= $statBoxPercentage ?></span> <?= $statBoxText ?>
        </div>
    <?php endif; ?>

    <div class="positive-pressure-the-merits-of-sustainable-and-responsible-sourcing__content">
        <div>
            <div class="mb-[56px]">
                <?= get_the_content() ?>
            </div>

            <?php if ($sourcesShow): ?>
                <div>
                    <h2 class="text-[#393A40] font-poppins text-[20px] font-medium leading-[1.328]"><?= $sourcesTitle ?></h2>

                    <ol class="px-0 py-0 mx-0 my-0 list-none [counter-reset:whitepaper-sources-list-counter]">
                        <?php foreach ($sources as $source): ?>
                            <li class="before:text-[#777] before:text-[10px] before:font-normal before:leading-[1.66] text-[#393A40] font-poppins text-[16px] font-normal leading-[1.66] [counter-increment:whitepaper-sources-list-counter] before:content-[counter(whitepaper-sources-list-counter)] before:align-super">
                                <a
                                        class="text-[#0098AE] font-poppins text-[16px] font-normal leading-[1.66] border-dotted border-[#0098AE] border-b hover:border-[#2e2e2e]"
                                        href="<?= $source['link'] ?>"
                                        title="<?= $source['title'] ?>"
                                        target="_blank"
                                ><?= $source['title'] ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ol>
                </div>
            <?php endif; ?>
        </div>

        <div>
            <?php if ($postThumbnailUrl) : ?>
                <div class="mb-[20px]">
                    <img class="max-w-[100%]" src="<?= $postThumbnailUrl ?>" alt="<?= strip_tags(get_the_title()) ?>">
                </div>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php if ($ctaShow): ?>

    <section class="relative py-[80px] webinar-cta-type-2">
        <div
                class="absolute w-[100%] h-[100%] bg-no-repeat bg-cover top-0 left-0 z-0 webinar-cta-type-2__bg"
                style="background-image: url(<?= $ctaBanner['url'] ?>);"
        ></div>
        <div class="max-w-[1200px] mx-auto px-[15px] relative z-10">
            <div class="max-w-[100%] md:max-w-[610px] lg:max-w-[722px] webinar-cta-type-2__content">
                <div class="max-w-[100%] md:max-w-[610px]">
                    <h2 class="font-poppins text-[36px] text-[#FFFFFF] font-semibold leading-[1.4] mb-[20px]"><?= $ctaTitle ?></h2>
                </div>

                <div class="text-[#fff] font-poppins text-[20px] font-normal leading-[1.6] mb-[40px]">
                    <?= $ctaText ?>
                </div>

                <a
                        href="<?= $ctaButtonLink ?>"
                        target="_blank"
                        class="inline-block py-[12px] px-[30px] bg-[#3BA17C] rounded-[3px] group relative"
                        title="<?= $ctaButtonText ?>"
                >
                    <div
                            class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                            style="background-image: url('https://procureability.com/wp-content/uploads/2024/01/button-bg-pattern.svg')"
                    ></div>
                    <span class="font-poppins text-white text-[18px] leading-[1.515] tracking-[1.8px] font-medium uppercase"><?= $ctaButtonText ?></span>
                </a>
            </div>
        </div>
    </section>

<?php endif; ?>

<?php get_footer(); ?>
