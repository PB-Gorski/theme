<?php if (!defined('ABSPATH')) exit;

//Manual added TODO: Connect

$ymc_filter_layout = 'filter-layout3';
$terms_selected = [  "28" ,  "40" ,  "72" ,  "71" ,  "82" ,  "81" ,  "43" ,  "34" ,  "53" ,  "25" ,  "194" ,  "200" ,  "189" ,  "187" ,  "151" ,  "44" ,  "206" ,  "210" ,  "212" ,  "214" ,  "99" ,  "103" ,  "219" ,  "218" ,  "222" ,  "224" ,  "229" ,  "62" ,  "106" ,  "192" ,  "109" ,  "234" ,  "237" ,  "240" ,  "243" ,  "246" ,  "113" ,  "249" ,  "76" ,  "117" ,  "258" ,  "260" ,  "264" ,  "269" ,  "272" ,  "278" ,  "280" ,  "128" ,  "123" ,  "126" ,  "283" ,  "51" ,  "295" ,  "132" ,  "134" ,  "298" ,  "305" ,  "309" ,  "312" ,  "142" ,  "145" ,  "315" ,  "92" ,  "45" ,  "316" ,  "147" ,  "322" ,  "175" ,  "154" ,  "156" ,  "158" ,  "325" ,  "173" ,  "342" ,  "346" ,  "349" ,  "352" ,  "355" ,  "358" ,  "361" ,  "52" ,  "363" ,  "372" ,  "374" ,  "80" ,  "380" ,  "376" ,  "387" ,  "389" ,  "90" ,  "396" ,  "404" ,  "399" ,  "405" ,  "408" ,  "411" ,  "415" ,  "418" ,  "421" ,  "424" ,  "427" ,  "430" ,  "432" ,  "434" ,  "482" ,  "436" ,  "439" ,  "442" ,  "445" ,  "448" ,  "458" ,  "461" ,  "465" ,  "468" ,  "471" ,  "474" ,  "477" ,  "480" ,  "486" ,  "483" ,  "487" ,  "490" ,  "493" ,  "495" ,  "498" ,  "501" ,  "504" ,  "97" ,  "78" ,  "60" ,  "66" ,  "36" ,  "182" ,  "216" ,  "307" ,  "227" ,  "49" ,  "91" ,  "38" ,  "122" ,  "93" ,  "447" ,  "371" ,  "441" ,  "460" ,  "455" ,  "345" ,  "348" ,  "457" ,  "395" ,  "470" ,  "453" ,  "314" ,  "464" ,  "373" ,  "505" ,  "481" ,  "407" ,  "410" ,  "366" ,  "429" ,  "364" ,  "379" ,  "485" ,  "362" ,  "390" ,  "375" ,  "417" ,  "382" ,  "420" ,  "392" ,  "369" ,  "391" ,  "378" ,  "444" ,  "414" ,  "423" ,  "393" ,  "384" ,  "438" ,  "494" ,  "489" ,  "497" ,  "467" ,  "492" ,  "473" ,  "476" ,  "479" ,  "500" ,  "503" ,  "98" ,  "108" ,  "112" ,  "116" ,  "121" ,  "125" ,  "127" ,  "131" ,  "133" ,  "137" ,  "139" ,  "141" ,  "144" ,  "146" ,  "155" ,  "157" ,  "160" ,  "162" ,  "164" ,  "165" ,  "172" ,  "177" ,  "178" ,  "180" ,  "183" ,  "185" ,  "188" ,  "203" ,  "251" ,  "209" ,  "193" ,  "223" ,  "263" ,  "253" ,  "403" ,  "196" ,  "211" ,  "54" ,  "255" ,  "284" ,  "67" ,  "291" ,  "433" ,  "228" ,  "435" ,  "289" ,  "286" ,  "197" ,  "302" ,  "221" ,  "341" ,  "293" ,  "351" ,  "321" ,  "334" ,  "257" ,  "330" ,  "354" ,  "236" ,  "205" ,  "328" ,  "386" ,  "326" ,  "336" ,  "360" ,  "338" ,  "294" ,  "300" ,  "332" ,  "357" ,  "217" ,  "277" ,  "279" ,  "282" ,  "301" ,  "308" ,  "271" ,  "297" ,  "304" ,  "426" ,  "299" ,  "261" ,  "268" ,  "274" ,  "402" ,  "398" ,  "311" ,  "319" ,  "451"  ];
$c_target = 'filter-layout3';
$id = '1';
$ymc_multiple_filter = '1';

$ymc_sort_terms = 'manual';
$tax_sort = [ "miasto", "inwestycja", "pokoje" , "metraz", "nr" , "pietro" , "termin" , "cena" , "location" , "city", "budynek" ];
?>


<div id="<?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($c_target); ?>" class="filter-layout <?php echo esc_attr($ymc_filter_layout); ?> <?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($id); ?> <?php echo esc_attr($ymc_filter_layout); ?>-<?php echo esc_attr($id); ?>-<?php echo esc_attr($c_target); ?>">

  <?php do_action("ymc_before_filter_layout_" . $id . '_' . $c_target); ?>

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

      $show_all = apply_filters('ymc_button_show_all_' . $id . '_' . $c_target, __('All', 'ymc-smart-filter'));

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

      unset($result_tax);

      ?>

      <div class="selected-items"></div>

    </div>

    <div class="posts-found"></div>

  <?php endif; ?>

  <?php do_action("ymc_after_filter_layout_" . $id . '_' . $c_target); ?>

</div>
