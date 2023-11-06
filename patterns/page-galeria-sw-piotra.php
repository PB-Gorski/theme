<?php

/**
 * Title: page-galeria-sw-piotra
 * Slug: page-galeria-sw-piotra
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
    <div class="wp-block-group call-back-modal-bg hidden desktop:block opacity-0 z-[-1] bg-[rgba(61,75,102,0.5)] fixed top-0 left-0 w-screen h-screen transition duration-300 ease">
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group call-back-modal hidden desktop:block opacity-0 w-[850px] h-[370px] p-[45px_60px] bg-white fixed top-[50%] left-[50%] translate-y-[-50%] translate-x-[-50%] z-[-1] transition duration-300 ease">
      <!-- wp:group -->
      <div class="wp-block-group btn-close absolute top-[-5px] right-[15px] cursor-pointer">
        <!-- wp:paragraph -->
        <p class="text-[40px] text-bgDarkGray opacity-[50%]">×</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[40px] text-center font-bold">Zamów darmowe połączenie</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="text-center text-bgDarkGray mb-[35px]">Zostaw numer, nasz konsultant oddzwoni do Ciebie</p>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group input mb-[25px] flex">
        <!-- wp:paragraph -->
        <p class="w-[370px] h-[60px] bg-white text-bgDarkGray text-[14px] leading-[150%]">Numer telefonu</p>
        <!-- /wp:paragraph -->
        <!-- wp:group -->
        <div class="wp-block-group group btn relative bg-[#e80d38] text-white w-[370px] h-[60px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-btnHoverRed before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p class="font-bold z-[1]">Zamawiam rozmowę</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group input checkbox">
        <!-- wp:paragraph -->
        <p class="text-bgDarkGray text-[12px] leading-[22px]">Wyrażam zgodę na używanie przez PB Górski sp. z o.o. S.K.A. telekomunikacyjnych urządzeń końcowych dla celów marketingu bezpośredniego, tj. aby przedstawić oferty PB Górski sp. z o.o. S.K.A. telefonicznie. Jednocześnie informujemy, że rozmowa będzie nagrywana. Administratorem Danych Osobowych jest PB Górski sp. z o.o. S.K.A. z siedzibą w Gdańsku (80-312) ul. Wita Stwosza 31A/31. tutaj</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group w-full h-[250px] desktop:h-[770px] bg-banner relative flex desktop:block items-center">
      <!-- wp:image -->
      <figure class="wp-block-image w-full h-full absolute top-0 left-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/sw-piotra-bg.jpg" alt="banner-background">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] desktop:pl-[80px] z-[0] relative text-white">
        <!-- wp:group -->
        <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[160px] mb-[50px] leading-[44px] desktop:leading-[70px]">
          <!-- wp:paragraph -->
          <p class="font-bold" data-aos="fade-right" data-aos-offset="30">Galeria Św. Piotra</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->


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
      <a href="<?php echo home_url() . '/mieszkania' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria-sw-piotra' ?>" class="hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group container mb-[80px]">
      <!-- wp:group -->
      <div id="wizualizacje" class="wp-block-group row-wizualizacje mb-[80px]">
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
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/wizualizacje/img1.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/wizualizacje/img2.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/wizualizacje/img3.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/wizualizacje/img4.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/wizualizacje/img5.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/wizualizacje/img6.jpg" alt="slide">
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
      <div id="zdjecia" class="wp-block-group row-zdjecia mb-[80px]">
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
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img1.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img2.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img3.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img4.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img5.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img6.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img7.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img8.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img9.jpg" alt="slide">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group -->
                <div class="wp-block-group swiper-slide swiper-slide-hover">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-full w-full">
                    <img src="https://pbgorski.webo.design/pl/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/galeria/zdjecia/img10.jpg" alt="slide">
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