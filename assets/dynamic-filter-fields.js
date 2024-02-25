// window.addEventListener("load", function () {
  if (document.querySelector('.ymc-smart-filter-container')){
    console.log('dynamic-filter-fields.js');
    console.clear();
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
    let inwestycjePassiveArr = document.querySelectorAll('.dropdown-filter')[1].childNodes[5].childNodes
    let swPiotrOption;
    let SwPiotraDependenciesArr;
    let passiveOptionsArr = document.querySelectorAll(".menu-link");
    let choosenFilterFieldsArr = [];

    // adding dependencies for dynamic tests
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

    // getting dependencies from html
    SwPiotraDependenciesArr = JSON.parse(swPiotrOption.dataset.dependencies).dependencies;

    function getChoosenCityId(item){
      // city single choice
      if (item.classList.contains('active')){
        choosenFilterFieldsArr = [];
        choosenFilterFieldsArr = ((item.dataset.termid));
      };
      return choosenFilterFieldsArr;
    };

    function checkInwestycjeForDependenciesID(){
      let inwestycjeDependenciesArr = [];

      inwestycjePassiveArr.forEach(item => {
        if (item.childNodes[1] != undefined){
          // all dependencies array
          inwestycjeDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);

          // cleaning marked items in filter list
          item?.classList.remove('dynamic-active', 'bg-green-500');
          // item?.classList.remove('bg-green-500');
        };
      });

      // searching and marking same dependencies
      for (let i = 0 ; i < inwestycjeDependenciesArr.length ; i++){
        for (let j = 0 ;  j < inwestycjeDependenciesArr[i].length ; j++){
          if (+inwestycjeDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
            inwestycjePassiveArr[i+3].classList.add('bg-green-500', 'dynamic-active');
          }else if(+inwestycjeDependenciesArr[i][j].termId != +choosenFilterFieldsArr){
            if(!inwestycjePassiveArr[i+3].classList.contains('dynamic-active')){
            };
          };
        };
      };
    };

    passiveOptionsArr.forEach(item => {
      item.addEventListener('click', () => {
        setTimeout(() => {
          choosenFilterFieldsArr = +getChoosenCityId(item);

          checkInwestycjeForDependenciesID();
        }, 200);

      });
    });
  };
// });