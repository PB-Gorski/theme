<?php

/**
 * Title: lista-lokali-banner
 * Slug: lista-lokali-banner
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner-lista-lokali relative">
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
  <div class="wp-block-group call-back-modal-bg hidden desktop:block opacity-0 z-[-1] bg-[rgba(61,75,102,0.5)] fixed top-0 left-0 w-screen h-screen transition duration-300 ease"></div>
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
  <div class="wp-block-group w-full h-[600px] relative py-[60px]">
    <!-- wp:image -->
    <figure class="wp-block-image w-full h-full absolute top-0 left-0 z-[-1]">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-lista-mieszkan/lista-mieszkan-bg.jpeg" alt="banner-bg">
    </figure>
    <!-- /wp:image -->
    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] desktop:pt-[100px]">
      <!-- wp:group -->
      <div class="wp-block-group title-wrapper">
        <!-- wp:group -->
        <div class="wp-block-group title text-white text-[36px] desktop:text-[60px] font-bold mb-[20px] leading-[45px] desktop:leading-[70px]">
          <!-- wp:paragraph -->
          <p data-aos="fade-right" data-aos-offset="30">Znajdź lokal</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group sub-title text-[24px] text-[#8a8f99]">
          <!-- wp:paragraph -->
          <p class="max-w-[550px] text-white opacity-[0.75]" data-aos="fade-right" data-aos-offset="30">Określ parametry, aby znaleźć lokal dokładnie
            taki, jakiego potrzebujesz.</p>
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