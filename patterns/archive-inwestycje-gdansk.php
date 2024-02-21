<?php

/**
 * Title: archive-inwestycje-gdansk
 * Slug: archive-inwestycje-gdansk
 * Categories: text, banner
 * Viewport Width: 1280
 */
?>

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

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje-archive" class="wp-block-group inwestycje-archive relative">
  <!-- wp:group -->
  <div class="wp-block-group title-wrapper mb-[40px] bg-[#f6f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] py-[20px] desktop:flex items-center">
      <!-- wp:group -->
      <div class="wp-block-group left-col desktop:w-[70%]">
        <!-- wp:heading {"level":1} -->
        <h1 class="container mx-auto desktop:px-0 px-[20px] my-[40px] text-[36px] desktop:text-[60px] text-[#2e384c] font-bold leading-[44px]">Gdańsk - Inwestycje</h1>
        <!-- /wp:heading -->

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
          $currentCategory = str_replace('/', '', ("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"));
          $scheme  = (!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] === "off") ? "http" : "https";

          $url = "$scheme://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          // print_r('url: ' . $url);
          // print_r('url2: ' . $currentCategory);

          $currentCategory2 = str_replace('/', '', str_replace(home_url() . '/inwestycje-', '', $url));

          // print_r('replace: ' . home_url() . '/inwestycje-');
          print_r('currentcat: ' . $currentCategory2);

          foreach ($cats as $cat) {
            $catNoSpaces = str_replace(' ', '-', strtolower($cat->name));

            $alias = $catNoSpaces;
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
            <li class="CityTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer <?php echo ($currentCategory == $alias) ? 'tab-active' : ''; ?>"><a href="<?php echo home_url() . '/inwestycje-' . $alias; ?>"><?php echo $cat->name; ?></a></li>
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
        $count = $query->found_posts;
        ?>
        <!-- wp:heading {"level":4} -->
        <h4 class="text-[30px] text-[#8a8f99]"><?php print_r(count($my_terms)); ?> inwestycje / <?php echo $count; ?> lokali</h4>
        <!-- /wp:heading -->
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

            $alias = $taxInwestycjeName;
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
            <li class="invest-tile current max-w-full test desktop:h-[450px] mb-[80px]">
              <!-- wp:group -->
              <div class="wp-block-group relative group inline-block cursor-default desktop:max-w-full w-full h-full">
                <!-- wp:group -->
                <div class="wp-block-group wrapper w-full h-full desktop:flex <?php echo (!($counter % 2)) ? 'flex-row-reverse' : ''; ?> gap-[50px]">
                  <!-- wp:group -->
                  <div class="wp-block-group term_investment_img desktop:w-[50%] h-[330px] desktop:h-full mb-[30px]">
                    <?php
                    if (term_description($my_term->term_id)) { ?>
                      <!-- wp:paragraph -->
                      <?php echo term_description($my_term->term_id); ?>
                      <!-- /wp:paragraph -->
                    <?php
                    } else { ?>
                      <!-- wp:image -->
                      <figure class="wp-block-image desktop:w-full h-[330px] desktop:h-full mb-[30px]">
                        <img src="<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/page-blog/default-post-image.jpg'; ?>" alt="inwestycje-img">
                      </figure>
                      <!-- /wp:image -->
                    <?php }; ?>
                  </div>
                  <!-- /wp:group -->

                  <!-- wp:group -->
                  <div class="wp-block-group content desktop:w-[50%] flex flex-col items-start justify-center gap-[15px]">
                    <!-- wp:heading -->
                    <h2 class="mr-[20px] text-[30px] desktop:text-[40px] font-bold"><?php echo $my_term->name; ?></h2>
                    <!-- /wp:heading -->

                    <!-- wp:group -->
                    <div class="wp-block-group flex">
                      <!-- wp:group -->
                      <div class="wp-block-group available-apartments pr-[35px] flex items-center gap-[25px] border-r-[1px] border-[#ebecee]">
                        <!-- wp:paragraph -->
                        <p class="text-[48px] text-primaryRed font-bold"><?php echo $my_term->count; ?></p>
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
                        <p class="text-[24px] font-bold">
                          <?php
                          if ($taxInwestycjeName == 'Osiedle Srebrniki') {
                            echo '11 797 zł/m<sup>2</sup>';
                          } else if ($taxInwestycjeName == 'Toruńska 16') {
                            echo '18 375 zł/m<sup>2</sup>';
                          } else if ($taxInwestycjeName == 'Wieżycka Folwark') {
                            echo '8 930 zł/m<sup>2</sup>';
                          } else {
                            echo '__ ______ zł/m<sup>2</sup>';
                          };
                          ?>
                        </p>
                        <!-- /wp:paragraph -->
                      </div>
                      <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:group -->
                    <div class="wp-block-group group btn-read-more mt-[10px] relative bg-[#3d4b66] text-[18px] text-white font-bold w-[230px] h-[55px] flex items-center justify-center border-b-[3px] border-b-[#2e384d] before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
                      <!-- wp:paragraph -->
                      <p class="z-[1] w-full h-full flex justify-center items-center"><a href="<?php echo home_url() . '/o-inwestycji-' . $alias; ?>" class="w-full h-full flex justify-center items-center">Poznaj inwestycję &rarr;</a></p>
                      <!-- /wp:paragraph -->
                    </div>
                    <!-- /wp:group -->

                  </div>
                  <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
              </div>
              <!-- /wp:group -->
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
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->