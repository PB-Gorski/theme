<?php
if (!defined('ABSPATH')) {
  exit;
}
/** 
 * Template Name: Formularz kontaktowy
 * */
?>

<table class="w-full">
  <tbody>
    <tr class="">
      <th><label for="your-name" onclick=""></label></th>
      <td>
        <!-- [text* your-name id:your-name ] -->
        <input id="your-name" name="your-name" type="text" placeholder="Imię i nazwisko" class="px-[15px] py-[10px] mb-[10px] w-[500px] w-full h-[60px] text-[#2e384d] placeholder:text-[#757575] focus:border-white active:border-black drop-shadow-lg">
      </td>
    </tr>
    <tr>
      <th><label for="your-email" onclick=""></label></th>
      <td>
        <!-- <div> [email* your-email id:your-email ] </div> -->
        <input id="your-name" name="your-name" type="text" placeholder="Adres email" class="px-[15px] py-[10px] mb-[10px] w-[500px] w-full h-[60px] text-[#2e384d] placeholder:text-[#757575]">
      </td>
    </tr>
    <tr>
      <th><label for="your-phone" onclick=""></label></th>
      <td>
        <!-- <div> [email* your-email id:your-email ] </div> -->
        <input id="your-phone" name="your-phone" type="text" placeholder="Numer telefonu" class="px-[15px] py-[10px] mb-[10px] w-[500px] w-full h-[60px] text-[#2e384d] placeholder:text-[#757575]">
      </td>
    </tr>
    <tr>
      <th><label for="your-content" onclick=""></label></th>
      <td>
        <!-- [textarea* your-content x5 id:your-content ] -->
        <textarea id="your-name" cols="50" row="10" name="your-name" type="textarea" placeholder="Treść wiadomości" class="px-[15px] py-[10px] mb-[10px] w-[500px] w-full h-[200px] text-[#2e384d] placeholder:text-[#757575]"></textarea>
      </td>
    </tr>
    <tr>
      <th><label for="your-content" onclick=""></label></th>
      <td>
        <!-- [checkbox* your-content x5 id:your-content ] -->
        <input id="check1" cols="50" row="10" name="check1" type="checkbox" class="inline" />
        <label for="check1" class="inline text-[#8a8f99] text-[12px] leading-[18px]"> Wyrażam zgodę na przetwarzanie moich danych osobowych, podanych w formularzu kontaktowym, przez Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku w celu udzielenia odpowiedzi na zapytanie. Podanie danych jest dobrowolne. Oświadczam, że zapoznałem się z klauzulą informacyjną w zakresie ochrony danych osobowych dostępną tutaj</label>
      </td>
    </tr>
    <tr>
      <th><label for="your-content" onclick=""></label></th>
      <td>
        <!-- [checkbox* your-content x5 id:your-content ] -->
        <input id="check2" name="check2" type="checkbox" class="inline" />
        <label for="check2" class="inline text-[#8a8f99] text-[12px] leading-[18px]"> Wyrażam zgodę na przetwarzanie moich danych osobowych, podanych w formularzu kontaktowym, przez Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku w celu przesyłania informacji marketingowych na mój adres email podany w formularzu. Podanie danych jest dobrowolne. Oświadczam, że zapoznałem się z klauzulą informacyjną w zakresie ochrony danych osobowych dostępną tutaj</label>
      </td>
    </tr>
    <tr>
      <th><label for="your-content" onclick=""></label></th>
      <td>
        <p class="text-[#8a8f99] text-[12px] leading-[18px]">Informujemy, że administratorem Państwa danych osobowych podanych w powyższym formularzu jest Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku (80-312) ul. Wita Stwosza 31A/31. Państwa dane przetwarzane będą w celu udzielenia odpowiedzi na zapytanie oraz, w przypadku wyrażenia zgody na cele marketingowe, do przesyłania treści marketingowych, zgodnie z art. 6 ust. 1 lit. a) i b) ogólnego rozporządzenia o ochronie danych osobowych. Udzielona przez Państwa zgoda może zostać cofnięta w dowolnym momencie przez wysłanie wiadomości e-mail na adres iod@pbgorski.pl spod adresu, którego zgoda dotyczy. Pełne informacje o zasadach przetwarzania danych osobowych przez Przedsiębiorstwo Budowlane Górski spółka z ograniczoną odpowiedzialnością spółka komandytowo-akcyjna z siedzibą w Gdańsku dostępne są w zakładce RODO</p>
      </td>
    </tr>
  </tbody>
</table>
<div>
  <!-- [submit "Submit"] -->
  <button type="submit relative bg-[#3d4b66] text-white w-[230px] h-[55px] flex items-center justify-center before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#2e384d] before:transition-height before:duration-300 before:ease cursor-pointer">Wyślij wiadomość</button>
</div>