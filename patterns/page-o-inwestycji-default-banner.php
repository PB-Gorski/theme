<?php

/**
 * Title: o-inwestycji-default-banner
 * Slug: o-inwestycji-default-banner
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner h-[50vh] desktop:h-[90vh] relative">
  <!-- wp:group -->
  <div class="wp-block-group w-full h-full bg-banner relative flex desktop:block items-center">
    <!-- wp:image -->
    <figure class="wp-block-image w-full h-full desktop:h-[90vh] absolute top-0 left-0">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/osiedle-srebrniki-bg2.jpeg" alt="banner-background">
    </figure>
    <!-- /wp:image -->

    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] z-[0] relative text-white">
      <!-- wp:group -->
      <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[290px] mb-[50px] leading-[44px] desktop:leading-[70px]">
        <!-- wp:paragraph -->
        <span class="block font-bold underline underline-offset-[20px]" data-aos="fade-right" data-aos-offset="30">Podaj nazwe osiedla</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="block uppercase text-[18px] trancking-[10px]" data-aos="fade-right" data-aos-offset="30">Podaj miasto</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->