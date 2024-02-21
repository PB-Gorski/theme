//TODO: Structural refactor and naming convention needed
//TODO: Remove loop to have only one event listener that catch only few elements
//TODO: Remove function from "load" and "click" and "loop" scope for optmisation. Refactor

window.addEventListener("load", function() {
  //  frontpage - filtrowanie i sortowanie listy mieszkan
  if(document.body.classList.contains('home') ||
  document.body.classList.contains('page-parent')){
    // document.querySelector('.btn-search').addEventListener('click',()=>{
    //   document.querySelector('.dropdown__value-min').childNodes[0].innerHTML = document.getElementById('inputPriceMin').value;
    //   document.querySelector('.dropdown__value-max').childNodes[0].innerHTML = document.getElementById('inputPriceMax').value;
    //   runSearchingFrontPage();
    // })

    // console.log('home');

    function deleteAllCookies() {
        const cookies = document.cookie.split(";");

        for (let i = 0; i < cookies.length; i++) {
            const cookie = cookies[i];
            const eqPos = cookie.indexOf("=");
            const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
            document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
        }
    };
    deleteAllCookies();
    document.cookie = "filteredTermsFromCookies=;";
    document.cookie = 'filteredTermsFromCookies=; path=/';
    document.cookie = 'filteredTermsFromCookies=; path=/pl';

    // search more options handle
    const btnMore = document.querySelector('.btn-more');
    const heightAnimation = document.querySelector('.js-heightAnimation');

    btnMore.addEventListener('click',()=>{
      heightAnimation.classList.toggle('expanded');

      heightAnimation.addEventListener('transitionstart', (e)=>{
        if (e.target !== heightAnimation) return
        heightAnimation.classList.add('transitioning')
      })
      heightAnimation.addEventListener('transitionend', (e)=>{
        if (e.target !== heightAnimation) return
        heightAnimation.classList.remove('transitioning')
      })
    });

    // wyszukiwanie mieszkan po filtrach (cena)
    // setting chosen option in active window
    let passiveOptions = document.querySelectorAll('.menu-passive__item');
    let passiveOptionsCustomFilters = document.querySelectorAll('.dropdown__item');
    let choosenOptions =[];
    let tempMiastoArr = [];
    let tempInwestycjaArr = [];
    let tempPokojeArr = [];
    let tempPietroArr = [];
    let tempTerminArr = [];
    let tempInneArr = [];

    passiveOptions.forEach(item => {
      item.addEventListener('click', () => {
        let choosenOptionID = item.childNodes[1].dataset.termid;
        let choosenOption = item.childNodes[1].dataset.termid;
        // let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;
        // let filteredPriceFromFrontPage = runSearchingFrontPage() + ',' + runSearchingMetrazFrontPage();

        function removeItemAll(arr, value) {
          let i = 0;
          while (i < arr.length) {
            if (arr[i] === value) {
              arr.splice(i, 1);
            } else {
              ++i;
            }
          }
          return arr;
        };

        if(choosenOptions.includes(choosenOption)){
          removeItemAll(choosenOptions,choosenOption)
        }else{
          choosenOptions.push(choosenOption)
        };

        // choosenOptions.push(choosenOption)
        // console.log('new arr after check: ', choosenOptions);

        // document.cookie = "filteredTermsFromCookies=" + choosenOptions.join() + filteredPriceFromFrontPage;
        document.cookie = "filteredTermsFromCookies=" + choosenOptions.join() + '; path=/pl';
        // console.log('cookie data: ', document.cookie);

        // dynamic filtr data
        allInvestmentsElements = document.querySelectorAll('.dropdown-filter')[1].childNodes[5].childNodes;
        investIDsArr = [];
        globalCurrentInvestID = 0;
        globalCurrentInvestName = '';
        globalCurrentCityID = 0;
        globalCurrentCityName = '';

        allInvestmentsElements.forEach(el => {
          if (el.childNodes[1] !== undefined) {
            investName = el.childNodes[1].dataset.name
            investID = el.childNodes[1].dataset.termid

            investIDsArr.push(Number(investID))
          };
        });
        // console.log('$$$$$$$$$$$$$ invest arr ids ', investIDsArr);


        // dynamic ymc filter id
        currentYmcFilterID = document.querySelector('.short-code-ymc-filter').childNodes[1].getAttribute('id').replace('ymc-smart-filter-container-','');

        // dynamic term id for city
        allCityElements = document.querySelectorAll('.dropdown-filter')[0].childNodes[5].childNodes;
        cityIDsArr = [];

        allCityElements.forEach(el => {
          if (el.childNodes[1] !== undefined) {
            cityID = el.childNodes[1].dataset.termid
            cityName = el.childNodes[1].dataset.name

            cityIDsArr.push(Number(cityID))
          };
        });

        let choosenMiastoArr = [];
        let choosenInwestycjeCount = 1;
        let choosenPokojeArr = [];
        let choosenPietroArr = [];
        let choosenTempArr = [];
        let choosenInneCount = 1;
        function showActiveFilterName(cookiesSearchedIDs){
          // let miastoArr = [28,40];
          let miastoArr = cityIDsArr;
          // let inwestycjaArr = [72,71,82,81,680];
          let inwestycjaArr = investIDsArr;
          // let pokojeArr = [43,34,53,25];
          let pokojeArr = [640,641,642,643,644,645,646];
          let pietroArr = [36,97,78,60,66];
          let terminArr = [49,91,38,122,93];
          let inneArr = [520,521,522,650];
          let menuActiveSpan = item.parentNode.previousElementSibling.childNodes[1]
          let menuActiveTitle = item.parentNode.previousElementSibling.previousElementSibling.innerHTML.replace(':','').toLowerCase();

          if(miastoArr.includes(+choosenOptionID)){
            // console.log('wybrano z kategorii - miasto');

            if(tempMiastoArr.includes(choosenOptionID)){
              removeItemAll(tempMiastoArr,choosenOptionID);
            }else{
              tempMiastoArr =[];tempMiastoArr.push(choosenOptionID)
            };
            wp.hooks.addAction('ymc_before_loaded_data_1850_8', 'smartfilter', function(class_name, response){
              if (tempMiastoArr.length == 0){menuActiveSpan.innerHTML = 'Wybierz';}
            });

            // setTimeout(() => {
            //   if (tempMiastoArr.length == 0){menuActiveSpan.innerHTML = 'Wybierz';}
            // }, 10);
            menuActiveSpan.innerHTML = menuActiveSpan.innerHTML + choosenMiastoArr.join(', ');
          }else if(inwestycjaArr.includes(+choosenOptionID)){
            // inwestycje
            tempInwestycjaArr.includes(choosenOptionID) ? removeItemAll(tempInwestycjaArr,choosenOptionID) : tempInwestycjaArr.push(choosenOptionID);

            if(tempInwestycjaArr.length > 0 ){choosenInwestycjeCount = tempInwestycjaArr.length;}else if(tempInwestycjaArr.length == 0){choosenInwestycjeCount = 0};

            // console.log('inwestycje count ', choosenInwestycjeCount);

            // menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInwestycjeCount;
            menuActiveSpan.innerHTML = choosenInwestycjeCount == 0 ? 'Wybierz' : 'Wybrano: ' + choosenInwestycjeCount;
          }else if(pokojeArr.includes(+choosenOptionID)){
            // pokoje
            if(tempPokojeArr.includes(choosenOptionID)){removeItemAll(tempPokojeArr,choosenOptionID);}else{tempPokojeArr.push(choosenOptionID)};

            tempPokojeArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){choosenPokojeArr.push(item.childNodes[1].dataset.name)}
              });
            });
            // console.log('342rfdsvcddads: ', choosenPokojeArr.join(', '),'test');
            // menuActiveSpan.innerHTML = 'Wybrano: ' + (choosenPokojeArr.join(', ')!=' ' ? choosenPokojeArr.join(', ') : 'Wybrano: 0');

            menuActiveSpan.innerHTML = (choosenPokojeArr.join(', ')!='' ? choosenPokojeArr.join(', ') : 'Wybierz');
          }else if(pietroArr.includes(+choosenOptionID)){
            // pietro

            if(tempPietroArr.includes(choosenOptionID)){removeItemAll(tempPietroArr,choosenOptionID);}else{tempPietroArr.push(choosenOptionID)};

            tempPietroArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){choosenPietroArr.push(item.childNodes[1].dataset.name)}
              });
            });
            // console.log('test43:',choosenPietroArr.join(', '));
            menuActiveSpan.innerHTML = (choosenPietroArr.join(', ')!='' ? 'Wybrano: ' +  choosenPietroArr.join(', ') : 'Wybierz');
          }else if(terminArr.includes(+choosenOptionID)){
            // termin

            if(tempTerminArr.includes(choosenOptionID)){
              removeItemAll(tempTerminArr,choosenOptionID);
            }else{
              tempTerminArr.push(choosenOptionID)
            };

            menuActiveSpan.innerHTML = tempTerminArr.length == 0 ? 'Wybierz' : `Wybrano: ${tempTerminArr.length}`;

          }else if(inneArr.includes(+choosenOptionID)){
            // inne
            tempInneArr.includes(choosenOptionID) ? removeItemAll(tempInneArr,choosenOptionID) : tempInneArr.push(choosenOptionID);

            if(tempInneArr.length > 0 ){choosenInneCount = tempInneArr.length;}else if(tempInneArr.length == 0){choosenInneCount = 0};

            // menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInneCount;
            menuActiveSpan.innerHTML = choosenInneCount == 0 ? 'Wybierz' : 'Wybrano: ' + choosenInneCount;



            // /old test
            // if(tempInneArr.includes(choosenOptionID)){
            //   removeItemAll(tempInneArr,choosenOptionID);
            // }else{
            //   tempInneArr =[];tempInneArr.push(choosenOptionID)
            // };



            menuActiveSpan.innerHTML = choosenInneCount == 0 ? 'Wybierz' : 'Wybrano: ' + choosenInneCount;
            // console.log('choosenInneCount************:');
            // console.log(choosenInneCount);
          }else{
            // console.log('error');
          };
        };
        showActiveFilterName();
      });
    });


    // passiveOptionsCustomFilters for dropdown but for now we use input value
    // passiveOptionsCustomFilters.forEach(item => {
      document.querySelector('.btn-search').addEventListener('click', () => {
        document.querySelector('.dropdown__value-min').childNodes[0].innerHTML = document.querySelector('.dropdown__value-min').childNodes[1].value == '' ? 0 : document.getElementById('inputPriceMin').value;
        document.querySelector('.dropdown__value-max').childNodes[0].innerHTML = document.querySelector('.dropdown__value-max').childNodes[1].value == '' ? 10000000 : document.getElementById('inputPriceMax').value;
        // runSearchingFrontPage();
        // let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;

        // document.querySelector('.dropdown__value-min').childNodes[0].innerHTML = document.getElementById('inputPriceMin').value;

        let priceMinValueCookie2 = parseInt(document.querySelector('.dropdown__value-min').childNodes[0].innerHTML.split(' ').join(''));

        let priceMaxValueCookie2 = document.querySelector('.dropdown__value-max').childNodes[1].value == '' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max').childNodes[0].innerHTML.split(' ').join(''));

        let metrazMaxValueCookie = document.querySelector('.dropdown__value-max-metraz').innerHTML == 'Max' ? document.querySelector('.dropdown__value-max').childNodes[0].innerHTML = 10000000 : parseInt(document.querySelector('.dropdown__value-max-metraz').childNodes[0].innerHTML.split(' ').join(''));
        let metrazMinValueCookie = parseInt(document.querySelector('.dropdown__value-min-metraz').childNodes[0].innerHTML.split(' ').join(''));

        let filteredPriceFromFrontPage = runSearchingFrontPage() + ',' + runSearchingMetrazFrontPage();
        // console.log('choosenOptions: ');
        // console.log(choosenOptions);
        // console.log('test***',choosenOptions.length != 0 ? (choosenOptions.join() + ',') : '');
        document.cookie = "filteredTermsFromCookies=" + (choosenOptions.length != 0 ? (choosenOptions.join() + ',') : '') + filteredPriceFromFrontPage + '; path=/pl';

        document.cookie = "PriceMinFromCookies=" + priceMinValueCookie2;
        document.cookie = "PriceMaxFromCookies=" + priceMaxValueCookie2;
        document.cookie = "MetrazMinFromCookies=" + metrazMinValueCookie;
        document.cookie = "MetrazMaxFromCookies=" + metrazMaxValueCookie;



        // console.log('document.cookie: ');
        // console.log(document.cookie);
      });
    // });


    // frontpage custom dropdowns handle
    // price selects
    const mainDropDown = document.querySelectorAll('.dropdown__value-price');
    const dropDownList = document.querySelectorAll('.dropdown__list');
    const dropDowns = Array.from(document.querySelectorAll('.dropdown__link'));
    let priceValueArr = [];
    let newArr = [];
    let newArrPriceHTMLList = [];
    let target;

    mainDropDown.forEach(dropDownEl =>{
      dropDownEl.addEventListener('click', (e) =>{
        if(e.target.nextElementSibling){
          // console.log('span');
          e.target.nextElementSibling.classList.toggle('dropdown__list_active');
          e.target.classList.toggle('toggle-x');
        }else if(e.target.parentNode.nextElementSibling){
          // console.log('span container');
          e.target.parentNode.nextElementSibling.classList.toggle('dropdown__list_active');
          e.target.classList.toggle('toggle-x');
        }
      });
    });



    function choise(e){
      e.preventDefault();
      target = e.target.textContent;
      e.target.parentNode.parentNode.previousElementSibling.textContent = '';
      let spanTarget = document.createElement("span");
      spanTarget.innerText = target;
      e.target.parentNode.parentNode.previousElementSibling.appendChild(spanTarget);

      // let filteredPriceFromFrontPage = runSearchingFrontPage();

      dropDownList.forEach(el =>{
        if(el.classList.contains('dropdown__list_active')){
          el.classList.remove('dropdown__list_active')
        };
      });
    };


    // dropDowns.forEach(item => {
    //   item.addEventListener('click', choise)
    // });

    dropDowns.forEach(item => {
      item.addEventListener('click',(e)=>{
        choise(e);
        item.parentNode.parentNode.previousElementSibling.classList.remove('toggle-x');
      });
    });

    function runSearchingFrontPage(){
      priceValueArr = [];
      newArr = [];
      newArrPriceHTMLList = [];


      // document.querySelector('.dropdown__value-min').childNodes[0].innerHTML = document.getElementById('inputPriceMin').value;

      // document.querySelector('.dropdown__value-max').childNodes[0].innerHTML = document.getElementById('inputPriceMax').value;

      const dropDownFilters = document.querySelectorAll(".dropdown-filter");
      let priceValueArrNodeList = dropDownFilters[5].childNodes[1].childNodes;

      priceMinValue = parseInt(document.querySelector('.dropdown__value-min').childNodes[0].innerHTML.split(' ').join(''));

      priceMaxValue = document.querySelector('.dropdown__value-max').childNodes[0].innerHTML == 'Max' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max').childNodes[0].innerHTML.split(' ').join(''));

      // console.log('no spaces', priceMinValue, priceMaxValue);

      for (i = 1 ; i < priceValueArrNodeList.length ; i++){
        priceValueArr.push(parseInt(priceValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join('')));
        priceValueArrNodeList[i].childNodes[1].dataset.name = parseInt(priceValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join(''));
      }

      // console.log('3123 new 4312341 price valueArr: ',priceValueArr);

      priceValueArr.forEach(priceValue => {
        priceMaxValue.isNaN ? priceMaxValue = 10000000 : priceMaxValue = priceMaxValue;
        // console.log('price max value ',priceMaxValue);
        // console.log('price min value3123123 ',priceMinValue);
        if (priceValue <= priceMaxValue && priceValue >= priceMinValue){
          newArr.push(priceValue);
        };
      });
      // console.log('prices from range: ', priceValueArr);

      // console.log('new price arr: ',newArr);

      newArr.forEach(elem => {
        for(j = 2 ; j < priceValueArrNodeList.length ; j++){
          if (parseInt(priceValueArrNodeList[j].childNodes[1].dataset.name) == elem){
            newArrPriceHTMLList.push(priceValueArrNodeList[j].childNodes[1]);
          };
        };
      });

      let filteredPriceTermsID = [];
      // console.log('filtered new arr html elements: ', newArrPriceHTMLList);

      newArrPriceHTMLList.forEach(el2 =>{
        filteredPriceTermsID.push(el2.dataset.termid);
      });

      if(document.querySelectorAll('.item-zapytaj').length && filteredPriceTermsID.length){
      const customStaticPriceId = 677 // cena 'Zapytaj'
      filteredPriceTermsID.push(customStaticPriceId)
      }

      // console.log(filteredPriceTermsID.join(','));

      for (i = 2 ; i < priceValueArrNodeList.length ; i++){
        if(priceValueArrNodeList[i].childNodes[1].classList.contains('active')){
          priceValueArrNodeList[i].childNodes[1].classList.remove('active');
          // console.log(priceValueArrNodeList[i].childNodes[1]);
        }
      }

      priceValueArr = [];
      newArr = [];
      newArrPriceHTMLList = [];
      priceValueArrNodeList = [];

      return filteredPriceTermsID;
    };
    // console.log(filteredPriceFromFrontPage);


    // -------------------------------------------------------------------------------------

    // metraz
    // deleteAllCookies();
    let choosenOptionsMetraz =[]

    // metraz selects
    const mainDropDownMetraz = document.querySelectorAll('.dropdown__value-metraz');
    const dropDownListMetraz = document.querySelectorAll('.dropdown__list-metraz');
    const dropDownsMetraz = Array.from(document.querySelectorAll('.dropdown__link-metraz'));
    let metrazValueArr = [];
    let newArrMetraz = [];
    let newArrHTMLListMetraz = [];
    let targetMetraz;

    mainDropDownMetraz.forEach(dropDownEl =>{
      dropDownEl.addEventListener('click', (e) =>{
        if(e.target.nextElementSibling){
          // console.log(e.target);
          // console.log('dropdown span');
          e.target.nextElementSibling.classList.toggle('dropdown__list_active-metraz');
          e.target.classList.toggle('toggle-x');
        }
        else if(e.target.parentNode.nextElementSibling){
          // console.log('dropdown span container');
          e.target.parentNode.nextElementSibling.classList.toggle('dropdown__list_active-metraz');
        }
      });
    });



    function choiseMetraz(e){
      e.preventDefault();
      targetMetraz = e.target.textContent;
      e.target.parentNode.parentNode.previousElementSibling.textContent = '';
      let spanTargetMetraz = document.createElement("span");
      spanTargetMetraz.innerText = targetMetraz;
      e.target.parentNode.parentNode.previousElementSibling.appendChild(spanTargetMetraz);

      dropDownListMetraz.forEach(el =>{
        if(el.classList.contains('dropdown__list_active-metraz')){
          el.classList.remove('dropdown__list_active-metraz')
        };
      });
    };
    // dropDownsMetraz.forEach(item => {
    //   item.addEventListener('click', choiseMetraz)
    // });
    dropDownsMetraz.forEach(item => {
      item.addEventListener('click', (e) => {
        choiseMetraz(e);
        item.parentNode.parentNode.previousElementSibling.classList.remove('toggle-x');
      })
    });

    function runSearchingMetrazFrontPage(){
      metrazValueArr = [];
      newArr = [];
      newArrHTMLList = [];

      const dropDownFilters = document.querySelectorAll(".dropdown-filter");
      let metrazValueArrNodeList = dropDownFilters[8].childNodes[1].childNodes;
      metrazMinValue = parseInt(document.querySelector('.dropdown__value-min-metraz').childNodes[0].innerHTML.split(' ').join(''));
      metrazMaxValue = document.querySelector('.dropdown__value-max-metraz').childNodes[0].innerHTML == 'Max' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max-metraz').childNodes[0].innerHTML.split(' ').join(''));

      // console.log('no spaces', metrazMinValue,metrazMaxValue);

      for (i = 1 ; i < metrazValueArrNodeList.length ; i++){
        metrazValueArr.push(parseInt(metrazValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join('')));
        metrazValueArrNodeList[i].childNodes[1].dataset.name = parseInt(metrazValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join(''));
      }

      metrazValueArr.forEach(priceValue => {
        metrazMaxValue.isNaN ? metrazMaxValue = 10000000 : metrazMaxValue = metrazMaxValue;
        // console.log('price max value ',metrazMaxValue);
        if (priceValue <= metrazMaxValue && priceValue >= metrazMinValue){
          newArr.push(priceValue);
        };
      });
      // console.log('prices from range: ', metrazValueArr);

      // console.log('new price arr: ',newArr);

      newArr.forEach(elem => {
        for(j = 2 ; j < metrazValueArrNodeList.length ; j++){
          if (parseInt(metrazValueArrNodeList[j].childNodes[1].dataset.name) == elem){
            newArrHTMLList.push(metrazValueArrNodeList[j].childNodes[1]);
          };
        };
      });

      let filteredTermsIDMetraz = [];
      // console.log('filtered new arr html elements: ', newArrHTMLList);

      newArrHTMLList.forEach(el2 =>{
        filteredTermsIDMetraz.push(el2.dataset.termid);
      });

      // console.log(filteredTermsIDMetraz.join(','));

      for (i = 2 ; i < metrazValueArrNodeList.length ; i++){
        if(metrazValueArrNodeList[i].childNodes[1].classList.contains('active')){
          metrazValueArrNodeList[i].childNodes[1].classList.remove('active');
          // console.log(metrazValueArrNodeList[i].childNodes[1]);
        }
      }

      metrazValueArr = [];
      newArr = [];
      newArrHTMLList = [];
      metrazValueArrNodeList = [];

      return filteredTermsIDMetraz;
    };


    document.querySelectorAll('.menu-passive__item').forEach(passive =>{
      passive.addEventListener('click', (e) => {
        e.target.parentNode.parentNode.style.display = 'none';
        e.target.parentNode.parentNode.previousElementSibling.childNodes[1].classList.toggle('newAfter');
        // console.log('parent parent: ',e.target.parentNode.parentNode);
      });
    });

    document.querySelectorAll('.menu-active').forEach(menuActive =>{
      menuActive.addEventListener('click', (e)=>{
        document.querySelectorAll('.dropdown__list').forEach(customDrop =>{
          customDrop.classList.remove('dropdown__list_active')
        });
        e.target.classList.toggle('newAfter');
      })
    });

    document.querySelectorAll('.dropdown__value').forEach(customDropValue =>{
      // cleaning default dropdowns
      customDropValue.addEventListener('click', ()=>{
        document.querySelectorAll('.menu-passive').forEach(passive =>{
          if(passive.style.display == 'block'){
            passive.style.display = 'none';
          }
        });
      })
    });

    // -------------------------------------------------------------------------------------

    let choosenOptionsTemp = [];

    document.querySelectorAll('.menu-passive__item').forEach(passive =>{
      passive.addEventListener('click', (e) => {
        // console.log('clicked target: ',e.target.dataset.termid);
        choosenOptionsTemp.push(e.target.dataset.termid)
        // console.log('choosenOptionsTemp: ', choosenOptionsTemp);
        // console.log('choosenOptionsTemp2: ', choosenOptionsTemp.join());

        document.cookie = "filteredTermsFromCookies=" + choosenOptionsTemp.join();
      });
    });


  };

  document.querySelectorAll('.taxonomy-category').forEach(item =>{
    if (item.childNodes[0].innerHTML == 'Bez kategorii'){
      item.classList.add('hidden');
    }
  });

  // -------------------------------------------------------------------------------------












});
