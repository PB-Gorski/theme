<?php

/**
 * Title: taxonomy-osiedla
 * Slug: taxonomy-osiedla
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Wpis" class="wp-block-group taxonomy-osiedla mb-[150px] ooverflow-hidden">
  <!-- wp:group -->
  <div class="wp-block-group desktop:pt-[60px]">
    <!-- wp:group -->
    <div class="wp-block-group title-wrapper bg-[#f6f7fa]">
      <!-- wp:group -->
      <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
        <!-- wp:paragraph -->
        <a href="/aktualnosci/" class="group desktop:mt-[60px] mb-[20px] desktop:mb-[40px] w-fit font-semibold flex items-center gap-[8px]">
          <!-- wp:group -->
          <div class="wp-block-group group w-[56px] h-[56px]">
            <!-- wp:paragraph -->
            <p>
              <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none" class="rotate-180 scale-[0.65] fill-transparent group-hover:fill-[#FEC400]">
                <rect x="1.5" y="1.5" width="53" height="53" rx="26.5" stroke="#AAAAAA" stroke-width="3" class="group-hover:fill-[#FEC400] group-hover:stroke-primaryYellow transition-stroke ease-out duration-500" />
                <path d="M28 35L35 28.0189L28.0379 21" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
                <path d="M20 28L31 28" stroke="black" stroke-width="1.5" class="group-hover:stroke-black transition-stroke ease-out duration-500" />
              </svg>
            </p>
            <!-- /wp:paragraph -->
          </div>
          <!-- /wp:group -->
          <!-- wp:paragraph -->
          <p class="text-[14px]">Wróć do aktualności</p>
          <!-- /wp:paragraph -->
        </a>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph -->
        <p>taxonomy-osiedla</p>
        <!-- /wp:paragraph -->

        <!-- wp:group -->
        <div class="wp-block-group">
          <!-- wp:paragraph -->
          <p class="container mx-auto desktop:px-0 px-[20px] mb-[40px] text-[60px] text-[#2e384c] font-bold">Aktualności</p>
          <!-- /wp:paragraph -->

          <!-- wp:list -->
          <ul class="wp-block-list container mx-auto desktop:px-0 px-[20px] pb-[50px] flex items-center gap-[20px] text-[18px] font-medium">
            <?php
            $taxonomies = get_terms(array(
              'taxonomy' => 'osiedla',
              'hide_empty' => false,
            ));
            // print_r($post_tag);
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
              <li class="CityTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer"><a href="<?php echo get_category_link($taxonomy->term_id) ?>" class=""><?php echo $taxonomy->name; ?></a></li>
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
    <div class="wp-block-group blog-posts-by-taxonomies container mx-auto desktop:px-0 px-[20px]">
      <!-- wp:list -->
      <ul class="wp-block-list mb-[40px]">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'order' => 'ASC',
          'taxonomy_name' => 'browar-gdanski'
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
            <li class="invest-tile max-w-full h-[450px] mb-[80px]">
              <a href="<?php the_permalink(); ?>" class="relative group p-[25px] desktop:max-w-full max-w-[310px] h-full" data-aos="fade-up" data-aos-duration="300" data-aos-offset="30">
                <!-- wp:group -->
                <div class="wp-block-group wrapper w-full h-full flex gap-[50px]">
                  <!-- wp:image -->
                  <figure class="wp-block-image w-[50%] h-[330px] desktop:h-full mb-[30px]">
                    <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                  </figure>
                  <!-- /wp:image -->

                  <!-- wp:group -->
                  <div class="wp-block-group content w-[50%] flex flex-col items-start justify-center">
                    <!-- wp:paragraph -->
                    <p class="mr-[20px] text-[30px] desktop:text-[36px] font-bold leading-[46px]"><?php the_title(); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:list -->
                    <ul class="wp-block-list city-categories my-[20px] flex flex-wrap gap-[10px]">
                      <?php
                      $categoriesArray = get_the_category();
                      foreach ($categoriesArray as $category) {
                        $category_link = get_category_link($category->term_id); ?>
                        <!-- wp:list-item -->
                        <li class="mb-[15px] text-[18px] text-bgDarkGray"><?php echo $category->name; ?></li>
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
          wp_reset_query();
          wp_reset_postdata();
        };
        wp_reset_query();
        wp_reset_postdata();
        ?>
      </ul>
      <!-- /wp:list -->
    </div>
    <!-- /wp:group -->


  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->