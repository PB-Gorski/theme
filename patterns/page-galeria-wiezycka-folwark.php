<?php

/**
 * Title: page-galeria-wiezycka-folwark
 * Slug: page-galeria-wiezycka-folwark
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
$currentPage = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 35, 30));

?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Content" class="wp-block-group content relative">
  <!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
  <div id="Banner" class="wp-block-group page-lokalizacja relative">
    <!-- wp:group -->
    <div class="wp-block-group banner-lista-mieszkan w-full h-[250px] desktop:h-[770px] bg-banner relative flex desktop:block items-center">
      <!-- wp:group -->
      <div class="wp-block-group banner w-full h-full bg-black opacity-30 z-[1] absolute top-0 left-0"></div>
      <!-- /wp:group -->

      <!-- wp:image -->
      <figure class="wp-block-image w-full h-full absolute top-0 left-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-wiezycka-folwark/galeria-bg.png" alt="banner-background">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] z-[2] relative text-white">
        <!-- wp:group -->
        <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[160px] mb-[50px] leading-[44px] desktop:leading-[70px]">
          <!-- wp:header {"level":1} -->
          <h1><span class="font-bold" data-aos="fade-right" data-aos-offset="30">Galeria Wieżycka Folwark</span></h1>
          <!-- /wp:header -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:list -->
  <ul class="term_data_container">
    <!-- wp:list-item -->
    <li>
      <?php
      $scheme  = (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] === "off") ? "http" : "https";
      $url     = "$scheme://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      $page_id = url_to_postid($url);
      $terms = wp_get_object_terms($page_id, 'inwestycja');

      echo "<span id='term-data' ";
      foreach ($terms as $term) {
        $term_city = get_field('miasto_inwestycji', $term);
        echo " data-investment-city-id='" . $term_city->term_id . "' data-investment-city-name='" . $term_city->name . "' ";
      }

      foreach ($terms as $term) {
        echo " data-investment-id='" . $term->term_id . "' data-investment-name='" . $term->name . "' ";
      }
      echo "></span>";
      ?>
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->

  <!-- wp:pattern {"slug":"searchbar-mieszkania"} /-->


  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] relative">
    <!-- wp:group -->
    <div class="wp-block-group row-links my-[40px] flex flex-wrap justify-center items-center gap-[20px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/o-inwestycji-wiezycka-folwark' ?>" class="text-[#8a8f99] hover:text-[#3e4759]" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja-wiezycka-folwark' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lista-mieszkan-wiezycka-folwark' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria-wiezycka-folwark' ?>" class="hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy-wiezycka-folwark' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div id="wizualizacje" class="wp-block-group row-wizualizacje mb-[80px]">
      <!-- wp:group -->
      <div class="wp-block-group col-sm-6 col-sm-push-3">
        <!-- wp:paragraph -->
        <p class="mb-[20px] text-[#8a8f99]">Wizualizacje i okolice</p>
        <!-- /wp:paragraph -->
        <!-- wp:group -->
        <div class="wp-block-group swiper-container">
          <!-- wp:group -->
          <div class="wp-block-group close-button"></div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group js-gallery-top gallery-top">
            <!-- wp:group -->
            <div class="wp-block-group swiper-wrapper">
              <!-- wp:group -->
              <div class="wp-block-group swiper-slide swiper-slide-hover">
                <!-- wp:image -->
                <figure class="wp-block-image h-full w-full">
                  <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-wiezycka-folwark/wizualizacje-i-okolica/img1.jpg" alt="slide">
                </figure>
                <!-- /wp:image -->
              </div>
              <!-- /wp:group -->
              <!-- wp:group -->
              <div class="wp-block-group swiper-slide swiper-slide-hover">
                <!-- wp:image -->
                <figure class="wp-block-image h-full w-full">
                  <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-wiezycka-folwark/wizualizacje-i-okolica/img2.jpg" alt="slide">
                </figure>
                <!-- /wp:image -->
              </div>
              <!-- /wp:group -->
              <!-- wp:group -->
              <div class="wp-block-group swiper-slide swiper-slide-hover">
                <!-- wp:image -->
                <figure class="wp-block-image h-full w-full">
                  <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-wiezycka-folwark/wizualizacje-i-okolica/img3.jpg" alt="slide">
                </figure>
                <!-- /wp:image -->
              </div>
              <!-- /wp:group -->
              <!-- wp:group -->
              <div class="wp-block-group swiper-slide">
              </div>
              <!-- /wp:group -->
              <!-- wp:group -->
              <div class="wp-block-group swiper-slide">
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group js-swiper-button-next swiper-button-next pb-[4px] text-[36px] font-semibold">
              <!-- wp:paragraph -->
              <p>></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            <!-- wp:group -->
            <div class="wp-block-group js-swiper-button-prev swiper-button-prev pb-[4px] text-[36px] font-semibold">
              <!-- wp:paragraph -->
              <p>&lt;</p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->


  </div>
  <!-- /wp:group -->


</div>
<!-- /wp:group -->