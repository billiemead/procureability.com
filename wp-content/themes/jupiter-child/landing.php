<?php
/*
    Template Name: Landing
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<section class="pt-[35px] pb-[40px] xl:pt-[70px] xl:pb-[80px]">
    <div class="max-w-[984px] px-[15px] mx-auto">
        <h1 class="font-poppins text-[32px] xl:text-[38px] leading-[1.2] font-[600] text-[#393A40] mb-[0.66em]"><?= get_the_title(); ?></h1>
        <div class="[&_p]:!font-poppins [&_p]:text-[18px] xl:[&_p]:text-[22px] [&_p]:leading-[1.6] [&_p]:text-[#393A40] [&_p]:mb-[1.14em] [&_p:last-child]:mb-0">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php $selected_posts = get_field('posts'); ?>
<?php if ($selected_posts) : ?>
    <section class="pb-[80px]">
        <div class="max-w-[984px] px-[15px] mx-auto">
            <ul class="list-none m-0 space-y-[32px] xl:space-y-[64px]">
                <?php foreach ($selected_posts as $selected_post) : ?>
                    <li class="mx-0">
                        <div class="md:flex bg-[#FAFAFB] rounded-[6px] md:min-h-[200px] xl:min-h-[336px]">
                            <a href="<?= get_permalink($selected_post); ?>"
                               class="block md:min-w-[calc(100%-(100%/1.618))] xl:min-w-[464px]">
                                <div class="relative pt-[72.41%] md:h-full md:pt-0 xl:h-auto xl:pt-[72.41%] bg-cover bg-center overflow-hidden z-20">
                                    <div class="absolute inset-0 bg-cover bg-center hover:scale-110 transition-transform ease-in-out duration-300 z-10"
                                         style="background-image: url('<?= get_the_post_thumbnail_url($selected_post, 'full'); ?>')"></div>
                                </div>
                            </a>
                            <div class="py-[24px] px-[24px] xl:py-[50px] xl:pl-[51px] xl:pr-[25px]">
                                <a href="<?= get_permalink($selected_post); ?>" class="font-poppins block text-[22px] leading-[1.3] text-[#393A40] font-[500] mb-[1.14em]">
                                    <?= $selected_post->post_title; ?>
                                </a>
                                <div class="font-poppins text-[18px] leading-[1.4] text-[#61636B]">
                                    <?= $selected_post->post_excerpt; ?>
                                </div>
                                <a class="font-poppins text-[18px] leading-[1.27] text-transparent hover:text-transparent bg-clip-text brand-text-gradient inline-block mt-[1.6em] transition-all ease-in-out duration-300 relative after:content-[''] after:absolute after:w-full after:border-b-2 after:border-t-0 after:border-l-0 after:border-r-0 after:border-b-[#0098AE] after:opacity-100 after:block after:border-dotted hover:after:opacity-0 after:transition-all"
                                   href="<?= get_permalink($selected_post); ?>">Learn More</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>

<?php $cta_title = get_field('cta_title'); ?>
<?php $cta_button_text = get_field('cta_button_text'); ?>
<?php $cta_button_url = get_field('cta_button_url'); ?>
<?php $cta_background_image = get_field('cta_background_image'); ?>

<?php if ($cta_title && $cta_button_text && $cta_button_url && $cta_background_image) : ?>
    <!--CTA-->
    <section class="bg-[#0098ae]">
        <div class="pt-[40px] pb-[45px] md:py-[70px] bg-center bg-cover bg-no-repeat"
             style="background-image: url('<?= $cta_background_image['url']; ?>')">
            <div class="max-w-[860px] mx-auto px-[15px]">
                <div class="text-center font-poppins text-white text-[22px] md:text-[34px] leading-[1.36] font-[600] mb-[24px]">
                    <?= $cta_title; ?>
                </div>
                <div class="text-center">
                    <a class="inline-block font-poppins text-[14px] md:text-[18px] text-[#0098AE] font-[600] leading-none tracking-[.03em] uppercase hover:bg-[#3ba17c] hover:text-white rounded-[3px] py-[17px] px-[40px] bg-white transition-all duration-300"
                       href="<?= $cta_button_url ?>"><?= $cta_button_text; ?></a>
                </div>
            </div>
        </div>
    </section>
    <!--!CTA-->
<?php endif; ?>

<?php get_footer(); ?>

