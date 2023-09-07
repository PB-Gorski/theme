window.addEventListener("load", function() {
  
  // AOS.init({
  //   duration: 1200,
  // });

  // navbar mobile handling
  const btnOpenMenu = document.querySelector(".btn-open-menu");
  const mainNavMenu = document.querySelector(".mobile-nav-menu");

  btnOpenMenu.addEventListener("click", () => {
    if (mainNavMenu.classList.contains("opacity-[0]")) {
      mainNavMenu.classList.remove("opacity-[0]");
      mainNavMenu.classList.add("opacity-[1]");
      mainNavMenu.classList.replace('z-[-2]','z-[3]');
      mainNavMenu.classList.remove('translate-x-[100%]');
      btnOpenMenu.classList.add("active");
    } else if (mainNavMenu.classList.contains("opacity-[1]")) {
      mainNavMenu.classList.remove("opacity-[1]");
      mainNavMenu.classList.add("opacity-[0]");
      mainNavMenu.classList.replace('z-[3]', 'z-[-2]');
      mainNavMenu.classList.add('translate-x-[100%]');
      btnOpenMenu.classList.remove("active");
    }
  });

  const hoverMenuItem = document.querySelector('.hover-item');
  const modal = document.querySelector('.modal');
  const allTabBtn = document.querySelector('.allTabBtn');
  const gdanskTabBtn = document.querySelector('.gdanskTabBtn');
  const gdyniaTabBtn = document.querySelector('.gdyniaTabBtn');
  const modalTab1 = document.querySelector('.tab1');
  const modalTab2 = document.querySelector('.tab2');
  const modalTab3 = document.querySelector('.tab3');

  hoverMenuItem.addEventListener('mouseover',()=>{
    modal.classList.replace('opacity-0', 'opacity-100');
    modal.classList.replace('z-[0]', 'z-[1]');
  });
  // hoverMenuItem.addEventListener('mouseleave',()=>{
  //   modal.classList.replace('opacity-100', 'opacity-0');
  // });

  modal.addEventListener('mouseleave',()=>{
    modal.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('z-[1]', 'z-[0]');
  });

  allTabBtn.addEventListener('click',()=>{
    allTabBtn.classList.add('tab-active');
    gdanskTabBtn.classList.remove('tab-active');
    gdyniaTabBtn.classList.remove('tab-active');
    modalTab1.classList.remove('hidden');
    modalTab1.classList.add('block');
    modalTab2.classList.replace('block','hidden');
    modalTab3.classList.replace('block','hidden');
  });
  gdanskTabBtn.addEventListener('click',()=>{
    allTabBtn.classList.remove('tab-active');
    gdanskTabBtn.classList.add('tab-active');
    gdyniaTabBtn.classList.remove('tab-active');
    modalTab1.classList.add('hidden');
    modalTab1.classList.remove('block');
    modalTab2.classList.replace('hidden','block');
    modalTab3.classList.replace('block','hidden');
  });
  gdyniaTabBtn.addEventListener('click',()=>{
    allTabBtn.classList.remove('tab-active');
    gdanskTabBtn.classList.remove('tab-active');
    gdyniaTabBtn.classList.add('tab-active');
    modalTab1.classList.add('hidden');
    modalTab1.classList.remove('block');
    modalTab2.classList.replace('block','hidden');
    modalTab3.classList.replace('hidden','block');
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
    }
  });


  // search more options handle
  if(document.body.classList.contains('home')){
    const btnMore = this.document.querySelector('.btn-more');
    const searchBar = this.document.querySelector('#search-bar');
    btnMore.addEventListener('click',()=>{
      (window.innerWidth < 480) ? searchBar.classList.toggle('h-[450px]') : searchBar.classList.toggle('h-[250px]');ś
    });
  };

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

  const count1 = document.querySelector('#count1');

  const countUp = new CountUp(count1, 40);
  if (!countUp.error) {
    console.log('start');
    countUp.start();
  } else {
    console.error(countUp.error);
  };

  let demo = new CountUp(count1, 0, 100);
  demo.start();

  var numAnim = new countUp.CountUp(count1, 2000);
numAnim.start()

/*

    countUp.js
    by @inorganik
    v 1.1.0

*/

// target = id of html element or var of previously selected html element where counting occurs
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
      separator: ',', // character to use as a separator
      decimal: '.' // character to use as a decimal
  }

  // make sure requestAnimationFrame and cancelAnimationFrame are defined
  // polyfill for browsers without native support
  // by Opera engineer Erik Möller
  var lastTime = 0;
  var vendors = ['webkit', 'moz', 'ms'];
  for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
      window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
  }
  if (!window.requestAnimationFrame) {
      window.requestAnimationFrame = function(callback, element) {
          var currTime = new Date().getTime();
          var timeToCall = Math.max(0, 16 - (currTime - lastTime));
          var id = window.setTimeout(function() {
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

  var self = this;

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

      var progress = timestamp - self.startTime;
      self.remaining = self.duration - progress;

      // to ease or not to ease
      if (self.options.useEasing) {
          if (self.countDown) {
              var i = self.easeOutExpo(progress, 0, self.startVal - self.endVal, self.duration);
              self.frameVal = self.startVal - i;
          } else {
              self.frameVal = self.easeOutExpo(progress, self.startVal, self.endVal - self.startVal, self.duration);
          }
      } else {
          if (self.countDown) {
              var i = (self.startVal - self.endVal) * (progress / self.duration);
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
      var x, x1, x2, rgx;
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
  // var numAnim = new countUp("SomeElementYouWantToAnimate", 0, 99.99, 2, 2.5);
  // numAnim.start();
  // with optional callback:
  // numAnim.start(someMethodToCallOnComplete);

  /* CountUp Activation */
  var normalCountUp = new countUp('normal', 0, 2715923.13, 2, 5);
  var monoCountUp = new countUp('monospace', 0, 2715923.13, 2, 5);

  normalCountUp.start();
  monoCountUp.start();

  $('#trigger').click(function() {
  normalCountUp.reset();
  monoCountUp.reset();  
  normalCountUp.start();
  monoCountUp.start();
  });






});