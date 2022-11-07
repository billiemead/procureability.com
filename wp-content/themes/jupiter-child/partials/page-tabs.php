<?php $tabs = get_field('tabs_tabs'); ?>
<?php $tabs_title = get_field('tabs_title'); ?>

<section class="pt-[25px] pb-[20px]">
    <div class="max-w-[930px] px-[15px] mx-auto">
        <?php if ($tabs_title) : ?>
            <div class="!text-[#404040] !text-[30px] [&_h2]:!font-[600] text-center mb-[39px]"><?= $tabs_title; ?></div>
        <?php endif; ?>
        <?php if ($tabs) : ?>
            <div class="flex" x-data="{active: 0}">
                <div class="mt-[20px] flex-initial shrink-0 hidden relative md:block space-y-[20px] mr-[-1px]">
                    <?php foreach ($tabs as $index => $tab) : ?>
                        <button class="block w-full py-[14px] px-[20px] border-solid border-t border-b border-l border-[#484152] !border-r-transparent bg-[#50485b] hover:bg-[#413a4a] text-white bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,.01)] ease-in-out transition-all duration-[.2s] [&.active]:bg-[#f8f8f8] [&.active]:text-[#666] [&.active]:border-[#f0f0f0] [&.active]:bg-r-transparent"
                                x-on:click="active = <?= $index; ?>"
                                :class="{ 'active': active == <?= $index; ?> }">
                            <span class="text-[15px]"><?= $tab['tab_title'] ?></span>
                        </button>
                    <?php endforeach; ?>
                </div>
                <div class="flex-1">
                    <div class="md:border box-border md:border-[#f0f0f0] md:border-solid h-full md:bg-[#f8f8f8] space-y-[10px] md:space-y-0">
                        <?php foreach ($tabs as $index => $tab) : ?>
                            <div>
                                <button class="block md:!hidden text-left w-full text-[18px] font-[600] uppercase py-[14px] px-[20px] border-solid border-t border-b border-l border-[#484152] !border-r-transparent bg-[#50485b] hover:bg-[#413a4a] text-white bg-gradient-to-b from-[rgba(255,255,255,.2)] to-[rgba(255,255,255,.01)] ease-in-out transition-all duration-[.2s] [&.active]:bg-[#f8f8f8] [&.active]:text-[#666] [&.active]:border-[#f0f0f0] [&.active]:bg-r-transparent [&.active]:bg-[#f8f8f8] [&.active]:text-[#666] [&.active]:cursor-default"
                                        :class="{ 'active': active == <?= $index; ?> }"
                                        x-on:click="active = <?= $index; ?>"><?= $tab['tab_title'] ?></button>
                                <div x-show="active == <?= $index; ?>" x-collapse="x-collapse">
                                    <div class="py-[14px] px-[20px] mt-[10px] md:mt-0 border border-[#f0f0f0] border-solid bg-[#f8f8f8] md:bg-none md:border-none">
                                        <h4 class="text-[18px] text-[#404040] font-[600] mb-[9px]">WHAT?</h4>
                                        <div><?= apply_filters('the_content', $tab['tab_what']); ?></div>
                                        <h4 class="text-[18px] text-[#404040] font-[600] mb-[9px]">HOW?</h4>
                                        <?php $list = $tab['tab_how']; ?>
                                        <?php if ($list) : ?>
                                            <ul class="list-none md:columns-2 px-[15px] mt-[20px] m-0">
                                                <?php foreach ($list as $list_item) : ?>
                                                    <li class="relative pl-[21px] mb-[20px] !mt-0 leading-[24px]">
                                                        <svg class="absolute top-[4px] left-0 fill-[#f97352]"
                                                             style=" height:16px; width: 16px;"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
                                                            <path d="M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z"></path>
                                                        </svg>
                                                        <span><?= $list_item['item'] ?></span></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
