<?php

/**
 * Title: footer
 * Slug: footer
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="footer" class="wp-block-group footer h-[450px] py-[30px] relative">
  <!-- wp:group -->
  <div class="wp-block-group footer1 container mx-auto desktop:px-0 px-[20px] h-full flex">
    <!-- wp:group -->
    <div class="wp-block-group col1 w-[30%]">
      <!-- wp:group -->
      <div class="wp-block-group logo mr-[80px] mb-[25px]">
        <!-- wp:paragraph -->
        <a href="<?php home_url(); ?>">
          <!-- wp:image -->
          <figure class="wp-block-image w-[115px]">
            <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/frontpage/logo.png" alt="pb-gorski-logo" />
          </figure>
          <!-- /wp:image -->
        </a>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group company-info mb-[65px] text-[14px] text-[#959ba6] leading-[20px] flex">
        <!-- wp:group -->
        <div class="wp-block-group col1 w-[50%]">
          <!-- wp:paragraph -->
          <p>ul. Joachima Lelewela</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p>37 lok. E,</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p>80-442 Gdańsk</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group col2 w-[50%]">
          <!-- wp:paragraph -->
          <p>tel.: (+48) 58 340-79-00</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p>tel.: (+48) 58 304-71-01</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p>sprzedaz@pbgorski.pl</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group socials flex items-center gap-[3px]">
        <!-- wp:group -->
        <div class="wp-block-group btn-fb bg-[#2d384c] text-white w-[30px] h-[30px] text-center rounded-[5px]">
          <!-- wp:paragraph -->
          <p>f</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:paragraph -->
        <p class="text-[#8a8f99] text-[16px]">Odwiedź nas na facebooku</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group col2 w-[70%]">
      <!-- wp:group -->
      <div class="wp-block-group mb-[90px] w-full flex justify-between">
        <!-- wp:group -->
        <div class="wp-block-group inner-col1">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[16px] font-bold">Miasta inwestycji</p>
          <!-- /wp:paragraph -->
          <!-- wp:list -->
          <ul class="wp-block-list text-[#8a8f99] text-[14px]">
            <!-- wp:list-item -->
            <li class="mb-[10px]">
              <a href="#">Gdańsk</a>
            </li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li>
              <a href="#">Gdynia</a>
            </li>
            <!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group inner-col2">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[16px] font-bold">Dla klientów</p>
          <!-- /wp:paragraph -->
          <!-- wp:list -->
          <ul class="wp-block-list text-[#8a8f99] text-[14px]">
            <!-- wp:list-item -->
            <li class="mb-[10px]">
              <a href="#">Kredyty</a>
            </li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li>
              <a href="#">Znajdź mieszkanie</a>
            </li>
            <!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group inner-col3">
          <!-- wp:paragraph -->
          <p class="mb-[20px] text-[16px] font-bold">Przedsiębiorstwo Budowlane Górski</p>
          <!-- /wp:paragraph -->
          <!-- wp:group -->
          <div class="wp-block-group two-lists flex gap-[50px]">
            <!-- wp:list -->
            <ul class="wp-block-list text-[#8a8f99] text-[14px]">
              <!-- wp:list-item -->
              <li class="mb-[10px]">
                <a href="#">Aktualności</a>
              </li>
              <!-- /wp:list-item -->
              <!-- wp:list-item -->
              <li>
                <a href="#">Kontakt</a>
              </li>
              <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
            <!-- wp:list -->
            <ul class="wp-block-list text-[#8a8f99] text-[14px]">
              <!-- wp:list-item -->
              <li class="mb-[10px]">
                <a href="#">Dla Akcjonariuszy</a>
              </li>
              <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[14px] italic text-[#959ba6]">Niniejsza strona ma charakter informacyjny, nie stanowi oferty handlowej w rozumieniu Art. 66 par. 1 Kodeksu Cywilnego. Wizualizacje i modele budynków przedstawione na stronie internetowej www.pbgorski.pl mają postać zbliżoną do finalnego obiektu, tj. mogą odbiegać od docelowego, rzeczywistego wyglądu budynków i ich zagospodarowania terenu, otoczenia w szczególności w zakresie kolorystyki oraz konstrukcji. Zmianie nie ulegną istotne cechy świadczenia oraz funkcjonalność budynków</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group footer2 container mx-auto desktop:px-0 px-[20px] border-t-[1px] border-[rgba(0,0,0,0.1)] flex justify-between">
    <!-- wp:group -->
    <div class="wp-block-group col1 flex gap-[20px]">
      <!-- wp:paragraph -->
      <p>Copyright © 2023 </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p>PBGórski</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p>Wszelkie prawa zastrzeżone</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p>RODO</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p>Polityka Cookies</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group col2">
      <!-- wp:paragraph -->
      <p>Projekt i wykonanie</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->