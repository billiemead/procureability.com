<?php

$sidebarImage = get_field('sidebar_image');

?>

<div class="mt-[20px] mb-[35px] top-[90px]" style="position: sticky;">
    <?php if ($sidebarImage): ?>
        <div class="open-event-page-popup cursor-pointer">
            <figure>
                <img class="max-w-[100%]" src="<?= $sidebarImage['url'] ?>" alt="Sidebar Banner">
            </figure>
        </div>
    <?php endif; ?>
</div>
