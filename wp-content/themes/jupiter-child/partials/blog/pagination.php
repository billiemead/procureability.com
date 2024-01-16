<div class="max-w-[960px] mx-auto flex justify-center my-[50px]">

    <?php foreach ($args['paginationList'] as $item): ?>

        <?php
        $paginationClasses = [
            'mx-[2px]',
            'px-[11px]',
            'border',
            'border-solid',
            'leading-[30px]',
            'mb-[5px]'
        ];

        if ($item['selected'] || !$item['link']) {
            $paginationClasses = array_merge($paginationClasses, [
                'bg-[#fff]',
                'border-[#bbb]',
                'text-[#333]',
                'shadow-[0_3px_5px_0_rgba(0,0,0,0.13)]'
            ]);
        } else {
            $paginationClasses = array_merge($paginationClasses, [
                'bg-[#eee]',
                'border-[#e5e5e5]',
                'text-[#000]',
                'cursor-pointer'
            ]);
        }

        ?>

        <div class="<?= implode(" ", $paginationClasses) ?>">
            <?php if ($item['selected'] || !$item['link']): ?>
                <span
                        class="text-[12px] font-normal"
                ><?= $item['label'] ?></span>
            <?php else: ?>
                <a
                        class="text-[12px] font-normal text-[#000]"
                        href="<?= $item['link'] ?>"
                ><?= $item['label'] ?></a>
            <?php endif; ?>
        </div>

    <?php endforeach; ?>

</div>