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
    <?php //get_template_part('partials/page-hero-with-team-photo'); ?>
    <!--Hero-->

  <section
          class="pt-[72px] pb-[80px] bg-cover bg-no-repeat bg-right"
          style="background-image: url('/wp-content/themes/jupiter-child/assets/img/pages/diversity-page/bg-dei-triangles.jpg')"
  >

    <?php if(!empty($about['list'])) : ?>
        <div class="max-w-[1230px] w-[100%] px-[15px] mx-auto">
            <h1
                    class="diversity-mission-approach-and-commitment__title text-center text-[#0098AE] text-[36px] font-semibold font-poppins mb-[40px]"
            ><?= $about['title'] ?></h1>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-[24px]">
                <?php foreach($about['list'] as $key => $item): ?>
                    <?php

                    $titleColor = $key == array_key_first($about['list']) ? '#0098AE' : '#3BA17C';

                    ?>
                    <div class="relative overflow-hidden diversity-mission-approach-and-commitment__card">
                        <div
                                class="diversity-mission-approach-and-commitment__card-bg rounded-[5px] absolute top-0 left-0 h-[100%] w-[100%] bg-cover bg-no-repeat bg-center flex items-end justify-center px-[20px] opacity-100"
                                style="background-image: url(<?= $item['image']['url'] ?>);"
                        >
                            <h2
                                    class="text-[#fff] font-poppins mb-[30px]"
                            ><?= $item['title'] ?></h2>
                        </div>

                        <div class="diversity-mission-approach-and-commitment__card-content rounded-[5px] h-[100%] opacity-0"
                                style="border: 0.948px solid rgba(0, 152, 174, 0.70); box-shadow: 0px 9.478px 18.956px 0px rgba(59, 161, 124, 0.30);"
                        >
                            <h2 class="text-[<?= $titleColor ?>] text-[24px] font-poppins font-semibold leading-snug"
                            ><?= $item['title'] ?></h2>

                            <p class="text-[#777] font-poppins text-[18px] font-normal leading-relaxed mb-0"><?= $item['text'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
  </section>

  <section class="cp-ceo"
           style="background-image: url('/wp-content/themes/jupiter-child/assets/img/pages/diversity-page/ceo-bg-new.jpg')">
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
            <?= $ceo['name'] . ', ' . $ceo['position'] ?>
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
        <a title="<?= $statistics['image']['alt'] ?>"
                href="
        <?=
          !empty($statistics['popup_image']) ? $statistics['popup_image']['url'] : $statistics['image']['url']
        ?>" class="mfp-image">
          <img src="<?= $statistics['image']['url'] ?>" alt="<?= $statistics['image']['alt'] ?>">
        </a>
      </div>

      <a title="<?= $statistics['image']['alt'] ?>" href="<?= $statistics['download_file']['url'] ?>" class="cp-statistic__button" download>
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
              <p class="cp-testimonials__text text-[#393A40]">
                <?= $item['text'] ?>
              </p>

              <div class="cp-testimonials__author">
                <img src="/wp-content/themes/jupiter-child/dist/img/icon/backquotes.svg" alt="quotes" width="50"
                     height="39">

                <div>
                  <div class="cp-testimonials__name"><?= $item['name'] ?></div>

                  <div class="cp-testimonials__position text-[#393A40]"><?= $item['position'] ?></div>
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

          <a href="#mfp-post-<?= $key ?>" class="cp-insights-item__button mfp-post text-[#155B39]">
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

