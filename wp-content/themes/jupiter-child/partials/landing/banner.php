<?php

$title = get_field('title_landing_banner');
$button = get_field('button_landing_banner');
$background = get_field('background_image_landing_banner');

?>

<section class="pb-[40px] md:pb-[80px] px-[15px] landing-banner">
    <div class="box-border
                    max-w-[984px]
                    px-[30px]
                    py-[30px]
                    sm:px-[80px]
                    sm:py-[80px]
                    mx-auto
                    bg-contain
                    bg-no-repeat
                    bg-right
                    landing-banner__text" style="background-image: url(<?= $background['url'] ?>); background-color: #F7F9FA;">
        <?php if ($title) : ?>
            <h2 class="leading-8b
                        font-poppins
                        font-semibold
                        text-[1.4em]
                        sm:text-[1.6em]
                        sm:max-w-[100%]
                        sm:max-w-[380px]" style="color: #393A3F;"><?= $title ?></h2>
        <?php endif; ?>

        <a
                href="<?= $button['button_link_landing_banner'] ?>"
                class="font-poppins
                        sm:text-[18px]
                        text-[14px]
                        leading-[1.27]
                        text-transparent
                        hover:text-transparent
                        bg-clip-text
                        brand-text-gradient
                        inline-block mt-[1.2em]
                        transition-all
                        ease-in-out
                        duration-300
                        relative
                        after:content-['']
                        after:absolute
                        after:w-full
                        after:border-b-2
                        after:border-t-0
                        after:border-l-0
                        after:border-r-0
                        after:border-b-[#0098AE]
                        after:opacity-100
                        after:block
                        after:border-dotted
                        hover:after:opacity-0
                        after:transition-all"
                title="<?= $button['button_text_landing_banner'] ?>"
                style="color: #4DA880;"
        >
            <?= $button['button_text_landing_banner'] ?>
        </a>
    </div>
</section>