export default () => ({
    modal: false,
    slider: new Swiper('#supportingYourSuccessSlider', {
        slidesPerView: 1,
        spaceBetween: 50,
        loop: false,
        pagination: {
            el: '#supportingYourSuccessSliderPagination',
        },
        navigation: {
            nextEl: '#supportingYourSuccessSliderNavNext',
            prevEl: '#supportingYourSuccessSliderNavPrev',
        },
        autoHeight: true,
        breakpoints: {
            1240: {
                autoHeight: false
            },
        }
    }),
    toggleModal() {
        this.modal = !this.modal;
    },
    setActiveSlide(index) {
        console.log('active ' + index);

        this.slider.slideTo(index)
        this.toggleModal();
    }
})