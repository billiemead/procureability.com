import $ from "jquery";

document.addEventListener('alpine:init', () => {
    Alpine.data('managedServices', () => ({
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
            this.slider.slideTo(index)
            this.toggleModal();
        }
    }));
});

//https://procureability.com/managed-services/
if ($(window).outerWidth() < 768) {
    $('.js-services-slider').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        navSpeed: 800,
        dotsSpeed: 800,
        loop: true,
        margin: 50
    });

    //https://procureability.com/managed-services/
    $('.js-support-slider').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        navSpeed: 800,
        dotsSpeed: 800,
        loop: false,
        margin: 50,
    });

    //https://procureability.com/managed-services/
    $('.js-industries-slider').owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        navText: [
            "<img src='/wp-content/themes/jupiter-child/dist/img/icon/left-arrow.svg' alt='prev'>",
            "<img src='/wp-content/themes/jupiter-child/dist/img/icon/right-arrow.svg' alt='next'>"
        ],
        navSpeed: 800,
        dotsSpeed: 800,
        loop: true,
        margin: 50
    });
}

//https://procureability.com/managed-services/
if ($(window).outerWidth() < 992) {
    $('.js-insights-slider').owlCarousel({
        items: 2,
        nav: false,
        dots: false,
        navSpeed: 800,
        dotsSpeed: 800,
        loop: true,
        margin: 24,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            768: {
                items: 2,
                dots: false
            }
        }
    });
}

// accordion
let $accordion = $('.js-accordion');
let $accordionTrigger = $('.js-accordion-trigger');

$accordionTrigger.on('click', function () {
    if ($(this).parent().hasClass('active')) {
        $(this).parent().removeClass('active').find('.js-accordion-content').slideUp();
    } else {
        $(this).parent().addClass('active').siblings().removeClass('active').find('.js-accordion-content').slideUp();
        $(this).parent().find('.js-accordion-content').slideDown();
    }
});

function listToggle($trigger, $list, hidePhrase, showPhrase) {
    $trigger.on('click', function (e) {
        e.preventDefault();

        $list.toggleClass('active').slideToggle();

        if ($list.hasClass('active')) {
            $trigger.html(hidePhrase);
        } else {
            $trigger.html(showPhrase);
        }
    });
}

listToggle($('.cp-technology__more'), $('.cp-technology__list_mobile'), 'hide benefits', 'Show all benefits');