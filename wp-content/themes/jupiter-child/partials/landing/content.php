<section class="pt-[35px] pb-[40px] xl:pt-[70px] xl:pb-[80px]">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <h1 class="font-poppins text-[32px] xl:text-[38px] leading-[1.2] font-[600] text-[#393A40] mb-[0.66em]"><?= get_the_title(); ?></h1>
        <div class="[&_p]:!font-poppins [&_p]:text-[18px] xl:[&_p]:text-[22px] [&_p]:leading-[1.6] [&_p]:text-[#393A40] [&_p]:mb-[1.14em] [&_p:last-child]:mb-0">
            <?php the_content(); ?>
        </div>
    </div>
</section>