<a href="<?= get_home_url(); ?>">
    <div :class="{'xl:block': !sticky || isTransparent }" class="hidden">
        <?= wp_get_attachment_image(get_field('header_logo_light', 'option')['id'], 'full', false, array('class' => 'lazy-load-ignore block absolute top-[8px] w-[151px] h-auto')); ?>
    </div>
    <div :class="{'xl:!block' : sticky || !isTransparent}" class="xl:hidden">
        <?= wp_get_attachment_image(get_field('header_logo_dark', 'option')['id'], 'full', false, array('class' => 'lazy-load-ignore block absolute top-[8px] w-[151px] h-auto')); ?>
    </div>
</a>