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

    let inwestycjaOptionPassiveArr = document.querySelectorAll('.menu-link');
    let swPiotrOption;
    let SwPiotraDependenciesArr = JSON.parse(swPiotrOption.dataset.dependencies).dependencies;
    let passiveOptionsArr = document.querySelectorAll(".menu-link");
    let choosenFilterFieldsArr= [];

    inwestycjaOptionPassiveArr.forEach(item =>{
      if (item.dataset.name == 'Św. Piotra'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"40"},{"termId":"640"},{"termId":"641"}]}';
        swPiotrOption = item;
      };
    });
    console.log('SwPiotraDependenciesArr: ', SwPiotraDependenciesArr);

    function getChoosenIds(){
      let activeIds = window.setInterval(function(){
        if (item.classList.contains('active')){

          if (choosenFilterFieldsArr.includes(item.dataset.termid)) {
            removeItemFromArr(choosenFilterFieldsArr, item.dataset.termid);
          } else {
            choosenFilterFieldsArr.push((item.dataset.termid));
          };
          
        };
        clearInterval(activeIds);
      },200)
    };

    passiveOptionsArr.forEach(item => {
      item.addEventListener('click', () => {
        getChoosenIds();
        
        console.log('choosenFilterFieldsArr: ', choosenFilterFieldsArr);
      });
    });
  };
// });