<?php global $mk_options; ?>

<?php $footer_logo = get_field('footer_logo', 'options'); ?>
<?php $footer_text = get_field('footer_text', 'options'); ?>
<?php $footer_button = get_field('footer_button', 'options'); ?>
<?php $footer_bottom_text = get_field('footer_bottom_text', 'options'); ?>
<?php $socials = get_field('socials', 'options'); ?>
<?php $footer_privacy_policy_message = get_field('footer_privacy_policy_message', 'options'); ?>

<footer class="bg-[#393A40]">
    <div class="pt-[33px] pb-[76px] ">
        <div class="box-border max-w-[1230px] px-[15px] mx-auto">
            <div class="lg:grid lg:grid-cols-[265px_1fr] lg:gap-[86px]">
                <div>
                    <?php if ($footer_logo) : ?>
                        <div class="mb-[32px]">
                            <?php get_template_part('partials/footer/logo', null, array('footer_logo' => $footer_logo)); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($footer_text) : ?>
                        <div class="[&_p]:!font-poppins [&_p]:text-white [&_p]:text-[14px] [&_p]:font-[300] [&_p]:leading-[1.7]">
                            <?= $footer_text; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($footer_button) : ?>
                        <div class="mt-[36px]">
                            <?php get_template_part('partials/footer/button', null, array('footer_button' => $footer_button)); ?>
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
    <?php if ($footer_privacy_policy_message) : ?>
        <div class="py-[16px] bg-[#61636B]">
            <div class="text-center px-[15px]">
                <div class="[&_p]:!font-poppins [&_p]:text-[14px] [&_p]:leading-normal [&_p]:text-white [&_p]:!m-0 [&_a]:text-white [&_a]:!underline [&_a]:!decoration-dotted [&_a]:underline-offset-[5px] [&_a]:hover:decoration-transparent [&_a]:hover:!text-white">
                    <?= $footer_privacy_policy_message; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="py-[20px] border-t border-t-[rgba(97,99,107,0.2)] border-solid">
        <div class="max-w-[1200px] px-[15px] mx-auto">
            <div class="lg:flex lg:items-center lg:justify-between">
                <?php if ($footer_bottom_text) : ?>
                    <div class="font-poppins text-[13px] leading-[1.23] text-white [&_p]:inline [&_p]:!m-0 [&_p]:font-poppins [&_p]:text-[13px] [&_p]:leading-[1.23] [&_p]:text-white [&_a]:text-white [&_a]:font-[600] [&_a:hover]:text-white [&_a:hover]:underline">
                        <span>&copy;</span>
                        <span><?= date('Y'); ?></span>
                        <?= $footer_bottom_text; ?>
                    </div>
                <?php endif; ?>
                <?php if ($socials) : ?>
                    <div class="mt-[30px] lg:mt-0">
                        <?php get_template_part('partials/footer/socials', null, array('socials' => $socials)); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>
</div>
</div>


<script>
    window.hotjarStatus = false;
    window.addEventListener('mousemove', startIntercom, {passive: true});
    window.addEventListener('touchstart', startIntercom, {passive: true});
    window.addEventListener('scroll', startIntercom, {passive: true});

    function startIntercom() {
        if (window.hotjarStatus == true) return;


        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {hjid: 3325935, hjsv: 6};
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');

        window.hotjarStatus = true;
    }
</script>

<?php get_template_part('partials/footer/scroll-to-top'); ?>

<?php get_template_part('partials/footer/desktop-search'); ?>

<?php wp_footer(); ?>

<?php do_action('mk_theme_before_body_closing'); ?>

</body>
</html>
