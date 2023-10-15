<?php

/**
 * Title: page-blog-title
 * Slug: page-blog-title
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="blog-post" class="wp-block-group page-blog-test relative">
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
  <div class="wp-block-group title-wrapper py-[20px] desktop:py-[48px] bg-[#f5f7fa]">
    <!-- wp:group -->
    <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
      <!-- wp:group -->
      <div class="wp-block-group">
        <!-- wp:paragraph -->
        <p class="mx-auto mb-[40px] text-[36px] desktop:text-[60px] text-[#2e384c] font-bold" data-aos="fade-right" data-aos-offset="30">Aktualności</p>
        <!-- /wp:paragraph -->

        <!-- wp:group -->
        <div class="flex flex-wrap gap-[20px]">
          <span>
            <a href="<?php echo get_home_url() . '/blog'; ?>" class="inline-block allTabBtn text-[#8A8F99] <?php echo is_page('blog') ? 'blog' : 'not blog'; ?> hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">Wszystkie</a>
          </span>

          <!-- wp:core/categories {"showPostCounts":false,"displayAsDropdown":false,"showHierarchy":false} /-->
        </div>
        <!-- /wp:group -->


        <!-- wp:list -->
        <ul class="wp-block-list hidden taxonomies mx-auto pb-[50px] flex flex-wrap items-center gap-[20px] text-[18px]">
          <!-- wp:list-item -->
          <li class="allTabBtn tab-active text-[#8A8F99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer">
            <a href="<?php echo get_home_url() . '/blog'; ?>" class="inline-block" data-aos="fade-right" data-aos-offset="30">Wszystkie</a>
          </li>
          <!-- /wp:list-item -->

          <?php
          $taxonomies = get_terms(array(
            'taxonomy' => 'osiedla',
            'hide_empty' => false,
          ));

          if (false) {
            foreach ($taxonomies as $taxonomy) {
              // $catNoSpaces = str_replace(' ', '-', strtolower($cat->name)); 
              print_r(get_category_link($taxonomy->term_id));
          ?>
              <!-- wp:list-item -->
              <li class="text-[#959ba6] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer"><a href="#" class="inline-block" data-aos="fade-up" data-aos-offset="30"><?php echo $taxonomy->name; ?></a></li>
              <!-- /wp:list-item -->
          <?php }
          }; ?>
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
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5,
        'order' => 'DESC',
        'paged' => $paged
      );
      $post_query = new WP_Query($args);
      $counter = 0;
      $i = 0;

      if ($post_query->have_posts()) {
      ?>
        <?php
        while ($post_query->have_posts()) {
          $post_query->the_post();
          $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
          $counter++; ?>
          <!-- wp:list-item -->
          <li class="invest-tile max-w-full mb-[80px]">
            <a href="<?php the_permalink(); ?>" class="relative group inline-block desktop:max-w-full max-w-[310px]" data-aos="fade-right" data-aos-offset="30">
              <!-- wp:group -->
              <div class="wp-block-group wrapper w-full desktop:flex gap-[120px]">
                <!-- wp:image -->
                <figure class="wp-block-image desktop:w-[50%] h-[330px] m-0">
                  <img src="<?php echo $postImageUrl[0]; ?>" alt="services-background-image">
                </figure>
                <!-- /wp:image -->

                <!-- wp:group -->
                <div class="wp-block-group content desktop:w-[50%] flex flex-col items-start justify-center">
                  <!-- wp:paragraph -->
                  <p class="mb-[30px] text-[24px] desktop:text-[36px] font-bold leading-[34px] desktop:leading-[46px]"><?php the_title(); ?></p>
                  <!-- /wp:paragraph -->

                  <!-- wp:group -->
                  <div class="wp-block-group post-excerpt mb-[40px]">
                    <!-- wp:paragraph -->
                    <?php the_excerpt(); ?>
                    <!-- /wp:paragraph -->
                  </div>
                  <!-- /wp:group -->

                  <!-- wp:paragraph -->
                  <p class="relative text-[18px] inline before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[50%] hover:before:min-h-[100%] before:bg-[#b3f1ff] before:transition-height before:duration-300 before:ease before:z-[-1] cursor-pointer">Zobacz więcej &rarr;
                  </p>
                  <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
              </div>
              <!-- /wp:group -->
            </a>
          </li>
          <!-- /wp:list-item -->
        <?php
          $i++;
        }; ?>

      <?php
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