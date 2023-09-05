<?php

/**
 * Title: inwestycje
 * Slug: inwestycje
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje" class="wp-block-group inwestycje h-[600pxpx] bg-red-300">
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
            <a href="<?php the_permalink(); ?>" class="relative z-[2] group p-[25px] wide:max-w-[420px] desktop:max-w-[354px] max-w-[310px] h-[380px] desktop:h-[450px] wide:h-[530px] rounded-[20px] text-[18px] flex items-center before:hover:opacity-100 after:hover:opacity-100 wide:before:h-[530px] wide:after:h-[530px] transition ease-out duration-300 mr-[8px] before:content-[''] before:opacity-0 before:absolute before:top-0 before:left-0 before:z-[2] before:w-full before:h-[450px] before:bg-gradient-to-t before:from-black before:via-[rgba(0,0,0,0)] before:bg-center before:bg-cover before:transition before:duration-[300ms] before:ease-out before:grayscale after:content-[''] after:opacity-0 after:absolute after:top-0 after:left-0 after:z-[2] after:w-[354px] after:h-[450px] after:transition after:duration-[300ms] after:ease-out after:grayscale <?php echo ($counter == 1) ?  "clip-path-url-['#clipped-swiper-serv-1']" : (($counter == $post_query->post_count) ? "clip-path-url-['#clipped-swiper-serv-2']" : ''); ?>" data-aos="fade-right" data-aos-duration="600" data-aos-offset="130">
              <!-- wp:group -->
              <div class="wp-block-group img-clip-path-wrapper w-full h-full rounded-[20px] rounded-br-[20px] overflow-hidden absolute left-0 top-0 z-[1] group-hover:grayscale">
                <!-- wp:group -->
                <div class="wp-block-group img-clip-path-wrapper w-full h-full rounded-[20px] rounded-br-[20px] overflow-hidden absolute left-0 top-0 z-[1] group-hover:grayscale">
                  <!-- wp:group -->
                  <div class="wp-block-group <?php echo ($counter == 1) ? "clip-path-url-['#clipped-swiper-serv-1']" : (($counter == $post_query->post_count) ? "clip-path-url-['#clipped-swiper-serv-2']" : ''); ?> gray-overlay w-full h-full bg-[#101010] absolute top-0 left-0 opacity-[70%] z-[1]">
                    <!-- wp:paragraph -->
                    <p class="hidden">black overlay</p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                  <!-- wp:image -->
                  <figure class="wp-block-image services-img <?php echo ($counter == 1) ? "clip-path-url-['#clipped-swiper-serv-1']" : (($counter == $post_query->post_count) ? "clip-path-url-['#clipped-swiper-serv-2']" : ''); ?>  h-full">
                    <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                  </figure>
                  <!-- /wp:image -->
                </div>
                <!-- /wp:group -->
                <!-- wp:image -->
                <figure class="wp-block-image services-img <?php echo ($counter == 1) ? "clip-path-url-['#clipped-swiper-serv-1']" : (($counter == $post_query->post_count) ? "clip-path-url-['#clipped-swiper-serv-2']" : ''); ?>  h-full">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:paragraph -->
                <p>
                  <svg width="0" height="0">
                    <defs>
                      <?php
                      if ($counter == 1) {
                        echo '
                            <clipPath id="clipped-swiper-serv-1" class="scale-[0.84] desktop:scale-[1.2]">
                              <path d="M0 88.2843C0 82.9799 2.10714 77.8929 5.85786 74.1421L74.1421 5.85786C77.8929 2.10713 82.9799 0 88.2843 0H334C345.046 0 354 8.95431 354 20V430C354 441.046 345.046 450 334 450H0V88.2843Z"/>
                            </clipPath>
                              ';
                      } elseif ($counter == $post_query->post_count) {
                        echo '
                            <clipPath id="clipped-swiper-serv-2" class="scale-[0.84] desktop:scale-[1] wide:scale-[1.2]">
                              <path d="M0 20C0 8.9543 8.95431 0 20 0H80H334C345.046 0 354 8.9543 354 20V361.716C354 367.02 351.893 372.107 348.142 375.858L279.858 444.142C276.107 447.893 271.02 450 265.716 450H0V20Z"/>
                            </clipPath>
                          ';
                      };
                      ?>
                    </defs>
                  </svg>
                </p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:group -->
              <div class="wp-block-group text-wrapper slide-title absolute desktop:bottom-[85px] bottom-[100px] left-[25px] group-hover:translate-y-[-80px] transition ease-out duration-500 z-[3]">
                <!-- wp:paragraph -->
                <p class="mr-[20px] text-[25px] font-semibold mb-[15px] underline-offset-[7px] group-hover:underline group-hover:decoration-primaryYellow transition ease-out duration-500"><?php the_title(); ?></p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:buttons -->
              <div class="wp-block-buttons btn-swiper-more group text-[14px] uppercase absolute desktop:bottom-[25px] bottom-[55px] left-[25px] cursor-pointer transition ease-out duration-300 z-[3]">
                <!-- wp:paragraph -->
                <p>Dowiedz się więcej
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none " class="inline-block ml-[10px] ">
                    <rect x="1" y="1" width="34" height="34" rx="18" stroke="#D5D5D5" stroke-width="2" fill="transparent" class="transition ease-out duration-300 group-hover:fill-[#FEC400] group-hover:stroke-[#FEC400]" />
                    <path d="M19 22L23 18.0108L19.0217 14" stroke="white" />
                    <path d="M12 18L20 18" stroke="white" />
                  </svg>
                </p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:buttons -->

              <!-- wp:group -->
              <div class="wp-block-group hover-text mt-[370px] wide:mt-[350px] opacity-[0%] group-hover:opacity-[100%] group-hover:mt-[120px] desktop:group-hover:mt-[200px] wide:group-hover:mt-[270px] transition-all ease-out duration-500 text-[15px] font-light z-[2]">
                <!-- wp:paragraph -->
                <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
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