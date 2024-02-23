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
        item.dataset.dependencies = '{"dependencies":[{"termId":"0"},{"termId":"0"},{"termId":"0"}]}';
      };
    });

    SwPiotraDependenciesArr = JSON.parse(swPiotrOption.dataset.dependencies).dependencies;
    console.log('SwPiotraDependenciesArr: ', SwPiotraDependenciesArr);

    function getChoosenCityId(item){
      // let activeIds = window.setInterval(function(){
        console.log('start: getChoosenCityId');
        choosenFilterFieldsArr = [];
        if (item.classList.contains('active')){

          // if (choosenFilterFieldsArr.includes(item.dataset.termid)) {
            // removeItemFromArr(choosenFilterFieldsArr, item.dataset.termid);
          // } else {
            choosenFilterFieldsArr = ((item.dataset.termid));
          // };
          
        };
        // console.log('choosenFilterFieldsArr: ', +choosenFilterFieldsArr);
        // clearInterval(activeIds);
      // },200)
    };

    function checkInwestycjeForDependenciesID(){
      console.log('start: checkInwestycjeForDependenciesID');
      let inwestycjeDependenciesArr = [];
      inwestycjePassiveArr.forEach(item => {
        console.log(item.childNodes[1]);
        if (item.childNodes[1] != undefined){

          // console.log('json parse: ', item.childNodes[1].dataset.dependencies);
          // console.log('json parse2: ', JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);
          inwestycjeDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);

          console.log('inwestycjeDependenciesArr: ', inwestycjeDependenciesArr[0]);

          for (let i = 0 ; i < inwestycjeDependenciesArr.length ; i++){
          //  console.log(inwestycjeDependenciesArr[i]);
          for (let j = 0 ;  j < inwestycjeDependenciesArr[i].length ; j++){
            console.log(inwestycjeDependenciesArr[i][j].termId);
            console.log('2before check choosenFilterFieldsArr:', choosenFilterFieldsArr);
            if (+inwestycjeDependenciesArr[i][j].termId == choosenFilterFieldsArr){
              console.log('match: ',i,j);
            };
          };
          };
        };
      });
    };



    passiveOptionsArr.forEach(item => {
      item.addEventListener('click', () => {
        getChoosenCityId(item);
        checkInwestycjeForDependenciesID();

      });
    });
  };
// });