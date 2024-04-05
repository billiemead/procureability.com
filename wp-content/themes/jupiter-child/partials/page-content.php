<section class="relative box-border pb-0 pt-[25px] md:pt-[50px]">
    <div class="max-w-[930px] px-[15px] mx-auto">
        <h1 class="text-[#005E6B] font-poppins text-[16px] font-medium leading-[1.4] mb-[16px]"><?= get_the_title(); ?></h1>
        <div class="overflow-hidden
                    [&_h2]:font-poppins
                    [&_h2]:text-[#393A40]
                    [&_h2]:text-[24px]
                    [&_h2]:font-medium
                    [&_h2]:leading-[1.33333]
                    [&_h2]:mb-[16px]
                    [&_p]:!font-poppins
                    [&_p]:text-[#393A40]
                    [&_p]:mb-[16px]
                    [&_a]:text-[#005E6B]
                    [&_a]:font-poppins
                    [&_li]:text-[#393A40]
                    [&_li]:font-poppins
                    font-poppins
                    text-[#393A40]
                    [&_img]:h-auto
                    [&_img]:max-w-[100%]"
        >
            <?php the_content(); ?>
        </div>
    </div>
</section>
