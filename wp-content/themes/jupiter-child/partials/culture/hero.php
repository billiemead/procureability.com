<?php $hero_title = get_field('hero_title'); ?>
<?php $hero_image = get_field('hero_image'); ?>

<section class="h-[400px] md:h-[600px] py-[64px] box-border bg-[center_top] bg-no-repeat bg-cover"
         data-no-lazy="1"
         style="background-image: url('<?= $hero_image['url']; ?>')">
    <div class="h-full flex flex-col">
        <div class="mt-auto text-center px-[34px]">
            <?php if ($hero_title) : ?>
                <div class="font-poppins brand-light-text-gradient text-transparent bg-clip-text font-semibold text-[32px] md:text-[46px] leading-[1.35]">
                    <?= $hero_title; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>