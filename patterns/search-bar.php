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

    <!-- wp:group -->
    <div class="wp-block-group select-wrapper">
      <!-- wp:group -->
      <div class="wp-block-group select">
        <!-- wp:group -->
        <div class="wp-block-group select__trigger">
          <!-- wp:paragraph -->
          <span>Tesla</span>
          <!-- /wp:paragraph -->
          <!-- wp:group -->
          <div class="wp-block-group arrow">
            <!-- wp:paragraph -->
            <p>-></p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group custom-options">
          <!-- wp:paragraph -->
          <span class="custom-option selected" data-value="tesla">Gdańsk</span>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <span class="custom-option" data-value="volvo">Gdynia</span>
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