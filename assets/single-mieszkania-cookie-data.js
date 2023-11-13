window.addEventListener("load", function() {
  //  single mieszkania - cookie dla strony o inwestycji lista mieszkan
  if(document.body.classList.contains('single-mieszkania')){
    console.log('single mieszkania');

    let inwestycjaName = document.querySelector('.taxonomy-inwestycja').childNodes[0].innerHTML;
    let btnBackToMieszkaniaList = document.querySelector('.js-backToList');

    console.log('Strona inwestycji: ',inwestycjaName);

    document.cookie = "filteredTermsFromCookies=72;";

    btnBackToMieszkaniaList.href = window.location.origin + '/pl/o-inwestycji-osiedle-srebrniki/lista-mieszkan-osiedle-srebrniki/'


  
  
  
  
  
  
  }// end if
  


});
