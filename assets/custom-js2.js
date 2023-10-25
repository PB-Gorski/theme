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
        let optionSpan = document.createElement('span');
        let choosenOption = item.childNodes[1].dataset.termid;
        let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;
        
        // optionSpan.innerText = choosenOption;

        choosenOptions.push(choosenOption)
        console.log(choosenOptions);

        document.cookie = "filteredTerms=" + choosenOptions.join();

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
        console.log('filter type: ', filterType);
        console.log('cookie data: ', document.cookie);
      });
    });
    passiveOptionsCustomFilters.forEach(item => {
      item.addEventListener('click', () => {
        let optionSpan = document.createElement('span');
        let choosenOption = item.childNodes[1].textContent;
        let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;

        optionSpan.innerText = choosenOption;

        if(filterType == 'Cena od:'){
          document.cookie = "cenaOd=" + choosenOption;
        }else if(filterType == 'Cena do:'){
          document.cookie = "cenaDo=" + choosenOption;
        }
        console.log('filter type: ', filterType);
        console.log('cookie data: ', document.cookie);
      });
    });


    // frontpage custom dropdowns handle
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

      dropDownList.forEach(el =>{
        if(el.classList.contains('dropdown__list_active')){
          el.classList.remove('dropdown__list_active')
        };
      });
    };  
    


  };


  // -------------------------------------------------------------------------------------













});
