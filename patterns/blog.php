<?php

/**
 * Title: blog
 * Slug: blog
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="blog" class="wp-block-group blog h-[600pxpx]">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group title">
      <!-- wp:paragraph -->
      <p class="text-[24px] ml-[100px] text-bgDarkGray">Aktualności</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:list -->
    <ul class="wp-block-list mb-[40px] flex desktop:flex-row flex-col justify-between gap-[30px]">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'order' => 'ASC'
      );
      $post_query = new WP_Query($args);

      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
      ?>
          <!-- wp:list-item -->
          <li class="blog-tile w-full">
            <a href="<?php the_permalink(); ?>" class="relative group p-[25px]" data-aos="fade-up" data-aos-duration="300" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper">
                <!-- wp:image -->
                <figure class="wp-block-image h-[270px] mb-[10px]">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph -->
                <p class="post-date mr-[20px] text-[16px] text-bgDarkGray mb-[15px]"><?php the_date(); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p class="mr-[20px] text-[24px] font-bold mb-[15px] leading-[32px]"><?php the_title(); ?></p>
                <!-- /wp:paragraph -->
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