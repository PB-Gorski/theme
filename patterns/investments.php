<?php

/**
 * Title: investments
 * Slug: investments
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje" class="wp-block-group investments h-[600pxpx] bg-red-300">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:list -->
    <ul class="wp-block-list">
      <?php
      $args = array(
        'post_type' => 'inwestycje',
        'posts_per_page' => 3,
        'order' => 'DESC'
      );
      $post_query = new WP_Query($args);

      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
          $counter++;
      ?>
          <!-- wp:list-item -->
          <li class="invest-tile wide:max-w-[420px] desktop:max-w-[354px] max-w-[310px] h-[380px] desktop:h-[450px] wide:h-[530px]">
            <a href="<?php the_permalink(); ?>" class="relative z-[2] group p-[25px] desktop:max-w-[400px] max-w-[310px]">
              <!-- wp:group -->
              <div class="wp-block-group wrapper">
                <!-- wp:image -->
                <figure class="wp-block-image h-full">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph -->
                <p class="mr-[20px] text-[25px] font-semibold mb-[15px] underline-offset-[7px] group-hover:underline group-hover:decoration-primaryYellow transition ease-out duration-500"><?php the_title(); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group -->
                <div class="wp-block-group available-apartments flex gap-[25px]">
                  <!-- wp:paragraph -->
                  <p class="text-[48px] text-primaryRed">41</p>
                  <!-- /wp:paragraph -->
                  <!-- wp:paragraph -->
                  <p class="text-[18px] text-bgDarkGray">dostępnych lokali</p>
                  <!-- /wp:paragraph -->
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