<?php $hero_team_background_image = get_field('hero_team_background_image'); ?>
<?php if ($hero_team_background_image) : ?>
    <div class="rocket-lazyload bg-cover bg-no-repeat"
         data-bg="<?= $hero_team_background_image['url']; ?>">
        <div class="pt-[16.87%]"></div>
    </div>
<?php endif; ?>