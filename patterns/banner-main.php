<?php

/**
 * Title: banner
 * Slug: banner-main
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner h-[80vh] relative">
  <!-- wp:group -->
  <div class="wp-block-group call-back-modal w-[850px] h-[370px] bg-white absolute top-[50%] left-[50%] translate-y-[-50%] translate-x-[-50%] before:content-[''] before:inline-block before:absolute before:top-0 before:left-0 before:w-full before:h-ful before:bg-rgba(0,0,0,0.5) before:transition-height before:duration-300 before:ease z-[3]">

  </div>
  <!-- /wp:group -->
  <!-- wp:group -->
  <div class="wp-block-group call-back-pop-up w-[200px] h-[280px] text-[16px] text-center bg-transparent flex flex-col jusify-center items-center fixed bottom-[30px] right-[20px] z-[2]">
    <!-- wp:group -->
    <div class="wp-block-group text mb-[10px] w-full h-[160px] bg-white flex flex-col justify-center items-center gap-y-[10px] shadow-lg">
      <!-- wp:paragraph -->
      <p>Zostaw swój numer -</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="font-bold">Odzwonimy do Ciebie</p>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group group btn-find-more relative bg-primaryRed text-white w-[170px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-btnHoverRed before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="font-bold z-[1]">Zostaw numer</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image -->
    <figure class="wp-block-image phone-icon cursor-pointer">
      <img src="<?php echo home_url() ?>//wp-content/themes/pbgorski/assets/img/frontpage/phone-icon.png" alt="phone-icon">
    </figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group h-[80%] mx-auto">
    <!-- wp:group -->
    <div class="wp-block-group h-[80%] w-full">
      <!-- wp:core/video -->
      <figure class="wp-block-video banner-video"><video autoplay="true" loop muted preload src="https://www.pbgorski.pl/assets/front/videos/header/hp.mp4?1688121499"></video>
      </figure>
      <!-- /wp:core/video -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->