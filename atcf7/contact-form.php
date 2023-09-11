<?php
if (!defined('ABSPATH')) {
  exit;
}
/** 
 * Template Name: Formularz kontaktowy
 * */
?>

<table>
  <tbody>
    <tr>
      <th><label for="your-name" onclick="">Name</label></th>
      <td> [text* your-name id:your-name ] </td>
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