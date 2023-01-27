<?php $leaders = get_posts(array('post_type' => 'leadership', 'numberposts' => -1)); ?>

<?php $leaders_photo = array_map(function ($leader) {
    return get_the_post_thumbnail_url($leader->ID, 'full');
}, $leaders); ?>

<?php $photos = get_query_var('teamMembersPhotos'); ?>

<!--hero-->
<div data-x-data="{modal: false}">
    <section class="pt-[88px] pb-[100px]">
        <div class="max-w-[1200px] mx-auto relative">
            <div class="hidden lg:block">
                <div class="circle absolute w-[90px] h-[90px] rounded-full top-[-10px] left-[200px] overflow-hidden">
                    <div data-active="true" data-image="<?= $photos[0]; ?>"
                         style="background-image: url('<?= $photos[0]; ?>')"
                         class="opacity-100 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="circle absolute w-[90px] h-[90px] rounded-full top-[-20px] right-0 overflow-hidden">
                    <div data-active="true" data-image="<?= $photos[1]; ?>"
                         style="background-image: url('<?= $photos[1]; ?>')"
                         class="opacity-100 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="circle absolute w-[160px] h-[160px] rounded-full top-[38px] left-[-20px] overflow-hidden">
                    <div data-active="true" data-image="<?= $photos[2]; ?>"
                         style="background-image: url('<?= $photos[2]; ?>')"
                         class="opacity-100 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="circle absolute w-[120px] h-[120px] rounded-full top-[34px] right-[160px] overflow-hidden">
                    <div data-active="true" data-image="<?= $photos[3]; ?>"
                         style="background-image: url('<?= $photos[3]; ?>')"
                         class="opacity-100 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="circle absolute w-[130px] h-[130px] rounded-full top-[155px] left-[195px] overflow-hidden">
                    <div data-active="true" data-image="<?= $photos[4]; ?>"
                         style="background-image: url('<?= $photos[4]; ?>')"
                         class="opacity-100 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

                <div class="circle absolute w-[140px] h-[140px] rounded-full top-[150px] right-0 overflow-hidden">
                    <div data-active="true" data-image="<?= $photos[5]; ?>"
                         style="background-image: url('<?= $photos[5]; ?>')"
                         class="opacity-100 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat">
                    </div>
                    <div data-active="false"
                         class="opacity-0 transition-opacity duration-500 absolute inset-0 bg-cover bg-center bg-no-repeat"></div>
                </div>

            </div>
            <div class="max-w-[530px] px-[15px] mx-auto relative">
                <div class="text-center mb-[16px]">
                    <div class="font-poppins text-[42px] leading-[1.38] font-semibold brand-text-gradient text-transparent bg-clip-text">
                        The
                        ProcureAbility<br/>
                        Team is Here to Help
                    </div>
                </div>
                <div class="text-center mb-[32px]">
                    <div class="font-poppins text-[16px] leading-[1.6] text-[#5A5A5A] opacity-80">Questions, request a
                        resource, start a project — we’re here for it all.
                    </div>
                </div>
                <div class="text-center">
                    <button class="inline-block text-center py-[16px] px-[40px] rounded-[3px] border-[#3BA17C] border-solid border-2 bg-transparent group hover:bg-[#3BA17C] transition-colors duration-300 ease-in-out"
                            data-x-on:click="modal = true">
                        <span class="font-poppins text-[18px] leading-[1.5] text-[#3BA17C] font-semibold tracking-[0.14em] uppercase group-hover:text-white transition-colors duration-300 ease-in-out">Schedule a call</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div data-x-cloak data-x-transition.opacity="" data-x-show="modal"
         class="fixed inset-0 flex flex-col z-[501] overflow-auto">
        <div class="m-auto w-full max-w-[594px] px-[15px] relative" data-x-on:click.outside="modal = false">
            <div class="p-[44px] rounded-[6px] bg-white">
                <div class="mb-[26px] text-center">
                    <div class="font-poppins text-transparent bg-clip-text brand-text-gradient text-[28px] leading-[1.5] font-semibold">
                        Select a Date & Time
                    </div>
                </div>
                <div>
                    <?= do_shortcode('[hubspot type="form" portal="7215743" id="d3cb598b-b486-4f88-8e65-5c44a998e9ca"]'); ?>
                </div>
            </div>
        </div>
    </div>
    <div data-x-cloak data-x-transition.opacity="" data-x-show="modal"
         class="bg-[#393A40] bg-opacity-80 fixed inset-0 z-[500] backdrop-blur-[14px]"></div>
</div>
<!--!hero-->