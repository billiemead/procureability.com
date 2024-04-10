<?php get_header(); ?>
    <section class="pt-[40px] pb-[80px] lg:py-[80px]">
        <div class="max-w-[990px] px-[15px] mx-auto overflow-hidden">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $leadership_name = get_field('leadership_name');
                    $leadership_title = get_field('leadership_title');
                    $leadership_bio = get_field('leadership_bio');
                    $leadership_casual_image = get_field('leadership_casual_image');
                    $leadership_socials = get_field('leadership_socials');
                    ?>

                    <img class="block lg:inline-block mx-auto lg:float-right lg:ml-[2em] lg:mr-0 mb-[2em] w-full max-w-[378px] lg:max-w-[calc(100%*(1-1/1.618))]"
                         src="<?= $leadership_casual_image; ?>" alt="<?= $leadership_name; ?>"
                         title="<?= $leadership_name; ?>">
                    <h1 class="text-[#f97352] text-[16px] leading-[1.66] font-bold mb-0"><?= $leadership_name; ?></h1>
                    <span class="inline-block text-[#f97352] text-[16px] leading-[1.66] font-bold mb-[20px]"><?= $leadership_title; ?></span>
                    <?= apply_filters('the_content', $leadership_bio); ?>

                    <?php if ($leadership_socials) : ?>
                        <div class="mt-[32px] space-x-[30px]">
                            <?php foreach ($leadership_socials as $leadership_social) : ?>
                                <a href="<?= $leadership_social['url']; ?>"
                                   target="_blank"
                                   class="inline-flex items-center group">
                                    <img class="mr-[12px]"
                                         src="<?= get_stylesheet_directory_uri() . '/assets/img/socials/' . $leadership_social['network']['value'] . '.svg'; ?>"
                                         alt="<?= $leadership_social['network']['label']; ?>">
                                    <span class="font-poppins text-[16px] leading-[1.6] text-[#5A5A5A] underline decoration-transparent group-hover:decoration-current transition-colors"><?= $leadership_social['network']['label']; ?></span>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>
<?php get_footer(); ?>