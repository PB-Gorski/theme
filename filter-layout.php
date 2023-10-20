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

      $show_all = apply_filters('ymc_button_show_all_' . $layout_id . '_' . $c_target, __('All', 'ymc-smart-filter'));

      echo '<a class="btn-all" href="#" data-selected="all" data-terms="' . esc_attr($all_terms) . '">' . esc_html($show_all) . '</a>';

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
          echo 'custom cena';
        } else {

          echo '<div class="dropdown-filter">';
          echo '<div class="menu-active">';
          echo '<span>' . get_taxonomy($select_term)->label . '</span> <i class="arrow down"></i>';
          echo '</div>';
          echo '<div class="menu-passive">';
          echo '<i class="btn-close">x</i>';
        }


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

      unset($result_tax);

      ?>



    </div>

    <div class="posts-found"></div>

  <?php endif; ?>

  <?php do_action("ymc_after_filter_layout_" . $layout_id . '_' . $c_target); ?>

</div>