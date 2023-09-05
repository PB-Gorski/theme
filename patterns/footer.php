<?php

/**
 * Title: footer
 * Slug: footer
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="footer" class="wp-block-group footer h-[450px] relative">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] h-full flex">
    <!-- wp:group -->
    <div class="wp-block-group col1 w-[30%]">
      <!-- wp:paragraph -->
      <p>
        <a href="/" class="w-[35px] h-[27px] fixed top-[15px] left-[20px]">
          <!-- wp:image -->
          <figure class="wp-block-image menu-logo desktop:hidden mr-[10px]">
            <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/frontpage/logo.png" alt="pb-gorski-logo" />
          </figure>
          <!-- /wp:image -->
        </a>
      </p>
      <!-- /wp:paragraph -->

      <!-- wp:group -->
      <div class="wp-block-group company-info text-[14px] text-[#959ba6] leading-[20px] flex">
        <!-- wp:group -->
        <div class="wp-block-group col1 w-[50%]">
          <!-- wp:paragraph -->
          <p>ul. Joachima Lelewela</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p>37 lok. E,</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p>80-442 Gdańsk</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group col2 w-[50%]">
          <!-- wp:paragraph -->
          <p>tel.: (+48) 58 340-79-00</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p>tel.: (+48) 58 304-71-01</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p>sprzedaz@pbgorski.pl</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group socials flex">
        <!-- wp:group -->
        <div class="wp-block-group btn-fb bg-blue-700 text-white w-[20px] h-[20px] text-center rounded-[5px]">
          <!-- wp:paragraph -->
          <p>f</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:paragraph -->
        <p class="text-[#8a8f99]">Odwiedź nas na facebooku</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->