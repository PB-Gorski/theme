<?php
/*
 * Title: header-white
 * Slug: header-white
 * Categories: header
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="Menu-desktop" class="wp-block-group nav-desktop relative hidden desktop:block">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto h-[100px] flex items-center text-white">
    <!-- wp:group -->
    <div class="wp-block-group logo mr-[40px]">
      <!-- wp:paragraph -->
      <a href="<?php echo home_url(); ?>">
        <!-- wp:image -->
        <figure class="wp-block-image w-[115px]">
          <img src="<?php echo home_url(); ?>/wp-content/themes/pbgorski/assets/img/frontpage/logo-white.png" alt="pb-gorski-logo" />
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
                    <a href="<?php echo home_url() . '/o-inwestycji-' . $alias; ?>" class="inline-block">
                      <!-- wp:paragraph -->
                      <p class=""><?php echo $tax->name; ?></p>
                      <!-- /wp:paragraph -->
                    </a>
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
        <div class="wp-block-group group btn-find-more relative bg-transparent text-white p-[15px] h-[48px] flex items-center justify-center border-[2px] border-white rounded-full cursor-pointer">
          <!-- wp:paragraph -->
          <a href="<?php echo home_url() . '/mieszkania'; ?>" class="z-[1]">Znajdź mieszkanie</a>
          <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group group btn-call-header relative bg-transparent text-primaryRed w-[48px] h-[48px] flex items-center justify-center border-[2px] border-primaryRed rounded-full cursor-pointer">
          <!-- wp:paragraph -->
          <a href="#" class="z-[1]">tel</a>
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