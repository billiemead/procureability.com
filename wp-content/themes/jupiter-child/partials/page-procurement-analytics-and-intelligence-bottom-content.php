<section class="pt-[50px] pb-[32px]">
    <div class="max-w-[930px] px-[15px] mx-auto">
        <?php $bottom_content_title = get_field('bottom_content_title'); ?>
        <?php if ($bottom_content_title) : ?>
            <div class="lg:ml-[15%] lg:mr-[15%] text-center mb-[52px]">
                <span class="text-[28px] text-[#0a0000] font-[700] leading-[1.66em]"><?= $bottom_content_title; ?></span>
            </div>
        <?php endif; ?>
        <div class="lg:max-w-[50%] lg:px-[15px] mx-auto">
            <?php $bottom_content_subtitle = get_field('bottom_content_subtitle'); ?>
            <?php if ($bottom_content_subtitle) : ?>
                <h4 class="text-[18px] text-[#404040] font-[600] uppercase"><?= $bottom_content_subtitle; ?></h4>
            <?php endif; ?>
            <?php $bottom_content_list = get_field('bottom_content_list'); ?>
            <?php if ($bottom_content_list) : ?>
                <ul>
                    <?php foreach ($bottom_content_list as $bottom_content_list_item) : ?>
                        <li><?= $bottom_content_list_item['item']; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</section>
