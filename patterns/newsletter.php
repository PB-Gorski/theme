<?php

/**
 * Title: newsletter
 * Slug: newsletter
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="newsletter" class="wp-block-group newsletter py-[60px] relative bg-[#3d4b6750]">
  <!-- wp:image -->
  <figure class="wp-block-image w-full h-full absolute top-0 left-0 z-[-1]">
    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/frontpage/newsletter-bg.jpeg" alt="banner-background">
  </figure>
  <!-- /wp:image -->
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] h-full">
    <!-- wp:group -->
    <div class="wp-block-group mb-[20px] desktop:mb-0">
      <!-- wp:heading {"level":3} -->
      <h3 class="wp-block-heading text-white text-[25px] desktop:text-[40px] leading-[150%]">Dowiedz się pierwszy o najnowszych ofertach</h3>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group">
      <!-- wp:group -->
      <div class="wp-block-group mb-[15px] desktop:flex">
        <!-- wp:shortcode -->
        <?php echo do_shortcode('[contact-form-7 id="e479141" title="newsletter"]'); ?>
        <!-- /wp:shortcode -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->