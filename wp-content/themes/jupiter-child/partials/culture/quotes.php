<?php $quotes_title = get_field('quotes_title'); ?>
<?php $quotes_quotes = get_field('quotes_quotes'); ?>

<section class="py-[40px] md:pt-[80px] md:pb-[88px] bg-[#F7F9FA]">
    <div class="max-w-[990px] mx-auto px-[34px]">
        <?php if ($quotes_title) : ?>
            <div class="mb-[24px] text-center">
                <div class="font-poppins brand-text-gradient text-transparent bg-clip-text text-[22px] md:text-[36px] leading-[1.3] tracking-[-0.02em] font-medium"><?= $quotes_title; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($quotes_quotes) : ?>
            <div class="space-y-[40px]">
                <?php foreach ($quotes_quotes as $quote) : ?>
                    <div class="px-[32px] md:px-[82px] py-[40px] bg-white grid md:odd:grid-cols-[auto_160px] md:even:grid-cols-[160px_auto] gap-[30px] md:gap-[64px] group border-t-[4px] border-solid border-[rgba(0,152,174,0.1)] rounded-[5px]">
                        <div class="order-2 md:group-[:nth-child(even)]:order-2 md:group-[:nth-child(odd)]:order-1">
                            <?php if ($quote['text']) : ?>
                                <div class="mb-[16px]">
                                    <div class="[&_p]:font-poppins [&_p]text-[16px] [&_p]leading-[1.65] [&_p]text-[#393A40] [&_p]:inline relative">
                                        <svg class="absolute left-[-28px]" width="22" height="16" viewBox="0 0 22 16"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                  d="M5.33997 15.9941C4.06998 15.9941 2.98814 15.5618 2.09445 14.6973C1.24779 13.7847 0.824463 12.68 0.824463 11.3832C0.824463 10.6147 0.965573 9.87024 1.24779 9.14979C1.57705 8.42933 2.07093 7.56479 2.72944 6.55615L7.17439 0L9.99659 1.87319L6.5394 7.2766C7.38606 7.42069 8.13864 7.87698 8.79715 8.64547C9.45567 9.36592 9.78492 10.2785 9.78492 11.3832C9.78492 12.68 9.33808 13.7847 8.44438 14.6973C7.59772 15.5618 6.56292 15.9941 5.33997 15.9941ZM16.524 15.9941C15.254 15.9941 14.1722 15.5618 13.2785 14.6973C12.4318 13.7847 12.0085 12.68 12.0085 11.3832C12.0085 10.6147 12.1496 9.87024 12.4318 9.14979C12.7611 8.42933 13.255 7.56479 13.9135 6.55615L18.3584 0L21.1806 1.87319L17.7234 7.2766C18.5701 7.42069 19.3227 7.87698 19.9812 8.64547C20.6397 9.36592 20.9689 10.2785 20.9689 11.3832C20.9689 12.68 20.5221 13.7847 19.6284 14.6973C18.7817 15.5618 17.7469 15.9941 16.524 15.9941Z"
                                                  fill="#0098AE" fill-opacity="0.5"/>
                                        </svg>
                                        <?= $quote['text']; ?>
                                        <svg class="relative top-[7px] left-[1px]" width="22" height="16"
                                             viewBox="0 0 22 16"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.5"
                                                  d="M16.5835 0.0029579C17.8535 0.00295801 18.9354 0.435231 19.829 1.29978C20.6757 2.21235 21.099 3.31705 21.099 4.61387C21.099 5.38236 20.9579 6.12683 20.6757 6.84728C20.3464 7.56774 19.8526 8.43229 19.1941 9.44092L14.7491 15.9971L11.9269 14.1239L15.3841 8.72047C14.5374 8.57638 13.7849 8.12009 13.1263 7.3516C12.4678 6.63115 12.1386 5.71857 12.1386 4.61387C12.1386 3.31705 12.5854 2.21235 13.4791 1.29977C14.3258 0.435231 15.3606 0.0029578 16.5835 0.0029579ZM5.3995 0.00295693C6.66949 0.00295704 7.75133 0.43523 8.64502 1.29977C9.49168 2.21235 9.91501 3.31705 9.91501 4.61387C9.91501 5.38236 9.7739 6.12683 9.49168 6.84728C9.16242 7.56774 8.66854 8.43228 8.01003 9.44092L3.56507 15.9971L0.742884 14.1239L4.20007 8.72047C3.35341 8.57638 2.60083 8.12009 1.94231 7.3516C1.2838 6.63115 0.954549 5.71857 0.954549 4.61387C0.954549 3.31705 1.4014 2.21235 2.29509 1.29977C3.14175 0.43523 4.17655 0.00295682 5.3995 0.00295693Z"
                                                  fill="#0098AE" fill-opacity="0.5"/>
                                        </svg>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div>
                                <?php if ($quote['author']) : ?>
                                    <span class="font-poppins text-[16px] leading-normal font-medium tracking-[-0.02em] text-[rgba(57,58,64,0.8)]"><?= $quote['author']; ?>
                                        </span>
                                <?php endif; ?>
                                <?php if ($quote['author'] && $quote['position']) : ?>
                                    <span class="inline-block mx-[12px] w-[1px] h-[20px] bg-[rgba(0,0,0,0.2)] align-middle"></span>
                                <?php endif; ?>
                                <?php if ($quote['position']) : ?>
                                    <span class="font-poppins text-[16px] leading-normal font-normal tracking-[-0.02em] text-[rgba(57,58,64,0.5)]"><?= $quote['position']; ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php if ($quote['picture']) : ?>
                            <div class="order-1 md:group-[:nth-child(even)]:order-1 md:group-[:nth-child(odd)]:order-2">
                                <?= wp_get_attachment_image($quote['picture']['ID'], 'full', false, array('class' => 'block rounded-full mx-auto max-w-[200px] w-full h-auto')); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>