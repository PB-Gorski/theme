<?php
if (!defined('ABSPATH')) {
  exit;
}
/**
 * Template Name: newsletter
 * */
?>

<div class="newsletter wrapper">
  <div class="mx-auto desktop:flex justify-center items-start">
    [email* your-email id:your-email]
    <div>
      [submit "Submit"]
    </div>
  </div>
  <label class="flex" style="max-width:560px">
    [checkbox* check1 id:check1]<input id="check1" cols="50" row="10" name="check1" type="checkbox" />
    <p class="ml-[10px] mb-[20px] text-white text-[13px] leading-[28px]">Wyrażam zgodę na otrzymywanie informacji handlowych w tym marketingowych od PB Górski Sp. z o.o. SKA drogą elektroniczną (za pośrednictwem adresu e-mail). <a href="/rodo" class="hover:text-primaryRed">Więcej informacji o administracji danych.</a></p>
  </label>
</div>