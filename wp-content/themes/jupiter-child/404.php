<?php
/*
** 404.php
** mk_build_main_wrapper : builds the main divisions that contains the content. Located in framework/helpers/global.php
** mk_get_view gets the parts of the pages, modules and components. Function located in framework/helpers/global.php
*/

get_header();


mk_build_main_wrapper( mk_get_view('templates', 'wp-404', true) ); ?>


<!-- <div class="not-found-wrapper">
    <span class="not-found-title"><?php esc_html_e( 'WHOOPS!', 'mk_framework' ); ?></span>
    <span class="not-found-subtitle"><?php esc_html_e( '404', 'mk_framework' ); ?></span>
    <section class="widget widget_search"><p><?php esc_html_e( 'Sorry you did not find what you are looking for. Please try searching below.', 'mk_framework' ); ?></p>
        <form class="mk-searchform" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
            <input type="text" class="text-input" placeholder="<?php esc_html_e( 'Search site', 'mk_framework' ); ?>" value="" name="s" id="s" />
            <i class="mk-searchform-icon"><?php Mk_SVG_Icons::get_svg_icon_by_class_name(true,'mk-icon-search',16); ?><input value="" type="submit" class="search-button" type="submit" /></i>
        </form>
    </section>
    <div class="clearboth"></div>
</div> -->


<?php get_footer(); ?>
