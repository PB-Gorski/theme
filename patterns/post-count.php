<?php

/**
 * Title: post-count
 * Slug: post-count
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */

// $numTerms = wp_count_terms('miasto', array(
//   'hide_empty' => false,
//   'name' => 'Gdansk'
// ));

// echo $numTerms;
// echo '<br>';

$taxonomy = 'miasto';
$term = 'Gdynia';

$query = new WP_Query(array(
  $taxonomy => $term,
  'post_status' => 'publish'
));
$count = $query->found_posts;

function modify_show_count($bool, $current_post_type)
{

  return $bool;
}
add_filter('beautiful_filters_show_empty', 'modify_show_count', 10, 2);

print_r(modify_show_count(true, 'mieszkania'));

?>

<!-- wp:paragraph -->
<p class="mb-[50px] text-[24px] text-center" data-aos="fade-up" data-aos-offset="30">Znaleziono <?php echo $count - 1; ?> oferty pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń <?php echo wp_count_posts('mieszkania')->publish; ?>)</span></p>
<!-- /wp:paragraph -->