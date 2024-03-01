document.addEventListener("DOMContentLoaded", (event) => {
    const clientSuccessStories = new Swiper('#clientSuccessStories', {
        loop: false,
        slidesPerView: 1,
        spaceBetween: 34,
        pagination: '#clientSuccessStoriesPagination',
        paginationClickable: true,
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

    const supplyChainAndLogisticsBlog = new Swiper('#supplyChainAndLogisticsBlog', {
        loop: false,
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
