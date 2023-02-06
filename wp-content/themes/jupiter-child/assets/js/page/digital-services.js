new WOW({
    mobile: false
}).init();

const breakpoint = window.matchMedia('(min-width: 1240px)');

let insightsSwiper;

const breakpointChecker = function () {
    if (breakpoint.matches === true) {
        if (insightsSwiper !== undefined) {
            insightsSwiper.destroy(true, true);
        }
        return;
    } else if (breakpoint.matches === false) {
        enableInsightsSwiper();
    }
};

const enableInsightsSwiper = function () {
    teamSwiper = new Swiper('#relatedInsights', {
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 24,
            },
        }
    });
};

breakpoint.addEventListener("change", breakpointChecker);

breakpointChecker();



