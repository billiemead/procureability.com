<?php $whitepapers = get_field('whitepapers'); ?>
<?php $cta_between_whitepapers_title = get_field('cta_between_whitepapers_title'); ?>
<?php $cta_between_whitepapers_button = get_field('cta_between_whitepapers_button'); ?>
<?php global $post; ?>


<section class="py-[50px] md:py-[100px]">
    <div class="max-w-[968px] mx-auto px-[15px]">
        <?php if ($whitepapers): ?>
            <ul class="m-0 p-0 list-none">
                <?php foreach ($whitepapers as $key => $post): setup_postdata($post); ?>
                    <li class="py-[30px] px-[15px] m-0 border-b border-solid border-[#CCCCCC] last:border-none last:pb-0 first:pt-0">
                        <div class="grid md:grid-cols-[45%_auto] gap-[30px]">
                            <div>
                                <a class="block relative group" href="<?= the_permalink(); ?>">
                                    <?= get_the_post_thumbnail($post, 'full', array('class' => 'block max-w-full h-auto')); ?>
                                    <div class="transition-opacity duration-200 group-hover:opacity-100 flex items-center justify-center absolute inset-0 bg-[rgba(64,64,64,.5)] opacity-0">
                                        <span class="text-[25px] text-white">Click Here</span>
                                    </div>
                                </a>

                            </div>
                            <div>
                                <div class="mb-[16px]">
                                    <a href="<?= the_permalink(); ?>" class="font-poppins text-[#393A40] text-[20px] leading-[1.3] font-semibold"><?= the_title(); ?></a>
                                </div>
                                <div class="mb-[35px]">
                                    <div class="font-poppins text-[16px] leading-[1.6] text-[#393A40]"><?= the_excerpt(); ?></div>
                                </div>
                                <div>
                                    <a class="font-poppins hover:decoration-transparent transition-colors text-[#155B39] text-[16px] font-semibold leading-normal uppercase tracking-[1.6px] !underline underline-offset-[7px] !decoration-dotted"
                                       href="<?= the_permalink(); ?>">read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php if ($key === 1) : ?>
                        <?php if ($cta_between_whitepapers_title && $cta_between_whitepapers_button) : ?>
                            <li class="py-[30px] px-[15px] m-0 border-b border-solid border-[#CCCCCC] last:border-none last:pb-0 first:pt-">
                                <div class="py-[30px] px-[15px] md:p-[50px] bg-[#FAFAFB] border border-solid border-[#0098AE] shadow-[0px_16px_50px_0px_rgba(19,131,156,0.10)] bg-no-repeat bg-right-top"
                                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/whitepapers-cta-between-whitepapers-bg.png');">
                                    <div class="max-w-[608px] mx-auto">
                                        <div class="text-center">
                                            <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[20px] md:text-[26px] leading-[1.4] font-semibold"><?= $cta_between_whitepapers_title; ?></div>
                                        </div>
                                        <div class="mt-[24px] text-center">
                                            <a target="<?= $cta_between_whitepapers_button['target'] ?: '_self' ?>"
                                               class="inline-block py-[12px] px-[32px] text-[#005E6B]  bg-[#155B39] rounded-[3px] group relative"
                                               href="<?= $cta_between_whitepapers_button['url']; ?>">
                                                <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                                                ></div>
                                                <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase relative"><?= $cta_between_whitepapers_button['title']; ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
