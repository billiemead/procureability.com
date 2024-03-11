<?php

function custom_dequeue_unwanted_styles() {

    if (is_page_template('whitepapers.php')) {
        wp_dequeue_style('mkhb-row');
        wp_dequeue_style('imagelinks_imagelinks');
        wp_dequeue_style('bdp-public-style');
        wp_dequeue_style('bdp-public-style');
        wp_dequeue_style('esg-plugin-settings');
        wp_dequeue_style('bsf-Defaults');
        wp_dequeue_style('mkhb-render');
        wp_dequeue_style('mkhb-column');
        wp_dequeue_style('dflip-icons-style');
        wp_dequeue_style('jupiter-donut-shortcodes');
        wp_dequeue_style('swiper');
        wp_dequeue_style('dflip-style');
        wp_dequeue_style('slick-style');
        wp_dequeue_style('fancybox3');
        wp_dequeue_style('front-css');
        wp_dequeue_style('svc-front-css');
        wp_dequeue_style('animate');
        wp_dequeue_style('mk-style');
        wp_dequeue_style('tp-fontello');
        wp_dequeue_style('rs-plugin-settings');
        wp_dequeue_style('rs-plugin-settings-css');
        wp_dequeue_style('svc-fontawosem-css');
        wp_dequeue_style('mkhb-row-css');
        wp_dequeue_style('main-jupiter-child-css-custom-pages');

        wp_dequeue_style('scap.flashblock');
        wp_dequeue_style('scap.player');
        wp_dequeue_style('js_composer_front');
        wp_dequeue_style('theme-options');
        wp_dequeue_style('rs-plugin-settings');

        wp_deregister_style('rs-plugin-settings');
    }
}

add_action('wp_print_styles', 'custom_dequeue_unwanted_styles', 999);


function custom_dequeue_footer_styles() {

    if (is_page_template('whitepapers.php')) {

        wp_dequeue_script( 'swiper' );
        wp_deregister_script( 'swiper' );
        wp_dequeue_script( 'leaders' );
        wp_deregister_script( 'leaders' );
        wp_dequeue_script( 'front-page' );
        wp_deregister_script( 'front-page' );
        wp_dequeue_script( 'mk-webfontloader' );
        wp_deregister_script( 'mk-webfontloader' );
        wp_dequeue_script( 'tp-tools' );
        wp_deregister_script( 'tp-tools' );
        wp_dequeue_script( 'mkhb-render' );
        wp_deregister_script( 'mkhb-render' );
        wp_dequeue_script( 'revmin' );
        wp_deregister_script( 'revmin' );
        wp_dequeue_script( 'fancybox' );
        wp_deregister_script( 'fancybox' );
        wp_dequeue_script( 'wow' );
        wp_deregister_script( 'wow' );
        wp_dequeue_script( 'about' );
        wp_deregister_script( 'about' );
        wp_dequeue_script( 'mkhb-column' );
        wp_deregister_script( 'mkhb-column' );
        wp_dequeue_script( 'dflip-script' );
        wp_deregister_script( 'dflip-script' );
        wp_dequeue_script( 'jupiter-donut-shortcodes' );
        wp_deregister_script( 'jupiter-donut-shortcodes' );


        wp_deregister_style('rs-plugin-settings');
        wp_dequeue_style('rs-plugin-settings');
    }
}

add_action('wp_enqueue_scripts', 'custom_dequeue_footer_styles', 999);


function dequeue_unwanted_styles()
{

    if (is_page_template('custom-single-post.php') || is_page_template('custom-single-post-big-banner.php')) {
        wp_dequeue_style('mkhb-row');
        wp_dequeue_style('imagelinks_imagelinks');
        wp_dequeue_style('bdp-public-style');
        wp_dequeue_style('bdp-public-style');
        wp_dequeue_style('bsf-Defaults');
        wp_dequeue_style('mkhb-render');
        wp_dequeue_style('mkhb-column');
        wp_dequeue_style('dflip-icons-style');
        wp_dequeue_style('jupiter-donut-shortcodes');
        wp_dequeue_style('swiper');
        wp_dequeue_style('dflip-style');
        wp_dequeue_style('slick-style');
        wp_dequeue_style('fancybox3');
        wp_dequeue_style('front-css');
        wp_dequeue_style('svc-front-css');
        wp_dequeue_style('animate');
        wp_dequeue_style('mk-style');
        wp_dequeue_style('tp-fontello');
        wp_dequeue_style('rs-plugin-settings');
        wp_dequeue_style('rs-plugin-settings-css');
        wp_dequeue_style('svc-fontawosem-css');
        wp_dequeue_style('mkhb-row-css');
        wp_dequeue_style('main-jupiter-child-css-custom-pages');
    }

    if (is_page_template('custom-single-post-big-banner.php')) {
        wp_dequeue_style('scap.flashblock');
        wp_dequeue_style('scap.player');
    }
}

add_action('wp_print_styles', 'dequeue_unwanted_styles');


function dequeue_footer_styles()
{

    if (is_page_template('custom-single-post.php') || is_page_template('custom-single-post-big-banner.php')) {

        wp_dequeue_script('swiper');
        wp_deregister_script('swiper');
        wp_dequeue_script('leaders');
        wp_deregister_script('leaders');
        wp_dequeue_script('front-page');
        wp_deregister_script('front-page');
        wp_dequeue_script('mk-webfontloader');
        wp_deregister_script('mk-webfontloader');
        wp_dequeue_script('mkhb-render');
        wp_deregister_script('mkhb-render');
        wp_dequeue_script('revmin');
        wp_deregister_script('revmin');
        wp_dequeue_script('fancybox');
        wp_deregister_script('fancybox');
        wp_dequeue_script('wow');
        wp_deregister_script('wow');
        wp_dequeue_script('about');
        wp_deregister_script('about');
        wp_dequeue_script('mkhb-column');
        wp_deregister_script('mkhb-column');
        wp_dequeue_script('dflip-script');
        wp_deregister_script('dflip-script');
        wp_dequeue_script('jupiter-donut-shortcodes');
        wp_deregister_script('jupiter-donut-shortcodes');

    }
    if (is_page_template('custom-single-post-big-banner.php')) {

        wp_dequeue_script('tp-tools');
        wp_deregister_script('tp-tools');
        wp_dequeue_script('popup-maker-site');
        wp_deregister_script('popup-maker-site');
        wp_dequeue_script('theme-scripts');
        wp_deregister_script('theme-scripts');
        wp_dequeue_script('scap.soundmanager2');
        wp_deregister_script('scap.soundmanager2');


        wp_register_style('js_composer_front', asset_hash('/wp-content/plugins/js_composer_theme/assets/css/js_composer.min.css?ver=6.9.0'), array(), null);
        wp_enqueue_style('js_composer_front');
    }
}

add_action('wp_enqueue_scripts', 'dequeue_footer_styles', 999);

