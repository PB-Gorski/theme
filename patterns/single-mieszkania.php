<?php

/**
 * Title: single-mieszkania
 * Slug: single-mieszkania
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Wpis" class="wp-block-group mieszkania-page-post mb-[150px] ooverflow-hidden relative">
  <!-- wp:group -->
  <div class="wp-block-group banner w-full h-[460px] relative py-[60px] before:content-[''] before:inline-block before:w-full before:h-full before:bg-[#091224] before:absolute before:top-0 before:left-0 before:opacity-[25%]">
    <!-- wp:image -->
    <figure class="wp-block-image w-full h-full absolute top-0 left-0 z-[-1]">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-lista-mieszkan/lista-mieszkan-bg.jpeg" alt="banner-bg">
    </figure>
    <!-- /wp:image -->

    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px]">
      <!-- wp:paragraph -->
      <a href="/mieszkania/" class="group mb-[20px] btn-back desktop:mb-[40px] w-fit flex items-center gap-[8px]">
        <!-- wp:paragraph -->
        <p class="text-[18px] text-[#b9bdc5] hover:text-white opacity-[0.75] transition duration-300 ease">&larr; Wyszukiwanie</p>
        <!-- /wp:paragraph -->
      </a>
      <!-- /wp:paragraph -->

      <!-- wp:group -->
      <div class="wp-block-group title-wrapper z-[1] relative">
        <!-- wp:group -->
        <div class="wp-block-group title text-white text-[36px] desktop:text-[60px] font-bold mb-[20px] leading-[45px] desktop:leading-[70px]">
          <!-- wp:post-title /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group sub-title text-[24px] text-[#8a8f99] flex gap-[4px]">
          <!-- wp:paragraph -->
          <p class="max-w-[550px] text-[#b9bdc5] opacity-[0.75] ">W inwestycji </p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"osiedla"} /-->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group bar-info max-w-[1260px] w-full mx-auto h-[120px] bg-[#2e384d] px-[50px] text-white text-[24px] absolute bottom-[-60px] left-[50%] translate-x-[-50%] flex justify-center items-center">
      <!-- wp:group -->
      <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px] flex items-center desktop:gap-[110px]">
        <!-- wp:group -->
        <div class="wp-block-group col">
          <!-- wp:paragraph -->
          <p class="mb-[10px] uppercase text-[10px] text-[rgba(255,255,255,0.6)]">odbiór</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"termin"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group col">
          <!-- wp:paragraph -->
          <p class="mb-[10px] uppercase text-[10px] text-[rgba(255,255,255,0.6)]">powierzchnia</p>
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
        <div class="wp-block-group col">
          <!-- wp:paragraph -->
          <p class="mb-[10px] uppercase text-[10px] text-[rgba(255,255,255,0.6)]">kondygnacja</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"pietro"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group col">
          <!-- wp:paragraph -->
          <p class="mb-[10px] uppercase text-[10px] text-[rgba(255,255,255,0.6)]">liczba pokoi</p>
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
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group container mx-auto relative desktop:px-0 px-[20px] pt-[140px] pb-[100px]">
    <!-- wp:paragraph -->
    <p class="mb-[60px] text-[24px]">Przykładowa aranżacja <span class="text-[#828894]">(kliknij zdjęcie by powiększyć)</span></p>
    <!-- /wp:paragraph -->

    <!-- wp:group -->
    <div class="wp-block-group two-col-layout flex justify-center px-[50px]">
      <!-- wp:group -->
      <div class="wp-block-group left-col w-[60%]">
        <!-- wp:post-content /-->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group right-col w-[40%] pl-[40px] pt-[50px]">
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
        <p class="text-[18pxpx] mb-[20px] text-primaryRed">Zapytaj o kredyt</p>
        <!-- /wp:paragraph -->
        <!-- wp:group -->
        <div class="wp-block-group group mb-[20px] btn-download relative bg-[#f5f7fa] text-textGray w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#e9ecf2] before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p class="font-bold z-[1]">Pobierz kartę lokalu</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group group btn-find-more relative bg-[#3d4b66] text-white w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
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
    <div class="wp-block-group apartment-info pl-[50px]">
      <!-- wp:paragraph -->
      <p class="mb-[50px] text-[24px] text-[#828894]">Lokalizacja mieszkania na kondygnacji</p>
      <!-- /wp:paragraph -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[30px] flex gap-[50px]">
        <!-- wp:group -->
        <div class="wp-block-group text-[30px]">
          <!-- wp:paragraph -->
          <p class="uppercase text-[10px] text-[#a1a7b2]">budynek</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"nr"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group text-[30px]">
          <!-- wp:paragraph -->
          <p class="uppercase text-[10px] text-[#a1a7b2]">klatka</p>
          <!-- /wp:paragraph -->
          <!-- wp:post-terms {"term":"budynek"} /-->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group text-[30px]">
        <!-- wp:paragraph -->
        <p class="uppercase text-[10px] text-[#a1a7b2]">kondygnacja</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class=" text-[30px]">Piętro</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:post-terms {"term":"pietro"} /-->
    </div>
    <!-- /wp:group -->




  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->