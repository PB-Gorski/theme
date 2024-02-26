// window.addEventListener("load", function () {
  if (document.querySelector('.ymc-smart-filter-container')){
    console.clear();
    console.log('dynamic-filter-fields.js');

    // removing items from arr
    function removeItemFromArr(arr, value) {
      let i = 0;
      while (i < arr.length) {
        if (arr[i] === value) {
          arr.splice(i, 1);
        } else {
          ++i;
        };
      };
      return arr;
    };
    // ---------

    let allOptionsPassiveArr = document.querySelectorAll('.menu-link');
    let miastoPassiveArr = document.querySelectorAll('.dropdown-filter')[0].childNodes[5].childNodes;
    let inwestycjePassiveArr = document.querySelectorAll('.dropdown-filter')[1].childNodes[5].childNodes;
    let swPiotrOption;
    let SwPiotraDependenciesArr;
    let passiveOptionsArr = document.querySelectorAll(".menu-link");
    let choosenFilterFieldsArr = [];

    // ------------------------------------------------------------
    /*
      na testy takie relacje między miastem a inwestycją:
      gdynia(termid: 40) - inwestycje: sw piotr, zatorze, test
      gdansk(termid: 28) - inwestycje: osiedle srebrniki, sukiennicza 19
      reszta inwestycji ma dodane termid-1,2,3 zeby tylko były wypełnione
    */

    // adding dependencies into html for dynamic tests
    allOptionsPassiveArr.forEach(item =>{
      if (item.dataset.name == 'Św. Piotra' || item.dataset.name == 'Zatorze' || item.dataset.name == 'test'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"40"},{"termId":"640"},{"termId":"641"}]}';
        swPiotrOption = item;
      }else if(item.dataset.name != 'Św. Piotra'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"1"},{"termId":"2"},{"termId":"3"}]}';
      };

      if (item.dataset.name == 'Osiedle Srebrniki' || item.dataset.name == 'Sukiennicza 19A'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"28"},{"termId":"640"},{"termId":"641"}]}';
      };
    });
    // ------------------------------------------------------------

    // getting dependencies from html
    SwPiotraDependenciesArr = JSON.parse(swPiotrOption.dataset.dependencies).dependencies;

    // getting id of choosen city
    function getChoosenCityId(item){
      // city single choice
      if (item.classList.contains('active')){
        choosenFilterFieldsArr = [];
        choosenFilterFieldsArr = ((item.dataset.termid));
      }else{
        choosenFilterFieldsArr = [];
        // for now every option cleaning dynamic filtering
        passiveOptionsArr.forEach(item2 => {
          setTimeout(() => {
            item2?.parentNode.classList.remove('dynamic-active', 'hidden');
            // console.log(item2);
          }, 400);
        });
      };
      return choosenFilterFieldsArr;
    };

    let dynamicFilterActive = false;

    // searching for id's dependencies and marking items with connected id
    function checkInwestycjeForDependenciesID(){


      if(dynamicFilterActive){
        let inwestycjeDependenciesArr = [];

 

        inwestycjePassiveArr.forEach(item => {
          if (item.childNodes[1] != undefined){
            // all dependencies array
            inwestycjeDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);

            // cleaning marked items in filter list
            item?.classList.remove('dynamic-active', 'hidden');
          };
        });

        // searching and marking items with the same dependencies
        for (let i = 0 ; i < inwestycjeDependenciesArr.length ; i++){
          for (let j = 0 ;  j < inwestycjeDependenciesArr[i].length ; j++){
            if (+inwestycjeDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
              inwestycjePassiveArr[i+3].classList.add('dynamic-active');
            }else if(+inwestycjeDependenciesArr[i][j].termId != +choosenFilterFieldsArr){
              if(!inwestycjePassiveArr[i+3].classList.contains('dynamic-active')){
                // cleaning option without dependencies
                inwestycjePassiveArr[i+3].classList.add('hidden');
              };
            };
          };
        };

        // cleaning marked items in filter list when no option selected
        console.log('length: ', choosenFilterFieldsArr.length);
        if(choosenFilterFieldsArr.length == 0){
          inwestycjePassiveArr.forEach(item => {
            if (item.childNodes[1] != undefined){
              item?.classList.remove('dynamic-active');
              setTimeout(() => {
                item?.classList.add('test1');
              }, 300);
            };
          });
        };
      };
    };

    // party begin
    passiveOptionsArr.forEach(item => {
      // set timeout / interval bo klasa active na pozycji z listy pojawia sie dopiero po kliknięciu na nią
      item.addEventListener('click', () => {
        let runDynamicFilters = window.setInterval(function(){
          // checking if dynamic filter is running with choosen city
          miastoPassiveArr.forEach(item =>{
            if ( typeof item.childNodes[1] !== 'undefined' && item.childNodes[1].classList.contains('active')){
              console.log('dynamic filter is active');
              dynamicFilterActive = true;
            }else{
              console.log('dynamic filter is not active');

              dynamicFilterActive = false;
            };
          });

          choosenFilterFieldsArr = +getChoosenCityId(item);
          checkInwestycjeForDependenciesID();

          clearInterval(runDynamicFilters);
          },400);

      });
    });
  };
// });