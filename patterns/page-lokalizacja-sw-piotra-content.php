<?php

/**
 * Title: lokalizacja-sw-piotra-content
 * Slug: lokalizacja-sw-piotra-content
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
      <a href="<?php echo home_url() . '/o-inwestycji-sw-piotra' ?>" class="text-[#8a8f99] hover:text-[#3e4759]" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lokalizacja-sw-piotra' ?>" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/lista-mieszkan-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/galeria-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/kronika-budowy-sw-piotra' ?>" class="text-[#8a8f99] hover:text-textGray" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content mb-[60px] desktop:flex">
      <!-- wp:group -->
      <div class="wp-block-group block cursor-default left-col desktop:w-[60%] m-0 mb-[30px]">
        <!-- wp:wpmapblock/wp-map-block {"map_id":"wpmapblock_cbd28970","map_marker_list":[{"lat":"54.5249383","lng":"18.5449658","title":"PB Górski","content":"","iconType":"default","customIconUrl":"","customIconWidth":25,"customIconHeight":40}]} /-->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group desktop:pl-[100px] desktop:w-[40%]">
        <!-- wp:heading {"level":4} -->
        <h4><span class="block text-[30px] leading-[40px] mb-[40px]" data-aos="fade-right" data-aos-offset="30">Św. Piotra to prestiżowa inwestycja położona w samym sercu Gdyni - na Placu Kaszubskim.</span></h4>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <p class="text-[18px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">W najbliższym sąsiedztwie znajduje się nie tylko pełne zaplecze handlowe i edukacyjne, ale także przystanek PKM, który pozwala na dojazd do najważniejszych punktów w całym Trójmieście. </p>
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
    <span class=" block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="50">
      <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#e90d38] rounded-full flex flex-col items-center justify-center">
        <span class="block text-[30px] text-white font-semibold">1200 m</span>
      </span>
      <span class="block text-[#8a8f99] text-center">Plaża miejska</span>
    </span>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <span class="block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="100">
      <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#b11a3e] rounded-full flex flex-col items-center justify-center">
        <span class="block text-[30px] text-white font-semibold">290 m</span>
      </span>
      <span class="block text-[#8a8f99] text-center">Sklep spożywczy</span>
    </span>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <span class="block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="150">
      <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#7d2645] rounded-full flex flex-col items-center justify-center">
        <span class="block text-[30px] text-white font-semibold">1 km</span>
      </span>
      <span class="block text-[#8a8f99] text-center">Przystanek PKM</span>
    </span>
    <!-- /wp:paragraph -->

    <!-- wp:paragraph -->
    <span class="block tile1 flex-1 p-[30px_20px] w-[320px] bg-[#f5f7fa]" data-aos="fade-up" data-aos-offset="30" data-aos-delay="200">
      <span class="block circle mx-auto w-[170px] h-[170px] mb-[60px] bg-[#52304a] rounded-full flex flex-col items-center justify-center">
        <span class="block text-[30px] text-white font-semibold">300 m</span>
      </span>
      <span class="block text-[#8a8f99] text-center">Apteka</span>
    </span>
    <!-- /wp:paragraph -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group plan-osiedla-wrapper container mb-[100px] mx-auto w-full px-[20px] desktop:px-0">
    <!-- wp:heading {"level":5} -->
    <h5><span class="mb-[60px] text-[24px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">Zaledwie 5 minut będzie dzielić mieszkańców Św. Piotra od Skweru Kościuszki, plaży miejskiej czy Mariny Gdyńskiej. Św. Piotra to także idealne miejsce dla miłośników miejskiego życia - w najbliższej okolicy znajduje się zróżnicowana oferta kawiarni, restauracji i barów, a także kluby fitness, kina i teatry.</span></h5>
    <!-- /wp:heading -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->