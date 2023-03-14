<?php $hero_background_image = get_field('hero_background_image'); ?>
<?php if ($hero_background_image) : ?>
    <div class="hero-image rocket-lazyload" data-bg="<?= $hero_background_image['url']; ?>"></div>
<?php endif; ?>