new WOW({
    mobile: false
}).init();

const breakpoint = window.matchMedia('(min-width: 1240px)');

let teamSwiper;
let insightsSwiper;

const breakpointChecker = function () {
    if (breakpoint.matches === true) {
        if (teamSwiper !== undefined) {
            teamSwiper.destroy(true, true);
        }
        if (insightsSwiper !== undefined) {
            insightsSwiper.destroy(true, true);
        }
        return;
    } else if (breakpoint.matches === false) {
        enableTeamSwiper();
        enableInsightsSwiper();
    }
};

const enableTeamSwiper = function () {
    teamSwiper = new Swiper('#ourProfessionalTeam', {
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
        }
    });
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



