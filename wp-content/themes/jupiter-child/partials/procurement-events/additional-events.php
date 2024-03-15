<?php

$additionalEventTitle = get_field('additional_events_title');
$additionalEventText = get_field('additional_events_text');

?>

<div class="mb-[60px]">
    <?php if ($additionalEventTitle): ?>
        <h2 class="mb-[10px] text-[24px] text-[#005E6B] font-semibold "><?= $additionalEventTitle ?></h2>
    <?php endif; ?>

    <?php if ($additionalEventText): ?>
        <div class="after:content-[''] after:block after:clear-both after:invisible after:overflow-hidden after:w-0 after:h-0 [&_li]:text-[#393A40]">
            <?= $additionalEventText ?>
        </div>
    <?php endif; ?>
</div>