<div class="w-[100%] max-w-[100%]">
    <h2 class="text-[#393A40] font-poppins text-[20px] font-medium leading-[1.328] mb-[12px]">Author</h2>

    <div class="flex items-center">
        <div class="max-w-[88px] mr-[12px]">
            <img
                    class="w-[100%]"
                    src="<?= $args['author_photo']['url'] ?>"
                    alt="<?= $args['author_name'] ?>"
            >
        </div>

        <div>
            <a
                    class="font-poppins text-[14px] font-medium leading-[1.5] tracking-[-0.28px] mb-[4px]"
                    style="
                        color: rgba(57, 58, 64, 0.80);
                        background-image: url(/wp-content/themes/jupiter-child/assets/img/border-bottom-dotted.svg);
                        background-position: bottom;
                        background-repeat: repeat-x;
                        background-size: auto;"
                    href="<?= $args['author_link'] ?>"
                    title="<?= $args['author_name'] ?>"
                    target="_blank"
            ><?= $args['author_name'] ?></a>

            <span class="text-[#777] font-poppins text-[14px] font-normal leading-[1.5] tracking-[-0.28px] block"><?= $args['author_position'] ?></span>
        </div>
    </div>
</div>