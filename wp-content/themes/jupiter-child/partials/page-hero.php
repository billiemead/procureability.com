<?php $hero_background_image = get_field('hero_background_image'); ?>
<?php if ($hero_background_image) : ?>
    <div class="h-[76px] bg-center bg-cover relative md:h-[240px] rocket-lazyload"
         data-bg="<?= $hero_background_image['url']; ?>"></div>
<?php endif; ?>