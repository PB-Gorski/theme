<?php

/**
 * Title: newsletter
 * Slug: newsletter
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="newsletter" class="wp-block-group newsletter py-[60px] relative bg-[#3d4b67] transition ease duration-[300ms]">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] h-full desktop:flex items-center gap-[80px]">
    <!-- wp:group -->
    <div class="wp-block-group col1 desktop:w-[50%] mb-[20px] desktop:mb-0">
      <!-- wp:heading {"level":3} -->
      <h3 class="wp-block-heading text-white text-[25px] desktop:text-[40px] leading-[150%]">Bądź zawsze na bieżąco z naszą ofertą - zapisz się do newslettera</h3>
      <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group col2 desktop:w-[50%]">
      <!-- wp:group -->
      <div class="wp-block-group input mb-[15px] desktop:flex">
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