<?php $clients = get_field('clients'); ?>
<?php $trusted_by_image = get_field('trusted_by_image'); ?>
<?php if ($clients) : ?>
    <section>
        <div class="md:flex">
            <?php if ($trusted_by_image) : ?>
                <div class="hidden md:flex md:w-1/5 box-border px-[15px] items-center bg-[#f7941f]">
                    <div class="[&_img]:block [&_img]:max-w-full">
                        <?= wp_get_attachment_image($trusted_by_image['ID'], 'portfolio-x_x'); ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="max-w-[430px] mx-auto md:max-w-full md:mx-0 md:w-4/5 box-border px-[15px] pt-[52px]">
                <div class="flex flex-wrap">
                    <?php foreach ($clients as $client) : ?>
                        <div class="w-1/2 md:w-2/12 px-[15px] box-border">
                            <a class="block [&_img]:mx-auto mb-[10px] [&_img]:block [&_img]:max-w-full [&_img]:h-auto"
                               target="_blank" href="<?= $client['link']['url']; ?>">
                                <?= wp_get_attachment_image($client['image']['ID']); ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>