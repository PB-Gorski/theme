<?php

/**
 * Title: inwestycje
 * Slug: inwestycje
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje" class="wp-block-group inwestycje mb-[150px] relative">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group pt-[60px] pb-[30px] desktop:pb-[40px] title">
      <!-- wp:paragraph -->
      <p class="text-[24px] desktop:ml-[100px] text-bgDarkGray">Poznaj nasze najnowsze inwestycje</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:list -->
    <ul class="wp-block-list inwestycje-posts mb-[40px] flex desktop:flex-row flex-col justify-between gap-[30px]">
      <?php
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

        if ($counter < 4) {
          echo $counter;
      ?>
          <!-- wp:list-item -->
          <li class="invest-tile max-w-full mb-[80px] w-full">
            <div class="relative group desktop:max-w-full max-w-[310px] h-full">
              <!-- wp:group -->
              <div class="wp-block-group wrapper w-full h-full">
                <!-- wp:image -->
                <figure class="wp-block-image h-[330px] desktop:h-full mb-[30px] lowercase">
                  <img src="<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/page-inwestycje/' . $taxNoSpaces2 . '.jpeg'; ?>" alt="inwestycje-img">
                </figure>
                <!-- /wp:image -->

                <!-- wp:group -->
                <div class="wp-block-group content flex flex-col items-start justify-center gap-[15px]">
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
      };
      ?>
    </ul>
    <!-- /wp:list -->

    <!-- wp:group -->
    <div class="wp-block-group absolute bottom-[-70px] left-[50%] translate-x-[-50%]">
      <!-- wp:group -->
      <div class="wp-block-group btn-find-more relative bg-[#3d4b66] text-white w-[315px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="font-bold z-[1]">Zobacz wszystkie inwestycje</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->