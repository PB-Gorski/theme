<?php

/**
 * Title: kronika-budowy-sw-piotra
 * Slug: kronika-budowy-sw-piotra
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Content" class="wp-block-group content relative">
  <!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
  <div id="Banner" class="wp-block-group page-kronika-budowy-sw-piotra test relative">
    <!-- wp:group -->
    <div class="wp-block-group banner-lista-mieszkan w-full bg-banner h-[250px] desktop:h-[770px] relative flex desktop:block items-center">
      <!-- wp:group -->
      <div class="wp-block-group banner w-full h-full bg-black opacity-30 z-[1] absolute top-0 left-0"></div>
      <!-- /wp:group -->

      <!-- wp:image -->
      <figure class="wp-block-image w-full h-full absolute top-0 left-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/sw-piotra-bg.jpg" alt="banner-background">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] z-[2] relative text-white">
        <!-- wp:group -->
        <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[290px] mb-[50px] leading-[44px] desktop:leading-[70px]">
          <!-- wp:heading {"level":1} -->
          <h1><span class="font-bold underline underline-offset-[20px]">Kronika budowy</span></h1>
          <!-- /wp:heading -->
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
      <a href="<?php echo home_url() . '/o-inwestycji-sw-piotra' ?>" class="text-[#8a8f99] hover:text-[#3e4759]" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja-sw-piotra' ?>" class="text-[#8a8f99]" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lista-mieszkan-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy-sw-piotra' ?>" class="" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group container mb-[80px]">
      <!-- wp:group -->
      <div id="maj-2023" class="wp-block-group row-lipiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Maj 2023</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2023/img1.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2023/img2.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2023/img3.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2023/img4.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2023/img5.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2023/img6.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2023/img7.jpeg" alt="slide">
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

      <!-- wp:group -->
      <div id="luty-2023" class="wp-block-group row-marzec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Luty 2023</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2023/img8.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2023/img9.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2023/img10.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2023/img11.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="pazdziernik-2022" class="wp-block-group row-wrzesien mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Październik 2022</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2022/img12.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2022/img13.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2022/img14.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2022/img15.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="sierpien-2022" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Sierpień 2022</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/sierpien-2022/img16.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/sierpien-2022/img17.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/sierpien-2022/img18.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/sierpien-2022/img19.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="czerwiec-2022" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Czerwiec 2022</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/czerwiec-2022/img20.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/czerwiec-2022/img21.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/czerwiec-2022/img22.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/czerwiec-2022/img23.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/czerwiec-2022/img24.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/czerwiec-2022/img25.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="kwiecien-2022" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Kwiecień 2022</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/kwiecien-2022/img26.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/kwiecien-2022/img27.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/kwiecien-2022/img28.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/kwiecien-2022/img29.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/kwiecien-2022/img30.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="luty-2022" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Luty 2022</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img31.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img32.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img33.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img33.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img34.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img35.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img36.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img37.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/luty-2022/img38.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="grudzien-2021" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Grudzień 2021</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/grudzien-2021/img39.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/grudzien-2021/img40.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/grudzien-2021/img41.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/grudzien-2021/img42.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="wrzesien-2021" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Wrzesień 2021</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/wrzesien-2021/img43.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/wrzesien-2021/img44.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/wrzesien-2021/img45.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/wrzesien-2021/img46.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="lipiec-2021" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Lipiec 2021</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/lipiec-2021/img47.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/lipiec-2021/img48.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/lipiec-2021/img49.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/lipiec-2021/img50.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="maj-2021" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Maj 2021</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2021/img51.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2021/img52.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2021/img53.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/maj-2021/img54.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="marzec-2021" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Marzec 2021</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/marzec-2021/img55.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/marzec-2021/img56.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/marzec-2021/img57.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/marzec-2021/img58.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/marzec-2021/img59.jpeg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="styczen-2021" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Styczeń 2021</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/styczen-2021/img60.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/styczen-2021/img61.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/styczen-2021/img62.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/styczen-2021/img63.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/styczen-2021/img64.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="listopad-2020" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Listopad 2020</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/listopad-2020/img65.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/listopad-2020/img66.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/listopad-2020/img67.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/listopad-2020/img68.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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

      <!-- wp:group -->
      <div id="pazdziernik-2020" class="wp-block-group row-czerwiec mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Październik 2020</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2020/img69.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2020/img70.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2020/img71.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2020/img72.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/kronika-budowy/pazdziernik-2020/img73.png" alt="slide">
                  </figure>
                  <!-- /wp:image -->
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


</div>
<!-- /wp:group -->