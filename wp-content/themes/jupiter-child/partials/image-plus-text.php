<div class="img-plus-txt <?= $args['reverse'] ? 'img-plus-txt_reverse' : '' ?>">
    <div class="img-plus-txt__image">
        <img src="<?= $args['image']['url'] ?>" alt="<?= $args['image']['alt'] ?>">
    </div>

    <div class="img-plus-txt__desc" <?= 'style="background-color: '. $args['bg'] . '"' ?>>
        <h2 class="img-plus-txt__title"><?= $args['title'] ?></h2>

        <div class="img-plus-txt__text <?= $args['color'] ? 'img-plus-txt__text_'.$args['color'] : '' ?>"><?php echo $args['text'] ?></div>

        <?php if(!empty($args['btn'])) : ?>
            <div class="img-plus-txt__btn-w">
                <a href="<?= $args['btn']['link']; ?>" class="img-plus-txt__btn"><?= $args['btn']['text']; ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>