<?php
/**
 * The Header
 *
 * This is the template that displays all of the <head> section and everything up until
 * <div id="mk-theme-container">.
 *
 * @package Jupiter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebPage">
<?php do_action('mk_theme_before_head'); ?>
<head>
    <?php do_action('mk_theme_after_head_opening'); ?>
    <?php wp_head(); ?>
    <?php do_action('mk_theme_before_head_closing'); ?>
</head>

<body <?php body_class(mk_get_body_class(global_get_post_id())); ?> <?php echo get_schema_markup('body'); // WPCS: XSS OK. ?>
        data-adminbar="<?php echo esc_attr(is_admin_bar_showing()); ?>">
<?php
if (function_exists('wp_body_open')) {
    wp_body_open();
}

do_action('mk_theme_after_body_opening');

// Hook when you need to add content right after body opening tag. to be used in child themes or customisations.
do_action('theme_after_body_tag_start');
?>

<!-- Target for scroll anchors to achieve native browser bahaviour + possible enhancements like smooth scrolling -->
<div id="top-of-page"></div>

<div id="mk-boxed-layout">

    <div id="mk-theme-container" <?php echo is_header_transparent('class="trans-header"'); ?>>

        <header
                x-data="header"
                x-init="scrollHandler"
                class="z-[200] relative"
                :class="{'is-sticky': sticky, 'no-transparency': !isTransparent}"
                @scroll.window="scrollHandler"
        >
            <div class="h-[76px] hidden" :class="{'xl:block': !isTransparent}"></div>
            <div class="xl:!fixed top-0 left-0 w-full h-[76px] relative"
            >
                <div :class="{'xl:!opacity-100' : sticky || !isTransparent }"
                     class="xl:opacity-0 transition-opacity ease-in-out duration-200 absolute inset-0 bg-white border-b border-solid border-[rgba(97,99,107,0.2)] shadow-[0_4px_8px_rgba(0,0,0,.15)] xl:shadow-none"
                >
                </div>
                <div class="relative max-w-[1440px] mx-auto box-border h-full px-[20px]">
                    <div class="flex justify-between h-full">
                        <div>
                            <?php get_template_part('partials/header/logo'); ?>
                        </div>
                        <div class="hidden xl:block">
                            <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container_class' => 'desktop-nav')); ?>
                        </div>
                        <div class="xl:hidden">
                            <?php get_template_part('partials/header/mobile-search-toggler'); ?>
                        </div>
                        <div class="xl:hidden absolute top-[50%] right-[20px] translate-y-[-50%]">
                            <?php get_template_part('partials/header/hamburger'); ?>
                        </div>
                        <div class="!hidden xl:!flex mr-[36px] items-center">
                            <?php get_template_part('partials/header/desktop-search-toggler'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_template_part('partials/header/mobile-search'); ?>
            <?php get_template_part('partials/header/mobile-navigation'); ?>
        </header>