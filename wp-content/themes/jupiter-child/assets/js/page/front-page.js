new Swiper('#welcomeToProcureability', {
    loop: false,
    slidesPerView: 1,
    // spaceBetween: 16,
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
    // pagination: {
    //     el: '.swiper-pagination',
    //     clickable: true,
    // },
    breakpoints: {
        768: {
            slidesPerView: 'auto',
        },
        1240: {
            slidesPerView: 4,
        }
    }
});

new Swiper('#clientSuccessStories', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 34,
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
    pagination: {
        el: '#clientSuccessStoriesPagination',
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1240: {
            slidesPerView: 3,
            spaceBetween: 24,
        }
    }
});

new Swiper('#ourAdvantages', {
    loop: false,
    slidesPerView: 1,
    navigation: {
        nextEl: '#ourAdvantagesNavigationNext',
        prevEl: '#ourAdvantagesNavigationPrev',
    },
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
    pagination: {
        el: '#ourAdvantagesPagination',
        clickable: true,
    },
    breakpoints: {
        // 768: {
        //     slidesPerView: 2,
        //     spaceBetween: 34,
        // },
        1240: {

        }
    }
});

new Swiper('#recentThoughtLeadership', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 34,
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
    pagination: {
        el: '#recentThoughtLeadershipPagination',
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1240: {
            slidesPerView: 3,
            spaceBetween: 24,
        }
    }
});


