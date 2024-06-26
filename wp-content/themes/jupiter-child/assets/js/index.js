import $ from 'jquery';
import 'magnific-popup';
import {header, scrollToTop} from './header';
import {disableBodyScroll, enableBodyScroll, clearAllBodyScrollLocks} from 'body-scroll-lock';

document.addEventListener('alpine:init', () => {
    Alpine.prefix("data-x-");
    Alpine.data("header", header);
    Alpine.data("scrollToTop", scrollToTop);

    Alpine.magic('lockbody', () => el => {
        disableBodyScroll(el)
    });
    Alpine.magic('unlockbody', () => el => {
        enableBodyScroll(el)
    });
})

if ($.fancybox) {
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
        removalDelay: 500,
        overflowY: 'scroll',
        autoFocusLast: false,
        fixedContentPos: true,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = this.st.el.attr('data-effect');
            }
        }
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
})

const formID = '794fc76d-49dd-4cbb-b777-bb844d175ca0';

window.addEventListener('message', event => {
    if (
        event.data.type === 'hsFormCallback' &&
        event.data.eventName === 'onFormSubmitted' &&
        event.data.id === formID
    ) {
        const popup = document.getElementById('popmake-30894');

        popup.dispatchEvent(new Event("pumSetCookie", {bubbles: true}));

        window.location.href = "https://procureability.com/wp-content/uploads/2024/02/whitepaper-talent.pdf";
    }
});

$(document).ready(event => {
    $('body').on('blur', '.pum-theme-download-5-bold-procurement-predictions-for-2030 input', eventData => {
        $(document).trigger('resize');
    });

    $('body').on('submit', "form#hsForm_e5ae7576-0dc2-4762-8b72-373c739ff93a, form#hsForm_794fc76d-49dd-4cbb-b777-bb844d175ca0, form#hsForm_8ddc5061-7eb7-4dca-8d14-7b35f3d86482", eventData => {
        $(document).trigger('resize');
        $('#pum-31144').trigger('pumSetCookie');
    });
});

$(document).ready(() => {

    setTimeout(function () {
        $('body .mejs-captions-selector-label').each(function (index) {
            console.log($(this).text())
            const label = $(this).text();
            $(this).attr('aria-label', label);
        });
    }, 300);
});