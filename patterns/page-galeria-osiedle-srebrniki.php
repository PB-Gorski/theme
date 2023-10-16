<?php

/**
 * Title: page-galeria-osiedle-srebrniki
 * Slug: page-galeria-osiedle-srebrniki
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
    <div class="wp-block-group mobile-fixed-phone block desktop:hidden flex justify-center items-center bg-primaryRed w-full h-[87px] fixed bottom-0 left-0 z-[2]">
      <!-- wp:group -->
      <div class="wp-block-group flex gap-[30px] items-center h-[47px] p-[5px_60px] rounded-full border-[2px] border-[rgba(255,255,255,0.33)]">
        <!-- wp:image -->
        <figure class="wp-block-image m-0">
          <img src="<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/frontpage/phone-2.png'; ?>" alt="phone-icon">
        </figure>
        <!-- /wp:image -->
        <!-- wp:paragraph -->
        <a href="tel:+48583407900" class="text-white ">(+48) 58 340-79-00</a>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
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
    <div class="wp-block-group call-back-pop-up w-[200px] h-[280px] hidden desktop:block text-[16px] text-center bg-transparent flex flex-col jusify-center items-center fixed bottom-[30px] right-[20px] z-[2]">
      <!-- wp:group -->
      <div class="wp-block-group text mb-[10px] w-full h-[160px] bg-white flex flex-col justify-center items-center gap-y-[10px] shadow-lg">
        <!-- wp:paragraph -->
        <p>Zostaw swój numer -</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="font-bold">Odzwonimy do Ciebie</p>
        <!-- /wp:paragraph -->
        <!-- wp:group -->
        <div class="wp-block-group group btn-leave-phone relative bg-primaryRed text-white w-[170px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-btnHoverRed before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p class="font-bold z-[1]">Zostaw numer</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:image -->
      <figure class="wp-block-image phone-icon mx-auto w-[92px] cursor-pointer">
        <img src="<?php echo home_url() ?>//wp-content/themes/pbgorski/assets/img/frontpage/phone-icon.png" alt="phone-icon">
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group w-full h-[250px] desktop:h-[770px] bg-banner relative flex desktop:block items-center">
      <!-- wp:image -->
      <figure class="wp-block-image w-full h-full absolute top-0 left-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/osiedle-srebrniki-bg.jpeg" alt="banner-background">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] desktop:pl-[80px] z-[0] relative text-white">
        <!-- wp:group -->
        <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[160px] mb-[50px] leading-[44px] desktop:leading-[70px]">
          <!-- wp:paragraph -->
          <p class="font-bold" data-aos="fade-right" data-aos-offset="30">Galeria Osiedla Srebrniki</p>
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
      <a href="<?php echo home_url() . '/galeria-osiedle-srebrniki' ?>" class="hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy-osiedle-srebrniki' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="hidden not_swiper not_mySwiper2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div thumbsSlider="" class="hidden not_swiper not_mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
        </div>
      </div>
    </div>


    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-push-3">
          <br />
          <h1 class="text-center">Wizualizacje</h1>
          <br />
          <br />
          <!-- Swiper -->
          <div class="swiper-container">
            <span class="close-button"></span>
            <div class="gallery-top">
              <div class="swiper-wrapper">
                <!-- <div class="swiper-slide bg-[url('<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/2LsfL9YCN8rA2V8Zm1PB14RVfZiBKIerrcOPcS8YCHFwQXuIqnq9cwbM557t_3jpg-image(1200x_).jpg'; ?>')]" style="background-image:url(<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/2LsfL9YCN8rA2V8Zm1PB14RVfZiBKIerrcOPcS8YCHFwQXuIqnq9cwbM557t_3jpg-image(1200x_).jpg'; ?>)"> -->
                <!-- wp:image -->
                <figure class="wp-block-image swiper-slide">
                  <img src="<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/galeria/wizualizacje/2LsfL9YCN8rA2V8Zm1PB14RVfZiBKIerrcOPcS8YCHFwQXuIqnq9cwbM557t_3jpg-image(1200x_).jpg'; ?>" alt="budowa">
                </figure>
                <!-- /wp:image -->
                <!-- </div> -->
                <div class="swiper-slide" style="background-image:url(https://unsplash.it/1920/1060)"></div>
                <div class="swiper-slide" style="background-image:url(https://unsplash.it/1920/1060)"></div>
              </div>
              <!-- Add Arrows -->
              <div class="swiper-button-next swiper-button-white"></div>
              <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <div class="gallery-thumbs">
              <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://unsplash.it/1920/1080)"></div>
                <div class="swiper-slide" style="background-image:url(https://unsplash.it/1920/1070)"></div>
                <div class="swiper-slide" style="background-image:url(https://unsplash.it/1920/1060)"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Slider main container3 -->
    <div class='hidden swiper-container'>
      <!-- Additional required wrapper -->
      <div class='swiper-wrapper'>
        <!-- Slides -->
        <div class='swiper-slide'>
          Slide 1
          <img src='https://farm5.staticflickr.com/4906/31468331457_2b30dda299_z.jpg' alt='Hubble’s Cosmic Holiday Wreath'>
          <figcaption>
            <a href='https://www.flickr.com/photos/gsfc/31468331457/'>"Hubble’s Cosmic Holiday Wreath" &copy; NASA </a><br />
            <a href='https://creativecommons.org/licenses/by/2.0/' target='_blank'>Creative Commons</a>
          </figcaption>
        </div>
        <div class='swiper-slide'>
          Slide 2
          <img src='https://farm5.staticflickr.com/4892/46385281411_69f232b371_z.jpg' alt='Launch of Apollo 8'>
          <figcaption>
            <a href='https://www.flickr.com/photos/gsfc/46385281411/'>"Launch of Apollo 8" &copy; NASA </a><br />
            <a href='https://creativecommons.org/licenses/by/2.0/' target='_blank'>Creative Commons</a>
          </figcaption>
        </div>
        <div class='swiper-slide'>
          Slide 3
          <img src='https://farm5.staticflickr.com/4849/44568285330_ff61d638a9_z.jpg' alt='Launch of Apollo 8 lunar orbit mission'>
          <figcaption>
            <a href='https://www.flickr.com/photos/gsfc/44568285330/'>"Launch of Apollo 8 lunar orbit mission" &copy; NASA </a><br />
            <a href='https://creativecommons.org/licenses/by/2.0/' target='_blank'>Creative Commons</a>
          </figcaption>
        </div>
      </div>
      <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

      <!-- If we need navigation buttons -->
      <div class='swiper-button-prev'></div>
      <div class='swiper-button-next'></div>
    </div>



  </div>
  <!-- /wp:group -->


</div>
<!-- /wp:group -->