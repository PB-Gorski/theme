<?php

/**
 * Title: inwestycje
 * Slug: inwestycje
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
?>

<!-- wp:group {"templateLock":"contentOnly","anchor":true} -->
<div id="inwestycje" class="wp-block-group inwestycje bg-white mb-[80px] relative z-[1]">
  <!-- wp:group -->
  <div class="wp-block-group container mx-auto desktop:px-0 px-[20px]">
    <!-- wp:group -->
    <div class="wp-block-group pt-[60px] pb-[30px] desktop:pb-[60px] title">
      <!-- wp:paragraph -->
      <span data-aos="fade-right" data-aos-duration="500" data-aos-offset="30" class="text-[24px] text-center font-bold">Poznaj nasze najnowsze inwestycje</span>
      <!-- /wp:paragraph -->
      <!-- wp:group -->
      <div class="wp-block-group mx-auto w-[130px] border-b-primaryRed border-b-[2px]">
        <!-- wp:paragraph -->
        <p class="hidden">empty for border bottom</p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:list -->
    <ul class="wp-block-list inwestycje-posts mb-[40px] flex desktop:flex-row flex-col justify-between desktop:gap-[30px]">
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

        $alias = $taxNoSpaces2;
        $alias = strtolower($alias);
        $alias = str_replace(' ', '-', $alias);
        $alias = preg_replace('/[^0-9a-ąćęłńóśźżś\-]+/', '', $alias);

        $alias = preg_replace('/[\-]+/', '-', $alias);
        $alias = trim($alias, '-');
        $alias = str_replace(array('ą', 'ć', 'ę', 'ł', 'ń', 'ó', 'ś', 'ź', 'ż', 'Ś'), array('a', 'c', 'e', 'l', 'n', 'o', 's', 'z', 'z', 's'), $alias);
        $alias = str_replace(array(',', ':', ';', ' '), array('', '', '', '-'), $alias);
        $alias = strtr($alias, ' ', '-');

        if ($counter < 4) {
      ?>
          <!-- wp:list-item -->
          <li class="invest-tile max-w-full mb-[80px] w-full inline-block">
            <a href="<?php echo home_url() . '/o-inwestycji-' . $alias; ?>" class="inline-block" data-aos="fade-up" data-aos-offset="30" data-aos-delay="<?php echo $counter * 50; ?>">
              <!-- wp:group -->
              <div class="wp-block-group relative group desktop:max-w-full max-w-[310px] h-full">
                <!-- wp:group -->
                <div class="wp-block-group wrapper w-full h-full">
                  <!-- wp:image -->
                  <figure class="wp-block-image h-[330px] desktop:max-h-full mb-[30px] lowercase">
                    <img src="<?php echo home_url() . '/wp-content/themes/pbgorski/assets/img/page-inwestycje/' . $taxNoSpaces2 . '.jpeg'; ?>" alt="inwestycje-img">
                  </figure>
                  <!-- /wp:image -->

                  <!-- wp:group -->
                  <div class="wp-block-group content flex flex-col items-start justify-center gap-[15px]">
                    <!-- wp:paragraph -->
                    <p class="mr-[20px] text-[30px] desktop:text-[36px] font-bold"><?php echo $tax->name; ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group -->
                    <div class="wp-block-group flex">
                      <!-- wp:group -->
                      <div class="wp-block-group available-apartments pr-[35px] flex items-center gap-[25px]">
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
              <!-- /wp:group -->
            </a>
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
    <div class="wp-block-group flex items-center justify-center">
      <!-- wp:group -->
      <div class="wp-block-group btn-find-more relative w-fit h-[55px] p-[10px_20px] bg-[#3d4b66] text-white flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">
        <!-- wp:paragraph -->
        <p class="font-bold z-[1]"><a href="<?php echo home_url() . '/blog' ?>">Zobacz wszystkie inwestycje</a></p>
        <!-- /wp:paragraph -->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->