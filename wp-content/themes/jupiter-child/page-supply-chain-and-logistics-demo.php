<?php get_header(); ?>
    <!--Hero image-->
<?php $hero_background_image = get_field('hero_background_image'); ?>
    <div class="hero-image rocket-lazyload" data-bg="<?= $hero_background_image['url']; ?>"></div>
    <!--Hero image-->

    <!--Content-->
    <section class="section section--content">
        <div class="section-container section-container--wider">
            <h1 class="section-h1"><?= get_the_title(); ?></h1>
            <?php $content = get_field('content'); ?>
            <?php if ($content) : ?>
                <?= $content; ?>
            <?php endif; ?>
        </div>
    </section>
    <!--Content-->

    <!--Experience-->
    <section class="section section--experience">
        <div class="section-container section-container--wider">
            <?php $experience_title = get_field('experience_title'); ?>
            <?php if ($experience_title) : ?>
                <div class="section-title">
                    <?= $experience_title; ?>
                </div>
            <?php endif; ?>
            <?php $experience_tiles = get_field('experience_tiles'); ?>
            <?php if ($experience_tiles) : ?>
                <div class="experience-tiles">
                    <?php foreach ($experience_tiles as $experience_tile) : ?>
                        <div class="experience-tile">
                            <div class="experience-tile__icon">
                                <?= file_get_contents($experience_tile['icon']['url']) ?>
                            </div>
                            <div class="experience-tile__title"><?= $experience_tile['title']; ?></div>
                            <div class="experience-tile__text"><?= $experience_tile['text']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Experience-->

    <!--Examples-->
