<?php

$ctaTitle = get_field('title_cta_type_2');
$ctaText = get_field('text_cta_type_2');
$ctaBanner = get_field('banner_cta_type_2');
$ctaButtonText = get_field('button_label_cta_type_2');
$ctaButtonLink = get_field('button_link_cta_type_2');

?>

<?php if ($ctaTitle && $ctaBanner): ?>

    <div class="relative py-[80px] webinar-cta-type-2">
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
                    <span class="font-poppins text-white text-[18px] leading-[1.515] font-medium uppercase"><?= $ctaButtonText ?></span>
                </a>
            </div>
        </div>
    </div>

<?php endif; ?>