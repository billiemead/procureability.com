<?php $cta_first_title = get_field('cta_first_title'); ?>
<?php $cta_first_text = get_field('cta_first_text'); ?>
<?php $cta_first_form_form = get_field('cta_first_form_form'); ?>
<?php $cta_first_form_select = get_field('cta_first_form_select'); ?>
<?php $cta_first_background_image = get_field('cta_first_background_image'); ?>

<?php if ($cta_first_form_form) : ?>
    <section class="py-[70px] bg-[#0098AE] bg-center bg-no-repeat bg-cover"
             style="background-image: url('<?= $cta_first_background_image['url']; ?>')">
        <div class="max-w-[1200px] px-[15px] mx-auto">
            <div class="p-[30px] sm:p-[60px] rounded-[3px] bg-white">
                <div class="grid lg:grid-cols-2 gap-[30px] lg:gap-[80px]">
                    <div>
                        <?php if ($cta_first_title) : ?>
                            <div class="mb-[20px]">
                                <div class="font-poppins text-[#0098AE] text-[30px] leading-[1.5] font-semibold tracking-[0.06em] uppercase">
                                    <?= $cta_first_title; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($cta_first_form_select) : ?>
                            <div class="pb-[12px] border-b border-[#0098AE] border-solid mb-[28px] relative max-w-[500px]"
                                 data-x-data="{ open: false, value: null }" data-x-cloak
                                 data-x-on:click.outside="open = false">
                                <button class="bg-transparent p-0 border-none relative w-full pr-[24px] text-left"
                                        data-x-on:click="open = !open">
                                    <span class="font-poppins text-[27px] md:text-[34px] leading-[1.5] text-[#393A40] font-medium"
                                          data-x-text="value ? value : '<?= $cta_first_form_select['placeholder']; ?>'"></span>
                                    <svg class="absolute right-0 top-[21px]" width="16" height="9" viewBox="0 0 16 9"
                                         fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0.5H16L8 8.5L0 0.5Z" fill="#61636B"/>
                                    </svg>
                                </button>
                                <ul class="absolute mx-0 mb-0 py-2 mt-1 w-full bg-white list-none z-50 shadow-lg rounded-lg border"
                                    data-x-show="open" data-x-transition.opacity>
                                    <?php if ($cta_first_form_select['placeholder']) : ?>
                                        <li class="m-0">
                                            <button class="block w-full py-2 px-4 bg-transparent border-none text-left hover:bg-gray-100"
                                                    data-x-on:click="open = false; value = null; $dispatch('hubspot-service', { message: '' })"
                                            ><span class="font-poppins"><?= $cta_first_form_select['placeholder']; ?></span></button>
                                        </li>
                                    <?php endif; ?>
                                    <?php foreach ($cta_first_form_select['services'] as $service) : ?>
                                        <li class="m-0">
                                            <button
                                                    class="block w-full py-2 px-4 bg-transparent border-none text-left hover:bg-gray-100"
                                                    data-x-on:click="open = false; value = '<?= $service['service']; ?>'; $dispatch('hubspot-service', { message: '<?= $service['service']; ?>' })">
                                                <span class="font-poppins"><?= $service['service']; ?></span>
                                            </button>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <?php if ($cta_first_text) : ?>
                            <div>
                                <div class="[&_p]:font-poppins [&_p]:text-[18px] [&_p]:leading-[1.6] [&_p]:text-[#5A5A5A] [&_p]:mb-0 opacity-80">
                                    <?= $cta_first_text; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="[&_.hbspt-form_form_.hs-submit]:!mt-0">
                        <?= do_shortcode($cta_first_form_form); ?>
                    </div>
                </div>
            </div>
        </div>
    </section
<?php endif; ?>
