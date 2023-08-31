<a class="block w-[180px]" href="<?= get_home_url(); ?>">
    <div data-x-bind:class="{'xl:block': !sticky && isTransparent }" class="hidden">
        <?= wp_get_attachment_image(get_field('header_logo_light_tagline', 'option')['id'], 'full', false, array('class' => 'lazy-load-ignore block absolute top-[5px] w-[180px] h-auto')); ?>
    </div>
    <div data-x-bind:class="{'xl:!block' : sticky && isTransparent}" class="xl:hidden">
        <?= wp_get_attachment_image(get_field('header_logo_dark', 'option')['id'], 'full', false, array('class' => 'lazy-load-ignore block absolute top-[5px] w-[180px] h-auto')); ?>
    </div>
    <div data-x-bind:class="{'xl:!block' : !sticky && !isTransparent || sticky && !isTransparent}" class="xl:hidden">
        <?= wp_get_attachment_image(get_field('header_logo_dark_tagline', 'option')['id'], 'full', false, array('class' => 'lazy-load-ignore block absolute top-[5px] w-[180px] h-auto')); ?>
    </div>
</a>