<?php
/*
    Template Name: Supply chain and logistics
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<?php get_template_part('partials/page', 'hero'); ?>

<?php if (have_posts()) : ?>
    <!--Content-->
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('partials/page', 'content'); ?>
    <?php endwhile; ?>
    <!--Content-->
<?php endif; ?>


<?php $experience_title = get_field('experience_title'); ?>
<?php $experience_tiles = get_field('experience_tiles'); ?>
<?php if ($experience_title || $experience_tiles) : ?>
    <!--Experience-->
    <section class="section section--experience">
        <div class="section-container">
            <?php if ($experience_title) : ?>
                <div class="section-title">
                    <?= $experience_title; ?>
                </div>
            <?php endif; ?>

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
<?php endif; ?>

    <!--Form section-->
<?php get_template_part('partials/page', 'form-section'); ?>
    <!--Form section-->


<?php $program_outline_title = get_field('program_outline_title'); ?>
<?php $program_outline_image = get_field('program_outline_image'); ?>
<?php if ($program_outline_title || $program_outline_image) : ?>
    <!--Program outline-->
    <section class="section section--program-outline">
        <div class="section-container">
            <?php if ($program_outline_title) : ?>
                <div class="section-title section-title--center"><?= $program_outline_title; ?></div>
            <?php endif; ?>
            <?php if ($program_outline_image) : ?>
                <img class="program-outline-image" src="<?= $program_outline_image['url']; ?>"
                     alt="<?= $program_outline_image['alt']; ?>">
            <?php endif; ?>
        </div>
    </section>
    <!--Program outline-->
<?php endif; ?>


<?php $faq_title = get_field('faq_title'); ?>
<?php $faq_list = get_field('faq_list'); ?>
<?php if ($faq_title || $faq_list) : ?>
    <!--FAQ-->
    <section class="section section--faq">
        <div class="section-container section-container--slightly-wider">

            <?php if ($faq_title) : ?>
                <div class="section-title"><?= $faq_title; ?></div>
            <?php endif; ?>


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
<?php endif; ?>

<?php $examples_title = get_field('examples_title'); ?>
<?php $examples_list = get_field('examples_list'); ?>
<?php if ($examples_title || $examples_list) : ?>
    <!--Examples-->
    <?php $examples_background_image = get_field('examples_background_image'); ?>
    <section class="examples rocket-lazyload" data-bg="<?= $examples_background_image['url']; ?>">
        <div class="examples-container">

            <?php if ($examples_title) : ?>
                <div class="examples-title"><?= $examples_title; ?></div>
            <?php endif; ?>

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
<?php endif; ?>

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

    <!--Leadership-->
<?php get_template_part('partials/page', 'leadership'); ?>
    <!--Leadership-->

<?php get_footer(); ?>