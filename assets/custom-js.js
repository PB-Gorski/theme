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
  // const allTabBtn = document.querySelector('.allTabBtn');
  // const gdanskTabBtn = document.querySelector('.gdanskTabBtn');
  // const gdyniaTabBtn = document.querySelector('.gdyniaTabBtn');
  // const modalTab1 = document.querySelector('.tab1');
  // const modalTab2 = document.querySelector('.tab2');
  // const modalTab3 = document.querySelector('.tab3');

  hoverMenuItem.addEventListener('mouseover',()=>{
    modal.classList.replace('opacity-0', 'opacity-100');
    modal.classList.replace('z-[-1]', 'z-[1]');
  });
  // hoverMenuItem.addEventListener('mouseleave',()=>{
  //   modal.classList.replace('opacity-100', 'opacity-0');
  // });

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

  // allTabBtn.addEventListener('click',()=>{
  //   allTabBtn.classList.add('tab-active');
  //   gdanskTabBtn.classList.remove('tab-active');
  //   gdyniaTabBtn.classList.remove('tab-active');
  //   modalTab1.classList.remove('hidden');
  //   modalTab1.classList.add('block');
  //   modalTab2.classList.replace('block','hidden');
  //   modalTab3.classList.replace('block','hidden');
  // });
  // gdanskTabBtn.addEventListener('click',()=>{
  //   allTabBtn.classList.remove('tab-active');
  //   gdanskTabBtn.classList.add('tab-active');
  //   gdyniaTabBtn.classList.remove('tab-active');
  //   modalTab1.classList.add('hidden');
  //   modalTab1.classList.remove('block');
  //   modalTab2.classList.replace('hidden','block');
  //   modalTab3.classList.replace('block','hidden');
  // });
  // gdyniaTabBtn.addEventListener('click',()=>{
  //   allTabBtn.classList.remove('tab-active');
  //   gdanskTabBtn.classList.remove('tab-active');
  //   gdyniaTabBtn.classList.add('tab-active');
  //   modalTab1.classList.add('hidden');
  //   modalTab1.classList.remove('block');
  //   modalTab2.classList.replace('block','hidden');
  //   modalTab3.classList.replace('hidden','block');
  // });


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
    }
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

    // Robert Penner's easeOutExpo
    this.easeOutExpo = function(t, b, c, d) {
        return c * (-Math.pow(2, - 10 * t / d) + 1) * 1024 / 1023 + b;
    }
    this.count = function(timestamp) {

        if (self.startTime === null) self.startTime = timestamp;

        self.timestamp = timestamp;

        let progress = timestamp - self.startTime;
        self.remaining = self.duration - progress;

        // to ease or not to ease
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


  // dropdown handle
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
  const btnMoreHTML = `
    <div class="wp-block-group btn-more js-injected mb-[10px] w-full desktop:w-[140px] h-[62px] bg-[#f5f7fa] flex self-center gap-[10px] justify-center items-center cursor-pointer border-b-[3px] border-b-[#dcdee3]">
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" id="icon_filters" width="24" height="24" viewBox="0 0 24 24" class="injected-svg inject-svg icon-filters">
          <title>icon_filters</title>
          <path class="line" d="M6 4v16m6-16v16m6-16v16"></path>
          <circle class="circle" cx="6" cy="10" r="2"></circle>
          <circle class="circle" cx="12" cy="15" r="2"></circle>
          <circle class="circle" cx="18" cy="10" r="2"></circle>
        </svg>
      </p>
      <p class="text-[18px]">Więcej opcji</p>
    </div>
  `;
  const sortingStartingValue = `
    <p class="text-[24px] text-center aos-init aos-animate">Znaleziono 39 ofert pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń 151)</span></p>
  `;
  const sortingStartingValueHTML =`
    <p class="mb-[50px] bg-white text-[24px] text-center" data-aos="fade-up" data-aos-offset="30">Znaleziono <?php echo $count - 1; ?> oferty pasujących do Twoich kryteriów <span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń <?php echo wp_count_posts('mieszkania')->publish; ?>)</span></p>
  `;
  const BtnCustomPriceSelect = `
  <div class="mySortingBar w-[281px]">
    <div class="content h-[59px]">
      <div class="card flex gap-[1px]">
        <div class="dropdown w-[140px]">
          <div class="dropdown__value dropdown__value-min">min</div>
          <ul class="dropdown__list">
            <li class="dropdown__item">
              <a href="" class="dropdown__link">400000</a>
            </li>
            <li class="dropdown__item">
              <a href="" class="dropdown__link">500000</a>
            </li>
            <li class="dropdown__item">
              <a href="" class="dropdown__link">600000</a>
            </li>
            <li class="dropdown__item">
              <a href="" class="dropdown__link">800000</a>
            </li>
          </ul>
        </div>
        <div class="dropdown w-[140px]">
          <div class="dropdown__value dropdown__value-max">max</div>
          <ul class="dropdown__list">
            <li class="dropdown__item">
              <a href="" class="dropdown__link">400002</a>
            </li>
            <li class="dropdown__item">
              <a href="" class="dropdown__link">500002</a>
            </li>
            <li class="dropdown__item">
              <a href="" class="dropdown__link">600002</a>
            </li>
            <li class="dropdown__item">
              <a href="" class="dropdown__link">800002</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  `;
  const btnFilterSerach = `
    <div class="wp-block-group group btn-search relative bg-primaryRed text-white w-full desktop:w-[140px] h-[62px] flex items-center justify-center gap-[15px] before:content-[''] before:inline-block before:absolute before:bottom-0 before:left-0 before:w-full before:min-h-[0%] hover:before:min-h-[100%] before:bg-[#9C0927] before:transition-height before:duration-300 before:ease cursor-pointer">
      <p class=" z-[1]">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" class="injected-svg inject-svg icon-search">
          <defs>
            <style></style>
          </defs>
          <g id="icon_search" fill="none" stroke="#fff" stroke-width="2">
            <circle cx="6.5" cy="6.5" r="5.5"></circle>
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 15l-4-4"></path>
          </g>
        </svg>
      </p>
      <p class="font-bold z-[1]">Szukaj</p>
    </div>
  `;

  if(document.body.classList.contains('post-type-archive-mieszkania')){
    listaMieszkanContainer.insertAdjacentHTML('beforebegin', sortingBarHTML);
    dropDownFilters[2].insertAdjacentHTML('afterend', btnFilterSerach);
    dropDownFilters[2].insertAdjacentHTML('afterend', btnMoreHTML);
    dropDownFilters[2].insertAdjacentHTML('afterend', BtnCustomPriceSelect);
    
    // postsFoundHTML.insertAdjacentHTML('afterend', sortingStartingValueHTML);
    // postsFoundParentHTML.insertAdjacentHTML('afterend', 'test2');


  };

    // dropdown test
    const mainDropDown = document.querySelectorAll('.dropdown__value');
    const dropDownList = document.querySelectorAll('.dropdown__list');
    const dropDowns = Array.from(document.querySelectorAll('.dropdown__link'));
    let target;
  
    mainDropDown.forEach(dropDown =>{
      dropDown.addEventListener('click', (e) =>{
        e.target.nextElementSibling.classList.toggle('dropdown__list_active');
      });
    });
  
    dropDowns.forEach(item => {
      item.addEventListener('click',  choise)
    });
  
    function choise(e,){
      e.preventDefault();
      target = e.target.textContent;
      e.target.parentNode.parentNode.previousElementSibling.textContent = (target);
      dropDownList.forEach(el =>{
        if(el.classList.contains('dropdown__list_active')){
          el.classList.remove('dropdown__list_active')
        };
      });
    };

  // price selects
  const dropDownFilters = document.querySelectorAll(".dropdown-filter");
  const priceValueArrHTMLCol = dropDownFilters[4].childNodes[1].children;
  const priceValueArrNodeList = dropDownFilters[4].childNodes[1].childNodes;
  const priceValue = parseInt(priceValueArrNodeList[2].childNodes[1].dataset.name.split(' ').join(''));
  let btnSearch = document.querySelector('.btn-search');
  let priceMinValue = parseInt(document.querySelector('.dropdown__value-min').innerHTML);
  let priceMaxValue = parseInt(document.querySelector('.dropdown__value-max').innerHTML);
  let priceValueArr = [];
  let newArr = [];
  let newArrHTMLList = [];

  // nodeElem to int
  for (i = 2 ; i < priceValueArrNodeList.length ; i++){
    priceValueArr.push(parseInt(priceValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join('')));
    priceValueArrNodeList[i].childNodes[1].dataset.name = parseInt(priceValueArrNodeList[i].childNodes[1].dataset.name.split(' ').join(''));
  }

  console.log(priceValueArr);


  console.log('backup');
  priceValueArr.forEach(priceValue => {
    if (priceValue < 600000 && priceValue > 400000){
      newArr.push(priceValue);
    };
  });

  console.log(newArr);

  newArr.forEach(elem => {
    for(j = 2 ; j < priceValueArrNodeList.length ; j++){
      if (parseInt(priceValueArrNodeList[j].childNodes[1].dataset.name) == elem){
        newArrHTMLList.push(priceValueArrNodeList[j].childNodes[1]);
      };
    };
  });

  console.log(newArrHTMLList);


  newArrHTMLList.forEach(htmlElemList => {
    htmlElemList.click();
  });

  function runSorting(){
    console.log('runSorting2');
    // priceValueArr.forEach(priceValue => {
    //   if (priceValue < priceMaxValue && priceValue > priceMinValue){
    //     newArr.push(priceValue);
    //   };
    // });

    // newArr.forEach(elem => {
    //   for(j = 2 ; j < priceValueArrNodeList.length ; j++){
    //     if (parseInt(priceValueArrNodeList[j].childNodes[1].dataset.name) == elem){
    //       newArrHTMLList.push(priceValueArrNodeList[j].childNodes[1]);
    //     };
    //   };
    // });

    // newArrHTMLList.forEach(htmlElemList => {
    //   htmlElemList.click();
    // });
  };

  btnSearch.addEventListener('click', runSorting);





  if(document.body.classList.contains('page-id-606') || document.body.classList.contains('page-id-11') || document.body.classList.contains('page-id-13')){
  }


  const listaMieszkanContainer = document.querySelector(".container-post-custom-layout");


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
      console.log('more flters');
      (window.innerWidth > 480) ? searchBar.classList.toggle('desktop:h-[160px]') : searchBar.classList.toggle('h-[450px]');
    });
  };

  function sortListDir(j) {
    let list, i, switching, b, shouldSwitch, dir, switchcount = 0;
    // list = document.querySelector(".wp-block-post-template");
    list = document.querySelector(".post-entry");
    switching = true;
    dir = "asc"; 
    while (switching) {
      switching = false;
      // b = list.querySelectorAll('.wp-block-post');
      b = list.querySelectorAll('.post-item');
      for (i = 0; i < (b.length - 1); i++) {
        shouldSwitch = false;
        // if (dir == "asc") {
        //   if (b[i].firstElementChild.childNodes[j].innerText.toLowerCase() > b[i + 1].firstElementChild.childNodes[j].innerText.toLowerCase()) {
        //     shouldSwitch = true;
        //     break;
        //   }
        // } else if (dir == "desc") {
        //   if (b[i].firstElementChild.childNodes[j].innerText.toLowerCase() < b[i + 1].firstElementChild.childNodes[j].innerText.toLowerCase()) {
        //     shouldSwitch= true;
        //     break;
        //   }
        // }

        // working
        // if (dir == "asc") {
        //   // console.log('j: ',j);
        //   if (b[i].firstChild.childNodes[j].firstChild.textContent > b[i+1].firstChild.childNodes[j].firstChild.textContent) {
        //     shouldSwitch = true;
        //     break;
        //   }
        // }else if (dir == "desc") {
        //   if (b[i].firstChild.childNodes[j].firstChild.textContent < b[i+1].firstChild.childNodes[j].firstChild.textContent) {
        //     shouldSwitch= true;
        //     break;
        //   }
        // } 
        
        // new
        // b[0].firstChild.childNodes[7].firstChild.textContent.split(' ').join('');
        // console.log('i: ',i);
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




  // const btnsSort = document.querySelectorAll('.js-sort');
  // let counter = 1;

  // btnsSort.forEach((btn,index) => {
  //   btn.addEventListener('click', () => {
  //     indexFrom1 = index + 1;
  //     indexFrom1 == 1 ? sortListDir(indexFrom1) : sortListDir(indexFrom1 + index);
  //     currentFiltr = indexFrom1 + index;

  //     for (let i = 1 ; i <= (17) ; i=+2){
  //       if (i == currentFiltr){
  //         if( btnsSort[currentFiltr-counter].classList.contains('sort-arrow-up')){
  //           btnsSort[currentFiltr-counter].classList.remove('sort-arrow-up');
  //           btnsSort[currentFiltr-counter].classList.add('sort-arrow-down');
  //         }else{
  //           btnsSort[currentFiltr-counter].classList.remove('sort-arrow-down');
  //           btnsSort[currentFiltr-counter].classList.add('sort-arrow-up');
  //         }
  //       }else if(i != currentFiltr){
  //         btnsSort[i-counter].classList.remove('sort-arrow-up','sort-arrow-down')
  //       }
  //       counter++
  //     };
  //     counter = 1;
  //   });
  // });



  // ---------------

  const btnsSort = document.querySelectorAll('.js-sort');
  btnIndex=1;
  counter=1;
  btnsSort.forEach((btn,index) => {
    btn.addEventListener('click', () => {
      indexFrom1 = index + 1;
      // indexFrom1 == 1 ? sortListDir(indexFrom1) : sortListDir(indexFrom1 + index);
      
      // dla poprzedniej listy:
      currentFiltr = indexFrom1 + index;

      // console.log('indexFrom1: ', indexFrom1);
      // console.log('currentFiltr: ',currentFiltr);

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
