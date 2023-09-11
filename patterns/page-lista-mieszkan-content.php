<?php

/**
 * Title: lista-mieszkan-content
 * Slug: lista-mieszkan-content
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="content" class="wp-block-group content relative ">
  <!-- wp:group -->
  <div class="wp-block-group bg-bgLightGray">
    <!-- wp:group -->
    <div class="wp-block-group search-wrapper container mx-auto py-[20px] desktop:px-0 px-[20px] text-[18px] flex flex-col desktop:flex-row gap-[10px] desktop:gap-[1px]">
      <!-- wp:group -->
      <div class="wp-block-group miasto select-wrapper">
        <!-- wp:group -->
        <div class="wp-block-group select">
          <!-- wp:group -->
          <div class="wp-block-group select__trigger">
            <!-- wp:paragraph -->
            <span class="text-[#999] text-[18px]">Miasto</span>
            <!-- /wp:paragraph -->
            <!-- wp:group -->
            <div class="wp-block-group arrow">
              <!-- wp:paragraph -->
              <p class="hidden">-></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
          <!-- wp:group -->
          <div class="wp-block-group custom-options">
            <!-- wp:paragraph -->
            <span class="custom-option" data-value="gdansk">Gdańsk</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="custom-option" data-value="gdynia">Gdynia</span>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group inwestycje select-wrapper">
        <!-- wp:group -->
        <div class="wp-block-group select">
          <!-- wp:group -->
          <div class="wp-block-group select__trigger">
            <!-- wp:paragraph -->
            <span class="text-[#999]">Inwestycje</span>
            <!-- /wp:paragraph -->
            <!-- wp:group -->
            <div class="wp-block-group arrow">
              <!-- wp:paragraph -->
              <p class="hidden">-></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
          <!-- wp:group -->
          <div class="wp-block-group custom-options">
            <!-- wp:paragraph -->
            <span class="custom-option" data-value="osiedle-srebniki">Osiedle Srebniki</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="custom-option" data-value="sw-piotra">Św. Piotra</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="custom-option" data-value="wiezyscka-folwark">Wiezycka Folwark</span>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <span class="custom-option" data-value="torunska-16">Toruńska 16</span>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group btns-wrapper flex flex-row ">
        <!-- wp:group -->
        <div class="wp-block-group btn-more w-full desktop:w-[265px] h-[65px] bg-white flex gap-[10px] justify-center items-center cursor-pointer">
          <!-- wp:paragraph -->
          <p>
            <svg xmlns="http://www.w3.org/2000/svg" id="icon_filters" width="24" height="24" viewBox="0 0 24 24" class="injected-svg inject-svg icon-filters">
              <title>icon_filters</title>
              <path class="line" d="M6 4v16m6-16v16m6-16v16"></path>
              <circle class="circle" cx="6" cy="10" r="2"></circle>
              <circle class="circle" cx="12" cy="15" r="2"></circle>
              <circle class="circle" cx="18" cy="10" r="2"></circle>
            </svg>
          </p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="text-[18px]">Więcej opcji</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group group btn-search relative bg-primaryRed text-white w-full desktop:w-[245px] h-[65px] flex items-center justify-center gap-[15px] before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#9C0927] before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <p class=" z-[1]">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="injected-svg inject-svg icon-search">
              <defs>
                <style></style>
              </defs>
              <g id="icon_search" fill="none" stroke="#fff" stroke-width="2">
                <circle cx="6.5" cy="6.5" r="5.5"></circle>
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-4-4"></path>
              </g>
            </svg>
          </p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="font-bold z-[1]">Szukaj</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->


  <!-- wp:group -->
  <div class="wp-block-group container lista-mieszkan mx-auto desktop:px-0 px-[20px] py-[85px]">
    <?php
    do_action('show_beautiful_filters', 'mieszkania');
    ?>
    <!-- wp:list -->
    <ul class="wp-block-list all-taxonomy-list container mx-auto px-[20px] bg-[#2f384d] py-[20px] flex flex-wrap items-center justify-between gap-[20px] text-[13px] font-bold">
      <?php
      $i = 0;
      $taxonomies = get_terms();
      $taxonomies2 = get_taxonomies();
      // print_r($taxonomies);
      // echo '</br> 2 </br>';
      // print_r($taxonomies2);
      ?>

      <?php
      foreach ($taxonomies2 as $taxonomy) {
        if ($i > 7) {
      ?>
          <!-- wp:list-item -->
          <li class="uppercase text-[#8a8f99]"><?php echo $taxonomy; ?></li>
          <!-- /wp:list-item -->
      <?php };
        $i++;
      }; ?>
    </ul>
    <!-- /wp:list -->



    <!-- wp:list -->
    <ul class="wp-block-list lista-mieszkan mb-[40px]">
      <?php
      $args = array(
        'post_type' => 'mieszkania',
        'posts_per_page' => 3,
        'order' => 'ASC'
      );
      $post_query = new WP_Query($args);

      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $tax = get_terms();
          $tax2 = get_taxonomies();
      ?>
          <!-- wp:list-item -->
          <li class="py-[20px] border-b-[1px] border-[#e6eaf0]">
            <!-- wp:paragraph -->
            <a href="<?php the_permalink(); ?>" class="flex gap-[20px]">
              <!-- wp:paragraph -->
              <p class="mr-[20px] text-[16px] hidden text-[#2e384d]"><?php the_title(); ?></p>
              <!-- /wp:paragraph -->

              <!-- wp:list -->
              <ul class="wp-block-list taxonomies container mx-auto desktop:px-0 px-[20px] flex flex-wrap justify-between items-center gap-[20px] text-[18px] font-medium">
                <?php $taxesTest = get_the_taxonomies(get_the_ID());
                foreach ($taxesTest as $taxTest) { ?>
                  <!-- wp:list-item -->
                  <li class="w-fit flex flex-col gap-[4px]"><?php echo $taxTest; ?></li>
                  <!-- /wp:list-item -->
                <?php }; ?>
              </ul>
              <!-- /wp:list -->
            </a>
            <!-- /wp:paragraph -->
          </li>
          <!-- /wp:list-item -->
      <?php
        };
      };
      wp_reset_query();
      ?>
    </ul>
    <!-- /wp:list -->
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->