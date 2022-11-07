<?php if(!empty($fields['list'])) : ?>
<div class="get-going">
    <div class="container">
        <h2 class="get-going__title text-center"><?= $fields['title'] ?></h2>
        <div class="get-going__list d-flex justify-content-between">
            <?php foreach ($fields['list'] as $item) : ?>
                <a href="<?= $item['link'] ?>" class="get-going__item d-flex align-items-center">
                    <div class="get-going__icon">
                        <img src="<?= $item['icon']['url'] ?>" alt="<?= $item['icon']['alt'] ?>">
                    </div>

                    <div class="get-going__name"><span><?= $item['title'] ?></span></div>
                </a>
            <?php endforeach; ?>
        </div>

        <div class="get-going__btn-w text-center">
            <a href="<?= $fields['btn_link'] ?>" class="get-going__btn"><?= $fields['btn_text'] ?></a>
        </div>
    </div>
</div>
<?php endif; ?>