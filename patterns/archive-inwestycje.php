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
  <div class="wp-block-group call-back-modal-bg hidden desktop:block opacity-0 z-[-1] bg-[rgba(61,75,102,0.5)] fixed top-0 left-0 w-screen h-screen transition duration-300 ease">
  </div>
  <!-- /wp:group -->
  <!-- wp:group -->
  <div class="wp-block-group call-back-modal hidden desktop:block opacity-0 w-[850px] h-[370px] p-[45px_60px] bg-white fixed top-[50%] left-[50%] translate-y-[-50%] translate-x-[-50%] z-[-1] transition duration-300 ease">
    <!-- wp:group -->
    <div class="wp-block-group btn-close absolute top-[-5px] right-[15px] cursor-pointer">
      <!-- wp:paragraph -->
      <p class="text-[40px] text-bgDarkGray opacity-[50%]">×</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
    <!-- wp:paragraph -->
    <p class="text-[40px] text-center font-bold">Zamów darmowe połączenie</p>
    <!-- /wp:paragraph -->
    <!-- wp:paragraph -->
    <p class="text-center text-bgDarkGray mb-[35px]">Zostaw numer, nasz konsultant oddzwoni do Ciebie</p>
    <!-- /wp:paragraph -->
    <!-- wp:group -->
    <div class="wp-block-group input mb-[25px] flex">
      <!-- wp:paragraph -->
      <p class="w-[370px] h-[60px] bg-white text-bgDarkGray text-[14px] leading-[150%]">Numer telefonu</p>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group group btn relative bg-[#e80d38] text-white w-[370px] h-[60px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-btnHoverRed before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="font-bold z-[1]">Zamawiam rozmowę</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group -->
    <div class="wp-block-group input checkbox">
      <!-- wp:paragraph -->
      <p class="text-bgDarkGray text-[12px] leading-[22px]">Wyrażam zgodę na używanie przez PB Górski sp. z o.o. S.K.A. telekomunikacyjnych urządzeń końcowych dla celów marketingu bezpośredniego, tj. aby przedstawić oferty PB Górski sp. z o.o. S.K.A. telefonicznie. Jednocześnie informujemy, że rozmowa będzie nagrywana. Administratorem Danych Osobowych jest PB Górski sp. z o.o. S.K.A. z siedzibą w Gdańsku (80-312) ul. Wita Stwosza 31A/31. tutaj</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group call-back-pop-up w-[200px] h-[280px] hidden desktop:block text-[16px] text-center bg-transparent flex flex-col jusify-center items-center fixed bottom-[30px] right-[20px] z-[2]">
    <!-- wp:group -->
    <div class="wp-block-group text mb-[10px] w-full h-[160px] bg-white flex flex-col justify-center items-center gap-y-[10px] shadow-lg">
      <!-- wp:paragraph -->
      <p>Zostaw swój numer -</p>
      <!-- /wp:paragraph -->
      <!-- wp:paragraph -->
      <p class="font-bold">Odzwonimy do Ciebie</p>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group group btn-leave-phone relative bg-primaryRed text-white w-[170px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-btnHoverRed before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="font-bold z-[1]">Zostaw numer</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:image -->
    <figure class="wp-block-image phone-icon mx-auto w-[92px] cursor-pointer">
      <img src="<?php echo home_url() ?>//wp-content/themes/pbgorski/assets/img/frontpage/phone-icon.png" alt="phone-icon">
    </figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group title-wrapper mb-[40px] bg-[#f5f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px] py-[20px] desktop:flex items-center">
      <!-- wp:group -->
      <div class="wp-block-group left-col desktop:w-[70%]">
        <!-- wp:paragraph -->
        <p class="container mx-auto desktop:px-0 px-[20px] my-[40px] text-[36px] desktop:text-[60px] text-[#2e384c] font-bold leading-[44px]" data-aos="fade-right" data-aos-offset="30">Wszystkie inwestycje</p>
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
          $currentCategory = str_replace('/', '', substr("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]", 39, 20));
          $cats = get_categories($args); ?>
          <!-- wp:list-item -->
          <li class="allTabBtn text-[#8A8F99] text-textGray underline underline-offset-4 decoration-2 decoration-primaryRed cursor-pointer">
            <a href="<?php echo get_home_url() . '/inwestycje'; ?>" class="inline-block" data-aos="fade-right" data-aos-offset="30">Wszystkie</a>
          </li>
          <!-- /wp:list-item -->
          <?php
          foreach ($cats as $cat) {
            $catNoSpaces = str_replace(' ', '-', strtolower($cat->name));
          ?>
            <!-- wp:list-item -->
            <li class="CityTabBtn text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer <?php echo ($currentCategory == $catNoSpaces) ? 'tab-active' : ''; ?>"><a href="<?php echo home_url() . '/inwestycje-' . $catNoSpaces; ?>" class="inline-block" data-aos="fade-right" data-aos-offset="30"><?php echo $cat->name; ?></a></li>
            <!-- /wp:list-item -->
          <?php }; ?>
        </ul>
        <!-- /wp:list -->
      </div>
      <!-- /wp:group -->

      <!-- wp:group -->
      <div class="wp-block-group right-col desktop:w-[30%]">
        <!-- wp:paragraph -->
        <p class="text-[30px] text-[#8a8f99]" data-aos="fade-right" data-aos-duration="500" data-aos-offset="30"><?php echo wp_count_terms('inwestycja'); ?> inwestycje / <?php echo wp_count_posts('mieszkania')->publish; ?> lokali</p>
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
      foreach ($taxonomies as $tax) {
        $counter++;
        $currentTermCount = (get_term($tax, 'inwestycja'))->count;
        $taxNoSpaces = str_replace(' ', '-', strtolower($tax->name));
        $taxNoSpaces2 = str_replace('.', '', strtolower($taxNoSpaces));
        // echo $taxNoSpaces;
        // echo $taxNoSpaces2;

        $alias = $taxNoSpaces2;

        $alias = strtolower($alias);
        $alias = str_replace(' ', '-', $alias);
        $alias = preg_replace('/[^0-9a-ąćęłńóśźżś\-]+/', '', $alias);

        $alias = preg_replace('/[\-]+/', '-', $alias);
        $alias = trim($alias, '-');
        $alias = str_replace(array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ź', 'ż', 'Ś'), array('a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z', 's'), $alias);
        $alias = str_replace(array(',', ':', ';', ' '), array('', '', '', '-'), $alias);
        $alias = strtr($alias, ' ', '-');

        // echo $alias;
      ?>
        <!-- wp:list-item -->
        <li class="invest-tile max-w-full test desktop:h-[450px] mb-[80px]">
          <a href="<?php echo home_url() . '/o-inwestycji-' . $alias; ?>" class="relative group inline-block cursor-default desktop:max-w-full w-full h-full" data-aos="fade-up" data-aos-offset="30">
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


      if (!$post_query->have_posts()) {
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
          $counter++;
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