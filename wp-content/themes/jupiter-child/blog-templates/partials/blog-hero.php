<div class="blog-hero w-[100%] max-w-[1520px] mx-auto flex items-center gap-[32px] flex-nowrap box-border">
    <div class="blog-hero__content w-[48.45%] flex justify-end">
        <div class="blog-hero__content--wrapper w-[100%] max-w-[503px]">
            <h3 class="text-[#0098AE] font-poppins text-[24px] font-semibold leading-[1.4] mt-0 mb-[12px] mb-[12px]"><?= $args['subtitle'] ?></h3>
            <h1 class="text-[#404040] font-poppins text-[32px] font-semibold leading-[1.4375] pr-[30px] mb-[0]"><?= $args['title'] ?></h1>
        </div>
    </div>

    <div class="blog-hero__picture w-[49%] text-left">
        <img
                class="max-w-[100%] max-h-[380px]"
                src="<?= $args['image']['url'] ?>"
                alt="<?= $args['title'] ?>"
        />
    </div>
</div>