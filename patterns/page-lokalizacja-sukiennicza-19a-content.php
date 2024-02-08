<?php

/**
 * Title: lokalizacja-sukiennicza-19a-content
 * Slug: lokalizacja-sukiennicza-19a-content
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
$currentPage = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 35, 30));

?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Content" class="wp-block-group content relative">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group test row-links my-[40px] flex flex-wrap justify-center items-center gap-[20px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/o-inwestycji-sukiennicza-19a' ?>" class="text-[#8a8f99] hover:text-[#3e4759]" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja-sukiennicza-19a' ?>" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria-sukiennicza-19a' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content mb-[60px] desktop:flex">
      <!-- wp:group -->
      <div class="wp-block-group block cursor-default left-col desktop:w-[60%] m-0 mb-[30px]">
        <?php echo do_shortcode('[mapengine id="3034"]') ?>
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group desktop:pl-[100px] desktop:w-[40%]">
        <!-- wp:heading {"level":4} -->
        <h4><span class="block text-[30px] leading-[40px] mb-[40px]" data-aos="fade-right" data-aos-offset="30">Topowa lokalizacja i wyjątkowe otoczenie.</span></h4>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <span class="block text-[18px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">Zaletą lokalizacji jest bliskość Głównego Miasta oraz najciekawszego turystycznie bulwaru spacerowego nad Motławą.</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group plan-osiedla-wrapper container mb-[100px] mx-auto w-full px-[20px] desktop:px-0">

    <!-- wp:group -->
    <div class="wp-block-group block cursor-default">
      <!-- wp:image -->
      <figure class="wp-block-image max-w-[690px] mx-auto">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sukiennicza-19a/map.jpg" alt="mapa-okolicy">
      </figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->