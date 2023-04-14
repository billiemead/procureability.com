<?php $post_hero_text = get_field('post_hero_text'); ?>

<?php if ($post_hero_text) : ?>
    <section class="py-[40px] md:pt-[100px] md:pb-[110px] bg-no-repeat bg-[left_calc(50%+115px)_bottom_-335px] md:bg-[left_calc(50%+475px)_bottom_-225px]"
             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/culture/branding-star-culture.svg')">
        <div class="max-w-[767px] mx-auto px-[34px]">
            <div class="text-center [&_p]:!font-poppins [&_p]:text-[18px] md:[&_p]:text-[20px] [&_p]:leading-[1.7] [&_p]:text-[#393A40] [&_p]:not(:last-child):mb-[24px]">
                <?= $post_hero_text; ?>
            </div>
        </div>
    </section>
<?php endif; ?>