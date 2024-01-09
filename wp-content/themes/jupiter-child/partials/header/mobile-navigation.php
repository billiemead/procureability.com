<div data-x-show="mobileMenuActive" data-x-collapse class="xl:hidden" style="display: none;">
    <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'container_class' => 'mobile-nav', 'walker' => new Custom_Menu_Walker())); ?>
</div>