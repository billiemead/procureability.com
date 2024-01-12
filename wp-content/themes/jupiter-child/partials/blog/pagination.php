<div class="max-w-[960px] mx-auto flex justify-center my-[50px]">
    <?php for ($i = 0; $i < $args['countPages']; $i++):
        $paginationClasses = [
            'mx-[2px]',
            'px-[11px]',
            'border',
            'border-solid',
            'leading-[30px]',
            'mb-[5px]'
        ];

        if (($i + 1) === $args['currentPage']) {
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
            <?php if ($args['currentPage'] === ($i + 1)): ?>
                <span class="text-[12px] font-normal"><?= $i + 1 ?></span>
            <?php else: ?>
                <a class="text-[12px] font-normal text-[#000]" href="<?= home_url() . '/blog/page/' . ($i + 1) ?>"><?= $i + 1 ?></a>
            <?php endif; ?>
        </div>
    <?php endfor; ?>
</div>