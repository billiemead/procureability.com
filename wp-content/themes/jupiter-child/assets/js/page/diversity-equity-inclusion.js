//https://procureability.com/diversity-equity-inclusion/
import $ from "jquery";

$('.js-cp-testimonials').owlCarousel({
    items: 1,
    nav: true,
    navText: [
        "<img src='/wp-content/themes/jupiter-child/dist/img/icon/right-arrow.svg' alt='prev' aria-label='prev'>",
        "<img src='/wp-content/themes/jupiter-child/dist/img/icon/right-arrow.svg' alt='next' aria-label='next'>"
    ],
    navSpeed: 800,
    dotsSpeed: 800,
    loop: true,
    margin: 30,
    stagePadding: 15
});

$(function () {
    $('.mfp-post').magnificPopup({
        type: 'inline',
        removalDelay: 300,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-out';
                $('body').addClass('mfp-is-open');
            },
            close: function () {
                $('body').removeClass('mfp-is-open');
            }
        },
    });
})

$('.owl-carousel').each(function() {
    $(this).find('.owl-dot').each(function(index) {
        $(this).attr('aria-label', index + 1);
    });
});
$('.owl-carousel').each(function() {
    $('.owl-prev').removeAttr('role');
    $('.owl-next').removeAttr('role');
    $(this).find('.owl-prev').each(function(index) {
        $(this).attr('aria-label', 'prev');
    });
    $(this).find('.owl-next').each(function(index) {
        $(this).attr('aria-label', 'next');
    });
});