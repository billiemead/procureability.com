<?php $reasons_to_join_title = get_field('reasons_to_join_title'); ?>
<?php $reasons_to_join_leading = get_field('reasons_to_join_leading'); ?>
<?php $reasons_to_join_background_image = get_field('reasons_to_join_background_image'); ?>
<?php $reasons_to_join = get_field('reasons_to_join'); ?>
<?php $reasons_to_join_contact_card = get_field('contact_card'); ?>

<div class="relative" data-x-data="rtjCards">
    <div class="hidden lg:block absolute inset-0 bg-no-repeat bg-[700px_auto] bg-[left_calc(50%+550px)_bottom]"
         style="background-image: url('<?= $reasons_to_join_background_image['url']; ?>')"></div>
    <section class="relative py-[48px] md:pt-[64px] md:pb-[15px] xl:py-[90px]">
        <div class="max-w-[636px] xl:max-w-[1200px] px-[34px] md:px-0 mx-auto">
            <div class="text-center mb-[20px] xl:mb-[16px]">
                <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] leading-[1.4] md:text-[36px] md:leading-[1.5] font-[600]">
                    <?= $reasons_to_join_title; ?>
                </div>
            </div>
            <div class="text-center max-w-[870px] mx-auto">
                <div class="[&_p]:!font-poppins [&_p]:text-[#393A40] [&_p]:text-[16px] [&_p]:leading-[1.7]"><?= $reasons_to_join_leading; ?></div>
            </div>
            <?php if ($reasons_to_join) : ?>
                <div class="rtj-cards grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 mt-[25px] lg:mt-[50px]">
                    <?php foreach ($reasons_to_join as $index => $reason_to_join) : ?>
                        <div class="rtj-card-holder">
                            <div class="rtj-card pt-[100%]" data-x-data="rtjCard" data-x-on:mouseleave="toggle" data-x-on:mouseenter="toggle">
                                <div class="rtj-card-inner absolute inset-0" data-x-bind:class="{ 'active': active }">
                                    <!--front-->
                                    <div class="cursor-pointer absolute inset-0 rtj-card-front bg-center bg-cover overflow-hidden"
                                         data-x-bind:class="{'pointer-events-none' : active}"
                                         style="background-image: url('<?= $reason_to_join['image_front']['url']; ?>')">
                                        <div class="absolute inset-0 rtj-card-front-image-gradient"></div>
                                        <div class="absolute inset-0 p-[20px] flex flex-column justify-end">
                                            <span class="rtj-card-front-title-gradient bg-clip-text text-transparent font-poppins text-[18px] font-[600] leading-[1.45] uppercase tracking-[0.05em]"><?= $reason_to_join['title'] ?></span>
                                        </div>
                                        <div class="hidden absolute bottom-[-60px] right-0">
                                            <span class="rtj-card-front-index-gradient bg-clip-text text-transparent text-poppins text-[160px] leading-[1.45] tracking-[0.05em] uppercase"><?= $index + 1; ?></span>
                                        </div>
                                    </div>
                                    <!--!front-->
                                    <!--back-->
                                    <div class="absolute inset-0 bg-[#e5f4f7] rtj-card-back p-[30px] overflow-hidden">
                                        <div class="relative z-20 w-full h-full">
                                            <div class="mb-[12px]">
                                                <span class="text-[#009DB7] font-poppins text-[18px] leading-[1.45] font-[600] tracking-[0.05em] uppercase"><?= $reason_to_join['title'] ?></span>
                                            </div>
                                            <div class="mb-[8px]">
                                                <span class="font-poppins text-[14px] leading-[1.7] text-[#61636B] opacity-80"><?= $reason_to_join['excerpt']; ?></span>
                                            </div>
                                            <div>
                                                <button class="bg-transparent p-0 border-0 text-[#61636B] text-[14px] leading-[1.5] font-[500] transition-opacity hover:opacity-70"
                                                        data-x-on:click="handleCardClick(<?= $index; ?>)">Read
                                                    More
                                                </button>
                                            </div>
                                        </div>
                                        <div class="absolute z-10 bottom-[-60px] right-0 opacity-20">
                                            <span class="rtj-card-back-index-gradient bg-clip-text text-transparent text-poppins text-[160px] leading-[1.45] tracking-[0.05em] uppercase"><?= $index + 1; ?></span>
                                        </div>
                                    </div>
                                    <!--!back-->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <?php if ($reasons_to_join_contact_card) : ?>
                        <div class="rtj-card-holder">
                            <div class="pt-[100%] relative">
                                <div class="absolute inset-0 bg-center bg-no-repeat bg-cover"
                                     style="background-image: url('<?= $reasons_to_join_contact_card['image']['url'] ?>')">
                                    <div class="absolute inset-0 py-[50px] px-[40px] bg-[#E5F5F7] flex flex-col justify-center bg-opacity-95">
                                        <?php if ($reasons_to_join_contact_card['title']) : ?>
                                            <div class="mb-[24px] text-center">
                                                <span class="font-poppins text-[#393A40] text-[32px] leading-[1.3] tracking-[0.05em] font-[600] uppercase"><?= $reasons_to_join_contact_card['title'] ?></span>
                                            </div>
                                        <?php endif; ?>
                                        <?php if ($reasons_to_join_contact_card['button']) : ?>
                                            <div>
                                                <a href="<?= $reasons_to_join_contact_card['button']['url']; ?>"
                                                   class="block py-[12px] px-[12px] rounded-[3px] brand-button-gradient rounded-[3px] group relative text-center"
                                                >
                                                    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
                                                         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"></div>
                                                    <span class="relative font-poppins text-white text-[18px] leading-[1.51] font-[600] tracking-[0.1em] uppercase"><?= $reasons_to_join_contact_card['button']['title']; ?></span>
                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php if ($reasons_to_join) : ?>
        <div data-x-cloak data-x-transition:enter.opacity data-x-transition:leave.opacity data-x-transition:enter.duration.400ms
             data-x-transition:leave.duration.500ms data-x-show="modal" class="fixed inset-0 flex flex-col z-[501] overflow-auto">
            <button class="hidden md:block absolute bg-transparent border-0 p-0 top-[20px] right-[20px] z-[502]">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.17209 23.9997C0.940287 23.9997 0.713675 23.931 0.520921 23.8022C0.328167 23.6735 0.177931 23.4904 0.0892164 23.2763C0.000501992 23.0621 -0.0227054 22.8265 0.0225297 22.5991C0.0677649 22.3718 0.17941 22.1629 0.343344 21.999L21.9996 0.342791C22.2194 0.122993 22.5175 -0.000488281 22.8283 -0.000488281C23.1392 -0.000488281 23.4373 0.122993 23.6571 0.342791C23.8769 0.562589 24.0004 0.8607 24.0004 1.17154C24.0004 1.48238 23.8769 1.78049 23.6571 2.00029L2.00084 23.6565C1.89211 23.7655 1.76292 23.8519 1.6207 23.9108C1.47848 23.9697 1.32602 23.9999 1.17209 23.9997Z"
                          fill="white"/>
                    <path d="M22.8283 23.9997C22.6743 23.9999 22.5219 23.9697 22.3797 23.9108C22.2375 23.8519 22.1083 23.7655 21.9995 23.6565L0.34328 2.00029C0.123481 1.78049 0 1.48238 0 1.17154C0 0.8607 0.123481 0.562589 0.34328 0.342791C0.563078 0.122993 0.861188 -0.000488281 1.17203 -0.000488281C1.48287 -0.000488281 1.78098 0.122993 2.00078 0.342791L23.657 21.999C23.821 22.1629 23.9326 22.3718 23.9778 22.5991C24.0231 22.8265 23.9999 23.0621 23.9112 23.2763C23.8224 23.4904 23.6722 23.6735 23.4795 23.8022C23.2867 23.931 23.0601 23.9997 22.8283 23.9997V23.9997Z"
                          fill="white"/>
                </svg>
            </button>
            <div class="m-auto w-full max-w-[1320px] px-[15px] md:px-[60px] box-border relative" >
                <div data-x-on:click.outside="toggleModal" class="overflow-hidden rounded-[5px] bg-white md:bg-transparent shadow-[0px_3px_20px_rgba(57,58,64,0.1)] relative z-10">
                    <div id="reasonsToJoin" class="swiper relative">
                        <div class="swiper-wrapper">
                            <?php foreach ($reasons_to_join as $index => $reason_to_join) : ?>
                                <div class="swiper-slide !h-[unset]">
                                    <div class="lg:grid lg:grid-cols-[420px_auto] lg:min-h-[630px] h-full">
                                        <div class="bg-center bg-cover relative hidden md:!block"
                                             style="background-image: url('<?= $reason_to_join['image_modal_window']['url']; ?>')">
                                            <div class="absolute bottom-[-90px] right-[-10px]">
                                                <span class="bg-clip-text text-transparent rtj-modal-index-gradient font-poppins text-[326px] leading-[1.45] tracking-[0.05em] uppercase"><?= $index + 1; ?></span>
                                            </div>
                                        </div>
                                        <div class="pt-[50px] pb-[20px] px-[20px] lg:py-[60px] lg:pl-[60px] lg:pr-[80px] md:bg-white">
                                            <div class="mb-[8px] lg:pr-[100px]">
                                                <span class="bg-clip-text text-transparent rtj-modal-title-gradient font-poppins text-[28px] leading-[1.5] font-[600]"><?= $reason_to_join['title']; ?></span>
                                            </div>
                                            <div class="rtj-modal-content">
                                                <?= $reason_to_join['content']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="text-center md:absolute md:top-[40px] md:right-[40px] z-10 pb-[20px] md:pb-0">
                            <div class="inline-grid grid-cols-[40px_40px] gap-[16px]">
                                <button id="reasonsToJoinSliderNavigationPrev"
                                        class="[&.swiper-button-disabled]:opacity-50 w-[40px] h-[40px] rounded-full bg-transparent p-0 border-[rgba(96,96,96,0.3)] border-solid flex justify-center items-center text-[#414141] hover:[&:not(.swiper-button-disabled)]:text-[#00A2B7] hover:[&:not(.swiper-button-disabled)]:border-[#00A2B7] transition-all">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.84375 14.667L1.17602 7.99926L7.84375 1.33153" stroke="currentColor"
                                              stroke-width="1.33355" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <button id="reasonsToJoinSliderNavigationNext"
                                        class="[&.swiper-button-disabled]:opacity-50 w-[40px] h-[40px] rounded-full bg-transparent p-0 border-[rgba(96,96,96,0.3)] border-solid flex justify-center items-center text-[#414141] hover:[&:not(.swiper-button-disabled)]:text-[#00A2B7] hover:[&:not(.swiper-button-disabled)]:border-[#00A2B7] transition-all">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1451_19165)">
                                            <path d="M6.15625 14.667L12.824 7.99926L6.15625 1.33153"
                                                  stroke="currentColor"
                                                  stroke-width="1.33355" stroke-linecap="round"
                                                  stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1451_19165">
                                                <rect width="16" height="16" fill="white"
                                                      transform="matrix(1 1.73869e-07 1.75817e-07 -1 0 16)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-[5px] rtj-modal-decoration-line-gradient z-20"></div>
                </div>
                <button class="absolute top-[30px] right-[40px] md:hidden bg-transparent border-0 p-0 z-20">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.17209 23.9997C0.940287 23.9997 0.713675 23.931 0.520921 23.8022C0.328167 23.6735 0.177931 23.4904 0.0892164 23.2763C0.000501992 23.0621 -0.0227054 22.8265 0.0225297 22.5991C0.0677649 22.3718 0.17941 22.1629 0.343344 21.999L21.9996 0.342791C22.2194 0.122993 22.5175 -0.000488281 22.8283 -0.000488281C23.1392 -0.000488281 23.4373 0.122993 23.6571 0.342791C23.8769 0.562589 24.0004 0.8607 24.0004 1.17154C24.0004 1.48238 23.8769 1.78049 23.6571 2.00029L2.00084 23.6565C1.89211 23.7655 1.76292 23.8519 1.6207 23.9108C1.47848 23.9697 1.32602 23.9999 1.17209 23.9997Z"
                              fill="#61636B"/>
                        <path d="M22.8283 23.9997C22.6743 23.9999 22.5219 23.9697 22.3797 23.9108C22.2375 23.8519 22.1083 23.7655 21.9995 23.6565L0.34328 2.00029C0.123481 1.78049 0 1.48238 0 1.17154C0 0.8607 0.123481 0.562589 0.34328 0.342791C0.563078 0.122993 0.861188 -0.000488281 1.17203 -0.000488281C1.48287 -0.000488281 1.78098 0.122993 2.00078 0.342791L23.657 21.999C23.821 22.1629 23.9326 22.3718 23.9778 22.5991C24.0231 22.8265 23.9999 23.0621 23.9112 23.2763C23.8224 23.4904 23.6722 23.6735 23.4795 23.8022C23.2867 23.931 23.0601 23.9997 22.8283 23.9997V23.9997Z"
                              fill="#61636B"/>
                    </svg>
                </button>
            </div>
        </div>
        <div data-x-cloak data-x-transition.opacity data-x-show="modal"
             class="bg-[#393A40] bg-opacity-80 fixed inset-0 z-[500]"></div>
    <?php endif; ?>
</div>