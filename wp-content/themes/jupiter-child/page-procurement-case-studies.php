<?php get_header(); ?>

    <!--Hero-->
<?php get_template_part('partials/page', 'hero'); ?>
    <!--!Hero-->

    <!--Content-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('partials/page', 'content'); ?>
    <?php endwhile; ?>
<?php endif; ?>
    <!--!Content-->

    <!--CTA-->
<?php $cta_subscribe = get_field('cta_subscribe'); ?>
<?php $cta_login = get_field('cta_login'); ?>

<?php if ($cta_subscribe || $cta_login) : ?>
    <section class="pt-[20px] pb-[40px] md:pb-[72px]">
        <div class="max-w-[930px] px-[15px] mx-auto">
            <?php if ($cta_subscribe || $cta_login) : ?>
                <div class="md:flex md:justify-center">
                    <div class="mb-[22px] md:mb-0 md:w-6/12 lg:w-3/12 px-[15px] box-border text-center md:!text-right">
                        <a target="<?= $cta_subscribe['target'] ?: '_self'; ?>"
                           class="inline-block py-[13px] px-[19px] text-[14px] box-border leading-[normal] text-[rgb(87,172,133)] hover:text-white hover:bg-[rgb(87,172,133)] border-[rgb(87,172,133)] border-solid border-2 duration-[.2s] ease-in-out"
                           href="<?= $cta_subscribe['url']; ?>"><?= $cta_subscribe['title']; ?></a>
                    </div>
                    <div class="md:w-6/12 lg:w-3/12 px-[15px] box-border text-center md:!text-left">
                        <a target="<?= $cta_login['target'] ?: '_self'; ?>"
                           class="inline-block py-[13px] px-[19px] text-[14px] box-border leading-[normal] text-[rgb(56,161,181)] hover:text-white hover:bg-[rgb(56,161,181)] border-[rgb(56,161,181)] border-solid border-2 duration-[.2s] ease-in-out"
                           href="<?= $cta_login['url']; ?>"><?= $cta_login['title']; ?></a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php endif; ?>
    <!--!CTA-->

    <!--POST CTA CONTENT-->
<?php $post_cta_content_content = get_field('post_cta_content_content'); ?>
    <section class="pb-[20px] md:pb-[60px]">
        <div class="max-w-[930px] px-[15px] mx-auto">
            <div class="cms-content">
                <?= $post_cta_content_content; ?>
            </div>
        </div>
    </section>
    <!--POST CTA CONTENT-->

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'category_name' => 'procurement-case-studies',
    'posts_per_page' => 10,
    'paged' => $paged,

);
$custom_query = new WP_Query($args);
?>

    <section class="pb-[80px]">
        <div class="max-w-[930px] px-[15px] mx-auto">
            <ul class="list-none !m-0 space-y-[60px]">
                <?php while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                    <li class="mx-0">
                        <div class="md:flex -mx-[15px]">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="block md:w-1/2 px-[15px] mb-[20px] md:mb-0">
                                    <a href="<?= get_permalink(); ?>"
                                       class="block group max-w-[450px] [&_img]:max-w-full [&_img]:h-auto relative [&_img]:block">
                                        <?= get_the_post_thumbnail(get_the_ID(), 'full'); ?>
                                        <div class="absolute inset-0 bg-[rgba(0,0,0,0.6)] flex justify-center items-center transition-opacity opacity-0 group-hover:opacity-100 duration-[.5s]">
                                            <span class="text-white text-[25px]">Click Here</span>
                                        </div>
                                    </a>
                                </div>
                            <?php endif; ?>
                            <div class="md:w-1/2 px-[15px]">
                                <div class="md:pl-[20px]">
                                    <a href="<?= get_permalink(); ?>"
                                       class="font-poppins text-[22px] leading-[1.3] text-[#393A40] font-[600] underline decoration-[hsla(0,0%,100%,0)] transition-[text-decoration-color] hover:decoration-[#393a40] duration-[.3s] cursor-pointer">
                                        <?php the_title(); ?>
                                    </a>
                                    <div class="font-poppins text-[16px] leading-[1.4] text-[#61636b] mt-[20px]">
                                        <?= get_the_excerpt(); ?>
                                    </div>
                                    <div class="mt-[20px] md:mt-[32px]">
                                        <a class="font-poppins text-[#3ba17c] text-[16px] leading-[1.27] !underline !decoration-[hsla(0,0%,100%,0)] transition-[text-decoration-color] hover:text-[#3ba17c] hover:!decoration-[#3ba17c] duration-[.3s]"
                                           href="<?= get_permalink(); ?>">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
            <div class="pagination">
                <?= paginate_links(array(
                    'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                    'total' => $custom_query->max_num_pages,
                    'current' => max(1, get_query_var('paged')),
                    'format' => '?paged=%#%',
                    'show_all' => false,
                    'end_size' => 2,
                    'mid_size' => 1,
                    'prev_next' => false,
                    'add_args' => false,
                ));
                ?>
            </div>
        </div>
    </section>


<?php get_footer(); ?>