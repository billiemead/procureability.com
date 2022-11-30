import $ from 'jquery';
import 'magnific-popup';
import 'owl.carousel';
import Alpine from 'alpinejs';
import collapse from '@alpinejs/collapse';
import header from './header';

Alpine.plugin(collapse);
window.Alpine = Alpine;
Alpine.data('header', header)
Alpine.start();

if($.fancybox) {
$('[data-fancybox="group"]')
    .on('click', function (event) {
        if (window.screen.width < 1024) {
            event.stopImmediatePropagation();
            window.location.href = $(this).data('href');
        }
    })
    .fancybox({
        hash: null,
        toolbar: true,
        infobar: false,
        thumbs: {
            autoStart: false
        },
        buttons: [
            "share",
            "thumbs",
            "close"
        ],
        share: {
            url: function (instance, item) {
                return (
                    (!instance.currentHash && !(item.type === "inline" || item.type === "html") ? item.origSrc || item.src : false) || window.location
                );
            },
            tpl:
                '<div class="fancybox-share">' +
                "<h1>{{SHARE}}</h1>" +
                "<p>" +
                '<a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}">' +
                '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg>' +
                "<span>Facebook</span>" +
                "</a>" +
                '<a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}">' +
                '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg>' +
                "<span>Twitter</span>" +
                "</a>" +
                '<a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}">' +
                '<svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg>' +
                "<span>Pinterest</span>" +
                "</a>" +
                "</p>" +
                '<p><input class="fancybox-share__input" type="text" value="{{url_raw}}" /></p>' +
                "</div>"
        },
    });
}

$(function () {

    var searchForm = $('.responsive-searchform').detach().hide();

    $('.mk-header-inner').after(searchForm);
    $('.mk-nav-responsive-link').after('<a class="mk-mob-search-trigger" href="#"><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.9171 20.0385L15.6811 14.5928C17.0273 12.9924 17.765 10.9788 17.765 8.88249C17.765 3.98476 13.7802 0 8.88249 0C3.98476 0 0 3.98476 0 8.88249C0 13.7802 3.98476 17.765 8.88249 17.765C10.7212 17.765 12.4733 17.2104 13.9714 16.1576L19.2472 21.6447C19.4677 21.8737 19.7643 22 20.0822 22C20.383 22 20.6684 21.8853 20.8851 21.6768C21.3454 21.2338 21.3601 20.4992 20.9171 20.0385ZM8.88249 2.31717C12.5027 2.31717 15.4478 5.2623 15.4478 8.88249C15.4478 12.5027 12.5027 15.4478 8.88249 15.4478C5.2623 15.4478 2.31717 12.5027 2.31717 8.88249C2.31717 5.2623 5.2623 2.31717 8.88249 2.31717Z" fill="#393A40"/></svg></a>').replaceWith('<div class="mk-nav-responsive-hamburger"><div class="mk-css-icon-menu"><div class="mk-css-icon-menu-line-1"></div><div class="mk-css-icon-menu-line-2"></div><div class="mk-css-icon-menu-line-3"></div></div></div>');

    $('.responsive-searchform').find('i').replaceWith('<a class="mk-mob-search-close" href="#"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 24.9998L24.799 5.20084L26.2132 6.61505L6.41421 26.414L5 24.9998Z" fill="#393A40"/><path d="M6.41421 5L26.2132 24.799L24.799 26.2132L5 6.41421L6.41421 5Z" fill="#393A40"/></svg></a>');

    $(document).on('click', '.mk-nav-responsive-hamburger', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');
        $('.mk-responsive-wrap').slideToggle();
    });

    $(document).on('click', '.mk-mob-search-trigger', function (e) {
        e.preventDefault();
        $(this).toggleClass('is-active');
        $('.responsive-searchform').slideToggle();
    });

    $(document).on('click', '.mk-mob-search-close', function (e) {
        e.preventDefault();
        $('.mk-mob-search-trigger').removeClass('is-active');
        $('.responsive-searchform').slideUp();
    });

    $('.theme-content img').each(function () {
        if (!$(this).parent('a').hasClass('vc_single_image-wrapper')) {
            $(this).parent('a').addClass('mfp-image');
        }
    });

    $('.mfp-image').magnificPopup({
        type: 'image',
        removalDelay: 300,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-out';
            },
        },
    });

    $('.ukraine-popup-mfp').magnificPopup({
        type: 'inline',
        // removalDelay: 300,
    });

    $('.mfp-post').magnificPopup({
        type: 'inline',
        removalDelay: 300,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-out';
            },
        },
    });

    $(document).on('scroll', function () {
        if ($(window).outerWidth() > 1000 && $(window).scrollTop() > 0) {
            $('header').addClass('a-sticky');
        } else {
            $('header').removeClass('a-sticky');
        }
    });

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

    listToggle($('.cp-advantages__link'), $('.cp-advantages__wrapper'), 'Hide all advantages', 'Show all advantages');
    listToggle($('.cp-technology__more'), $('.cp-technology__list_mobile'), 'hide benefits', 'Show all benefits');

    $('.cp-issues__item').on('click', function () {
        window.location.hash = $(this).attr('href');
    });

    $('.js-popup').magnificPopup({
        type: 'inline',
        removalDelay: 300,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-out';
                if ($('.js-issues-popup-slider').length) {
                    $('.js-issues-popup-slider').owlCarousel({
                        items: 1,
                        nav: true,
                        dots: false,
                        navSpeed: 800,
                        dotsSpeed: 800,
                        loop: false,
                        margin: 50,
                        URLhashListener: true,
                        startPosition: 'URLHash',
                        navText: [
                            "<img src='/wp-content/themes/jupiter-child/dist/img/icon/left-arrow.svg' alt='prev'>",
                            "<img src='/wp-content/themes/jupiter-child/dist/img/icon/right-arrow.svg' alt='next'>"
                        ],
                        responsive: {
                            0: {
                                dots: true,
                                nav: false
                            },
                            768: {
                                dots: false,
                                nav: true
                            }
                        }
                    });
                }
            },
            open: function () {
                $('.js-issues-popup-slider').css('opacity', '0');
                setTimeout(function () {
                    $('.js-issues-popup-slider').css('opacity', '1');
                }, 500);
            },
            close: function () {
                $('.js-issues-popup-slider').trigger('destroy.owl.carousel');
            }
        },
    });

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

        $('.js-support-slider').owlCarousel({
            items: 1,
            nav: false,
            dots: true,
            navSpeed: 800,
            dotsSpeed: 800,
            loop: false,
            margin: 50,
        });

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

    $('.js-testimonials').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        navSpeed: 800,
        dotsSpeed: 800,
        loop: true,
        margin: 0,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        mouseDrag: false,
        touchDrag: true,
        dotsData: true,
        autoplay: true,
        autoplayTimeout: 7500,
        autoplayHoverPause: true
    });
})
