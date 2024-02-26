<section class="pt-[40px] pb-[85px] lg:pt-[60px]">
    <div class="max-w-[1000px] px-[15px] mx-auto overflow-hidden">
        <h1 class="font-poppins text-[36px] text-[#404040] text-left font-semibold"><?= get_the_title() ?></h1>

        <div class="flex gap-[32px]">
            <div class="w-[50%]">
                <?php /** YOUTUBE VIDEO */ ?>
                <?php get_template_part('partials/single-webinar/partials/quote'); ?>
                <?php /** !YOUTUBE VIDEO */ ?>

                <div class="[&>ul>li]:mb-[8px] [&>ul>li]:!font-poppins [&>p]:!font-poppins"><?= get_the_content() ?></div>
            </div>
            <div class="w-[50%] max-w-[465px]">
                <?php /** ONE COLUMN TEMPLATE */ ?>
                <?php get_template_part('partials/single-webinar/partials/video-poster'); ?>
                <?php /** !ONE COLUMN TEMPLATE */ ?>
            </div>
        </div>
    </div>
</section>