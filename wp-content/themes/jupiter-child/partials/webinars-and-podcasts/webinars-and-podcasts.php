<?php

$webinarsAndPodcasts = get_posts([
    'post_type'     => ['webinar', 'podcast'],
    'numberposts'   => -1,
    'meta_key'      => 'procureability_webinars_and_podcasts_page',
    'meta_value'    => '1'
]);

$podcasts = get_posts(
    array(
        'post_type' => 'post',
        'numberposts' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => array('podcasts')
            ),
        )
    )
);

$posts = array_merge($webinarsAndPodcasts, $podcasts);

?>

<section class="py-[50px] md:pb-[100px]">
    <div class="max-w-[968px] mx-auto px-[15px]">
        <?php if ($posts): ?>
            <ul class="m-0 p-0 list-none">
                <?php foreach ($posts as $post): setup_postdata($post); ?>
                    <li class="py-[30px] px-[15px] m-0 border-b border-solid border-[#CCCCCC] last:border-none last:pb-0 first:pt-0">
                        <div class="grid md:grid-cols-[45%_auto] gap-[30px]">
                            <div>
                                <a class="block relative group" href="<?= the_permalink(); ?>">
                                    <?= get_the_post_thumbnail($post, 'full', array('class' => 'block max-w-full h-auto')); ?>
                                    <div class="transition-opacity duration-200 group-hover:opacity-100 flex items-center justify-center absolute inset-0 bg-[rgba(64,64,64,.5)] opacity-0">
                                        <span class="text-[25px] text-white">Click Here</span>
                                    </div>
                                </a>

                            </div>
                            <div>
                                <div class="mb-[16px]">
                                    <a href="<?= the_permalink(); ?>"
                                       class="font-poppins text-[#f97352] hover:text-[#2e2e2e] text-[20px] leading-[1.3] font-semibold"><?= the_title(); ?></a>
                                </div>
                                <div class="mb-[35px]">
                                    <div class="font-poppins text-[16px] leading-[1.6] text-[#61636B]"><?= the_excerpt(); ?></div>
                                </div>
                                <div>
                                    <a class="font-poppins hover:decoration-transparent transition-colors text-[#3BA17C] text-[16px] font-semibold leading-normal uppercase tracking-[1.6px] !underline underline-offset-[7px] !decoration-dotted"
                                       href="<?= the_permalink(); ?>">read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
