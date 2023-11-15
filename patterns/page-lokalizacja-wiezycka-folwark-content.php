<?php

/**
 * Title: lokalizacja-wiezycka-folwark-content
 * Slug: lokalizacja-wiezycka-folwark-content
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
      <a href="<?php echo home_url() . '/o-inwestycji-wiezycka-folwark' ?>" class="text-[#8a8f99] hover:text-[#3e4759]" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja-wiezycka-folwark' ?>" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lista-mieszkan-wiezycka-folwark' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria-wiezycka-folwark' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy-wiezycka-folwark' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content mb-[60px] desktop:flex">
      <!-- wp:group -->
      <div class="wp-block-group block cursor-default left-col desktop:w-[55%] m-0">
        <!-- wp:wpmapblock/wp-map-block {"map_id":"wpmapblock_cbd28970","map_marker_list":[{"lat":"54.322451","lng":"18.576763","title":"PB Górski","content":"","iconType":"default","customIconUrl":"","customIconWidth":25,"customIconHeight":40}]} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group desktop:pl-[100px] desktop:w-[45%] flex flex-col items-center justify-center">
        <!-- wp:heading {"level":4} -->
        <h4><span class="block text-[30px] leading-[40px] mb-[40px]" data-aos="fade-right" data-aos-offset="30">Wieżycka Folwark to wyjątkowe osiedle położone w dzielnicy Zakoniczyn, w sąsiedztwie zabytkowego dworku Wendtów</span></h4>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p class="text-[18px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">W pobliżu znajdują się placówki edukacyjne, tereny rekreacyjne, parki. To idealna lokalizacja do spędzania czasu w gronie rodziny i przyjaciół. Mieszkania na parterze dodatkowo posiadają ogródki.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group tiles-numbers px-[20px] mb-[100px] flex flex-wrap desktop:flex-row justify-center gap-[30px] [&>p]:w-[320px]">
    <!-- wp:paragraph -->
    <span class=" block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="50">
      <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#e90d38] rounded-full flex flex-col items-center justify-center">
        <span class="block text-[30px] text-white font-semibold">500 m</span>
      </span>
      <span class="block text-[#8a8f99] text-center">Szkoła podstawowa</span>
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
        <span class="block text-[30px] text-white font-semibold">700 m</span>
      </span>
      <span class="block text-[#8a8f99] text-center">Przystanek PKM</span>
    </span>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <span class="block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="200">
      <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#52304a] rounded-full flex flex-col items-center justify-center">
        <span class="block text-[30px] text-white font-semibold">20 min.</span>
      </span>
      <span class="block text-[#8a8f99] text-center">Lotnisko</span>
    </span>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group plan-osiedla-wrapper mb-[100px] mx-auto max-w-[690px] w-full px-[20px] desktop:px-0">
    <!-- wp:heading {"level":5} -->
    <h5><span class="block mb-[60px] text-[24px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">Lokalizacja osiedla Wieżycka Folwark gwarantuje łatwe dotarcie zarówno do centrum Gdańska (15 minut), jak Gdyni (30 minut) a także zapewnia dostęp do pełnej infrastruktury w pobliżu miejsca zamieszkania (sklepy, punkty usługowe, szkoły, przedszkola, przychodnia).</span></h5>
    <!-- /wp:heading -->
    <!-- wp:heading {"level":5} -->
    <h5><span class="block mb-[60px] text-[24px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">Bez względu na to, czy pracujesz w Gdańsku, czy w Gdyni dotrzesz tam bez problemu. Pobliska obwodnica zapewnia łatwy dojazd do całego Trójmiasta, autostrady A1, lotniska, na Półwysep Helski bądź na Kaszuby. Zlokalizowane przy zjazdach z obwodnicy centra handlowe umożliwiają zrobienie wszelkich zakupów, od spożywczych po meblowe.</span></h5>
    <!-- /wp:heading -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->