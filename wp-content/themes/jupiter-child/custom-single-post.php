<?php
/*
    Template Name: Custom Single Post
    Template Post Type: post
*/

get_header();

while (have_posts()) :
    the_post();

    $custom_post_title = get_field('custom_post_title') ?: get_the_title();
    $custom_font_size_for_title = get_field('custom_font_size_for_title');
    $custom_image = get_field('custom_image');
    $image_in_content = get_field('image_in_content');

    $custom_font_size_for_title = $custom_font_size_for_title ? 'style="font-size: ' . esc_attr($custom_font_size_for_title) . ';"' : '';
    $custom_width = $image_in_content ? 'style="width: 100%;"' : '';
    $custom_image = $custom_image ?: get_the_post_thumbnail_url();
    ?>

    <section class="single-container">
        <h1 class="title" <?php echo $custom_font_size_for_title; ?>><?php echo $custom_post_title; ?></h1>
        <div class="post">
            <div class="post_content" <?php echo $custom_width; ?>>
                <?php
                if ($image_in_content) {
                    echo '<img src="' . esc_url($custom_image) . '" class="max-w-full" alt="' . esc_attr($custom_post_title) . '">';
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

<?php endwhile;

get_footer();
?>

