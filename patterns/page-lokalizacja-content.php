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
    <div class="wp-block-group test row-links my-[30px] flex flex-wrap justify-center items-center gap-[20px]">
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
    <div class="wp-block-group row-content mb-[60px] desktop:flex">
      <!-- wp:image -->
      <figure class="wp-block-image left-col desktop:w-[60%] m-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/map.png" alt="img">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group pl-[100px] desktop:w-[40%]">
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

  <!-- wp:group -->
  <div class="wp-block-group tiles-numbers px-[20px] mb-[100px] flex justify-center gap-[30px]">
    <!-- wp:group -->
    <div class="wp-block-group tile1 flex-1 p-[30px_20px] max-w-[375px] bg-[#f5f7fa]">
      <!-- wp:group -->
      <div class="wp-block-group circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#e90d38] rounded-full flex flex-col items-center justify-center">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-white font-semibold">400 m</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] text-center">Przedszkole</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group tile1 flex-1 p-[30px_20px] max-w-[375px] bg-[#f5f7fa]">
      <!-- wp:group -->
      <div class="wp-block-group circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#b11a3e] rounded-full flex flex-col items-center justify-center">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-white font-semibold">600 m</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] text-center">Przedszkole</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group tile1 flex-1 p-[30px_20px] max-w-[375px] bg-[#f5f7fa]">
      <!-- wp:group -->
      <div class="wp-block-group circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#7d2645] rounded-full flex flex-col items-center justify-center">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-white font-semibold">900 m</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] text-center">Przedszkole</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group tile1 flex-1 p-[30px_20px] max-w-[375px] bg-[#f5f7fa]">
      <!-- wp:group -->
      <div class="wp-block-group circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#52304a] rounded-full flex flex-col items-center justify-center">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-white font-semibold">20 min</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] text-center">Przedszkole</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group plan-osiedla-wrapper mb-[100px] mx-auto max-w-[690px] w-full">
    <!-- wp:paragraph -->
    <p class="mb-[60px] text-[24px] text-[#8a8f99]">Osiedle Srebrniki to świetnie skomunikowane z całym Gdańskiem osiedle. Położone pomiędzy Wrzeszczem, a Moreną z dobrym dostępem do kolejki PKM. Otoczone zielenią i terenami rekreacyjnymi. Idealne dla rodxzin z dziećmi, jak i dla studentów (10 minut od kampusu Politechniki Gdańskiej).</p>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <p class="mb-[60px] text-[30px] tet-center">Plan osiedla "Srebrniki"</p>
    <!-- /wp:paragraph -->

    <!-- wp:image -->
    <figure class="wp-block-image">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/plan-osiedla.jpeg" alt="plan-osiedla">
    </figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->