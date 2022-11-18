new Swiper('#procureabilityBenefits', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 17,
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
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },
    pagination: {
        el: '#reasonsToJoinPagination',
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


