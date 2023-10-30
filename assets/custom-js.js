window.addEventListener("load", function() {
  const body = document.body;
  // navbar mobile handling
  const btnOpenMenu = document.querySelector(".btn-open-menu");
  const mainNavMenu = document.querySelector(".mobile-nav-menu");
  const logo = document.querySelector(".logo-mobile");

  btnOpenMenu.addEventListener("click", () => {
    if (mainNavMenu.classList.contains("opacity-[0]")) {
      mainNavMenu.classList.remove("opacity-[0]");
      mainNavMenu.classList.add("opacity-[1]");
      mainNavMenu.classList.replace('z-[-2]','z-[3]');
      mainNavMenu.classList.remove('translate-x-[100%]');
      btnOpenMenu.classList.add("menu-active");
      logo.classList.add("opacity-0");
    } else if (mainNavMenu.classList.contains("opacity-[1]")) {
      mainNavMenu.classList.remove("opacity-[1]");
      mainNavMenu.classList.add("opacity-[0]");
      mainNavMenu.classList.replace('z-[3]', 'z-[-2]');
      mainNavMenu.classList.add('translate-x-[100%]');
      btnOpenMenu.classList.remove("menu-active");
      logo.classList.remove("opacity-0");
    }
  });

  const hoverMenuItem = document.querySelector('.hover-item');
  const modal = document.querySelector('.modal');
  const tabBtns = document.querySelectorAll('.tabBtn');
  const headerTabs = document.querySelectorAll('.headerTab');

  hoverMenuItem.addEventListener('mouseover',()=>{
    modal.classList.replace('opacity-0', 'opacity-100');
    modal.classList.replace('z-[-1]', 'z-[1]');
  });
  modal.addEventListener('mouseleave',()=>{
    modal.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('z-[1]', 'z-[-1]');
  });
  tabBtns.forEach((tabBtn,index) => {
    tabBtn.addEventListener('click', () => {
      for(let i = 0 ; i<3 ; i++){
        tabBtns[i].classList.remove('tab-active');
        headerTabs[i].classList.remove('block');
        headerTabs[i].classList.add('hidden');
      }
      tabBtn.classList.add('tab-active');
      headerTabs[index].classList.remove('hidden');
      headerTabs[index].classList.add('block');
    });
  });

  for (const dropdown of document.querySelectorAll(".select-wrapper")) {
    dropdown.addEventListener('click', function() {
        this.querySelector('.select').classList.toggle('open');
    })
  }

  for (const option of document.querySelectorAll(".custom-option")) {
    option.addEventListener('click', function() {
      if (!this.classList.contains('selected')) {
        // this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
        this.classList.add('selected');
        this.closest('.select').querySelector('.select__trigger span').textContent = this.textContent;
      };
    });
  };

  window.addEventListener('click', function(e) {
    for (const select of document.querySelectorAll('.select')) {
        if (!select.contains(e.target)) {
            select.classList.remove('open');
        }
    };
  });

  // call pop up modal
  const btnCloseModal = document.querySelector('.btn-close');
  const callModal = document.querySelector('.call-back-modal');
  const modalBg = document.querySelector('.call-back-modal-bg');
  const btnOpenModal = document.querySelector('.btn-leave-phone');

  btnCloseModal.addEventListener('click',()=>{
    callModal.classList.replace('opacity-100', 'opacity-0');
    callModal.classList.replace('z-[1]', 'z-[-1]');
    modalBg.classList.replace('opacity-100', 'opacity-0');
    modalBg.classList.replace('z-[1]', 'z-[-1]');
  });
  btnOpenModal.addEventListener('click',()=>{
    callModal.classList.replace('opacity-0', 'opacity-100');
    callModal.classList.replace('z-[-1]', 'z-[1]');
    modalBg.classList.replace('opacity-0', 'opacity-100');
    modalBg.classList.replace('z-[-1]', 'z-[1]');
  })


  // count up

  // const count1 = document.querySelector('#count1');

  // target = id of html element or let of previously selected html element where counting occurs
  // startVal = the value you want to begin at
  // endVal = the value you want to arrive at
  // decimals = number of decimal places, default 0
  // duration = duration of animation in seconds, default 2
  // options = optional object of options (see below)

  function countUp(target, startVal, endVal, decimals, duration, options) {

    // default options
    this.options = options || {
        useEasing: true, // toggle easing
        useGrouping: true, // 1,000,000 vs 1000000
        separator: ' ', // character to use as a separator
        decimal: ',', // character to use as a decimal
    }

    // make sure requestAnimationFrame and cancelAnimationFrame are defined
    // polyfill for browsers without native support
    // by Opera engineer Erik Möller
    let lastTime = 0;
    let vendors = ['webkit', 'moz', 'ms'];
    for (let x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
    }
    if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = function(callback, element) {
            let currTime = new Date().getTime();
            let timeToCall = Math.max(0, 16 - (currTime - lastTime));
            let id = window.setTimeout(function() {
                callback(currTime + timeToCall);
            },
            timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        }
    }
    if (!window.cancelAnimationFrame) {
        window.cancelAnimationFrame = function(id) {
            clearTimeout(id);
        }
    }

    let self = this;

    this.d = (typeof target === 'string') ? document.getElementById(target) : target;
    this.startVal = Number(startVal);
    this.endVal = Number(endVal);
    this.countDown = (this.startVal > this.endVal) ? true : false;
    this.startTime = null;
    this.timestamp = null;
    this.remaining = null;
    this.frameVal = this.startVal;
    this.rAF = null;
    this.decimals = Math.max(0, decimals || 0);
    this.dec = Math.pow(10, this.decimals);
    this.duration = duration * 1000 || 2000;

    this.easeOutExpo = function(t, b, c, d) {
        return c * (-Math.pow(2, - 10 * t / d) + 1) * 1024 / 1023 + b;
    }
    this.count = function(timestamp) {
      if (self.startTime === null) self.startTime = timestamp;
      self.timestamp = timestamp;
      let progress = timestamp - self.startTime;
      self.remaining = self.duration - progress;

      if (self.options.useEasing) {
          if (self.countDown) {
              let i = self.easeOutExpo(progress, 0, self.startVal - self.endVal, self.duration);
              self.frameVal = self.startVal - i;
          } else {
              self.frameVal = self.easeOutExpo(progress, self.startVal, self.endVal - self.startVal, self.duration);
          }
      } else {
          if (self.countDown) {
              let i = (self.startVal - self.endVal) * (progress / self.duration);
              self.frameVal = self.startVal - i;
          } else {
              self.frameVal = self.startVal + (self.endVal - self.startVal) * (progress / self.duration);
          }
      }

      // decimal
      self.frameVal = Math.round(self.frameVal * self.dec) / self.dec;

      // don't go past endVal since progress can exceed duration in the last frame
      if (self.countDown) {
          self.frameVal = (self.frameVal < self.endVal) ? self.endVal : self.frameVal;
      } else {
          self.frameVal = (self.frameVal > self.endVal) ? self.endVal : self.frameVal;
      }

      // format and print value
      self.d.innerHTML = self.formatNumber(self.frameVal.toFixed(self.decimals));

      // whether to continue
      if (progress < self.duration) {
          self.rAF = requestAnimationFrame(self.count);
      } else {
          if (self.callback != null) self.callback();
      }
    }
    this.start = function(callback) {
      self.callback = callback;
      // make sure values are valid
      if (!isNaN(self.endVal) && !isNaN(self.startVal)) {
          self.rAF = requestAnimationFrame(self.count);
      } else {
          console.log('countUp error: startVal or endVal is not a number');
          self.d.innerHTML = '--';
      }
      return false;
    }
    this.stop = function() {
      cancelAnimationFrame(self.rAF);
    }
    this.reset = function() {
      self.startTime = null;
      cancelAnimationFrame(self.rAF);
      self.d.innerHTML = self.formatNumber(self.startVal.toFixed(self.decimals));
    }
    this.resume = function() {
        self.startTime = null;
        self.duration = self.remaining;
        self.startVal = self.frameVal;
        requestAnimationFrame(self.count);
    }
    this.formatNumber = function(nStr) {
      nStr += '';
      let x, x1, x2, rgx;
      x = nStr.split('.');
      x1 = x[0];
      x2 = x.length > 1 ? self.options.decimal + x[1] : '';
      rgx = /(\d+)(\d{3})/;
      if (self.options.useGrouping) {
          while (rgx.test(x1)) {
              x1 = x1.replace(rgx, '$1' + self.options.separator + '$2');
          }
      }
      return x1 + x2;
    }

    // format startVal on initialization
    self.d.innerHTML = self.formatNumber(self.startVal.toFixed(self.decimals));
    }

    // Example:
    // let numAnim = new countUp("SomeElementYouWantToAnimate", 0, 99.99, 2, 2.5);
    // numAnim.start();
    // with optional callback:
    // numAnim.start(someMethodToCallOnComplete);

    /* CountUp Activation */
    if(this.document.body.classList.contains('page-template-page-about')){
      let count1 = new countUp('count1', 0, 40, 0, 1.5);
      let count2 = new countUp('count2', 0, 125, 0, 1.5);
      let count3 = new countUp('count3', 0, 4000, 0, 1);
      count1.start();
      count2.start();
      count3.start();
    };

    // $('#trigger').click(function() {
    // count1.reset();
    // count2.reset();
    // count3.reset();
    // count1.start();
    // count2.start();
    // count3.start();
    // });


  // contact dropdown handle
  const clickBar = document.querySelectorAll(".click-bar");
  const stepParagraph = document.querySelectorAll(".step-paragraph");
  const clickBarIcon = document.querySelectorAll('.click-bar-icon');
  const barTitle = document.querySelectorAll('.bar-title-wrapper');
  // const dropDownList = document.querySelector('.contact-drop-down');

  clickBar.forEach(function(item,index) {
    item.addEventListener("click", () => {
      if (!stepParagraph[index].classList.contains('active')) {
        clickBar[index].classList.add('text-black');
        stepParagraph[index].classList.replace('inactive', 'active');
        barTitle[index].classList.replace('text-bgDarkGray', 'text-black');
        clickBarIcon[index].innerHTML = '-';
      } else if (stepParagraph[index].classList.contains('active')) {
        clickBar[index].classList.remove('text-black');
        stepParagraph[index].classList.replace('active', 'inactive');
        clickBarIcon[index].innerHTML = '+';
        barTitle[index].classList.replace('text-black', 'text-bgDarkGray');
      }
    });
  });


  //  ---------------------------------------------------------------------- 
  //  page lista mieszkan - filtrowanie i sortowanie listy mieszkan
  if(document.body.classList.contains('post-type-archive-mieszkania')){
    console.log('lista mieszkan page');
    // wyszukiwanie mieszkan po filtrach (cena)
    // setting chosen option in active window
    let passiveOptions = document.querySelectorAll('.menu-passive__item');
    let counter2 = 0;
    passiveOptions.forEach(item => {
      item.addEventListener('click', () => {
        let optionSpan = document.createElement('span');
        let choosenOption = item.childNodes[1].dataset.name;
        let stopAdding = false;
        optionSpan.innerText = choosenOption;

        let choosenOptionsArr = item.parentNode.previousElementSibling.childNodes[0].childNodes;
        choosenOptionsArr.forEach(option => {
          if(option.innerText == choosenOption){
            console.log('have child span');
            stopAdding = true;
            console.log('choosen option text for cleaning', choosenOption);
            console.log('clear existing span');
            option.remove('span');
          };
        });

        if(!stopAdding){
          // console.log('check for start ', item.parentNode.previousElementSibling.childNodes[0].childNodes[0].tagName);
          if(item.parentNode.previousElementSibling.childNodes[0].childNodes[0] === undefined){
            console.log('undefined span 0');
          }else{
            console.log('span wypelniony');
          }

          if(counter>2){
            
            console.log('conter>1');
            item.parentNode.previousElementSibling.childNodes[0].appendChild(optionSpan);
            console.log(counter2);
          }else{
            console.log('else');

            let optionSpan2 = document.createElement('span');
            let choosenOption2 = item.childNodes[1].dataset.name;
            optionSpan2.innerText = choosenOption2;
            item.parentNode.previousElementSibling.childNodes[0].innerText = '';
            item.parentNode.previousElementSibling.childNodes[0].appendChild(optionSpan2);
            counter2++;
          };
        }
        stopAdding = false;
        console.log(stopAdding);
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

    const foundedPostOnStart = document.querySelector('.js-foundedPostOnStart');;
    let counter = 0;

    wp.hooks.addAction('ymc_after_loaded_data_148_1', 'smartfilter', function(){
      if (counter == 2){
        console.log('posts loaded2');
        foundedPostOnStart.classList.add('hidden');
      };
      counter++;
    });

    function runSearching(){
      priceValueArr = [];
      newArr = [];
      newArrHTMLList = [];

      foundedPostOnStart.classList.add('hidden');
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

      // YMCTools({
      //   target: '.data-target-ymc1',
      //   terms: filteredTermsID.join(),            
      // }).apiTermUpdate(); 
      return filteredTermsID;
    };
    // btnSearch.addEventListener('click', runSearching);

    // search more options handle
    const btnMore = document.querySelector('.btn-more');
    const searchBar = document.querySelector('.filter-entry');
    
    if(document.body.classList.contains('post-type-archive-mieszkania')){
      btnMore.addEventListener('click',()=>{
        if(window.innerWidth > 480){
          searchBar.classList.toggle('desktop:h-[240px]');
          searchBar.classList.toggle('gap-y-[0px]');
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
        }
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
        if (metrazValue < metrazMaxValue && metrazValue > metrazMinValue){
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
      console.log('filtered new arr html elements: ', newArrHTMLListMetraz);
      newArrHTMLListMetraz.forEach(el2 =>{
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
      newArrMetraz = [];
      newArrHTMLListMetraz = [];
      metrazValueArrNodeList = [];

      return filteredTermsIDMetraz;
    };

    function filteredTermsMerge(){
      console.log('filteredTermsMerge');
      let filteredPrices = runSearching();
      let filteredMetraze = runSearchingMetraz();
      console.log('prices: ',filteredPrices);
      console.log('metraze: ',filteredMetraze);
      console.log('all merged', filteredPrices.join() + ',' + filteredMetraze.join());

      // let filteredTerms = filteredTermsIDMetraz.join() + ',' + filteredTermsID.join()

      YMCTools({
        target: '.data-target-ymc1',
        terms: filteredPrices.join() + ',' + filteredMetraze.join()          
      }).apiTermUpdate(); 
    }
    // *******************************************************
    btnSearch.addEventListener('click', () =>{
      console.log('btn search start');
      runSearching();
      console.log('runsearching done');
      runSearchingMetraz();
      console.log('runsearchingMetraz done');
      filteredTermsMerge();
      console.log('merged done');
    } );
    // *******************************************************

    // sortowanie listy mieszkan
    const listaMieszkanContainer = document.querySelector(".container-post-custom-layout");
    const sortingBarHTML = `
    <ul class="wp-block-list js-injected container mx-auto all-taxonomy-list px-[20px] bg-[#2f384d] py-[22px] flex flex-wrap items-center justify-between text-[13px] font-bold z-0 relative">
      <li class="js-sort js-sort-miasto w-[100px] uppercase text-[#8a8f99] cursor-pointer relative sort-arrow">miasto</li>
      <li class="js-sort js-sort-inwestycja w-[180px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">inwestycja</li>
      <li class="js-sort js-sort-budynek w-[100px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">budynek</li>
      <li class="js-sort js-sort-nr w-[65px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">nr</li>
      <li class="js-sort js-sort-pokoje w-[100px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">pokoje</li>
      <li class="js-sort js-sort-metraz w-[110px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">metraz</li>
      <li class="js-sort js-sort-pietro w-[100px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">pietro</li>
      <li class="js-sort js-sort-cena w-[130px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">cena</li>
      <li class="js-sort js-sort-termin w-[175px] uppercase text-[#8a8f99] cursor-pointer sort-arrow relative">termin</li>
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

    let filteredTerms = getCookie("filteredTerms");
    let miasto = getCookie("miasto");
    let inwestycja = getCookie("inwestycja");
    let pokoje = getCookie("pokoje");
    let cenaOd = parseInt(getCookie("cenaOd").split(' ').join(''));
    let cenaDo = parseInt(getCookie("cenaDo").split(' ').join(''));



    priceMinValue = cenaOd;
    priceMaxValue = cenaDo;
    function runSearching(){
      priceValueArr = [];
      newArr = [];
      newArrHTMLList = [];

      foundedPostOnStart.classList.add('hidden');
      const dropDownFilters = document.querySelectorAll(".dropdown-filter");
      let priceValueArrNodeList = dropDownFilters[5].childNodes[1].childNodes;
      // priceMinValue = parseInt(document.querySelector('.dropdown__value-min').childNodes[0].innerHTML.split(' ').join(''));
      priceMaxValue = document.querySelector('.dropdown__value-max').innerHTML == 'Max' ? 10000000 : cenaDo;
      
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

      // YMCTools({
      //   target: '.data-target-ymc1',
      //   terms: filteredTermsID.join(),            
      // }).apiTermUpdate(); 
      return filteredTermsID;
    };
    let filteredCustomPriceFromCookies = runSearching();
    console.log(filteredCustomPriceFromCookies.join());

    filteredTermsFromCookies = [miasto,inwestycja,pokoje,cenaOd,cenaDo]
    
    console.log(filteredTermsFromCookies);
    console.log(miasto + ',' + inwestycja);
    console.log('filteredTerms from frontpage: ',filteredTerms);

  
    
    function runFromCookies(){
      YMCTools({
        target: '.data-target-ymc1',
        terms: filteredTerms,      
      }).apiTermUpdate(); 
      console.log('after YMC api update');
    };

    if(filteredTerms != null){
      setTimeout(() => {
        runFromCookies()
      }, 1000);
    };

    wp.hooks.addAction('ymc_after_loaded_data_148_1', 'smartfilter', function(){
    });
  }; //end page lista mieszkan















  //  frontpage - filtrowanie i sortowanie listy mieszkan
  // if(document.body.classList.contains('home')){
  //   console.log('home');
  //   document.cookie = "miasto=; inwestycja=; pokoje=; cenaOd=; cenaDo=;";
  //   function deleteAllCookies() {
  //       const cookies = document.cookie.split(";");
    
  //       for (let i = 0; i < cookies.length; i++) {
  //           const cookie = cookies[i];
  //           const eqPos = cookie.indexOf("=");
  //           const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
  //           document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  //       }
  //   };
  //   deleteAllCookies();

  //   // search more options handle
  //   const btnMore = document.querySelector('.btn-more');
  //   const searchBar = document.querySelector('.filter-entry');
    
  //   btnMore.addEventListener('click',()=>{
  //     if(window.innerWidth > 480){
  //       searchBar.classList.toggle('desktop:h-[240px]');
  //       searchBar.classList.toggle('gap-y-[0px]');
  //     }else{
  //       searchBar.classList.toggle('h-[450px]');
  //     };
  //   });

  //   // wyszukiwanie mieszkan po filtrach (cena)
  //   // setting chosen option in active window
  //   let passiveOptions = document.querySelectorAll('.menu-passive__item');
  //   let passiveOptionsCustomFilters = document.querySelectorAll('.dropdown__item');
  //   passiveOptions.forEach(item => {
  //     item.addEventListener('click', () => {
  //       let optionSpan = document.createElement('span');
  //       let choosenOption = item.childNodes[1].dataset.termid;
  //       let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;

  //       optionSpan.innerText = choosenOption;

  //       if(filterType == 'Miasto:'){
  //         document.cookie = "miasto=" + choosenOption;
  //       }else if(filterType == 'Inwestycja:'){
  //         document.cookie = "inwestycja=" + choosenOption;
  //       }else if(filterType == 'Pokoje:'){
  //         document.cookie = "pokoje=" + choosenOption;
  //       }else if(filterType == 'Cena od:'){
  //         document.cookie = "cenaOd=" + choosenOption;
  //       }else if(filterType == 'Cena do:'){
  //         document.cookie = "cenaDo=" + choosenOption;
  //       }
  //       console.log('filter type: ', filterType);
  //       console.log('cookie data: ', document.cookie);
  //     });
  //   });
  //   passiveOptionsCustomFilters.forEach(item => {
  //     item.addEventListener('click', () => {
  //       let optionSpan = document.createElement('span');
  //       let choosenOption = item.childNodes[1].textContent;
  //       let filterType = item.parentNode.previousElementSibling.previousElementSibling.textContent;

  //       optionSpan.innerText = choosenOption;

  //       if(filterType == 'Cena od:'){
  //         document.cookie = "cenaOd=" + choosenOption;
  //       }else if(filterType == 'Cena do:'){
  //         document.cookie = "cenaDo=" + choosenOption;
  //       }
  //       console.log('filter type: ', filterType);
  //       console.log('cookie data: ', document.cookie);
  //     });
  //   });


  //   // frontpage custom dropdowns handle
  //   // price selects
  //   const mainDropDown = document.querySelectorAll('.dropdown__value-price');
  //   const dropDownList = document.querySelectorAll('.dropdown__list');
  //   const dropDowns = Array.from(document.querySelectorAll('.dropdown__link'));
  //   let btnSearch = document.querySelector('.btn-search');
  //   let priceValueArr = [];
  //   let newArr = [];
  //   let newArrHTMLList = [];
  //   let target;

  //   mainDropDown.forEach(dropDownEl =>{
  //     dropDownEl.addEventListener('click', (e) =>{
  //       if(e.target.nextElementSibling){
  //         console.log('span');
  //         e.target.nextElementSibling.classList.toggle('dropdown__list_active');
  //       }else if(e.target.parentNode.nextElementSibling){
  //         console.log('span container');
  //         e.target.parentNode.nextElementSibling.classList.toggle('dropdown__list_active');
  //       }
  //     });
  //   });


  //   dropDowns.forEach(item => {
  //     item.addEventListener('click', choise)
  //   });

  //   function choise(e){
  //     e.preventDefault();
  //     target = e.target.textContent;
  //     e.target.parentNode.parentNode.previousElementSibling.textContent = '';
  //     let spanTarget = document.createElement("span");
  //     spanTarget.innerText = target;
  //     e.target.parentNode.parentNode.previousElementSibling.appendChild(spanTarget);

  //     dropDownList.forEach(el =>{
  //       if(el.classList.contains('dropdown__list_active')){
  //         el.classList.remove('dropdown__list_active')
  //       };
  //     });
  //   };  
    


  // };

  // -------------------------------------------------------------------------------------













});
