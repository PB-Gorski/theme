<?php

/**
 * Title: archive-mieszkania
 * Slug: archive-mieszkania
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="content" class="wp-block-group content relative ">
  <!-- wp:group -->
  <div class="wp-block-group bg-bgLightGray">
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
      <ul class="wp-block-list">
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
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->