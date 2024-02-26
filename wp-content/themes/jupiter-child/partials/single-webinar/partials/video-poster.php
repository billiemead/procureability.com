<?php

$videoPoster = get_field('video_poster');

?>

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