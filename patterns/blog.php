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
      <!-- wp:paragraph -->
      <span data-aos="fade-right" data-aos-offset="30" class="block text-[24px] text-center font-bold">Aktualności</span>
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
      <div class="wp-block-group above-post-template-frontpage-blog ul-wrapper-frontpage-blog mb-[40px] flex desktop:flex-row flex-col justify-between desktop:gap-[30px] gap-[60px]">
        <!-- wp:post-template {"className":"swiper-wrapper"} -->
        <!-- wp:group -->
        <div class="wp-block-group blog-tile w-full inline-block group">
          <?php $counter2 = 0; ?>
          <!-- wp:paragraph -->
          <span class="relative group inline-block" data-aos="fade-up" data-aos-offset="30" data-aos-delay="<?php echo $counter2 * 50; ?>">
            <!-- wp:group -->
            <div class="wp-block-group wrapper">
              <!-- wp:group -->
              <div class="wp-block-group h-[270px] mb-[10px]">
                <!-- wp:post-featured-image {"isLink":true} /-->
              </div>
              <!-- /wp:group -->

              <!-- wp:paragraph -->
              <p class="post-date mr-[20px] text-[16px] text-bgDarkGray mb-[15px]"><?php echo get_the_date(); ?></p>
              <!-- /wp:paragraph -->

              <!-- wp:paragraph -->
              <p class="post-date mr-[20px] text-[16px] text-bgDarkGray mb-[15px]"><!-- wp:post-date /--></p>
              <!-- /wp:paragraph -->

              <!-- wp:group -->
              <div class="wp-block-group mr-[20px] text-[24px] font-bold mb-[15px] leading-[32px] border-b-[2px] border-b-primaryRed"><!-- wp:post-title {"isLink":true} /--></div>
              <!-- /wp:group -->

              <!-- wp:paragraph -->
              <p class="relative inline text-primaryRed before:content-[''] before:inline-block cursor-pointer">Czytaj dalej <span class="text-[11px]">&#x25BA;</span></p>
              <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
          </span>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <?php $counter2++; ?>
        <!-- /wp:post-template -->
      </div>
      <!-- /wp:group -->
      <!-- /wp:query -->
    </div>
    <!-- /wp:group -->


    <!-- wp:list -->
    <ul class="wp-block-list mb-[40px] flex desktop:flex-row flex-col justify-between desktop:gap-[30px] gap-[60px]">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4,
        'order' => 'DESC'
      );
      $post_query = new WP_Query($args);
      $counter2 = 0;

      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
          $counter2++;
      ?>
          <!-- wp:list-item -->
          <li class="blog-tile w-full inline-block group">
            <a href="<?php the_permalink(); ?>" class="relative group inline-block" data-aos="fade-up" data-aos-offset="30" data-aos-delay="<?php echo $counter2 * 50; ?>">
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
                <p class="mr-[20px] text-[24px] font-bold mb-[15px] leading-[32px] border-b-[2px] border-b-primaryRed"><?php the_title(); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p class="relative inline text-primaryRed before:content-[''] before:inline-block cursor-pointer">Czytaj dalej <span class="text-[11px]">&#x25BA;</span></p>
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
    <!-- wp:group -->
    <div class="wp-block-group flex items-center justify-center">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/blog' ?>" class="wp-block-group btn-find-more relative w-fit h-[55px] p-[10px_20px] bg-[#3d4b66] text-white flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="font-bold z-[1]">Zobacz wszystkie aktualności</p>
        <!-- /wp:paragraph -->
      </a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->