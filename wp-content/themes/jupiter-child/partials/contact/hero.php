<?php $hero_title = get_field('hero_title'); ?>
<?php $hero_leading = get_field('hero_leading'); ?>
<?php $hero_button = get_field('hero_button'); ?>
<?php $leadership_photos = get_query_var('teamMembersPhotos'); ?>

<!--hero-->
<div data-x-data="{modal: false}">
    <section class="pt-[88px] pb-[100px]">
        <div class="max-w-[1200px] mx-auto relative">
            <?php if ($leadership_photos && count($leadership_photos) >= 6) : ?>
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
            <?php endif; ?>
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
                <?php if ($hero_button) : ?>
                    <div class="text-center">
                        <a class="inline-block text-center py-[16px] px-[40px] rounded-[3px] border-[#3BA17C] border-solid border-2 bg-transparent group hover:bg-[#3BA17C] transition-colors duration-300 ease-in-out"
                           href="<?= $hero_button['url']; ?>"
                           target="<?= $hero_button['target'] ?: '_self'; ?>"
                        >
                            <span class="font-poppins text-[18px] leading-[1.5] text-[#3BA17C] font-semibold tracking-[0.14em] uppercase group-hover:text-white transition-colors duration-300 ease-in-out"><?= $hero_button['title']; ?></span>
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<!--!hero-->