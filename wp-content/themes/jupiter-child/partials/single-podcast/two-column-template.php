<section class="pt-[40px] pb-[85px] lg:pt-[60px]">
    <div class="max-w-[1000px] px-[15px] mx-auto overflow-hidden">
        <h1 class="font-poppins text-[36px] text-[#404040] text-left font-semibold"><?= get_the_title() ?></h1>

        <div class="flex flex-wrap-reverse sm:flex-nowrap gap-[32px]">
            <div class="w-[100%] sm:w-[60%] lg:w-[50%]">
                <?php /** YOUTUBE VIDEO */ ?>
                <?php get_template_part('partials/single-podcast/partials/quote'); ?>
                <?php /** !YOUTUBE VIDEO */ ?>

                <div class="[&>ul>li]:mb-[8px] [&>ul>li]:!font-poppins [&>p]:!font-poppins"><?= get_the_content() ?></div>
            </div>
            <div class="w-[100%] sm:w-[40%] lg:max-w-[465px] lg:w-[50%]">
                <?php /** VIDEO POSTER */ ?>
                <?php get_template_part('partials/single-podcast/partials/video-poster'); ?>
                <?php /** !VIDEO POSTER */ ?>
            </div>
        </div>
    </div>
</section>

<?php /** CTA */ ?>
<?php get_template_part('partials/single-podcast/partials/cta'); ?>
<?php /** !CTA */ ?>