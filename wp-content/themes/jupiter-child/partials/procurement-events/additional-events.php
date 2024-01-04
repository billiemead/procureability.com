<?php

$additionalEventTitle = get_field('additional_events_title');
$additionalEventText = get_field('additional_events_text');

?>

<div class="mb-[60px]">
    <?php if ($additionalEventTitle): ?>
        <h3 class="mb-[40px] text-[24px] text-[#404040] font-semibold"><?= $additionalEventTitle ?></h3>
    <?php endif; ?>

    <?php if ($additionalEventText): ?>
        <div class="after:content-[''] after:block after:clear-both after:invisible after:overflow-hidden after:w-0 after:h-0">
            <?= $additionalEventText ?>
        </div>
    <?php endif; ?>
</div>