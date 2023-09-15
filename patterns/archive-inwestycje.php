<?php

/**
 * Title: archive-inwestycje
 * Slug: archive-inwestycje
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje-archive" class="wp-block-group inwestycje-archive relative">
  <!-- wp:group -->
  <div class="wp-block-group title-wrapper bg-[#f6f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] py-[20px] desktop:flex items-center">
      <!-- wp:group -->
      <div class="wp-block-group left-col desktop:w-[70%]">
        <!-- wp:paragraph -->
        <p class="container mx-auto desktop:px-0 px-[20px] mb-[40px] text-[36px] desktop:text-[60px] text-[#2e384c] font-bold leading-[44px]">Wszystkie inwestycje archive-inwestycje</p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list container mx-auto desktop:px-0 px-[20px] pb-[50px] flex flex-wrap items-center gap-[20px] text-[18px] font-medium">
          <?php
          $args = array(
            'taxonomy' => 'category',
            'orderby' => 'name',
            'paged' => 1,
            'order'   => 'ASC'
          );
          $currentCategory = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 39, 20));
          // echo $currentCategory . '<-current';
          $cats = get_categories($args); ?>
          <!-- wp:list-item -->
          <li class="allTabBtn text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
            <a href="<?php echo get_home_url() . '/inwestycje'; ?>" class="">Wszystkie</a>
          </li>
          <!-- /wp:list-item -->
          <?php
          foreach ($cats as $cat) {
            $catNoSpaces = str_replace(' ', '-', strtolower($cat->name));
            // echo $catNoSpaces;
          ?>
            <!-- wp:list-item -->
            <li class="CityTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer <?php echo ($currentCategory == $catNoSpaces) ? 'tab-active' : ''; ?>"><a href="<?php echo get_category_link($cat->term_id) ?>" class=""><?php echo $cat->name; ?></a></li>
            <!-- /wp:list-item -->
          <?php }; ?>
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group right-col desktop:w-[30%]">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-[#8a8f99]">4 inwestycje / 169 lokali 2fdsfds</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group inwestycje-posts container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:list -->
    <ul class="wp-block-list mb-[40px]">
      <?php
      $args = array(
        'post_type' => 'mieszkania',
        'posts_per_page' => 10,
        'order' => 'ASC',
        'taxonomy_name' => 'osiedla'
      );
      $post_query = new WP_Query($args);
      $counter = 0;
      $i = 0;
      $taxonomies = get_terms(array(
        'taxonomy' => 'osiedla',
        'hide_empty' => false,
      ));
      $term = get_term(10, 'osiedla');
      $terms = get_terms('osiedla');


      if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
          $counter++;

          echo 'get_term: <br>';
          print_r(get_term(10, 'osiedla'));
          echo '<br>';

          echo 'term: <br>';
          print_r($term);
          echo '<br>';
          echo 'terms:<br>';

          print_r($terms);
          echo '<br>';
          echo 'the_taxonomies<br>';
          echo the_taxonomies(68);
          echo '<br>';
          echo 'the_taxonomies<br>';
          echo the_taxonomies(2);

      ?>
          <!-- wp:list-item -->
          <li class="invest-tile max-w-full desktop:h-[450px] mb-[80px]">
            <a href="<?php the_permalink(); ?>" class="relative group p-[25px] desktop:max-w-full max-w-[310px] h-full" data-aos="fade-up" data-aos-duration="300" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper w-full h-full desktop:flex <?php echo (!($counter % 2)) ? 'flex-row-reverse' : ''; ?> gap-[50px]">
                <!-- wp:image -->
                <figure class="wp-block-image desktop:w-[50%] h-[330px] desktop:h-full mb-[30px]">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:group -->
                <div class="wp-block-group content desktop:w-[50%] flex flex-col items-start justify-center">
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

                  <!-- wp:group -->
                  <div class="wp-block-group group btn-read-more mt-[30px] relative bg-[#3d4b66] text-[18px] text-white font-bold w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
                    <!-- wp:paragraph -->
                    <p class="z-[1]">Poznaj inwestycję &rarr;</p>
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