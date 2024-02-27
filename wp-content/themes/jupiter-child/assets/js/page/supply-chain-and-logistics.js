document.addEventListener("DOMContentLoaded", (event) => {
    new Swiper('#clientSuccessStories', {
        loop: true,
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

    new Swiper('#supplyChainAndLogisticsBlog', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 34,
        pagination: {
            el: '#supplyChainAndLogisticsBlogPagination',
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