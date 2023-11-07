<?php
/*
 * Title: header-white
 * Slug: header-white
 * Categories: header
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Menu-desktop" class="wp-block-group nav-desktop header-white relative hidden desktop:block">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto h-[100px] flex items-center">
    <!-- wp:group -->
    <div class="wp-block-group logo mr-[40px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url(); ?>">
        <!-- wp:image -->
        <figure class="wp-block-image w-[115px]">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/frontpage/logo.png" alt="pb-gorski-logo" />
        </figure>
        <!-- /wp:image -->
      </a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group nav-wrapper w-full flex items-center justify-end gap-[20px]">

      <!-- wp:navigation /-->

      <!-- wp:group -->
      <div class="wp-block-group modal w-full h-[209px] py-[20px] bg-bgLightGray opacity-0 absolute top-[100px] left-0 z-[-1] transition ease duration-300">
        <!-- wp:group -->
        <div class="wp-block-group container mx-auto">
          <!-- wp:list -->
          <ul class="wp-block-list list-taxonomy-miasta mb-[20px] flex items-center gap-[20px] text-[14px] font-medium">
            <?php
            $args = array(
              'taxonomy' => 'miasto',
              'orderby' => 'name',
              'paged' => 1,
              'order'   => 'ASC'
            );
            $currentCategory = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 39, 20));
            $cats = get_categories($args); ?>
            <!-- wp:list-item -->
            <li class="tabBtn allTabBtn tab-active uppercase text-[#8A8F99] font-semibold hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
              <p class="inline-block" data-aos="fade-right" data-aos-offset="30">Wszystkie</p>
            </li>
            <!-- /wp:list-item -->
            <?php
            foreach ($cats as $cat) {
              $catNoSpaces = str_replace(' ', '-', strtolower($cat->name));
            ?>
              <!-- wp:list-item -->
              <li class="tabBtn uppercase text-[#8A8F99] font-semibold hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
                <p class="inline-block" data-aos="fade-right" data-aos-offset="30"><?php echo $cat->name; ?></p>
              </li>
              <!-- /wp:list-item -->
            <?php }; ?>
            <!-- wp:list-item -->
            <li class="w-[1px] h-[32px] bg-[#8A8F99] opacity-[30%]">
              <p class="hidden">separator</p>
            </li>
            <!-- /wp:list-item -->
            <!-- wp:list-item -->
            <li class="uppercase text-[#8A8F99] font-semibold hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
              <a href="<?php echo home_url(); ?>/inwestycje-zrealizowane">INWESTYCJE ZREALIZAOWANE</a>
            </li>
            <!-- /wp:list-item -->
          </ul>
          <!-- /wp:list -->

          <!-- wp:group -->
          <div class="wp-block-group headerTab tab1 allTabBtn block text-[17px] flex">
            <!-- wp:group -->
            <div class="wp-block-group col1 w-[60%] border-r-[1px] border-[rgba(138,143,153,0.30)]">
              <!-- wp:group -->
              <div class="wp-block-group title1 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Lista inwestycji</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray flex flex-wrap gap-x-[140px] gap-y-[10px]">
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
                foreach ($taxonomies as $tax) {
                  $counter++;
                  $currentTermCount = (get_term($tax, 'inwestycja'))->count;
                  $taxNoSpaces = str_replace(' ', '-', strtolower($tax->name));
                  $taxNoSpaces2 = str_replace('.', '', strtolower($taxNoSpaces));

                  $alias = $taxNoSpaces2;
                  $alias = strtolower($alias);
                  $alias = str_replace(' ', '-', $alias);
                  $alias = preg_replace('/[^0-9a-ąćęłńóśźżś\-]+/', '', $alias);

                  $alias = preg_replace('/[\-]+/', '-', $alias);
                  $alias = trim($alias, '-');
                  $alias = str_replace(array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ź', 'ż', 'Ś'), array('a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z', 's'), $alias);
                  $alias = str_replace(array(',', ':', ';', ' '), array('', '', '', '-'), $alias);
                  $alias = strtr($alias, ' ', '-');
                ?>
                  <!-- wp:list-item -->
                  <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                    <!-- wp:paragraph -->
                    <p class=""><a href="<?php echo home_url() . '/o-inwestycji-' . $alias; ?>" class="inline-block hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38]"><?php echo $tax->name; ?></a></p>
                    <!-- /wp:paragraph -->
                  </li>
                  <!-- /wp:list-item -->
                <?php
                  $i++;
                }; ?>
              </ul>
              <!-- /wp:list -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group col2 w-[40%] pl-[20px]">
              <!-- wp:group -->
              <div class="wp-block-group title2 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Wyszukiwanie</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray font-bold">
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-[7px] hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="<?php echo home_url() . '/mieszkania' ?>">Lista mieszkań &rarr;</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="<?php echo home_url() . '/lokale' ?>">Lista lokali użytkowych &rarr;</a>
                </li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->

            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->

          <!-- wp:group -->
          <div class="wp-block-group headerTab tab2 gdansk hidden text-[17px] flex">
            <!-- wp:group -->
            <div class="wp-block-group col1 w-[60%]">
              <!-- wp:group -->
              <div class="wp-block-group title1 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Lista inwestycji</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list mb-[20px] text-textGray flex flex-wrap gap-x-[120px]">
                <?php
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
                ?>

                <?php
                $counter = 1;
                $i = 1;
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
                if (!empty($my_terms)) :
                  foreach ($my_terms as $my_term) :
                    $taxInwestycjeName = $my_term->name;
                    $currentTermCount = (get_term($taxonomies[$i], 'inwestycja'))->count;
                    $taxNoSpaces = str_replace(' ', '-', strtolower($taxonomies[$i]->name));
                    $taxNoSpaces2 = str_replace('.', '', strtolower($taxNoSpaces));
                ?>

                    <!-- wp:list-item -->
                    <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                      <a href="#"><?php echo $taxInwestycjeName; ?></a>
                    </li>
                    <!-- /wp:list-item -->
                <?php
                    $counter++;
                    $i++;
                  endforeach;
                endif; ?>
              </ul>
              <!-- /wp:list -->
              <!-- wp:group -->
              <div class="wp-block-group">
                <!-- wp:paragraph -->
                <a href="#" class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">Gdański: <span class="font-medium">Wszystkie inwestycje &rarr;</span></a>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group col2 w-[40%]">
              <!-- wp:group -->
              <div class="wp-block-group title2 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Wyszukiwanie2</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray font-bold">
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista mieszkań &rarr;</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista lokali uytkowych &rarr;</a>
                </li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->

            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
          <!-- wp:group -->
          <div class="wp-block-group headerTab tab3 hidden text-[17px] flex">
            <!-- wp:group -->
            <div class="wp-block-group col1 w-[60%]">
              <!-- wp:group -->
              <div class="wp-block-group title1 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Lista inwestycji3</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray flex flex-wrap gap-x-[120px]">
                <?php
                $args2 = array(
                  'numberposts' => -1,
                  'post_type' => array('mieszkania'),
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'miasto',
                      'field'    => 'slug',
                      'terms'    => 'gdynia',
                    ),
                  ),
                );
                $cat_posts  = get_posts($args2);
                $my_post_ids = wp_list_pluck($cat_posts, 'ID');
                $my_terms    = wp_get_object_terms($my_post_ids, 'inwestycja');
                ?>

                <?php
                $counter = 1;
                $i = 1;
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
                      'terms'    => 'gdynia',
                    ),
                  ),
                );
                if (!empty($my_terms)) :
                  foreach ($my_terms as $my_term) :
                    $taxInwestycjeName = $my_term->name;
                    $currentTermCount = (get_term($taxonomies[$i], 'inwestycja'))->count;
                    $taxNoSpaces = str_replace(' ', '-', strtolower($taxonomies[$i]->name));
                    $taxNoSpaces2 = str_replace('.', '', strtolower($taxNoSpaces));
                ?>

                    <!-- wp:list-item -->
                    <li class="hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                      <a href="#"><?php echo $taxInwestycjeName; ?></a>
                    </li>
                    <!-- /wp:list-item -->
                <?php
                    $counter++;
                    $i++;
                  endforeach;
                endif; ?>
              </ul>
              <!-- /wp:list -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group -->
            <div class="wp-block-group col2 w-[40%]">
              <!-- wp:group -->
              <div class="wp-block-group title2 mb-[20px]">
                <!-- wp:paragraph -->
                <p class="uppercase text-[#8A8F99] text-[11px] font-medium tracking-[1.5px]">Wyszukiwanie2</p>
                <!-- /wp:paragraph -->
              </div>
              <!-- /wp:group -->

              <!-- wp:list -->
              <ul class="wp-block-list text-textGray font-bold">
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista mieszkań &rarr;</a>
                </li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li class="text-textGray mb-[10px] hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-[#e80d38] cursor-pointer">
                  <a href="#">Lista lokali uytkowych &rarr;</a>
                </li>
                <!-- /wp:list-item -->
              </ul>
              <!-- /wp:list -->

            </div>
            <!-- /wp:group -->
          </div>
          <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group btn-wrapper-header flex items-center gap-[10px]">
        <!-- wp:group -->
        <div class="wp-block-group group btn-find-more relative bg-transparent p-[15px] h-[48px] flex items-center justify-center border-[2px] border-textGray rounded-full cursor-pointer group mb-[20px] btn-download relative bg-[#f5f7fa] text-textGray w-full desktop:w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] hover:text-white before:bg-textGray before:transition-height before:duration-300 before:ease cursor-pointer">
          <!-- wp:paragraph -->
          <a href="<?php echo home_url() . '/mieszkania'; ?>" class="z-[1]">Znajdź mieszkanie</a>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group group btn-call-header relative bg-transparent text-primaryRed w-[48px] h-[48px] flex items-center justify-center border-[2px] border-primaryRed rounded-full cursor-pointer">
          <!-- wp:paragraph -->
          <a href="<?php echo home_url() . '/contact' ?>">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#b22944" height="28px" width="28px" version="1.1" id="Capa_1" viewBox="0 0 482.6 482.6" xml:space="preserve">
              <g>
                <path d="M98.339,320.8c47.6,56.9,104.9,101.7,170.3,133.4c24.9,11.8,58.2,25.8,95.3,28.2c2.3,0.1,4.5,0.2,6.8,0.2   c24.9,0,44.9-8.6,61.2-26.3c0.1-0.1,0.3-0.3,0.4-0.5c5.8-7,12.4-13.3,19.3-20c4.7-4.5,9.5-9.2,14.1-14   c21.3-22.2,21.3-50.4-0.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2c-12.8,0-25.1,5.6-35.6,16.1l-35.8,35.8   c-3.3-1.9-6.7-3.6-9.9-5.2c-4-2-7.7-3.9-11-6c-32.6-20.7-62.2-47.7-90.5-82.4c-14.3-18.1-23.9-33.3-30.6-48.8   c9.4-8.5,18.2-17.4,26.7-26.1c3-3.1,6.1-6.2,9.2-9.3c10.8-10.8,16.6-23.3,16.6-36s-5.7-25.2-16.6-36l-29.8-29.8   c-3.5-3.5-6.8-6.9-10.2-10.4c-6.6-6.8-13.5-13.8-20.3-20.1c-10.3-10.1-22.4-15.4-35.2-15.4c-12.7,0-24.9,5.3-35.6,15.5l-37.4,37.4   c-13.6,13.6-21.3,30.1-22.9,49.2c-1.9,23.9,2.5,49.3,13.9,80C32.739,229.6,59.139,273.7,98.339,320.8z M25.739,104.2   c1.2-13.3,6.3-24.4,15.9-34l37.2-37.2c5.8-5.6,12.2-8.5,18.4-8.5c6.1,0,12.3,2.9,18,8.7c6.7,6.2,13,12.7,19.8,19.6   c3.4,3.5,6.9,7,10.4,10.6l29.8,29.8c6.2,6.2,9.4,12.5,9.4,18.7s-3.2,12.5-9.4,18.7c-3.1,3.1-6.2,6.3-9.3,9.4   c-9.3,9.4-18,18.3-27.6,26.8c-0.2,0.2-0.3,0.3-0.5,0.5c-8.3,8.3-7,16.2-5,22.2c0.1,0.3,0.2,0.5,0.3,0.8   c7.7,18.5,18.4,36.1,35.1,57.1c30,37,61.6,65.7,96.4,87.8c4.3,2.8,8.9,5,13.2,7.2c4,2,7.7,3.9,11,6c0.4,0.2,0.7,0.4,1.1,0.6   c3.3,1.7,6.5,2.5,9.7,2.5c8,0,13.2-5.1,14.9-6.8l37.4-37.4c5.8-5.8,12.1-8.9,18.3-8.9c7.6,0,13.8,4.7,17.7,8.9l60.3,60.2   c12,12,11.9,25-0.3,37.7c-4.2,4.5-8.6,8.8-13.3,13.3c-7,6.8-14.3,13.8-20.9,21.7c-11.5,12.4-25.2,18.2-42.9,18.2   c-1.7,0-3.5-0.1-5.2-0.2c-32.8-2.1-63.3-14.9-86.2-25.8c-62.2-30.1-116.8-72.8-162.1-127c-37.3-44.9-62.4-86.7-79-131.5   C28.039,146.4,24.139,124.3,25.739,104.2z" />
              </g>
            </svg>
          </a>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"anchor":true} -->
<div id="Mobile" class="wp-block-group nav-mobile h-[80px] bg-white text-textGray block desktop:hidden container mx-auto px-[20px] transition ease-out duration-300">
  <!-- wp:group -->
  <div class="wp-block-group h-full flex justify-between items-center relative z-[4]">
    <!-- wp:group -->
    <div class="wp-block-group logo-mobile mr-[80px] z-[0] relative transition ease duration-300">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url(); ?>">
        <!-- wp:image -->
        <figure class="wp-block-image w-[115px]">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/frontpage/logo.png" alt="pb-gorski-logo" />
        </figure>
        <!-- /wp:image -->
      </a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group group btn-call-header relative bg-transparent text-primaryRed w-[48px] h-[48px] flex items-center justify-center border-[2px] border-primaryRed rounded-full cursor-pointer">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url() . '/contact' ?>">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#b22944" height="28px" width="28px" version="1.1" id="Capa_1" viewBox="0 0 482.6 482.6" xml:space="preserve">
          <g>
            <path d="M98.339,320.8c47.6,56.9,104.9,101.7,170.3,133.4c24.9,11.8,58.2,25.8,95.3,28.2c2.3,0.1,4.5,0.2,6.8,0.2   c24.9,0,44.9-8.6,61.2-26.3c0.1-0.1,0.3-0.3,0.4-0.5c5.8-7,12.4-13.3,19.3-20c4.7-4.5,9.5-9.2,14.1-14   c21.3-22.2,21.3-50.4-0.2-71.9l-60.1-60.1c-10.2-10.6-22.4-16.2-35.2-16.2c-12.8,0-25.1,5.6-35.6,16.1l-35.8,35.8   c-3.3-1.9-6.7-3.6-9.9-5.2c-4-2-7.7-3.9-11-6c-32.6-20.7-62.2-47.7-90.5-82.4c-14.3-18.1-23.9-33.3-30.6-48.8   c9.4-8.5,18.2-17.4,26.7-26.1c3-3.1,6.1-6.2,9.2-9.3c10.8-10.8,16.6-23.3,16.6-36s-5.7-25.2-16.6-36l-29.8-29.8   c-3.5-3.5-6.8-6.9-10.2-10.4c-6.6-6.8-13.5-13.8-20.3-20.1c-10.3-10.1-22.4-15.4-35.2-15.4c-12.7,0-24.9,5.3-35.6,15.5l-37.4,37.4   c-13.6,13.6-21.3,30.1-22.9,49.2c-1.9,23.9,2.5,49.3,13.9,80C32.739,229.6,59.139,273.7,98.339,320.8z M25.739,104.2   c1.2-13.3,6.3-24.4,15.9-34l37.2-37.2c5.8-5.6,12.2-8.5,18.4-8.5c6.1,0,12.3,2.9,18,8.7c6.7,6.2,13,12.7,19.8,19.6   c3.4,3.5,6.9,7,10.4,10.6l29.8,29.8c6.2,6.2,9.4,12.5,9.4,18.7s-3.2,12.5-9.4,18.7c-3.1,3.1-6.2,6.3-9.3,9.4   c-9.3,9.4-18,18.3-27.6,26.8c-0.2,0.2-0.3,0.3-0.5,0.5c-8.3,8.3-7,16.2-5,22.2c0.1,0.3,0.2,0.5,0.3,0.8   c7.7,18.5,18.4,36.1,35.1,57.1c30,37,61.6,65.7,96.4,87.8c4.3,2.8,8.9,5,13.2,7.2c4,2,7.7,3.9,11,6c0.4,0.2,0.7,0.4,1.1,0.6   c3.3,1.7,6.5,2.5,9.7,2.5c8,0,13.2-5.1,14.9-6.8l37.4-37.4c5.8-5.8,12.1-8.9,18.3-8.9c7.6,0,13.8,4.7,17.7,8.9l60.3,60.2   c12,12,11.9,25-0.3,37.7c-4.2,4.5-8.6,8.8-13.3,13.3c-7,6.8-14.3,13.8-20.9,21.7c-11.5,12.4-25.2,18.2-42.9,18.2   c-1.7,0-3.5-0.1-5.2-0.2c-32.8-2.1-63.3-14.9-86.2-25.8c-62.2-30.1-116.8-72.8-162.1-127c-37.3-44.9-62.4-86.7-79-131.5   C28.039,146.4,24.139,124.3,25.739,104.2z" />
          </g>
        </svg>
      </a>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->


    <!-- wp:group -->
    <div class="wp-block-group btn-open-menu ml-[10px] p-[13px_10px] w-[50px] bg-textGray font-medium cursor-pointer">
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-white mb-[8px] rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line h-[2px] bg-white mb-[8px] rounded-[5px] transition-width ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
      <!-- wp:group -->
      <div class="wp-block-group hamburger-btn-line w-[30px] h-[2px] bg-white rounded-[5px] transition ease-out duration-[400ms]">
        <!-- wp:paragraph -->
        <p class="hidden">menu icon</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:list -->
  <ul class="wp-block-list mobile-nav-menu text-[30px] w-screen h-screen overflow-scroll pt-[100px] bg-textGray text-white z-[3] flex flex-col items-center gap-y-[30px] fixed top-[0px] left-0 translate-x-[100%] opacity-[0] transition ease-in-out duration-500">
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/inwestycje/">Inwestycje</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/o-nas/">O nas</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/aktualnosci/">Aktualności</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/kredyty/">Kredyty</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:paragraph -->
      <p><a href="/kontakt/">Kontakt</a></p>
      <!-- /wp:paragraph -->
    </li>
    <!-- /wp:list-item -->
    <!-- wp:list-item -->
    <li class="">
      <!-- wp:group -->
      <div class="wp-block-group btn-wrapper-mobile desktop:flex items-center gap-[10px]">
        <!-- wp:group -->
        <div class="wp-block-group btn-lang mb-[30px] desktop:mb-0 text-[18px] flex justify-center desktop:justify-start gap-[5px]">
          <!-- wp:paragraph -->
          <a href="#" class="">PL</a>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <p class="">/</p>
          <!-- /wp:paragraph -->
          <!-- wp:paragraph -->
          <a href="#" class="">ENG</a>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group btn-fb hidden desktop:block bg-blue-700 text-white w-[20px] h-[20px] text-center rounded-[5px]">
          <!-- wp:paragraph -->
          <p>f</p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group group btn-find-more relative bg-[#3d4b66] text-[18px] text-white font-bold w-[230px] h-[55px] flex items-center justify-center cursor-pointer">
          <!-- wp:paragraph -->
          <p class="z-[1]"><a href="<?php echo home_url() . '/mieszkania' ?>">Znajdź mieszkanie</a></p>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
      </div>
      <!-- /wp:group -->
    </li>
    <!-- /wp:list-item -->
  </ul>
  <!-- /wp:list -->
</div>
<!-- /wp:group -->