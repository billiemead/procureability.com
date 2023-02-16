<?php $form_title = get_field('form_title'); ?>
<?php $form_leading = get_field('form_leading'); ?>
<?php $form_form = get_field('form_form'); ?>
<?php $form_image = get_field('form_image'); ?>

<?php if ($form_form) : ?>
    <section class="overflow-hidden" id="subscribe">
        <div class="max-w-[1200px] px-[15px] mx-auto">
            <div class="lg:grid lg:grid-cols-[auto_588px]">
                <?php if ($form_image) : ?>
                    <div class="hidden lg:block relative">
                        <?= wp_get_attachment_image($form_image['id'], 'full', false, array('class' => 'block absolute right-0 top-0 h-full w-auto')); ?>
                    </div>
                <?php endif; ?>
                <div class="py-[50px] lg:pt-[100px] lg:pb-[110px] lg:px-[33px]">
                    <?php if ($form_title | $form_leading) : ?>
                        <div class="max-w-[486px] mx-auto mb-[34px]">
                            <?php if ($form_title) : ?>
                                <div class="text-center mb-[8px]">
                                    <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[32px] lg:text-[38px] leading-[1.3] font-semibold">
                                        <?= $form_title; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <?php if ($form_leading) : ?>
                                <div class="text-center">
                                    <div class="font-poppins text-[16px] leading-[1.6] text-[#5A5A5A]">
                                        <?= $form_leading; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <div class="max-w-[420px] mx-auto">
                        <?= do_shortcode($form_form); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>