<?php $cta_lets_talk_background_image = get_field('cta_lets_talk_background_image'); ?>
<?php $cta_lets_talk_text = get_field('cta_lets_talk_text'); ?>
<?php $cta_lets_talk_button_text = get_field('cta_lets_talk_button_text'); ?>
<?php $cta_lets_talk_button_link = get_field('cta_lets_talk_button_link'); ?>

<?php if ($cta_lets_talk_background_image && $cta_lets_talk_text && $cta_lets_talk_button_text && $cta_lets_talk_button_link) : ?>
    <section class="py-[20px] md:pt-[140px] md:pb-[90px] relative overflow-y-hidden">
        <div class="h-[300%] w-full absolute top-[-150%]">
            <div class="rellax absolute inset-0" data-rellax-percentage="1" data-rellax-speed="5">
                <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                     style="background-image: url(<?= $cta_lets_talk_background_image['url']; ?>)">
                </div>
            </div>
        </div>

        <div class="px-[15px] text-center relative">
            <h2 class="text-white text-[27px] md:text-[30px] leading-[1.3em] font-[600] mb-[14px]"><?= $cta_lets_talk_text; ?></h2>
            <a class="inline-block py-[11px] px-[20px] text-[15px] text-[#24B9CD] bg-white rounded-[3px] hover:bg-[#D1D1D1] hover:text-[#24B9CD] active:relative active:top-[1px]"
               href="<?= $cta_lets_talk_button_link['url']; ?>"><?= $cta_lets_talk_button_text; ?></a>
        </div>
    </section>
<?php endif; ?>