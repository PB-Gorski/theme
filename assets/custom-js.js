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

  // sortowanie listy mieszkan
  // setring chosen option in active window

  let passiveOptions = document.querySelectorAll('.menu-passive__item');

  console.log('passive options', passiveOptions);

  passiveOptions.forEach(item => {
    item.addEventListener('click', ()=>{
      console.log(item.childNodes[1].dataset.name);
    });
  });
  // price selects
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
  const listaMieszkanContainer = document.querySelector(".container-post-custom-layout");
  const mainDropDown = document.querySelectorAll('.dropdown__value');
  const dropDownList = document.querySelectorAll('.dropdown__list');
  const dropDowns = Array.from(document.querySelectorAll('.dropdown__link'));
  let priceValueArr = [];
  let newArr = [];
  let newArrHTMLList = [];
  let target;

  if(document.body.classList.contains('post-type-archive-mieszkania')){
    listaMieszkanContainer.insertAdjacentHTML('beforebegin', sortingBarHTML);
  };
  let btnSearch = document.querySelector('.btn-search');

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



  const menuItemsPassive = document.querySelectorAll('.menu-link');
  const foundedPostOnStart = document.querySelector('.js-foundedPostOnStart');;
  let counter = 0;

  wp.hooks.addAction('ymc_after_loaded_data_148_1', 'smartfilter', function(){
    if (counter == 2){
      console.log('posts loaded2');
      foundedPostOnStart.classList.add('hidden');
    };
    counter++;
  });


  // price selects
  function runSorting(){
    priceValueArr = [];
    newArr = [];
    newArrHTMLList = [];

    foundedPostOnStart.classList.add('hidden');
    const dropDownFilters = document.querySelectorAll(".dropdown-filter");
    let priceValueArrNodeList = dropDownFilters[5].childNodes[1].childNodes;
    priceMinValue = parseInt(document.querySelector('.dropdown__value-min').childNodes[0].innerHTML.split(' ').join(''));
    priceMaxValue = parseInt(document.querySelector('.dropdown__value-max').childNodes[0].innerHTML.split(' ').join(''));
    // priceValue = parseInt(priceValueArrNodeList[2].childNodes[1].dataset.name.split(' ').join(''));

    // console.log(priceMinValue,priceMaxValue);
    // console.log('runSorting2');
    console.log('no spaces', priceMinValue,priceMaxValue);

    for (i = 1 ; i < priceValueArrNodeList.length ; i++){
      priceValueArr.push(parseInt(priceValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join('')));
      priceValueArrNodeList[i].childNodes[1].dataset.name = parseInt(priceValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join(''));
    }
  
    priceValueArr.forEach(priceValue => {
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

    // console.log(newArrHTMLList);
    // console.log('runSorting2 finish');

    priceValueArr = [];
    newArr = [];
    newArrHTMLList = [];
    priceValueArrNodeList = [];

    YMCTools({
      target: '.data-target-ymc1',
      terms: filteredTermsID.join(),            
    }).apiTermUpdate(); 
  };
  btnSearch.addEventListener('click', runSorting);


  if(document.body.classList.contains('page-id-606') || document.body.classList.contains('page-id-11') || document.body.classList.contains('page-id-13')){
  }

  const postsFoundHTML = document.querySelector('.posts-found');
  const postsFoundParentHTML = document.querySelector('.filter-layout3-148');
  
  wp.hooks.addAction('ymc_after_loaded_data_148_1', 'smartfilter', function(target, res){
    // postsCount = res.found;
    // console.log(res.found);
    // console.log('Complete loaded data ' + target + ' ' + res.found);

    // postsFoundHTML.insertAdjacentHTML('afterend', '<p class="firstTime bg-white text-[24px] text-center aos-init aos-animate">Znaleziono ' + postsCount + ' ofert pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń 151)</span></p>');
  });


  
  // search more options handle
  const btnMore = document.querySelector('.btn-more');
  const searchBar = document.querySelector('.filter-entry');
  
  if(document.body.classList.contains('post-type-archive-mieszkania')){
    btnMore.addEventListener('click',()=>{
      (window.innerWidth > 480) ? searchBar.classList.toggle('desktop:h-[260px]') : searchBar.classList.toggle('h-[450px]');
      foundedPostOnStart.classList.toggle('top-[320px]')

    });
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
            }
          }else{
            // dla ceny fix na int
            if (parseInt(b[i].firstChild.childNodes[j].firstChild.textContent.split(' ').join('')) > parseInt(b[i+1].firstChild.childNodes[j].firstChild.textContent.split(' ').join(''))) {
              shouldSwitch = true;
              break;
            }
          }
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
            }
          }
        }        
      }
      if (shouldSwitch) {
        b[i].parentNode.insertBefore(b[i + 1], b[i]);
        switching = true;
        switchcount ++;
      } else {
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }

  // ---------------

  const btnsSort = document.querySelectorAll('.js-sort');
  btnIndex=1;
  counter=1;
  btnsSort.forEach((btn,index) => {
    btn.addEventListener('click', () => {
      indexFrom1 = index + 1;
      currentFiltr = indexFrom1 + index;

      sortListDir(index);
      
      for (let i = 1 ; i <= (17) ; i=i+2){
        if (i == currentFiltr){
          if( btnsSort[currentFiltr-counter].classList.contains('sort-arrow-up')){
            btnsSort[currentFiltr-counter].classList.remove('sort-arrow-up');
            btnsSort[currentFiltr-counter].classList.add('sort-arrow-down');
          }else{
            btnsSort[currentFiltr-counter].classList.add('sort-arrow-up');
            btnsSort[currentFiltr-counter].classList.remove('sort-arrow-down');
          }
        }else if(i != currentFiltr){
          btnsSort[i-counter].classList.remove('sort-arrow-up','sort-arrow-down')
        }
        counter++
      };
      counter=1;
    });
  });










});
