<?php

$baseYouTubeEmbedLink = 'https://www.youtube.com/embed/';
$youTubeVideoId = get_field('youtube_video_id');

?>


<?php if ($youTubeVideoId): ?>
    <iframe
        id="fancybox-frame"
        name="fancybox-frame"
        class="fancybox-iframe"
        allowfullscreen="allowfullscreen"
        allow="autoplay; fullscreen"
        src="<?= $baseYouTubeEmbedLink . $youTubeVideoId ?>"
        scrolling="auto"
        style="display:none;"
    ></iframe>
<?php endif; ?>