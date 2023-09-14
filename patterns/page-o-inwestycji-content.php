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
<div id="Content" class="wp-block-group content relative">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:paragraph -->
    <p class="py-[30px] desktop:py-[60px] text-[36px] desktop:text-[60px] text-center font-bold">Poznaj inwestycję</p>
    <!-- /wp:paragraph -->

    <!-- wp:group -->
    <div class="wp-block-group test row-links my-[30px] flex flex-wrap justify-center items-center gap-[20px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/o-inwestycji' ?>">O inwestycji</a>
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
  <div class="wp-block-group row-content-container px-[20px] desktop:px-0">
    <!-- wp:group -->
    <div class="wp-block-group row-content desktop:flex">
      <!-- wp:image -->
      <figure class="wp-block-image left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0 mb-[20px] desktop:mb-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/img1.jpeg" alt="img">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:px-[100px] desktop:w-1/2">
        <!-- wp:paragraph -->
        <p class="mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]">Osiedle Srebrniki to zielona enklawa położona na granicy dwóch dzielnic Gdańska - Wrzeszcza i Moreny</p>
        <!-- /wp:paragraph -->

        <!-- wp:group -->
        <div class="wp-block-group mb-[100px] desktop:grid grid-rows-2 grid-cols-2 gap-[30px]">
          <!-- wp:group -->
          <div class="wp-block-group info-box1 mb-[35px] desktop:mb-[30px]">
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
          <div class="wp-block-group info-box2 mb-[35px] desktop:mb-[30px]">
            <!-- wp:paragraph -->
            <p class="mb-[10px] uppercase text-[#8a8f99] text-[11px] trancking-[1px]">TERMIN UKOŃCZENIA (BUDYNEK 1)</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p class="text-[24px]">IV kwartał 2020</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group info-box3 mb-[35px] desktop:mb-[30px]">
            <!-- wp:paragraph -->

            <p class="mb-[10px] uppercase text-[#8a8f99] text-[11px] trancking-[1px]">LICZBA MIESZKAŃ W SPRZEDAŻY</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p class="text-[24px]">450 w pierwszym etapie</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group info-box4 mb-[35px] desktop:mb-[30px]">
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

    <!-- wp:group -->
    <div class="wp-block-group row-content2 desktop:flex flex-row-reverse">
      <!-- wp:image -->
      <figure class="wp-block-image left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/img2.jpeg" alt="img">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:p-[140px_100px] desktop:w-1/2">
        <!-- wp:paragraph -->
        <p class="mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]">Postaw na nowoczesną architekturę</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="text-[18px] text-[#8a8f99]">W ofercie znajdują się przestronne i doświetlone mieszkania oraz lokale usługowe o wygodnych rozkładach z możliwością aranżacji według własnych potrzeb. W każdym budynku znajduje się cichobieżna winda. Mieszkania na parterze posiadają ogródki, a lokale położone na najwyższych piętrach widok na Zatokę Gdańską. Ofertę multimedialną na terenie osiedla zapewnia <a href="https://www.upc.pl/" class="inline relative before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[50%] hover:before:min-h-[100%] before:bg-[#b3f1ff] before:transition-height before:duration-300 before:ease before:z-[-1] cursor-pointer">https://www.upc.pl/</a></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content3 desktop:flex">
      <!-- wp:image -->
      <figure class="wp-block-image left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/img3.jpeg" alt="img">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:p-[140px_100px] desktop:w-1/2">
        <!-- wp:paragraph -->
        <p class="mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]">Zielona enklawa w doskonałej lokalizacji</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="text-[18px] text-[#8a8f99] mb-[30px]">Osiedle Srebrniki położone jest z dala zgiełku głównych ulic, z dostępem do licznych terenów rekreacyjnych. Jednocześnie położenie na granicy gdańskich dzielnic Wrzeszcza oraz Moreny zapewnia nie tylko pełne zaplecze handlowe, ale również świetne skomunikowanie (w bezpośrednim sąsiedztwie tramwaje, autobusy, przystanek PKM).</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <a href="<?php echo home_url() . '/lokalizacja'; ?>" class="inline relative font-semibold text-textGray before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[50%] hover:before:min-h-[100%] before:bg-[#b3f1ff] before:transition-height before:duration-300 before:ease before:z-[-1] cursor-pointer">Więcej o lokalizacji &rarr;</a>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content4 desktop:flex flex-row-reverse">
      <!-- wp:image -->
      <figure class="wp-block-image left-col w-1/2 m-0 mb-[20px] desktop:mb-0">
        <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji/img4.png" alt="img">
      </figure>
      <!-- /wp:image -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 p-[140px_100px] w-1/2">
        <!-- wp:paragraph -->
        <p class="text-[34px] mb-[40px]">Widok na Zatokę Gdańską</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="text-[18px] text-[#8a8f99] mb-[30px]">Taki widok czeka na mieszkańców ostatnich pięter Osiedla Srebrniki.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->