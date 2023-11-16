<?php
if (!defined('ABSPATH')) {
  exit;
}
/** 
 * Template Name: newsletter
 * */
?>

<div class="newsletter wrapper">
  <div class="leading-[0px] flex">
    <!-- <div> [email* your-email id:your-email ] </div> -->
    <input id="your-email" name="your-email" type="text" placeholder="Email" class="mb-[20px] desktop:w-[370px] h-[60px] bg-white text-white text-[40px] leading-[150%] placeholder:text-[12px] placeholder:font-normal">
    <div>
      <!-- [submit "Submit"] -->
      <button type="submit" class="group relative bg-primaryRed text-white w-[170px] h-[60px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#8e1d33] before:transition-height before:duration-300 before:ease cursor-pointer"><span class="z-[1] relative">Zapisz się</span></button>
    </div>
  </div>
  <div class="flex">
    <input id="check1" cols="50" row="10" name="check1" type="checkbox" />
    <p class="ml-[10px] mb-[20px] w-full text-white text-[14px] leading-[28px]">Wyrażam zgodę na otrzymywanie informacji handlowych w tym marketingowych od PB Górski Sp. z o.o. SKA drogą elektroniczną (za pośrednictwem adresu e-mail). Więcej informacji o administracji danych.Więcej.</p>
  </div>
  <!-- <input type="submit" value="Submit"> -->

</div>