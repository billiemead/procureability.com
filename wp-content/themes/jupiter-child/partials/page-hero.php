<?php $hero_background_image = get_field('hero_background_image'); ?>
<?php $hero_remove_shadow = get_field('hero_remove_shadow'); ?>

<?php if ($hero_background_image) : ?>
    <div class="h-[76px] bg-center bg-cover relative md:h-[240px] rocket-lazyload"
         data-bg="<?= $hero_background_image['url']; ?>">
        <?php if (!$hero_remove_shadow) : ?>
            <div class="absolute inset-0 bg-[rgba(0,0,0,.3)]"></div>
            <div class="absolute inset-0"
                 style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/supply-chain-and-logistics/bg-cover2.webp')"></div>
        <?php endif; ?>
    </div>
<?php endif; ?>