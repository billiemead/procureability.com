<?php $map_title = get_field('map_title'); ?>
<?php $map_address = get_field('map_address'); ?>
<?php $map_email = get_field('map_email'); ?>
<?php $map_socials = get_field('map_socials'); ?>

<!--map-->
<section class="py-[60px] relative">
    <div class="absolute inset-0">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Jacksonville,%20FL,%2032202+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            <a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe>
    </div>
    <div class="max-w-[1200px] mx-auto relative pointer-events-none">
        <div class="max-w-[300px] px-[15px] pointer-events-auto">
            <div class="pt-[32px] px-[32px] pb-[43px] bg-white rounded-[6px] shadow-[0px_4px_24px_rgba(0,0,0,0.1)]">
                <?php if ($map_title) : ?>
                    <div class="mb-[16px]">
                        <div class="font-poppins text-[14px] leading-[1.5] text-[#0098AE] font-semibold tracking-[3px] uppercase">
                            <?= $map_title; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($map_address) : ?>
                    <div class="mb-[24px]">
                        <div class="font-poppins text-[16px] leading-[1.6] color-[#5A5A5A]"><?= $map_address; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($map_email) : ?>
                    <div>
                        <a class="font-poppins text-[14px] leading-[1.6] text-[#5A5A5A] !underline font-medium"
                           href="mailto:<?= $map_email['url']; ?>"><?= $map_email['title']; ?></a>
                    </div>
                <?php endif; ?>
                <?php if ($map_socials) : ?>
                    <div class="mt-[36px]">
                        <ul class="list-none m-0 flex gap-[16px]">
                            <?php foreach ($map_socials as $map_social) : ?>
                                <li class="m-0">
                                    <a href="<?= $map_social['url']; ?>">
                                        <?= file_get_contents($map_social['icon']['url']); ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--!map-->