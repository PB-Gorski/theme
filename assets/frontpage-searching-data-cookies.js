window.addEventListener("load", function() {
  //  frontpage - filtrowanie i sortowanie listy mieszkan
  if(document.body.classList.contains('home') ||
  document.body.classList.contains('page-parent') ||
  document.body.classList.contains('page-child')){

    document.body.addEventListener('click', () => {
      document.querySelectorAll('.menu-passive').forEach(activeItem =>{
        activeItem.style.display = 'none';  
      });
      document.querySelectorAll('.dropdown__list').forEach(activeItem2 =>{
        activeItem2.classList.remove('dropdown__list_active-metraz');  
        activeItem2.classList.remove('dropdown__list_active');  
      });
      
    });

    console.log('home');
    // document.cookie = "miasto=; inwestycja=; pokoje=; cenaOd=; cenaDo=;";
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

    // search more options handle
    const btnMore = document.querySelector('.btn-more');
    const searchBar = document.querySelector('.filter-entry');
    const dropDownFIltersArr = document.querySelectorAll('.dropdown-filter');

    
    btnMore.addEventListener('click',()=>{
      if(window.innerWidth > 480){
        searchBar.classList.toggle('desktop:h-[240px]');
        searchBar.classList.toggle('gap-y-[0px]');
        dropDownFIltersArr[6].classList.toggle('opacity-100')
        dropDownFIltersArr[7].classList.toggle('opacity-100')
        dropDownFIltersArr[9].classList.toggle('opacity-100')
        dropDownFIltersArr[10].classList.toggle('opacity-100')
        dropDownFIltersArr[11].classList.toggle('opacity-100')
      }else{
        searchBar.classList.toggle('h-[450px]');
      };
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
        console.log('new arr after check: ', choosenOptions);

        // document.cookie = "filteredTermsFromCookies=" + choosenOptions.join() + filteredPriceFromFrontPage;
        document.cookie = "filteredTermsFromCookies=" + choosenOptions.join();
        console.log('cookie data: ', document.cookie);

        let choosenMiastoArr = [];
        let choosenInwestycjeCount = 1;
        let choosenPokojeArr = [];
        let choosenPietroArr = [];
        let choosenTempArr = [];
        let choosenInneCount = 1;
        function showActiveFilterName(){
          let miastoArr = [28,40];
          let inwestycjaArr = [72,71,82,81];
          let pokojeArr = [43,34,53,25];
          let pietroArr = [97,78,60,66];
          let terminArr = [49,91,38,122,93];
          let inneArr = [520,521,522];
          let menuActiveSpan = item.parentNode.previousElementSibling.childNodes[1]
          let menuActiveTitle = item.parentNode.previousElementSibling.previousElementSibling.innerHTML.replace(':','').toLowerCase();

          if(miastoArr.includes(+choosenOptionID)){
            console.log('wybrano z kategorii - miasto');
            // miasto
            if(tempMiastoArr.includes(choosenOptionID)){removeItemAll(tempMiastoArr,choosenOptionID);}else{tempMiastoArr.push(choosenOptionID)};

            tempMiastoArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){choosenMiastoArr.push(item.childNodes[1].dataset.name)}
              });
            });
            menuActiveSpan.innerHTML = choosenMiastoArr.join(', ');
            console.log('miasto: ',choosenMiastoArr);

          }else if(inwestycjaArr.includes(+choosenOptionID)){
            // inwestycje
            tempInwestycjaArr.includes(choosenOptionID) ? removeItemAll(tempInwestycjaArr,choosenOptionID) : tempInwestycjaArr.push(choosenOptionID);

            if(tempInwestycjaArr.length > 0 ){choosenInwestycjeCount = tempInwestycjaArr.length;}else if(tempInwestycjaArr.length == 0){choosenInwestycjeCount = 0};

            menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInwestycjeCount;
          }else if(pokojeArr.includes(+choosenOptionID)){
            // pokoje
            if(tempPokojeArr.includes(choosenOptionID)){removeItemAll(tempPokojeArr,choosenOptionID);}else{tempPokojeArr.push(choosenOptionID)};

            tempPokojeArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){choosenPokojeArr.push(item.childNodes[1].dataset.name)}
              });
            });
            menuActiveSpan.innerHTML = choosenPokojeArr.join(', ');
          }else if(pietroArr.includes(+choosenOptionID)){
            // pietro
            if(tempPietroArr.includes(choosenOptionID)){removeItemAll(tempPietroArr,choosenOptionID);}else{tempPietroArr.push(choosenOptionID)};

            tempPietroArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){choosenPietroArr.push(item.childNodes[1].dataset.name)}
              });
            });
            menuActiveSpan.innerHTML = choosenPietroArr.join(', ');
          }else if(terminArr.includes(+choosenOptionID)){
            // termin
            if(tempTerminArr.includes(choosenOptionID)){removeItemAll(tempTerminArr,choosenOptionID);}else{tempTerminArr.push(choosenOptionID)};

            tempTerminArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){choosenTempArr.push(item.childNodes[1].dataset.name)}
              });
            });
            menuActiveSpan.innerHTML = choosenTempArr.join(', ');
          }else if(inneArr.includes(+choosenOptionID)){
            // inne
            tempInneArr.includes(choosenOptionID) ? removeItemAll(tempInneArr,choosenOptionID) : tempInneArr.push(choosenOptionID);

            if(tempInneArr.length > 0 ){choosenInneCount = tempInneArr.length;}else if(tempInneArr.length == 0){choosenInneCount = 0};

            menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInneCount;
          }else{
            console.log('error');
          };

          // menuActiveSpan.dataset.label = choosenOption;
          // menuActiveSpan.innerHTML = menuActiveSpan.getAttribute('data-label');

          console.log('item: ', menuActiveSpan.getAttribute('data-label'));
          console.log('item category: ', menuActiveTitle);
          console.log('item termid: ', +choosenOptionID);

        };
        showActiveFilterName();
      });
    });



    passiveOptionsCustomFilters.forEach(item => {
      item.addEventListener('click', () => {
        // let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;
        let priceMinValueCookie2 = parseInt(document.querySelector('.dropdown__value-min').childNodes[0].innerHTML.split(' ').join(''));
        let priceMaxValueCookie2 = document.querySelector('.dropdown__value-max').innerHTML == 'Max' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max').childNodes[0].innerHTML.split(' ').join(''));

        let filteredPriceFromFrontPage = runSearchingFrontPage() + ',' + runSearchingMetrazFrontPage();
        document.cookie = "filteredTermsFromCookies=" + choosenOptions.join() + ',' + filteredPriceFromFrontPage;

        document.cookie = "PriceMinFromCookies=" + priceMinValueCookie2;
        document.cookie = "PriceMaxFromCookies=" + priceMaxValueCookie2;

  

        // console.log('filter type: ', filterType);
      });
    });


    // frontpage custom dropdowns handle
    // price selects
    const mainDropDown = document.querySelectorAll('.dropdown__value-price');
    const dropDownList = document.querySelectorAll('.dropdown__list');
    const dropDowns = Array.from(document.querySelectorAll('.dropdown__link'));
    let priceValueArr = [];
    let newArr = [];
    let newArrHTMLList = [];
    let target;

    mainDropDown.forEach(dropDownEl =>{
      dropDownEl.addEventListener('click', (e) =>{
        if(e.target.nextElementSibling){
          console.log('span');
          e.target.nextElementSibling.classList.toggle('dropdown__list_active');
        }else if(e.target.parentNode.nextElementSibling){
          console.log('span container');
          e.target.parentNode.nextElementSibling.classList.toggle('dropdown__list_active');
        }
      });
    });

    dropDowns.forEach(item => {
      item.addEventListener('click', choise)
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

    function runSearchingFrontPage(){
      priceValueArr = [];
      newArr = [];
      newArrHTMLList = [];

      const dropDownFilters = document.querySelectorAll(".dropdown-filter");
      let priceValueArrNodeList = dropDownFilters[5].childNodes[1].childNodes;
      priceMinValue = parseInt(document.querySelector('.dropdown__value-min').childNodes[0].innerHTML.split(' ').join(''));
      priceMaxValue = document.querySelector('.dropdown__value-max').innerHTML == 'Max' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max').childNodes[0].innerHTML.split(' ').join(''));
      
      console.log('no spaces', priceMinValue,priceMaxValue);

      for (i = 1 ; i < priceValueArrNodeList.length ; i++){
        priceValueArr.push(parseInt(priceValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join('')));
        priceValueArrNodeList[i].childNodes[1].dataset.name = parseInt(priceValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join(''));
      }
    
      priceValueArr.forEach(priceValue => {
        priceMaxValue.isNaN ? priceMaxValue = 10000000 : priceMaxValue = priceMaxValue;
        console.log('price max value ',priceMaxValue);
        if (priceValue <= priceMaxValue && priceValue >= priceMinValue){
          newArr.push(priceValue);
        };
      });
      console.log('prices from range: ', priceValueArr);
      
      // console.log('new price arr: ',newArr);

      newArr.forEach(elem => {
        for(j = 2 ; j < priceValueArrNodeList.length ; j++){
          if (parseInt(priceValueArrNodeList[j].childNodes[1].dataset.name) == elem){
            newArrHTMLList.push(priceValueArrNodeList[j].childNodes[1]);
          };
        };
      });

      let filteredTermsID = [];
      console.log('filtered new arr html elements: ', newArrHTMLList);

      newArrHTMLList.forEach(el2 =>{
        filteredTermsID.push(el2.dataset.termid);
      });

      console.log(filteredTermsID.join(','));

      for (i = 2 ; i < priceValueArrNodeList.length ; i++){
        if(priceValueArrNodeList[i].childNodes[1].classList.contains('active')){
          priceValueArrNodeList[i].childNodes[1].classList.remove('active');
          // console.log(priceValueArrNodeList[i].childNodes[1]);
        }
      }

      priceValueArr = [];
      newArr = [];
      newArrHTMLList = [];
      priceValueArrNodeList = [];

      return filteredTermsID;
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
          console.log(e.target);
          console.log('dropdown span');
          e.target.nextElementSibling.classList.toggle('dropdown__list_active-metraz');
        }
        else if(e.target.parentNode.nextElementSibling){
          console.log('dropdown span container');
          e.target.parentNode.nextElementSibling.classList.toggle('dropdown__list_active-metraz');
        }
      });
    });

    dropDownsMetraz.forEach(item => {
      item.addEventListener('click', choiseMetraz)
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

    function runSearchingMetrazFrontPage(){
      metrazValueArr = [];
      newArr = [];
      newArrHTMLList = [];

      const dropDownFilters = document.querySelectorAll(".dropdown-filter");
      let metrazValueArrNodeList = dropDownFilters[8].childNodes[1].childNodes;
      metrazMinValue = parseInt(document.querySelector('.dropdown__value-min-metraz').childNodes[0].innerHTML.split(' ').join(''));
      metrazMaxValue = document.querySelector('.dropdown__value-max-metraz').innerHTML == 'Max' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max-metraz').childNodes[0].innerHTML.split(' ').join(''));
      
      console.log('no spaces', metrazMinValue,metrazMaxValue);

      for (i = 1 ; i < metrazValueArrNodeList.length ; i++){
        metrazValueArr.push(parseInt(metrazValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join('')));
        metrazValueArrNodeList[i].childNodes[1].dataset.name = parseInt(metrazValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join(''));
      }
    
      metrazValueArr.forEach(priceValue => {
        metrazMaxValue.isNaN ? metrazMaxValue = 10000000 : metrazMaxValue = metrazMaxValue;
        console.log('price max value ',metrazMaxValue);
        if (priceValue <= metrazMaxValue && priceValue >= metrazMinValue){
          newArr.push(priceValue);
        };
      });
      console.log('prices from range: ', metrazValueArr);
      
      // console.log('new price arr: ',newArr);

      newArr.forEach(elem => {
        for(j = 2 ; j < metrazValueArrNodeList.length ; j++){
          if (parseInt(metrazValueArrNodeList[j].childNodes[1].dataset.name) == elem){
            newArrHTMLList.push(metrazValueArrNodeList[j].childNodes[1]);
          };
        };
      });

      let filteredTermsIDMetraz = [];
      console.log('filtered new arr html elements: ', newArrHTMLList);

      newArrHTMLList.forEach(el2 =>{
        filteredTermsIDMetraz.push(el2.dataset.termid);
      });

      console.log(filteredTermsIDMetraz.join(','));

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

      // YMCTools({
      //   target: '.data-target-ymc1',
      //   terms: filteredTermsID.join(),            
      // }).apiTermUpdate(); 
      return filteredTermsIDMetraz;
    }; 
    // console.log('run searching metraz',runSearchingMetrazFrontPage());

    

    // -------------------------------------------------------------------------------------
  };









});
