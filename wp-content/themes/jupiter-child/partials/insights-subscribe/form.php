<?php $form_title = get_field('form_title'); ?>
<?php $form_leading = get_field('form_leading'); ?>
<?php $form_form = get_field('form_form'); ?>
<?php $form_text_under_the_form = get_field('form_text_under_the_form'); ?>
<?php $form_image = get_field('form_image'); ?>

<?php if ($form_form) : ?>
    <section class="overflow-hidden" id="subscribe">
        <div class="max-w-[1200px] px-[15px] mx-auto">
            <div class="lg:grid lg:gap-[100px] lg:grid-cols-[auto_500px] lg:min-h-[600px]">
                <?php if ($form_image) : ?>
                    <div class="hidden lg:block relative">
                        <?= wp_get_attachment_image($form_image['id'], 'full', false, array('class' => 'block absolute right-0 top-0 h-full w-auto', 'title' => get_the_title($form_image['id']))); ?>
                    </div>
                <?php endif; ?>
                <div class="py-[50px] lg:py-[64px]">
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
                    <div class="max-w-[420px] lg:max-w-none mx-auto">
                        <div><?= do_shortcode($form_form); ?></div>
                        <?php if ($form_text_under_the_form) : ?>
                            <div class="mt-[16px]">
                                <div class="[&_p]:mb-0 [&_p]:!font-poppins [&_p]:text-[14px] [&_p]:text-[#686868] [&_p]:leading-normal [&_a]:text-[#155B39] [&_a]:font-medium [&_a:hover]:text-[#0098AE] [&_a]:!underline [&_a]:!decoration-dotted [&_a]:underline-offset-4 [&_a:hover]:decoration-transparent"><?= $form_text_under_the_form; ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>