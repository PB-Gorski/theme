window.addEventListener("load", function() {
  //  page lista mieszkan - filtrowanie i sortowanie listy mieszkan
  if(document.body.classList.contains('post-type-archive-mieszkania')){
    // alert('test');
    console.log('lista mieszkan page');
    // wyszukiwanie mieszkan po filtrach (cena)
    // setting chosen option in active window
    let choosenOptions =[];
    let tempMiastoArr = [];
    let tempInwestycjaArr = [];
    let tempPokojeArr = [];
    let passiveOptions = document.querySelectorAll('.menu-passive__item');
    let counter2 = 0;

    passiveOptions.forEach(item => {
      item.addEventListener('click', () => {
        let optionSpan = document.createElement('span');
        let choosenOption = item.childNodes[1].dataset.name;
        let choosenOptionID = item.childNodes[1].dataset.termid;
        let stopAdding = false;
        optionSpan.innerText = choosenOption;

        let choosenOptionsArr = item.parentNode.previousElementSibling.childNodes[0].childNodes;
        choosenOptionsArr.forEach(option => {
          if(option.innerText == choosenOption){
            stopAdding = true;
            console.log('choosen option text for cleaning', choosenOption);
            console.log('clear existing span');
            option.remove('span');
          };
        });

        // removing items from arr
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

        if(choosenOptions.includes(choosenOptionID)){
          removeItemAll(choosenOptions,choosenOptionID)
        }else{
          choosenOptions.push(choosenOptionID)
        };
        console.log(choosenOptions);

        if(!stopAdding){
          // console.log('check for start ', item.parentNode.previousElementSibling.childNodes[0].childNodes[0].tagName);
          if(item.parentNode.previousElementSibling.childNodes[0].childNodes[0] === undefined){
            console.log('undefined span 0');
          }else{
            console.log('span wypelniony');
          }

          if(counter>2){
            
            console.log('conter>1');
            // item.parentNode.previousElementSibling.childNodes[0].appendChild(optionSpan);
            console.log(counter2);
          }else{
            console.log('else');

            let optionSpan2 = document.createElement('span');
            let choosenOption2 = item.childNodes[1].dataset.name;
            optionSpan2.innerText = choosenOption2;
            item.parentNode.previousElementSibling.childNodes[0].innerText = '';
            // item.parentNode.previousElementSibling.childNodes[0].appendChild(optionSpan2);
            counter2++;
          };
        }
        stopAdding = false;
        console.log(stopAdding);

        let numberCount = 1
        function showActiveFilterName(){
          let miastoArr = [28,40];
          let inwestycjaArr = [72,71,82,81];
          let pokojeArr = [43,34,53,25];
          let menuActiveSpan = item.parentNode.previousElementSibling.childNodes[1]
          let menuActiveTitle = item.parentNode.previousElementSibling.previousElementSibling.innerHTML.replace(':','').toLowerCase();

          if(miastoArr.includes(+choosenOptionID)){
            console.log('wybrano z kategorii - miasto');
            // miasto
            if(tempMiastoArr.includes(choosenOptionID)){
              removeItemAll(tempMiastoArr,choosenOptionID);

            }else{
              tempMiastoArr.push(choosenOptionID)
            };
            console.log('temp miastoArr',tempMiastoArr);

          }else if(inwestycjaArr.includes(+choosenOptionID)){
            console.log('wybrano z kategorii - inwestycja');
            // inwestycja
            if(tempInwestycjaArr.includes(choosenOptionID)){
              removeItemAll(tempInwestycjaArr,choosenOptionID);
            }else{
              tempInwestycjaArr.push(choosenOptionID)
            };


            if(tempInwestycjaArr.length > 0 ){
              numberCount = tempInwestycjaArr.length;
              
            }else if(tempInwestycjaArr.length == 0){
              menuActiveSpan.innerHTML = 'Wybierz if';
            };
            
            menuActiveSpan.innerHTML = 'Wybrano: ' + numberCount;
            console.log('temp inwestycjaArr',tempInwestycjaArr.length);
            
          } else if(pokojeArr.includes(+choosenOptionID)){
            console.log('wybrano z kategorii - pokoje');
            // pokoje
            if(tempPokojeArr.includes(choosenOptionID)){
              removeItemAll(tempPokojeArr,choosenOptionID)
            }else{
              tempPokojeArr.push(choosenOptionID)
            };
            console.log('temp inwestycjaArr',tempPokojeArr);
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

    // price selects
    const mainDropDown = document.querySelectorAll('.dropdown__value-price');
    const dropDownList = document.querySelectorAll('.dropdown__list');
    const dropDowns = Array.from(document.querySelectorAll('.dropdown__link'));
    let btnSearch = document.querySelector('.btn-search');
    let priceValueArr = [];
    let newArr = [];
    let newArrHTMLList = [];
    let target;

    mainDropDown.forEach(dropDownEl =>{
      dropDownEl.addEventListener('click', (e) =>{
        if(e.target.nextElementSibling){
          // console.log('span');
          e.target.nextElementSibling.classList.toggle('dropdown__list_active');
        }else if(e.target.parentNode.nextElementSibling){
          // console.log('span container');
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

      dropDownList.forEach(el =>{
        if(el.classList.contains('dropdown__list_active')){
          el.classList.remove('dropdown__list_active')
        };
      });
    };  

    const foundedPostOnStart = document.querySelector('.js-foundedPostOnStart');;
    let counterPostsLoad = 0;

    wp.hooks.addAction('ymc_after_loaded_data_148_1', 'smartfilter', function(){
      if (counterPostsLoad == 1){
        console.log('posts loaded2');
        foundedPostOnStart.classList.add('hidden');
      };
      counterPostsLoad++;
      // console.log('posts found counter after ++: ', counterPostsLoad);
    });


    // btnSearch.addEventListener('click', runSearchingPrice);

    // search more options handle
    const btnMore = document.querySelector('.btn-more');
    const searchBar = document.querySelector('.filter-entry');
    // const postsFound = document.querySelector('.js-post-found');
    const dropDownFIltersArr = document.querySelectorAll('.dropdown-filter');
    
    if(document.body.classList.contains('post-type-archive-mieszkania')){
      if(window.innerWidth < 480){
        searchBar.classList.toggle('active-search-more');
      }
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
        foundedPostOnStart.classList.toggle('top-[280px]')
      });
    };

    // wyszukiwanie mieszkan po filtrach (metraz)
    // setting chosen option in active window
    // let passiveOptionsMetraz = document.querySelectorAll('.menu-passive__item');
    // let counter2 = 0;
    // passiveOptions.forEach(item => {
    //   item.addEventListener('click', () => {
    //     let optionSpan = document.createElement('span');
    //     let choosenOption = item.childNodes[1].dataset.name;
    //     let stopAdding = false;
    //     optionSpan.innerText = choosenOption;

    //     let choosenOptionsArr = item.parentNode.previousElementSibling.childNodes[0].childNodes;
    //     choosenOptionsArr.forEach(option => {
    //       if(option.innerText == choosenOption){
    //         console.log('have child span');
    //         stopAdding = true;
    //         console.log('choosen option text for cleaning', choosenOption);
    //         console.log('clear existing span');
    //         option.remove('span');
    //       };
    //     });

    //     if(!stopAdding){
    //       console.log('check for start ', item.parentNode.previousElementSibling.childNodes[0].childNodes[0].tagName);
    //       if(item.parentNode.previousElementSibling.childNodes[0].childNodes[0].tagName === undefined){
    //         console.log('undefined span 0');
    //       }else{
    //         console.log('span wypelniony');
    //       }

    //       if(counter>2){
            
    //         console.log('conter>1');
    //         item.parentNode.previousElementSibling.childNodes[0].appendChild(optionSpan);
    //         console.log(counter2);
    //       }else{
    //         console.log('else');

    //         let optionSpan2 = document.createElement('span');
    //         let choosenOption2 = item.childNodes[1].dataset.name;
    //         optionSpan2.innerText = choosenOption2;
    //         item.parentNode.previousElementSibling.childNodes[0].innerText = '';
    //         item.parentNode.previousElementSibling.childNodes[0].appendChild(optionSpan2);
    //         counter2++;
    //       };
    //     }
    //     stopAdding = false;
    //     console.log(stopAdding);
    //   });
    // });

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
          // e.target.classList.toggle('dropdown__list_active-metraz');
        };
        // else if(e.target.parentNode.nextElementSibling){
        //   console.log('dropdown span container');
        //   e.target.parentNode.nextElementSibling.classList.toggle('dropdown__list_active-metraz');
        // }
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

    let counterMetraz = 0;
    wp.hooks.addAction('ymc_after_loaded_data_148_1', 'smartfilter', function(){
      if (counterMetraz == 2){
        console.log('posts loaded2');
        foundedPostOnStart.classList.add('hidden');
      };
      counterMetraz++;
    });






    // const foundedPostOnStart = document.querySelector('.js-foundedPostOnStart');;

    // ------------------------------------------------------------------------------

    // sortowanie listy mieszkan
    const listaMieszkanContainer = document.querySelector(".post-custom-layout");
    const sortingBarHTML = `
    <ul class="wp-block-list js-injected container mx-auto all-taxonomy-list desktop:w-full w-[1054px] px-[20px] bg-[#2f384d] py-[22px] flex flex-wrap items-center justify-between text-[13px] font-bold z-0 relative">
      <li class="js-sort js-sort-miasto w-[100px] uppercase text-[#8a8f99] cursor-pointer relative sort-arrow">miasto</li>
      <li class="js-sort js-sort-inwestycja w-[170px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">inwestycja</li>
      <li class="js-sort js-sort-budynek w-[100px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">budynek</li>
      <li class="js-sort js-sort-nr w-[65px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">nr</li>
      <li class="js-sort js-sort-pokoje w-[100px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">pokoje</li>
      <li class="js-sort js-sort-metraz w-[110px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">metraz</li>
      <li class="js-sort js-sort-pietro w-[100px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">pietro</li>
      <li class="js-sort js-sort-cena w-[130px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">cena</li>
      <li class="js-sort js-sort-termin w-[125px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">termin</li>
      <li class="empty w-[30px]"></li>
    </ul>
    `;

    if(document.body.classList.contains('post-type-archive-mieszkania')){
      listaMieszkanContainer.insertAdjacentHTML('beforebegin', sortingBarHTML);
    };

    function sortListDir(j) {
      let list, i, switching, b, shouldSwitch, dir, switchcount = 0;
      list = document.querySelector(".post-entry");
      switching = true;
      dir = "asc"; 
      while (switching) {
        switching = false;
        b = list.querySelectorAll('.post-item');
        for (i = 0; i < (b.length - 1); i++) {
          shouldSwitch = false;
          if (dir == "asc") {
            if(j!=7){
              if (b[i].firstChild.childNodes[j].firstChild.textContent > b[i+1].firstChild.childNodes[j].firstChild.textContent) {
                shouldSwitch = true;
                break;
              };
            }else{
              if (parseInt(b[i].firstChild.childNodes[j].firstChild.textContent.split(' ').join('')) > parseInt(b[i+1].firstChild.childNodes[j].firstChild.textContent.split(' ').join(''))) {
                shouldSwitch = true;
                break;
              };
            };
          } else if (dir == "desc") {
            if(j!=7){
              if (b[i].firstChild.childNodes[j].firstChild.textContent < b[i+1].firstChild.childNodes[j].firstChild.textContent) {
                shouldSwitch = true;
                break;
              }
            }else{
              if (parseInt(b[i].firstChild.childNodes[j].firstChild.textContent.split(' ').join('')) < parseInt(b[i+1].firstChild.childNodes[j].firstChild.textContent.split(' ').join(''))) {
                shouldSwitch = true;
                break;
              };
            };
          };    
        };
        if (shouldSwitch) {
          b[i].parentNode.insertBefore(b[i + 1], b[i]);
          switching = true;
          switchcount ++;
        } else {
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          };
        };
      };
    };

    const btnsSort = document.querySelectorAll('.js-sort');
    btnIndex = 1;
    counter = 1;
    btnsSort.forEach((btn,index) => {
      btn.addEventListener('click', () => {
        indexFrom1 = index + 1;
        let currentFiltr = indexFrom1 + index;
        // currentFiltr = indexFrom1;
        console.log('current filtr: ', currentFiltr);

        sortListDir(index);
        counter = 1;
        for (let i = 1 ; i <= (17) ; i=i+2){
          // if(btnsSort[i - counter]){
          //   btnsSort[i - counter].classList.remove('sort-arrow-up','sort-arrow-down');
          // }
          if (i == currentFiltr){
            if( btnsSort[currentFiltr - counter].classList.contains('sort-arrow-up')){
              btnsSort[currentFiltr - counter].classList.remove('sort-arrow-up');
              btnsSort[currentFiltr - counter].classList.add('sort-arrow-down');
            }else{
              btnsSort[currentFiltr - counter].classList.add('sort-arrow-up');
              btnsSort[currentFiltr - counter].classList.remove('sort-arrow-down');
            }
          }else if(i != currentFiltr){
            console.log('i rozny od current filtr');
            if(btnsSort[i - counter]){
              btnsSort[i - counter].classList.remove('sort-arrow-up','sort-arrow-down');
            }
          }
          counter++
        };
        
        counter=1;
      });
    });    

    // ------------------------------------------------------------------------------

    // cookie data handle
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

    function getCookie(cname) {
      let name = cname + "=";
      let decodedCookie = decodeURIComponent(document.cookie);
      let ca = decodedCookie.split(';');
      for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        };
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        };
      };
      return "";
    };

    if(document.cookie.indexOf('filteredTermsFromCookies=') == 0){
      // cookies exist
      console.log('cookies exist');
      let filteredTermsFromCookies = getCookie("filteredTermsFromCookies");
      // let miasto = getCookie("miasto");
      // let inwestycja = getCookie("inwestycja");
      // let pokoje = getCookie("pokoje");
      // let cenaOd = parseInt(getCookie("cenaOd").split(' ').join(''));
      // let cenaDo = parseInt(getCookie("cenaDo").split(' ').join(''));

      let filteredCustomPriceFromCookies = runSearchingPrice();
      console.log(filteredCustomPriceFromCookies.join());
  
      // filteredTermsFromCookies = [miasto,inwestycja,pokoje,cenaOd,cenaDo]
      
      console.log(filteredTermsFromCookies);
      // console.log(miasto + ',' + inwestycja);
      console.log('filteredTermsFromCookies from frontpage: ',filteredTermsFromCookies);

      function runFromCookies(){
        YMCTools({
          target: '.data-target-ymc2', 
          terms: filteredTermsFromCookies,      
        }).apiTermUpdate(); 
        console.log('after YMC api update');
      };

      if(filteredTermsFromCookies != null){
        setTimeout(() => {
          runFromCookies()
        }, 1000);
      };
    }else{
      console.log('no cookies');
    };

    // ------------------------------------------------------------------------------

    // priceMinValue = cenaOd;
    // priceMaxValue = cenaDo;

    function runSearchingPrice(){
      priceValueArr = [];
      newArr = [];
      newArrHTMLList = [];

      foundedPostOnStart.classList.add('hidden');
      // foundedPostOnStart.classList.add('hidden2');
      const dropDownFilters = document.querySelectorAll(".dropdown-filter");
      let priceValueArrNodeList = dropDownFilters[5].childNodes[1].childNodes;
      priceMinValue = parseInt(document.querySelector('.dropdown__value-min').childNodes[0].innerHTML.split(' ').join(''));
      priceMaxValue = document.querySelector('.dropdown__value-max').innerHTML == 'Max' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max').childNodes[0].innerHTML.split(' ').join(''));
      
      // console.log('no spaces', priceMinValue,priceMaxValue);

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
      // console.log('filtered new arr html elements: ', newArrHTMLList);

      if(priceMinValue == 0 && priceMaxValue == 10000000){
        console.log('price not changed');
        filteredTermsID = [];
      }else{
        console.log('price changed');
        newArrHTMLList.forEach(el2 =>{
          filteredTermsID.push(el2.dataset.termid);
        });
      }

      console.log('new filtered id', filteredTermsID.join(','));

      for (i = 2 ; i < priceValueArrNodeList.length ; i++){
        if(priceValueArrNodeList[i].childNodes[1].classList.contains('active')){
          priceValueArrNodeList[i].childNodes[1].classList.remove('active');
          // console.log(priceValueArrNodeList[i].childNodes[1]);
        };
      };

      priceValueArr = [];
      newArr = [];
      newArrHTMLList = [];
      priceValueArrNodeList = [];

      // YMCTools({
      //   target: '.data-target-ymc1',
      //   terms: filteredTermsID.join() + ',' + choosenOptions.join(),            
      // }).apiTermUpdate(); 

      // console.log('all filtered id price: ', filteredTermsID.join());
      // console.log('all filtered choosen options: ', choosenOptions.join());
      // console.log('all filtered: ',filteredTermsID.join() + ',' + choosenOptions.join());
      return filteredTermsID;
    };

    function runSearchingMetraz(){
      console.log('run');
      metrazValueArr = [];
      newArrMetraz = [];
      newArrHTMLListMetraz = [];
      const dropDownFiltersMetraz = document.querySelectorAll(".dropdown-filter");
      foundedPostOnStart.classList.add('hidden');
      let metrazValueArrNodeList = dropDownFiltersMetraz[8].childNodes[1].childNodes;
      metrazMinValue = parseInt(document.querySelector('.dropdown__value-min-metraz').childNodes[0].innerHTML.split(' ').join(''));
      metrazMaxValue = document.querySelector('.dropdown__value-max-metraz').innerHTML == 'Max' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max-metraz').childNodes[0].innerHTML.split(' ').join(''));
      
      console.log('no spaces', metrazMinValue,metrazMaxValue);

      for (i = 1 ; i < metrazValueArrNodeList.length ; i++){
        metrazValueArr.push(parseInt(metrazValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join('')));
        metrazValueArrNodeList[i].childNodes[1].dataset.name = parseInt(metrazValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join(''));
      }
    
      metrazValueArr.forEach(metrazValue => {
        metrazMaxValue.isNaN ? metrazMaxValue = 10000000 : metrazMaxValue = metrazMaxValue;
        console.log('metraz max value ',metrazMaxValue);
        if (metrazValue <= metrazMaxValue && metrazValue >= metrazMinValue){
          newArrMetraz.push(metrazValue);
        };
      });
      console.log('metraz from range: ', metrazValueArr);
      
      // console.log('new metraz arr: ',newArr);

      newArrMetraz.forEach(elem => {
        for(j = 2 ; j < metrazValueArrNodeList.length ; j++){
          if (parseInt(metrazValueArrNodeList[j].childNodes[1].dataset.name) == elem){
            newArrHTMLListMetraz.push(metrazValueArrNodeList[j].childNodes[1]);
          };
        };
      });

      let filteredTermsIDMetraz = [];

      if(metrazMinValue == 0 && metrazMaxValue == 10000000){
        console.log('metraz not changed');
        filteredTermsIDMetraz = [];
      }else{
        console.log('metraz changed');
        newArrHTMLListMetraz.forEach(el2 =>{
          filteredTermsIDMetraz.push(el2.dataset.termid);
        });
      }

      // newArrHTMLListMetraz.forEach(el2 =>{
      //   filteredTermsIDMetraz.push(el2.dataset.termid);
      // });

      console.log('metraze po ifie', filteredTermsIDMetraz.join(','));

      for (i = 2 ; i < metrazValueArrNodeList.length ; i++){
        if(metrazValueArrNodeList[i].childNodes[1].classList.contains('active')){
          metrazValueArrNodeList[i].childNodes[1].classList.remove('active');
          // console.log(metrazValueArrNodeList[i].childNodes[1]);
        }
      }

      metrazValueArr = [];
      newArrMetraz = [];
      newArrHTMLListMetraz = [];
      metrazValueArrNodeList = [];

      return filteredTermsIDMetraz;
    };

    // *******************************************************
    btnSearch.addEventListener('click', () =>{
      // console.log('btn search start');
      // runSearchingPrice();
      // console.log('runsearchingPrice done');
      // runSearchingMetraz();
      // console.log('runsearchingMetraz done');
      // filteredTermsMerge();
      let pricesID = runSearchingPrice();
      let metrazeID = runSearchingMetraz();

      YMCTools({
        target: '.data-target-ymc2',
        terms: pricesID.join() + ',' + metrazeID.join() + ',' + choosenOptions.join(),            
      }).apiTermUpdate(); 
      console.log('in btn prices: ', pricesID.join());
      console.log('in btn metraze: ', metrazeID.join());
      console.log('all terms id searched: ', pricesID.join() + ',' + metrazeID.join() + ',' + choosenOptions.join());
    });
    // *******************************************************





  
    


    wp.hooks.addAction('ymc_after_loaded_data_148_1', 'smartfilter', function(){
    });
  };

  // -------------------------------------------------------------------------------------







});
