<?php

/**
 * Title: page-inwestycje-zrealizowane
 * Slug: page-inwestycje-zrealizowane
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje-post" class="wp-block-group inwestycje-zrealizowane relative">
  <!-- wp:group -->
  <div class="wp-block-group mobile-fixed-phone block desktop:hidden flex justify-center items-center bg-primaryRed w-full h-[87px] fixed bottom-0 left-0 z-[2]">
    <!-- wp:group -->
    <div class="wp-block-group flex gap-[30px] items-center h-[47px] p-[5px_60px] rounded-full border-[2px] border-[rgba(255,255,255,0.33)]">
      <!-- wp:image -->
      <figure class="wp-block-image m-0">
        <img src="<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/frontpage/phone-2.png'; ?>" alt="phone-icon">
      </figure>
      <!-- /wp:image -->
      <!-- wp:paragraph -->
      <a href="tel:+48583407900" class="text-white ">(+48) 58 340-79-00</a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
  <!-- wp:group -->
  <div class="wp-block-group title-wrapper bg-[#f6f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] py-[20px] desktop:flex items-center">
      <!-- wp:group -->
      <div class="wp-block-group left-col desktop:w-[70%]">
        <!-- wp:paragraph -->
        <p class="container mx-auto desktop:px-0 px-[20px] mb-[40px] text-[36px] desktop:text-[60px] text-[#2e384c] font-bold leading-[44px]">Inwestycje zrealizowane</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group investments-posts container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:list -->
    <ul class="wp-block-list mb-[40px] grid grid-rows-3 grid-cols-3 gap-[30px]">
      <?php
      $args = array(
        'post_type' => 'inwest-zrealizowane',
        'posts_per_page' => 9,
        'order' => 'ASC'
      );
      $post_query = new WP_Query($args);
      $counter = 0;
      $i = 0;

      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
          $counter++; ?>
          <!-- wp:list-item -->
          <li class="invest-tile max-w-[400px] w-full mb-[80px]">
            <a href="<?php the_permalink(); ?>" class="relative group p-[25px] desktop:max-w-full max-w-[310px] h-full" data-aos="fade-up" data-aos-duration="300" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper w-full  <?php echo (!($counter % 2)) ? 'flex-row-reverse' : ''; ?> gap-[50px]">
                <!-- wp:image -->
                <figure class="wp-block-image w-full mb-[30px] h-[330px]">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph -->
                <p class="mr-[20px] text-[18px] desktop:text-[24px] font-bold"><?php the_title(); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p class="relative text-[18px] desktop:text-[22px] inline before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[50%] hover:before:min-h-[100%] before:bg-[#b3f1ff] before:transition-height before:duration-300 before:ease before:z-[-1] cursor-pointer">Zobacz więcej &rarr;</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </a>
          </li>
          <!-- /wp:list-item -->
        <?php
          $i++;
        };
        wp_reset_query(); ?>
        <!-- wp:query-pagination -->
        <div class="wp-block-query-pagination">
          <!-- wp:query-pagination-previous /-->
          <!-- wp:query-pagination-next /-->
        </div>
        <!-- /wp:query-pagination -->
      <?php
      };

      ?>
    </ul>
    <!-- /wp:list -->
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->