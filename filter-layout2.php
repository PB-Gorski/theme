<?php if (!defined('ABSPATH')) exit;

$ymc_filter_layout = 'filter-layout4';
$terms_selected = $terms;
$c_target = 'filter-layout4';
$ymc_multiple_filter = '1';
$ymc_sort_terms = 'manual';
$tax_sort = $taxonomy;
?>


<div id="<?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($c_target); ?>" class="filter-layout bg-[#ebeef2] <?php echo esc_attr($ymc_filter_layout); ?> <?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($layout_id); ?> <?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($layout_id); ?>-<?php echo esc_attr($c_target); ?>">

  <?php do_action("ymc_before_filter_layout_" . $layout_id . '_' . $c_target); ?>

  <?php if (is_array($terms_selected)) :
    $all_terms = implode(',', $terms_selected);
  ?>
    <div class="search_tabs container flex justify-center items-center">
      <div class="tab_mieszkania mieszkania-active">
        <p class="text-[20px] font-semibold">Mieszkania</p>
      </div>
      <div class="tab_mieszkania">
        <p class="text-[20px] font-semibold">Lokale</p>
      </div>
      <div class=" tab_mieszkania">
        <p class="text-[20px] font-semibold">Biura</p>
      </div>
    </div>

    <div class="filter-entry container mx-auto justify-center" data-terms="<?php echo esc_attr($all_terms); ?>">
      <?php
      $type_multiple = ((bool) $ymc_multiple_filter) ? 'multiple' : '';
      if ($ymc_sort_terms !== 'manual') {
        ($ymc_sort_terms === 'asc') ? asort($terms_selected) : arsort($terms_selected);
      }
      ?>
      <?php
      $arr_taxonomies = [];
      foreach ($terms_selected as $term) {
        $arr_taxonomies[] = get_term($term)->taxonomy;
      }
      $arr_taxonomies = array_unique($arr_taxonomies);

      // $show_all = apply_filters('ymc_button_show_all_' . $layout_id . '_' . $c_target, __('All', 'ymc-smart-filter'));

      // echo '<a class="btn-all hidden" href="#" data-selected="all" data-terms="' . esc_attr($all_terms) . '">' . esc_html($show_all) . '</a>';

      if (!is_null($tax_sort)) {
        $result_tax = [];
        foreach ($tax_sort as $val) {
          if (array_search($val, $arr_taxonomies) !== false) {
            $result_tax[array_search($val, $arr_taxonomies)] = $val;
          }
        }
      } else {
        $result_tax = $arr_taxonomies;
      }

      foreach ($result_tax as $tax) {
        $select_term = apply_filters('ymc_select_term_dropdown', $tax);
        if (get_taxonomy($select_term)->label == 'Cena') { ?>
          <div class="dropdown-filter customPrice price-min flex-col bg-white">
            <p class="dropdown-filter-title">Cena od:</p>
            <div class="dropdown__value dropdown__value-price dropdown__value-min font-bold"><span>0</span></div>
            <ul class="dropdown__list">
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">50 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">100 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">150 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">200 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">250 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">300 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">350 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">400 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">450 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">500 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">750 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">1 000 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">1 500 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">2 000 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">2 500 000</span>
              </li>
            </ul>
          </div>
          <div class="dropdown-filter customPrice price-max flex-col bg-white">
            <p class="dropdown-filter-title">Cena do:</p>
            <div class="dropdown__value dropdown__value-price dropdown__value-max font-bold"><span>Max</span></div>
            <ul class="dropdown__list">
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">50 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">100 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">150 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">200 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">250 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">300 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">350 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">400 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">450 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">500 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">750 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">1 000 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">1 500 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">2 000 000</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link menu-link cursor-pointer">2 500 000</span>
              </li>
            </ul>
          </div>

          <div class="btn-wrapper bg-white h-[120px] flex items-center justify-center" style="width:100%;border-right:2px solid #ebeef2;border-bottom:2px solid #ebeef2">
            <div class="wp-block-group btn-more relative mt-[5px] bg-[#ebeef2] flex gap-[10px] justify-center items-center cursor-pointer border-b-[3px] border-b-[#dcdee3] " style="height:50px;width:140px;">
              <p class="desktop:text-[18px] text-[16px] font-bold z-[1]">Więcej opcji</p>
            </div>
          </div>
          <div class="btn-search btn-wrapper bg-white h-[120px] flex items-center justify-center" style="width:100%;border-bottom:2px solid #ebeef2">
            <div class="wp-block-group group btn-search mt-[5px] relative bg-primaryRed text-white h-[50px] flex items-center justify-center gap-[15px] before:content-[``] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#9C0927] before:transition-height before:duration-300 before:ease cursor-pointer" style="height:50px;width:140px">
              <p class="w-full h-full flex items-center justify-center desktop:text-[18px] text-[16px] font-bold z-[1] text-white"><a href="<?php echo home_url() . '/mieszkania' ?>" class="w-full h-full flex items-center justify-center">Szukaj</a></p>
            </div>
          </div>

          <?php
          echo '<div class="dropdown-filter defaultPrice hidden">';
          echo '<div class="menu-active">';
          echo '<span>' . get_taxonomy($select_term)->label . '</span> <i class="arrow down"></i>';
          echo '</div>';
          echo '<div class="menu-passive">';
          // echo '<i class="btn-close">x</i>';

          $terms_icons = null;
          foreach ($terms_selected as $term) {
            if ($tax === get_term($term)->taxonomy) {
              // $is_disabled = (get_term($term)->count === 0) ? 'isDisabled' : '';

              if (!empty($ymc_terms_icons)) {
                foreach ($ymc_terms_icons as $key => $val) {
                  if ((int) $term === (int) $key) {
                    $terms_icons = '<i class="' . $val . '"></i>';
                    break;
                  }
                }
              }

              echo '<div class="menu-passive__item item-' . esc_attr(get_term($term)->slug) . '">
							  ' . $terms_icons . '
                              <a class="menu-link ' .  esc_attr('') . ' ' .  esc_attr($type_multiple) . '" 
                              href="#" data-selected="' . esc_attr(get_term($term)->slug) . '" data-termid="' . esc_attr($term) . '" data-name="' . esc_attr(get_term($term)->name) . '">' .
                esc_html(get_term($term)->name) . ' <span class="count">' . esc_html(get_term($term)->count) . '</span></a></div>';
            }

            $terms_icons = null;
          }
          echo '</div>';
          echo '</div>';
        } else  if (get_taxonomy($select_term)->label == 'Metraz') { ?>
          <div class="dropdown-filter customMetraz metraz-min flex-col bg-white">
            <p class="dropdown-filter-title">Metraż od:</p>
            <div class="dropdown__value dropdown__value-metraz dropdown__value-min dropdown__value-min-metraz font-bold flex items-center"><span>0</span></div>
            <ul class="dropdown__list dropdown__list-metraz">
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">10</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">25</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">40</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">50</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">60</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">70</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">80</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">100</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">120</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">150</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">200</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">250</span>
              </li>
            </ul>
          </div>

          <div class="dropdown-filter customMetraz metraz-max flex-col bg-white">
            <p class="dropdown-filter-title">Metraz do:</p>
            <div class="dropdown__value dropdown__value-metraz dropdown__value-max dropdown__value-max-metraz font-bold flex items-center"><span>Max</span></div>
            <ul class="dropdown__list dropdown__list-metraz">
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">10</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">25</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">40</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">50</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">60</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">70</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">80</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">100</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">120</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">150</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">200</span>
              </li>
              <li class="dropdown__item">
                <span class="dropdown__link dropdown__link-metraz  menu-link cursor-pointer">250</span>
              </li>
            </ul>
          </div>

          <?php
          echo '<div class="dropdown-filter defaultMetraz hidden">';
          echo '<div class="menu-active">';
          echo '<span class="hidden">' . get_taxonomy($select_term)->label . '</span> <i class="arrow down"></i>';
          echo '<span>Wybierz</span> <i class="arrow down"></i>';
          echo '</div>';
          echo '<div class="menu-passive">';
          // echo '<i class="btn-close">x</i>';

          $terms_icons = null;
          foreach ($terms_selected as $term) {
            if ($tax === get_term($term)->taxonomy) {
              // $is_disabled = (get_term($term)->count === 0) ? 'isDisabled' : '';

              if (!empty($ymc_terms_icons)) {
                foreach ($ymc_terms_icons as $key => $val) {
                  if ((int) $term === (int) $key) {
                    $terms_icons = '<i class="' . $val . '"></i>';
                    break;
                  }
                }
              }

              echo '<div class="menu-passive__item item-' . esc_attr(get_term($term)->slug) . '">
							  ' . $terms_icons . '
                              <a class="menu-link ' .  esc_attr('') . ' ' .  esc_attr($type_multiple) . '" 
                              href="#" data-selected="' . esc_attr(get_term($term)->slug) . '" data-termid="' . esc_attr($term) . '" data-name="' . esc_attr(get_term($term)->name) . '">' .
                esc_html(get_term($term)->name) . ' <span class="count">' . esc_html(get_term($term)->count) . '</span></a></div>';
            }

            $terms_icons = null;
          }
          echo '</div>';
          echo '</div>';
        } else {
          ?>
          <div class="dropdown-filter flex-col bg-white">
            <p class="dropdown-filter-title"><?php echo get_taxonomy($select_term)->label . ':' ?></p>
            <div class="menu-active font-bold">
              <span class="arrow-down active_window w-full flex justify-between items-center">Wybierz<?php get_taxonomy($select_term)->label ?></span>
            </div>
            <div class="menu-passive">
              <!-- <i class="btn-close">x</i> -->
              <?php
              $terms_icons = null;
              foreach ($terms_selected as $term) {
                if ($tax === get_term($term)->taxonomy) {

                  // $is_disabled = (get_term($term)->count === 0) ? 'isDisabled' : '';
                  // Choose icons
                  if (!empty($ymc_terms_icons)) {
                    foreach ($ymc_terms_icons as $key => $val) {
                      if ((int) $term === (int) $key) {
                        $terms_icons = '<i class="' . $val . '"></i>';
                        break;
                      }
                    }
                  }

                  if ((get_taxonomy($select_term)->label) == 'Miasto') {
                    $type_multiple = '';
                  } else if ((get_taxonomy($select_term)->label) == 'Termin') {
                    $type_multiple = '';
                  } else if ((get_taxonomy($select_term)->label) == 'inne') {
                    $type_multiple = '';
                  } else {
                    $type_multiple = 'multiple';
                  };

                  echo '<div class="menu-passive__item item-' . esc_attr(get_term($term)->slug) . '">
                  ' . $terms_icons . '
                                <a class="menu-link ' .  esc_attr('') . ' ' .  esc_attr($type_multiple) . '" 
                                href="#" data-selected="' . esc_attr(get_term($term)->slug) . '" data-termid="' . esc_attr($term) . '" data-name="' . esc_attr(get_term($term)->name) . '">' .
                    esc_html(get_term($term)->name) . ' <span class="count">' . esc_html(get_term($term)->count) . '</span></a></div>';
                }
                $terms_icons = null;
              } ?>
            </div>
          </div>
      <?php
        }
      }
      unset($result_tax);
      ?>
    </div>

  <?php endif; ?>
  <?php do_action("ymc_after_filter_layout_" . $layout_id . '_' . $c_target); ?>
</div>