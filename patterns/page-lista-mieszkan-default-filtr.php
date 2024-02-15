<?php

/**
 * Title: page-lista-mieszkan-default-filtr
 * Slug: page-lista-mieszkan-default-filtr
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Filtr" class="wp-block-group content bg-[#ebeef2] relative">
  <!-- wp:group -->
  <div class="wp-block-group">
    <!-- wp:list -->
    <ul class="wp-block-list js-lista-mieszkan-list w-full bg-white">
      <!-- wp:list-item -->
      <li class="short-code-ymc-filter applyContainer1 applyContainer2">
        <?php echo do_shortcode('[ymc_filter id="148"]'); ?>
        <?php
        $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));

        foreach ($terms as $term) {
          echo "<span data-investment-id='" . $term->term_id . "'></span>";
        }
        ?>
      </li>
      <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->