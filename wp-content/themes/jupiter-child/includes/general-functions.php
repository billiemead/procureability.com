<?php
if ( ! function_exists( 'mk_get_single_post_prev_next' ) ) {
    function mk_get_single_post_prev_next() {

        if ( ! class_exists( 'Jupiter_Donut' ) ) {
            return;
        }

        global $mk_options;

        if ( is_singular( 'portfolio' ) && 'true' != $mk_options['portfolio_next_prev'] ) {
            return false;
        }

        if ( is_singular( 'post' ) && 'true' != $mk_options['blog_prev_next'] ) {
            return false;
        }

        if ( is_singular( 'product' ) && 'false' == $mk_options['woo_single_prev_next'] ) {
            return false;
        }

        $options = array();

        $options['excluded_terms'] = '';

        $options['type'] = get_post_type();

        switch ( $options['type'] ) {
            case 'post':
                $options['taxonomy']     = 'category';
                $options['in_same_term'] = isset( $mk_options['blog_prev_next_same_category'] ) ? ($mk_options['blog_prev_next_same_category'] === 'true') : false;
                break;
            case 'portfolio':
                $options['taxonomy']     = 'portfolio_category';
                $options['in_same_term'] = isset( $mk_options['portfolio_prev_next_same_category'] ) ? ($mk_options['portfolio_prev_next_same_category'] === 'true') : false;
                break;
            case 'news':
                $options['taxonomy']     = 'news_category';
                $options['in_same_term'] = false;
                break;
            case 'product':
                $options['taxonomy']     = 'product_cat';
                $options['in_same_term'] = isset( $mk_options['woo_prev_next_same_category'] ) ? ($mk_options['woo_prev_next_same_category'] === 'true') : false;
                break;

            default:
                $options['taxonomy']     = 'category';
                $options['in_same_term'] = false;
                break;
        }

        if ( ! is_singular() || is_post_type_hierarchical( $options['type'] ) ) {
            $options['is_hierarchical'] = true;
        }
        if ( $options['type'] === 'topic' || $options['type'] === 'reply' ) {
            $options['is_bbpress'] = true;
        }

        $options = apply_filters( 'mk_post_nav_settings', $options );
        if ( ! empty( $options['is_bbpress'] ) || ! empty( $options['is_hierarchical'] ) ) {
            return;
        }

        $entries['prev'] = get_adjacent_post( $options['in_same_term'], $options['excluded_terms'], true, $options['taxonomy'] );
        $entries['next'] = get_adjacent_post( $options['in_same_term'], $options['excluded_terms'], false, $options['taxonomy'] );

        $entries = apply_filters( 'mk_post_nav_entries', $entries, $options );
        $output  = '';

        foreach ( $entries as $key => $entry ) {
            if ( empty( $entry ) ) {
                continue;
            }

            $post_type = get_post_type( $entry->ID );

            $icon = $post_image = '';
            $link = esc_url( get_permalink( $entry->ID ) );
            /* Added image-size-150x150 image size in functions.php to have exact 150px * 150px thumbnail size */
            $image = get_the_post_thumbnail( $entry->ID, 'image-size-150x150' );
            $class = $image ? 'with-image' : 'without-image';
            $icon  = ($key == 'prev') ? Mk_SVG_Icons::get_svg_icon_by_class_name( false, 'mk-icon-long-arrow-left' ) : Mk_SVG_Icons::get_svg_icon_by_class_name( false, 'mk-icon-long-arrow-right' );
            $output .= '<a class="mk-post-nav mk-post-' . $key . ' ' . $class . '" href="' . $link . '" title="position">';

            $output .= '<span class="pagnav-wrapper">';
            $output .= '<span class="pagenav-top">';

            $icon = '<span class="mk-pavnav-icon">' . $icon . '</span>';

            if ( $image ) {
                $post_image = '<span class="pagenav-image">' . $image . '</span>';
            }

            $output .= $key == 'next' ? $icon . $post_image : $post_image . $icon;
            $output .= '</span>';

            $output .= '<div class="nav-info-container">';
            $output .= '<span class="pagenav-bottom">';

            $output .= '<span class="pagenav-title">' . get_the_title( $entry->ID ) . '</span>';

            if ( $post_type == 'post' ) {
                $cats = get_the_category( $entry->ID );
                foreach ( $cats as $cat ) {
                    $category[] = $cat->name;
                }
                $output .= '<span class="pagenav-category">' . implode( ', ', $category ) . '</span>';
                $category = array();
            } elseif ( $post_type == 'portfolio' ) {
                $terms      = get_the_terms( $entry->ID, 'portfolio_category' );
                $terms_slug = array();
                $terms_name = array();
                if ( is_array( $terms ) ) {
                    foreach ( $terms as $term ) {
                        $terms_name[] = $term->name;
                    }
                }
                $output .= '<span class="pagenav-category">' . implode( ', ', $terms_name ) . '</span>';
                $terms_name = array();
            } elseif ( $post_type == 'product' ) {
                $terms      = get_the_terms( $entry->ID, 'product_cat' );
                $terms_slug = array();
                $terms_name = array();
                if ( is_array( $terms ) ) {
                    foreach ( $terms as $term ) {
                        $terms_name[] = $term->name;
                    }
                }
                $output .= '<span class="pagenav-category">' . implode( ', ', $terms_name ) . '</span>';
                $terms_name = array();
            } elseif ( $post_type == 'news' ) {
                $terms      = get_the_terms( $entry->ID, 'news_category' );
                $terms_slug = array();
                $terms_name = array();
                if ( is_array( $terms ) ) {
                    foreach ( $terms as $term ) {
                        $terms_name[] = $term->name;
                    }
                }
                $output .= '<span class="pagenav-category">' . implode( ', ', $terms_name ) . '</span>';
                $terms_name = array();
            } // End if().
            $output .= '</span>';
            $output .= '</div>';
            $output .= '</span>';
            $output .= '</a>';
        } // End foreach().
        echo $output;
    }

    add_action( 'wp_footer', 'mk_get_single_post_prev_next' );
} // End if().