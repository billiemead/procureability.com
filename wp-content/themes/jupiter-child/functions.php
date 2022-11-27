<?php

function asset_hash($file)
{

    if (file_exists('.' . $file)) {
        $hash = hash('crc32', filemtime('.' . $file));
        return ($file . '?' . $hash);
    }

    return $file;
}


include_once "shortcodes.php";

function procureability_enqueue_styles()
{
    /*Fancybox.js*/
    wp_enqueue_script('fancybox', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), false, true);

    wp_register_style('main-jupiter-child-css', asset_hash('/wp-content/themes/jupiter-child/dist/style.css'), array(), null);
    wp_enqueue_style('main-jupiter-child-css');

    wp_register_style('main-jupiter-child-css-custom-pages', asset_hash('/wp-content/themes/jupiter-child/assets/sass/custom-style/custom-page.css'), array(), null);
    wp_enqueue_style('main-jupiter-child-css-custom-pages');

    /*
    wp_register_style('main-jupiter-child-css-print', '/wp-content/themes/jupiter-child/dist/main-print.css', array(), false, 'print');
    wp_enqueue_style('main-jupiter-child-css-print');
    */

    wp_register_script('main-jupiter-child-js', asset_hash('/wp-content/themes/jupiter-child/dist/index.js'), array(), null, true);
    wp_enqueue_script('main-jupiter-child-js');

    /*Animate.css*/
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css');

    /*WOW.js*/
    wp_enqueue_script('wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), false, true);

    /*Slick Carousel*/
    /*wp_enqueue_script('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), false, true);*/
    /*wp_enqueue_style('slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');*/

    /*Tyne Slider*/
    /*wp_enqueue_script('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', array(), false, true);*/
    /*wp_enqueue_style('tiny-slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css');*/

    /*Swiper.js*/
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');

    /*Fancybox*/
    wp_enqueue_style('fancybox3', get_stylesheet_directory_uri() . '/assets/sass/jquery.fancybox.min.css');

    /*PAGES*/

    /*Digital Services*/
    wp_enqueue_script('digital-services', '/wp-content/themes/jupiter-child/dist/digital-services.js', array('theme-scripts', 'wow', 'swiper'), false, true);

    /*Digital Services*/
    wp_enqueue_script('about', '/wp-content/themes/jupiter-child/dist/about.js', array('theme-scripts'), false, true);

    /*Blocks*/
    /*Leaders*/

    wp_enqueue_script('leaders', '/wp-content/themes/jupiter-child/dist/leaders.js', array('theme-scripts'), false, true);

    /*Front page*/
    wp_enqueue_script('front-page', '/wp-content/themes/jupiter-child/dist/front-page.js', array('theme-scripts'), filemtime(get_stylesheet_directory() . '/dist/front-page.js'), true);
}

add_action('wp_enqueue_scripts', 'procureability_enqueue_styles');

add_action('init', 'add_excerpts_to_pages');
function add_excerpts_to_pages()
{
    add_post_type_support('page', 'excerpt');
}

//Page Slug Body Class
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');


add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));

/* Snippet seeks to remove the remaining warnings when validating HTML on w3c.org:
   Warning: The type attribute is unnecessary for JavaScript resources.
   Warning: The type attribute for the style element is not needed and should be omitted.
*/

add_action('template_redirect', function () {
    ob_start(function ($buffer) {
        $buffer = str_replace(array(' type="text/css"', " type='text/css'"), '', $buffer);
        $buffer = str_replace(array(' type="text/javascript"', " type='text/javascript'"), '', $buffer);
        return $buffer;
    });
});


//dirty fix
add_action('wp_head', 'add_inline_script');
function add_inline_script()
{
    echo '<script>';
    echo 'var mk_show_background_video  = false;';
    echo '</script>';
}


// ====================================================
// Prevent editor from stripping iframe code - bmead - 9/7/2022
// ====================================================

function mytheme_tinymce_config($init)
{
    $valid_iframe = 'iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]';
    if (isset($init['extended_valid_elements'])) {
        $init['extended_valid_elements'] .= ',' . $valid_iframe;
    } else {
        $init['extended_valid_elements'] = $valid_iframe;
    }
    return $init;
}

add_filter('tiny_mce_before_init', 'mytheme_tinymce_config');


// ====================================================
// SVG Support - bmead - 9/8/2022
// ====================================================

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    return [
        'ext' => $filetype['ext'],
        'type' => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}

add_action('admin_head', 'fix_svg');


