<?php
if (!defined('ABSPATH')) {
  exit;
}
/**
 * Template Name: Formularz kontaktowy2
 * */
?>

<table class="w-full cta2">
  <tbody>
    <tr class="flex flex-col desktop:flex-row gap-[20px]">
      <td class="w-[100%] desktop:w-[50%] leading-[0px]">
        [text* your-name id:your-name placeholder "Imię i nazwisko"]
        <!-- <input id="your-name" name="your-name" type="text" placeholder="Imię i nazwisko" class="px-[15px] py-[10px] w-[330px] desktop:w-full h-[60px] text-[#2e384d] placeholder:text-[#757575] focus:border-white active:border-black drop-shadow-lg"> -->
        [email* your-email id:your-email placeholder "Adres email"]
        <!-- <input id="your-name" name="your-name" type="text" placeholder="Adres email" class="px-[15px] py-[10px] w-[330px] desktop:w-full h-[60px] text-[#2e384d] placeholder:text-[#757575]"> -->
        [text* your-phone id:your-phone placeholder "Numer telefonu"]
        <!-- <input id="your-phone" name="your-phone" type="text" placeholder="Numer telefonu" class="px-[15px] py-[10px] w-[330px] desktop:w-full h-[60px] text-[#2e384d] placeholder:text-[#757575]"> -->
      </td>
      <td class="w-[100%] desktop:w-[50%]">
        [textarea* your-content id:your-content placeholder "Treść wiadomości"]
        <!-- <textarea id="your-name" cols="50" row="10" name="your-name" type="textarea" placeholder="Treść wiadomości" class="px-[15px] py-[10px] mb-[10px] w-[330px] desktop:w-full h-[240px] text-[#2e384d] placeholder:text-[#757575]"></textarea>  -->
      </td>
    </tr>

    <tr class="w-full">
      <td class="w-full flex">
        <label>
          [acceptance check1]
          <p class="ml-[10px] mb-[20px] w-full text-white text-[12px] leading-[18px]"> Wyrażam zgodę na przetwarzanie moich danych osobowych, podanych w formularzu kontaktowym, przez Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku w celu udzielenia odpowiedzi na zapytanie. Podanie danych jest dobrowolne. Oświadczam, że zapoznałem się z klauzulą informacyjną w zakresie ochrony danych osobowych dostępną tutaj</p>
        </label>
      </td>
    </tr>
    <tr>
      <td class="flex">
        <label>
          [acceptance check2]
          <p class="ml-[10px] text-white text-[12px] leading-[18px]"> Wyrażam zgodę na przetwarzanie moich danych osobowych, podanych w formularzu kontaktowym, przez Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku w celu przesyłania informacji marketingowych na mój adres email podany w formularzu. Podanie danych jest dobrowolne. Oświadczam, że zapoznałem się z klauzulą informacyjną w zakresie ochrony danych osobowych dostępną tutaj</p>
        </label>
      </td>
    </tr>
    <tr>
      <td>
        <p class="ml-[12px] my-[20px] text-white text-[12px] leading-[18px]">Informujemy, że administratorem Państwa danych osobowych podanych w powyższym formularzu jest Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku (80-312) ul. Wita Stwosza 31A/31. Państwa dane przetwarzane będą w celu udzielenia odpowiedzi na zapytanie oraz, w przypadku wyrażenia zgody na cele marketingowe, do przesyłania treści marketingowych, zgodnie z art. 6 ust. 1 lit. a) i b) ogólnego rozporządzenia o ochronie danych osobowych. Udzielona przez Państwa zgoda może zostać cofnięta w dowolnym momencie przez wysłanie wiadomości e-mail na adres iod@pbgorski.pl spod adresu, którego zgoda dotyczy. Pełne informacje o zasadach przetwarzania danych osobowych przez Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku dostępne są w zakładce RODO</p>
      </td>
    </tr>
  </tbody>
</table>
<div>
  <div class="hidden">
    [dynamic_text inwestycja class:hidden readonly "CF7_get_taxonomy taxonomy='inwestycja'"]
    [dynamic_text local class:hidden readonly "CF7_get_post_var key='post_title'"]
  </div>
  [submit "Wyślij wiadomość"]
  <!-- <button type="submit" class="relative mx-auto bg-primaryRed px-[20px] text-white w-fit h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#95102b] before:transition-height before:duration-300 before:ease cursor-pointer" style="border-bottom:3px solid #95102b"><span class=" z-[1] relative">Wyślij</span></button>  -->
</div>