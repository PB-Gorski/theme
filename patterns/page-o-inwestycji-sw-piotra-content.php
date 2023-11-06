<?php

/**
 * Title: o-inwestycji-sw-piotra-content
 * Slug: o-inwestycji-sw-piotra-content
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
    <span class="block py-[30px] desktop:py-[60px] text-[36px] desktop:text-[60px] text-center font-bold" data-aos="fade-right" data-aos-offset="30">Św. Piotra</span>
    <!-- /wp:paragraph -->

    <!-- wp:group -->
    <div class="wp-block-group test row-links mb-[50px] flex flex-wrap justify-center items-center gap-[20px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/o-inwestycji-sw-piotra' ?>" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/mieszkania' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/o-inwestycji-sw-piotra/galeria-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->


  <!-- wp:group -->
  <div class="wp-block-group row-content-container px-[20px] desktop:px-0">
    <!-- wp:group -->
    <div class="wp-block-group row-content desktop:flex">
      <!-- wp:group -->
      <div class="wp-block-group block cursor-default left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0 mb-[20px] desktop:mb-0">
        <!-- wp:image -->
        <figure class="wp-block-image w-full h-full">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/img1.jpeg" alt="img">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:px-[100px] desktop:w-1/2">
        <!-- wp:paragraph -->
        <span class="block mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]" data-aos="fade-right" data-aos-offset="30">Św. Piotra to luksusowy apartamentowiec oferujący pełen komfort życia, położony w samym sercu Gdyni - nieopodal Placu Kaszubskiego.</span>
        <!-- /wp:paragraph -->

        <!-- wp:group -->
        <div class="wp-block-group mb-[100px] desktop:grid grid-rows-2 grid-cols-2 gap-[30px]">
          <!-- wp:group -->
          <div class="wp-block-group info-box1 mb-[35px] desktop:mb-[30px]">
            <!-- wp:paragraph -->
            <span class="block mb-[10px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]" data-aos="fade-right" data-aos-offset="30">LOKALIZACJA</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="block text-[24px]" data-aos="fade-right" data-aos-offset="30">Gdynia</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <a href="<?php echo home_url() . '/lokalizacja' ?>" class="inline-block text-[14px] text-[#8a8f99] underline" data-aos="fade-right" data-aos-offset="30">więcej o lokalizacji</a>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group info-box2 mb-[35px] desktop:mb-[30px]">
            <!-- wp:paragraph -->
            <span class="block mb-[10px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]" data-aos="fade-right" data-aos-offset="30">TERMIN UKOŃCZENIA (BUDYNEK 1)</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="block text-[24px]" data-aos="fade-right" data-aos-offset="30">I kwartał 2023</span>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group info-box3 mb-[35px] desktop:mb-[30px]">
            <!-- wp:paragraph -->

            <span class="block mb-[10px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]" data-aos="fade-right" data-aos-offset="30">LICZBA MIESZKAŃ W SPRZEDAŻY</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="block text-[24px]" data-aos="fade-right" data-aos-offset="30">227</span>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group info-box4 mb-[35px] desktop:mb-[30px]">
            <!-- wp:paragraph -->
            <span class="block mb-[10px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]" data-aos="fade-right" data-aos-offset="30">POWIERZCHNIA MIESZKAŃ</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="block text-[24px]" data-aos="fade-right" data-aos-offset="30">24 m<sup>2</sup> - 107 m<sup>2</sup></span>
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
      <!-- wp:group -->
      <div class="wp-block-group block cursor-default left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0">
        <!-- wp:image -->
        <figure class="wp-block-image w-full h-full">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/img2.jpeg" alt="img">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:p-[140px_100px] desktop:w-1/2">
        <!-- wp:paragraph -->
        <span class="block mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]" data-aos="fade-right" data-aos-offset="30">Apartamenty z widokiem na morze </span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="block text-[18px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">W ofercie znajdują się dobrze doświetlone, starannie zaprojektowane mieszkania z dużymi balkonami i loggiami. Apartamentom na ostatnich piętrach przestrzeni dodadzą wysokie przeszklone fasady i komfortowe tarasy. Mieszkańcy najwyższych pięter będą mogli również cieszyć się pięknym widokiem na morze.</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content3 desktop:flex">
      <!-- wp:group -->
      <div class="wp-block-group block cursor-default left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0">
        <!-- wp:image -->
        <figure class="wp-block-image w-full h-full">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/img3.jpeg" alt="img">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:p-[140px_100px] desktop:w-1/2">
        <!-- wp:paragraph -->
        <span class="block mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]" data-aos="fade-right" data-aos-offset="30">Pełen komfort życia w centrum miasta</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="block text-[18px] text-[#8a8f99] mb-[30px]" data-aos="fade-right" data-aos-offset="30">Inwestycja zapewnia pełen komfort życia i relaks w samym centrum miasta. W strefie wejściowej zaplanowana jest duża ilość zieleni, a w samym budynku mieszkańcy będą mogli cieszyć się takimi udogodnieniami jak części wspólne w wysokim standardzie, portiernia, dwupoziomowy garaż, siłownia z częścią wypoczynkową oraz zieleń rekreacyjna na dachu garażu.</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content4 desktop:flex flex-row-reverse">
      <!-- wp:group -->
      <div class="wp-block-group block cursor-default left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0">
        <!-- wp:image -->
        <figure class="wp-block-image w-full h-full">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-o-inwestycji-sw-piotra/img4.jpeg" alt="img">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:p-[140px_100px] desktop:w-1/2">
        <!-- wp:paragraph -->
        <span class="block mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]" data-aos="fade-right" data-aos-offset="30">Tętniące życiem miasto w zasięgu ręki</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <span class="block text-[18px] text-[#8a8f99] mb-[30px]" data-aos="fade-right" data-aos-offset="30">Położenie apartamentów gwarantuje łatwość poruszania się po trójmiejskiej aglomeracji. Inwestycja jest zlokalizowana w odległości 1 km od stacji SKM i PKP Gdynia Główna i około 5 min od Skweru Kościuszki, plaży miejskiej czy Mariny Gdyńskiej. Św. Piotra to idealne miejsce dla miłośników miejskiego życia - w najbliższej okolicy znajdują się kawiarnie, restauracje, bary, kluby fitness, kina czy teatry. </span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->