function pdf_embed_shortcode($attrs, $content)
{
    $pdfPath = $content;
    if (wp_is_mobile()) {
        $htmlStuff =
            '<div style="text-align:center;"><p id="mobilefallback">This browser does not support native PDF embeds or you are on a mobile device. Please <a href="' . $pdfPath . '" target="_blank">download</a> the PDF instead.</p>
                <p class="pdfDownload"><a class="btn btn-primary btn-md" href="' . $pdfPath . '" target="_blank">Download</a></p></div>';
    } else {
        $htmlStuff =
            '<div id="pdfViewer">
                        <object class="pdfObject" data="' . $pdfPath . '" type="application/pdf" width="100%" height="100%">
                                <iframe src="' . $pdfPath . '" width="100%" height="100%" style="border: none;">
                                        This browser does not support PDF embeds.
                                        Please <a href="' . $pdfPath . '" target="_blank">Download PDF</a> instead.
                                </iframe>
                        </object>
                        <p class="pdfDownload"><a class="btn btn-primary btn-md" href="' . $pdfPath . '" target="_blank">Download</a></p>
                </div>';
    }

    return $htmlStuff;
}

add_shortcode('pdf', 'pdf_embed_shortcode');

// minor css and you got yourself a nice little PDF with fallback and a neat lil' download button
// example use: [pdf]/wp-content/uploads/2018/01/just_another.pdf[/pdf]

// ====================================================
// Function for post duplication - bmead - 9/8/2022
// ====================================================

function rd_duplicate_post_as_draft()
{
    global $wpdb;
    if (!(isset($_GET['post']) || isset($_POST['post']) || (isset($_REQUEST['action']) && 'rd_duplicate_post_as_draft' == $_REQUEST['action']))) {
        wp_die('No post to duplicate has been supplied!');
    }

    /*
    * Nonce verification
    */
    if (!isset($_GET['duplicate_nonce']) || !wp_verify_nonce($_GET['duplicate_nonce'], basename(__FILE__)))
        return;

    /*
    * get the original post id
    */
    $post_id = (isset($_GET['post']) ? absint($_GET['post']) : absint($_POST['post']));
    /*
    * and all the original post data then
    */
    $post = get_post($post_id);

    /*
    * if you don't want current user to be the new post author,
    * then change next couple of lines to this: $new_post_author = $post->post_author;
    */
    $current_user = wp_get_current_user();
    $new_post_author = $current_user->ID;

    /*
    * if post data exists, create the post duplicate
    */
    if (isset($post) && $post != null) {

        /*
        * new post data array
        */
        $args = array(
            'comment_status' => $post->comment_status,
            'ping_status' => $post->ping_status,
            'post_author' => $new_post_author,
            'post_content' => $post->post_content,
            'post_excerpt' => $post->post_excerpt,
            'post_name' => $post->post_name,
            'post_parent' => $post->post_parent,
            'post_password' => $post->post_password,
            'post_status' => 'draft',
            'post_title' => $post->post_title,
            'post_type' => $post->post_type,
            'to_ping' => $post->to_ping,
            'menu_order' => $post->menu_order
        );

        /*
        * insert the post by wp_insert_post() function
        */
        $new_post_id = wp_insert_post($args);

        /*
        * get all current post terms ad set them to the new post draft
        */
        $taxonomies = get_object_taxonomies($post->post_type); // returns array of taxonomy names for post type, ex array("category", "post_tag");
        foreach ($taxonomies as $taxonomy) {
            $post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
            wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
        }

        /*
        * duplicate all post meta just in two SQL queries
        */
        $post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
        if (count($post_meta_infos) != 0) {
            $sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
            foreach ($post_meta_infos as $meta_info) {
                $meta_key = $meta_info->meta_key;
                if ($meta_key == '_wp_old_slug') continue;
                $meta_value = addslashes($meta_info->meta_value);
                $sql_query_sel[] = "SELECT $new_post_id, '$meta_key', '$meta_value'";
            }
            $sql_query .= implode(" UNION ALL ", $sql_query_sel);
            $wpdb->query($sql_query);
        }

        /*
        * finally, redirect to the edit post screen for the new draft
        */
        wp_redirect(admin_url('post.php?action=edit&post=' . $new_post_id));
        exit;
    } else {
        wp_die('Post creation failed, could not find original post: ' . $post_id);
    }
}

add_action('admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft');

function rd_duplicate_post_link($actions, $post)
{
    if (current_user_can('edit_posts')) {
        $actions['duplicate'] = '<a href="' . wp_nonce_url('admin.php?action=rd_duplicate_post_as_draft&post=' . $post->ID, basename(__FILE__), 'duplicate_nonce') . '" title="Duplicate this item" rel="permalink">Duplicate</a>';
    }
    return $actions;
}

add_filter('post_row_actions', 'rd_duplicate_post_link', 10, 2);
add_filter('page_row_actions', 'rd_duplicate_post_link', 10, 2);

function add_site_url_to_clients_menu_item($item_output, $item, $depth, $args)
{

    if ($item->title === 'Clients') {
        return str_replace("#ourclients", home_url() . '/#ourclients', $item_output);
    }

    return $item_output;
}

