<?php

/**
 * Title: page-galeria-default
 * Slug: page-galeria-default
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
$currentPage = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 35, 30));

?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Galeria Page" class="wp-block-group page-galeria relative">
  <!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
  <div id="Banner" class="wp-block-group relative">
    <!-- wp:group -->
    <div class="wp-block-group w-full h-[250px] desktop:h-[770px] bg-banner relative flex desktop:block items-center">
      <!-- wp:group -->
      <div class="wp-block-group banner w-full h-full bg-black opacity-30 z-[1] absolute top-0 left-0"></div>
      <!-- /wp:group -->

      <!-- wp:image -->
      <figure class="wp-block-image w-full h-full absolute top-0 left-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/osiedle-srebrniki-bg.jpeg" alt="banner-background">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] desktop:pl-[80px] z-[2] relative text-white">
        <!-- wp:group -->
        <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[160px] mb-[50px] leading-[44px] desktop:leading-[70px]">
          <!-- wp:heading {"level":1} -->
          <h1><span class="font-bold" data-aos="fade-right" data-aos-offset="30">Galeria Osiedla Srebrniki</span></h1>
          <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:pattern {"slug":"searchbar-mieszkania"} /-->

  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] relative">
    <!-- wp:group -->
    <div class="wp-block-group row-links my-[40px] flex flex-wrap justify-center items-center gap-[20px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/o-inwestycji-osiedle-srebrniki' ?>" class="text-[#8a8f99] hover:text-[#3e4759]" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja-osiedle-srebrniki' ?>" class="text-[#8a8f99]" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lista-mieszkan-osiedle-srebrniki' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria-osiedle-srebrniki' ?>" class="hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy-osiedle-srebrniki' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group container mb-[80px]">
      <!-- wp:group -->
      <div id="lipiec" class="wp-block-group row-wizualizacje mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Wizualizacje</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/img1.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/img2.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/img3.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/img4.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/img5.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/img6.jpg" alt="slide">
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
      <div id="marzec" class="wp-block-group row-zdjecia mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Zdjęcia</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img1.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img2.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img3.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img4.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img5.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img6.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img7.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img8.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img9.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img10.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img11.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img12.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img13.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img14.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img15.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img16.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img17.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img18.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/zdjecia/img19.jpg" alt="slide">
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
      <div id="kwiecien" class="wp-block-group row-okolica mb-[80px]">
        <!-- wp:group -->
        <div class="wp-block-group col-sm-6 col-sm-push-3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[#8a8f99]">Okolica</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/okolica/img1.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/okolica/img2.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/okolica/img3.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide block desktop:hidden">

                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide block desktop:hidden">

                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide block desktop:hidden">

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