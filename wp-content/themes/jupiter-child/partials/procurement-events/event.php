<?php

$event = $args['event'] ? $args['event'] : [];

?>

<div class="mb-[20px] sm:mb-[40px] after:content-[''] after:block after:clear-both after:invisible after:overflow-hidden after:w-0 after:h-0 [&_a]:text-[#005E6B] [&_p]:text-[#393A40] [&_li]:text-[#393A40] [&_a]:font-[600]">
    <?php if (isset($event['image']['url']) && !empty($event['image']['url'])): ?>
        <div class="mb-[20px]">
            <img
                src="<?= $event['image']['url'] ?>"
                alt="<?= $event['title'] ? strip_tags($event['title']) : '' ?>"
                class="max-w-[210px] w-[100%]"
            />
        </div>
    <?php endif; ?>

    <?php if (isset($event['title']) && !empty($event['title'])): ?>
        <?= $event['title'] ?>
    <?php endif; ?>

    <?php if (isset($event['description']) && !empty($event['description'])): ?>
        <div><?= $event['description'] ?></div>
    <?php endif; ?>
</div>
