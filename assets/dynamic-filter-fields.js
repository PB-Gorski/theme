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

    // dodawanie zaleznosci dla testów
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

    SwPiotraDependenciesArr = JSON.parse(swPiotrOption.dataset.dependencies).dependencies;
    console.log('SwPiotraDependenciesArr: ', SwPiotraDependenciesArr);

    function getChoosenCityId(item){
      // let activeIds = window.setInterval(function(){
        // console.log('start: getChoosenCityId');
        
        if (item.classList.contains('active')){
          choosenFilterFieldsArr = [];
          choosenFilterFieldsArr = ((item.dataset.termid));
        };
        // console.log('choosenFilterFieldsArr: ', +choosenFilterFieldsArr);
        // clearInterval(activeIds);
      // },100);
      // console.log('end: getChoosenCityId');
      return choosenFilterFieldsArr;
    };

    function checkInwestycjeForDependenciesID(){
      console.log('start: checkInwestycjeForDependenciesID');
      let inwestycjeDependenciesArr = [];
      let newArr = [];
      inwestycjePassiveArr.forEach(item => {
        if (item.childNodes[1] != undefined){
          inwestycjeDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);
        };
      });

      for (let i = 0 ; i < inwestycjeDependenciesArr.length ; i++){
        for (let j = 0 ;  j < inwestycjeDependenciesArr[i].length ; j++){
          if (+inwestycjeDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
            console.log(+inwestycjeDependenciesArr[i][j].termId);
            console.log('matched item:: ', inwestycjePassiveArr[i+3]);
            inwestycjePassiveArr[i+3].classList.remove('bg-yellow-500');
            inwestycjePassiveArr[i+3].classList.remove('bg-green-500');
            inwestycjePassiveArr[i+3].classList.add('bg-green-500', 'dynamic-active','hover:bg-green-600');
          }else if(+inwestycjeDependenciesArr[i][j].termId != +choosenFilterFieldsArr){
            if(!inwestycjePassiveArr[i+3].classList.contains('dynamic-active'))
            // inwestycjePassiveArr[i+3].classList.remove('dynamic-active');
            inwestycjePassiveArr[i+3].classList.remove('bg-green-500');
            // inwestycjePassiveArr[i+3].classList.add('bg-yellow-500');
            console.log('!= termid: ', inwestycjePassiveArr[i+3]);
            // inwestycjePassiveArr[i+3].style.background = 'red';
            // inwestycjePassiveArr[i+3].classList.add('bg-red-500');
          };
        };
      };

      passiveOptionsArr.forEach(item => {
        if(!item.parentNode.classList.contains('dynamic-active')){
          // console.log('item without dynamic-active: ', item);
          item.parentNode.classList.remove('bg-green-500');
          item.parentNode.classList.add('bg-yellow-500');
        };
      });
      inwestycjePassiveArr.forEach(item => {
        if(!item.parentNode.classList.contains('dynamic-active')){
          // console.log('inwestycjePassiveArr removing: ', item);
          item.parentNode.classList.remove('bg-green-500');
          // item.parentNode.classList.add('bg-yellow-500');
        };
      });
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