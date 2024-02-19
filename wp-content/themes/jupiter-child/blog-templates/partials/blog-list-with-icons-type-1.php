<?php if ($args['list']): ?>
    <div class="blog-list-with-icons-type-1">
        <?php $count = 0; foreach ($args['list'] as $item): ?>
            <div class="blog-list-with-icons-type-1__item mb-[50px]">
                <div class="mr-[20px] md:mx-[20px] text-[#393A40] font-poppins text-[20px] font-semibold leading-[1.5] pt-[22px]">
                    <span><?= (($count + 1) > 8) ? ($count + 1) : '0' . ($count + 1) ?></span>
                </div>

                <div><img src="<?= $item['icon']['url'] ?>" alt="<?= $item['title'] ?>"></div>

                <div class="md:ml-[29px] pt-[24px]">
                    <div class="mb-[27px]"><span class="text-[#393A40] font-poppins text-[18px] font-semibold leading-[1.5]"><?= $item['title'] ?></span></div>

                    <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $item['text']]); ?>

                    <?php if ($item['accent_title'] && $item['accent_text']): ?>
                        <div class="pl-[43px] px-[24px] mt-[36px] relative before:content-[''] before:absolute before:left-0 before:top-0 before:h-[100%] before:w-[8px] before:border-[0.5px] before:border-solid before:border-[#0097AD] before:bg-[#EEF6F8]">
                            <h4 class="text-[#0098AE] font-poppins text-[16px] font-bold leading-[1.66] mb-[4px]"><?= $item['accent_title'] ?></h4>
                            <div class="text-[#777] font-poppins text-[16px] font-normal leading-[1.66]"><?= $item['accent_text'] ?></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php $count++; endforeach; ?>
    </div>
<?php endif; ?>