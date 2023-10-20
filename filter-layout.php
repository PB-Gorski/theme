<?php if (!defined('ABSPATH')) exit;

$ymc_filter_layout = 'filter-layout3';
$terms_selected = $terms;
$c_target = 'filter-layout3';
$ymc_multiple_filter = '1';
$ymc_sort_terms = 'manual';
$tax_sort = $taxonomy;
?>


<div id="<?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($c_target); ?>" class="filter-layout <?php echo esc_attr($ymc_filter_layout); ?> <?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($layout_id); ?> <?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($layout_id); ?>-<?php echo esc_attr($c_target); ?>">

  <?php do_action("ymc_before_filter_layout_" . $layout_id . '_' . $c_target); ?>

  <?php if (is_array($terms_selected)) :
    $all_terms = implode(',', $terms_selected);
  ?>
    <div class="search_tabs container"></div>
    <div class="filter-entry" data-terms="<?php echo esc_attr($all_terms); ?>">
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
          <div class="dropdown-filter customPrice">
            <div class="dropdown__value dropdown__value-min">0</i></div>
            <ul class="dropdown__list">
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">400000</a>
              </li>
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">498000</a>
              </li>
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">500000</a>
              </li>
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">600000</a>
              </li>
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">800000</a>
              </li>
            </ul>
          </div>
          <div class="dropdown-filter customPrice">
            <div class="dropdown__value dropdown__value-max">max</i></div>
            <ul class="dropdown__list">
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">400002</a>
              </li>
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">499002</a>
              </li>
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">500002</a>
              </li>
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">600002</a>
              </li>
              <li class="dropdown__item">
                <a href="javascript:void(0);" class="dropdown__link">800002</a>
              </li>
            </ul>
          </div>

          <div class="wp-block-group btn-more dropdown-filter mt-[5px] w-full h-[62px] bg-[#f5f7fa] hover:bg-[#f2f2f2] flex self-start gap-[10px] justify-center items-center cursor-pointer border-b-[3px] border-b-[#dcdee3]">
            <p class="text-[18px]">Więcej opcji</p>
          </div>
          <div class="wp-block-group group dropdown-filter btn-search mt-[5px] relative bg-primaryRed text-white w-full desktop:w-[140px] h-[62px] flex items-center justify-center gap-[15px] before:content-[``] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#9C0927] before:transition-height before:duration-300 before:ease cursor-pointer">
            <p class="font-bold z-[1] text-white">Szukaj</p>
          </div>
      <?php
          echo '<div class="dropdown-filter defaultPrice hidden">';
          echo '<div class="menu-active">';
          echo '<span>' . get_taxonomy($select_term)->label . '</span> <i class="arrow down"></i>';
          echo '</div>';
          echo '<div class="menu-passive">';
          echo '<i class="btn-close">x</i>';

          $terms_icons = null;

          foreach ($terms_selected as $term) {
            if ($tax === get_term($term)->taxonomy) {
              $is_disabled = (get_term($term)->count === 0) ? 'isDisabled' : '';
              // Choose icons
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
                                <a class="menu-link ' .  esc_attr($is_disabled) . ' ' .  esc_attr($type_multiple) . '" 
                                href="#" data-selected="' . esc_attr(get_term($term)->slug) . '" data-termid="' . esc_attr($term) . '" data-name="' . esc_attr(get_term($term)->name) . '">' .
                esc_html(get_term($term)->name) . ' <span class="count">' . esc_html(get_term($term)->count) . '</span></a></div>';
            }
            $terms_icons = null;
          }
          echo '</div>';
          echo '</div>';
        } else {
          echo '<div class="dropdown-filter">';
          echo '<div class="menu-active">';
          echo '<span>' . get_taxonomy($select_term)->label . '</span> <i class="arrow down"></i>';
          echo '</div>';
          echo '<div class="menu-passive">';
          echo '<i class="btn-close">x</i>';

          $terms_icons = null;
          foreach ($terms_selected as $term) {
            if ($tax === get_term($term)->taxonomy) {

              $is_disabled = (get_term($term)->count === 0) ? 'isDisabled' : '';
              // Choose icons
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
                                <a class="menu-link ' .  esc_attr($is_disabled) . ' ' .  esc_attr($type_multiple) . '" 
                                href="#" data-selected="' . esc_attr(get_term($term)->slug) . '" data-termid="' . esc_attr($term) . '" data-name="' . esc_attr(get_term($term)->name) . '">' .
                esc_html(get_term($term)->name) . ' <span class="count">' . esc_html(get_term($term)->count) . '</span></a></div>';
            }
            $terms_icons = null;
          }
          echo '</div>';
          echo '</div>';
        }
      }
      unset($result_tax);
      ?>
    </div>
    <div class="posts-found">
      <p class="mb-[50px] text-[24px] text-center" data-aos="fade-up" data-aos-offset="30">Znaleziono <?php echo $count - 1; ?> oferty pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń <?php echo wp_count_posts('mieszkania')->publish; ?>)</span></p>

    </div>
  <?php endif; ?>
  <?php do_action("ymc_after_filter_layout_" . $layout_id . '_' . $c_target); ?>
</div>