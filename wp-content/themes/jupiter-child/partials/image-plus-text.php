<div class="img-plus-txt <?= $args['reverse'] ? 'img-plus-txt_reverse' : '' ?>">
    <div class="img-plus-txt__image">
        <img src="<?= $fields['image']['url'] ?>" alt="<?= $fields['image']['alt'] ?>">
    </div>

    <div class="img-plus-txt__desc" <?= 'style="background-color: '. $args['bg'] . '"' ?>>
        <h2 class="img-plus-txt__title"><?= $fields['title'] ?></h2>

        <div class="img-plus-txt__text <?= $args['color'] ? 'img-plus-txt__text_'.$args['color'] : '' ?>"><?php echo $fields['text'] ?></div>

        <?php if(!empty($fields['btn'])) : ?>
            <div class="img-plus-txt__btn-w">
                <a href="<?= $fields['btn']['link']; ?>" class="img-plus-txt__btn"><?= $fields['btn']['text']; ?></a>
            </div>
        <?php endif; ?>
    </div>
</div>