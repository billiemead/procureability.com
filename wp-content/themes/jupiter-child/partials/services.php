<div class="services">
    <div class="services__list d-flex">
        <?php foreach ($args as $item) : ?>
            <div class="services__item flex-shrink-0">
                <div class="services__image">
                    <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                </div>

                <div class="services__text"><?= $item['text'] ?></div>

                <div class="services__btn-w">
                    <a href="<?= $item['btn_link'] ?>" class="services__btn"><?= $item['btn_txt'] ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>