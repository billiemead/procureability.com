<?php
global $mk_options;

$mk_footer_class = $show_footer = $disable_mobile = $footer_status = '';

$post_id = global_get_post_id();
if ($post_id) {
    $show_footer = get_post_meta($post_id, '_template', true);
    $cases = array('no-footer', 'no-header-footer', 'no-header-title-footer', 'no-footer-title');
    $footer_status = in_array($show_footer, $cases);
}

if ($mk_options['disable_footer'] == 'false' || ($footer_status)) {
    $mk_footer_class .= ' mk-footer-disable';
}

if ($mk_options['footer_type'] == '2') {
    $mk_footer_class .= ' mk-footer-unfold';
}


$boxed_footer = (isset($mk_options['boxed_footer']) && !empty($mk_options['boxed_footer'])) ? $mk_options['boxed_footer'] : 'true';
$footer_grid_status = ($boxed_footer == 'true') ? ' mk-grid' : ' fullwidth-footer';
$disable_mobile = ($mk_options['footer_disable_mobile'] == 'true') ? $mk_footer_class .= ' disable-on-mobile' : ' ';

?>

<?php $footer_logo = get_field('footer_logo', 'options'); ?>
<?php $footer_text = get_field('footer_text', 'options'); ?>
<?php $footer_button = get_field('footer_button', 'options'); ?>
<?php $footer_bottom_text = get_field('footer_bottom_text', 'options'); ?>
<?php $socials = get_field('socials', 'options'); ?>

<footer class="bg-[#393A40]">
    <div class="pt-[33px] pb-[76px] ">
        <div class="box-border max-w-[1230px] px-[15px] mx-auto">
            <div class="xl:grid xl:grid-cols-[265px_1fr] xl:gap-[86px]">
                <div>
                    <?php if ($footer_logo) : ?>
                        <div class="mb-[32px] [&_img]:max-w-full [&_img]:h-auto [&_img]:block">
                            <a class="block [&_img]:max-w-[223px] [&_img]:h-auto" href="<?= get_home_url(); ?>">
                                <?= wp_get_attachment_image($footer_logo['id'], 'full'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <?php if ($footer_text) : ?>
                        <div class="[&_p]:!font-poppins [&_p]:text-white [&_p]:text-[14px] [&_p]:font-[300] [&_p]:leading-[1.7]">
                            <?= $footer_text; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($footer_button) : ?>
                        <div class="mt-[36px]">
                            <a class="inline-block py-[8px] px-[28px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
                               href="<?= $footer_button['url']; ?>"
                               target="<?= $footer_button['target'] ?: '_self'; ?>"
                            >
                                <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                     style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
                                ></div>
                                <span class="relative text-white text-[16px] leading-[1.51] font-[700] tracking-[0.1em] uppercase"><?= $footer_button['title']; ?></span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="pt-[50px] lg:pt-[23px] overflow-hidden">
                    <div class="flex flex-wrap justify-between -mr-[30px]">
                        <?php if (is_active_sidebar('footer_menu_area_1')) : ?>
                            <div class="box-border mb-[50px] xl:mb-0 lg:w-1/2 xl:w-auto last:mb-0 pr-[30px]">
                                <?php dynamic_sidebar('footer_menu_area_1'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (is_active_sidebar('footer_menu_area_2')) : ?>
                            <div class="box-border mb-[50px] xl:mb-0 lg:w-1/2 xl:w-auto last:mb-0 pr-[30px]">
                                <?php dynamic_sidebar('footer_menu_area_2'); ?>
                            </div>
                        <?php endif; ?>
                        <?php if (is_active_sidebar('footer_menu_area_3')) : ?>
                            <div class="box-border mb-[50px] xl:mb-0 lg:w-1/2 xl:w-auto last:mb-0 pr-[30px]">
                                <?php dynamic_sidebar('footer_menu_area_3'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-[20px] border-t border-t-[rgba(97,99,107,0.2)] border-solid">
        <div class="max-w-[1200px] px-[15px] mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <?php if ($footer_bottom_text) : ?>
                    <div class="[&_p]:!m-0 [&_p]:!font-poppins [&_p]:text-[13px] [&_p]:leading-[1.23] [&_p]:text-white [&_a]:text-white [&_a]:font-[600] [&_a]:hover:text-white [&_a]:border-b [&_a]:border-solid [&_a]:border-[rgba(255,255,255,0)] [&_a]:hover:border-[rgba(255,255,255,1)] [&_a]:transition-all">
                        <?= $footer_bottom_text; ?>
                    </div>
                <?php endif; ?>
                <?php if ($socials) : ?>
                    <div class="mt-[30px] lg:mt-0">
                        <ul class="!m-0 list-none flex">
                            <?php foreach ($socials as $social) : ?>
                                <li class="!ml-0 !my-0 !mr-[24px] !last:mr-0">
                                    <a target="<?= $social['link']['target'] ?: '_self'; ?>"
                                       class="block [&_svg]:block text-white hover:text-black [&_svg]:transition-all"
                                       href="<?= $social['link']['url']; ?>">
                                        <?= file_get_contents(str_replace(get_site_url() . '/', get_home_path(), $social['icon']['url'])); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
</div>
<?php
global $is_header_shortcode_added;

/**
 * After new changed, it will return null if there is no header shortcode
 * added. Need to check and save it as array if it's null to avoid error.
 *
 * @since 6.0.3
 * @see /components/shortcodes/mk_header/config.php
 */
if (!is_array($is_header_shortcode_added)) {
    $is_header_shortcode_added = array();
}

if ($mk_options['seondary_header_for_all'] === 'true' || get_header_style() === '3' || in_array('3', $is_header_shortcode_added, true)) {
    mk_get_header_view(
        'holders', 'secondary-menu', [
            'header_shortcode_style' => $is_header_shortcode_added,
        ]
    );
}
?>
</div>

<div class="bottom-corner-btns js-bottom-corner-btns">
    <?php
    if ('false' !== $mk_options['go_to_top']) {
        mk_get_view('footer', 'navigate-top');
    }

    if ('false' !== $mk_options['disable_quick_contact']) {
        mk_get_view('footer', 'quick-contact');
    }

    do_action('add_to_cart_responsive');
    ?>
</div>


<?php
if ($mk_options['header_search_location'] === 'fullscreen_search') {
    mk_get_header_view('global', 'full-screen-search');
}
?>

<?php wp_footer(); ?>

<?php do_action('mk_theme_before_body_closing'); ?>

</body>
</html>
