<?php

/**
 * Title: o-inwestycji-banner
 * Slug: o-inwestycji-banner
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner h-[80vh] desktop:h-[90vh] relative">
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
  <div class="wp-block-group w-full h-full bg-banner relative flex desktop:block items-center">
    <!-- wp:image -->
    <figure class="wp-block-image w-full h-[770px]  absolute top-0 left-0">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/osiedle-srebrniki-bg.jpeg" alt="banner-background">
    </figure>
    <!-- /wp:image -->

    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] desktop:pl-[80px] z-[0] relative text-white">
      <!-- wp:group -->
      <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[290px] mb-[50px] leading-[44px] desktop:leading-[70px]">
        <!-- wp:paragraph -->
        <p class="font-bold underline underline-offset-[20px]">Osiedle Srebrniki (manual)</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="uppercase text-[18px] trancking-[10px]">Gdańsk wrzeszcz</p>
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
<div class="wp-block-group search-wrapper relative mx-auto py-[20px] px-[20px] desktop:h-[100px] text-[18px] flex flex-col desktop:flex-row gap-[10px] desktop:gap-[1px] overflow-y-hidden transition-height duration-[400ms] ease">
  <!-- wp:group -->
  <div class="wp-block-group hidden miasto select-wrapper">
    <!-- wp:group -->
    <div class="wp-block-group select">
      <!-- wp:group -->
      <div class="wp-block-group select__trigger">
        <!-- wp:paragraph -->
        <span class="text-[#999] text-[18px]">Miasto</span>
        <!-- /wp:paragraph -->
        <!-- wp:group -->
        <div class="wp-block-group arrow">
          <!-- wp:paragraph -->
          <p class="hidden">-></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group custom-options">
        <!-- wp:paragraph -->
        <span class="custom-option" data-value="gdansk">Gdańsk</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="custom-option" data-value="gdynia">Gdynia</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group hidden inwestycje select-wrapper">
    <!-- wp:group -->
    <div class="wp-block-group select">
      <!-- wp:group -->
      <div class="wp-block-group select__trigger">
        <!-- wp:paragraph -->
        <span class="text-[#999]">Inwestycje</span>
        <!-- /wp:paragraph -->
        <!-- wp:group -->
        <div class="wp-block-group arrow">
          <!-- wp:paragraph -->
          <p class="hidden">-></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group custom-options">
        <!-- wp:paragraph -->
        <span class="custom-option" data-value="osiedle-srebniki">Osiedle Srebniki</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="custom-option" data-value="sw-piotra">Św. Piotra</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="custom-option" data-value="wiezyscka-folwark">Wiezycka Folwark</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="custom-option" data-value="torunska-16">Toruńska 16</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:list -->
  <ul class="wp-block-list w-full">
    <!-- wp:list-item -->
    <li>
      <?php do_action('show_beautiful_filters', 'mieszkania'); ?>
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->

  <!-- wp:group -->
  <div class="wp-block-group btns-wrapper flex flex-row ">
    <!-- wp:group -->
    <div class="wp-block-group btn-more w-full desktop:w-[230px] h-[62px] bg-[#f5f7fa] flex gap-[10px] justify-center items-center cursor-pointer">
      <!-- wp:paragraph -->
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" id="icon_filters" width="24" height="24" viewBox="0 0 24 24" class="injected-svg inject-svg icon-filters">
          <title>icon_filters</title>
          <path class="line" d="M6 4v16m6-16v16m6-16v16"></path>
          <circle class="circle" cx="6" cy="10" r="2"></circle>
          <circle class="circle" cx="12" cy="15" r="2"></circle>
          <circle class="circle" cx="18" cy="10" r="2"></circle>
        </svg>
      </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="text-[18px]">Więcej opcji</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group group opacity-0 btn-search relative bg-primaryRed text-white w-full desktop:w-[230px] h-[62px] flex items-center justify-center gap-[15px] before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#9C0927] before:transition-height before:duration-300 before:ease cursor-pointer">
      <!-- wp:paragraph -->
      <p class=" z-[1]">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="injected-svg inject-svg icon-search">
          <defs>
            <style></style>
          </defs>
          <g id="icon_search" fill="none" stroke="#fff" stroke-width="2">
            <circle cx="6.5" cy="6.5" r="5.5"></circle>
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-4-4"></path>
          </g>
        </svg>
      </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="font-bold z-[1]">Szukaj</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->