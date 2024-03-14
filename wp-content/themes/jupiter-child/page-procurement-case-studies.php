<?php get_header(); ?>

    <!--Hero-->
<?php get_template_part('partials/page', 'hero'); ?>
    <!--!Hero-->


    <!--Content-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <section class="pb-[77px] pt-[35px]">
            <div class="max-w-[930px] px-[15px] mx-auto">
                <div class="grid sm:grid-cols-[auto_312px] gap-[30px]">
                    <div>
                        <div class="max-w-[353px]">
                            <h1 class="section-h1 text-[#005E6B]"><?= get_the_title(); ?></h1>
                            <?php $post_cta_content_content = get_field('post_cta_content_content'); ?>
                            <?php if ($post_cta_content_content) : ?>
                                <div class="[&_p]:!font-poppins [&_p]:text-[14px] [&_p]:leading-[1.4] [&_p]:text-[#393A40] [&_a]:!font-poppins [&_a]:text-[#393A40] [&_a]:!underline [&_a]:hover:decoration-transparent [&_a]:transition-colors">
                                    <?= $post_cta_content_content; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php $cta_subscribe = get_field('cta_subscribe'); ?>
                        <?php if ($cta_subscribe) : ?>
                            <div class="mt-[30px]">
                                <div class="min-w-[0px]">
                                    <a target="<?= $cta_subscribe['target'] ?: '_self'; ?>"
                                       class="inline-block uppercase  font-poppins py-[13px] px-[19px] text-[14px] box-border leading-[normal] text-[#155B39] hover:text-white hover:bg-[rgb(87,172,133)] border-[rgb(87,172,133)] border-solid border-2 duration-[.2s] ease-in-out"
                                       href="<?= $cta_subscribe['url']; ?>"><?= $cta_subscribe['title']; ?></a>

                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php $cta_image = get_field('cta_image'); ?>
                    <?php if ($cta_image) : ?>
                        <div>
                            <?= wp_get_attachment_image($cta_image['ID'], 'full', false, array('class' => 'block w-full h-auto max-w-full')); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>
    <!--!Content-->

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
                                       class="font-poppins text-[#393A40]  text-[22px] leading-[1.3]  font-[600] !underline !decoration-[hsla(0,0%,100%,0)] transition-[text-decoration-color] hover:!decoration-[#393a40] duration-[.3s] cursor-pointer">
                                        <?php the_title(); ?>
                                    </a>
                                    <div class="font-poppins text-[16px] leading-[1.4] text-[#61636b] mt-[20px]">
                                        <?= get_the_excerpt(); ?>
                                    </div>
                                    <div class="mt-[20px] md:mt-[32px]">
                                        <a class="font-poppins hover:decoration-transparent transition-colors text-[#005E6B] text-[16px] font-semibold leading-normal uppercase tracking-[1.6px] !underline underline-offset-[7px] !decoration-dotted"
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