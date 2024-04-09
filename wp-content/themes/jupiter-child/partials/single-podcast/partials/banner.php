<?php

$bannerShow = get_field('banner_show');
$bannerImage = get_field('banner_image');
$bannerLink = get_field('banner_link');

?>

<?php if ($bannerShow): ?>
    <div class="w-[100%] max-w-[290px] [&_img]:max-w-[100%]">
        <a href="<?= $bannerLink ?>" title="Banner" target="_blank">
            <img src="<?= $bannerImage['url'] ?>" alt="Banner">
        </a>
    </div>
<?php endif; ?>