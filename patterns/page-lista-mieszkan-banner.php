<?php

/**
 * Title: lista-mieszkan-banner
 * Slug: lista-mieszkan-banner
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner-lista-mieszkan relative">
  <!-- wp:group -->
  <div class="wp-block-group w-full h-[480px] desktop:h-[600px] relative py-[60px]">
    <!-- wp:image -->
    <figure class="wp-block-image w-full h-full absolute top-0 left-0 z-[-1]">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-lista-mieszkan/lista-mieszkan-bg.jpeg" alt="banner-bg">
    </figure>
    <!-- /wp:image -->
    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] desktop:pt-[100px]">
      <!-- wp:group -->
      <div class="wp-block-group title-wrapper">
        <!-- wp:group -->
        <div class="wp-block-group title text-white text-[36px] desktop:text-[60px] font-bold mb-[20px] leading-[45px] desktop:leading-[70px]">
          <!-- wp:heading {"level":1} -->
          <h1><span data-aos="fade-right" data-aos-offset="30">Znajdź mieszkanie</span></h1>
          <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group sub-title text-[24px] text-[#8a8f99]">
          <!-- wp:paragraph -->
          <p class="max-w-[550px] text-white opacity-[0.75]" data-aos="fade-right" data-aos-offset="30">Określ parametry, aby znaleźć mieszkanie dokładnie
            takie, jakiego potrzebujesz.</p>
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