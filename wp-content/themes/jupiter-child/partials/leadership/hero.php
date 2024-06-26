<?php $hero_quote = get_field('hero_quote'); ?>
<?php $hero_quote_author = get_field('hero_quote_author'); ?>
<?php $hero_quote_author_photo = get_field('hero_quote_author_photo'); ?>
<?php $leadership_photos = get_query_var('teamMembersPhotos'); ?>

<section
        class="pt-[50px] pb-[50px] lg:pt-[80px] lg:pb-[120px] bg-[#F7F9FB] overflow-hidden bg-no-repeat bg-cover sm:bg-contain bg-right"
        style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/pages/leadership/triangle-blue.png')">
    <div class="max-w-[1200px] px-[15px] mx-auto">
        <div class="relative flex flex-col lg:flex-row">
            <div class="w-[100%] lg:w-[56%] mb-[30px] lg:mb-0">
                <?php if ($hero_quote) : ?>
                    <div class="mb-[29px]">
                        <div class="pl-[40px] font-poppins text-[#393A40] text-[24px] md:text-[26px] leading-[1.55] font-medium">
                        <span class="relative lg:!absolute lg:left-0 lg:top-[-7px]">
                            <svg class="w-[30px] h-auto" viewBox="0 0 34 28" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.45333 27.1969C5.35708 27.1969 3.57139 26.4834 2.09625 25.0563C0.698749 23.55 0 21.7266 0 19.5861C0 18.3176 0.232917 17.0888 0.69875 15.8996C1.24222 14.7104 2.05743 13.2834 3.14437 11.6185L10.4812 0.796875L15.1396 3.88877L9.43312 12.8077C10.8306 13.0455 12.0728 13.7987 13.1598 15.0671C14.2467 16.2563 14.7902 17.7626 14.7902 19.5861C14.7902 21.7266 14.0526 23.55 12.5775 25.0563C11.18 26.4834 9.47194 27.1969 7.45333 27.1969ZM25.9138 27.1969C23.8175 27.1969 22.0318 26.4834 20.5567 25.0563C19.1592 23.55 18.4604 21.7266 18.4604 19.5861C18.4604 18.3176 18.6933 17.0888 19.1592 15.8996C19.7027 14.7104 20.5179 13.2834 21.6048 11.6185L28.9417 0.796875L33.6 3.88877L27.8936 12.8077C29.2911 13.0455 30.5333 13.7987 31.6202 15.0671C32.7072 16.2563 33.2506 17.7626 33.2506 19.5861C33.2506 21.7266 32.5131 23.55 31.0379 25.0563C29.6404 26.4834 27.9324 27.1969 25.9138 27.1969Z"
                                      fill="#B9E1E8"/>
                            </svg>
                        </span>
                            <span><?= $hero_quote; ?></span>
                            <span class="relative top-[13px] left-[3px]">
                                <svg class="w-[30px] h-auto" viewBox="0 0 34 27" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.3455 0.49844C28.4417 0.49844 30.2274 1.21195 31.7026 2.63898C33.1001 4.14528 33.7988 5.96871 33.7988 8.10924C33.7988 9.37772 33.5659 10.6065 33.1001 11.7957C32.5566 12.9849 31.7414 14.4119 30.6545 16.0768L23.3176 26.8984L18.6593 23.8065L24.3657 14.8876C22.9682 14.6498 21.726 13.8966 20.639 12.6282C19.5521 11.439 19.0086 9.93267 19.0086 8.10924C19.0086 5.96871 19.7462 4.14528 21.2213 2.63898C22.6188 1.21195 24.3269 0.49844 26.3455 0.49844ZM7.88507 0.49844C9.98132 0.49844 11.767 1.21195 13.2421 2.63898C14.6396 4.14528 15.3384 5.96871 15.3384 8.10924C15.3384 9.37772 15.1055 10.6065 14.6396 11.7957C14.0962 12.9849 13.281 14.4119 12.194 16.0768L4.85715 26.8984L0.198826 23.8065L5.90528 14.8876C4.50778 14.6498 3.26556 13.8966 2.17861 12.6282C1.09167 11.439 0.548199 9.93267 0.548199 8.10924C0.548199 5.96871 1.28577 4.14528 2.7609 2.63898C4.15841 1.21195 5.86646 0.49844 7.88507 0.49844Z"
                                          fill="#B9E1E8"/>
                                </svg>
                            </span>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($hero_quote_author) : ?>
                    <div class="pl-[40px] text-right lg:!text-left">
                        <div class="font-poppins text-[18px] md:text-[22px] leading-normal text-[#393A40]"><?= $hero_quote_author; ?></div>
                    </div>
                <?php endif; ?>
            </div>

            <div class="w-[100%] lg:w-[44%]">
                <div id="bubbles" class="hidden lg:block">
                    <div class="max-w-[528px] mx-auto relative flex">
                        <div class="bubble bg-center bg-no-repeat bg-cover inline-block relative rounded-full border-4 border-[#F7F9FA] border-solid basis-[154px] shrink-0 grow-0 h-[154px] z-10 top-0 left-0">
                            <div data-active="true" data-image="<?= $leadership_photos[0]; ?>"
                                 class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                            </div>
                            <div data-active="false"
                                 class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                        </div>
                        <div class="bubble bg-center bg-no-repeat bg-cover inline-block relative rounded-full border-4 border-[#F7F9FA] border-solid basis-[169px] shrink-0 grow-0 h-[169px] top-[-7px] left-[-23px]">
                            <div data-active="true" data-image="<?= $leadership_photos[1]; ?>"
                                 class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                            </div>
                            <div data-active="false"
                                 class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                        </div>
                        <div class="bubble bg-center bg-no-repeat bg-cover inline-block relative rounded-full border-4 border-[#F7F9FA] border-solid basis-[132px] shrink-0 grow-0 h-[132px] z-10 top-[51px] left-[-60px]">
                            <div data-active="true" data-image="<?= $leadership_photos[2]; ?>"
                                 class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                            </div>
                            <div data-active="false"
                                 class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                        </div>
                        <div class="bubble bg-center bg-no-repeat bg-cover inline-block relative rounded-full border-4 border-[#F7F9FA] border-solid basis-[150px] shrink-0 grow-0 h-[150px] top-[-26px] left-[-149px]">
                            <div data-active="true" data-image="<?= $leadership_photos[3]; ?>"
                                 class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                            </div>
                            <div data-active="false"
                                 class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                        </div>
                    </div>
                    <div class="max-w-[528px] mx-auto relative flex">
                        <div class="bubble bg-center bg-no-repeat bg-cover inline-block relative rounded-full border-4 border-[#F7F9FA] border-solid basis-[159px] shrink-0 grow-0 h-[159px] top-[-24px] left-[62px]">
                            <div data-active="true" data-image="<?= $leadership_photos[4]; ?>"
                                 class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                            </div>
                            <div data-active="false"
                                 class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                        </div>
                        <div class="bubble bg-center bg-no-repeat bg-cover inline-block relative rounded-full border-4 border-[#F7F9FA] border-solid basis-[118px] shrink-0 grow-0 h-[118px] z-10 top-[-8px] left-[33px]">
                            <div data-active="true" data-image="<?= $leadership_photos[5]; ?>"
                                 class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                            </div>
                            <div data-active="false"
                                 class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                        </div>
                        <div class="bubble bg-center bg-no-repeat bg-cover inline-block relative rounded-full border-4 border-[#F7F9FA] border-solid basis-[143px] shrink-0 grow-0 h-[143px] top-[12px] left-[0px]">
                            <div data-active="true" data-image="<?= $leadership_photos[6]; ?>"
                                 class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                            </div>
                            <div data-active="false"
                                 class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                        </div>
                        <div class="bubble bg-center bg-no-repeat bg-cover inline-block relative rounded-full border-4 border-[#F7F9FA] border-solid basis-[123px] shrink-0 grow-0 h-[123px] top-[-58px] left-[-38px]">
                            <div data-active="true" data-image="<?= $leadership_photos[7]; ?>"
                                 class="opacity-100 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full">
                            </div>
                            <div data-active="false"
                                 class="opacity-0 transition-opacity duration-1000 absolute inset-0 bg-cover bg-center bg-no-repeat rounded-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>