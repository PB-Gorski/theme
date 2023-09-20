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



?>

<form action="#" method="post">
  <select name="tax">
    <option value="miasto">miasto</option>
  </select>
  <select name="term">
    <option value="Gdansk">Gdansk</option>
    <option value="Gdynia">Gdynia</option>
  </select>
  <input type="submit" name="submit" value="Get Selected Values" />
</form>

<?php
if (isset($_POST['submit'])) {
  $selected_val = $_POST['tax'];  // Storing Selected Value In Variable
  echo "You have selected :" . $selected_val1;  // Displaying Selected Value
}
if (isset($_POST['submit'])) {
  $selected_val = $_POST['term'];  // Storing Selected Value In Variable
  echo "You have selected :" . $selected_val2;  // Displaying Selected Value
}

$taxonomy = $selected_val1 ? $selected_val1 : 'miasto';
$term = $selected_val2 ? $selected_val2 : 'Gdynia';

$query = new WP_Query(array(
  $taxonomy => $term,
  'post_status' => 'publish'
));
$count = $query->found_posts;
?>



<!-- wp:paragraph -->
<p class="mb-[50px] text-[24px] text-center" data-aos="fade-up" data-aos-offset="30">Znaleziono <?php echo $count - 1; ?> oferty pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń <?php echo wp_count_posts('mieszkania')->publish; ?>)</span></p>
<!-- /wp:paragraph -->