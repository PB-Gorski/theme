<?php

/*
 * Title: header
 * Slug: header
 * Categories: header
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Menu-desktop" class="wp-block-group nav-desktop relative hidden desktop:block">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto h-[100px] flex items-center">
    <!-- wp:group -->
    <div class="wp-block-group logo mr-[80px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url(); ?>">
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
    <div class="wp-block-group nav-wrapper w-full flex items center justify-between gap-[20px]">

      <!-- wp:navigation /-->

      <!-- wp:group -->
      <div class="wp-block-group modal w-full h-[209px] py-[20px] bg-bgLightGray opacity-0 absolute top-[100px] left-0 z-[-1] transition ease duration-300">
        <!-- wp:group -->
        <div class="wp-block-group container mx-auto">
          <!-- wp:list -->
          <ul class="wp-block-list mb-[20px] flex items-center gap-[20px] text-[14px] font-medium">
            <!-- wp:list-item -->
            <li class="uppercase allTabBtn tab-active text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
              WSZYSTKIE
            </li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="uppercase gdanskTabBtn text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
              GDAŃSK
            </li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="uppercase gdyniaTabBtn text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
              GDYNIA
            </li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="w-[1px] h-[32px] bg-[#8A8F99] opacity-[30%]">
              <p class="hidden">separator</p>
            </li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="uppercase text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
              <a href="<?php echo home_url(); ?>/inwestycje-zrealizowane">INWESTYCJE ZREALIZAOWANE</a>
            </li>
            <!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->



          <!-- wp:group -->
          <div class="wp-block-group tab1 block text-[17px] flex">
            <!-- wp:group -->
            <div class="wp-block-group col1 w-[60%] border-r-[1px] border-[rgba(138,143,153,0.30)]">
              <!-- wp:group -->
              <div class="wp-block-group title1 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Lista inwestycji</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray flex flex-wrap gap-x-[140px] gap-y-[10px]">
                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Osiedle Srebniki</a>
                </li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Św. Piotra</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Wieżycka Folwark</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Toruńska 16</a>
                </li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group col2 w-[40%] pl-[20px]">
              <!-- wp:group -->
              <div class="wp-block-group title2 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Wyszukiwanie</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray font-bold">
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-[7px] hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista mieszkań &rarr;</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista lokali uytkowych &rarr;</a>
                </li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->

            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
          <!-- wp:group -->
          <div class="wp-block-group tab2 gdansk hidden text-[17px] flex">
            <!-- wp:group -->
            <div class="wp-block-group col1 w-[60%]">
              <!-- wp:group -->
              <div class="wp-block-group title1 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Lista inwestycji</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list mb-[20px] text-textGray flex flex-wrap gap-x-[120px]">
                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Osiedle Srebniki2</a>
                </li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Wieżycka Folwark</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Toruńska 16</a>
                </li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->
              <!-- wp:group -->
              <div class="wp-block-group">
                <!-- wp:paragraph -->
                <a href="#" class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">Gdański: <span class="font-medium">Wszystkie inwestycje &rarr;</span></a>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group col2 w-[40%]">
              <!-- wp:group -->
              <div class="wp-block-group title2 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Wyszukiwanie2</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray font-bold">
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista mieszkań &rarr;</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista lokali uytkowych &rarr;</a>
                </li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->

            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
          <!-- wp:group -->
          <div class="wp-block-group tab3 hidden text-[17px] flex">
            <!-- wp:group -->
            <div class="wp-block-group col1 w-[60%]">
              <!-- wp:group -->
              <div class="wp-block-group title1 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Lista inwestycji3</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray flex flex-wrap gap-x-[120px]">
                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Osiedle Srebniki3</a>
                </li>
                <!-- /wp:list-item -->

                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Św. Piotra3</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Wieżycka Folwark</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Toruńska 16</a>
                </li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group col2 w-[40%]">
              <!-- wp:group -->
              <div class="wp-block-group title2 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Wyszukiwanie2</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray font-bold">
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista mieszkań &rarr;</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista lokali uytkowych &rarr;</a>
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



      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group btn-wrapper flex items-center gap-[10px]">
        <!-- wp:group -->
        <div class="wp-block-group btn-lang flex gap-[5px]">
          <!-- wp:paragraph -->
          <a href="#" class="">PL</a>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="">/</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <a href="#" class="">ENG</a>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group btn-fb bg-blue-700 text-white w-[20px] h-[20px] text-center rounded-[5px]">
          <!-- wp:paragraph -->
          <p>f</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group group btn-find-more relative bg-[#3d4b66] text-white w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p class="font-bold z-[1]">Znajdź mieszkanie</p>
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

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"anchor":true} -->
<div id="Mobile" class="wp-block-group nav-mobile h-[80px] bg-white text-textGray block desktop:hidden container mx-auto px-[20px] transition ease-out duration-300">
  <!-- wp:group -->
  <div class="wp-block-group h-full flex justify-between items-center">
    <!-- wp:group -->
    <div class="wp-block-group logo mr-[80px]">
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
    <div class="wp-block-group btn-open-menu ml-[10px] p-[13px_10px] w-[50px] h-[50px] bg-textGray font-medium cursor-pointer z-[2]">
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-white mb-[8px] rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line h-[2px] bg-white mb-[8px] rounded-[5px] transition-width ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-white rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:list -->
  <ul class="wp-block-list mobile-nav-menu text-[30px] w-screen h-screen overflow-scroll pt-[100px] bg-textGray text-white z-[1] flex flex-col items-center gap-y-[30px] fixed top-[0px] left-0 translate-x-[100%] opacity-[0] transition ease-in-out duration-500">
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/inwestycje/">Inwestycje</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/o-nas/">O nas</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/aktualnosci/">Aktualności</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/kredyty/">Kredyty</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/kontakt/">Kontakt</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:group -->
      <div class="wp-block-group btn-wrapper desktop:flex items-center gap-[10px]">
        <!-- wp:group -->
        <div class="wp-block-group btn-lang mb-[30px] desktop:mb-0 text-[18px] flex justify-center desktop:justify-start gap-[5px]">
          <!-- wp:paragraph -->
          <a href="#" class="">PL</a>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="">/</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <a href="#" class="">ENG</a>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group btn-fb hidden desktop:block bg-blue-700 text-white w-[20px] h-[20px] text-center rounded-[5px]">
          <!-- wp:paragraph -->
          <p>f</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group group btn-find-more relative bg-[#3d4b66] text-[18px] text-white font-bold w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p class="z-[1]">Znajdź mieszkanie</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->
</div>
<!-- /wp:group -->