<?php $examples_background_image = get_field('examples_background_image'); ?>
    <section class="examples rocket-lazyload" data-bg="<?= $examples_background_image['url']; ?>">
        <div class="examples-container">
            <?php $examples_title = get_field('examples_title'); ?>
            <?php if ($examples_title) : ?>
                <div class="examples-title"><?= $examples_title; ?></div>
            <?php endif; ?>
            <?php $examples_list = get_field('examples_list'); ?>
            <?php if ($examples_list) : ?>
                <ul class="examples-list">
                    <?php foreach ($examples_list as $examples_list_item) : ?>
                        <li class="examples-list__item">
                            <svg class="examples-list__item-icon" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 1792 1792">
                                <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                            </svg>
                            <span><?= $examples_list_item['example']; ?></span></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
    <!--Examples-->

    <!--Program outline-->
    <section class="section section--program-outline">
        <div class="section-container">
            <?php $program_outline_title = get_field('program_outline_title'); ?>
            <?php if ($program_outline_title) : ?>
                <div class="section-title section-title--center"><?= $program_outline_title; ?></div>
            <?php endif; ?>

            <?php $program_outline_list = get_field('program_outline_list'); ?>
            <?php if ($program_outline_list) : ?>
                <div class="program-outline">
                    <?php foreach ($program_outline_list as $key => $program_outline_list_item) : ?>
                        <div class="program-outline__item">
                            <div class="program-outline__header"
                                 style="background-color: <?= $program_outline_list_item['icon_color']; ?>; border-color: <?= $program_outline_list_item['icon_color']; ?>">
                                 <span class="program-outline__icon">
                                <?= file_get_contents($program_outline_list_item['icon']['url']) ?>
                                </span>
                            </div>
                            <div class="program-outline__body">
                                <div class="program-outline__title"><?= $program_outline_list_item['title']; ?></div>
                                <?= $program_outline_list_item['text']; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Program outline-->

    <!--FAQ-->
    <section class="section section--faq">
        <div class="section-container section-container--slightly-wider">
            <?php $faq_title = get_field('faq_title'); ?>
            <?php if ($faq_title) : ?>
                <div class="section-title"><?= $faq_title; ?></div>
            <?php endif; ?>

            <?php $faq_list = get_field('faq_list'); ?>
            <?php if ($faq_list) : ?>
                <div class="faqs">
                    <?php foreach ($faq_list as $key => $faq_list_item) : ?>
                        <div class="faqs__item faq" x-data="{active: false}"
                             x-init="<?= $key ?> === 0 ? active = true : null">
                            <div class="faq__question" @click="active = !active">
                                <span class="faq__icon" :class="{'active' : active}"></span>
                                <?= $faq_list_item['question']; ?></div>
                            <div class="faq__answer-wrapper" x-show="active"
                                 x-collapse.duration.750ms>
                                <div class="faq__answer"><?= $faq_list_item['answer']; ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--FAQ-->

    <!--How Can Procureability Help-->
    <section class="how-can-procureability-help-section">
        <div class="how-can-procureability-help-container">
            <div class="how-can-procureability-help-wrapper">
                <div class="how-can-procureability-help-column">
                    <div class="how-can-procureability-help-content">
                        <?php $how_can_procureability_help_title = get_field('how_can_procureability_help_title'); ?>
                        <?php if ($how_can_procureability_help_title) : ?>
                            <h2 class="how-can-procureability-help-title"><?= $how_can_procureability_help_title; ?></h2>
                        <?php endif; ?>

                        <?php $how_can_procureability_help_list = get_field('how_can_procureability_help_list'); ?>
                        <?php if ($how_can_procureability_help_list) : ?>
                            <ul class="how-can-procureability-help-list">
                                <?php foreach ($how_can_procureability_help_list as $how_can_procureability_help_list_item) : ?>
                                    <li class="how-can-procureability-help-list-item">
                                        <svg class="how-can-procureability-help-list-item-icon"
                                             style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg"
                                             viewBox="0 0 1792 1792">
                                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                                        </svg>
                                        <?= $how_can_procureability_help_list_item['item']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="how-can-procureability-help-column">
                    <div class="how-can-procureability-help-form">
                        <?php $how_can_procureability_help_form_title = get_field('how_can_procureability_help_form_title'); ?>
                        <?php if ($how_can_procureability_help_form_title) : ?>
                            <div class="how-can-procureability-help-form-title"><?= $how_can_procureability_help_form_title; ?></div>
                        <?php endif; ?>
                        <div class="how-can-procureability-help-form-body">
                            <div class="hs_form_tracked">
                                <?= do_shortcode(get_field('how_can_procureability_help_form')); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--How Can Procureability Help-->

    <!--Studies-->
    <section class="section">
        <div class="section-container">
            <?php $studies_title = get_field('studies_title'); ?>
            <?php if ($studies_title) : ?>
                <h2 class="section-title"><?= $studies_title; ?></h2>
            <?php endif; ?>

            <?php $studies_query = new WP_Query(array('category_name' => 'supply-chain-and-logistics-case-studies', 'posts_per_page' => 3)); ?>

            <?php if ($studies_query->have_posts()) : ?>
                <div class="cards-wrapper">
                    <?php while ($studies_query->have_posts()) : $studies_query->the_post(); ?>
                        <div class="cards-item">
                            <div class="card">
                                <div class="card__image rocket-lazyload"
                                     data-bg="<?= get_the_post_thumbnail_url(null, 'large'); ?>"
                                ></div>
                                <div class="card__body">
                                    <div class="card__text"><?= get_the_excerpt(); ?></div>
                                    <div class="card__button-wrapper">
                                        <a class="card__button" href="<?= the_permalink(); ?>">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Studies-->

    <!--Blog-->
    <section class="section">
        <div class="section-container">
            <?php $blog_title = get_field('blog_title'); ?>
            <?php if ($blog_title) : ?>
                <h2 class="section-title"><?= $blog_title; ?></h2>
            <?php endif; ?>

            <?php $blog_query = new WP_Query(array('category_name' => 'supply-chain-management', 'posts_per_page' => 3)); ?>

            <?php if ($blog_query->have_posts()) : ?>
                <div class="cards-wrapper">
                    <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                        <div class="cards-item">
                            <div class="card">
                                <div class="card__image rocket-lazyload"
                                     data-bg="<?= get_the_post_thumbnail_url(null, 'large'); ?>"
                                ></div>
                                <div class="card__body">
                                    <div class="card__text"><?= get_the_excerpt(); ?></div>
                                    <div class="card__button-wrapper">
                                        <a class="card__button" href="<?= the_permalink(); ?>">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <!--Blog-->

<?php get_footer(); ?>