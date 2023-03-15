<?php $hero_team_background_image = get_field('hero_team_background_image'); ?>
<?php if ($hero_team_background_image) : ?>
    <div class="bg-cover h-[76px] md:h-[240px] rocket-lazyload bg-no-repeat bg-[center_top_25%]"
         data-bg="<?= $hero_team_background_image['url']; ?>">
    </div>
<?php endif; ?>
