<div class="fingertips-services d-flex">
    <div class="fingertips-services__left d-flex">
        <?php foreach ($args['images'] as $item) : ?>
            <a href="<?= $item['link'] ?>" class="fingertips-services__item vc_single_image-wrapper">
                <img src="<?= $item['image']['url'] ?>" alt="<?= $item['image']['alt'] ?>">
                <img src="<?= $item['image_on_hover']['url'] ?>" alt="<?= $item['image_on_hover']['alt'] ?>"
                     class="on-hover">
            </a>
        <?php endforeach; ?>
    </div>

    <div class="fingertips-services__right" style="background-image: url('<?= $args['right_image']['url'] ?>')"></div>
</div>