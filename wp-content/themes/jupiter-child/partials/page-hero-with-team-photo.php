<?php $hero_team_background_image = get_field('hero_team_background_image'); ?>
<?php if ($hero_team_background_image) : ?>
    <div class="h-[76px] md:h-[240px] rocket-lazyload bg-cover bg-[center_top_13%] bg-no-repeat"
         data-bg="<?= $hero_team_background_image['url']; ?>"></div>
<?php endif; ?>