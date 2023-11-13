window.addEventListener("load", function() {
  //  single mieszkania - cookie dla strony o inwestycji lista mieszkan
  if(document.body.classList.contains('single-mieszkania')){
    console.log('single mieszkania');

    let inwestycjaName = document.querySelector('.taxonomy-inwestycja').childNodes[0].innerHTML;
    let btnBackToMieszkaniaList = document.querySelector('.js-backToList');

    console.log('Strona inwestycji: ',inwestycjaName);




    if(inwestycjaName == 'Osiedle Srebrniki'){
      document.cookie ='filteredTermsFromCookies=72; path=/';
      btnBackToMieszkaniaList.href = window.location.origin + '/pl/o-inwestycji-osiedle-srebrniki/lista-mieszkan-osiedle-srebrniki/';
    }else if(inwestycjaName == 'Św. Piotra'){
      document.cookie ='filteredTermsFromCookies=71; path=/';
      btnBackToMieszkaniaList.href = window.location.origin + '/pl/o-inwestycji-osiedle-srebrniki/lista-mieszkan-osiedle-srebrniki/';
    }else if(inwestycjaName == 'Toruńska 16'){
      document.cookie ='filteredTermsFromCookies=82; path=/';
      btnBackToMieszkaniaList.href = window.location.origin + '/pl/o-inwestycji-osiedle-srebrniki/lista-mieszkan-osiedle-srebrniki/';
    }else if(inwestycjaName == 'Wieżycka Folwark'){
      document.cookie ='filteredTermsFromCookies=81; path=/';
      btnBackToMieszkaniaList.href = window.location.origin + '/pl/o-inwestycji-osiedle-srebrniki/lista-mieszkan-osiedle-srebrniki/';
    }
  
  
  
  
  
  }// end if
  


});
