<div class="max-w-[960px] mx-auto flex justify-center my-[50px]">

    <?php foreach ($args['paginationList'] as $item): ?>

        <?php
        $paginationClasses = [
            'mx-[2px]',
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
                'cursor-pointer',
                'hover:bg-[#fff]',
                'hover:border-[#bbb]',
                'hover:text-[#333]',
                'hover:shadow-[0_3px_5px_0_rgba(0,0,0,0.13)]'
            ]);
        }

        ?>

        <div class="<?= implode(" ", $paginationClasses) ?>">
            <?php if ($item['selected'] || !$item['link']): ?>
                <span
                        class="text-[12px] font-normal leading-[30px] inline-block px-[11px]"
                ><?= $item['label'] ?></span>
            <?php else: ?>
                <a
                        class="text-[12px] font-normal text-[#000] leading-[30px] inline-block px-[11px]"
                        href="<?= $item['link'] ?>"
                ><?= $item['label'] ?></a>
            <?php endif; ?>
        </div>

    <?php endforeach; ?>

</div>