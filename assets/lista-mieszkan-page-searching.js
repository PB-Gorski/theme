window.addEventListener("load", function() {
  //  page lista mieszkan - filtrowanie i sortowanie listy mieszkan
  if(document.body.classList.contains('post-type-archive-mieszkania')){
    console.log('lista mieszkan page');
    // wyszukiwanie mieszkan po filtrach (cena)
    // setting chosen option in active window
    let choosenOptions =[];
    let tempMiastoArr = [];
    let tempInwestycjaArr = [];
    let tempPokojeArr = [];
    let tempPietroArr = [];
    let tempTerminArr = [];
    let tempInneArr = [];
    let passiveOptions = document.querySelectorAll('.menu-passive__item')
    // let passiveOptions = document.querySelectorAll('.menu-passive__item')
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

        let choosenMiastoArr = [];
        let choosenInwestycjeCount = 1;
        let choosenPokojeArr = [];
        let choosenPietroArr = [];
        let choosenTempArr = [];
        let choosenInneCount = 1;
        function showActiveFilterName(cookiesSearchedIDs){
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
            if(tempMiastoArr.includes(choosenOptionID)){
              removeItemAll(tempMiastoArr,choosenOptionID);
            }else{
              tempMiastoArr =[];
              tempMiastoArr.push(choosenOptionID)
            };

            setTimeout(() => {
              if (tempMiastoArr.length == 0){
                menuActiveSpan.innerHTML = 'Wybierz';
                console.log('Wybierz');
              }
            }, 1000);



            console.log('miastoArr: ',tempMiastoArr.length);
            console.log('active span: ',menuActiveSpan);

            menuActiveSpan.innerHTML = menuActiveSpan.innerHTML + choosenMiastoArr.join(', ');
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
            // if(tempTerminArr.includes(choosenOptionID)){removeItemAll(tempTerminArr,choosenOptionID);}else{tempTerminArr.push(choosenOptionID)};

            // tempTerminArr.forEach(choosenItem =>{
            //   passiveOptions.forEach(item => {
            //     if(item.childNodes[1].dataset.termid == choosenItem){choosenTempArr.push(item.childNodes[1].dataset.name)}
            //   });
            // });
            // menuActiveSpan.innerHTML = choosenTempArr.join(', ');
          }else if(inneArr.includes(+choosenOptionID)){
            // inne
            tempInneArr.includes(choosenOptionID) ? removeItemAll(tempInneArr,choosenOptionID) : tempInneArr.push(choosenOptionID);

            if(tempInneArr.length > 0 ){choosenInneCount = tempInneArr.length;}else if(tempInneArr.length == 0){choosenInneCount = 0};

            menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInneCount;
          }else{
            // console.log('error');
          };          


          // menuActiveSpan.dataset.label = choosenOption;
          // menuActiveSpan.innerHTML = menuActiveSpan.getAttribute('data-label');

          // console.log('item: ', menuActiveSpan.getAttribute('data-label'));
          console.log('item category: ', menuActiveTitle);
          console.log('item termid: ', +choosenOptionID);

          if (tempMiastoArr.length == 0){
            menuActiveSpan.innerHTML = '';
            menuActiveSpan.innerHTML = 'Wybierz:';
            console.log('Wybierz');
          }else{
            console.log('wybrano miasto');
          }

        };
        showActiveFilterName();
        if (!foundedPostOnStart.classList.contains('hidden')){foundedPostOnStart.classList.add('hidden')}
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
    const heightAnimation = document.querySelector('.js-heightAnimation');
    const heightAnimation2 = document.querySelector('.filter-layout3');
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
          searchBar.classList.toggle('z-[2]');
          dropDownFIltersArr[6].classList.toggle('opacity-100');
          dropDownFIltersArr[7].classList.toggle('opacity-100');
          dropDownFIltersArr[9].classList.toggle('opacity-100');
          dropDownFIltersArr[10].classList.toggle('opacity-100');
          dropDownFIltersArr[11].classList.toggle('opacity-100');
          dropDownFIltersArr[6].classList.toggle('z-[1]');
          dropDownFIltersArr[7].classList.toggle('z-[1]');
          dropDownFIltersArr[9].classList.toggle('z-[1]');
          dropDownFIltersArr[10].classList.toggle('z-[1]');
          dropDownFIltersArr[11].classList.toggle('z-[1]');
          foundedPostOnStart.classList.toggle('top-[240px]');
          heightAnimation2.classList.toggle('h-auto');
        }else{
          heightAnimation.classList.toggle('h-[1000px]');
          foundedPostOnStart.classList.toggle('top-[1000px]');
        };
        // document.querySelector('#filter-layout3-filter-layout3').classList.toggle('h-[840px]')
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
      <li class="js-sort js-sort-cena w-[100px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">cena</li>
      <li class="js-sort js-sort-termin w-[125px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">termin</li>
      <li class="empty w-[0px]"></li>
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

    // cookies data handle
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

    // handling searching when redirected from page-about-inwestycja
    // if (document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-osiedle-srebrniki/' ||
    //     document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-osiedle-srebrniki/lokalizacja-osiedle-srebrniki/' ||
    //     document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-osiedle-srebrniki/galeria-osiedle-srebrniki/' ||
    //     document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-osiedle-srebrniki/kronika-budowy-osiedle-srebrniki/'){
    //     document.cookie = "filteredTermsFromCookies=72";
    // }else if (document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-sw-piotra/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-sw-piotra/lokalizacja-sw-piotra/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-sw-piotra/galeria-sw-piotra/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-sw-piotra/kronika-budowy-sw-piotra/'){
    //           document.cookie = "filteredTermsFromCookies=71";
    // }else if (document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-torunska-16/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-torunska-16/lokalizacja-torunska-16/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-torunska-16/galeria-torunska-16/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-torunska-16/kronika-budowy-torunska-16/'){
    //           document.cookie = "filteredTermsFromCookies=82";
    // }else if (document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-wiezycka-folwark/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-wiezycka-folwark/lokalizacja-wiezycka-folwark/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-wiezycka-folwark/galeria-wiezycka-folwark/' ||
    //           document.referrer == 'https://pbgorski.webo.design/pl/o-inwestycji-wiezycka-folwark/kronika-budowy-wiezycka-folwark/'){
    //           document.cookie = "filteredTermsFromCookies=81";
    // };
    if (document.referrer.search('o-inwestycji-osiedle-srebrniki') > 20 ||
        document.referrer.search('lokalizacja-osiedle-srebrniki') > 20 ||
        document.referrer.search('galeria-osiedle-srebrniki') > 20 ||
        document.referrer.search('kronika-budowy-osiedle-srebrniki') > 20){
        document.cookie = "filteredTermsFromCookies=72";
    }else if (document.referrer.search('o-inwestycji-sw-piotra') > 20 ||
              document.referrer.search('lokalizacja-sw-piotra') > 20 ||
              document.referrer.search('galeria-sw-piotra') > 20 ||
              document.referrer.search('kronika-budowy-sw-piotra') > 20){
              document.cookie = "filteredTermsFromCookies=71";
    }else if (document.referrer.search('o-inwestycji-torunska-16') > 20 ||
              document.referrer.search('lokalizacja-torunska-16') > 20 ||
              document.referrer.search('galeria-torunska-16') > 20 ||
              document.referrer.search('kronika-budowy-torunska-16') > 20){
              document.cookie = "filteredTermsFromCookies=82";
    }else if (document.referrer.search('o-inwestycji-wiezycka-folwark') > 20 ||
              document.referrer.search('lokalizacja-wiezycka-folwark') > 20 ||
              document.referrer.search('galeria-wiezycka-folwark') > 20 ||
              document.referrer.search('kronika-budowy-wiezycka-folwark') > 20){
              document.cookie = "filteredTermsFromCookies=81";
    };

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

    let filteredTermsFromCookies = '';
    if(document.cookie.indexOf('filteredTermsFromCookies=') == 0 || document.cookie.indexOf('PriceMinFromCookies=') == 0 || document.cookie.indexOf('PriceMaxFromCookies=') == 0){
      // cookies exist
      console.log('cookies exist');
      filteredTermsFromCookies = getCookie("filteredTermsFromCookies");
      filteredPriceMinFromCookies = getCookie("PriceMinFromCookies");
      filteredPriceMaxFromCookies = getCookie("PriceMaxFromCookies");
      filteredMetrazMinFromCookies = getCookie("MetrazMinFromCookies");
      filteredMetrazMaxFromCookies = getCookie("MetrazMaxFromCookies");
      console.log('cookies exist2: ',filteredPriceMaxFromCookies);
      // console.log('cookies exist min: ',filteredPriceMinFromCookies);
      // console.log('cookies exist2 max: ',filteredPriceMaxFromCookies);

      let filteredCustomPriceFromCookies = runSearchingPrice();
      console.log(filteredCustomPriceFromCookies.join());
      
      console.log(filteredTermsFromCookies);
      console.log('filteredTermsFromCookies from frontpage: ',filteredTermsFromCookies);
      console.log('max metraz***: ',filteredMetrazMaxFromCookies);

      let choosenMiastoArr = [];
      let choosenPokojeArr = [];
      let choosenPietroArr = [];
      let choosenTerminArr = [];
      let choosenInneArr = [];
      // let choosenInwestycjeCount = 1;
      // let choosenInwestycjeArr = [];
      // let choosenTempArr = [];
      // let choosenInneCount = 1;
      function showActiveFilterNameFromCookies(){
        let miastoArr = [28,40];
        let inwestycjaArr = [72,71,82,81];
        let pokojeArr = [43,34,53,25];
        let pietroArr = [97,78,60,66];
        let terminArr = [49,91,38,122,93];
        let inneArr = [520,521,522];
        let menuActiveSpan = item.parentNode.previousElementSibling.childNodes[1];
        // let menuActiveTitle = item.parentNode.previousElementSibling.previousElementSibling.innerHTML.replace(':','').toLowerCase();


        console.log('json check: ', filteredTermsFromCookies.substring(1).slice(0, -1) );
        console.log('json check after parse: ', filteredTermsFromCookies);

        console.log('last string array: ',Array.from(filteredTermsFromCookies)); 
        let tempArr = [];
        if(filteredTermsFromCookies.slice(-1) != ','){
          tempArr.push(filteredTermsFromCookies)
        }
        console.log(tempArr);
        let filteredTermsFromCookiesArr;
        // let filteredTermsFromCookiesArr = JSON.parse("[" + filteredTermsFromCookies.slice(-1) != ',' ? tempArr : filteredTermsFromCookies.slice(0, -1) + "]");
  
        console.log('filteredTermsFromCookiesArr', filteredTermsFromCookiesArr);
        console.log('filteredTermsFromCookies*:', filteredTermsFromCookies);

        console.log('slice test: ',tempArr.join(',').split(','));

        let arr = [ 'a,b,c', 'd,e,f', 'g,h,i' ];
        console.log('slice test2: ', [].concat(...tempArr.map(a=>a.split(','))) )

        console.log('*****', filteredTermsFromCookies.split(','));
        



        let returnChoosenFromCookies =[];
        let returnChoosenFromCookiesInwestycje = [];
        let returnChoosenFromCookiesPokoje = [];
        let returnChoosenFromCookiesPietro = [];
        let returnChoosenFromCookiesTermin = [];
        let returnChoosenFromCookiesInne = [];
        tempArr.join(',').split(',').forEach(item=>{
          // console.log('item form filtered cookies: ', item);

          if(miastoArr.includes(+item)){
            console.log('wybrano z kategorii - miasto');
            // miasto
            if(tempMiastoArr.includes(item)){removeItemAll(tempMiastoArr,item);}else{tempMiastoArr.push(item)};

            choosenMiastoArr = [];
            tempMiastoArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){
                  choosenMiastoArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add('active');
                }
              });
            });
            
            passiveOptions.forEach(option => {
              if(option.childNodes[1].dataset.termid == item){
                console.log('option from cookies for finding parent: ',option);
                returnChoosenFromCookies.push(option)
              };              
            });

            returnChoosenFromCookies.forEach(el => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML = choosenMiastoArr.join(', ');
            });
            menuActiveSpan.innerHTML = menuActiveSpan.innerHTML + item.childNodes[1].dataset.name;
          }else if(inwestycjaArr.includes(+item)){
            // inwestycje
            tempInwestycjaArr.includes(item) ? removeItemAll(tempInwestycjaArr,item) : tempInwestycjaArr.push(item);

            if(tempInwestycjaArr.length > 0 ){choosenInwestycjeCount = tempInwestycjaArr.length;}else if(tempInwestycjaArr.length == 0){choosenInwestycjeCount = 0};

            tempInwestycjaArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){
                  choosenMiastoArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add('active');
                }
              });
            });
            
            passiveOptions.forEach(option => {
              if(option.childNodes[1].dataset.termid == item){
                console.log('option from cookies for finding parent: ',option);
                returnChoosenFromCookiesInwestycje.push(option)
              };              
            });

            returnChoosenFromCookiesInwestycje.forEach(el => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML = 'Wybrano: ' + returnChoosenFromCookiesInwestycje.length;
            });
          }else if(pokojeArr.includes(+item)){
            // pokoje
            if(tempPokojeArr.includes(item)){removeItemAll(tempPokojeArr,item);}else{tempPokojeArr.push(item)};

            choosenPokojeArrv= [];
            tempPokojeArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){
                  choosenPokojeArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add('active');
                }
              });
            });
            
            passiveOptions.forEach(option => {
              if(option.childNodes[1].dataset.termid == item){
                console.log('option from cookies for finding parent: ',option);
                returnChoosenFromCookiesPokoje.push(option)
              };              
            });

            returnChoosenFromCookiesPokoje.forEach(el => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML = choosenPokojeArr.join(', ');
            });
          }else if(pietroArr.includes(+item)){
            // pietro
            if(tempPietroArr.includes(item)){removeItemAll(tempPietroArr,item);}else{tempPietroArr.push(item)};

            choosenPietroArr = [];
            tempPietroArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){
                  choosenPietroArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add('active');
                }
              });
            });
            
            passiveOptions.forEach(option => {
              if(option.childNodes[1].dataset.termid == item){
                console.log('option from cookies for finding parent: ',option);
                returnChoosenFromCookiesPietro.push(option)
              };              
            });

            returnChoosenFromCookiesPietro.forEach(el => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML = choosenPietroArr.join(', ');
            });
          }else if(terminArr.includes(+item)){
            // termin
            tempTerminArr.includes(item) ? removeItemAll(tempTerminArr,item) : tempTerminArr.push(item);

            if(tempTerminArr.length > 0 ){choosenTerminCount = tempTerminArr.length;}else if(tempTerminArr.length == 0){choosenTerminCount = 0};

            tempTerminArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){
                  choosenTerminArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add('active');
                };
              });
            });
            
            passiveOptions.forEach(option => {
              if(option.childNodes[1].dataset.termid == item){
                console.log('option from cookies for finding parent: ',option);
                returnChoosenFromCookiesTermin.push(option)
              };              
            });

            returnChoosenFromCookiesTermin.forEach(el => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML = 'Wybrano: ' + returnChoosenFromCookiesTermin.length;
            });            
          }else if(inneArr.includes(+item)){
            if(tempInneArr.length > 0 ){choosenTerminCount = tempInneArr.length;}else if(tempInneArr.length == 0){choosenTerminCount = 0};

            tempInneArr.forEach(choosenItem =>{
              passiveOptions.forEach(item => {
                if(item.childNodes[1].dataset.termid == choosenItem){
                  choosenInneArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add('active');
                };
              });
            });
            
            passiveOptions.forEach(option => {
              if(option.childNodes[1].dataset.termid == item){
                console.log('option from cookies for finding parent: ',option);
                returnChoosenFromCookiesInne.push(option)
              };              
            });

            returnChoosenFromCookiesInne.forEach(el => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML = 'Wybrano: ' + returnChoosenFromCookiesInne.length;
            });  
          }else{
            // console.log('error');
          };
        });

        // priceMinUpdate = getCookie("PriceMinFromCookies");
        // priceMaxUpdate = getCookie("PriceMaxFromCookies");

        // console.log('prices from cookies: ',priceMinUpdate, priceMaxUpdate);

        document.querySelector('.dropdown__value-min').childNodes[0].innerHTML = filteredPriceMinFromCookies == '' ? 0 : Number(filteredPriceMinFromCookies).toLocaleString();
        document.querySelector('.dropdown__value-max').childNodes[0].innerHTML = filteredPriceMaxFromCookies == '' ? 'Max' : (filteredPriceMaxFromCookies == 10000000 ? 'Max' :  Number(filteredPriceMaxFromCookies).toLocaleString());
        
        
        document.querySelector('.dropdown__value-min-metraz').childNodes[0].innerHTML = filteredMetrazMinFromCookies;
        document.querySelector('.dropdown__value-max-metraz').childNodes[0].innerHTML = filteredMetrazMaxFromCookies == 10000000 ? 'Max' :  filteredMetrazMaxFromCookies;
          
        console.log('after write', filteredMetrazMaxFromCookies);






        // if(miastoArr.includes(+choosenOptionID)){
        //   console.log('wybrano z kategorii - miasto');
        //   // miasto
        //   if(tempMiastoArr.includes(choosenOptionID)){removeItemAll(tempMiastoArr,choosenOptionID);}else{tempMiastoArr.push(choosenOptionID)};

        //   tempMiastoArr.forEach(choosenItem =>{
        //     passiveOptions.forEach(item => {
        //       if(item.childNodes[1].dataset.termid == choosenItem){choosenMiastoArr.push(item.childNodes[1].dataset.name)}
        //     });
        //   });
        //   menuActiveSpan.innerHTML = choosenMiastoArr.join(', ');
        //   console.log('miasto: ',choosenMiastoArr);

        // }else if(inwestycjaArr.includes(+choosenOptionID)){
        //   // inwestycje
        //   tempInwestycjaArr.includes(choosenOptionID) ? removeItemAll(tempInwestycjaArr,choosenOptionID) : tempInwestycjaArr.push(choosenOptionID);

        //   if(tempInwestycjaArr.length > 0 ){choosenInwestycjeCount = tempInwestycjaArr.length;}else if(tempInwestycjaArr.length == 0){choosenInwestycjeCount = 0};

        //   menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInwestycjeCount;
        // }else if(pokojeArr.includes(+choosenOptionID)){
        //   // pokoje
        //   if(tempPokojeArr.includes(choosenOptionID)){removeItemAll(tempPokojeArr,choosenOptionID);}else{tempPokojeArr.push(choosenOptionID)};

        //   tempPokojeArr.forEach(choosenItem =>{
        //     passiveOptions.forEach(item => {
        //       if(item.childNodes[1].dataset.termid == choosenItem){choosenPokojeArr.push(item.childNodes[1].dataset.name)}
        //     });
        //   });
        //   menuActiveSpan.innerHTML = choosenPokojeArr.join(', ');
        // }else if(pietroArr.includes(+choosenOptionID)){
        //   // pietro
        //   if(tempPietroArr.includes(choosenOptionID)){removeItemAll(tempPietroArr,choosenOptionID);}else{tempPietroArr.push(choosenOptionID)};

        //   tempPietroArr.forEach(choosenItem =>{
        //     passiveOptions.forEach(item => {
        //       if(item.childNodes[1].dataset.termid == choosenItem){choosenPietroArr.push(item.childNodes[1].dataset.name)}
        //     });
        //   });
        //   menuActiveSpan.innerHTML = choosenPietroArr.join(', ');
        // }else if(terminArr.includes(+choosenOptionID)){
        //   // termin
        //   if(tempTerminArr.includes(choosenOptionID)){removeItemAll(tempTerminArr,choosenOptionID);}else{tempTerminArr.push(choosenOptionID)};

        //   tempTerminArr.forEach(choosenItem =>{
        //     passiveOptions.forEach(item => {
        //       if(item.childNodes[1].dataset.termid == choosenItem){choosenTempArr.push(item.childNodes[1].dataset.name)}
        //     });
        //   });
        //   menuActiveSpan.innerHTML = choosenTempArr.join(', ');
        // }else if(inneArr.includes(+choosenOptionID)){
        //   // inne
        //   tempInneArr.includes(choosenOptionID) ? removeItemAll(tempInneArr,choosenOptionID) : tempInneArr.push(choosenOptionID);

        //   if(tempInneArr.length > 0 ){choosenInneCount = tempInneArr.length;}else if(tempInneArr.length == 0){choosenInneCount = 0};

        //   menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInneCount;
        // }else{
        //   console.log('error');
        // };          


        // menuActiveSpan.dataset.label = choosenOption;
        // menuActiveSpan.innerHTML = menuActiveSpan.getAttribute('data-label');

        // console.log('item: ', menuActiveSpan.getAttribute('data-label'));
        // console.log('item category: ', menuActiveTitle);
        // console.log('item termid: ', +choosenOptionID);

      };      
      showActiveFilterNameFromCookies();

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
      deleteAllCookies();
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
      // priceMinValue = document.querySelector('.dropdown__value-min').innerHTML == NaN ? 0 : parseInt(document.querySelector('.dropdown__value-min').childNodes[0].innerHTML.split(' ').join(''));
      priceMaxValue = document.querySelector('.dropdown__value-max').childNodes[0].innerHTML == 'Max' ? 10000000 : parseInt(document.querySelector('.dropdown__value-max').childNodes[0].innerHTML.split(' ').join(''));
      
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
      console.log('filtered new arr html elements: ', newArrHTMLList);

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
      let searchedFromCookiesIDs = document.querySelectorAll('.active');
      let searchedReadyArr = [];

      searchedFromCookiesIDs.forEach(item =>{
        console.log('term from cookies',item.dataset.termid);
        searchedReadyArr.push(item.dataset.termid)
      });

      console.log('logggggg: ',searchedReadyArr.join());

      deleteAllCookies();
      // document.cookie = "filteredTermsFromCookies=; PriceMinFromCookies=; PriceMaxFromCookies=;";
      let pricesID = runSearchingPrice();
      let metrazeID = runSearchingMetraz();

      YMCTools({
        target: '.data-target-ymc2',
        terms: choosenOptions.join() + ',' + pricesID.join() + ',' + metrazeID.join() + ',' + searchedReadyArr.join(),      
      }).apiTermUpdate(); 

      console.log('in btn prices: ', pricesID.join());
      console.log('in btn metraze: ', metrazeID.join());
      console.log('all terms id searched: ', pricesID.join() + ',' + metrazeID.join() + ',' + choosenOptions.join() + ',' + searchedReadyArr.join());
    });

    // *******************************************************





  
    


    let stopSearching = 0;
    wp.hooks.addAction('ymc_before_loaded_data_148_2', 'smartfilter', function(){
      // let fromWhatPageInfo = document.referrer;
      // if (fromWhatPageInfo == 'https://pbgorski.webo.design/pl/o-inwestycji-osiedle-srebrniki/' && stopSearching < 0){
      //   console.log('from osiefle srebrniki');
      //   YMCTools({
      //     target: '.data-target-ymc2', 
      //     terms: '72',      
      //   }).apiTermUpdate(); 

      //   stopSearching++;
      // }

      document.querySelectorAll('.arrow-down').forEach(span =>{
        span.innerHTML = ''
      });

      
    });
  };

  // -------------------------------------------------------------------------------------


  document.body.addEventListener('click', () => {
    document.querySelectorAll('.menu-passive').forEach(activeItem =>{
      activeItem.style.display = 'none';  
      // console.log('click1');

    });

    document.querySelectorAll('.dropdown__list').forEach(activeItem2 =>{
      if(activeItem2.classList.contains('dropdown__list_active-metraz') || activeItem2.classList.contains('dropdown__list_active')){
        // activeItem2.classList.remove('dropdown__list_active-metraz');  
        // activeItem2.classList.remove('dropdown__list_active');  
        // activeItem2.style.display = 'none';  
      }
    });
    
  });
    document.querySelectorAll('.menu-active').forEach(activeMenu =>{
      activeMenu.addEventListener('click', () =>{
        document.querySelectorAll('.menu-passive').forEach(activeItemPassive =>{
          // console.log('click2');
          if(activeItemPassive.style.display == 'block'){
            activeItemPassive.classList.toggle('hidden')
          }else if(!activeItemPassive.style.display == 'block'){
            activeItemPassive.classList.remove('hidden')
          }
        });
      })
    });




});
