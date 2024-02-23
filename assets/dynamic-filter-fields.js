// window.addEventListener("load", function () {
  if (document.querySelector('.ymc-smart-filter-container')){
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
    let inwestycjePassiveArr = document.querySelectorAll('.dropdown-filter')[1].childNodes[5].childNodes
    let swPiotrOption;
    let SwPiotraDependenciesArr;
    let passiveOptionsArr = document.querySelectorAll(".menu-link");
    let choosenFilterFieldsArr = [];

    allOptionsPassiveArr.forEach(item =>{
      if (item.dataset.name == 'Św. Piotra'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"40"},{"termId":"640"},{"termId":"641"}]}';
        swPiotrOption = item;
      }else{
        item.dataset.dependencies = '{"dependencies":[{"termId":"1"},{"termId":"2"},{"termId":"3"}]}';
      };

      if (item.dataset.name == 'Zatorze'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"40"},{"termId":"640"},{"termId":"641"}]}';
        swPiotrOption = item;
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

      inwestycjePassiveArr.forEach(item => {
        if (item.childNodes[1] != undefined){
          inwestycjeDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);

          for (let i = 0 ; i < inwestycjeDependenciesArr.length ; i++){
            for (let j = 0 ;  j < inwestycjeDependenciesArr[i].length ; j++){
              if (+inwestycjeDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
                console.log('match: ', item);
              };
            };
          };
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