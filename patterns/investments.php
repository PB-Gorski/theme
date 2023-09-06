<?php

/**
 * Title: investments
 * Slug: investments
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje" class="wp-block-group investments mb-[150px] relative">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group pt-[60px] pb-[30px] desktop:pb-[40px] title">
      <!-- wp:paragraph -->
      <p class="text-[24px] desktop:ml-[100px] text-bgDarkGray">Poznaj nasze najnowsze inwestycje</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:list -->
    <ul class="wp-block-list mb-[40px] flex desktop:flex-row flex-col justify-between gap-[20px]">
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
          <li class="invest-tile max-w-full">
            <a href="<?php the_permalink(); ?>" class="relative group p-[25px] desktop:max-w-full max-w-[310px]" data-aos="fade-up" data-aos-duration="300" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper">
                <!-- wp:image -->
                <figure class="wp-block-image w-fulll h-[330px] mb-[30px]">
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

    <!-- wp:group -->
    <div class="wp-block-group absolute bottom-[-70px] left-[50%] translate-x-[-50%]">
      <!-- wp:group -->
      <div class="wp-block-group btn-find-more relative bg-[#3d4b66] text-white w-[315px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="font-bold z-[1]">Zobacz wszystkie inwestycje</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->