<?php $cta_text = get_field('cta_text'); ?>
<?php $cta_button = get_field('cta_button'); ?>

<section class="py-[46px] bg-[#0098AE] bg-no-repeat bg-cover"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/cta-bg.png')">
    <div class="max-w-[715px] px-[15px] mx-auto">
        <div class="flex items-center flex-col lg:!flex-row">
            <div class="mb-[24px] lg:mb-0 lg:mr-[24px]">
                <svg width="49" height="49" viewBox="0 0 49 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="bxl:linkedin" opacity="0.6">
                        <path id="Vector"
                              d="M10.1736 14.6941C12.6407 14.6941 14.6408 12.6941 14.6408 10.2269C14.6408 7.75978 12.6407 5.75977 10.1736 5.75977C7.70644 5.75977 5.70642 7.75978 5.70642 10.2269C5.70642 12.6941 7.70644 14.6941 10.1736 14.6941Z"
                              fill="white"/>
                        <path id="Vector_2"
                              d="M18.8589 18.0793V42.8631H26.5539V30.607C26.5539 27.373 27.1623 24.241 31.1722 24.241C35.1269 24.241 35.1759 27.9385 35.1759 30.8111V42.8651H42.875V29.2738C42.875 22.5975 41.4377 17.4668 33.6344 17.4668C29.888 17.4668 27.3767 19.5228 26.3498 21.4685H26.2456V18.0793H18.8589ZM6.31897 18.0793H14.0263V42.8631H6.31897V18.0793Z"
                              fill="white"/>
                    </g>
                </svg>

            </div>
            <?php if ($cta_text) : ?>
                <div class="mb-[24px] lg:mb-0 lg:mr-[48px] text-center">
                    <div class="font-poppins text-[28px] font-semibold leading-[1.5] text-white"><?= $cta_text; ?>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($cta_button) : ?>
                <div>
                    <a class="inline-block py-[12px] px-[38px] uppercase bg-[#3BA17C] rounded-[3px] group relative"
                       target="<?= $cta_button['target'] ? $cta_button['target'] : '_self' ?>"
                       href="<?= $cta_button['url']; ?>">
                        <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center rocket-lazyload"
                             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg');
                                     "></div>
                        <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] font-[700]"><?= $cta_button['title']; ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>