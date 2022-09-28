<?php
/*
    Template Name: Landing
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<section class="pt-[44px] pb-[50px] lg:pt-[88px] lg:pb-[100px]">
    <div class="max-w-[1230px] px-[15px] mx-auto">
        <h1 class="font-poppins text-[32px] lg:text-[48px] leading-[1.2] font-[600] text-[#393A40] mb-[0.66em]"><?= get_the_title(); ?></h1>
        <div class="[&_p]:text-[18px] lg:[&_p]:text-[28px] [&_p]:leading-[1.6] [&_p]:text-[#393A40] [&_p]:mb-[1.14em] [&_p]:last:mb-0">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php $selected_posts = get_field('posts'); ?>
<?php if ($selected_posts) : ?>
    <section class="pb-[100px]">
        <div class="max-w-[1230px] px-[15px] mx-auto">
            <ul class="list-none m-0 space-y-[40px] lg:space-y-[80px]">
                <?php foreach ($selected_posts as $selected_post) : ?>
                    <li class="mx-0">
                        <div class="md:flex bg-[#FAFAFB] rounded-[6px] md:min-h-[250px] lg:min-h-[420px]">
                            <a href="<?= get_permalink($selected_post); ?>"
                               class="block md:min-w-[calc(100%-(100%/1.618))] lg:min-w-[580px]">
                                <div class="relative pt-[72.41%] md:h-full md:pt-0 lg:h-auto lg:pt-[72.41%] bg-cover bg-center overflow-hidden">
                                    <div class="absolute inset-0 bg-cover bg-center hover:scale-110 transition-transform ease-in-out duration-300"
                                         style="background-image: url('<?= get_the_post_thumbnail_url($selected_post, 'full'); ?>')"></div>
                                </div>
                            </a>
                            <div class="py-[30px] px-[30px] lg:py-[62px] lg:pl-[64px] lg:pr-[31px]">
                                <div class="text-[22px] lg:text-[28px] leading-[1.3] text-[#393A40] font-[500] mb-[1.14em]">
                                    <?= $selected_post->post_title; ?>
                                </div>
                                <div class="text-[18px] lg:text-[24px] leading-[1.4] text-[#61636B]">
                                    <?= $selected_post->post_excerpt; ?>
                                </div>
                                <a class="text-[18px] lg:text-[20px] leading-[1.27] text-transparent hover:text-transparent bg-clip-text brand-text-gradient !underline hover:!decoration-[#FAFAFB] !decoration-[#0098AE] underline-offset-[6px] !decoration-dotted inline-block mt-[1.6em] transition-all ease-in-out duration-300"
                                   href="<?= get_permalink($selected_post); ?>">Learn More</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>

<?php get_footer(); ?>

