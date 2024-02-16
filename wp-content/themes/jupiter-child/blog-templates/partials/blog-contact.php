<div class="bg-cover bg-center bg-no-repeat pt-[60px] pb-[45px]" style="background-image: url(<?= $args['background_image']['url'] ?>)">
    <div class="w-[100%] max-w-[830px] mx-auto px-[15px] box-border text-center">
        <h2 class="text-[#fff] font-poppins text-[22px] font-semibold leading-[1.35] mb-[25px]"><?= $args['title'] ?></h2>

        <div class="text-[#fff] font-poppins text-[20px] font-normal leading-[1.35] mb-[35px]"><?= $args['text'] ?></div>

        <a
            class="inline-block bg-[#fff] px-[27px] py-[14px] rounded-[3px] text-center text-[#0098AE] font-poppins text-[16px] font-semibold leading-[1.515] tracking-[2.24px] uppercase cursor-pointer"
            href="<?= $args['button_link'] ?>"
            title="<?= $args['button_text'] ?>"
            target="_blank"
        ><?= $args['button_text'] ?></a>
    </div>
</div>