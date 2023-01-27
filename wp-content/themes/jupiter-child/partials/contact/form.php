<?php $cta_first_title = get_field('cta_first_title'); ?>
<?php $cta_first_text = get_field('cta_first_text'); ?>
<?php $cta_first_form_form = get_field('cta_first_form_form'); ?>

<?php if ($cta_first_form_form) : ?>
    <section class="pb-[75px]">
        <div class="max-w-[1200px] mx-auto">
            <div class="p-[30px] sm:p-[60px] rounded-[3px] bg-white shadow-[0px_3px_8px_rgba(220,228,232,0.6)]">
                <div class="grid lg:grid-cols-2 gap-[80px]">
                    <div>
                        <?php if ($cta_first_title) : ?>
                            <div class="mb-[20px]">
                                <div class="font-poppins text-[#0098AE] text-[30px] leading-[1.5] font-semibold tracking-[0.06em] uppercase">
                                    <?= $cta_first_title; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div>
                            <select id="getValueFromHere" name="simpsons" id="">
                                <option value="Bart">Bart</option>
                                <option value="Lisa">Lisa</option>
                                <option value="Homer">Homer</option>
                            </select>
                        </div>
                        <div class="pb-[12px] border-b border-[#0098AE] border-solid mb-[28px]">
                            <div class="font-poppins text-[34px] leading-[1.5] text-[#393A40] font-medium pr-[24px] relative">
                                <span>Select a service</span>
                                <svg class="absolute right-0 top-[21px]" width="16" height="9" viewBox="0 0 16 9"
                                     fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 0.5H16L8 8.5L0 0.5Z" fill="#61636B"/>
                                </svg>
                            </div>
                        </div>
                        <?php if ($cta_first_text) : ?>
                            <div>
                                <div class="[&_p]:font-poppins [&_p]:text-[18px] [&_p]:leading-[1.6] [&_p]:text-[#5A5A5A] [&_p]:mb-0 opacity-80">
                                    <?= $cta_first_text; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?= do_shortcode($cta_first_form_form); ?>
                    </div>
                </div>
            </div>
        </div>
    </section
<?php endif; ?>
