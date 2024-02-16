<?php if ($args['list']): ?>
    <div>
        <?php foreach ($args['list'] as $item): ?>
            <div class="mb-[24px] flex">
                <div class="pr-[16px] md:px-[16px]"><img src="<?= $item['icon']['url'] ?>" alt="<?= $item['title'] ?>"></div>

                <div>
                    <div class="mb-[4px]">
                        <span class="text-[#393A40] font-medium text-[18px] font-medium leading-[1.47556]"><?= $item['title'] ?></span>
                    </div>

                    <div class="text-[#777] font-poppins text-[16px] font-normal leading-[1.66]"><?= $item['text'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
    </div>
<?php endif; ?>