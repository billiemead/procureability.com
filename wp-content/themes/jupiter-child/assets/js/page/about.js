import Rellax from 'rellax';
import $ from "jquery";

new Rellax('.rellax');

$(function () {
    $('.js-video-switch .video-tab').on('click', function() {
        let language = $(this).data('language');

        $('.video-tab.active').removeClass('active');
        $(this).addClass('active');

        $('.video_en').hide();
        $('.video_es').hide();

        $('.video_' + language).show();
    });
});


