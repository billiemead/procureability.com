<?php

$ctaTitle = get_field('cta_title');
$ctaBanner = get_field('cta_banner');
$ctaButtonText = get_field('cta_button_text');
$ctaButtonLink = get_field('cta_button_link');

?>

<div
        class="webinar-cta"
>
    <div
            class="absolute w-[100%] h-[100%] webinar-cta__bg top-0 left-0 z-0"
            style="background-image: url(<?= $ctaBanner['url'] ?>);"
    ></div>
    <div class="max-w-[1140px] mx-auto px-[15px] relative z-10">
        <div class="max-w-[100%] lg:max-w-[540px] webinar-cta__content">
            <h2 class="font-poppins text-[40px] text-[#393A40] font-semibold leading-[1.4] mb-[32px]"><?= $ctaTitle ?></h2>
            <a
                    href="<?= $ctaButtonLink ?>"
                    target="_blank"
                    class="inline-block py-[12px] px-[30px] bg-[#3BA17C] rounded-[3px] group relative"
                    title="<?= $ctaButtonText ?>"
            >
                <div
                        class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                        style="background-image: url('https://development.procureability.com/wp-content/uploads/2024/01/button-bg-pattern.svg')"
                ></div>
                <span class="font-poppins text-white text-[24px] leading-[1.515] font-semibold uppercase"><?= $ctaButtonText ?></span>
            </a>
        </div>
    </div>
</div>