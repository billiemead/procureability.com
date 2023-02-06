new Swiper('#procureabilityBenefits', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 17,
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1240: {
            slidesPerView: 3,
        }
    }
});

new Swiper('#reasonsToJoin', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 20,
    autoHeight: true,
    navigation: {
        nextEl: '#reasonsToJoinNavigationNext',
        prevEl: '#reasonsToJoinNavigationPrev',
    },
    pagination: {
        el: '#reasonsToJoinPagination',
        clickable: true,
    },
    breakpoints: {
        1240: {}
    }
});

new Swiper('#industryLeaders', {
    loop: false,
    spaceBetween: 18,
    navigation: {
        nextEl: '#industryLeadersNavigationNext',
        prevEl: '#industryLeadersNavigationPrev',
    },
    pagination: {
        el: '#industryLeadersPagination',
        clickable: true,
        dynamicBullets: true
    },
    breakpoints: {
        768: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1240: {
            slidesPerView: 6,
            spaceBetween: 60,
        }
    }
});

new Swiper('#clientSuccessStories', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 34,
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