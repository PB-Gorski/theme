<?php

/**
 * Title: page-inwestycje-post
 * Slug: page-inwestycje-post
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje-post" class="wp-block-group inwestycje-post relative bg-[#f6f7fa]">
  <!-- wp:paragraph -->
  <p class="container mx-auto desktop:px-0 px-[20px] mb-[40px] text-[60px] text-[#2e384c] font-bold">Wszystkie inwestycje</p>
  <!-- /wp:paragraph -->

  <!-- wp:list -->
  <ul class="wp-block-list container mx-auto desktop:px-0 px-[20px] mb-[20px] flex items-center gap-[20px] text-[14px] font-medium">
    <!-- wp:list-item -->
    <li class="uppercase allTabBtn tab-active text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
      WSZYSTKIE
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase gdanskTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
      GDAŃSK
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="uppercase gdyniaTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
      GDYNIA
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->

  <!-- wp:group -->
  <div class="wp-block-group">
    <!-- wp:list -->
    <ul class="wp-block-list mb-[40px]">
      <?php
      $args = array(
        'post_type' => 'inwestycje',
        'posts_per_page' => 3,
        'order' => 'ASC'
      );
      $post_query = new WP_Query($args);

      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
      ?>
          <!-- wp:list-item -->
          <li class="invest-tile max-w-full mb-[80px]">
            <a href="<?php the_permalink(); ?>" class="relative group p-[25px] desktop:max-w-full max-w-[310px]" data-aos="fade-up" data-aos-duration="300" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper">
                <!-- wp:image -->
                <figure class="wp-block-image w-fulll h-[330px] wide:h-[360px] mb-[30px]">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph -->
                <p class="mr-[20px] text-[30px] desktop:text-[36px] font-bold"><?php the_title(); ?></p>
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
            </a>
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