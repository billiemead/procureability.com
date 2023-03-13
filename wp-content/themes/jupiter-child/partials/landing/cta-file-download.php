<?php

$cta_file_download_title = get_field('cta_file_download_title');
$cta_file_download_text = get_field('cta_file_download_text');
$cta_file_download_button = get_field('cta_file_download_button');

?>

<?php if ($cta_file_download_title || $cta_file_download_text || $cta_file_download_button) : ?>
    <section class="pb-[80px] md:pb-[120px]">
        <div class="max-w-[1200px] px-[15px] mx-auto">
            <div class="bg-[#FAFAFB] border border-[#0098AE] border-solid shadow-[0px_16px_50px_rgba(19,131,156,0.1)] py-[35px] md:py-[77px] px-[25px] bg-no-repeat bg-[bottom_-275px_right_-275px] md:bg-[bottom_-235px_right_-235px]"
                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/branding-star-bold-predictions.svg')">
                <div class="max-w-[564px] mx-auto">
                    <?php if ($cta_file_download_title) : ?>
                        <div class="text-center mb-[16px]">
                            <div class="font-poppins font-semibold text-[32px] leading-[1.3] brand-text-gradient text-transparent bg-clip-text"><?= $cta_file_download_title; ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($cta_file_download_text) : ?>
                        <div class="text-center mb-[40px]">
                            <div class="[&_p]:!font-poppins [&_p]:text-[#61636B] md:[&_p]:!text-[24px] [&_p]:text-[18px] [&_p]:leading-[1.64] [&_p]:last:mb-0"><?= $cta_file_download_text; ?></div>
                        </div>
                    <?php endif; ?>
                    <?php if ($cta_file_download_button) : ?>
                        <div class="text-center">
                            <a class="inline-block pt-[13px] pb-[11px] px-[47px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
                               target="<?= $cta_file_download_button['target'] ?: '_self'; ?>"
                               href="<?= $cta_file_download_button['url']; ?>"
                               download
                            >
                                <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                                ></div>
                                <span class="relative font-poppins text-white text-[18px] leading-[1.51] font-semibold uppercase tracking-[0.1em]"><?= $cta_file_download_button['title']; ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>