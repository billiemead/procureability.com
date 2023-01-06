<?php $frontpage_procurement_reimagined_title = get_field('frontpage_procurement_reimagined_title'); ?>
<?php $frontpage_procurement_reimagined_quote_author = get_field('frontpage_procurement_reimagined_quote_author'); ?>
<?php $frontpage_procurement_reimagined_quote_author_position = get_field('frontpage_procurement_reimagined_quote_author_position'); ?>
<?php $frontpage_procurement_reimagined_quote_author_photo = get_field('frontpage_procurement_reimagined_quote_author_photo'); ?>
<?php $frontpage_procurement_reimagined_quote_text = get_field('frontpage_procurement_reimagined_quote_text'); ?>

<section class="py-[40px] xl:py-[72px] bg-[#F7F9FA]">
    <div class="md:max-w-[543px] xl:max-w-[855px] mx-auto px-[34px]">
        <div class="text-center mb-[24px] md:mb-[32px] xl:mb-[40px]">
            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] md:text-[36px] leading-[1.4] md:leading-[1.3] font-[600]">
                <?= $frontpage_procurement_reimagined_title; ?>
            </div>
        </div>
        <div class="relative">
            <div class="xl:w-[calc(100%-(36px+160px))]">
                <div class="mb-[20px]">
                    <div class="[&_p]:!font-poppins [&_p]:text-[#393A40] [&_p]:text-[14px] md:[&_p]:text-[16px] [&_p]:leading-[1.7] [&_p]:opacity-80 text-center xl:!text-left relative">
                        <svg class="absolute w-[16px] md:w-[28px] h-auto top-[-2px] md:top-[-15px] left-[-16px] md:left-[-11px] xl:top-0 xl:left-[-40px]"
                             viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5"
                                  d="M6.21111 22C4.46423 22 2.97616 21.4054 1.74687 20.2162C0.582291 18.961 0 17.4414 0 15.6577C0 14.6006 0.194097 13.5766 0.582291 12.5856C1.03518 11.5946 1.71452 10.4054 2.62031 9.01802L8.73437 0L12.6163 2.57658L7.86093 10.009C9.02552 10.2072 10.0607 10.8348 10.9665 11.8919C11.8723 12.8829 12.3252 14.1381 12.3252 15.6577C12.3252 17.4414 11.7105 18.961 10.4812 20.2162C9.31666 21.4054 7.89328 22 6.21111 22ZM21.5948 22C19.8479 22 18.3598 21.4054 17.1306 20.2162C15.966 18.961 15.3837 17.4414 15.3837 15.6577C15.3837 14.6006 15.5778 13.5766 15.966 12.5856C16.4189 11.5946 17.0982 10.4054 18.004 9.01802L24.1181 0L28 2.57658L23.2446 10.009C24.4092 10.2072 25.4444 10.8348 26.3502 11.8919C27.256 12.8829 27.7089 14.1381 27.7089 15.6577C27.7089 17.4414 27.0942 18.961 25.8649 20.2162C24.7004 21.4054 23.277 22 21.5948 22Z"
                                  fill="#0098AE" fill-opacity="0.5"/>
                        </svg>

                        <p><?= $frontpage_procurement_reimagined_quote_text; ?></p>
                        <svg class="absolute w-[16px] md:w-[28px] h-auto right-0 md:right-[-5px] bottom-[-2px] md:bottom-[-11px] xl:right-[20px] xl:bottom-[-11px]"
                             viewBox="0 0 29 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.5"
                                  d="M22.2889 1.36436e-06C24.0358 1.51707e-06 25.5238 0.594597 26.7531 1.78378C27.9177 3.03904 28.5 4.55856 28.5 6.34234C28.5 7.3994 28.3059 8.42342 27.9177 9.41441C27.4648 10.4054 26.7855 11.5946 25.8797 12.982L19.7656 22L15.8837 19.4234L20.6391 11.991C19.4745 11.7928 18.4393 11.1652 17.5335 10.1081C16.6277 9.11711 16.1748 7.86186 16.1748 6.34234C16.1748 4.55856 16.7895 3.03904 18.0188 1.78378C19.1833 0.594596 20.6067 1.2173e-06 22.2889 1.36436e-06ZM6.9052 1.94712e-08C8.65207 1.72188e-07 10.1402 0.594595 11.3694 1.78378C12.534 3.03904 13.1163 4.55856 13.1163 6.34234C13.1163 7.3994 12.9222 8.42342 12.534 9.41441C12.0811 10.4054 11.4018 11.5946 10.496 12.982L4.38194 22L0.499996 19.4234L5.25537 11.991C4.09079 11.7928 3.05561 11.1652 2.14982 10.1081C1.24403 9.11711 0.791145 7.86186 0.791145 6.34234C0.791145 4.55856 1.40578 3.03904 2.63506 1.78378C3.79965 0.594595 5.22303 -1.27589e-07 6.9052 1.94712e-08Z"
                                  fill="#0098AE" fill-opacity="0.5"/>
                        </svg>
                    </div>
                </div>
                <div class="flex xl:!block justify-center items-center">
                    <div class="xl:absolute xl:right-0 xl:top-0 w-[50px] md:w-[80px] xl:w-[160px] mr-[20px] xl:mr-0 [&_img]:max-w-full [&_img]:h-auto">
                        <?= wp_get_attachment_image($frontpage_procurement_reimagined_quote_author_photo['id'], 'full'); ?>
                    </div>
                    <div class="text-[#393A40] text-[14px] md:text-[16px] leading-[1.5] tracking-[-0.02em]">
                        <div class="font-[500] opacity-80"><?= $frontpage_procurement_reimagined_quote_author; ?></div>
                        <div class="opacity-50"><?= $frontpage_procurement_reimagined_quote_author_position; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>