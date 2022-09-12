<?php

function ukraine_banner() {

    ob_start();

    $fields = get_field('ukraine_banner');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/ukraine-banner' );
    }

    return ob_get_clean();
}

add_shortcode( 'ukraine_banner', 'ukraine_banner' );

function home_about() {

    ob_start();

    $fields = get_field('about');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/home-about' );
    }

    return ob_get_clean();
}

add_shortcode( 'home_about', 'home_about' );

function home_phases() {

    ob_start();

    $fields = get_field('phases');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/phases' );
    }

    return ob_get_clean();
}

add_shortcode( 'home_phases', 'home_phases' );

function image_plus_text($atts) {

    $atts = shortcode_atts( [
        'acf_field' => 'analytics',
        'reverse' => false,
        'text_color' => false,
        'bg' => 'transparent'
    ], $atts );

    ob_start();

    $fields = get_field($atts['acf_field']);

    if(!empty($fields)) {
        if(!empty($fields['btn_txt']) && !empty($fields['btn_link'])) {
            $fields['btn']['text'] = $fields['btn_txt'];
            $fields['btn']['link'] = $fields['btn_link'];
        }

        set_query_var('fields', $fields);

        get_template_part( 'partials/image-plus-text', null, [
            'reverse' => $atts['reverse'],
            'color' => $atts['text_color'],
            'bg' => $atts['bg']
        ] );
    }

    return ob_get_clean();
}

add_shortcode( 'image_plus_text', 'image_plus_text' );

function home_services() {

    ob_start();

    $fields = get_field('services');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/services' );
    }

    return ob_get_clean();
}

add_shortcode( 'home_services', 'home_services' );

function home_fingertips_services() {

    ob_start();

    $fields = get_field('fingertips_services');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/fingertips_services' );
    }

    return ob_get_clean();
}

add_shortcode( 'home_fingertips_services', 'home_fingertips_services' );

function home_get_going() {

    ob_start();

    $fields = get_field('get_going');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/home-get-going' );
    }

    return ob_get_clean();
}

add_shortcode( 'home_get_going', 'home_get_going' );

function home_hero() {

    ob_start();

    $fields = get_field('hero');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/home-hero' );
    }

    get_template_part( 'partials/home-hero' );

    return ob_get_clean();
}

add_shortcode( 'home_hero', 'home_hero' );

function testimonials() {

    ob_start();

    $fields = get_field('testimonials');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/testimonials' );
    }

    get_template_part( 'partials/testimonials' );

    return ob_get_clean();
}

add_shortcode( 'testimonials', 'testimonials' );

function grid_posts() {

    ob_start();

    $fields = get_field('posts');

    if(!empty($fields)) {
        set_query_var('fields', $fields);

        get_template_part( 'partials/grid_posts' );
    }

    get_template_part( 'partials/grid_posts' );

    return ob_get_clean();
}

add_shortcode( 'grid_posts', 'grid_posts' );