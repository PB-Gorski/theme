window.addEventListener("load", function() {
  //  frontpage - filtrowanie i sortowanie listy mieszkan
  if(document.body.classList.contains('home')){
    console.log('home');
    document.cookie = "miasto=; inwestycja=; pokoje=; cenaOd=; cenaDo=;";
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
    
    btnMore.addEventListener('click',()=>{
      if(window.innerWidth > 480){
        searchBar.classList.toggle('desktop:h-[240px]');
        searchBar.classList.toggle('gap-y-[0px]');
      }else{
        searchBar.classList.toggle('h-[450px]');
      };
    });

    // wyszukiwanie mieszkan po filtrach (cena)
    // setting chosen option in active window
    let passiveOptions = document.querySelectorAll('.menu-passive__item');
    let passiveOptionsCustomFilters = document.querySelectorAll('.dropdown__item');
    let choosenOptions =[]

    passiveOptions.forEach(item => {
      item.addEventListener('click', () => {
        let choosenOption = item.childNodes[1].dataset.termid;
        let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;
        let filteredPriceFromFrontPage = runSearchingFrontPage() + ',' + runSearchingMetrazFrontPage();

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

        document.cookie = "filteredTermsFromCookies=" + choosenOptions.join() + filteredPriceFromFrontPage;

        // if(filterType == 'Miasto:'){
        //   document.cookie = "miasto=" + choosenOptions.join();
        // }else if(filterType == 'Inwestycja:'){
        //   document.cookie = "inwestycja=" + choosenOptions.join();
        // }else if(filterType == 'Pokoje:'){
        //   document.cookie = "pokoje=" + choosenOptions.join();
        // }else if(filterType == 'Cena od:'){
        //   document.cookie = "cenaOd=" + choosenOptions.join();
        // }else if(filterType == 'Cena do:'){
        //   document.cookie = "cenaDo=" + choosenOptions.join();
        // }
        // console.log('filter type: ', filterType);
        console.log('cookie data: ', document.cookie);
      });
    });

    passiveOptionsCustomFilters.forEach(item => {
      item.addEventListener('click', () => {
        // let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;
        let filteredPriceFromFrontPage = runSearchingFrontPage() + runSearchingMetrazFrontPage();
        document.cookie = "filteredTermsFromCookies=" + choosenOptions.join() + ',' + filteredPriceFromFrontPage;

        // console.log('filter type: ', filterType);
        console.log('cookie data: ', document.cookie);
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
        if (priceValue < priceMaxValue && priceValue > priceMinValue){
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
        if (priceValue < metrazMaxValue && priceValue > metrazMinValue){
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
    console.log('run searching metraz',runSearchingMetrazFrontPage());

    

    // -------------------------------------------------------------------------------------
  };









});
