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
    [email* email-newsletter id:email-newsletter]
    <div>
      [submit "Submit"]
    </div>
  </div>
  <label class="flex group" style="max-width:560px">
    [checkbox* checkNewsletter class:inline id:checkNewsletter]<input id="checkNewsletter" cols="50" row="10" name="checkNewsletter" type="checkbox" />
    <p class="ml-[10px] mb-[20px] text-white text-[13px] leading-[28px]">Wyrażam zgodę na otrzymywanie informacji handlowych w tym marketingowych od PB Górski Sp. z o.o. SKA drogą elektroniczną (za pośrednictwem adresu e-mail). <a href="/rodo" class="hover:text-primaryRed">Więcej informacji o administracji danych.</a></p>
  </label>
</div>