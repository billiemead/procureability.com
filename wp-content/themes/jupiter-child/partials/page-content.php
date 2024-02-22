<?php $custom_class = $args[0] ? $args[0] : ''; ?>
<section class="section section--content <?php echo $custom_class; ?>">
    <div class="section-container">
        <h1 class="section-h1"><?= get_the_title(); ?></h1>
        <div class="cms-content">
            <?php the_content(); ?>
        </div>
    </div>
</section>
