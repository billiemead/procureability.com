<ul class="!m-0 list-none flex">
    <?php foreach ($args['socials'] as $social) : ?>
        <li class="!ml-0 !my-0 !mr-[24px] !last:mr-0">
            <a target="<?= $social['link']['target'] ?: '_self'; ?>"
               class="block [&_svg]:block text-white hover:text-black"
               aria-label="Social Icon"
               href="<?= $social['link']['url']; ?>">
                <?= file_get_contents($social['icon']['url']); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>