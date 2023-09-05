<?php

/**
 * Title: search-bar
 * Slug: search-bar
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="search-bar" class="wp-block-group search-bar h-fit bg-bgLightGray py-[25px]">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] flex gap-[1px]">
    <!-- wp:group -->
    <div class="wp-block-group miasto select-wrapper">
      <!-- wp:group -->
      <div class="wp-block-group select">
        <!-- wp:group -->
        <div class="wp-block-group select__trigger">
          <!-- wp:paragraph -->
          <span>Miasto</span>
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
          <span>Inwestycje</span>
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
    <div class="wp-block-group btn-more w-[265px] h-[65px] flex gap-[10px] justify-center items-center">
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

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->