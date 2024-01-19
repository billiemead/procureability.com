<?php

$blogTitle = get_field('blog_title');
$rightColumnContent = get_field('right_column');

?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="max-w-[960px] px-[15px] mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-[auto_400px] gap-[30px] mb-[50px]">
                <div>
                    <h1 class="section-h1"><?= $blogTitle ?></h1>
                    <div class="cms-content [&_p]:!text-[18px]">
                        <?php the_content(); ?>
                    </div>
                </div>
                <div class="video-border-styles px-[15px]"><?= $rightColumnContent ?></div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-[70px]">
                <div>
                    <div style="text-align:center;">
                        <a class="inline-block py-[12px] px-[65px]  bg-[#3BA17C] rounded-[3px] group relative" href="/insights/subscribe/">
                            <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center rocket-lazyload" style="background-image: url('/wp-content/themes/jupiter-child/assets/img/button-bg-pattern.svg');"></div>
                            <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase">Subscribe to Insights</span>
                        </a>
                    </div>
                </div>
                <div>
                    <div style="text-align:center;">
                        <a class="inline-block py-[12px] px-[65px]  bg-[#0098AE] rounded-[3px] group relative" href="/contact/">
                            <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center rocket-lazyload" style="background-image: url('/wp-content/themes/jupiter-child/assets/img/button-bg-pattern.svg');"></div>
                            <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase">Contact us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php endif; ?>