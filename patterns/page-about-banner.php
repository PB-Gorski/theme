<?php

/**
 * Title: about-banner
 * Slug: about-banner
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Banner" class="wp-block-group banner h-[80vh] desktop:h-[90vh] relative">
  <!-- wp:group -->
  <div class="wp-block-group w-full h-full bg-banner relative flex desktop:block items-center">
    <!-- wp:image -->
    <figure class="wp-block-image w-full h-full absolute top-0 left-0">
      <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-about/banner.jpeg" alt="banner-background">
    </figure>
    <!-- /wp:image -->

    <!-- wp:group -->
    <div class="wp-block-group text-content container mx-auto desktop:px-0 px-[20px] desktop:pl-[80px] z-[0] relative text-white">
      <!-- wp:heading {"level":1} -->
      <h1 class="wp-block-heading title text-[36px] desktop:text-[60px] font-bold desktop:pt-[150px] mb-[50px] leading-[44px] desktop:leading-[70px]"><span class="block" data-aos="fade-right" data-aos-offset="30">Poznaj naszą historię,</span><span class="block" data-aos="fade-right" data-aos-offset="30">strategię i wartości</span></h1>
      <!-- /wp:heading -->

      <!-- wp:group -->
      <div class="wp-block-group desktop:flex">
        <!-- wp:group -->
        <div class="wp-block-group col1 pl-[40px] desktop:pl-0 pr-[40px] w-fit h-[68px] flex gap-[15px] items-center border-r-[1px] border-[rgba(255,255,255,0.2)]">
          <!-- wp:paragraph -->
          <span id="count1" class="text-[48px] font-bold" data-aos="fade-up" data-aos-offset="30">40</span>
          <!-- /wp:paragraph -->
          <!-- wp:group -->
          <div class="wp-block-group leading-[24px]">
            <!-- wp:paragraph -->
            <span class="text-[18px]" data-aos="fade-up" data-aos-offset="30">lat</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="text-[18px]" data-aos="fade-up" data-aos-offset="30">doświadczenia</span>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group col2 px-[20px] w-fit h-[68px] flex gap-[15px] items-center desktop:border-r-[1px] desktop:border-[rgba(255,255,255,0.2)]">
          <!-- wp:paragraph -->
          <span id="count2" class="text-[48px] font-bold" data-aos="fade-up" data-aos-offset="30">125</span>
          <!-- /wp:paragraph -->
          <!-- wp:group -->
          <div class="wp-block-group leading-[24px]">
            <!-- wp:paragraph -->
            <span class="text-[18px]" data-aos="fade-up" data-aos-offset="30">zrealizowanych</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="text-[18px]" data-aos="fade-up" data-aos-offset="30">inwestycji</span>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group px-[20px] col3 w-fit h-[68px] flex gap-[15px] items-center">
          <!-- wp:paragraph -->
          <span id="count3" class="text-[48px] font-bold" data-aos="fade-up" data-aos-offset="30">4000</span>
          <!-- /wp:paragraph -->
          <!-- wp:group -->
          <div class="wp-block-group leading-[24px]">
            <!-- wp:paragraph -->
            <span class="text-[18px]" data-aos="fade-up" data-aos-offset="30">sprzedanych</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="text-[18px]" data-aos="fade-up" data-aos-offset="30">mieszkań</span>
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
</div>
<!-- /wp:group -->