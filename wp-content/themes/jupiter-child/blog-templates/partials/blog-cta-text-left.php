<section class="bg-[#0098ae]">
    <div class="pt-[40px] pb-[45px] md:py-[100px] bg-left sm:bg-center bg-cover bg-no-repeat"
         style="background-image: url('<?= $args['background_image']['url'] ?>')">
        <div class="max-w-[1200px] mx-auto px-[15px]">
            <div class="text-left font-poppins text-[#393A40] text-[32px] sm:text-[40px] md:text-[34px] leading-[1.4] font-[600] mb-[24px] w-[100%] sm:w-[568px]">
                <?= $args['title'] ?>
            </div>
            <div>
                <a href="<?= $args['button_link'] ?>" target="_blank" class="inline-block py-[12px] px-[30px] bg-[#3BA17C] rounded-[3px] group relative" title="<?= $args['button_text'] ?>">
                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500 bg-no-repeat bg-center" style="background-image: url('https://development.procureability.com/wp-content/uploads/2024/01/button-bg-pattern.svg')"></div>
                    <span class="font-poppins text-white text-[18px] leading-[1.5] font-[700] tracking-[0.1em] uppercase"><?= $args['button_text'] ?></span>
                </a>
            </div>
        </div>
    </div>
</section>