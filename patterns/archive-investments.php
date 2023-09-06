<?php

/**
 * Title: archive-investments
 * Slug: archive-investments
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje-post" class="wp-block-group inwestycje-post relative">

  <!-- wp:group -->
  <div class="wp-block-group title-wrapper bg-[#f6f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] flex items-center">
      <!-- wp:group -->
      <div class="wp-block-group left-col w-[70%]">
        <!-- wp:paragraph -->
        <p class="container mx-auto desktop:px-0 px-[20px] mb-[40px] text-[60px] text-[#2e384c] font-bold">Wszystkie inwestycje</p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list container mx-auto desktop:px-0 px-[20px] pb-[50px] flex items-center gap-[20px] text-[18px] font-medium">
          <!-- wp:list-item -->
          <li class="allTabBtn tab-active text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
            Wszystkie
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="gdanskTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
            Gdańsk
          </li>
          <!-- /wp:list-item -->
          <!-- wp:list-item -->
          <li class="gdyniaTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
            Gdynia
          </li>
          <!-- /wp:list-item -->
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group right-col w-[30%]">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-[#8a8f99]">4 inwestycje / 169 lokali</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

  <!-- wp:list -->
  <ul class="wp-block-list categories-cities mb-[108px] flex flex-wrap gap-[10px]">
    <!-- wp:list-item -->
    <li class="w-fit h-[40px] px-[10px] bg-[#F2F2F2] border-[#AAA] border-[2px] rounded-full uppercase text-[14px] font-semibold leading-[20px] flex justify-center items-center hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer">
      <!-- wp:paragraph -->
      <p><a href="<?php echo get_home_url() . '/inwestycje'; ?>" class="flex items-center w-full h-full">Wszystkie</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <?php
    $args = array(
      'taxonomy' => 'category',
      'orderby' => 'name',
      'order'   => 'ASC'
    );
    $cats = get_categories($args);
    $currentCity = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 35, 30));

    foreach ($cats as $cat) {
    ?>
      <?php
      $catNoSpaces = str_replace(' ', '-', strtolower($cat->name));
      if (($cat->name) == 'glowna' || ($catNoSpaces) == 'bez-kategorii') {
        echo '';
      } else { ?>
        <!-- wp:list-item -->
        <li class="w-fit h-[40px] px-[10px] bg-[#F2F2F2] border-[#AAA] border-[2px] rounded-full uppercase text-[14px] font-semibold leading-[20px] flex justify-center items-center hover:bg-primaryYellow hover:border-primaryYellow transition ease-out duration-300 cursor-pointer <?php if ($catNoSpaces == $currentCity) echo 'bg-primaryYellow border-primaryYellow'; ?>">
          <!-- wp:paragraph -->
          <p><a href="<?php echo get_category_link($cat->term_id) ?>" class="flex items-center w-full h-full"><?php echo $cat->name; ?></a></p>
          <!-- /wp:paragraph -->
        </li>
        <!-- /wp:list-item -->
      <?php
      }; ?>
    <?php
    };
    ?>
  </ul>
  <!-- /wp:list -->

  <!-- wp:list -->
  <ul class="wp-block-list investments-list mb-[150px]">
    <?php
    $args = array(
      'post_type' => 'inwestycje',
      'posts_per_page' => 10,
      'order' => 'DESC',
      'category_name' => $currentCity
    );
    $post_query = new WP_Query($args);

    if ($post_query->have_posts()) {
      while ($post_query->have_posts()) {
        $post_query->the_post();
        $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
        if (true) { ?>
          <!-- wp:list-item -->
          <li class="invest-tile max-w-full h-[450px] mb-[80px]">
            <a href="<?php the_permalink(); ?>" class="relative group p-[25px] desktop:max-w-full max-w-[310px] h-full" data-aos="fade-up" data-aos-duration="300" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper w-full h-full flex <?php echo (!($counter % 2)) ? 'flex-row-reverse' : ''; ?> gap-[50px]">
                <!-- wp:image -->
                <figure class="wp-block-image w-[50%] h-[330px] desktop:h-full mb-[30px]">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:group -->
                <div class="wp-block-group content w-[50%] flex flex-col items-start justify-center">
                  <!-- wp:paragraph -->
                  <p class="mr-[20px] text-[30px] desktop:text-[40px] font-bold"><?php the_title(); ?></p>
                  <!-- /wp:paragraph -->
                  <!-- wp:paragraph -->
                  <p class="mb-[15px] text-[18px] text-bgDarkGray">Gdańsk</p>
                  <!-- /wp:paragraph -->

                  <!-- wp:group -->
                  <div class="wp-block-group available-apartments flex items-center gap-[25px]">
                    <!-- wp:paragraph -->
                    <p class="text-[48px] text-primaryRed font-bold">41</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:group -->
                    <div class="wp-block-group leading-[24px]">
                      <!-- wp:paragraph -->
                      <p class="text-[18px] text-bgDarkGray">dostępnych</p>
                      <!-- /wp:paragraph -->
                      <!-- wp:paragraph -->
                      <p class="text-[18px] text-bgDarkGray">lokali</p>
                      <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->
                  </div>
                  <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
              </div>
              <!-- /wp:group -->
            </a>
          </li>
          <!-- /wp:list-item -->
    <?php
        };
      };
    };
    wp_reset_query();
    ?>
  </ul>
  <!-- /wp:list -->

  <!-- wp:group -->
  <div class="wp-block-group button-wrapper desktop:mt-[80px] mt-[40px] flex items-center justify-center gap-[64px] cursor-pointer">
    <!-- wp:group -->
    <div class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]">
      <!-- wp:paragraph -->
      <p class="hidden">gray separator</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons btn-more desktop:w-[330px] w-fit ml-[0px] p-[15px_30px] uppercase border-[2px] border-[#D5D5D5] rounded-full hover:border-primaryYellow hover:text-black transition ease-out duration-300">
      <!-- wp:paragraph -->
      <p><a href="#" class="uppercase text-[14px] font-bold">Pokaż więcej</a></p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:group -->
    <div class="wp-block-group gray-border hidden desktop:inline-block w-full h-[2px] bg-[#808080] opacity-[15%]">
      <!-- wp:paragraph -->
      <p class="hidden">gray separator</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->