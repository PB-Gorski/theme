window.addEventListener("load", function () {
  AOS.init({
    offset: 40,
    duration: 600,
    once: true,
  });
  // console.log("js ready");
  const body = document.body;
  // navbar mobile handling
  const btnOpenMenu = document.querySelector(".btn-open-menu");
  const mainNavMenu = document.querySelector(".mobile-nav-menu");
  const logo = document.querySelector(".logo-mobile");
  const btnCall = document.querySelector(".btn-call-header-desktop");
  const btnCall2 = document.querySelector(".btn-call-header-mobile");

  btnOpenMenu.addEventListener("click", () => {
    if (mainNavMenu.classList.contains("opacity-[0]")) {
      mainNavMenu.classList.remove("opacity-[0]");
      mainNavMenu.classList.add("opacity-[1]");
      mainNavMenu.classList.remove("translate-x-[100%]");
      btnOpenMenu.classList.add("menu-active");
      logo.classList.add("opacity-0");
      btnCall.classList.add("opacity-0");
      btnCall2.classList.add("opacity-0");
    } else if (mainNavMenu.classList.contains("opacity-[1]")) {
      mainNavMenu.classList.remove("opacity-[1]");
      mainNavMenu.classList.add("opacity-[0]");
      mainNavMenu.classList.add("translate-x-[100%]");
      btnOpenMenu.classList.remove("menu-active");
      logo.classList.remove("opacity-0");
      btnCall.classList.remove("opacity-0");
      btnCall2.classList.remove("opacity-0");
    }
  });

  const hoverMenuItem = document.querySelector(".hover-item");
  const modal = document.querySelector(".modal");
  const tabBtns = document.querySelectorAll(".tabBtn");
  const headerTabs = document.querySelectorAll(".headerTab");

  hoverMenuItem.addEventListener("mouseover", () => {
    modal.classList.replace("opacity-0", "opacity-100");
    modal.classList.replace("z-[-1]", "z-[3]");
  });
  modal.addEventListener("mouseleave", () => {
    modal.classList.replace("opacity-100", "opacity-0");
    modal.classList.replace("z-[3]", "z-[-1]");
  });
  tabBtns.forEach((tabBtn, index) => {
    tabBtn.addEventListener("click", () => {
      for (let i = 0; i < 3; i++) {
        tabBtns[i].classList.remove("tab-active");
        headerTabs[i].classList.remove("block");
        headerTabs[i].classList.add("hidden");
      }
      tabBtn.classList.add("tab-active");
      headerTabs[index].classList.remove("hidden");
      headerTabs[index].classList.add("block");
    });
  });

  for (const dropdown of document.querySelectorAll(".select-wrapper")) {
    dropdown.addEventListener("click", function () {
      this.querySelector(".select").classList.toggle("open");
    });
  }

  for (const option of document.querySelectorAll(".custom-option")) {
    option.addEventListener("click", function () {
      if (!this.classList.contains("selected")) {
        // this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
        this.classList.add("selected");
        this.closest(".select").querySelector(
          ".select__trigger span"
        ).textContent = this.textContent;
      }
    });
  }

  window.addEventListener("click", function (e) {
    for (const select of document.querySelectorAll(".select")) {
      if (!select.contains(e.target)) {
        select.classList.remove("open");
      }
    }
  });
  // ------------------------------------------------------------------------------------------
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
      separator: ",", // character to use as a separator
      decimal: ",", // character to use as a decimal
    };

    // make sure requestAnimationFrame and cancelAnimationFrame are defined
    // polyfill for browsers without native support
    // by Opera engineer Erik Möller
    let lastTime = 0;
    let vendors = ["webkit", "moz", "ms"];
    for (let x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
      window.requestAnimationFrame =
        window[vendors[x] + "RequestAnimationFrame"];
      window.cancelAnimationFrame =
        window[vendors[x] + "CancelAnimationFrame"] ||
        window[vendors[x] + "CancelRequestAnimationFrame"];
    }
    if (!window.requestAnimationFrame) {
      window.requestAnimationFrame = function (callback, element) {
        let currTime = new Date().getTime();
        let timeToCall = Math.max(0, 16 - (currTime - lastTime));
        let id = window.setTimeout(function () {
          callback(currTime + timeToCall);
        }, timeToCall);
        lastTime = currTime + timeToCall;
        return id;
      };
    }
    if (!window.cancelAnimationFrame) {
      window.cancelAnimationFrame = function (id) {
        clearTimeout(id);
      };
    }

    let self = this;

    this.d =
      typeof target === "string" ? document.getElementById(target) : target;
    this.startVal = Number(startVal);
    this.endVal = Number(endVal);
    this.countDown = this.startVal > this.endVal ? true : false;
    this.startTime = null;
    this.timestamp = null;
    this.remaining = null;
    this.frameVal = this.startVal;
    this.rAF = null;
    this.decimals = Math.max(0, decimals || 0);
    this.dec = Math.pow(10, this.decimals);
    this.duration = duration * 1000 || 2000;

    this.easeOutExpo = function (t, b, c, d) {
      return (c * (-Math.pow(2, (-10 * t) / d) + 1) * 1024) / 1023 + b;
    };
    this.count = function (timestamp) {
      if (self.startTime === null) self.startTime = timestamp;
      self.timestamp = timestamp;
      let progress = timestamp - self.startTime;
      self.remaining = self.duration - progress;

      if (self.options.useEasing) {
        if (self.countDown) {
          let i = self.easeOutExpo(
            progress,
            0,
            self.startVal - self.endVal,
            self.duration
          );
          self.frameVal = self.startVal - i;
        } else {
          self.frameVal = self.easeOutExpo(
            progress,
            self.startVal,
            self.endVal - self.startVal,
            self.duration
          );
        }
      } else {
        if (self.countDown) {
          let i = (self.startVal - self.endVal) * (progress / self.duration);
          self.frameVal = self.startVal - i;
        } else {
          self.frameVal =
            self.startVal +
            (self.endVal - self.startVal) * (progress / self.duration);
        }
      }

      // decimal
      self.frameVal = Math.round(self.frameVal * self.dec) / self.dec;

      // don't go past endVal since progress can exceed duration in the last frame
      if (self.countDown) {
        self.frameVal =
          self.frameVal < self.endVal ? self.endVal : self.frameVal;
      } else {
        self.frameVal =
          self.frameVal > self.endVal ? self.endVal : self.frameVal;
      }

      // format and print value
      self.d.innerHTML = self.formatNumber(
        self.frameVal.toFixed(self.decimals)
      );

      // whether to continue
      if (progress < self.duration) {
        self.rAF = requestAnimationFrame(self.count);
      } else {
        if (self.callback != null) self.callback();
      }
    };
    this.start = function (callback) {
      self.callback = callback;
      // make sure values are valid
      if (!isNaN(self.endVal) && !isNaN(self.startVal)) {
        self.rAF = requestAnimationFrame(self.count);
      } else {
        // console.log("countUp error: startVal or endVal is not a number");
        self.d.innerHTML = "--";
      }
      return false;
    };
    this.stop = function () {
      cancelAnimationFrame(self.rAF);
    };
    this.reset = function () {
      self.startTime = null;
      cancelAnimationFrame(self.rAF);
      self.d.innerHTML = self.formatNumber(
        self.startVal.toFixed(self.decimals)
      );
    };
    this.resume = function () {
      self.startTime = null;
      self.duration = self.remaining;
      self.startVal = self.frameVal;
      requestAnimationFrame(self.count);
    };
    this.formatNumber = function (nStr) {
      nStr += "";
      let x, x1, x2, rgx;
      x = nStr.split(".");
      x1 = x[0];
      x2 = x.length > 1 ? self.options.decimal + x[1] : "";
      rgx = /(\d+)(\d{3})/;
      if (self.options.useGrouping) {
        while (rgx.test(x1)) {
          x1 = x1.replace(rgx, "$1" + self.options.separator + "$2");
        }
      }
      return x1 + x2;
    };

    // format startVal on initialization
    self.d.innerHTML = self.formatNumber(self.startVal.toFixed(self.decimals));
  }

  // Example:
  // let numAnim = new countUp("SomeElementYouWantToAnimate", 0, 99.99, 2, 2.5);
  // numAnim.start();
  // with optional callback:
  // numAnim.start(someMethodToCallOnComplete);

  /* CountUp Activation */
  if (this.document.body.classList.contains("page-template-page-about")) {
    const options = {
      separator: "",
    };
    let count1 = new countUp("count1", 0, 40, 0, 1.5, options);
    let count2 = new countUp("count2", 0, 125, 0, 1.5, options);
    let count3 = new countUp("count3", 0, 4000, 0, 1, options);
    count1.start();
    count2.start();
    count3.start();
  }

  // $('#trigger').click(function() {
  // count1.reset();
  // count2.reset();
  // count3.reset();
  // count1.start();
  // count2.start();
  // count3.start();
  // });

  // -------------------------------------------------------------------------------------------

  // contact dropdown handle
  const clickBar = document.querySelectorAll(".click-bar");
  const stepParagraph = document.querySelectorAll(".step-paragraph");
  const clickBarIcon = document.querySelectorAll(".click-bar-icon");
  const barTitle = document.querySelectorAll(".bar-title-wrapper");
  // const dropDownList = document.querySelector('.contact-drop-down');

  clickBar.forEach(function (item, index) {
    item.addEventListener("click", () => {
      if (!stepParagraph[index].classList.contains("contact-active")) {
        clickBar[index].classList.add("text-black");
        stepParagraph[index].classList.replace(
          "contact-inactive",
          "contact-active"
        );
        barTitle[index].classList.replace("text-bgDarkGray", "text-black");
        clickBarIcon[index].innerHTML = "-";
      } else if (stepParagraph[index].classList.contains("contact-active")) {
        clickBar[index].classList.remove("text-black");
        stepParagraph[index].classList.replace(
          "contact-active",
          "contact-inactive"
        );
        clickBarIcon[index].innerHTML = "+";
        barTitle[index].classList.replace("text-black", "text-bgDarkGray");
      }
    });
  });

  //  ----------------------------------------------------------------------

  let categoryList = document.querySelector(".wp-block-categories-list");
  let borderClass = "";
  if (window.location.href.search("blog") > 20) {
    // console.log("blog page");
    borderClass =
      "underline-offset-4 decoration-2 decoration-primaryRed border-b-[2px] border-primaryRed";
  }
  window.location.href;
  link =
    `
  <li><a href="` +
    window.location.origin +
    `/pl/blog" class="inline-block allTabBtn leading-[20px] text-[#8a8f99] hover:text-textGray hover:underline hover:underline-offset-4 hover:decoration-2 hover:decoration-primaryRed cursor-pointer ` +
    borderClass +
    `">Wszystkie</a></li>
  `;

  let pageBlogID = document.querySelector("#blog-post");
  if (
    pageBlogID?.classList.contains("page-blog-title") ||
    window.location.href.search("category") > 20
  ) {
    categoryList.insertAdjacentHTML("afterbegin", link);
  }

  let noCategoryHTML = document.querySelectorAll(".cat-item");
  noCategoryHTML.forEach((item) => {
    if (item.childNodes[0].innerHTML == "Bez kategorii") {
      item.style.display = "none";
    }
  });

  //  ----------------------------------------------------------------------

  if (document.body.classList.contains("single-mieszkania")) {
    let cenaSinglePost = document.querySelector(".taxonomy-cena");
    let cenaSinglePostWrapper = document.querySelector(".price");

    if (cenaSinglePost.childNodes[0].innerText == "Zapytaj") {
      cenaSinglePostWrapper.childNodes[3].innerText = "";
    }
  }

  if (document.body.classList.contains("page-child")) {
    let cenaArticle = document.querySelectorAll(".post-item");

    cenaArticle.forEach((el) => {
      if (el?.childNodes[0].childNodes[7].innerText == "Zapytajzł") {
        el.childNodes[0].childNodes[7].innerText = "Zapytaj";
      }
    });
  }

  //  ----------------------------------------------------------------------

  //hide pokoje column [page-lista-lokali]
  // dynamic ymc filter id
  if (document.body.classList.contains('post-type-archive-lokale')){
    if(document.querySelector(".short-code-ymc-filter")){
      currentYmcFilterID = document
        .querySelector(".short-code-ymc-filter")
        .childNodes[1].getAttribute("id")
        .replace("ymc-smart-filter-container-", "");
      };

    wp.hooks.addAction(
      "ymc_after_loaded_data_2323_" + currentYmcFilterID,
      "smartfilter",
      function (class_name, response) {
      if (document.body.classList.contains('post-type-archive-lokale')){
        document.querySelector('.js-sort-pokoje').classList.add('opacity-0')
      };
      }
    );
  };

    

  //  ----------------------------------------------------------------------
});
