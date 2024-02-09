<?php

/**
 * Title: newsletter
 * Slug: newsletter
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="newsletter" class="wp-block-group newsletter py-[30px] relative bg-[#3d4b67f5]">
  <!-- wp:image -->
  <figure class="wp-block-image w-full h-full absolute top-0 left-0 z-[-1] overflow-hidden">
    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/frontpage/newsletter-bg.jpeg" alt="banner-background">
  </figure>
  <!-- /wp:image -->
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] h-full">
    <!-- wp:heading {"level":3} -->
    <h3 class="wp-block-heading mb-[20px] desktop:mb-[40px] mt-0 text-white text-[25px] font-semibold desktop:text-[36px] leading-[150%] text-center">Dowiedz się pierwszy o najnowszych ofertach</h3>
    <!-- /wp:heading -->

    <!-- wp:group -->
    <div class="wp-block-group mb-[15px] desktop:flex justify-center items-center">
      <!-- wp:shortcode -->
      <?php echo do_shortcode('[contact-form-7 id="8efafb8" title="Newsletter - formularz"]'); ?>
      <!-- /wp:shortcode -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->