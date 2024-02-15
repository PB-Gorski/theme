<?php

/**
 * Title: page-lista-mieszkan-sw-piotra-filtr
 * Slug: page-lista-mieszkan-sw-piotra-filtr
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="content" class="wp-block-group content bg-[#ebeef2] relative">
  <!-- wp:group -->
  <div class="wp-block-group">
    <!-- wp:list -->
    <ul class="wp-block-list js-lista-mieszkan-list w-full bg-white">
      <!-- wp:list-item -->
      <li class="short-code-ymc-filter applyContainer1 applyContainer2">
        <?php echo do_shortcode('[ymc_filter id="148"]'); ?>
        <?php
        $scheme  = (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] === "off") ? "http" : "https";
        $url     = "$scheme://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $page_id = url_to_postid($url);
        $terms = wp_get_object_terms($page_id, 'inwestycja');

        echo "<span id='term-data' ";
        foreach ($terms as $term) {
          $term_city = get_field('miasto_inwestycji', $term);

          echo " data-investment-city-id='" . $term_city->term_id . "' data-investment-city-name='" . $term_city->name . "' ";
        }

        foreach ($terms as $term) {
          echo " data-investment-id='" . $term->term_id . "' data-investment-name='" . $term->name . "' ";
        }

        echo "></span>";

        ?>
      </li>
      <!-- /wp:list-item -->
    </ul>
    <!-- /wp:list -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->