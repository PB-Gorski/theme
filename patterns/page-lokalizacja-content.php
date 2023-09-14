<?php

/**
 * Title: lokalizacja-content
 * Slug: lokalizacja-content
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
    <div class="wp-block-group test row-links my-[30px] flex justify-center items-center gap-[20px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/o-inwestycji' ?>" class="text-[#8a8f99] hover:text-[#3e4759]">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja' ?>">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lista-mieszkan' ?>" class="text-[#8a8f99] hover:text-textGray">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria' ?>" class="text-[#8a8f99] hover:text-textGray">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy' ?>" class="text-[#8a8f99] hover:text-textGray">Kronika budowy</a>
      <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content desktop:flex">
      <!-- wp:image -->
      <figure class="wp-block-image left-col w-[65%] m-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/map.png" alt="img">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group px-[100px] w-[35%]">
        <!-- wp:paragraph -->
        <p class="text-[30px] leading-[40px] mb-[40px]">Srebrniki to osiedle położone na granicy dzielnic Wrzeszcz oraz Morena, w otoczeniu licznych terenów zielonych.</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="text-[18px] text-[#8a8f99]">W najbliższym sąsiedztwie znajduje się nie tylko pełne zaplecze handlowe i edukacyjne, ale także przystanek PKM, który pozwala na dojazd do najważniejszych punktów w całym Trójmieście. </p>
        <!-- /wp:paragraph -->



      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->


  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->