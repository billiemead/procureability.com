<div class="flex flex-col sm:flex-row rounded-[2px] bg-[#F9F9F9] px-[32px] py-[24px] gap-[16px] items-center">
    <div class="w-[60px] h-0 pb-[60px] bg-no-repeat bg-cover bg-center" style="background-image: url(<?= $args['icon'] ?>);"></div>
    <div class="flex" style="flex-flow: column; text-align: left;">
        <div class="mb-[4px] text-[#0098AE] font-poppins text-[22px] font-medium leading-[1.2] tracking-[1.76px] uppercase"><?= $args['title'] ?></div>
        <div class="text-[#777] font-poppins text-[16px] font-normal leading-[1.66]"><?= $args['text'] ?></div>
    </div>
</div>