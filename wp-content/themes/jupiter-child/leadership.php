<?php
/*
    Template Name: Leadership
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<!--Hero-->
<?php get_template_part('partials/leadership/hero'); ?>
<!--Hero-->

<!--Team-->
<?php get_template_part('partials/leadership/team'); ?>
<!--Team-->

<<<<<<< HEAD
<!--Photo-->
<?php get_template_part('partials/leadership/photo'); ?>
<!--Photo-->
=======
<section class="pt-[40px] md:pt-[100px] pb-[50px] md:pb-[75px]" data-x-data="leadership">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <div class="text-center mb-[42px]">
            <h1 class="font-poppins text-[36px] leading-[1.27] font-medium"><?= get_the_title(); ?></h1>
        </div>
        <div class="flex flex-wrap mr-[-26px] mb-[-42px]">
            <?php if ($team) : ?>
                <?php foreach ($team as $key => $post): setup_postdata($post); ?>
                    <div class="w-3/12 pr-[26px] mb-[42px] box-border">
                        <a class=" block group cursor-pointer"
                           data-x-on:click.prevent="handleClick(<?= $key; ?>)"
                           data-thumb="<?= get_the_post_thumbnail_url(); ?>"
                           data-href="<?= get_permalink(); ?>"
                        >
                            <div class="pb-[100%] rounded-full overflow-hidden mx-auto mb-[30px] xl:mb-[15px] relative">
                                <div class="absolute inset-0 bg-cover"
                                     style="background-image: url('<?= get_the_post_thumbnail_url(null, 'image-size-550x550'); ?>')"></div>
                                <div class="hidden xl:block xl:rounded-full absolute inset-0 group-hover:duration-[1s] group-hover:opacity-100 opacity-0 transition-all duration-[.3s] bg-[rgba(247,148,31,.68)]"></div>
                                <div class="hidden absolute inset-0 xl:flex justify-center items-center transform scale-[1.5] group-hover:scale-[1] opacity-0 group-hover:opacity-100 transition-all duration-[.3s] group-hover:duration-[.6s]">
                                    <span class="text-white text-[18px] leading-[1.1] uppercase font-[600]">Click for bio</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="font-relaway xl:font-roboto capitalize text-[20px] leading-[1.25] font-[800] text-[#f97251] xl:text-[#f7941f] xl:py-[5px] xl:px-[10px] xl:mb-[5px]"><?= get_field('leadership_name'); ?></div>
                                <div class="capitalize font-open-sans text-[12px] xl:text-[14px] leading-[1.83333333333] xl:leading-[1.57] text-[#444] xl:text-[#190000] xl:py-[5px] mb-[20px] xl:mb-0"><?= get_field('leadership_title'); ?></div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
                <div class="flex-1">
                    <h2>lol</h2>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($team): ?>

            <div class="fixed inset-0 flex flex-col z-[99992]" data-x-show="showModal" data-x-ref="modal">
                <div class="bg-[#393A40] bg-opacity-80 absolute inset-0"></div>

                <div class="swiper h-full w-full" id="slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper h-full w-full">
                        <!-- Slides -->
                        <?php foreach ($team as $post): setup_postdata($post);
                            $permalink = get_permalink();
                            $title = get_the_title();
                            $leadership_name = get_field('leadership_name');
                            $leadership_title = get_field('leadership_title');
                            $leadership_bio = get_field('leadership_bio');
                            $leadership_casual_image = get_field('leadership_casual_image');
                            ?>
                            <div class="swiper-slide h-full w-full flex flex-col">
                                <div class="max-w-[1100px] bg-white m-auto">
                                    <div data-x-on:click.outside="closeModel">
                                        <?php if ($leadership_casual_image) : ?>
                                            <img class="leadership-content-photo"
                                                 src="<?= $leadership_casual_image; ?>"
                                                 alt="<?= $leadership_name; ?>">
                                        <?php endif; ?>

                                        <div class="leadership-content-text">
                                            <div class="leadership-content-name">
                                                <strong><?= $leadership_name; ?></strong></div>
                                            <div class="leadership-content-position">
                                                <strong><?= $leadership_title; ?></strong>
                                            </div>
                                            <?= apply_filters('the_content', $leadership_bio); ?>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>

            </div>

        <?php endif; ?>
</section>
>>>>>>> d7ea95b... [*] leadership new design

<?php get_footer(); ?>
