<?php

/*
    Template Name: New pages
    Template Post Type: page
*/

get_header();

$banner__code = get_field('banner_code');

$h1_title = get_field('h1_title');
$h2_desc = get_field('h2_desc');

$text_info = get_field('text_info');

$image_link = get_field('image_link');
$image_alt = get_field('image_alt');
$graphic_image = get_field('graphic_image');

$leadership_shortcode = get_field('leadership_shortcode');


/**
 *
 * Form info
 *
 */

$how_can_form_title = get_field('how_can_form_title');
$form_title = get_field('form_title');
$form_shortcode = get_field('form_shortcode');
?>

<section class="custom-page__body">

    <div class="custom-page__container">

        <div class="custom-page__banner">
            <?php echo do_shortcode($banner__code); ?>
        </div>

        <div class="custom-page__body-wrapper">

            <div class="custom-page__content">

                <h1><?php echo $h1_title; ?></h1>

                <h2><?php echo $h2_desc; ?></h2>
                
                <div class="custom-page__content-information">
                    
                    <?php echo $text_info; ?>

                    <a href="<?php echo $image_link; ?>"><img src="<?php echo $graphic_image; ?>" alt="<?php echo $image_alt; ?>"></a>
                    
                </div>

            </div>

        </div>

        <div>

            <?php if ( get_field( 'show_help_section' ) ): ?>

                <div class="how-can-section">

                    <div class="custom-page__body-wrapper">

                        <div class="row v-center">

                            <div class="col-6 how-can-form__left">
                                <h3><?php echo $how_can_form_title; ?></h3>
                                <div id="list-7" class="mk-list-styles  mk-align-none  jupiter-donut- jupiter-donut-clear" data-charcode="mk-icon-check" data-family="">

                                    <ul style="color: #fff !important; font-size: 18px; margin-right: 50px;">

                                        <?php
                                        if( have_rows('how_can_form_items') ):
                                            while( have_rows('how_can_form_items') ) : the_row();
                                                $sub_value = get_sub_field('test'); ?>
                                                <li><svg class="mk-svg-icon" data-name="mk-icon-check" data-cacheid="icon-62d92cd803e8f" style=" height:16px; width: 16px; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792"><path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path></svg>
                                                    <?php echo $sub_value; ?>
                                                </li>
                                            <?php endwhile;
                                        else :
                                        endif;
                                        ?>

                                    </ul>

                                </div>
                            </div>

                            <div class="col-6 how-can-form__right">
                                <h3><?php echo $form_title; ?></h3>
                                <?php echo do_shortcode($form_shortcode); ?>
<!--                                --><?php //echo do_shortcode('[hubspot type=form portal=7215743 id=293e1388-5855-48f4-ac51-25c6dc425e43]'); ?><!--?-->
                            </div>

                        </div>

                    </div>

                </div>

            <?php endif; // end of if field_name logic ?>

        </div>

        <div>

            <?php if ( get_field( 'leadership_section' ) ): ?>

                <div class="custom-page__leadership-section">

                    <div class="custom-page__body-wrapper">

                        <h3 style="font-size: 31px;color: #f7941f;text-align: left;font-weight:700;font-style:normal" class="vc_custom_heading wpb_animate_when_almost_visible wpb_fadeInUp fadeInUp vc_custom_1567796018869 wpb_start_animation animated">LEADERSHIP</h3>

                        <?php echo do_shortcode($leadership_shortcode); ?>

                    </div>

                </div>

            <?php endif; // end of if field_name logic ?>

        </div>

    </div>

</section>

<?php get_footer(); ?>
