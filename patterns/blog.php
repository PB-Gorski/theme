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
      <p data-aos="fade-right" data-aos-offset="30" class="text-[24px] desktop:ml-[100px] text-bgDarkGray">Aktualności</p>
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
          <li class="blog-tile w-full inline-block">
            <a href="<?php the_permalink(); ?>" class="relative group inline-block p-[25px]" data-aos="fade-up" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper">
                <!-- wp:image -->
                <figure class="wp-block-image h-[270px] mb-[10px]">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph -->
                <p class="post-date mr-[20px] text-[16px] text-bgDarkGray mb-[15px]"><?php echo get_the_date(); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p class="mr-[20px] text-[24px] font-bold mb-[15px] leading-[32px]"><?php the_title(); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p class="relative inline before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[50%] hover:before:min-h-[100%] before:bg-lightBlue before:transition-height before:duration-300 before:ease before:z-[-1] cursor-pointer">Zobacz więcej &rarr;</p>
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