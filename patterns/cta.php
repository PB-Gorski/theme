<?php

/**
 * Title: cta
 * Slug: cta
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="cta" class="wp-block-group cta h-[560px] desktop:h-fit relative">
  <!-- wp:image -->
  <figure class="wp-block-image cta-img w-full h-[560px] desktop:h-auto absolute left-0 top-0 z-[-1] scale-x-[-1] desktop:scale-[1]">
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
    <div class="wp-block-group col2 w-[100%] desktop:w-[55%] pt-[110px] desktop:pt-[160px] fflex flex-col gap-[30px] items-center jusify-center">
      <!-- wp:paragraph -->
      <p class="text-[28px] desktop:text-[40px] font-bold mb-[20px] desktop:mb-[40px]">Potrzebujesz więcej informacji?</p>
      <!-- /wp:paragraph -->

      <!-- wp:group -->
      <div class="wp-block-group inner-cols-wrapper mb-[80px] desktop:h-[100px] desktop:flex">
        <!-- wp:group -->
        <div class="wp-block-group inner-col1 mb-[30px] desktop:mb-0 desktop:w-[40%] desktop:border-r-[1px] desktop:border-[rgba(138,143,153,0.30)]">
          <!-- wp:paragraph -->
          <p class="mb-[10px] text-bgDarkGray">Zadzwoń do nas</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="relative text-[22px] inline before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[30%] hover:before:min-h-[100%] before:bg-[#b3f1ff] before:transition-height before:duration-300 before:ease before:z-[-1] cursor-pointer">(58) 340 79 00</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group inner-col2 mb-[40px] desktop:mb-0 desktop:pl-[50px] desktop:w-[60%]">
          <!-- wp:paragraph -->
          <p class="mb-[10px] text-bgDarkGray">Napisz</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="relative text-[22px] inline before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[30%] hover:before:min-h-[100%] before:bg-[#b3f1ff] before:transition-height before:duration-300 before:ease before:z-[-1] cursor-pointer">sprzedaz@pbgorski.pl</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group group btn-find-more mb-[80px] relative bg-[#3d4b66] text-white w-[210px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="font-bold z-[1]">Skontaktuj się</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->