<?php
/*
    Template Name: Custom Single Post
    Template Post Type: post
*/

get_header();

while (have_posts()) :
    the_post();

    $seo_title = get_field('custom_seo_title') ?: get_the_title();
    $custom_post_title = get_field('custom_post_title') ?: get_the_title();
    $custom_font_size_for_title = get_field('custom_font_size_for_title');
    $custom_image = get_field('custom_image');
    $image_in_content = get_field('image_in_content');

    //first screen banner
    $first_screen_banner_show = get_field('first_screen_banner_show');
    $first_screen_banner_subtitle = get_field('first_screen_banner_subtitle');
    $first_screen_banner_btn = get_field('first_screen_banner_btn');
    $custom_image_description = get_field('custom_image_description');

    //first screen full size banner
    $first_screen_banner_show_full_screen = get_field('first_screen_banner_show_full_screen');
    $first_screen_banner_full_screen_text = get_field('first_screen_banner_full_screen_text');

    $custom_font_size_for_title = $custom_font_size_for_title ? 'style="font-size: ' . esc_attr($custom_font_size_for_title) . ';"' : '';
    $custom_width = $image_in_content ? 'style="width: 100%;"' : '';
    $custom_image = $custom_image ?: get_the_post_thumbnail_url();
    $banner_style = '';

    if ($first_screen_banner_show) {
        $banner_style = 'single_with_banner';
        ?>

        <h1 class="hidden"><?= $seo_title ?></h1>
        <div class="caption">
            <div class="caption-container">
                <div class="caption__text">
                    <?php if ($first_screen_banner_subtitle) { ?>
                        <div class="caption__text-subtitle">
                            <?php echo $first_screen_banner_subtitle; ?>
                        </div>
                    <?php } ?>

                    <h2 class="title" <?php echo $custom_font_size_for_title; ?>><?php echo $custom_post_title; ?></h2>

                    <?php if (!empty($first_screen_banner_btn['title'])) { ?>
                        <a class="caption__text-btn"
                           href="<?php echo $first_screen_banner_btn['url']; ?>"><?php echo $first_screen_banner_btn['title']; ?></a>
                    <?php } ?>
                </div>
                <div class="caption__image">
                    <img src="<?php echo esc_url($custom_image); ?>" class="max-w-full"
                         alt="<?php echo esc_attr($custom_post_title); ?>">
                    <?php if ($custom_image_description) { ?>
                        <div class="caption__image-descripion"><?php echo $custom_image_description; ?></div>
                    <?php } ?>

                </div>
            </div>
        </div>
    <?php } ?>

    <section class="single-container <?php echo $banner_style; ?>">
        <?php if (!$first_screen_banner_show) { ?>
            <h1 class="title" <?php echo $custom_font_size_for_title; ?>><?php echo $custom_post_title; ?></h1>
        <?php } ?>
        <div class="post">
            <div class="post_content" <?php echo $custom_width; ?>>
                <?php
                if (!$first_screen_banner_show) {
                    if ($image_in_content) {
                        echo '<img src="' . esc_url($custom_image) . '" class="max-w-full" alt="' . esc_attr($custom_post_title) . '">';
                    }
                }
                the_content();
                ?>
            </div>

            <?php if (!$image_in_content) : ?>
                <div class="post_img">
                    <img src="<?php echo esc_url($custom_image); ?>" class="max-w-full"
                         alt="<?php echo esc_attr($custom_post_title); ?>">
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php

    $end_post_cta_block_show = get_field('end_post_cta_block_show');
    if ($end_post_cta_block_show) {

        $end_post_cta_block_image = get_field('end_post_cta_block_image');
        $end_post_cta_block_title = get_field('end_post_cta_block_title');
        $end_post_cta_block_button = get_field('end_post_cta_block_button');

        ?>
        <section class="cta" style='background: #0098ae url("<?php echo $end_post_cta_block_image; ?>") '>
            <?php if ($end_post_cta_block_title) { ?>
                <h2 class="cta__title"> <?php echo $end_post_cta_block_title; ?></h2>
            <?php } ?>
            <?php if ($end_post_cta_block_button['title']) { ?>
                <a class="cta__btn"
                   href="<?php echo $end_post_cta_block_button['url']; ?>"><?php echo $end_post_cta_block_button['title']; ?></a>
            <?php } ?>
        </section>
    <?php } ?>
    <?php
    $full_size_after_content_block = get_field('full_size_after_content_block');

    if ($full_size_after_content_block) {
        echo $full_size_after_content_block;
    }
    ?>

    <?php $ctaType2Show = get_field('show_cta_type_2'); ?>


    <?php if ($ctaType2Show): ?>
        <?php /** YOUTUBE VIDEO */ ?>
        <?php get_template_part('partials/custom-single-post/cta-type-2'); ?>
        <?php /** !YOUTUBE VIDEO */ ?>
    <?php endif; ?>

<?php endwhile;

get_footer();
?>

