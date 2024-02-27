const breakpoint = window.matchMedia('(min-width: 1240px)');

let teamSwiper;

const breakpointChecker = function () {
    if (breakpoint.matches === true) {
        if (teamSwiper !== undefined) {
            teamSwiper.destroy(true, true);
        }
        return;
    } else if (breakpoint.matches === false) {
        enableTeamSwiper();
    }
};

const enableTeamSwiper = function () {
    teamSwiper = new Swiper('#ourProfessionalTeam', {
        loop: true,
        slidesPerView: 1,
        //centeredSlides: true,
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

breakpoint.addEventListener("change", breakpointChecker);

breakpointChecker();