<?php
if (!defined('ABSPATH')) {
  exit;
}
/** 
 * Template Name: Formularz kontaktowy
 * */
?>

<h2><?php // Example of using WP functionthe_title(); 
    ?></h2>
<table>
  <tbody>
    <tr>
      <th><label for="your-category" onclick="">Category</label></th>
      <td> <?php            // Example of using get_field of ACF with checkbox            $cats = "'".get_field("cat1")."'";            $cats .= " '".get_field("cat2")."'";            $cats .= " '".get_field("cat3")."'";          
            ?> [checkbox your-category id:your-category class:atcf7-form-radio-label exclusive use_label_element <?php echo $cats; ?>] </td>
    </tr>
    <tr>
      <th><label for="your-name" onclick="">Name</label></th>
      <td> [text* your-name id:your-name] </td>
    </tr>
    <tr>
      <th><label for="your-email" onclick="">Mail Address</label></th>
      <td>
        <div> [email* your-email id:your-email ] </div>
      </td>
    </tr>
    <tr>
      <th><label for="your-content" onclick="">Contents</label></th>
      <td> [textarea* your-content x5 id:your-content ] </td>
    </tr>
  </tbody>
</table>
<div>[submit "Submit"]</div>