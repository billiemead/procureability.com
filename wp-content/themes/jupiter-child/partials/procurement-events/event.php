<?php

$event = $args['event'] ? $args['event'] : [];

?>

<div class="mb-[40px] after:content-[''] after:block after:clear-both after:invisible after:overflow-hidden after:w-0 after:h-0">
    <?php if (isset($event['image']['url']) && !empty($event['image']['url'])): ?>
        <div class="mb-[20px]">
            <img
                src="<?= $event['image']['url'] ?>"
                alt="<?= $event['title'] ? strip_tags($event['title']) : '' ?>"
                class="max-w-[100%]"
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
