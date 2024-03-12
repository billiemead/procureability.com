<?php
/*
    Template Name: Custom Single Post Big Banner
    Template Post Type: post
*/

get_header();

while (have_posts()) :
    the_post();

    $custom_post_title = get_field('custom_title') ?: get_the_title();
    $custom_font_size_for_title = get_field('custom_font_size_for_title');
    $custom_image = get_field('custom_image');
    $custom_button = get_field('custom_button');
    $custom_subtitle = get_field('custom_subtitle');
    $custom_description = get_field('custom_description');
    $person_block = get_field('person_block');

    $custom_font_size_for_title = $custom_font_size_for_title ? 'style="font-size: ' . esc_attr($custom_font_size_for_title) . ';"' : '';
    $custom_image = $custom_image ?: get_the_post_thumbnail_url();

    ?>
    <section class="banner">
        <div class="banner-container">
            <div class="banner__caption">
                <?php if ($person_block) {
                    echo $person_block;
                } ?>
                <?php if ($custom_subtitle) { ?>
                    <h2><?php echo $custom_subtitle; ?></h2>
                <?php } ?>
                <h1 class="title" <?php echo $custom_font_size_for_title; ?>><?php echo $custom_post_title; ?></h1>
                <?php if ($custom_description) { ?>
                    <div class="banner__caption-description"><?php echo $custom_description; ?></div>
                <?php } ?>
                <?php if ($custom_button && ($custom_button['title'] && $custom_button['url'])) { ?>
                    <a href="<?php echo $custom_button['url']; ?>"
                       class="banner__btn custom_btn"><?php echo $custom_button['title']; ?></a>
                <?php } ?>
            </div>
            <div class="banner__image">
                <?php
                echo '<img src="' . esc_url($custom_image) . '" class="max-w-full" alt="' . esc_attr($custom_post_title) . '">';
                ?>
            </div>
        </div>
    </section>

    <section class="single-container theme-content master-holder">
        <div class="post custom-post">
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
        $cta_description = get_field('cta_description');


        ?>
        <section class="cta" style='background: #0098ae url("<?php echo $end_post_cta_block_image['url']; ?>") '>
            <?php if ($end_post_cta_block_title) { ?>
                <h2 class="cta__title"> <?php echo $end_post_cta_block_title; ?></h2>
            <?php } ?>
            <?php if ($cta_description) { ?>
                <div class="cta__description">
                    <?php echo $cta_description; ?>
                </div>
            <?php } ?>
            <?php if ($end_post_cta_block_button['title']) { ?>
                <a class="cta__btn"
                   href="<?php echo $end_post_cta_block_button['url']; ?>"><?php echo $end_post_cta_block_button['title']; ?></a>
            <?php } ?>
        </section>
    <?php } ?>


    <?php
    $get_started_show__hide = get_field('get_started_show__hide');

    if ($get_started_show__hide) {
        $get_started_title = get_field('get_started_title');
        $get_started_text = get_field('get_started_text');
        $get_started_button = get_field('get_started_button');
        $get_started_bg_image = get_field('get_started_bg_image');
        ?>
        <section class="get_started" style='background-image: url("<?php echo $get_started_bg_image; ?>")'>
            <div class="get_started__container">
                <?php if ($get_started_title) { ?>
                    <h2><?php echo $get_started_title ?></h2>
                <?php } ?>

                <?php if ($get_started_text) { ?>
                    <div>
                        <?php echo $get_started_text ?>
                    </div>
                <?php } ?>
                <?php if ($get_started_button['title']) { ?>
                    <a class="btn inline-block pt-[13px] pb-[11px] px-[47px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
                       href="<?php echo $get_started_button['url'] ?>">
                        <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 rocket-lazyload lazyloaded"></div>
                        <span class="relative text-white text-[18px] leading-[1.51] font-[600] uppercase"><?php echo $get_started_button['title']; ?></span>
                    </a>
                <?php } ?>
            </div>
        </section>
        <?php
    }
    ?>


<?php endwhile;

get_footer();
?>

