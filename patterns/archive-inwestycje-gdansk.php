<?php

/**
 * Title: archive-inwestycje-gdansk
 * Slug: archive-inwestycje-gdansk
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje-archive" class="wp-block-group inwestycje-archive relative">
  <!-- wp:group -->
  <div class="wp-block-group title-wrapper mb-[40px] bg-[#f6f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] py-[20px] desktop:flex items-center">
      <!-- wp:group -->
      <div class="wp-block-group left-col desktop:w-[70%]">
        <!-- wp:paragraph -->
        <p class="container mx-auto desktop:px-0 px-[20px] my-[40px] text-[36px] desktop:text-[60px] text-[#2e384c] font-bold leading-[44px]">Gdańsk - Inwestycje</p>
        <!-- /wp:paragraph -->

        <!-- wp:list -->
        <ul class="wp-block-list container mx-auto desktop:px-0 px-[20px] pb-[50px] flex flex-wrap items-center gap-[20px] text-[18px] font-medium">
          <?php
          $args = array(
            'taxonomy' => 'miasto',
            'orderby' => 'name',
            'paged' => 1,
            'order'   => 'ASC'
          );
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
        <p class="text-[30px] text-[#8a8f99]"><?php echo wp_count_terms('inwestycja'); ?> inwestycje / <?php echo wp_count_posts('mieszkania')->publish; ?> lokali</p>
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
        'taxonomy_name' => 'inwestycja'
      );
      $post_query = new WP_Query($args);
      $counter = 0;
      $i = 0;
      $taxonomies = get_terms(array(
        'taxonomy' => 'inwestycja',
        'hide_empty' => false,
      ));

      // $term = get_term(10, 'inwestycja');
      // $terms = get_terms('inwestycja');

      // echo '<br>';
      // echo 'taxonomies print r:<br>';
      // print_r($taxonomies);
      // echo '<br>';
      // echo 'the taxonomies print r:<br>';
      // print_r(the_taxonomies());

      // echo '<br>';
      // echo 'foreach:<br>';

      foreach ($taxonomies as $tax) {
        $counter++;
        $currentTermCount = (get_term($tax, 'inwestycja'))->count;
        $taxNoSpaces = str_replace(' ', '-', strtolower($tax->name));
        $taxNoSpaces2 = str_replace('.', '', strtolower($taxNoSpaces));

        $taxonomiesCity = get_terms(array(
          'taxonomy' => 'miasto',
          'hide_empty' => false,
        ));
        echo $i;
        print_r($taxonomiesCity[$i]);

        $test = get_term('gdynia', 'miasto');
        print_r($test);



        // echo $tax->name;
      ?>
        <!-- wp:list-item -->
        <li class="invest-tile max-w-full test desktop:h-[450px] mb-[80px]">
          <div class="relative group desktop:max-w-full max-w-[310px] h-full">
            <!-- wp:group -->
            <div class="wp-block-group wrapper w-full h-full desktop:flex <?php echo (!($counter % 2)) ? 'flex-row-reverse' : ''; ?> gap-[50px]">
              <!-- wp:image -->
              <figure class="wp-block-image desktop:w-[50%] h-[330px] desktop:h-full mb-[30px] lowercase">
                <img src="<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/page-inwestycje/' . $taxNoSpaces2 . '.jpeg'; ?>" alt="inwestycje-img">
              </figure>
              <!-- /wp:image -->

              <!-- wp:group -->
              <div class="wp-block-group content desktop:w-[50%] flex flex-col items-start justify-center gap-[15px]">
                <!-- wp:paragraph -->
                <p class="mr-[20px] text-[30px] desktop:text-[40px] font-bold"><?php echo $tax->name; ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group -->
                <div class="wp-block-group flex">
                  <!-- wp:group -->
                  <div class="wp-block-group available-apartments pr-[35px] flex items-center gap-[25px] border-r-[1px] border-[#ebecee]">
                    <!-- wp:paragraph -->
                    <p class="text-[48px] text-primaryRed font-bold"><?php echo $currentTermCount; ?></p>
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
                  <div class="wp-block-group apartments-price pl-[35px] flex justify-center items-center flex-col">
                    <!-- wp:paragraph -->
                    <p class="mb-[4px] uppercase text-[#8a8f99] text-[11px] tracking-[1px]">CENA JUŻ OD</p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph -->
                    <p class="text-[24px] font-bold">8000 zł/m<sup>2</sup></p>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:group -->
                <div class="wp-block-group group btn-read-more mt-[10px] relative bg-[#3d4b66] text-[18px] text-white font-bold w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
                  <!-- wp:paragraph -->
                  <a href="<?php echo home_url() . '/o-inwestycji' . ''; ?>" class="z-[1]">Poznaj inwestycję &rarr;</a>
                  <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
          </div>
        </li>
        <!-- /wp:list-item -->
        <?php
        $i++;
      };


      if (!$post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
          $counter++;

          // echo 'get_term: <br>';
          // print_r(get_term(10, 'osiedla'));
          // echo '<br>';

          // echo 'term: <br>';
          // print_r($term);
          // echo '<br>';
          // echo 'terms:<br>';

          // print_r($terms);
          // echo '<br>';

          // echo '<br>';
          // echo 'the taxonomies print r:<br>';
          // print_r(the_taxonomies());
          // echo 'the_taxonomies<br>';
          // echo the_taxonomies(68);
          // echo '<br>';
          // echo 'the_taxonomies<br>';
          // echo the_taxonomies(array(
          //   'name' => 'test01',
          // ));

          // echo '<br>';
          // echo 'tersms list:<br>';
          // echo '<br>';

          // print_r(get_the_term_list($post_query->ID, 'inwestycja', '', ', ', ''));
          // echo $post_query->post_count;

        ?>
          <!-- wp:list-item -->
          <li class="hidden invest-tile max-w-full test desktop:h-[450px] mb-[80px]">
            <div class="relative group p-[25px] desktop:max-w-full max-w-[310px] h-full">
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
                  <p class="mr-[20px] text-[30px] desktop:text-[40px] font-bold"><?php echo get_the_term_list($post_query->ID, 'inwestycja'); ?></p>
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
                    <p class="text-[48px] text-primaryRed font-bold">0</p>
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
            </div>
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