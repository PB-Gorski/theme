<?php

/**
 * Title: lokalizacja-torunska-16-content
 * Slug: lokalizacja-torunska-16-content
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
      <a href="<?php echo home_url() . '/o-inwestycji-torunska-16' ?>" class="text-[#8a8f99] hover:text-[#3e4759]" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja-torunska-16' ?>" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/mieszkania' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria-torunska-16' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content mb-[60px] desktop:flex">
      <!-- wp:group -->
      <div class="wp-block-group block cursor-default left-col desktop:w-[60%] m-0 mb-[30px]">
        <!-- wp:wpmapblock/wp-map-block {"map_id":"wpmapblock_cbd28970","map_marker_list":[{"lat":"54.350716","lng":"18.656485","title":"PB Górski","content":"","iconType":"default","customIconUrl":"","customIconWidth":25,"customIconHeight":40}]} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group desktop:pl-[100px] desktop:w-[40%]">
        <!-- wp:paragraph -->
        <p class="text-[30px] leading-[40px] mb-[40px]" data-aos="fade-right" data-aos-offset="30">Toruńska 16 to kameralne osiedle, gwarantujące pełen komfort mieszkania w centrum miasta</p>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <p class="text-[18px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">W pobliżu znajduje się Główne Miasto, restauracje, kawiarnie, placówki edukacyjne, tereny rekreacyjne. To idealna lokalizacja dla osób ceniących sobie miejskie życie.</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group tiles-numbers px-[20px] mb-[100px] flex flex-col desktop:flex-row justify-center gap-[30px]">
    <!-- wp:paragraph -->
    <a href="javascript:void(0)" class="tile1 flex-1 p-[30px_20px] max-w-[375px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="50">
      <!-- wp:group -->
      <div class="wp-block-group circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#e90d38] rounded-full flex flex-col items-center justify-center">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-white font-semibold">1000 m</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] text-center">Główne Miasto</p>
      <!-- /wp:paragraph -->
    </a>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph -->
    <a href="javascript:void(0)" class="tile1 flex-1 p-[30px_20px] max-w-[375px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="100">
      <!-- wp:group -->
      <div class="wp-block-group circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#b11a3e] rounded-full flex flex-col items-center justify-center">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-white font-semibold">650 m</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] text-center">Przystanek SKM</p>
      <!-- /wp:paragraph -->
    </a>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph -->
    <a href="javascript:void(0)" class="tile1 flex-1 p-[30px_20px] max-w-[375px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="150">
      <!-- wp:group -->
      <div class="wp-block-group circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#7d2645] rounded-full flex flex-col items-center justify-center">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-white font-semibold">1300 m</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] text-center">Galeria handlowa</p>
      <!-- /wp:paragraph -->
    </a>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph -->
    <a href="javascript:void(0)" class="tile1 flex-1 p-[30px_20px] max-w-[375px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="200">
      <!-- wp:group -->
      <div class="wp-block-group circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#52304a] rounded-full flex flex-col items-center justify-center">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-white font-semibold">20 min</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] text-center">Lotnisko</p>
      <!-- /wp:paragraph -->
    </a>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group plan-osiedla-wrapper mb-[100px] mx-auto max-w-[690px] w-full px-[20px] desktop:px-0">
    <!-- wp:paragraph -->
    <p class="mb-[60px] text-[24px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">Zaledwie 15 minut spacerem będzie dzielić mieszkańców Toruńskiej 16 od ścisłego centrum Gdańska. Położenie zapewnia dostęp do pełnej infrastruktury w pobliżu miejsca zamieszkania (sklepy, punkty usługowe, szkoły, przedszkola, przychodnia).</p>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph -->
    <p class="mb-[60px] text-[24px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">Zróżnicowana oferta kulturalna będzie w zasięgu ręki.</p>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->