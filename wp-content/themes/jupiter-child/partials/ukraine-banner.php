<div class="ukraine-banner" style="background-image: url(/wp-content/themes/jupiter-child/dist/img/pages/homepage/banner/banner-bg.jpg);">
    <div class="ukraine-banner__inner">
        <h3 class="ukraine-banner__title">
            <?php echo $fields['banner']['title'] ?>
        </h3>

        <div class="ukraine-banner__text">
            <?php echo $fields['banner']['text'] ?>
        </div>

        <a href="#ukraine-popup" class="ukraine-banner__button ukraine-popup-mfp">
            <?php echo $fields['banner']['button_text'] ?>
        </a>
    </div>
</div>

<div class="ukraine-popup mfp-hide" id="ukraine-popup" style="background-image: url(/wp-content/themes/jupiter-child/dist/img/pages/homepage/banner/popup-bg.jpg);">
  <div class="ukraine-popup__text">
      <?php echo $fields['popup']['text'] ?>
  </div>
</div>