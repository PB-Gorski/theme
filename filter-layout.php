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

        if (get_taxonomy($select_term)->label == 'Cena') {
          echo '
            <div class="dropdown-filter">
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
            <div class="dropdown-filter">
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
            <div class="wp-block-group btn-more dropdown-filter mt-[3px] w-full h-[62px] bg-[#f5f7fa] flex self-start gap-[10px] justify-center items-center cursor-pointer border-b-[3px] border-b-[#dcdee3]">
              <p>
                <svg xmlns="http://www.w3.org/2000/svg" id="icon_filters" width="24" height="24" viewBox="0 0 24 24" class="injected-svg inject-svg icon-filters">
                  <title>icon_filters</title>
                  <path class="line" d="M6 4v16m6-16v16m6-16v16"></path>
                  <circle class="circle" cx="6" cy="10" r="2"></circle>
                  <circle class="circle" cx="12" cy="15" r="2"></circle>
                  <circle class="circle" cx="18" cy="10" r="2"></circle>
                </svg>
              </p>
              <p class="text-[18px]">Więcej opcji</p>
            </div> 
            <div class="wp-block-group group dropdown-filter btn-search mt-[3px] relative bg-primaryRed text-white w-full desktop:w-[140px] h-[62px] flex self-start items-center justify-center gap-[15px] before:content-[``] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#9C0927] before:transition-height before:duration-300 before:ease cursor-pointer">
              <p class=" z-[1]">
                <svg width="16" height="16" class="injected-svg inject-svg icon-search">
                  <defs>
                    <style></style>
                  </defs>
                  <g id="icon_search" fill="none" stroke="#fff" stroke-width="2">
                    <circle cx="6.5" cy="6.5" r="5.5"></circle>
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-4-4"></path>
                  </g>
                </svg>
              </p>
              <p class="font-bold z-[1]">Szukaj</p>
            </div>                          
          ';
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

    <div class="posts-found"></div>

  <?php endif; ?>

  <?php do_action("ymc_after_filter_layout_" . $layout_id . '_' . $c_target); ?>

</div>