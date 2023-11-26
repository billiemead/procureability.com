<?php $subscribe_button = get_field('subscribe_button'); ?>
<?php $bottom_text = get_field('bottom_text'); ?>

<section class="section section--content">
    <div class="section-container">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="section-h1"><?= get_the_title(); ?></h1>
                <div class="cms-content">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ($subscribe_button) : ?>
            <div class="pb-[50px] pt-[25px]">
                <div class="text-center">
                    <a href="<?= $subscribe_button['url']; ?>"
                       target="<?= $subscribe_button['target'] ?: '_self'; ?>"
                       class="inline-block py-[12px] px-[30px] bg-[#3BA17C] rounded-[3px] group relative">
                        <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center"
                             style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/button-bg-pattern.svg')"
                        ></div>
                        <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase"><?= $subscribe_button['title']; ?></span>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($bottom_text) : ?>
            <div class="cms-content">
                <?= $bottom_text; ?>
            </div>
        <?php endif; ?>
    </div>
</section>