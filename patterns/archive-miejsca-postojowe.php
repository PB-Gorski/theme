<?php

/**
 * Title: archive-miejsca-postojowe
 * Slug: archive-miejsca-postojowe
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="content" class="wp-block-group miejsca-postojowe content bg-[#ebeef2] relative">
  <!-- wp:group -->
  <div class="wp-block-group">
    <!-- wp:list -->
    <ul class="wp-block-list js-lista-mieszkan-list w-full bg-white">
      <!-- wp:list-item -->
      <li class="short-code-ymc-filter applyContainer1 applyContainer2">
        <div class="search_tabs container flex justify-center items-center">
          <div class="tab_mieszkania search_tab-active">
            <p class=""><a href="<?php echo home_url() ?>/mieszkania">Mieszkania</a></p>
          </div>
          <div class="tab_mieszkania">
            <p class=""><a href="<?php echo home_url() ?>/lokale">Lokale użytkowe</a></p>
          </div>
          <div class="tab_mieszkania">
            <p class=""><a href="<?php echo home_url() ?>/lista-miejsca-postojowe">Miejsca postojowe</a></p>
          </div>
        </div>
      </li>
      <!-- /wp:list-item -->
      <!-- wp:list-item -->
      <li class="short-code-ymc-filter hidden applyContainer1 applyContainer2">
        <p>Miejsca postojowe</p>
      </li>
      <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->