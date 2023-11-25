<?php $map_title = get_field('map_title'); ?>
<?php $map_address = get_field('map_address'); ?>
<?php $map_email = get_field('map_email'); ?>
<?php $map_socials = get_field('map_socials'); ?>

<!--map-->
<section class="pb-[60px] md:py-[60px] relative">
    <div class="pt-[66.67%] !relative md:pt-0 md:!absolute md:inset-0">
        <iframe class="!absolute inset-0 md:!static md:inset-none" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7089.340846363897!2d-81.66357161314166!3d30.329325762853113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2f4304ee580a1ef7!2zMzDCsDE5JzQ1LjIiTiA4McKwMzknMzUuMiJX!5e0!3m2!1sen!2sua!4v1675194677408!5m2!1sen!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="max-w-[1200px] mx-auto relative pointer-events-none">
        <div class="md:max-w-[300px] md:px-[15px] pointer-events-auto">
            <div class="pt-[32px] px-[32px] pb-[43px] bg-white md:rounded-[6px] md:shadow-[0px_4px_24px_rgba(0,0,0,0.1)] before:content-[''] before:h-[4px] before:block before:absolute before:top-0 before:left-0 before:w-full before:bg-[#0098AE] before:opacity-40 relative overflow-hidden">
                <?php if ($map_title) : ?>
                    <div class="mb-[16px]">
                        <div class="font-poppins text-[14px] leading-[1.5] text-[#0098AE] font-semibold tracking-[3px] uppercase">
                            <?= $map_title; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($map_address) : ?>
                    <div class="mb-[24px]">
                        <div class="font-poppins text-[16px] leading-[1.6] text-[#5A5A5A]"><?= $map_address; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($map_email) : ?>
                    <div>
                        <a class="font-poppins text-[14px] leading-[1.6] text-[#5A5A5A] !underline font-medium"
                           href="mailto:<?= $map_email; ?>"><?= $map_email; ?></a>
                    </div>
                <?php endif; ?>
                <?php if ($map_socials) : ?>
                    <div class="mt-[36px]">
                        <ul class="list-none m-0 flex gap-[16px]">
                            <?php foreach ($map_socials as $map_social) : ?>
                                <li class="m-0">
                                    <a class="hover:opacity-70 duration-700 ease-in-out transition-opacity opacity-100"
                                       target="_blank"
                                       href="<?= $map_social['url']; ?>">
                                        <?php $auth = base64_encode("procureabi2dev:Braveheart");
                                        $context = stream_context_create([
                                            "http" => [
                                                "header" => "Authorization: Basic $auth"
                                            ]
                                        ]); ?>
                                        <?= file_get_contents($map_social['icon']['url'], false, $context); ?>
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