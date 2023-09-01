<?php

/**
 * Title: search-bar
 * Slug: search-bar
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="search-bar" class="wp-block-group banner relative mb-0 pt-[80px] desktop:pt-[80px] h-fit desktop:h-screen overflow-hidden desktop:overflow-visible">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <form action="" method="get">
      <label for="lokal">Choose your browser from the list:</label>
      <input list="lokale" name="lokal" id="lokal">
      <datalist id="lokale">
        <option value="lokal1">
        <option value="lokal2">
        <option value="lokal3">
        <option value="lokal4">
        <option value="lokal5">
      </datalist>
      <input type="submit">
    </form>
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->