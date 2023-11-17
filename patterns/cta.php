<?php

/**
 * Title: cta
 * Slug: cta
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="cta" class="wp-block-group cta h-[560px] relative">
  <!-- wp:image -->
  <figure class="wp-block-image cta-img w-full h-full absolute left-0 top-0 z-[-1] scale-x-[-1] desktop:scale-[1]">
    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/frontpage/cta-bg.jpeg" alt="cta-bg">
  </figure>
  <!-- /wp:image -->

  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] h-full flex">
    <!-- wp:group -->
    <div class="wp-block-group hidden desktop:block col1 w-[45%]">
      <!-- wp:paragraph -->
      <p class="hidden">empty space</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group col2 w-[100%] desktop:w-[55%] py-[60px] flex items-center jusify-center">
      <!-- wp:group -->
      <div class="wp-block-group">
        <!-- wp:heading -->
        <h2><span class="block text-[28px] desktop:text-[38px] font-bold mb-[60px] desktop:mb-[40px]" data-aos="fade-right" data-aos-offset="30">Potrzebujesz więcej informacji?</span></h2>
        <!-- /wp:heading -->

        <!-- wp:group -->
        <div class="wp-block-group inner-cols-wrapper mb-[50px] desktop:h-[100px] desktop:flex">
          <!-- wp:group -->
          <div class="wp-block-group inner-col1 mb-[30px] desktop:mb-0 desktop:w-[40%] ">
            <!-- wp:paragraph -->
            <p class="mb-[10px] text-bgDarkGray" data-aos="fade-up" data-aos-offset="30">Zadzwoń do nas</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p class="relative text-[22px] font-medium inline-block border-b-primaryRed border-b-[2px] cursor-pointer" data-aos="fade-up" data-aos-offset="30">(58) 340 79 00</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group inner-col2 mb-[40px] desktop:mb-0 desktop:pl-[50px] desktop:w-[60%]">
            <!-- wp:paragraph -->
            <p class="mb-[10px] text-bgDarkGray" data-aos="fade-up" data-aos-offset="30">Napisz</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p class="relative text-[22px] font-medium inline-block border-b-primaryRed border-b-[2px] cursor-pointer" data-aos="fade-up" data-aos-offset="30">sprzedaz@pbgorski.pl</p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <span class="group btn-find-more block relative bg-[#3d4b66] text-white w-[210px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer" data-aos="fade-right" data-aos-offset="30"><span class="font-bold text-white z-[1]"><a href="<?php echo home_url() . '/contact' ?>"> Skontaktuj się</a></span></span>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->