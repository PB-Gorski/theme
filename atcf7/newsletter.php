<?php
if (!defined('ABSPATH')) {
  exit;
}
/** 
 * Template Name: newsletter
 * */
?>

<table class="w-full newsletter">
  <tbody>
    <tr class="flex flex-col desktop:flex-row gap-[20px]">
      <td class="w-[100%] desktop:w-[50%] leading-[0px]">
        <!-- <div> [email* your-email id:your-email ] </div> -->
        <input id="your-email" name="your-email" type="text" placeholder="Email" class="w-full mb-[20px] desktop:w-[370px] h-[60px] bg-white text-white text-[40px] leading-[150%]">
      </td>
    </tr>

    <tr class="w-full">
      <td class="w-full flex">
        <input id="check1" cols="50" row="10" name="check1" type="checkbox" class="w-full" />
        <p class="ml-[10px] mb-[20px] w-full text-white text-[12px] leading-[18px]"> Wyrażam zgodę na przetwarzanie moich danych osobowych, podanych w formularzu kontaktowym, przez Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku w celu udzielenia odpowiedzi na zapytanie. Podanie danych jest dobrowolne. Oświadczam, że zapoznałem się z klauzulą informacyjną w zakresie ochrony danych osobowych dostępną tutaj</p>
      </td>
    </tr>
    <input type="submit" value="Submit">
  </tbody>
  <div>
    <!-- [submit "Submit"] -->
    <button type="submit" class="group btn-find-more relative bg-primaryRed text-white w-full desktop:w-[170px] h-[60px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-btnHoverRed before:transition-height before:duration-300 before:ease cursor-pointer"><span class="z-[1] relative">Zapisz się</span></button>
  </div>
</table>