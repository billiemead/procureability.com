<div class="home-phases text-center">
    <div class="container">
        <h2 class="home-phases__title"><?= $args['title'] ?></h2>

        <?php if ($args['list']) : ?>
            <div class="home-phases__list d-flex">
                <?php foreach ($args['list'] as $item) : ?>
                    <div class="home-phases__item flex-shrink-0">
                        <div class="home-phases__icon">
                            <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                        </div>

                        <h3 class="home-phases__subtitle"><?= $item['title'] ?></h3>

                        <p class="home-phases__text"><?= $item['text'] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>
    </div>
</div>