<?php

/**
 * Title: search-bar
 * Slug: search-bar
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="search-bar" class="wp-block-group search-bar h-[115px] bg-bgLightGray py-[25px] transition-height duration-300 ease">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] text-[18px] flex gap-[1px]">
    <!-- wp:group -->
    <div class="wp-block-group miasto select-wrapper">
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
    <div class="wp-block-group inwestycje select-wrapper">
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

    <!-- wp:group -->
    <div class="wp-block-group btn-more w-[265px] h-[65px] bg-white flex gap-[10px] justify-center items-center cursor-pointer">
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
    <div class="wp-block-group group btn-search relative bg-primaryRed text-white w-[245px] h-[65px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-btnHoverRed before:transition-height before:duration-300 before:ease-in cursor-pointer">
      <!-- wp:paragraph -->
      <p class="font-bold">
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
      <p class="font-bold">Szukaj</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->