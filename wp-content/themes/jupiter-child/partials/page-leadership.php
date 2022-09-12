<section class="leadership">
    <div class="leadership-container">
        <?php $leadership_section_title = get_field('leadership_title'); ?>
        <?php if ($leadership_section_title) : ?>
            <h2 class="leadership-title"><?= $leadership_section_title ?></h2>
        <?php endif; ?>

        <?php $leadership_people = get_field('leadership_people');
        if ($leadership_people): ?>
            <div class="leadership-persons">
                <?php foreach ($leadership_people as $key => $post_id):
                    $permalink = get_permalink($post_id);
                    $title = get_the_title($post_id);
                    $leadership_name = get_field('leadership_name', $post_id);
                    $leadership_title = get_field('leadership_title', $post_id);
                    ?>
                    <div class="leadership-person-item leadership-person-item__full">
                        <a
                                class="leadership-person"
                                data-fancybox="group"
                                data-src="#leader-<?= $post_id; ?>"
                                data-thumb="<?= get_the_post_thumbnail_url($post_id); ?>"
                                data-href="<?= $permalink; ?>"
                        >
                            <div class="leadership-person-photo-holder">
                                <div class="leadership-person-photo"
                                     style="background-image: url('<?= get_the_post_thumbnail_url($post_id) ?>')"></div>
                                <div class="leadership-person-photo-overlay">
                                </div>
                                <div class="leadership-person-photo-overlay-text-wrapper">
                                    <div class="leadership-person-photo-overlay-text">Click for bio</div>
                                </div>
                            </div>
                            <div class="leadership-person-name"><?= $leadership_name; ?></div>
                            <div class="leadership-person-position"><?= $leadership_title; ?></div>
                        </a>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($leadership_people as $key => $post_id):
                    $permalink = get_permalink($post_id);
                    $title = get_the_title($post_id);
                    $leadership_name = get_field('leadership_name', $post_id);
                    $leadership_title = get_field('leadership_title', $post_id);
                    ?>
                    <div class="leadership-person-item leadership-person-item__mobile">
                        <a
                                class="leadership-person"
                                data-thumb="<?= get_the_post_thumbnail_url($post_id); ?>"
                                href="<?= $permalink; ?>"
                                target="_blank"
                        >
                            <div class="leadership-person-photo-holder">
                                <div class="leadership-person-photo"
                                     style="background-image: url('<?= get_the_post_thumbnail_url($post_id) ?>')"></div>
                                <div class="leadership-person-photo-overlay">
                                </div>
                                <div class="leadership-person-photo-overlay-text-wrapper">
                                    <div class="leadership-person-photo-overlay-text">Click for bio</div>
                                </div>
                            </div>
                            <div class="leadership-person-name"><?= $leadership_name; ?></div>
                            <div class="leadership-person-position"><?= $leadership_title; ?></div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($leadership_people): ?>

            <?php foreach ($leadership_people as $key => $post_id):
                $permalink = get_permalink($post_id);
                $title = get_the_title($post_id);
                $leadership_name = get_field('leadership_name', $post_id);
                $leadership_title = get_field('leadership_title', $post_id);
                $leadership_bio = get_field('leadership_bio', $post_id);
                $leadership_casual_image = get_field('leadership_casual_image', $post_id);
                ?>
                <div
                        class="leadership-content"
                        style="display: none;"
                        id="leader-<?= $post_id; ?>"
                >
                    <?php if ($leadership_casual_image) : ?>
                        <img class="leadership-content-photo" src="<?= $leadership_casual_image; ?>"
                             alt="<?= $leadership_name; ?>">
                    <?php endif; ?>

                    <div class="leadership-content-text">
                        <div class="leadership-content-name"><strong><?= $leadership_name; ?></strong></div>
                        <div class="leadership-content-position"><strong><?= $leadership_title; ?></strong></div>

                        <?= apply_filters('the_content', $leadership_bio); ?>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</section>
