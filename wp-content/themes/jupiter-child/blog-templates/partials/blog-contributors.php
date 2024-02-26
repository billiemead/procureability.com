<div class="w-[100%] max-w-[100%]">
    <h2 class="text-[#393A40] font-poppins text-[20px] font-medium leading-[1.328] mb-[12px]">Contributors</h2>

    <?php foreach ($args['contributors_list'] as $contributor): ?>
        <span class="block text-[#777] font-poppins text-[14px] font-normal leading-[1.5] tracking-[-0.28px] mb-[4px]">
            <a
                    href="<?= $contributor['link'] ?>"
                    class="font-poppins text-[14px] font-medium leading-[1.5] tracking-[-0.28px] mb-[4px]"
                    title="<?= $contributor['name'] ?>"
                    style="
                        color: rgba(57, 58, 64, 0.80);
                        background-image: url(/wp-content/themes/jupiter-child/assets/img/border-bottom-dotted.svg);
                        background-position: bottom;
                        background-repeat: repeat-x;
                        background-size: auto;"
                    target="_blank"
            ><?= $contributor['name'] ?></a>, <?= $contributor['position'] ?>
        </span>
    <?php endforeach; ?>
</div>