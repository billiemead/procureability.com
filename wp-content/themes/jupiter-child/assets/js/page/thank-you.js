new Swiper('#featuredContent', {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 34,
    navigation: {
        nextEl: '#featuredContentNextNavigation',
        prevEl: '#featuredContentPrevNavigation',
    },
    pagination: {
        el: '#featuredContentPagination',
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