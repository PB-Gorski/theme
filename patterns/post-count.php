<?php

/**
 * Title: post-count
 * Slug: post-count
 * Categories: Banner, Front Page
 * Viewport Width: 1280
 */
$numTerms = wp_count_terms('miasto', array(
  'hide_empty' => false,
  'name' => 'Gdansk'
));

echo $numTerms;
echo '<br>';

$query = new WP_Query(array(
  'miasto' => 'Gdynia',
  'post_status' => 'publish'
));

$count = $query->found_posts;
print_r($count);

echo '<br>';

function wp_get_productcat_postcount()
{

  //return $count;
  $args = array(
    'post_type'     => 'mieszkania', //post type, I used 'product'
    'post_status'   => 'publish', // just tried to find all published post
    'posts_per_page' => -1,  //show all
    'tax_query' => array(
      'relation' => 'AND',
      array(
        'taxonomy' => 'miasto',  //taxonomy name  here, I used 'product_cat'
        'field' => 'id',
        'terms' => 'Gdynia'
      )
    )
  );

  $query = new WP_Query($args);

  /*
  echo '<pre>';

  print_r($query->post_count);
  echo '</pre>';
  */

  return (int)$query->post_count;
}
print_r(wp_get_productcat_postcount());
?>

<!-- wp:paragraph -->
<p class="mb-[50px] text-[24px] text-center" data-aos="fade-up" data-aos-offset="30">Znaleziono <?php echo wp_count_posts('mieszkania')->publish; ?> ofert pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń <?php echo wp_count_posts('mieszkania')->publish; ?>)</span></p>
<!-- /wp:paragraph -->