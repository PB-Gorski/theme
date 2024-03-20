// window.addEventListener("load", function () {
  // if (document.querySelector('.ymc-smart-filter-container')){
  //   // removing items from arr
  //   function removeItemFromArr(arr, value) {
  //     let i = 0;
  //     while (i < arr.length) {
  //       if (arr[i] === value) {
  //         arr.splice(i, 1);
  //       } else {
  //         ++i;
  //       };
  //     };
  //     return arr;
  //   };
  //   // ---------

  //   // let passiveOptionsArr = document.querySelectorAll(".menu-link");
  //   let allOptionsPassiveArr = document.querySelectorAll('.menu-link');
  //   let miastoOptionsPassiveLinkArr = [
  //     document.querySelector('.item-gdansk').childNodes[1],
  //     document.querySelector('.item-gdynia').childNodes[1]
  //   ];
  //   let inwestycjaOptionsPassiveLinkArr = [
  //     document.querySelector('.item-osiedle-srebrniki').childNodes[1],
  //     document.querySelector('.item-sukiennicza-19a').childNodes[1],
  //     document.querySelector('.item-sw-piotra').childNodes[1],
  //     document.querySelector('.item-torunska-16').childNodes[1],
  //     document.querySelector('.item-wiezycka-folwark').childNodes[1],
  //   ];
  //   let miastoPassiveArr = document.querySelectorAll('.dropdown-filter')[0].querySelectorAll('.menu-passive__item');
  //   let inwestycjePassiveArr = document.querySelectorAll('.dropdown-filter')[1].querySelectorAll('.menu-passive__item');
  //   let pokojePassiveArr = document.querySelectorAll('.dropdown-filter')[2].querySelectorAll('.menu-passive__item');
  //   let choosenFilterFieldsArr = [];
  //   let dynamicFilterActive = false;
  //   let dynamicFilterMiastoActive = false;
  //   let dynamicFilterInwestycaActive = false;
  //   let dynamicFilterPokojeActive = false;

  //   // ------------------------------------------------------------
  //   /*
  //     gdynia(termid: 40) - inwestycje: sw piotr (71)
  //     gdansk(termid: 28) - inwestycje: osiedle srebrniki (72), sukiennicza 19 (677), torunska 16 (82), wiezycka folwark (81), pokoje: 1,2,3,4
  //     reszta inwestycji ma dodane termid-1,2,3 zeby tylko były wypełnione
  //   */

  //   // adding dependencies into html for dynamic tests
  //   allOptionsPassiveArr.forEach(item =>{
  //     if (item.dataset.name == 'Św. Piotra'){
  //       item.dataset.dependencies = '{"dependencies":[{"termId":"40"},{"termId":"640"},{"termId":"641"}]}';
  //       swPiotrOption = item;
  //     }else if(item.dataset.name != 'Św. Piotra'){
  //       item.dataset.dependencies = '{"dependencies":[{"termId":"1"},{"termId":"2"},{"termId":"3"}]}';
  //     };

  //     if (item.dataset.name == 'Osiedle Srebrniki' || item.dataset.name == 'Sukiennicza 19A' || item.dataset.name == 'Toruńska 16' || item.dataset.name == 'Wieżycka Folwark'){
  //       item.dataset.dependencies = '{"dependencies":[{"termId":"28"},{"termId":"640"},{"termId":"641"}]}';
  //     };

  //     if (item.dataset.name == 'Gdynia'){
  //       item.dataset.dependencies = '{"dependencies":[{"termId":"71"},{"termId":"640"},{"termId":"641"},{"termId":"642"},{"termId":"643"}]}';
  //     }
  //     if(item.dataset.name == 'Gdańsk'){
  //       item.dataset.dependencies = '{"dependencies":[{"termId":"72"},{"termId":"81"},{"termId":"82"},{"termId":"677"},{"termId":"640"},{"termId":"641"},{"termId":"642"},{"termId":"643"}]}';
  //     };
  //     if(item.dataset.name == '1' || item.dataset.name == '2' || item.dataset.name == '3' || item.dataset.name == '4'){
  //       item.dataset.dependencies = '{"dependencies":[{"termId":"28"}, {"termId":"40"}]}';
  //     };
  //   });
  //   // ------------------------------------------------------------

  //   // getting id of choosen city
  //   function getChoosenSingleId(item){
  //     // city single choice
  //     if (item.classList.contains('active')){
  //       choosenFilterFieldsArr = [];
  //       choosenFilterFieldsArr = ((item.dataset.termid));
  //     }else{
  //       choosenFilterFieldsArr = [];
            
  //       // cleaning inwestycje list active fileds
  //       for(let i = 3 ; i < inwestycjePassiveArr.length-1 ; i++){
  //         inwestycjePassiveArr[i]?.classList.remove('hidden');
  //       }
  //     };
  //     return choosenFilterFieldsArr;
  //   };

  //   function isDynamicFilterActive(){
  //     // checking if dynamic filter is running with choosen city
  //     miastoPassiveArr.forEach(item =>{
  //       if ( typeof item.childNodes[1] !== 'undefined' && item.childNodes[1].classList.contains('active')){
  //         dynamicFilterMiastoActive = true;
  //       }else if(!item.childNodes[1]?.classList.contains('active')){
  //         let isDynamicFilterActiveTimeout = window.setInterval(function(){
  //           dynamicFilterMiastoActive = false;
  //           clearInterval(isDynamicFilterActiveTimeout);
  //           },400);
  //       };
  //     });

  //     // checking if dynamic filter is running with choosen inwestycja
  //     inwestycjePassiveArr.forEach(item =>{
  //       if ( typeof item.childNodes[1] !== 'undefined' && item.childNodes[1].classList.contains('active')){
  //         dynamicFilterInwestycaActive = true;
  //       }else if(!item.childNodes[1]?.classList.contains('active')){
  //         let isDynamicFilterActiveTimeout = window.setInterval(function(){
  //           dynamicFilterInwestycaActive = false;
  //           clearInterval(isDynamicFilterActiveTimeout);
  //           },400);
  //       };
  //     });

  //     // checking if dynamic filter is running with choosen pokoje
  //     pokojePassiveArr.forEach(item =>{
  //       if ( typeof item.childNodes[1] !== 'undefined' && item.childNodes[1].classList.contains('active')){
  //         dynamicFilterPokojeActive = true;
  //       }else if(!item.childNodes[1]?.classList.contains('active')){
  //         let isDynamicFilterActiveTimeout = window.setInterval(function(){
  //           dynamicFilterPokojeActive = false;
  //           clearInterval(isDynamicFilterActiveTimeout);
  //           },400);
  //       };
  //     });
  //   };

  //   // searching for id's dependencies and marking items with connected id (miasto -> inwestycje)
  //   function checkInwestycjeForDependenciesID(item){
  //     // cleaning when choosen city
  //     let inwestycjeDependenciesArr = [];
  //     if (item.dataset.name == 'Gdynia' || item.dataset.name == 'Gdańsk'){
  //       inwestycjePassiveArr.forEach(item => {
  //         if (item.childNodes[1] != undefined){
  //           item?.classList.remove('dynamic-active');
  //         };
  //       });
  //     }

  //     if(dynamicFilterMiastoActive){
  //       inwestycjePassiveArr.forEach(item => {
  //         if (item.childNodes[1] != undefined){
  //           // all dependencies array
  //           inwestycjeDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);

  //           // cleaning marked items in filter list
  //           if(dynamicFilterMiastoActive){
  //             item?.classList.remove('hidden');
  //           };
  //         };
  //       });

  //       // searching and marking items with the same dependencies
  //       for (let i = 0 ; i < inwestycjeDependenciesArr.length ; i++){
  //         for (let j = 0 ;  j < inwestycjeDependenciesArr[i].length ; j++){
  //           if (+inwestycjeDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
  //             inwestycjePassiveArr[i].classList.add('dynamic-active');
  //           }else if(+inwestycjeDependenciesArr[i][j].termId != +choosenFilterFieldsArr){
  //             setTimeout(() => {
  //               if(!inwestycjePassiveArr[i].classList.contains('dynamic-active')){
  //                 // cleaning option without dependencies
  //                 inwestycjePassiveArr[i].classList.add('hidden');
  //               };
  //             }, 300);
  //           };
  //         };
  //       };
  //     };
  //   };

  //   // searching for id's dependencies and marking items with connected id (inwestycje -> misto)
  //   function checkMiastoForDependenciesID(item){
  //     // cleaning when choosen inwestyjca
  //     let miastoDependenciesArr = [];
  //     if (item.dataset.name == 'Św. Piotra' || item.dataset.name == 'Osiedle Srebrniki'){
  //       miastoPassiveArr.forEach(item => {
  //         if (item.childNodes[1] != undefined){
  //           item?.classList.remove('dynamic-active');
  //           item?.classList.remove('hidden');
  //         };
  //       });
  //     }

  //     if(dynamicFilterInwestycaActive){
  //       miastoPassiveArr.forEach(item => {
  //         if (item.childNodes[1] != undefined){
  //           // all dependencies array
  //           miastoDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);

  //           // cleaning marked items in filter list
  //           if(dynamicFilterInwestycaActive){
  //             item?.classList.remove('hidden');
  //           };
  //         };
  //       });

  //       // searching and marking items with the same dependencies
  //       for (let i = 0 ; i < miastoDependenciesArr.length ; i++){
  //         for (let j = 0 ;  j < miastoDependenciesArr[i].length ; j++){
  //           if (+miastoDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
  //             miastoPassiveArr[i].classList.add('dynamic-active');
  //           }else if(+miastoDependenciesArr[i][j].termId != +choosenFilterFieldsArr){
  //             setTimeout(() => {
  //               if(!miastoPassiveArr[i].classList.contains('dynamic-active')){
  //                 // cleaning option without dependencies
  //                 miastoPassiveArr[i].classList.add('hidden');
  //               };
  //             }, 300);
  //           };
  //         };
  //       };
  //     };
  //   };

  //   // searching for id's dependencies and marking items with connected id (miasto -> pokoje)
  //   function checkPokojeForDependenciesID(item){
  //     // cleaning when choosen city
  //     console.log('pokoje check start');
  //     let pokojeDependenciesArr = [];
  //     if (item.dataset.name == 'Gdynia' || item.dataset.name == 'Gdańsk'){
  //       pokojePassiveArr.forEach(item => {
  //         if (item.childNodes[1] != undefined){
  //           item?.classList.remove('dynamic-active');
  //           item?.classList.remove('hidden');
  //         };
  //       });
  //     };

  //     if(dynamicFilterMiastoActive){
  //       console.log('dynamicFilterPokojeActive');
  //       pokojePassiveArr.forEach(item => {
  //         if (item.childNodes[1] != undefined){
  //           // all dependencies array
  //           pokojeDependenciesArr.push(JSON.parse(item.childNodes[1].dataset.dependencies).dependencies);

  //           // cleaning marked items in filter list
  //           if(dynamicFilterMiastoActive){
  //             item?.classList.remove('hidden');
  //           };
  //         };
  //       });

  //       // searching and marking items with the same dependencies
  //       for (let i = 0 ; i < pokojeDependenciesArr.length ; i++){
  //         for (let j = 0 ;  j < pokojeDependenciesArr[i].length ; j++){
  //           if (+pokojeDependenciesArr[i][j].termId == +choosenFilterFieldsArr){
  //             pokojePassiveArr[i].classList.add('dynamic-active');
  //           }else if(+pokojeDependenciesArr[i][j].termId != +choosenFilterFieldsArr){
  //             setTimeout(() => {
  //               if(!pokojePassiveArr[i].classList.contains('dynamic-active')){
  //                 // cleaning option without dependencies
  //                 pokojePassiveArr[i].classList.add('hidden');
  //               };
  //             }, 300);
  //           };
  //         };
  //       };
  //     };
  //   };
    

    
  //   // old
  //   // allOptionsPassiveArr.forEach(item => {
  //   //   // set timeout / interval bo klasa active na pozycji z listy pojawia sie dopiero po kliknięciu na nią
  //   //   item.addEventListener('click', () => {
  //   //     let runDynamicFilters = window.setInterval(function(){
  //   //       isDynamicFilterActive();
  //   //       choosenFilterFieldsArr = +getChoosenSingleId(item);
  //   //       checkInwestycjeForDependenciesID(item);
  //   //       checkMiastoForDependenciesID(item);

  //   //       clearInterval(runDynamicFilters);
  //   //       },400);
  //   //   });
  //   // });

  //   // party begin
  //   miastoOptionsPassiveLinkArr.forEach(item => {
  //     // set timeout / interval bo klasa active na pozycji z listy pojawia sie dopiero po kliknięciu na nią
  //     item.addEventListener('click', () => {
  //       let runDynamicFilters = window.setInterval(function(){
  //         isDynamicFilterActive();
  //           choosenFilterFieldsArr = +getChoosenSingleId(item);
  //           checkInwestycjeForDependenciesID(item);
  //           checkPokojeForDependenciesID(item);

  //           clearInterval(runDynamicFilters);
  //       },400);
  //     });
     
  //   });


  //   let isMiastoActive = false;
  //   inwestycjaOptionsPassiveLinkArr.forEach(item => {      
  //     item.addEventListener('click', () => {
  //       miastoOptionsPassiveLinkArr.forEach(item => {
  //         if(!item.classList.contains('active')){
  //           isMiastoActive = true;
  //         } else{
  //           isMiastoActive = false;

  //         };
  //       });

  //       if(isMiastoActive){
  //         // set timeout / interval bo klasa active na pozycji z listy pojawia sie dopiero po kliknięciu na nią
  //         let runDynamicFilters = window.setInterval(function(){
  //           isDynamicFilterActive();
  //           choosenFilterFieldsArr = +getChoosenSingleId(item);
  //           checkMiastoForDependenciesID(item);

  //           clearInterval(runDynamicFilters);
  //           },400);
  //         };
  //     });
  //   });
  // };
