<?php

/*
 * Title: header
 * Slug: header
 * Categories: header
 * Viewport Width: 1280
 */
?>

<!-- wp:list {"templateLock":"contentOnly","anchor":true} -->
<ul id="Menu-desktop" class="wp-block-list nav-desktop headerDark h-[60px] desktop:h-[100px] bg-white w-[100%] hidden desktop:flex justify-center items-center">
  <!-- wp:list-item -->
  <li>
    <a href="<?php home_url(); ?>" class="logo">
      <!-- wp:image -->
      <figure class="wp-block-image w-[115px]">
        <img src="<?php echo home_url(); ?>/wp-content/themes/mutiny/assets/img/frontpage/logo.png" alt="pb-gorski-logo" />
      </figure>
      <!-- /wp:image -->
    </a>
  </li>
  <!-- /wp:list-item -->

  <!-- wp:navigation /-->

</ul>
<!-- /wp:list -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"anchor":true} -->
<div id="Mobile" class="wp-block-group nav-mobile  h-[60px] bg-white desktop:hidden container mx-auto px-[20px] transition ease-out duration-300">
  <!-- wp:group -->
  <div class="wp-block-group h-full flex justify-between items-center">
    <!-- wp:paragraph -->
    <p>
      <a href="/" class="w-[35px] h-[27px] fixed top-[15px] left-[20px]">
        <!-- wp:image -->
        <figure class="wp-block-image menu-logo desktop:hidden mr-[10px]">
          <img src="<?php echo home_url(); ?> /wp-content/themes/mutiny/assets/img/frontpage/logo.png" alt="pb-gorski-logo" />
        </figure>
        <!-- /wp:image -->
      </a>
    </p>
    <!-- /wp:paragraph -->
    <!-- wp:group -->
    <div class="wp-block-group btn-open-menu ml-[10px] font-medium cursor-pointer">
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-white mb-[8px] rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line h-[2px] bg-white mb-[8px] rounded-[5px] transition-width ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-white rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:list -->
  <ul class="wp-block-list mobile-nav-menu text-[20px] font-semibold w-screen h-screen overflow-scroll pt-[40px] bg-white text-black z-[1] flex flex-col items-center gap-y-[30px] fixed top-[60px] left-0 translate-x-[100%] opacity-[0] transition ease-in-out duration-500">
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="/about/">O NAS</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="/services/">USŁUGI</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="/realizations/">REALIZACJE</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase border-b-[2px] border-transparent hover:border-primaryYellow hover:text-[#AAAAAA]">
      <!-- wp:paragraph -->
      <p><a href="/blog/">Aktualności</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="p-[10px_20px] uppercase border-[2px] border-white rounded-full w-fit cursor-pointer hover:bg-white hover:text-black transition ease-out duration-300">
      <!-- wp:paragraph -->
      <p><a href="/contact/">Kontakt</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->
</div>
<!-- /wp:group -->