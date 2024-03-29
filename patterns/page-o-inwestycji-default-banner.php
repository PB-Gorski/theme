<?php

/**
 * Title: nok_o-inwestycji-default-banner
 * Slug: nok_o-inwestycji-default-banner
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner h-[50vh] desktop:h-[90vh] relative">
  <!-- wp:group -->
  <div class="wp-block-group w-full h-full bg-banner relative flex desktop:block items-center">
    <!-- wp:group -->
    <div class="wp-block-group banner-lista-mieszkan banner w-full h-full bg-black opacity-30 z-[1] absolute top-0 left-0"></div>
    <!-- /wp:group -->

    <!-- wp:image -->
    <figure class="wp-block-image w-full h-full desktop:h-[90vh] absolute top-0 left-0">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/osiedle-srebrniki-bg2.jpeg" alt="banner-background">
    </figure>
    <!-- /wp:image -->

    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] z-[2] relative text-white">
      <!-- wp:group -->
      <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[290px] mb-[50px] leading-[44px] desktop:leading-[70px]">
        <!-- wp:paragraph -->
        <span class="block font-bold underline underline-offset-[20px]" data-aos="fade-right" data-aos-offset="30">______ _______</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="block uppercase text-[18px] trancking-[10px]" data-aos="fade-right" data-aos-offset="30">_____ ______</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->