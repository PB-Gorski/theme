<?php

/**
 * Title: o-inwestycji-sukiennicza-19a-banner
 * Slug: o-inwestycji-sukiennicza-19a-banner
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner h-[50vh] desktop:h-[90vh] relative">
  <!-- wp:group -->
  <div class="wp-block-group banner-lista-mieszkan w-full h-full bg-banner relative flex desktop:block items-center">
    <!-- wp:group -->
    <div class="wp-block-group banner w-full h-full bg-black opacity-30 z-[1] absolute top-0 left-0"></div>
    <!-- /wp:group -->
    <!-- wp:image -->
    <figure class="wp-block-image w-full h-full desktop:h-[90vh] absolute top-0 left-0">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sukiennicza-19a/bg-sukiennicza-19a.webp" alt="banner-background">
    </figure>
    <!-- /wp:image -->

    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] z-[2] relative text-white">
      <!-- wp:group -->
      <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[290px] mb-[50px] leading-[44px] desktop:leading-[70px]">
        <!-- wp:paragraph -->
        <span class="block font-bold underline underline-offset-[20px]" data-aos="fade-right" data-aos-offset="30">Sukiennicza 19A
        </span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="block uppercase text-[18px] trancking-[10px]" data-aos="fade-right" data-aos-offset="30">Gdańsk Śródmieście</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:list -->
  <ul class="term_data_container">
    <!-- wp:list-item -->
    <li>
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