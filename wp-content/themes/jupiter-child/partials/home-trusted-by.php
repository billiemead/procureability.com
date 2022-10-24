<section>
    <div class="md:flex">
        <div class="hidden md:flex md:w-1/5 box-border px-[15px] items-center bg-[#f7941f]">
            <div>
                <img class="block max-w-full"
                     src="https://procureability.com/wp-content/uploads/2020/06/trustedby-300x300.png" alt="">
            </div>
        </div>
        <div class="max-w-[430px] mx-auto md:max-w-full md:mx-0 md:w-4/5 box-border px-[15px] pt-[52px]">
            <div class="flex flex-wrap">
                <?php $clients = get_field('clients'); ?>
                <?php if ($clients) : ?>
                    <?php foreach ($clients as $client) : ?>
                        <div class="w-1/2 md:w-2/12 px-[15px] box-border">
                            <a class="block [&_img]:mx-auto mb-[10px] [&_img]:block [&_img]:max-w-full [&_img]:h-auto" href="<?= $client['link']['url']; ?>">
                                <?= wp_get_attachment_image($client['image']['ID']); ?>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>