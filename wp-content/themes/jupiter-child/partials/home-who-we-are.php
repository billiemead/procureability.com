<?php $frontpage_who_we_are_title = get_field('frontpage_who_we_are_title'); ?>
<?php $frontpage_who_we_are_text = get_field('frontpage_who_we_are_text'); ?>
<?php $frontpage_who_we_are_button_text = get_field('frontpage_who_we_are_button_text'); ?>
<?php $frontpage_who_we_are_button_link = get_field('frontpage_who_we_are_button_link'); ?>

<section
        class="pt-[48px] md:pt-[0px] bg-[#F2F6F6] [&_*]:box-border relative bg-no-repeat bg-[length:657px_auto] md:bg-[length:865px_auto] xl:bg-[length:1020px_auto] bg-[position:calc(50%-40px)_bottom] md:bg-[position:calc(50%+180px)_bottom] xl:bg-[position:calc(50%+250px_bottom]"
        style="background-image: url('/wp-content/themes/jupiter-child/assets/img/pages/homepage/who-we-are-bg.png')">

    <div class="max-w-[310px] md:max-w-[637px] xl:max-w-[1200px] mx-auto relative">
        <div class="md:pt-[56px] md:pb-[68px] xl:pt-[60px] pb-[30px] xl:pb-[70px] md:max-w-[363px] xl:max-w-[550px] relative">
            <div class="text-center md:!text-left mb-[16px] md:mb-[12px]">
                <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] md:text-[36px] leading-[1.4] md:leading-[1.5] font-[600]"><?= $frontpage_who_we_are_title; ?>
                </div>
            </div>
            <div class="text-center md:!text-left [&_p]:!font-poppins [&_p]:text-[14px] md:[&_p]:text-[16px] [&_p]:leading-[1.7] mb-[32px] xl:mb-[43px]">
                <?= apply_filters('the_content', $frontpage_who_we_are_text); ?>
            </div>
            <div class="text-center md:!text-left xl:!text-left">
                <a class="inline-block py-[12px] px-[65px]  bg-[#3BA17C] rounded-[3px] group relative"
                   href="<?= $frontpage_who_we_are_button_link['url']; ?>">
                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg')"
                    ></div>
                    <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase"><?= $frontpage_who_we_are_button_text; ?></span>
                </a>
            </div>
        </div>

        <img class="block relative md:!absolute max-w-[240px] md:max-w-[340px] xl:max-w-[390px] mx-auto md:bottom-0 md:right-[-45px] xl:right-[96px]"
             src="/wp-content/themes/jupiter-child/assets/img/pages/homepage/happy-successful-manager-holding-glasses%202.png"
             alt="<?= $frontpage_who_we_are_title; ?>">
    </div>
</section>