<?php

/**
 * Title: page-blog-posts
 * Slug: page-blog-posts
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="blog-post" class="wp-block-group blog-post relative">
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
  <div class="wp-block-group title-wrapper py-[20px] desktop:py-[48px] bg-[#f6f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
      <!-- wp:group -->
      <div class="wp-block-group">
        <!-- wp:paragraph -->
        <p class="container mx-auto desktop:px-0 px-[20px] mb-[40px] text-[36px] desktop:text-[60px] text-[#2e384c] font-bold">Aktualności</p>
        <!-- /wp:paragraph -->



        <!-- wp:list -->
        <ul class="wp-block-list taxonomies container mx-auto desktop:px-0 px-[20px] pb-[50px] flex flex-wrap items-center gap-[20px] text-[18px] font-medium">
          <?php
          $taxonomies = get_terms(array(
            'taxonomy' => 'osiedla',
            'hide_empty' => false,
          ));
          print_r($taxonomies);
          ?>

          <!-- wp:list-item -->
          <li class="allTabBtn tab-active text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
            <a href="<?php echo get_home_url() . '/blog'; ?>" class="">Wszystkie</a>
          </li>
          <!-- /wp:list-item -->

          <?php
          foreach ($taxonomies as $taxonomy) {
            // $catNoSpaces = str_replace(' ', '-', strtolower($cat->name)); 
          ?>
            <!-- wp:list-item -->
            <li class="text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer"><a href="<?php echo get_category_link($taxonomy->term_id) ?>" class=""><?php echo $taxonomy->name; ?></a></li>
            <!-- /wp:list-item -->
          <?php }; ?>
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group hidden blog-posts container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:list -->
    <ul class="wp-block-list mb-[40px]">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
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
          <li class="invest-tile max-w-full desktop:h-[450px] mb-[80px]">
            <a href="<?php the_permalink(); ?>" class="relative group p-[25px] desktop:max-w-full max-w-[310px] h-full" data-aos="fade-up" data-aos-duration="300" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper w-full h-full desktop:flex gap-[50px]">
                <!-- wp:image -->
                <figure class="wp-block-image desktop:w-[50%] h-[330px] desktop:h-full mb-[30px]">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:group -->
                <div class="wp-block-group content desktop:w-[50%] flex flex-col items-start justify-center">
                  <!-- wp:paragraph -->
                  <p class="mr-[20px] text-[24px] desktop:text-[36px] font-bold leading-[34px] desktop:leading-[46px]"><?php the_title(); ?></p>
                  <!-- /wp:paragraph -->

                  <!-- wp:list -->
                  <ul class="wp-block-list city-categories my-[20px] flex flex-wrap gap-[10px]">
                    <?php
                    $categoriesArray = get_the_category();
                    foreach ($categoriesArray as $category) {
                      $category_link = get_category_link($category->term_id); ?>
                      <!-- wp:list-item -->
                      <li class="mb-[15px] text-[18px] text-bgDarkGray">
                        <!-- wp:paragraph -->
                        <p><?php echo $category->name; ?></p>
                        <!-- /wp:paragraph -->
                        <!-- wp:paragraph -->
                        <a href="<?php the_permalink(); ?>" class="relative text-[18px] desktop:text-[22px] inline before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[50%] hover:before:min-h-[100%] before:bg-[#b3f1ff] before:transition-height before:duration-300 before:ease before:z-[-1] cursor-pointer">Zobacz więcej &rarr;</a>
                        <!-- /wp:paragraph -->
                      </li>
                      <!-- /wp:list-item -->
                    <?php }; ?>
                  </ul>
                  <!-- /wp:list -->
                </div>
                <!-- /wp:group -->
              </div>
              <!-- /wp:group -->
            </a>
          </li>
          <!-- /wp:list-item -->
      <?php
          $i++;
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