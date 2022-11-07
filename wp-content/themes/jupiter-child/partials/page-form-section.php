<?php $form_section_form_shortcode = get_field('form_section_form_shortcode'); ?>
<?php if ($form_section_form_shortcode) : ?>
    <!--Form section-->
    <section class="form-section">
        <div class="form-section-container">
            <div class="form-section-wrapper">
                <div class="form-section-column">
                    <div class="form-section-content">
                        <?php $form_section_title = get_field('form_section_title'); ?>
                        <?php if ($form_section_title) : ?>
                            <h2 class="form-section-title"><?= $form_section_title; ?></h2>
                        <?php endif; ?>

                        <?php $form_section_list = get_field('form_section_list'); ?>
                        <?php if ($form_section_list) : ?>
                            <ul class="form-section-list">
                                <?php foreach ($form_section_list as $form_section_list_item) : ?>
                                    <li class="form-section-list-item">
                                        <svg class="form-section-list-item-icon"
                                             style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 1792 1792">
                                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                                        </svg>
                                        <?= $form_section_list_item['form_section_list_item']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-section-column">
                    <div class="form-section-form">
                        <?php $form_section_form_title = get_field('form_section_form_title'); ?>
                        <?php if ($form_section_form_title) : ?>
                            <div class="form-section-form-title"><?= $form_section_form_title; ?></div>
                        <?php endif; ?>
                        <div class="form-section-form-body">
                            <div class="hs_form_tracked">
                                <?= do_shortcode($form_section_form_shortcode); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Form section-->
<?php endif; ?>
