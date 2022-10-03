<?php
/*
    Template Name: Leadership
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<!--Hero-->
<?php get_template_part('partials/page', 'hero'); ?>
<!--Hero-->

<?php $leadership = new WP_Query(array(
    'post_type' => 'leadership',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => array(
        'date' => 'ASC',
    ),
    'tax_query' => array(
        'relation' => 'AND',
        array(
            'taxonomy' => 'department',
            'field' => 'slug',
            'terms' => 'true-leadership'
        )
    ),
)); ?>

<?php $team = get_field('team'); ?>

<section class="pt-[40px] md:pt-[100px] pb-[50px] md:pb-[75px]">
    <div class="max-w-[930px] px-[15px] mx-auto">
        <h1 class="uppercase md:!normal-case text-[31px] text-[#f7941f] font-roboto font-[700] pl-[15px] mb-[16px] md:mb-[36px]"><?= get_the_title(); ?></h1>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-[30px]">
            <?php if ($team) : ?>
                <?php foreach ($team as $post): setup_postdata($post); ?>
                    <a class="block group cursor-pointer"
                       data-fancybox="team"
                       data-src="#leader-<?= get_the_ID(); ?>"
                       data-thumb="<?= get_the_post_thumbnail_url(); ?>"
                       data-href="<?= get_permalink(); ?>"
                    >
                        <div class="pb-[100%] lg:pb-0 lg:w-[290px] lg:h-[290px] rounded-full overflow-hidden mx-auto mb-[30px] lg:mb-[15px] relative">
                            <div class="absolute inset-0 bg-cover"
                                 style="background-image: url('<?= get_the_post_thumbnail_url(); ?>')"></div>
                            <div class="hidden lg:block lg:rounded-full absolute inset-0 group-hover:duration-[1s] group-hover:opacity-100 opacity-0 transition-all duration-[.3s] bg-[rgba(247,148,31,.68)]"></div>
                            <div class="hidden absolute inset-0 lg:flex justify-center items-center transform scale-[1.5] group-hover:scale-[1] opacity-0 group-hover:opacity-100 transition-all duration-[.3s] group-hover:duration-[.6s]">
                                <span class="text-white text-[18px] leading-[1.1] uppercase font-[600]">Click for bio</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="font-relaway lg:font-roboto capitalize text-[20px] leading-[1.25] font-[800] text-[#f97251] lg:text-[#f7941f] lg:py-[5px] lg:px-[10px] lg:mb-[5px]"><?= get_field('leadership_name'); ?></div>
                            <div class="capitalize font-open-sans text-[12px] lg:text-[14px] leading-[1.83333333333] lg:leading-[1.57] text-[#444] lg:text-[#190000] lg:py-[5px] mb-[20px] lg:mb-0"><?= get_field('leadership_title'); ?></div>
                        </div>
                    </a>
                <?php endforeach; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <?php if ($team) : ?>
            <?php foreach ($team as $post): setup_postdata($post); ?>
                <?php
                $permalink = get_permalink();
                $title = get_the_title();
                $leadership_name = get_field('leadership_name');
                $leadership_title = get_field('leadership_title');
                $leadership_bio = get_field('leadership_bio');
                $leadership_casual_image = get_field('leadership_casual_image');
                ?>
                <div class="hidden max-w-[40%] w-[40%] min-w-[60%] !px-[15px] !pt-[15px] !pb-[5px]"
                     id="leader-<?= get_the_ID(); ?>"
                >
                    <?php if ($leadership_casual_image) : ?>
                        <img class="leadership-content-photo" src="<?= $leadership_casual_image; ?>"
                             alt="<?= $leadership_name; ?>">
                    <?php endif; ?>

                    <div class="leadership-content-text">
                        <div class="leadership-content-name"><strong><?= $leadership_name; ?></strong></div>
                        <div class="leadership-content-position"><strong><?= $leadership_title; ?></strong>
                        </div>

                        <?= apply_filters('the_content', $leadership_bio); ?>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
</section>

<?php get_footer(); ?>
