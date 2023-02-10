<?php $career_categories_title = get_field('career_categories_title'); ?>
<?php $career_categories_procureability_button = get_field('career_categories_procureability_button'); ?>
<?php $career_categories_industry_button = get_field('career_categories_industry_button'); ?>

<section class="pt-[48px] pb-[66px] bg-cover bg-center bg-no-repeat"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/talent-test/career-categories-background-test.png')">
    <div class="px-[15px]">
        <?php if ($career_categories_title) : ?>
            <div class="text-center mb-[24px]">
                <div class="font-poppins text-white text-[36px] leading-[1.5] font-[600]"><?= $career_categories_title; ?></div>
            </div>
        <?php endif; ?>
        <div class="text-center grid md:auto-cols-max md:grid-flow-col md:justify-center gap-[32px]">
            <?php if ($career_categories_procureability_button) : ?>
                <div class="min-w-[0px]">
                    <a class="inline-block min-w-[272px] box-border py-[22px] px-[38px] bg-white rounded-[3px] transition-opacity hover:opacity-80"
                       href="<?= $career_categories_procureability_button['url']; ?>"
                       target="<?= $career_categories_procureability_button['target'] ?: '_self'; ?>"
                    >
                        <span class="font-poppins text-[#0098AE] text-[20px] leading-[1.3] font-[700] tracking-[0.1em] uppercase align-middle"><?= $career_categories_procureability_button['title']; ?></span>
                    </a>
                </div>
            <?php endif; ?>
            <?php if ($career_categories_industry_button) : ?>
                <div class="min-w-[0px]">
                    <a class="inline-block min-w-[272px] box-border py-[22px] px-[38px] bg-white rounded-[3px] transition-opacity hover:opacity-80"
                       href="<?= $career_categories_industry_button['url']; ?>"
                       target="<?= $career_categories_procureability_button['target'] ?: '_self'; ?>"
                    >
                        <span class="font-poppins text-[#3BA17C] text-[20px] leading-[1.3] font-[700] tracking-[0.1em] uppercase align-middle"><?= $career_categories_industry_button['title']; ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--test-->