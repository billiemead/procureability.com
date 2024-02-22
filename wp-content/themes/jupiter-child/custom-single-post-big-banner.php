<?php
/*
    Template Name: Custom Single Post Big Banner
    Template Post Type: post
*/

get_header();

while (have_posts()) :
    the_post();

    $custom_post_title = get_field('custom_post_title') ?: get_the_title();
    $custom_font_size_for_title = get_field('custom_font_size_for_title');
    $custom_image = get_field('custom_image');
    $image_in_content = get_field('image_in_content');
    $custom_button = get_field('custom_button');

    $custom_font_size_for_title = $custom_font_size_for_title ? 'style="font-size: ' . esc_attr($custom_font_size_for_title) . ';"' : '';
    $custom_image = $custom_image ?: get_the_post_thumbnail_url();
    ?>
    <section class="banner">
        <div class="banner-container">
            <div class="banner__caption">
                <h1 class="title" <?php echo $custom_font_size_for_title; ?>><?php echo $custom_post_title; ?></h1>
                <?php if ($custom_button['title']): ?>
                    <a href="<?php echo $custom_button['url']; ?>"
                       class="banner__btn custom_btn"><?php echo $custom_button['title']; ?></a>
                <?php endif; ?>
            </div>
            <?php
            if ($image_in_content) {
                echo '<img src="' . esc_url($custom_image) . '" class="max-w-full" alt="' . esc_attr($custom_post_title) . '">';
            }
            ?>
        </div>
    </section>

    <section class="single-container">
        <div class="post">
            <div class="post_content">
                <?php
                the_content();
                ?>
            </div>
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


<?php endwhile;

get_footer();
?>

