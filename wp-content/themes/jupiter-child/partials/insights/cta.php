<?php $cta_with_image = get_field('cta_with_image'); ?>

<?php if ($cta_with_image) : ?>
    <section class="py-[40px] md:py-[88px] relative"
             style="background-color: rgba(<?= $cta_with_image['background_color']['red']; ?>, <?= $cta_with_image['background_color']['green']; ?>, <?= $cta_with_image['background_color']['blue']; ?>, <?= $cta_with_image['background_color']['alpha']; ?>);">
        <div class="hidden lg:block absolute inset-0 bg-no-repeat bg-[right_top] bg-[length:auto_100%]"
             style="background-image: url('<?= $cta_with_image['background_image']['url']; ?>');"></div>
        <div class="relative max-w-[1200px] mx-auto px-[15px]">
            <div class="max-w-[567px] mx-auto lg:mx-0">
                <?php if ($cta_with_image['title']) : ?>
                    <div class="mb-[20px] text-center lg:!text-left">
                        <div class="font-poppins text-[36px] leading-[1.4] font-semibold text-[#393A40]"><?= $cta_with_image['title']; ?></div>
                    </div>
                <?php endif; ?>
                <?php if ($cta_with_image['content']) : ?>
                    <div class="text-center lg:!text-left">
                        <div class="[&_*]:font-poppins [&_*]:text-[#393A40] [&_p]:text-[18px] font-normal leading-[1.6] [&_a]:text-[#155B39] [&_a]:!underline [&_a]:!decoration-[#155B39] [&_a]:hover:!decoration-[#2e2e2e] [&_a]:!decoration-dotted [&_a]:!underline-offset-[5px] [&_a]:ease-linear [&_a]:transition-all [&_a]:duration-[.15s]">
                            <?= $cta_with_image['content']; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($cta_with_image['button']) : ?>
                    <div class="mt-[40px] text-center lg:!text-left">
                        <a class="inline-block pt-[13px] pb-[11px] px-[30px] rounded-[3px] border-0 group relative overflow-hidden bg-[#155B39]"
                           href="<?= $cta_with_image['button']['url']; ?>">
                            <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg');"
                            ></div>
                            <span class="font-poppins relative text-white text-[14px] leading-[1.51] font-[600] uppercase"><?= $cta_with_image['button']['title']; ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>