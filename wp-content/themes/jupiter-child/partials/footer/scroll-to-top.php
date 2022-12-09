<div x-data="scrollToTop" @scroll.window.debounce="scrollCheck" @scroll.window.throttle="scrollCheck"
     class="fixed right-[22px] bottom-[15px] xl:!bottom-[15px] lg:right-[-60px] transition-all duration-[.2s] ease-in-out opacity-0"
     :class="{'lg:!right-[15px]' : active, 'bottom-[72px]' : active , '!opacity-100' : active}">
    <button @click="scrollToTop"
            class="block w-[45px] h-[45px] bg-black bg-opacity-20 hover:bg-opacity-30 text-white border-0 transition-all duration-[.2s] ease-in-out cursor-pointer">
        <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1792 1792">
            <path class="absolute top-[15px] left-[15px]" fill="currentColor"
                  d="M1683 1331l-166 165q-19 19-45 19t-45-19l-531-531-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path>
        </svg>
    </button>
</div>