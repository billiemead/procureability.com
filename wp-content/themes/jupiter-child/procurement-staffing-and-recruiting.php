<?php
/*
    Template Name: Procurement Staffing and Recruiting
    Template Post Type: page
*/
?>

<?php get_header(); ?>

<!--Hero-->
<?php get_template_part('partials/page', 'hero'); ?>
<!--Hero-->

<!--Content-->
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('partials/page', 'content'); ?>
    <?php endwhile; ?>
<?php endif; ?>
<!--Content-->

<section>
    <div class="max-w-[930px] px-[15px] mx-auto">
        <!--
		<?php $areas_of_expertise_title = get_field('areas_of_expertise_title'); ?>
        <?php if ($areas_of_expertise_title) : ?>
            <h3 class="text-[24px] text-[#404040] font-[600]"><?= $areas_of_expertise_title; ?></h3>
        <?php endif; ?>
        <?php $areas_of_expertise_list = get_field('areas_of_expertise_list'); ?>
        <?php if ($areas_of_expertise_list) : ?>
            <ul class="list-none ml-0 md:columns-2 px-[15px]">
                <?php foreach ($areas_of_expertise_list as $areas_of_expertise_list_item) : ?>
                    <li class="mb-[6px] ml-0 pl-[21px] relative">
                        <svg class="absolute top-[4px] left-0 fill-[#00a2b7]" style=" height:16px; width: 16px; "
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                        </svg>
                        <span class="text-[#00a2b7]"><?= $areas_of_expertise_list_item['item']; ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
		-->
        <div class="pt-[45px] pb-[70px] md:flex justify-center">
            <?php $make_a_direct_hire_button_text = get_field('make_a_direct_hire_button_text'); ?>
            <?php $make_a_direct_hire_button_link = get_field('make_a_direct_hire_button_link'); ?>
            <?php if ($make_a_direct_hire_button_text && $make_a_direct_hire_button_link) : ?>
                <div class="mb-[30px] xl:mb-0 xl:w-1/4 px-[15px] text-center box-border">
                    <a class="inline-block py-[13px] px-[19px] rounded-[5px] border-2 border-solid border-[rgb(74,172,135)] text-[rgb(74,172,135)] hover:bg-[rgb(74,172,135)] hover:text-white text-[14px] leading-[normal] uppercase transition-all duration-[.2s] ease-in-out"
                       href="<?= $make_a_direct_hire_button_link; ?>"><?= $make_a_direct_hire_button_text; ?></a>
                </div>
            <?php endif; ?>
            <?php $request_a_recourse_button_text = get_field('request_a_recourse_button_text'); ?>
            <?php $request_a_recourse_button_link = get_field('request_a_recourse_button_link'); ?>
            <?php if ($request_a_recourse_button_text && $request_a_recourse_button_link) : ?>
                <div class="xl:w-1/4 px-[15px] text-center box-border">
                    <a class="inline-block py-[13px] px-[19px] rounded-[5px] border-2 border-solid border-[rgb(0,162,183)] text-[rgb(0,162,183)] hover:bg-[rgb(0,162,183)] hover:text-white text-[14px] leading-[normal] uppercase transition-all duration-[.2s] ease-in-out"
                       href="<?= $request_a_recourse_button_link; ?>"><?= $request_a_recourse_button_text; ?></a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php $video_title = get_field('video_title'); ?>
<?php $video_video = get_field('video_video'); ?>
<?php if ($video_title && $video_video ) : ?>
    <!--Video-->
    <section id="video" class="py-[30px]">
        <div class="max-w-[930px] px-[15px] mx-auto">
            <div class="bg-[#0095b0] px-[15px] pt-[15px] pb-[40px]">
                <div>
                    <?= $video_video; ?>
                </div>
                <div class="text-center mt-[20px]">
                    <div class="text-[19px] leading-black text-[#000] font-[700] capitalize"><?= $video_title; ?></div>
                </div>
            </div>
        </div>
    </section>
    <!--Video-->
<?php endif; ?>

<!--Form section-->
<?php get_template_part('partials/page', 'form-section'); ?>
<!--Form section-->

<!--Leadership-->
<?php get_template_part('partials/page', 'leadership'); ?>
<!--Leadership-->

<?php get_footer(); ?>
