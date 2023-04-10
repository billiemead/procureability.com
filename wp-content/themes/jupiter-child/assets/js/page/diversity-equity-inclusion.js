//https://procureability.com/diversity-equity-inclusion/
import $ from "jquery";

$('.js-cp-testimonials').owlCarousel({
    items: 1,
    nav: true,
    navText: [
        "<img src='/wp-content/themes/jupiter-child/dist/img/icon/right-arrow.svg' alt='prev'>",
        "<img src='/wp-content/themes/jupiter-child/dist/img/icon/right-arrow.svg' alt='next'>"
    ],
    navSpeed: 800,
    dotsSpeed: 800,
    loop: true,
    margin: 30,
    stagePadding: 15
});