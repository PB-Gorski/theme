<?php

/**
 * Title: single-mieszkania
 * Slug: single-mieszkania
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>


<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Wpis" class="wp-block-group mieszkania-page-post ooverflow-hidden relative">
  <!-- wp:group -->
  <div class="wp-block-group hidden flex gap-[30px] items-center h-[47px] p-[5px_60px] rounded-full border-[2px] border-[rgba(255,255,255,0.33)]">
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

  <!-- wp:group -->
  <div class="wp-block-group banner w-full h-[460px] relative py-[60px] pt-[30px] desktop:pt-[60px] before:content-[''] before:inline-block before:w-full before:h-full before:bg-[#091224] before:absolute before:top-0 before:left-0 before:opacity-[25%]">
    <!-- wp:image -->
    <figure class="wp-block-image hidden w-full h-full absolute top-0 left-0 z-[-1]">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-lista-mieszkan/lista-mieszkan-bg.jpeg" alt="banner-bg ">
    </figure>
    <!-- /wp:image -->

    <!-- wp:post-featured-image /-->

    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-[50px] px-[20px]">
      <!-- wp:group -->
      <div class="wp-block-group group mb-[20px] btn-back desktop:mb-[40px] w-fit flex items-center gap-[8px]">
        <!-- wp:paragraph -->
        <p class="text-[18px] text-white hover:opacity-[1] opacity-[0.5] transition duration-300 ease"><a href="#" class="js-backToList">&larr; Wyszukiwanie</a></p>
        <!-- wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group title-wrapper relative">
        <!-- wp:group -->
        <div class="wp-block-group title text-white text-[36px] desktop:text-[60px] font-bold mb-[10px] desktop:mb-[20px] leading-[45px] desktop:leading-[70px]">
          <!-- wp:post-title /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group sub-title desktop:text-[24px] text-[20px] text-[#8a8f99] flex gap-[4px]">
          <!-- wp:paragraph -->
          <p class="max-w-[550px] text-white font-medium opacity-[0.5] ">W inwestycji </p>
          <!-- /wp:paragraph -->

          <!-- wp:group -->
          <div class="wp-block-group text-white">
            <!-- wp:post-terms {"term":"inwestycja"} /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group bar-info max-w-[1260px] w-full mx-auto desktop:h-[120px] bg-[#2e384d] desktop:px-[50px] text-white text-[24px] absolute bottom-[-60px] left-[50%] translate-x-[-50%] flex justify-center items-center">
      <!-- wp:group -->
      <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px] py-[30px] desktop:py-0 flex items-center desktop:gap-[110px] flex-wrap">
        <!-- wp:group -->
        <div class="wp-block-group col mb-[15px] basis-1/2 desktop:basis-auto">
          <!-- wp:paragraph -->
          <p class="mb-[5px] uppercase text-[10px] text-[rgba(255,255,255,0.6)]">odbiór</p>
          <!-- /wp:paragraph -->
          <!-- wp:group -->
          <div class="wp-block-group text-[20px]">
            <!-- wp:post-terms {"term":"termin"} /-->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group col mb-[15px] basis-1/2 desktop:basis-auto">
          <!-- wp:paragraph -->
          <p class="mb-[5px] uppercase text-[10px] text-[rgba(255,255,255,0.6)]">powierzchnia</p>
          <!-- /wp:paragraph -->
          <!-- wp:group -->
          <div class="wp-block-group wrapper flex gap-[4px]">
            <!-- wp:post-terms {"term":"metraz"} /-->

            <!-- wp:paragraph -->
            <p>m<sup>2</sup></p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group col mb-[15px] basis-1/2 desktop:basis-auto">
          <!-- wp:paragraph -->
          <p class="mb-[5px] uppercase text-[10px] text-[rgba(255,255,255,0.6)]">kondygnacja</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"pietro"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group col mb-[15px] basis-1/2 desktop:basis-auto">
          <!-- wp:paragraph -->
          <p class="mb-[5px] uppercase text-[10px] text-[rgba(255,255,255,0.6)]">liczba pokoi</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"pokoje"} /-->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group container mx-auto modal relative desktop:px-0 px-[20px]">
    <!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
    <div class="wp-block-group relative">
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

    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px] pt-[140px] pb-[100px]">
    <!-- wp:paragraph -->
    <p class="desktop:mb-[60px] mb-0 text-[24px] font-medium">Przykładowa aranżacja <span class="text-[#828894] font-normal desktop:text-[24px] text-[18px]">(kliknij zdjęcie by powiększyć)</span></p>
    <!-- /wp:paragraph -->

    <!-- wp:group -->
    <div class="wp-block-group two-col-layout desktop:mb-[30px] mb-[80px] desktop:flex justify-center desktop:px-[50px]">
      <!-- wp:group -->
      <div class="wp-block-group left-col desktop:w-[60%]">
        <!-- wp:post-content /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group right-col desktop:w-[40%] desktop:pl-[40px] desktop:pt-[50px] pt-0">
        <!-- wp:paragraph -->
        <p class="uppercase text-[10px] text-[#a1a7b2]">cena lokalu</p>
        <!-- /wp:paragraph -->
        <!-- wp:group -->
        <div class="wp-block-group price text-[36px] flex gap-[4px]">
          <!-- wp:post-terms {"term":"cena"} /-->
          <!-- wp:paragraph -->
          <p class="text-[36px] flex gap-[4px]"> zł</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:paragraph -->
        <p class="text-[18pxpx] mb-[20px] text-primaryRed"><a href="<?php echo home_url() . '/kredyty'; ?>"> Zapytaj o kredyt</a></p>
        <!-- /wp:paragraph -->
        <!-- wp:group -->
        <div class="wp-block-group hidden group mb-[20px] btn-download relative bg-[#f5f7fa] text-textGray w-full desktop:w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#e9ecf2] before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p class="font-bold z-[1] hidden">Pobierz kartę lokalu</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group hidden group mb-[80px] btn-download relative bg-[#f5f7fa] text-textGray w-full desktop:w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#e9ecf2] before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p>empty</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group group btn-find-more relative bg-[#3d4b66] text-white w-full desktop:w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p class="font-bold z-[1]">Zapytaj o mieszkanie</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group apartment-info desktop:pl-[50px]">
      <!-- wp:paragraph -->
      <p class="mb-[50px] text-[24px]">Lokalizacja mieszkania na kondygnacji</p>
      <!-- /wp:paragraph -->

      <!-- wp:group -->
      <div class="wp-block-group desktop:mb-[30px] mb-[20px] flex gap-[50px]">
        <!-- wp:group -->
        <div class="wp-block-group text-[30px]">
          <!-- wp:paragraph -->
          <p class="uppercase text-[10px] text-[#a1a7b2]">budynek</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"budynek"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group text-[30px] desktop:text-[30px] text-[24px]">
          <!-- wp:paragraph -->
          <p class="uppercase text-[10px] text-[#a1a7b2]">klatka</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"nr"} /-->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group text-[30px] desktop:text-[30px] text-[24px]">
        <!-- wp:paragraph -->
        <p class="uppercase text-[10px] text-[#a1a7b2]">kondygnacja</p>
        <!-- /wp:paragraph -->

        <!-- wp:group -->
        <div class="wp-block-group flex gap-[8px]">
          <!-- wp:paragraph -->
          <p class=" text-[30px]">Piętro</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"pietro"} /-->
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