<div class="w-[100%] max-w-[100%]">
    <h2 class="text-[#393A40] font-poppins text-[20px] font-medium leading-[1.328] mb-[12px]">References</h2>

    <?php $counter = 0; foreach ($args['references'] as $reference): ?>
        <div class="mb-[6px] relative pl-[15px]">
            <sup class="absolute text-[10px] top-[9px] left-[1px]"><?= $counter + 1 ?></sup><a
                    href="<?= $reference['link'] ?>"
                    class="hover:border-b-0 border-b border-[#0098AE] border-dotted text-[#0098AE] font-poppins text-[16px] font-normal leading-[1.66]"
                    title="<?= $reference['title'] ?>"
                    target="_blank"
            ><?= $reference['title'] ?></a>
        </div>
    <?php $counter++; endforeach; ?>
</div>