<?php

/**
 * Title: page-lokalizacja-default
 * Slug: page-lokalizacja-default
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Lokalizacja Page" class="wp-block-group page-lokalizacja relative">
  <!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
  <div id="Banner" class="wp-block-group relative">
    <!-- wp:group -->
    <div class="wp-block-group banner-lista-mieszkan w-full h-[250px] desktop:h-[770px] bg-banner relative flex desktop:block items-center">
      <!-- wp:group -->
      <div class="wp-block-group banner w-full h-full bg-black opacity-30 z-[1] absolute top-0 left-0"></div>
      <!-- /wp:group -->

      <!-- wp:image -->
      <figure class="wp-block-image w-full h-full absolute top-0 left-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/osiedle-srebrniki-bg.jpeg" alt="banner-background">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] z-[2] relative text-white">
        <!-- wp:group -->
        <div class="wp-block-group title text-[36px] desktop:text-[60px] desktop:pt-[290px] mb-[50px] leading-[44px] desktop:leading-[70px]">
          <!-- wp:heading {"level":1} -->
          <h1><span class="block font-bold" data-aos="fade-right" data-aos-offset="30">Miasto domyslne - osiedle</span></h1>
          <!-- /wp:heading -->
        </div>
        <!-- /wp:group -->
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

  <!-- wp:pattern {"slug":"searchbar-mieszkania"} /-->

  <!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
  <div id="Content" class="wp-block-group content relative">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
      <!-- wp:group -->
      <div class="wp-block-group test row-links my-[40px] flex flex-wrap justify-center items-center gap-[20px]">
        <!-- wp:paragraph -->
        <a href="<?php echo home_url() . '/o-inwestycji' ?>" class="text-[#8a8f99] hover:text-[#3e4759]" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <a href="<?php echo home_url() . '/lokalizacja-osiedle-srebrniki' ?>" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <a href="<?php echo home_url() . '/lista-mieszkan-osiedle-srebrniki' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <a href="<?php echo home_url() . '/galeria-osiedle-srebrniki' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <a href="<?php echo home_url() . '/kronika-budowy' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group row-content mb-[60px] desktop:flex">
        <!-- wp:group -->
        <div class="wp-block-group block cursor-default left-col desktop:w-[60%] m-0 mb-[30px]">
          <!-- wp:image -->
          <figure class="wp-block-image">
            <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/map.png" alt="img">
          </figure>
          <!-- /wp:image -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group desktop:pl-[100px] desktop:w-[40%]">
          <!-- wp:heading {"level":4} -->
          <h4><span class="block text-[30px] leading-[40px] mb-[40px]" data-aos="fade-right" data-aos-offset="30">Srebrniki to osiedle położone na granicy dzielnic Wrzeszcz oraz Morena, w otoczeniu licznych terenów zielonych.</span></h4>
          <!-- /wp:heading -->
          <!-- wp:paragraph -->
          <span class="block text-[18px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">W najbliższym sąsiedztwie znajduje się nie tylko pełne zaplecze handlowe i edukacyjne, ale także przystanek PKM, który pozwala na dojazd do najważniejszych punktów w całym Trójmieście. </span>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group tiles-numbers container mx-auto px-[20px] mb-[100px] flex flex-wrap desktop:flex-row justify-center gap-[30px] [&>p]:w-[320px]">
      <!-- wp:paragraph -->
      <span class="block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="50">
        <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#e90d38] rounded-full flex flex-col items-center justify-center">
          <span class="block text-[30px] text-white font-semibold">400 m</span>
        </span>
        <span class="block text-[#8a8f99] text-center">Przedszkole</span>
      </span>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <span class="block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="100">
        <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#b11a3e] rounded-full flex flex-col items-center justify-center">
          <span class="block text-[30px] text-white font-semibold">600 m</span>
        </span>
        <span class="block text-[#8a8f99] text-center">Sklep spożywczy</span>
      </span>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <span class="block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="150">
        <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#7d2645] rounded-full flex flex-col items-center justify-center">
          <span class="block text-[30px] text-white font-semibold">900 m</span>
        </span>
        <span class="block text-[#8a8f99] text-center">Przystanek PKM</span>
      </span>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <span class="block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="200">
        <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#52304a] rounded-full flex flex-col items-center justify-center">
          <span class="block text-[30px] text-white font-semibold">20 min</span>
        </span>
        <span class="block text-[#8a8f99] text-center">Lotnisko</span>
      </span>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group plan-osiedla-wrapper container mb-[100px] mx-auto w-full px-[20px] desktop:px-0">
      <!-- wp:heading {"level":5} -->
      <h5><span class="block mb-[60px] text-[24px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">Osiedle Srebrniki to świetnie skomunikowane z całym Gdańskiem osiedle. Położone pomiędzy Wrzeszczem, a Moreną z dobrym dostępem do kolejki PKM. Otoczone zielenią i terenami rekreacyjnymi. Idealne dla rodxzin z dziećmi, jak i dla studentów (10 minut od kampusu Politechniki Gdańskiej).</span></h5>
      <!-- /wp:heading -->

      <!-- wp:heading {"level":4} -->
      <h4><span class="block mb-[60px] text-[30px] text-center" data-aos="fade-right" data-aos-offset="30">Plan osiedla "Srebrniki"</span></h4>
      <!-- /wp:heading -->

      <!-- wp:group -->
      <div class="wp-block-group block cursor-default">
        <!-- wp:image -->
        <figure class="wp-block-image">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-osiedle-srebrniki/plan-osiedla.jpeg" alt="plan-osiedla">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->