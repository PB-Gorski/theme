<?php

/**
 * Title: page-inwestycje-post
 * Slug: page-inwestycje-post
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje-post" class="wp-block-group inwestycje-post relative bg-[#f6f7fa]">
  <!-- wp:paragraph -->
  <p class="container mx-auto desktop:px-0 px-[20px] mb-[40px] text-[60px] text-[#2e384c]">Wszystkie inwestycje</p>
  <!-- /wp:paragraph -->

  <!-- wp:list -->
  <ul class="wp-block-list container mx-auto desktop:px-0 px-[20px] mb-[20px] flex items-center gap-[20px] text-[14px] font-medium">
    <!-- wp:list-item -->
    <li class="uppercase allTabBtn tab-active text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
      WSZYSTKIE
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase gdanskTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
      GDAŃSK
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase gdyniaTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
      GDYNIA
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->

  <!-- wp:group -->
  <div class="wp-block-group">
    posts
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->