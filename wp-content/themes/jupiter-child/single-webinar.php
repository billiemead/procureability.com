<?php

$videoLink = get_field('video_link');
$videoPoster = get_field('video_poster');

$subscribeTitle = get_field('subscribe_title');
$subscribeButtonText = get_field('subscribe_button_text');
$subscribeButtonUrl = get_field('subscribe_button_url');

?>

<?php get_header(); ?>
    <section class="pt-[40px] pb-[110px] lg:pt-[60px]">
        <div class="max-w-[960px] px-[20px] mx-auto overflow-hidden">
            <h1 class="text-[36px] text-[#404040] text-left font-semibold"><?= get_the_title() ?></h1>

            <div class="content mb-[20px]">
                <?php if ($videoPoster): ?>
                    <div class="inline w-[450px] max-w-[100%] relative float-right ml-[1.5em] mb-[1.5em]">
                        <div
                                class="absolute top-0 left-0 w-[100%] pb-[56.25%] overflow-hidden bg-no-repeat bg-center bg-cover"
                                style="background-image: url('<?= $videoPoster['url'] ?>')"
                        ></div>
                    </div>
                <?php endif; ?>

                <?= get_the_content() ?>
                <div class="block hidden clear-both overflow-hidden w-0 h-0"></div>
            </div>

            <div class="text-center">
                <?php if ($subscribeTitle): ?>
                    <h3 class="text-[24px] text-[#404040] font-semibold"><?= $subscribeTitle ?></h3>
                <?php endif; ?>

                <?php if ($subscribeButtonText && $subscribeButtonUrl): ?>
                    <p>
                        <a
                                href="<?= $subscribeButtonUrl ?>"
                                title="<?= $subscribeButtonText ?>"
                                target="_blank"
                                class="text-[14px] text-[#57ac85] font-roboto py-[9px] px-[18px] my-[25px] mx-0 bg-transparent rounded-0 border-2 border-solid border-[#57ac85] inline-block cursor-pointer hover:bg-[#57ac85] hover:text-[#ffffff]"
                        ><?= $subscribeButtonText ?></a>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