function add_nav_class($classes, $item, $args)
{

    if ('primary-menu' === $args->theme_location) {
        if ($item->title === 'Contact') {
            $classes[] = "highlight-on-scroll";
        }
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_nav_class', 10, 4);

add_filter('walker_nav_menu_start_el', 'add_site_url_to_clients_menu_item', 10, 4);

if (function_exists('acf_add_options_page')) {
    acf_add_options_page();
}

function widgets_init()
{

    register_sidebar(array(
        'name' => 'Footer Menu Area First',
        'id' => 'footer_menu_area_1',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="footer-navigation">',
        'after_widget' => "</div>",
        'before_sidebar' => '',
        'after_sidebar' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer Menu Area Second',
        'id' => 'footer_menu_area_2',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="footer-navigation">',
        'after_widget' => "</div>",
        'before_sidebar' => '',
        'after_sidebar' => '',
    ));

    register_sidebar(array(
        'name' => 'Footer Menu Area Third',
        'id' => 'footer_menu_area_3',
        'description' => '',
        'class' => '',
        'before_widget' => '<div id="%1$s" class="footer-navigation">',
        'after_widget' => "</div>",
        'before_sidebar' => '',
        'after_sidebar' => '',
    ));

}

add_action('widgets_init', 'widgets_init');


class Custom_Menu_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = array())
    {

        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);

        // Default class.
        $classes = array('sub-menu');

        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args An object of `wp_nav_menu()` arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 4.8.0
         *
         */
        $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';
        $alpine = ($depth < 1) ? ' x-show="active" x-collapse' : null;
        $button = ($depth < 1) ? '<button x-on:click="active = !active" type="button" class="toggle-btn" :class="active && \'active\'"></button>' : null;

        $output .= "{$button}{$n}{$indent}<ul$class_names $alpine>{$n}";


    }

    function end_lvl(&$output, $depth = 0, $args = array())
    {
//        $indent = str_repeat("\t", $depth);
        $output .= "</ul>\n";
    }

    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        // Restores the more descriptive, specific name for use within this method.
        $menu_item = $data_object;

        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = ($depth) ? str_repeat($t, $depth) : '';

        $classes = empty($menu_item->classes) ? array() : (array)$menu_item->classes;
        $classes[] = 'menu-item-' . $menu_item->ID;


        /**
         * Filters the arguments for a single nav menu item.
         *
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param WP_Post $menu_item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 4.4.0
         *
         */
        $args = apply_filters('nav_menu_item_args', $args, $menu_item, $depth);

        /**
         * Filters the CSS classes applied to a menu item's list item element.
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu item's `<li>` element.
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 3.0.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $menu_item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        /**
         * Filters the ID attribute applied to a menu item's list item element.
         *
         * @param string $menu_item_id The ID attribute applied to the menu item's `<li>` element.
         * @param WP_Post $menu_item The current menu item.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 3.0.1
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';
        $alpine = $this->has_children ? 'x-data="{active: false}"' : '';

        $output .= $indent . '<li' . $id . $class_names . $alpine . '>';

        $atts = array();
        $atts['title'] = !empty($menu_item->attr_title) ? $menu_item->attr_title : '';
        $atts['target'] = !empty($menu_item->target) ? $menu_item->target : '';
        if ('_blank' === $menu_item->target && empty($menu_item->xfn)) {
            $atts['rel'] = 'noopener';
        } else {
            $atts['rel'] = $menu_item->xfn;
        }
        $atts['href'] = !empty($menu_item->url) ? $menu_item->url : '';
        $atts['aria-current'] = $menu_item->current ? 'page' : '';

        /**
         * Filters the HTML attributes applied to a menu item's anchor element.
         *
         * @param array $atts {
         *     The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
         *
         * @type string $title Title attribute.
         * @type string $target Target attribute.
         * @type string $rel The rel attribute.
         * @type string $href The href attribute.
         * @type string $aria-current The aria-current attribute.
         * }
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 3.6.0
         * @since 4.1.0 The `$depth` parameter was added.
         *
         */
        $atts = apply_filters('nav_menu_link_attributes', $atts, $menu_item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (is_scalar($value) && '' !== $value && false !== $value) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        /** This filter is documented in wp-includes/post-template.php */
        $title = apply_filters('the_title', $menu_item->title, $menu_item->ID);

        /**
         * Filters a menu item's title.
         *
         * @param string $title The menu item's title.
         * @param WP_Post $menu_item The current menu item object.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @param int $depth Depth of menu item. Used for padding.
         * @since 4.4.0
         *
         */
        $title = apply_filters('nav_menu_item_title', $title, $menu_item, $args, $depth);

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        /**
         * Filters a menu item's starting output.
         *
         * The menu item's starting output only includes `$args->before`, the opening `<a>`,
         * the menu item's title, the closing `</a>`, and `$args->after`. Currently, there is
         * no filter for modifying the opening and closing `<li>` for a menu item.
         *
         * @param string $item_output The menu item's starting HTML output.
         * @param WP_Post $menu_item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @param stdClass $args An object of wp_nav_menu() arguments.
         * @since 3.0.0
         *
         */
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args);
    }

}