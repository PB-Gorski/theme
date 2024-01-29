<?php

/**
 * Title: o-inwestycji-default-content
 * Slug: o-inwestycji-default-content
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
$currentPage = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 35, 30));

?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="O inwestycji content" class="wp-block-group page-o_inwestycji_content relative">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:heading {"level":1} -->
    <h1><span class="block py-[30px] desktop:py-[60px] text-[36px] desktop:text-[60px] text-center font-bold" data-aos="fade-right" data-aos-offset="30">Poznaj inwestycję</span></h1>
    <!-- /wp:heading -->

    <!-- wp:group -->
    <div class="wp-block-group test row-links mb-[50px] flex flex-wrap justify-center items-center gap-[20px]">
      <!-- wp:paragraph -->
      <p class="text-textGray">
        <a href="<?php echo home_url() . '/o-inwestycji-default' ?>" data-aos="fade-up" data-aos-offset="30">O inwestycji</a>
      </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] hover:text-textGray transition duration-300">
        <a href="<?php echo home_url() . '/lokalizacja-default' ?>" data-aos="fade-up" data-aos-offset="30">Lokalizacja</a>
      </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] hover:text-textGray transition duration-300">
        <a href="<?php echo home_url() . '/lista-mieszkan-default' ?>" data-aos="fade-up" data-aos-offset="30">Lista mieszkań</a>
      </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] hover:text-textGray transition duration-300">
        <a href="<?php echo home_url() . '/galeria-default' ?>" data-aos="fade-up" data-aos-offset="30">Galeria</a>
      </p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="text-[#8a8f99] hover:text-textGray transition duration-300">
        <a href="<?php echo home_url() . '/kronika-budowy-default' ?>" data-aos="fade-up" data-aos-offset="30">Kronika budowy</a>
      </p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->


  <!-- wp:group -->
  <div class="wp-block-group row-content-container px-[20px] desktop:px-0 max-w-[1620px] mx-auto">
    <!-- wp:group -->
    <div class="wp-block-group row-content desktop:flex">
      <!-- wp:group -->
      <div class="wp-block-group aos-fade-right block cursor-default left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0 mb-[20px] desktop:mb-0">
        <!-- wp:image -->
        <figure class="wp-block-image w-full h-full">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/pbgorski-default.jpeg" alt="img">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:px-[100px] desktop:w-1/2">
        <!-- wp:heading {"level":4} -->
        <h4><span class="mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]" data-aos="fade-right" data-aos-offset="30">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quam error, ipsa repellat voluptatem aspernatur.</span></h4>
        <!-- /wp:heading -->

        <!-- wp:group -->
        <div class="wp-block-group mt-[40px] mb-[30px] desktop:mb-[100px] desktop:grid grid-rows-2 grid-cols-2 gap-[30px]">
          <!-- wp:group -->
          <div class="wp-block-group info-box1 mb-[35px] desktop:mb-[30px]">
            <!-- wp:heading {"level":6} -->
            <h6><span class="block mb-[10px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]" data-aos="fade-right" data-aos-offset="30">LOKALIZACJA</span></h6>
            <!-- /wp:heading -->
            <!-- wp:heading {"level":5} -->
            <h5><span class="block text-[24px]" data-aos="fade-right" data-aos-offset="30">Podaj miasto</span></h5>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <a href="<?php echo home_url() . '/lokalizacja' ?>" class="inline-block text-[14px] text-[#8a8f99] underline" data-aos="fade-right" data-aos-offset="30">więcej o lokalizacji</a>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group info-box2 mb-[35px] desktop:mb-[30px]">
            <!-- wp:heading {"level":6} -->
            <h6><span class="block mb-[10px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]" data-aos="fade-right" data-aos-offset="30">TERMIN UKOŃCZENIA</span></h6>
            <!-- /wp:heading -->

            <!-- wp:heading {"level":5} -->
            <h5><span class="block text-[24px]" data-aos="fade-right" data-aos-offset="30">Podaj termin ukończenia</span></h5>
            <!-- /wp:heading -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group info-box3 mb-[35px] desktop:mb-[30px]">
            <!-- wp:heading {"level":6} -->
            <h6><span class="block mb-[10px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]" data-aos="fade-right" data-aos-offset="30">LICZBA MIESZKAŃ W SPRZEDAŻY</span></h6>
            <!-- /wp:heading -->
            <!-- wp:heading {"level":5} -->
            <h5><span class="block text-[24px]" data-aos="fade-right" data-aos-offset="30">Podaj liczbę mieszkań</span></h5>
            <!-- /wp:heading -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group info-box4 mb-[35px] desktop:mb-[30px]">
            <!-- wp:heading {"level":6} -->
            <h6><span class="block mb-[10px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]" data-aos="fade-right" data-aos-offset="30">POWIERZCHNIA MIESZKAŃ</span></h6>
            <!-- /wp:heading -->
            <!-- wp:heading {"level":5} -->
            <h5><span class="block text-[24px]" data-aos="fade-right" data-aos-offset="30">Podaj metraż od m<sup>2</sup> do 3 m<sup>2</sup></span></h5>
            <!-- /wp:heading -->
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
      <div class="wp-block-group aos-fade-right block cursor-default left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0">
        <!-- wp:image -->
        <figure class="wp-block-image w-full h-full">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/pbgorski-default.jpeg" alt="img">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:p-[140px_100px] desktop:w-1/2">
        <!-- wp:heading {"level":2} -->
        <h2><span class="block mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]" data-aos="fade-right" data-aos-offset="30">Lorem ipsum dolor sit.</span></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <span class="block text-[18px] text-[#8a8f99]" data-aos="fade-right" data-aos-offset="30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius ullam repellendus libero sed beatae eligendi? Doloribus possimus nemo, alias corporis rerum eligendi error dolorum officiis quasi nulla et molestias! Soluta, illo ipsa? Modi perferendis doloremque iusto officia quam necessitatibus? Excepturi vero, dolore ad doloribus architecto suscipit cumque praesentium! Odit, consequuntur?</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content3 desktop:flex">
      <!-- wp:group -->
      <div class="wp-block-group aos-fade-right block cursor-default left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0">
        <!-- wp:image -->
        <figure class="wp-block-image w-full h-full">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/pbgorski-default.jpeg" alt="img">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:p-[140px_100px] desktop:w-1/2">
        <!-- wp:heading -->
        <h2><span class="block mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]" data-aos="fade-right" data-aos-offset="30">Lorem ipsum dolor sit amet.</span></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <span class="block text-[18px] text-[#8a8f99] mb-[30px]" data-aos="fade-right" data-aos-offset="30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum voluptas consectetur aliquam? Itaque cupiditate incidunt facere ullam, assumenda cumque corporis at asperiores ipsum possimus cum reiciendis unde. Atque quam optio aut ut! Error ea corrupti minima ipsa numquam nostrum odio?</span>
        <!-- /wp:paragraph -->
        <!-- wp:paragraph -->
        <a href="<?php echo home_url() . '/lokalizacja'; ?>" class="cursor-pointer text-primaryRed" data-aos="fade-right" data-aos-offset="30">Więcej o lokalizacji &rarr;</a>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group row-content4 desktop:flex flex-row-reverse">
      <!-- wp:group -->
      <div class="wp-block-group aos-fade-right block cursor-default left-col desktop:w-1/2 m-0 mb-[20px] desktop:mb-0">
        <!-- wp:image -->
        <figure class="wp-block-image w-full h-full">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/pbgorski-default.jpeg" alt="img">
        </figure>
        <!-- /wp:image -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group mb-[40px] desktop:mb-0 desktop:p-[140px_100px] desktop:w-1/2">
        <!-- wp:heading -->
        <h2><span class="block mb-[40px] text-[30px] desktop:text-[34px] leading-[36px] desktop:leading-[44px]" data-aos="fade-right" data-aos-offset="30">Lorem ipsum dolor sit.</span></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph -->
        <span class="block text-[18px] text-[#8a8f99] mb-[30px]" data-aos="fade-right" data-aos-offset="30">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id ab voluptates sequi.</span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->

    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->