<?php
if (!defined('ABSPATH')) {
  exit;
}
/** 
 * Template Name: newsletter
 * */
?>

<div class="newsletter wrapper">
  <div class="mx-auto desktop:flex text-center">
    <!-- <div> [email* your-email id:your-email ] </div> -->
    <input id="your-email" name="your-email" type="text" placeholder="Adres e-mail" class="input-newsletter mb-[20px] w-[370px] h-[55px] bg-white text-[20px] leading-[150%]">
    <div>
      <!-- [submit "Submit"] -->
      <button type="submit" class="btn-newsletter group relative bg-primaryRed text-white w-[170px] h-[60px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-primaryRed before:transition-height before:duration-300 before:ease cursor-pointer"><span class="z-[1] relative">Zapisz się</span></button>
    </div>
  </div>
  <div class="">
    <p class="ml-[10px] mb-[20px] max-w-[540px] text-white text-[14px] leading-[28px]">Wyrażam zgodę na otrzymywanie informacji handlowych w tym marketingowych od PB Górski Sp. z o.o. SKA drogą elektroniczną (za pośrednictwem adresu e-mail). Więcej informacji o administracji danych. <a href="<?php echo home_url() . '/rodo' ?>">Więcej.</a></p>
  </div>
  <!-- <input type="submit" value="Submit"> -->

</div>