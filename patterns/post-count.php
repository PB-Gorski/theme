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

if (!$query->have_posts()) {
  while ($query->have_posts()) {
    $query->the_post();
    $postImageUrl = wp_get_attachment_image_src(get_post_thumbnail_id(), 'portrait');
    $counter++;
    the_title();
    echo wp_count_posts();
  }
}

?>

<form action="#" method="post">
  <select name="Color">
    <option value="Red">Red</option>
    <option value="Green">Green</option>
    <option value="Blue">Blue</option>
    <option value="Pink">Pink</option>
    <option value="Yellow">Yellow</option>
  </select>
  <input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
if (isset($_POST['submit'])) {
  $selected_val = $_POST['Color'];  // Storing Selected Value In Variable
  echo "You have selected :" . $selected_val;  // Displaying Selected Value
}
?>

<!-- wp:paragraph -->
<p class="mb-[50px] text-[24px] text-center" data-aos="fade-up" data-aos-offset="30">Znaleziono <?php echo $count - 1; ?> oferty pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń <?php echo wp_count_posts('mieszkania')->publish; ?>)</span></p>
<!-- /wp:paragraph -->