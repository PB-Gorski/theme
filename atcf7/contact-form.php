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
    <tr class="mb-[10px]">
      <th><label for="your-name" onclick="" class="hidden"></label></th>
      <td>
        [text* your-name id:your-name ]
        <input id="your-name" name="your-name" type="text" placeholder="Imię i nazwisko" class="px-[15px] py-[10px] w-[500px] w-full h-[60px] text-[#2e384d]">
      </td>
    </tr>
    <tr>
      <th><label for="your-email" onclick=""></label></th>
      <td>
        <div> [email* your-email id:your-email ] </div>
      </td>
    </tr>
    <tr>
      <th><label for="your-content" onclick=""></label></th>
      <td> [textarea* your-content x5 id:your-content ] </td>
    </tr>
  </tbody>
</table>
<div>[submit "Submit"]</div>