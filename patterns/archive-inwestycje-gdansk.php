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
        <?php
        $query = new WP_Query(array(
          'miasto' => 'gdansk',
          'post_status' => 'publish'
        ));
        $queryTax = new WP_Tax_Query(array(
          // 'taxonomy' => 'inwestycje',
          'post_status' => 'publish'
        ));
        $count = $query->found_posts;
        ?>
        <!-- wp:paragraph -->
        <p class="text-[30px] text-[#8a8f99]"><?php echo wp_count_terms('inwestycja'); ?> inwestycje / <?php echo $count - 1; ?> lokali</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group inwestycje-gdansk container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group inwestycje-posts container mx-auto desktop:px-0 px-[20px]">
      <!-- wp:list -->
      <ul class="wp-block-list mb-[40px]">
        <?php
        // $args = array(
        //   'post_type' => 'mieszkania',
        //   'posts_per_page' => 10,
        //   'order' => 'ASC',
        //   'taxonomy_name' => 'miasto',
        // 'tax_query' => array(
        //   'relation' => 'AND',
        //   array(
        //     'taxonomy' => 'inwestycja',
        //     'field'    => 'slug',
        //   ),
        //   array(
        //     'taxonomy' => 'miasto',
        //     'field'    => 'slug',
        //     'terms'    => 'gdynia',
        //     // 'operator' => 'NOT IN',
        //   ),
        // ),
        // );
        // $post_query = new WP_Query($args);

        // $counter = 0;
        // $i = 0;
        // $taxonomies = get_terms(array(
        //   'taxonomy' => 'inwestycja',
        //   'hide_empty' => false,
        // ));
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



        // dziala:
        $counter = 0;
        $i = 0;

        $taxonomies = get_terms(array(
          'taxonomy' => 'inwestycja',
          'hide_empty' => false,
        ));

        $productcat_id = get_queried_object_id();
        $args2 = array(
          'numberposts' => -1,
          'post_type' => array('mieszkania'),
          'tax_query' => array(
            array(
              'taxonomy' => 'miasto',
              'field'    => 'slug',
              'terms'    => 'gdansk',
            ),
          ),
        );

        $cat_posts  = get_posts($args2);
        $my_post_ids = wp_list_pluck($cat_posts, 'ID');
        $my_terms    = wp_get_object_terms($my_post_ids, 'inwestycja');

        if (!empty($my_terms)) :
          echo '<ul class="test2">';
          foreach ($my_terms as $my_term) :

            $brand_name = $my_term->name;
            $brand_link = get_term_link($my_term);

            echo '<li><a alt="' . $brand_name . '" href="' . esc_url($brand_link) . '">' . $brand_name . '</a></li>';


            //     foreach ($taxonomies as $tax) {
            //       $counter++;
            //       $currentTermCount = (get_term($tax, 'inwestycja'))->count;
            //       $taxNoSpaces = str_replace(' ', '-', strtolower($tax->name));
            //       $taxNoSpaces2 = str_replace('.', '', strtolower($taxNoSpaces));

            //       echo $currentTermCount;
            // 
        ?>

            // <?php
                //     };

                // foreach ($taxonomies as $tax) {
                $counter++;
                $currentTermCount = (get_term($taxonomies[$i], 'inwestycja'))->count;
                $taxNoSpaces = str_replace(' ', '-', strtolower($taxonomies[$i]->name));
                $taxNoSpaces2 = str_replace('.', '', strtolower($taxNoSpaces));

                echo $currentTermCount;
                ?>

            <?php
            // };

            ?>
            <!-- wp:list-item -->
            <li class="invest-tile current max-w-full test desktop:h-[450px] mb-[80px]">
              <a href="<?php echo home_url() . '/o-inwestycji' . ''; ?>" class="relative group inline-block cursor-default desktop:max-w-full w-full h-full" data-aos="fade-up" data-aos-offset="30">
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
                    <p class="mr-[20px] text-[30px] desktop:text-[40px] font-bold"><?php echo $brand_name; ?></p>
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
            $counter++;
            $i++;

          endforeach;
          echo '</ul>';
        endif;


        ?>
      </ul>
      <!-- /wp:list -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->