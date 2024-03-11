<?php

$videoPoster = get_field('video_poster');

$subscribeTitle = get_field('subscribe_title');
$subscribeButtonText = get_field('subscribe_button_text');
$subscribeButtonUrl = get_field('subscribe_button_url');

?>

<section class="pt-[40px] pb-[85px] lg:pt-[60px]">
    <div class="max-w-[960px] px-[15px] mx-auto overflow-hidden">
        <h1 class="text-[36px] text-[#404040] text-left font-semibold"><?= get_the_title() ?></h1>

        <div class="content mb-[20px]">
            <?php if ($videoPoster): ?>
                <div
                    class="block md:inline w-[100%] md:w-[465px] pb-[56.25%] md:pb-[27.25%] max-w-[100%] relative float-right ml-[1.5em] mb-[1.5em] video-container"
                >
                    <div class="video-thumbnail fade-in">
                        <div
                            class="absolute top-0 left-0 h-[100%] w-[100%] overflow-hidden bg-no-repeat bg-center bg-cover"
                            style="background-image: url('<?= $videoPoster['url'] ?>')"
                        ></div>

                        <div class="video-thumbnail-overlay" style="position: absolute;">
                            <button
                                class="bg-transparent border-0 opacity-50 hover:opacity-100 w-auto h-auto block mx-auto absolute top-0 left-0 bottom-0 right-0 transition-all duration-[200ms] ease-in-out"
                                data-fancybox
                                data-src="#fancybox-frame"
                            >
                                <svg
                                    style="fill: rgb(255, 255, 255); height: 64px; width: 50.275px;"
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 1408 1792"
                                    data-width="50.275"
                                    data-height="64"
                                >
                                    <path
                                        d="M1384 927l-1328 738q-23 13-39.5 3t-16.5-36v-1472q0-26 16.5-36t39.5 3l1328 738q23 13 23 31t-23 31z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?= get_the_content() ?>
            <div class="block hidden clear-both overflow-hidden w-0 h-0"></div>
        </div>

        <div class="text-center">
            <?php if ($subscribeTitle): ?>
                <h3 class="text-[24px] text-[#404040] font-semibold"><?= $subscribeTitle ?></h3>
            <?php endif; ?>

            <?php if ($subscribeButtonText && $subscribeButtonUrl): ?>
                <p>
                    <a
                        href="<?= $subscribeButtonUrl ?>"
                        title="<?= $subscribeButtonText ?>"
                        target="_blank"
                        class="text-[14px] text-[#57ac85] font-roboto py-[9px] px-[18px] my-[25px] mx-0 bg-transparent rounded-0 border-2 border-solid border-[#57ac85] inline-block cursor-pointer hover:bg-[#57ac85] hover:text-[#ffffff]"
                    ><?= $subscribeButtonText ?></a>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php /** CTA */ ?>
<?php get_template_part('partials/single-webinar/partials/cta-type-2'); ?>
<?php /** !CTA */ ?>