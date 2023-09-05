<?php

/**
 * Title: search-bar
 * Slug: search-bar
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="search-bar" class="wp-block-group search-bar h-[800px]">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:paragraph -->
    <p>input serach</p>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph -->
    <label for="name">Name (4 to 8 characters):</label>

    <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10" />
    <!-- /wp:paragraph -->

    <div class="select-wrapper">
      <div class="select">
        <div class="select__trigger"><span>Tesla</span>
          <div class="arrow"></div>
        </div>
        <div class="custom-options">
          <span class="custom-option selected" data-value="tesla">Tesla</span>
          <span class="custom-option" data-value="volvo">Volvo</span>
          <span class="custom-option" data-value="mercedes">Mercedes</span>
        </div>
      </div>
    </div>
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->