<?php

/**
 * Title: banner
 * Slug: banner-main
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner h-screen desktop:h-screen relative">
  <!-- wp:group -->
  <div class="wp-block-group call-back-pop-up w-[200px] h-[160px] test bg-white absolute bottom-[0px] right-[0px]">
    <!-- wp:paragraph -->
    <p>Zostaw swój numer -</p>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph -->
    <p class="font-bold">Odzwonimy do Ciebie</p>
    <!-- /wp:paragraph -->
    <!-- wp:group -->
    <div class="wp-block-group group btn-find-more relative bg-primaryRed text-white w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-[230px] before:min-h-[0%] hover:before:min-h-[100%] before:bg-btnHoverRed before:transition-height before:duration-300 before:ease cursor-pointer">
      <!-- wp:paragraph -->
      <p class="font-bold z-[1]">Zostaw numer</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:image -->
    <figure class="wp-block-image">
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