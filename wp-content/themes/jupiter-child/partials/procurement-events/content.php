<div class="flex mb-[50px] max-w-[960px] mx-auto procurement-events__wrapper px-[15px] sm:px-0">
    <div class="flex-initial w-[100%] sm:w-[66.66666667%] px-[15px] box-border procurement-events__column">
        <h1
                class="mt-[50px]
                        text-[#ef932f]
                        text-[25px]
                        font-medium"
        ><?= get_the_title() ?></h1>

        <div class="text-[18px] mb-[25px]"><?= get_the_content() ?></div>

        <?php /** SUBSCRIBE BUTTON */ ?>
        <?php get_template_part('partials/procurement-events/subscribe-button'); ?>
        <?php /** !SUBSCRIBE BUTTON */ ?>

        <?php /** EVENTS */ ?>
        <?php get_template_part('partials/procurement-events/events'); ?>
        <?php /** !EVENTS */ ?>

        <?php /** VIRTUAL EVENTS */ ?>
        <?php get_template_part('partials/procurement-events/virtual-events'); ?>
        <?php /** !VIRTUAL EVENTS */ ?>

        <?php /** ADDITIONAL EVENTS */ ?>
        <?php get_template_part('partials/procurement-events/additional-events'); ?>
        <?php /** !ADDITIONAL EVENTS */ ?>

        <?php /** SUBSCRIBE BUTTON */ ?>
        <?php get_template_part('partials/procurement-events/subscribe-button'); ?>
        <?php /** !SUBSCRIBE BUTTON */ ?>

        <?php /** CONTACT BUTTON */ ?>
        <?php get_template_part('partials/procurement-events/contact-button'); ?>
        <?php /** !CONTACT BUTTON */ ?>
    </div>

    <div class="flex-initial w-[100%] sm:w-[33.33333333%] px-[15px] relative box-border procurement-events__column">
        <?php /** SIDEBAR */ ?>
        <?php get_template_part('partials/procurement-events/sidebar'); ?>
        <?php /** !SIDEBAR */ ?>
    </div>
</div>