// });



window.addEventListener('load',function(){

  if (!document.querySelector('.ymc-smart-filter-container')) return

  // Miasta:
  // 28 - Gdańsk
  // 40 - Gdynia
  // 681 - Gliwice
  // 
  // Inwestycje:
  // 71 - Sw Piotra
  // 72 - Srebrniki
  // 677 - Sukiennicza
  // 82 - Torunska
  // 81 - Wiezycka
  // 680 - Zatorze
  // 682 - Zatorze2

  const cityDependencies = {
    28: [72,677,82,81],
    40: [71],
    681: [680,682]
  }

  const citiesIds = [28,40,681];
  const investmentsIds = [71,72,677,82,81,680,682];

  initDependenciesWatch(cityDependencies,investmentsIds)

})

function initDependenciesWatch(dependencies,affectedIds) {
  const dependenciesIds = Object.keys(dependencies)
  dependenciesIds.forEach(id => {
    getTargetByTermId(id)?.addEventListener('click',()=>{
      hideByIds(affectedIds);

      setTimeout(()=>{
        const activeIds = dependenciesIds.filter(dependencyId => getMenuItemByTermId(dependencyId )?.classList.contains('active')) 
        activeIds.forEach(activeDependencyId => {
          const affectedIdsVisible = dependencies[activeDependencyId]
          showByIds(affectedIdsVisible)
        })
      },100)

    })
  })
}

function getMenuItemByTermId(id){
  return getTargetByTermId(id)?.parentElement
}

function getTargetByTermId(id){
  return document.querySelector(`[data-termid='${id}']`)
}

function hideByIds(idArray){
  setVisibilityByIds(idArray,false)
}

function showByIds(idArray){
  setVisibilityByIds(idArray,true)
}

function setVisibilityByIds(idArray,hidden){
  idArray.forEach(id => {
    const item = getMenuItemByTermId(id)
    if (item) hidden ? item.classList.remove('hidden') : item.classList.add('hidden') 
  })
}