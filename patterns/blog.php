<?php

/**
 * Title: blog
 * Slug: blog
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="blog" class="wp-block-group blog mb-[80px]">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group title mb-[20px] desktop:mb-[40px]">
      <!-- wp:heading {"level":5} -->
      <h5><span data-aos="fade-right" data-aos-offset="30" class="block text-[24px] text-center font-bold">Aktualności</span></h5>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group mx-auto w-[130px] border-b-primaryRed border-b-[2px]">
        <!-- wp:paragraph -->
        <p class="hidden">empty for border bottom</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group above-wp-query">
      <!-- wp:query {"query":{"perPage":4,"pages":0,"offset":0,"postType":"post"},"isLink":true} -->
      <!-- wp:group -->
      <div class="wp-block-group above-post-template-frontpage-blog ul-wrapper-frontpage-blog ">
        <!-- wp:post-template {"className":"mb-[40px] flex desktop:flex-row flex-col justify-between desktop:gap-[30px] gap-[60px]"} -->
        <!-- wp:group -->
        <div class="wp-block-group blog-tile w-full inline-block group">
          <!-- wp:group -->
          <div class="wp-block-group relative group block">
            <!-- wp:group -->
            <div class="wp-block-group wrapper">
              <!-- wp:group -->
              <div class="wp-block-group h-[260px] wide:h-[320px] mb-[10px]">
                <!-- wp:post-featured-image {"isLink":true} /-->
              </div>
              <!-- /wp:group -->

              <!-- wp:group -->
              <div class="wp-block-group post-date mr-[20px] text-[16px] text-bgDarkGray mb-[5px]"><!-- wp:post-date /--></div>
              <!-- /wp:group -->

              <!-- wp:group -->
              <div class="wp-block-group mr-[20px] text-[20px] font-bold mb-[15px] leading-[32px] border-b-[2px] border-b-primaryRed"><!-- wp:post-title {"isLink":true,"level":5} /--></div>
              <!-- /wp:group -->

              <!-- wp:group -->
              <div class="wp-block-group mb-[15px] text-[16px] text-bgDarkGray"><!-- wp:post-terms {"term":"category"} /--></div>
              <!-- /wp:group -->

              <!-- wp:paragraph -->
              <p class="relative inline text-primaryRed before:content-[''] before:inline-block cursor-pointer">Czytaj dalej <span class="text-[11px]">&#x25BA;</span></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:group -->
      <!-- /wp:query -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group flex items-center justify-center">
      <!-- wp:group -->
      <div class="wp-block-group btn-find-more relative w-fit h-[55px] bg-[#3d4b66] text-white flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="w-full h-full font-bold z-[1]"><a href="<?php echo home_url() . '/blog' ?>" class="block p-[10px_20px] w-full h-full flex items-center justify-center">Zobacz wszystkie aktualności</a></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->