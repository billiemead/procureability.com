<?php $hero_title = get_field('hero_title'); ?>
<?php $hero_leading = get_field('hero_leading'); ?>
<?php $hero_button_text = get_field('hero_button_text'); ?>
<?php $hero_form_title = get_field('hero_form_title'); ?>
<?php $hero_form_form = get_field('hero_form_form'); ?>
<?php $leadership_photos = get_query_var('teamMembersPhotos'); ?>

<!--hero-->
<div data-x-data="{modal: false}">
    <section class="pt-[88px] pb-[100px]">
        <div class="max-w-[1200px] mx-auto relative">
            <div id="bubbles" class="hidden xl:block opacity-0 transition-opacity duration-1000">
                <div class="bubble absolute w-[90px] h-[90px] top-[-10px] left-[200px]">
                    <div data-active="true" data-image="<?= $leadership_photos[0]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                </div>

                <div class="bubble absolute w-[90px] h-[90px] top-[-20px] right-0">
                    <div data-active="true" data-image="<?= $leadership_photos[1]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                </div>

                <div class="bubble absolute w-[160px] h-[160px] top-[38px] left-[-20px]">
                    <div data-active="true" data-image="<?= $leadership_photos[2]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                </div>

                <div class="bubble absolute w-[120px] h-[120px] top-[34px] right-[160px]">
                    <div data-active="true" data-image="<?= $leadership_photos[3]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                </div>

                <div class="bubble absolute w-[130px] h-[130px] top-[155px] left-[195px]">
                    <div data-active="true" data-image="<?= $leadership_photos[4]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                </div>

                <div class="bubble absolute w-[140px] h-[140px] top-[150px] right-0">
                    <div data-active="true" data-image="<?= $leadership_photos[5]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                </div>

            </div>
            <div class="max-w-[530px] px-[15px] mx-auto relative">
                <?php if ($hero_title) : ?>
                    <div class="text-center mb-[16px]">
                        <div class="font-poppins text-[42px] leading-[1.38] font-semibold brand-text-gradient text-transparent bg-clip-text">
                            <?= $hero_title; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($hero_leading) : ?>
                    <div class="text-center mb-[32px]">
                        <div class="font-poppins text-[16px] leading-[1.6] text-[#5A5A5A] opacity-80"><?= $hero_leading; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($hero_button_text) : ?>
                    <div class="text-center">
                        <button class="inline-block text-center py-[16px] px-[40px] rounded-[3px] border-[#3BA17C] border-solid border-2 bg-transparent group hover:bg-[#3BA17C] transition-colors duration-300 ease-in-out"
                                data-x-on:click="$lockbody($refs.modal);modal = true">
                            <span class="font-poppins text-[18px] leading-[1.5] text-[#3BA17C] font-semibold tracking-[0.14em] uppercase group-hover:text-white transition-colors duration-300 ease-in-out"><?= $hero_button_text; ?></span>
                        </button>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if ($hero_form_form) : ?>
        <div data-x-ref="modal" data-x-cloak data-x-transition.opacity="" data-x-show="modal"
             class="fixed inset-0 flex flex-col z-[501] overflow-auto">
            <div class="m-auto w-full max-w-[594px] px-[15px] box-border relative"
                 data-x-on:click.outside="$unlockbody($refs.modal);modal = false">
                <div class="p-[20px] pt-[50px] md:pt-[44px] md:p-[44px] rounded-[6px] bg-white relative">
                    <button class="absolute top-[20px] right-[20px] md:top-[53px] md:right-[44px] bg-transparent border-none p-0 text-[#ACACAC] hover:text-black transition-colors duration-300 ease-in-out"
                            data-x-on:click="$unlockbody($refs.modal);modal = false">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.17209 23.9997C0.940287 23.9997 0.713675 23.931 0.520921 23.8022C0.328167 23.6735 0.177931 23.4904 0.0892164 23.2763C0.000501992 23.0621 -0.0227054 22.8265 0.0225297 22.5991C0.0677649 22.3718 0.17941 22.1629 0.343344 21.999L21.9996 0.342791C22.2194 0.122993 22.5175 -0.000488281 22.8283 -0.000488281C23.1392 -0.000488281 23.4373 0.122993 23.6571 0.342791C23.8769 0.562589 24.0004 0.8607 24.0004 1.17154C24.0004 1.48238 23.8769 1.78049 23.6571 2.00029L2.00084 23.6565C1.89211 23.7655 1.76292 23.8519 1.6207 23.9108C1.47848 23.9697 1.32602 23.9999 1.17209 23.9997Z" fill="currentColor"></path>
                            <path d="M22.8283 23.9997C22.6743 23.9999 22.5219 23.9697 22.3797 23.9108C22.2374 23.8519 22.1083 23.7655 21.9995 23.6565L0.34328 2.00029C0.123481 1.78049 0 1.48238 0 1.17154C0 0.8607 0.123481 0.562589 0.34328 0.342791C0.563078 0.122993 0.861188 -0.000488281 1.17203 -0.000488281C1.48287 -0.000488281 1.78098 0.122993 2.00078 0.342791L23.657 21.999C23.821 22.1629 23.9326 22.3718 23.9778 22.5991C24.0231 22.8265 23.9999 23.0621 23.9112 23.2763C23.8224 23.4904 23.6722 23.6735 23.4795 23.8022C23.2867 23.931 23.0601 23.9997 22.8283 23.9997Z" fill="currentColor"></path>
                        </svg>
                    </button>
                    <?php if ($hero_form_title) : ?>
                        <div class="md:mb-[26px] text-center">
                            <div class="font-poppins text-transparent bg-clip-text brand-text-gradient text-[28px] leading-[1.5] font-semibold">
                                <?= $hero_form_title; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="[&_.hbspt-form_form_.hs-submit]:!mt-0 lg:[&_.hbspt-form_form_.hs-form-field]:!mt-[16px]">
                        <?= do_shortcode($hero_form_form); ?>
                    </div>
                </div>
            </div>
        </div>
        <div data-x-cloak data-x-transition.opacity="" data-x-show="modal"
             class="bg-[#393A40] bg-opacity-80 fixed inset-0 z-[500] backdrop-blur-[14px]"></div>
    <?php endif; ?>
</div>
<!--!hero-->