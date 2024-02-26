<section class="bg-[#0098ae]">
    <div class="pt-[40px] pb-[45px] md:py-[70px] bg-center bg-cover bg-no-repeat"
         style="background-image: url('<?= $args['background_image']['url'] ?>')">
        <div class="max-w-[860px] mx-auto px-[15px]">
            <div class="text-center font-poppins text-white text-[22px] md:text-[34px] leading-[1.36] font-[600] mb-[24px]">
                <?= $args['title'] ?>
            </div>
            <div class="text-center">
                <a
                    class="inline-block font-poppins text-[14px] md:text-[18px] text-[#0098AE] font-[600] leading-none tracking-[.03em] uppercase hover:bg-[#3ba17c] hover:text-white rounded-[3px] py-[17px] px-[40px] bg-white transition-all duration-300"
                    href="<?= $args['button_link'] ?>"
                    title="<?= $args['button_text'] ?>"
                ><?= $args['button_text'] ?></a>
            </div>
        </div>
    </div>
</section>