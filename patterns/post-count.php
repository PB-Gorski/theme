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
    <option value="pokoje">pokoje</option>
  </select>
  <select name="term">
    <option value="Gdansk">Gdansk</option>
    <option value="Gdynia">Gdynia</option>
  </select>
  <input type="submit" name="submit" value="Szukaj" />
</form>

<?php
if (isset($_POST['submit'])) {
  $selected_val1 = $_POST['tax'];
}
if (isset($_POST['submit'])) {
  $selected_val2 = $_POST['term'];
}


// $taxonomy = $selected_val1 == true ?  $selected_val1 : 'miasto';
$term = $selected_val2 == true ? $selected_val2 : '';

$query = new WP_Query(array(
  'miasto' => $term,
  'post_status' => 'publish'
));
$count = $query->found_posts;
?>



<!-- wp:paragraph -->
<p class="mb-[50px] text-[24px] text-center" data-aos="fade-up" data-aos-offset="30">Znaleziono <?php echo $count - 1; ?> oferty pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń <?php echo wp_count_posts('mieszkania')->publish; ?>)</span></p>
<!-- /wp:paragraph -->