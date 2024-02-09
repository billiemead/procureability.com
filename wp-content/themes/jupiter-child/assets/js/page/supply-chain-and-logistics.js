document.addEventListener("DOMContentLoaded", (event) => {
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
});