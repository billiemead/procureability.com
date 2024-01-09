<div data-x-show="mobileSearchActive" data-x-collapse class="relative xl:hidden" style="display: none;">
    <form class="leading-[28px]" method="get"
          action="<?php echo home_url('/'); ?>">
        <input class="!border-none !text-[#9e9e9e] !text-[18px] !h-[70px] !m-0 !py-[27px] !px-[20px] !w-full !bg-[rgba(0,0,0,.02)] cursor-text !box-border"
               type="search" value="" name="s" id="s" placeholder="Search..">
    </form>
    <button data-x-on:click.prevent="mobileSearchActive = !mobileSearchActive"
            class="bg-transparent border-0 p-0 absolute top-[19px] right-[19px]">
        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M5 24.9998L24.799 5.20084L26.2132 6.61505L6.41421 26.414L5 24.9998Z"
                  fill="#393A40"></path>
            <path d="M6.41421 5L26.2132 24.799L24.799 26.2132L5 6.41421L6.41421 5Z" fill="#393A40"></path>
        </svg>
    </button>
</div>
