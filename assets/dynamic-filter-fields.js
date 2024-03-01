// window.addEventListener("load", function () {
  if (document.querySelector('.ymc-smart-filter-container')){
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
    let passiveOptionsArr = document.querySelectorAll(".menu-link");
    let choosenFilterFieldsArr = [];
    let dynamicFilterActive = false;

    // ------------------------------------------------------------
    /*
      gdynia(termid: 40) - inwestycje: sw piotr (71)
      gdansk(termid: 28) - inwestycje: osiedle srebrniki (72), sukiennicza 19 (677), torunska 16 (82), wiezycka folwark (81)
      reszta inwestycji ma dodane termid-1,2,3 zeby tylko były wypełnione
    */

    // adding dependencies into html for dynamic tests
    allOptionsPassiveArr.forEach(item =>{
      if (item.dataset.name == 'Św. Piotra'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"40"},{"termId":"640"},{"termId":"641"}]}';
        swPiotrOption = item;
      }else if(item.dataset.name != 'Św. Piotra'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"1"},{"termId":"2"},{"termId":"3"}]}';
      };

      if (item.dataset.name == 'Osiedle Srebrniki' || item.dataset.name == 'Sukiennicza 19A' || item.dataset.name == 'Toruńska 16' || item.dataset.name == 'Wieżycka Folwark'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"28"},{"termId":"640"},{"termId":"641"}]}';
      };

      if (item.dataset.name == 'Gdynia'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"71"},{"termId":"640"},{"termId":"641"}]}';
      }
      if(item.dataset.name == 'Gdańsk'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"72"},{"termId":"81"},{"termId":"82"},{"termId":"677"}]}';
      };
    });
    // ------------------------------------------------------------

    // getting id of choosen city
    function getChoosenSingleId(item){
      // city single choice
      if (item.classList.contains('active')){
        choosenFilterFieldsArr = [];
        choosenFilterFieldsArr = ((item.dataset.termid));
      }else{
        choosenFilterFieldsArr = [];
            
        // cleaning inwestycje list active fileds
        for(let i = 3 ; i < inwestycjePassiveArr.length-1 ; i++){
          inwestycjePassiveArr[i]?.classList.remove('hidden');
        }
      };
      console.log('getChoosenSingleId choosenFilterFieldsArr: ', choosenFilterFieldsArr);
      return choosenFilterFieldsArr;
    };

    function isDynamicFilterActive(){
      // checking if dynamic filter is running with choosen city
      miastoPassiveArr.forEach(item =>{
        if ( typeof item.childNodes[1] !== 'undefined' && item.childNodes[1].classList.contains('active')){
          dynamicFilterActive = true;
        }else if(!item.childNodes[1]?.classList.contains('active')){
          let isDynamicFilterActiveTimeout = window.setInterval(function(){
            dynamicFilterActive = false;
            clearInterval(isDynamicFilterActiveTimeout);
            },400);
        };
      });

      // checking if dynamic filter is running with choosen inwestment
      inwestycjePassiveArr.forEach(item =>{
        if ( typeof item.childNodes[1] !== 'undefined' && item.childNodes[1].classList.contains('active')){
          dynamicFilterActive = true;
        }else if(!item.childNodes[1]?.classList.contains('active')){
          let isDynamicFilterActiveTimeout = window.setInterval(function(){
            dynamicFilterActive = false;
            clearInterval(isDynamicFilterActiveTimeout);
            },400);
        };
      });
    };

    // searching for id's dependencies and marking items with connected id (miasto -> inwestycje)
    function checkInwestycjeForDependenciesID(item){
      // cleaning when choosen city
      let inwestycjeDependenciesArr = [];
      if (item.dataset.name == 'Gdynia' || item.dataset.name == 'Gdańsk'){
        inwestycjePassiveArr.forEach(item => {
          if (item.childNodes[1] != undefined){
            item?.classList.remove('dynamic-active');
          };
        });
      }

      if(dynamicFilterActive){
        inwestycjePassiveArr.forEach(item => {
          if (item.childNodes[1] != undefined){
            // all dependencies array
            inwestycjeDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);

            // cleaning marked items in filter list
            if(dynamicFilterActive){
              item?.classList.remove('hidden');
            };
          };
        });

        // searching and marking items with the same dependencies
        for (let i = 0 ; i < inwestycjeDependenciesArr.length ; i++){
          for (let j = 0 ;  j < inwestycjeDependenciesArr[i].length ; j++){
            if (+inwestycjeDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
              inwestycjePassiveArr[i+3].classList.add('dynamic-active');
            }else if(+inwestycjeDependenciesArr[i][j].termId != +choosenFilterFieldsArr){
              setTimeout(() => {
                if(!inwestycjePassiveArr[i+3].classList.contains('dynamic-active')){
                  // cleaning option without dependencies
                  inwestycjePassiveArr[i+3].classList.add('hidden');
                };
              }, 300);
            };
          };
        };
      };
    };

    // searching for id's dependencies and marking items with connected id (inwestycje -> misto)
    function checkMiastoForDependenciesID(item){
      // cleaning when choosen inwestyjca
      let miastoDependenciesArr = [];
      if (item.dataset.name == 'Św. Piotra' || item.dataset.name == 'Osiedle Srebrniki'){
        miastoPassiveArr.forEach(item => {
          if (item.childNodes[1] != undefined){
            item?.classList.remove('dynamic-active');
            item?.classList.remove('hidden');
            console.log('removed dynamic-active when osiedle choosen');
          };
        });
      }

      // console.log('miastoPassiveArr: ', miastoPassiveArr);
      console.log('dynamicFilterActive: ', dynamicFilterActive);

      if(dynamicFilterActive){
        console.log('if dynamicFilterActive dynamicFilterActive');
        miastoPassiveArr.forEach(item => {
          console.log('forEach start');
          if (item.childNodes[1] != undefined){
            // all dependencies array
            miastoDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);
            // console.log('miastoDependenciesArr: ', miastoDependenciesArr);

            // cleaning marked items in filter list
            if(dynamicFilterActive){
              console.log('remove hidden');
              item?.classList.remove('hidden');
            };
          };
        });

        // searching and marking items with the same dependencies
        for (let i = 0 ; i < miastoDependenciesArr.length ; i++){
          for (let j = 0 ;  j < miastoDependenciesArr[i].length ; j++){
            if (+miastoDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
              miastoPassiveArr[i+3].classList.add('dynamic-active');
              // console.log('miastoPassiveArr[i+3]: ',miastoPassiveArr[i+3]);
            }else if(+miastoDependenciesArr[i][j].termId != +choosenFilterFieldsArr){
              setTimeout(() => {
                if(!miastoPassiveArr[i+3].classList.contains('dynamic-active')){
                  // cleaning option without dependencies
                  console.log('cleaning option without dependencies');
                  miastoPassiveArr[i+3].classList.add('hidden');
                };
              }, 300);
            };
          };
        };
      };
    };

    // party begin
    passiveOptionsArr.forEach(item => {
      // set timeout / interval bo klasa active na pozycji z listy pojawia sie dopiero po kliknięciu na nią
      item.addEventListener('click', () => {
        let runDynamicFilters = window.setInterval(function(){
          isDynamicFilterActive();
          choosenFilterFieldsArr = +getChoosenSingleId(item);
          // checkInwestycjeForDependenciesID(item);
          checkMiastoForDependenciesID(item);

          clearInterval(runDynamicFilters);
          },400);
      });
    });
  };
// });