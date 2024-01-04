<?php

$events = get_field('events');

?>

<?php if ($events): ?>
    <?php foreach ($events as $event): ?>
        <?php get_template_part('partials/procurement-events/event', null, [
                'event' => $event
        ]); ?>
    <?php endforeach; ?>
<?php endif; ?>
