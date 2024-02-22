// window.addEventListener("load", function () {
  if (document.querySelector('.ymc-smart-filter-container')){
    console.log('dynamic-filter-fields.js');
    let inwestycjaOptionPassiveArr = document.querySelectorAll('.menu-link');
    let swPiotrOption;

    inwestycjaOptionPassiveArr.forEach(item =>{
      if (item.dataset.name == 'Św. Piotra'){
        item.dataset.dependencies = '{"dependencies":[{"termId":"40"},{"termId":"640"},{"termId":"641"}]}';
        swPiotrOption = item;
      };
    });

    let SwPiotraDependenciesArr = JSON.parse(swPiotrOption.dataset.dependencies).dependencies;

    console.log('SwPiotraDependenciesArr: ', SwPiotraDependenciesArr);

    let passiveOptionsArr = document.querySelectorAll(".menu-link");
    let choosenFilterFieldsArr= [];

    passiveOptionsArr.forEach(item => {
      item.addEventListener('click', () => {
        let activeIds = window.setInterval(function(){
          if (item.classList.contains('active')){
            choosenFilterFieldsArr.push(item.dataset.termid);
            console.log('choosenFilterFieldsArr: ', choosenFilterFieldsArr);
          };
          clearInterval(activeIds);
        },200)

      });
    });
  };
// });