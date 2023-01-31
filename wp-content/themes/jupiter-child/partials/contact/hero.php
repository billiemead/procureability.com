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
                <div class="bubble absolute w-[90px] h-[90px] rounded-full top-[-10px] left-[200px] overflow-hidden">
                    <div data-active="true" data-image="<?= $leadership_photos[0]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="bubble absolute w-[90px] h-[90px] rounded-full top-[-20px] right-0 overflow-hidden">
                    <div data-active="true" data-image="<?= $leadership_photos[1]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="bubble absolute w-[160px] h-[160px] rounded-full top-[38px] left-[-20px] overflow-hidden">
                    <div data-active="true" data-image="<?= $leadership_photos[2]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="bubble absolute w-[120px] h-[120px] rounded-full top-[34px] right-[160px] overflow-hidden">
                    <div data-active="true" data-image="<?= $leadership_photos[3]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="bubble absolute w-[130px] h-[130px] rounded-full top-[155px] left-[195px] overflow-hidden">
                    <div data-active="true" data-image="<?= $leadership_photos[4]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="bubble absolute w-[140px] h-[140px] rounded-full top-[150px] right-0 overflow-hidden">
                    <div data-active="true" data-image="<?= $leadership_photos[5]; ?>"
                         class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
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
                        <svg width="28" height="26" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <line x1="26.7078" y1="0.707107" x2="2.70704" y2="24.7079" stroke="currentColor"
                                  stroke-width="2"/>
                            <line x1="25.2936" y1="24.708" x2="1.29283" y2="0.707221" stroke="currentColor"
                                  stroke-width="2"/>
                        </svg>
                    </button>
                    <?php if ($hero_form_title) : ?>
                        <div class="md:mb-[26px] text-center">
                            <div class="font-poppins text-transparent bg-clip-text brand-text-gradient text-[28px] leading-[1.5] font-semibold">
                                <?= $hero_form_title; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="[&_.hbspt-form_form_.hs-submit]:!mt-0">
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