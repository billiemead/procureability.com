<?php

/*
    Template Name: Diversity page
    Template Post Type: page
*/

get_header();

$about = get_field('about');
$ceo = get_field('ceo');
$statistics = get_field('statistics');
$testimonials = get_field('testimonials');
$insights = get_field('insights');

?>
<div class="custom-page diversity-page">
    <!--Hero-->
    <?php get_template_part('partials/page-hero-with-team-photo'); ?>
    <!--Hero-->

  <section class="cp-about">
    <div class="cp-about__bg"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/assets/img/branding-star-revision.svg')"></div>

    <?php if(!empty($about['list'])) : ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12">
          <h1 class="cp-about__title"><?= $about['title'] ?></h1>

          <ul class="cp-about__list">
            <?php
              foreach($about['list'] as $item):
            ?>
            <li class="cp-about__item">
              <h4><?= $item['title'] ?></h4>

              <p><?= $item['text'] ?></p>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </section>

  <section class="cp-ceo"
           style="background-image: url('/wp-content/themes/jupiter-child/dist/img/pages/diversity-page/ceo-bg.jpg')">
    <div class="container">
      <div class="cp-ceo__wrapper d-flex align-items-center">
        <div class="cp-ceo__photo d-flex align-items-end">
          <img src="<?= $ceo['photo']['url'] ?>" alt="<?= $ceo['photo']['alt'] ?>">
        </div>

        <div class="cp-ceo__desc">
          <p class="cp-ceo__text">
            <?= $ceo['text'] ?>
          </p>

          <div class="cp-ceo__name">
            <?= $ceo['name'] ?>,
            <span>
                <?= $ceo['position'] ?>
            </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="cp-statistic">
    <div class="container text-center relative">
      <h2 class="cp-statistic__title text-gradient">
        <?= $statistics['title'] ?>
      </h2>

      <div class="cp-statistic__image">
        <a href="
        <?=
          !empty($statistics['popup_image']) ? $statistics['popup_image']['url'] : $statistics['image']['url']
        ?>" class="mfp-image">
          <img src="<?= $statistics['image']['url'] ?>" alt="<?= $statistics['image']['alt'] ?>">
        </a>
      </div>

      <a href="<?= $statistics['download_file']['url'] ?>" class="cp-statistic__button" download>
        <?= $statistics['download_text'] ?>
      </a>
    </div>
  </section>

  <section class="cp-testimonials text-center">
    <div class="container">
      <h2 class="cp-testimonials__title text-gradient">
        <?= $testimonials['title'] ?>
      </h2>

      <?php if(!empty($testimonials['items'])) : ?>
      <div class="cp-testimonials__wrapper text-left">
        <div class="cp-testimonials__slider owl-carousel js-cp-testimonials">
          <?php
            foreach ($testimonials['items'] as $item) :
          ?>
          <div class="cp-testimonials__item d-flex align-items-center">
            <div class="cp-testimonials__desc">
              <p class="cp-testimonials__text">
                <?= $item['text'] ?>
              </p>

              <div class="cp-testimonials__author">
                <img src="/wp-content/themes/jupiter-child/dist/img/icon/backquotes.svg" alt="quotes" width="50"
                     height="39">

                <div>
                  <div class="cp-testimonials__name"><?= $item['name'] ?></div>

                  <div class="cp-testimonials__position"><?= $item['position'] ?></div>
                </div>
              </div>
            </div>

            <div class="cp-testimonials__photo">
              <img src="<?= $item['photo']['url'] ?>" alt="<?= $item['photo']['alt'] ?>">
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>
    </div>
  </section>

  <section class="cp-insights">
    <div class="container">
      <h2 class="text-gradient cp-insights__title"><?= $insights['title'] ?></h2>

      <?php if(!empty($insights['items'])) : ?>
      <div class="cp-insights-list">
        <?php
          foreach ($insights['items'] as $key => $item) :
        ?>
        <div class="cp-insights-item">
          <div class="cp-insights-item__inner">
            <h3 class="cp-insights-item__title">
              <?= $item['title'] ?>
            </h3>

            <div class="cp-insights-item__text">
              <?= $item['text'] ?>
            </div>
          </div>

          <a href="#mfp-post-<?= $key ?>" class="cp-insights-item__button mfp-post">
            <?= $item['read_more_text'] ?>
          </a>
        </div>

        <div class="cp-insights-popup mfp-hide" id="mfp-post-<?= $key ?>">
          <div class="cp-insights-popup__title">
              <?= $item['title'] ?>
          </div>

          <div class="cp-insights-popup__text">
              <?= $item['full_text'] ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
  </section>
</div>

<?php get_footer(); ?>

