<?php $selected_posts = get_field('posts'); ?>
<?php if ($selected_posts) : ?>
    <section class="pb-[40px] md:pb-[80px]">
        <div class="max-w-[1200px] px-[15px] mx-auto">
            <ul class="list-none m-0 space-y-[32px] xl:space-y-[64px]">
                <?php foreach ($selected_posts as $selected_post) : ?>
                    <li class="mx-0">
                        <div class="md:flex bg-[#FAFAFB] rounded-[6px] md:min-h-[200px] xl:min-h-[336px]">
                            <a href="<?= get_permalink($selected_post); ?>"
                               class="block md:min-w-[calc(100%-(100%/1.618))] xl:min-w-[565px]">
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