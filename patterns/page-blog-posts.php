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
  <div class="wp-block-group title-wrapper bg-[#f6f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] flex items-center">
      <!-- wp:group -->
      <div class="wp-block-group left-col w-[70%]">
        <!-- wp:paragraph -->
        <p class="container mx-auto desktop:px-0 px-[20px] mb-[40px] text-[60px] text-[#2e384c] font-bold">Aktualności</p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list container mx-auto desktop:px-0 px-[20px] pb-[50px] fflex items-center gap-[20px] text-[18px] font-medium">
          <?php
          $args = array(
            'taxonomy' => 'tag',
            'orderby' => 'name',
            'paged' => 1,
            'order'   => 'ASC'
          );
          $args2 = array(
            'taxonomy' => 'location',
          );
          // $cats = get_categories($args);
          $cats = get_categories($args);

          ?>

          <?php
          $args2 = array(
            'public'   => true,
            '_builtin' => false

          );
          $output = 'names'; // or objects
          $operator = 'and'; // 'and' or 'or'
          $taxonomies2 = get_taxonomies($args2, $output, $operator);
          print_r($taxonomies2);
          if ($taxonomies2) {
            echo '<ul class="args2">';
            foreach ($taxonomies2  as $taxonomy) {
              echo '<li>' . $taxonomy . '</li>';
            }
            echo '</ul>';
          }
          ?>


          <?php
          $args3 = array(
            'name' => 'locations'
          );
          $output = 'objects'; // or names
          $taxonomies3 = get_taxonomies($args3, $output);
          if ($taxonomies3) {
            foreach ($taxonomies3 as $taxonomy) {
              echo '<div class="args3">' . $taxonomy->labels->name . '</div>';
            }
          }
          ?>
          <?php
          $taxonomies4 = get_taxonomies();
          if (!empty($taxonomies4)) : ?>
            <ul>
              <?php
              foreach ($taxonomies4 as $taxonomy) {
                echo '<li class="args4">' . $taxonomy . '</li>';
              }
              ?>
            </ul>
          <?php endif; ?>

          <?php
          // We want to find the Taxonomy to this slug.
          global $term_object;
          $term_slug = 'locations';
          $taxonomies5 = get_taxonomies();
          foreach ($taxonomies5 as $tax_type_key => $taxonomy) {
            // If term object is returned, break out of loop. (Returns false if there's no object)
            if ($term_object = get_term_by('locations', $term_slug, $taxonomy)) {
              break;
            }
          }
          //Get the taxonomy!!
          echo $term_object->taxonomy . '<br>';

          // You can also retrieve other thing of the term:
          echo $term_object->name . '<br>'; //term name
          echo $term_object->term_id . '<br>'; // term id
          echo $term_object->description . '<br>'; // term description

          // See all options by dumping the $term_object:
          var_dump($term_object);


          ?>

          <!-- wp:list-item -->
          <li class="allTabBtn tab-active text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
            <a href="<?php echo get_home_url() . '/blog'; ?>" class="">Wszystkie</a>
          </li>
          <!-- /wp:list-item -->
          <?php
          foreach ($cats as $cat) {
            $catNoSpaces = str_replace(' ', '-', strtolower($cat->name)); ?>
            <!-- wp:list-item -->
            <li class="CityTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer"><a href="<?php echo get_category_link($cat->term_id) ?>" class=""><?php echo $cat->name; ?></a></li>
            <!-- /wp:list-item -->
          <?php }; ?>
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group right-col w-[30%]">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-[#8a8f99]">empty</p>
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
                  <p class="mr-[20px] text-[30px] desktop:text-[40px] font-bold"><?php the_title(); ?></p>
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