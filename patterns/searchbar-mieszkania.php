<?php

/**
 * Title: searchbar-mieszkania
 * Slug: searchbar-mieszkania
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>




<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Searchbar" class="wp-block-group content bg-[#ebeef2] relative">
  <!-- wp:group -->
  <div class="wp-block-group">
    <!-- wp:list -->
    <ul class="wp-block-list js-lista-mieszkan-list w-full bg-white">
      <!-- wp:list-item -->
      <li class="short-code-ymc-filter applyContainer1 applyContainer2">
        <?php echo do_shortcode('[ymc_filter id="1850"]'); ?>
      </li>
      <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->