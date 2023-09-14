<?php

/**
 * Title: o-inwestycji-content
 * Slug: o-inwestycji-content
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
$currentPage = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 35, 30));

?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Content" class="wp-block-group content h-[80vh] desktop:h-[90vh] relative">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:paragraph -->
    <p class="py-[60px] text-[60px] text-center font-bold">Poznaj inwestycję</p>
    <!-- /wp:paragraph -->

    <!-- wp:group -->
    <div class="wp-block-group test row-links my-[30px] flex justify-center items-center gap-[20px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/o-inwestycji' ?>" class="active-o-inwest hover:text-[#3e4759]">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja' ?>" class="text-[#8a8f99] hover:text-textGray">Lokalizacja</a>
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
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group row-content desktop:flex">
    <!-- wp:image -->
    <figure class="wp-block-image left-col w-1/2 m-0">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/img1.jpeg" alt="img">
    </figure>
    <!-- /wp:image -->

    <!-- wp:group -->
    <div class="wp-block-group px-[100px] w-1/2">
      <!-- wp:paragraph -->
      <p class="text-[34px] mb-[40px]">Osiedle Srebrniki to zielona enklawa położona na granicy dwóch dzielnic Gdańska - Wrzeszcza i Moreny</p>
      <!-- /wp:paragraph -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[100px] grid grid-rows-2 grid-cols-2 gap-[30px]">
        <!-- wp:group -->
        <div class="wp-block-group info-box1">
          <!-- wp:paragraph -->
          <p class="mb-[10px] uppercase text-[#8a8f99] text-[11px] trancking-[1px]">LOKALIZACJA</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="text-[24px]">Gdańsk</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <a href="<?php echo home_url() . '/lokalizacja' ?>" class="text-[14px] text-[#8a8f99] underline">więcej o lokalizacji</a>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group info-box2">
          <!-- wp:paragraph -->
          <p class="mb-[10px] uppercase text-[#8a8f99] text-[11px] trancking-[1px]">TERMIN UKOŃCZENIA (BUDYNEK 1)</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="text-[24px]">IV kwartał 2020</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group info-box3">
          <!-- wp:paragraph -->

          <p class="mb-[10px] uppercase text-[#8a8f99] text-[11px] trancking-[1px]">LICZBA MIESZKAŃ W SPRZEDAŻY</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="text-[24px]">450 w pierwszym etapie</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group info-box4">
          <!-- wp:paragraph -->
          <p class="mb-[10px] uppercase text-[#8a8f99] text-[11px] trancking-[1px]">POWIERZCHNIA MIESZKAŃ</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="text-[24px]">27 m<sup>2</sup> - 113 m<sup>2</sup></p>
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