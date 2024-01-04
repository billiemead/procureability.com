<?php

$virtualEvents = get_field('virtual_events');

?>

<?php if ($virtualEvents): ?>
    <div class="mb-[30px] after:content-[''] after:block after:clear-both after:invisible after:overflow-hidden after:w-0 after:h-0">
        <h3 class="text-[24px] text-[#404040] font-semibold">Virtual Events</h3>
    </div>
    <?php foreach ($virtualEvents as $event): ?>
        <?php get_template_part('partials/procurement-events/event', null, [
            'event' => $event
        ]); ?>
    <?php endforeach; ?>
<?php endif; ?>
