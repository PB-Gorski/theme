<?php

/**
 * Title: banner
 * Slug: banner-main
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner h-screen desktop:h-screen">
  <!-- wp:group -->
  <div class="wp-block-group h-[80%] mx-auto">
    <!-- wp:group -->
    <div class="wp-block-group h-[80%] w-full">
      <!-- wp:core/video {"attributes":{"autoplay":true"}} -->
      <figure class="wp-block-video banner-video"><video id="vid" controls autoplay src="https://www.pbgorski.pl/assets/front/videos/header/hp.mp4?1688121499"></video>
        <figcaption class="wp-element-caption">My video</figcaption>
      </figure>
      <!-- /wp:core/video -->
      <!-- wp:core/video {"attribute":{"autoplay":true"}} -->
      <figure class="wp-block-video banner-video"><video id="vid2" controls autoplay loop muted preload allow="autoplay" src="https://www.pbgorski.pl/assets/front/videos/header/hp.mp4?1688121499"></video>
        <figcaption class="wp-element-caption">My video</figcaption>
      </figure>
      <!-- /wp:core/video -->
      <script>
        window.addEventListener("load", function() {
          document.getElementById('vid').play();
          document.getElementById('vid2').play();
        });
      </script>
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->