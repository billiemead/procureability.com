<?php $features = get_field('features_features'); ?>

<?php if ($features) : ?>
    <section class="py-[80px]" data-x-data="{activeIndex: 0, numberOfItems: <?= count($features); ?>}">
        <div class="max-w-[1200px] mx-auto px-[15px] lg:px-[60px] relative box-border">
            <button class="hidden lg:flex justify-center items-center absolute top-[235px] left-[4px] w-[40px] h-[40px] rounded-full bg-transparent border border-[#393A40] border-solid text-[#393A40] hover:border-[rgba(97,99,107,0.3)] hover:text-[rgba(97,99,107,0.3)] transition-colors"
                    data-x-on:click="activeIndex = activeIndex === 0 ? numberOfItems - 1 : activeIndex - 1">
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.75037 1.35406L0.981135 8.1233L7.75037 14.8925" stroke="currentColor"
                          stroke-width="1.35385"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="hidden lg:flex justify-center items-center absolute top-[235px] right-[4px] w-[40px] h-[40px] rounded-full bg-transparent border border-[#393A40] border-solid text-[#393A40] hover:border-[rgba(97,99,107,0.3)] hover:text-[rgba(97,99,107,0.3)] transition-colors"
                    data-x-on:click="activeIndex = activeIndex === numberOfItems - 1 ? 0 : activeIndex + 1">
                <svg width="9" height="16" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.24976 14.6458L8.01899 7.87658L1.24976 1.10735" stroke="currentColor"
                          stroke-width="1.35385"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="grid lg:grid-cols-2 gap-[27px] lg:gap-[60px] items-start">
                <?php if ($features) : ?>
                    <div class="grid grid-cols-2 gap-[12px] lg:gap-0 lg:p-[13px] max-w-[520px] w-full mx-auto lg:mx-0 lg:max-w-full box-border">
                        <?php foreach ($features as $index => $feature) : ?>
                            <div style="order: <?= (in_array($index, array(2, 3))) ? $index === 3 ? 3 : 4 : $index + 1; ?>">
                                <div class="pt-[100%] relative">
                                    <button data-x-on:click="activeIndex = <?= $index; ?>"
                                            class="p-0 bg-transparent border-0 absolute inset-0 rounded-full lg:m-[-13px] overflow-hidden"
                                            data-x-bind:class="{'z-30' : activeIndex === <?= $index; ?>, 'z-20' : [0, 2].includes(<?= $index; ?>) && activeIndex !== <?= $index; ?> }"
                                    >
                                        <!--not active-->
                                        <div data-x-bind:class="activeIndex !== <?= $index; ?> ? '!opacity-100' : '!opacity-0'"
                                             class="absolute inset-0 flex justify-center items-center bg-center bg-cover transition-opacity <?= $index === 0 ? 'opacity-0' : 'opacity-100'; ?>"
                                             style="background: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/bubble-background-pattern.svg'), rgba(<?= $feature['color_complimentary']['red']; ?>, <?= $feature['color_complimentary']['green']; ?>, <?= $feature['color_complimentary']['blue']; ?>, <?= $feature['color_complimentary']['alpha']; ?>)"
                                        >
                                        <span class="font-poppins text-[16px] leading-[1.4] lg:text-[20px] lg:leading-[1.5] font-[600] tracking-[0.05em] uppercase text-center [&_br]:hidden md:[&_br]:inline"
                                              style="color: rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>, <?= $feature['color']['alpha']; ?>);"><?= $feature['title']; ?></span>
                                        </div>
                                        <!--!not active-->
                                        <!--active-->
                                        <div data-x-bind:class="activeIndex === <?= $index; ?> ? '!opacity-100' : '!opacity-0'"
                                             class="absolute inset-0 flex justify-center items-center bg-center bg-cover transition-opacity <?= $index === 0 ? 'opacity-100' : 'opacity-0'; ?>"
                                             style="background-image: linear-gradient(360deg, rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>, 0.8) 10%, rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>, 0) 110%), url('<?= $feature['background_image']['url']; ?>')"
                                        >
                                        <span style="background: linear-gradient(90deg, rgba(<?= $feature['title_gradient_color_start']['red']; ?>, <?= $feature['title_gradient_color_start']['green']; ?>, <?= $feature['title_gradient_color_start']['blue']; ?>, 0.5) 0.6%, rgba(<?= $feature['title_gradient_color_end']['red']; ?>, <?= $feature['title_gradient_color_end']['green']; ?>, <?= $feature['title_gradient_color_end']['blue']; ?>, 0.2) 75%), #FFFFFF;"
                                              class="font-poppins text-transparent !bg-clip-text text-[16px] lg:text-[28px] leading-[1.4] font-[600] tracking-[0.05em] uppercase text-center [&_br]:hidden md:[&_br]:inline"><?= $feature['title']; ?></span>
                                        </div>
                                        <!--!active-->
                                    </button>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <div>
                    <div>
                        <?php foreach ($features as $index => $feature) : ?>
                            <div data-x-show="activeIndex === <?= $index; ?>">
                                <div class="font-poppins text-[26px] leading-[1.4] font-[600] mb-[16px] [&_br]:hidden"
                                     style="color: rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>, <?= $feature['color']['alpha']; ?>)"><?= $feature['title']; ?></div>
                                <div class="solutions-feature-cms-content"
                                     style="--feature-bullet-color: rgba(<?= $feature['color']['red']; ?>, <?= $feature['color']['green']; ?>, <?= $feature['color']['blue']; ?>)">
                                    <?= $feature['content']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>