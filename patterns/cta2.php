<?php

/**
 * Title: cta2
 * Slug: cta2
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="cta2" class="wp-block-group cta h-[560px] desktop:h-fit relative">
  <!-- wp:image -->
  <figure class="wp-block-image cta-img w-full h-full absolute left-0 top-0 z-[-1] scale-x-[-1] desktop:scale-[1]">
    <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/page-lista-mieszkan/cta2.jpeg" alt="cta-bg">
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
    <div class="wp-block-group col2 w-[100%] desktop:w-[55%] py-[60px] fflex flex-col gap-[30px] items-center jusify-center">
      <!-- wp:paragraph -->
      <span class="block text-[28px] desktop:text-[38px] font-bold mb-[60px] desktop:mb-[40px]" data-aos="fade-right" data-aos-offset="30">Chcesz dowiedzieć się więcej o tym mieszkaniu?</span>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <span class="block text-[28px] desktop:text-[38px] font-bold mb-[60px] desktop:mb-[40px]" data-aos="fade-right" data-aos-offset="30">Napisz!?</span>
      <!-- /wp:paragraph -->

      <div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="3358ba5" title="test"]</div>
      <!-- /wp:contact-form-7/contact-form-selector -->

      <!-- wp:paragraph -->
      <span class="group btn-find-more block relative bg-[#3d4b66] text-white w-[210px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer" data-aos="fade-right" data-aos-offset="30"><span class="font-bold text-white z-[1]"><a href="<?php echo home_url() . '/contact' ?>"> Wyślij</a></span></span>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->