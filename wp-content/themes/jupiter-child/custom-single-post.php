<?php
/*
    Template Name: Custom Single Post
    Template Post Type: post
*/

get_header();

while (have_posts()) :
    the_post();

    // Get post meta data with fallbacks
    $seo_title = esc_html(get_field('custom_seo_title')) ?: get_the_title();
    $custom_post_title = esc_html(get_field('custom_post_title')) ?: get_the_title();
    $custom_font_size_for_title = esc_attr(get_field('custom_font_size_for_title'));
    $custom_image = esc_url(get_field('custom_image') ?: get_the_post_thumbnail_url());
    $image_in_content = get_field('image_in_content');

    // First screen banner
    $first_screen_banner_show = get_field('first_screen_banner_show');
    $first_screen_banner_subtitle = esc_html(get_field('first_screen_banner_subtitle'));
    $first_screen_banner_btn = get_field('first_screen_banner_btn');
    $custom_image_description = esc_html(get_field('custom_image_description'));

    // First screen full size banner
    $first_screen_banner_show_full_screen = get_field('first_screen_banner_show_full_screen');
    $first_screen_banner_full_screen_text = esc_html(get_field('first_screen_banner_full_screen_text'));

    // Determine banner style
    $banner_style = $first_screen_banner_show ? 'single_with_banner' : '';

    ?>

        <div class="caption">
            <h1 class="hidden"><?= $seo_title ?></h1>
            <div class="caption-container">
                <div class="caption__text">
                    <?php if ($first_screen_banner_subtitle) : ?>
                        <div class="caption__text-subtitle"><?= $first_screen_banner_subtitle ?></div>
                    <?php endif; ?>
                    <h2 class="title" style="<?= $custom_font_size_for_title ? 'font-size: ' . $custom_font_size_for_title . ';' : '' ?>">
                        <?= $custom_post_title ?>
                    </h2>
                    <?php if (!empty($first_screen_banner_btn['title'])) : ?>
                        <a class="caption__text-btn" href="<?= esc_url($first_screen_banner_btn['url']) ?>">
                            <?= $first_screen_banner_btn['title'] ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="caption__image">
                    <img src="<?= $custom_image ?>" class="max-w-full" alt="<?= $custom_post_title ?>">
                    <?php if ($custom_image_description) : ?>
                        <div class="caption__image-description"><?= $custom_image_description ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    <section class="single-container <?= $banner_style ?>">
        <?php if (!$first_screen_banner_show) : ?>
            <h1 class="title" style="<?= $custom_font_size_for_title ? 'font-size: ' . $custom_font_size_for_title . ';' : '' ?>"><?= $custom_post_title ?></h1>
        <?php endif; ?>
        <div class="post">
            <div class="post_content" <?= $image_in_content ? 'style="width: 100%;"' : '' ?>>
                <?php if (!$image_in_content) : ?>
                    <img src="<?= $custom_image ?>" class="max-w-full" alt="<?= $custom_post_title ?>">
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
            <?php if (!$image_in_content) : ?>
                <div class="post_img">
                    <img src="<?= $custom_image ?>" class="max-w-full" alt="<?= $custom_post_title ?>">
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php

    // End post CTA block
    $end_post_cta_block_show = get_field('end_post_cta_block_show');

    if ($end_post_cta_block_show) :
        $end_post_cta_block_image = esc_url(get_field('end_post_cta_block_image'));
        $end_post_cta_block_title = esc_html(get_field('end_post_cta_block_title'));
        $end_post_cta_block_button = get_field('end_post_cta_block_button');
        ?>

        <section class="cta" style="background: #0098ae url('<?= $end_post_cta_block_image ?>')">
            <?php if ($end_post_cta_block_title) : ?>
                <h2 class="cta__title"><?= $end_post_cta_block_title ?></h2>
            <?php endif; ?>
            <?php if (!empty($end_post_cta_block_button['title'])) : ?>
                <a class="cta__btn" href="<?= esc_url($end_post_cta_block_button['url']) ?>">
                    <?= $end_post_cta_block_button['title'] ?>
                </a>
            <?php endif; ?>
        </section>

    <?php endif;

    // Full size after content block
    $full_size_after_content_block = get_field('full_size_after_content_block');

    if ($full_size_after_content_block) {
        echo $full_size_after_content_block;
    }

endwhile;

get_footer();
?>
