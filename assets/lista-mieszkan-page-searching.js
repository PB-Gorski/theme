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
        }

        wp.hooks.addAction('ymc_stop_loading_data', 'smartfilter', function(elem) {
          elem.dataset.loading = 'false';
       });

// get filterId by Banner class
function getFilterId(){
  let pageID = document.querySelector("#Banner");
  let filterID = ".ymc-smart-filter-container";
  if (pageID.classList.contains("banner-lista-mieszkan")) {
    filterID = ".data-target-ymc2";
  } else if (pageID.classList.contains("banner-lista-lokali")) {
    filterID = ".data-target-ymc1";
  }

  return filterID
}

function getActiveTermsId(){
  let searchedFromActiveHTML = document.querySelectorAll(".active");
  let searchedFromActiveIDs = [];

  searchedFromActiveHTML.forEach((item) => {
    searchedFromActiveIDs.push(item.dataset.termid);
  });

  return searchedFromActiveIDs
}

window.addEventListener("load", function () {
  //  page lista mieszkan - filtrowanie i sortowanie listy mieszkan
  if (
    document.body.classList.contains("post-type-archive-mieszkania") ||
    document.body.classList.contains("post-type-archive-lokale")
  ) {
    // console.log("glowna lista mieszkan page");

    // wyszukiwanie mieszkan po filtrach (cena)
    // setting chosen option in active window
    let choosenOptions = [];
    let tempMiastoArr = [];
    let tempInwestycjaArr = [];
    let tempPokojeArr = [];
    let tempPietroArr = [];
    let tempTerminArr = [];
    let tempInneArr = [];
    let passiveOptions = document.querySelectorAll(".menu-passive__item");
    // let passiveOptions = document.querySelectorAll('.menu-passive__item')
    let counter2 = 0;

    passiveOptions.forEach((item) => {
      item.addEventListener("click", () => {
        let optionSpan = document.createElement("span");
        let choosenOption = item.childNodes[1].dataset.name;
        let choosenOptionID = item.childNodes[1].dataset.termid;
        let stopAdding = false;
        optionSpan.innerText = choosenOption;

        let choosenOptionsArr =
          item.parentNode.previousElementSibling.childNodes[0].childNodes;
        choosenOptionsArr.forEach((option) => {
          if (option.innerText == choosenOption) {
            stopAdding = true;
            // console.log("choosen option text for cleaning", choosenOption);
            // console.log("clear existing span");
            // option.remove("span");
          }
        });

        if (choosenOptions.includes(choosenOptionID)) {
          removeItemAll(choosenOptions, choosenOptionID);
        } else {
          choosenOptions.push(choosenOptionID);
        }
        // console.log("choosenOptions: ", choosenOptions);

        // dynamic term id for investition
        // currentInvestName = document.referrer.slice(document.referrer.match('o-inwestycji')['index']).replace('o-inwestycji-','').slice(-30,-1);
        // currentInvestID

        // dynamic filtr data
        allInvestmentsElements =
          document.querySelectorAll(".dropdown-filter")[1].childNodes[5]
            .childNodes;
        investIDsArr = [];

        allInvestmentsElements.forEach((el) => {
          if (el.childNodes[1] !== undefined) {
            investName = el.childNodes[1].dataset.name;
            investID = el.childNodes[1].dataset.termid;

            investIDsArr.push(Number(investID));
          }
        });
        // console.log("$$$$$$$$$$$$$ invest arr ids ", investIDsArr);

        // dynamic term id for city
        allCityElements =
          document.querySelectorAll(".dropdown-filter")[0].childNodes[5]
            .childNodes;
        cityIDsArr = [];

        allCityElements.forEach((el) => {
          if (el.childNodes[1] !== undefined) {
            cityID = el.childNodes[1].dataset.termid;
            cityName = el.childNodes[1].dataset.name;

            cityIDsArr.push(Number(cityID));
          }
        });

        let choosenMiastoArr = [];
        let choosenInwestycjeCount = 1;
        let choosenPokojeArr = [];
        let choosenPietroArr = [];
        let choosenTempArr = [];
        let choosenInneCount = 1;
        function showActiveFilterName() {
          // let miastoArr = [28,40];
          let miastoArr = cityIDsArr;

          // console.log("$$$$$$$$$$$ " + cityIDsArr);
          // let inwestycjaArr = [72,71,82,81,681];
          let inwestycjaArr = investIDsArr;

          // let pokojeArr = [43,34,53,25];
          let pokojeArr = [640, 641, 642, 643, 644, 645, 646];
          let pietroArr = [97, 78, 60, 66];
          let terminArr = [49, 91, 38, 122, 93];
          let inneArr = [520, 521, 522, 650];
          let menuActiveSpan =
            item.parentNode.previousElementSibling.childNodes[1];
          let menuActiveTitle =
            item.parentNode.previousElementSibling.previousElementSibling.innerHTML
              .replace(":", "")
              .toLowerCase();

          if (miastoArr.includes(+choosenOptionID)) {
            // console.log("wybrano z kategorii - miasto");
            // miasto
            if (tempMiastoArr.includes(choosenOptionID)) {
              removeItemAll(tempMiastoArr, choosenOptionID);
            } else {
              tempMiastoArr = [];
              tempMiastoArr.push(choosenOptionID);
            }

            wp.hooks.addAction(
              "ymc_before_loaded_data_148_2",
              "smartfilter",
              function (class_name, response) {
                if (tempMiastoArr.length == 0) {
                  menuActiveSpan.innerHTML = "Wybierz";
                  // console.log("Wybierz");
                }
              }
            );

            // setTimeout(() => {
            //   if (tempMiastoArr.length == 0){
            //     menuActiveSpan.innerHTML = 'Wybierz';
            //      console.log('Wybierz');
            //   }
            // }, 1000);

            // console.log("miastoArr: ", tempMiastoArr.length);
            // console.log("active span: ", menuActiveSpan);

            menuActiveSpan.innerHTML =
              menuActiveSpan.innerHTML + choosenMiastoArr.join(", ");
            // console.log("miasto: ", choosenMiastoArr);

            if (tempMiastoArr.length == 0) {
              menuActiveSpan.innerHTML = "";
              menuActiveSpan.innerHTML = "Wybierz:";
              // console.log("Wybierz");
            } else {
              // console.log("wybrano miasto");
            }
          } else if (inwestycjaArr.includes(+choosenOptionID)) {
            // inwestycje
            tempInwestycjaArr.includes(choosenOptionID)
              ? removeItemAll(tempInwestycjaArr, choosenOptionID)
              : tempInwestycjaArr.push(choosenOptionID);

            if (tempInwestycjaArr.length > 0) {
              choosenInwestycjeCount = tempInwestycjaArr.length;
            } else if (tempInwestycjaArr.length == 0) {
              choosenInwestycjeCount = 0;
            }

            // menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInwestycjeCount;
            // menuActiveSpan.innerHTML = 'Wybrano2: ' + choosenInwestycjeCount;

            menuActiveSpan.innerHTML =
              choosenInwestycjeCount == 0
                ? "Wybierz"
                : "Wybrano: " + choosenInwestycjeCount;
          } else if (pokojeArr.includes(+choosenOptionID)) {
            // pokoje
            if (tempPokojeArr.includes(choosenOptionID)) {
              removeItemAll(tempPokojeArr, choosenOptionID);
            } else {
              tempPokojeArr.push(choosenOptionID);
            }

            tempPokojeArr.forEach((choosenItem) => {
              passiveOptions.forEach((item) => {
                if (item.childNodes[1].dataset.termid == choosenItem) {
                  choosenPokojeArr.push(item.childNodes[1].dataset.name);
                }
              });
            });
            if (choosenPokojeArr.length == 0) {
              menuActiveSpan.innerHTML = "Wybierz";
            } else {
              menuActiveSpan.innerHTML = choosenPokojeArr.join(", ");
            }
          } else if (pietroArr.includes(+choosenOptionID)) {
            // pietro
            if (tempPietroArr.includes(choosenOptionID)) {
              removeItemAll(tempPietroArr, choosenOptionID);
            } else {
              tempPietroArr.push(choosenOptionID);
            }

            tempPietroArr.forEach((choosenItem) => {
              passiveOptions.forEach((item) => {
                if (item.childNodes[1].dataset.termid == choosenItem) {
                  choosenPietroArr.push(item.childNodes[1].dataset.name);
                }
              });
            });
            // console.log("altualne pietro432ewfsdvdfe");
            // menuActiveSpan.innerHTML = choosenPietroArr.join(', ');
            // old
            // menuActiveSpan.innerHTML = 'Wybrano: ' + (choosenPietroArr.join(', ')!=' ' ? choosenPietroArr.join(', ') : 'Wybrano: 0');
            menuActiveSpan.innerHTML =
              choosenPietroArr.join(", ") != ""
                ? "Wybrano: " + choosenPietroArr.join(", ")
                : "Wybierz";
          } else if (terminArr.includes(+choosenOptionID)) {
            // termin

            if (tempTerminArr.includes(choosenOptionID)) {
              removeItemAll(tempTerminArr, choosenOptionID);
            } else {
              tempTerminArr.push(choosenOptionID);
            }

            menuActiveSpan.innerHTML =
              tempTerminArr.length == 0
                ? "Wybierz"
                : `Wybrano: ${tempTerminArr.length}`;
          } else if (inneArr.includes(+choosenOptionID)) {
            // inne
            tempInneArr.includes(choosenOptionID)
              ? removeItemAll(tempInneArr, choosenOptionID)
              : tempInneArr.push(choosenOptionID);

            if (tempInneArr.length > 0) {
              choosenInneCount = tempInneArr.length;
            } else if (tempInneArr.length == 0) {
              choosenInneCount = 0;
            }

            // menuActiveSpan.innerHTML = 'Wybrano: ' + choosenInneCount;
            menuActiveSpan.innerHTML =
              choosenInneCount == 0
                ? "Wybierz"
                : "Wybrano: " + choosenInneCount;
          } else {
            // console.log('error');
          }

          // menuActiveSpan.dataset.label = choosenOption;
          // menuActiveSpan.innerHTML = menuActiveSpan.getAttribute('data-label');

          // console.log('item: ', menuActiveSpan.getAttribute('data-label'));
          // console.log("item category: ", menuActiveTitle);
          // console.log("item termid: ", +choosenOptionID);
        }
        showActiveFilterName();
        // if (!foundedPostOnStart.classList.contains('hidden')){foundedPostOnStart.classList.add('hidden')}
      });
    });

    // price selects
    const mainDropDown = document.querySelectorAll(".dropdown__value-price");
    const dropDownList = document.querySelectorAll(".dropdown__list");
    const dropDowns = Array.from(document.querySelectorAll(".dropdown__link"));
    let btnSearch = document.querySelector(".btn-search");
    let priceValueArr = [];
    let newArr = [];
    let newArrHTMLList = [];
    let target;

    document.querySelector("#Banner").addEventListener("click", () => {
      // console.log("body click2");
      document.querySelectorAll(".dropdown__list").forEach((activeItem2) => {
        if (
          activeItem2.classList.contains("dropdown__list_active-metraz") ||
          activeItem2.classList.contains("dropdown__list_active")
        ) {
          activeItem2.classList.remove("dropdown__list_active-metraz");
          activeItem2.classList.remove("dropdown__list_active");
        }
      });
    });

    mainDropDown.forEach((dropDownEl) => {
      dropDownEl.addEventListener("click", (e) => {
        if (e.target.nextElementSibling) {
          e.target.nextElementSibling.classList.toggle("dropdown__list_active");
          e.target.classList.toggle("toggle-x");
        } else if (e.target.parentNode.nextElementSibling) {
          e.target.parentNode.nextElementSibling.classList.toggle(
            "dropdown__list_active"
          );
          e.target.classList.toggle("toggle-x");
        }
      });
    });

    function choise(e) {
      e.preventDefault();
      target = e.target.textContent;
      e.target.parentNode.parentNode.previousElementSibling.textContent = "";
      let spanTarget = document.createElement("span");
      spanTarget.innerText = target;
      e.target.parentNode.parentNode.previousElementSibling.appendChild(
        spanTarget
      );

      dropDownList.forEach((el) => {
        if (el.classList.contains("dropdown__list_active")) {
          el.classList.remove("dropdown__list_active");
        }
      });
    }

    dropDowns.forEach((item) => {
      item.addEventListener("click", (e) => {
        choise(e);
        item.parentNode.parentNode.previousElementSibling.classList.remove(
          "toggle-x"
        );
      });
    });

    const foundedPostOnStart = document.querySelector(".js-foundedPostOnStart");

    // btnSearch.addEventListener('click', runSearchingPrice);

    // search more options handle
    const btnMore = document.querySelector(".btn-more");
    const heightAnimation = document.querySelector(".js-heightAnimation");

    if (
      document.body.classList.contains("post-type-archive-mieszkania") ||
      document.body.classList.contains("post-type-archive-lokale")
    ) {
      btnMore.addEventListener("click", () => {
        heightAnimation.classList.toggle("expanded");

        heightAnimation.addEventListener("transitionstart", (e) => {
          if (e.target !== heightAnimation) return;
          heightAnimation.classList.add("transitioning");
        });
        heightAnimation.addEventListener("transitionend", (e) => {
          if (e.target !== heightAnimation) return;
          heightAnimation.classList.remove("transitioning");
        });
      });
    }

    // metraz selects
    const mainDropDownMetraz = document.querySelectorAll(
      ".dropdown__value-metraz"
    );
    const dropDownListMetraz = document.querySelectorAll(
      ".dropdown__list-metraz"
    );
    const dropDownsMetraz = Array.from(
      document.querySelectorAll(".dropdown__link-metraz")
    );
    let metrazValueArr = [];
    let newArrMetraz = [];
    let newArrHTMLListMetraz = [];
    let targetMetraz;

    mainDropDownMetraz.forEach((dropDownEl) => {
      dropDownEl.addEventListener("click", (e) => {
        if (e.target.nextElementSibling) {
          // console.log(e.target);
          // console.log("dropdown span");
          e.target.nextElementSibling.classList.toggle(
            "dropdown__list_active-metraz"
          );
          e.target.classList.toggle("toggle-x");
          // e.target.classList.toggle('dropdown__list_active-metraz');
        }
        // else if(e.target.parentNode.nextElementSibling){
        //    console.log('dropdown span container');
        //   e.target.parentNode.nextElementSibling.classList.toggle('dropdown__list_active-metraz');
        // }
      });
    });

    dropDownsMetraz.forEach((item) => {
      item.addEventListener("click", (e) => {
        choiseMetraz(e);
        item.parentNode.parentNode.previousElementSibling.classList.remove(
          "toggle-x"
        );
      });
    });

    function choiseMetraz(e) {
      e.preventDefault();
      targetMetraz = e.target.textContent;
      e.target.parentNode.parentNode.previousElementSibling.textContent = "";
      let spanTargetMetraz = document.createElement("span");
      spanTargetMetraz.innerText = targetMetraz;
      e.target.parentNode.parentNode.previousElementSibling.appendChild(
        spanTargetMetraz
      );

      dropDownListMetraz.forEach((el) => {
        if (el.classList.contains("dropdown__list_active-metraz")) {
          el.classList.remove("dropdown__list_active-metraz");
        }
      });
    }

    // ------------------------------------------------------------------------------

    // sortowanie listy mieszkan
    const listaMieszkanContainer = document.querySelector(
      ".post-custom-layout"
    );
    const sortingBarHTML = `
    <ul class="wp-block-list js-injected test container mx-auto all-taxonomy-list desktop:w-full w-[1054px] px-[20px] bg-[#2f384d] py-[22px] flex flex-wrap items-center justify-between text-[13px] font-bold z-0 relative">
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

    if (
      document.body.classList.contains("post-type-archive-mieszkania") ||
      document.body.classList.contains("post-type-archive-lokale")
    ) {
      listaMieszkanContainer.insertAdjacentHTML("beforebegin", sortingBarHTML);
    }

    function sortListDir(j) {
      let list,
        i,
        switching,
        b,
        shouldSwitch,
        dir,
        switchcount = 0;
      list = document.querySelector(".post-entry");
      switching = true;
      dir = "asc";
      while (switching) {
        switching = false;
        b = list.querySelectorAll(".post-item");
        for (i = 0; i < b.length - 1; i++) {
          shouldSwitch = false;
          if (dir == "asc") {
            if (j != 7) {
              if (
                b[i].firstChild.childNodes[j].firstChild.textContent >
                b[i + 1].firstChild.childNodes[j].firstChild.textContent
              ) {
                shouldSwitch = true;
                break;
              }
            } else {
              if (
                parseInt(
                  b[i].firstChild.childNodes[j].firstChild.textContent
                    .split(" ")
                    .join("")
                ) >
                parseInt(
                  b[i + 1].firstChild.childNodes[j].firstChild.textContent
                    .split(" ")
                    .join("")
                )
              ) {
                shouldSwitch = true;
                break;
              }
            }
          } else if (dir == "desc") {
            if (j != 7) {
              if (
                b[i].firstChild.childNodes[j].firstChild.textContent <
                b[i + 1].firstChild.childNodes[j].firstChild.textContent
              ) {
                shouldSwitch = true;
                break;
              }
            } else {
              if (
                parseInt(
                  b[i].firstChild.childNodes[j].firstChild.textContent
                    .split(" ")
                    .join("")
                ) <
                parseInt(
                  b[i + 1].firstChild.childNodes[j].firstChild.textContent
                    .split(" ")
                    .join("")
                )
              ) {
                shouldSwitch = true;
                break;
              }
            }
          }
        }
        if (shouldSwitch) {
          b[i].parentNode.insertBefore(b[i + 1], b[i]);
          switching = true;
          switchcount++;
        } else {
          if (switchcount == 0 && dir == "asc") {
            dir = "desc";
            switching = true;
          }
        }
      }
    }

    const btnsSort = document.querySelectorAll(".js-sort");
    btnIndex = 1;
    counter = 1;
    btnsSort.forEach((btn, index) => {
      btn.addEventListener("click", () => {
        indexFrom1 = index + 1;
        let currentFiltr = indexFrom1 + index;
        // currentFiltr = indexFrom1;
        // console.log("current filtr: ", currentFiltr);

        sortListDir(index);
        counter = 1;
        for (let i = 1; i <= 17; i = i + 2) {
          // if(btnsSort[i - counter]){
          //   btnsSort[i - counter].classList.remove('sort-arrow-up','sort-arrow-down');
          // }
          if (i == currentFiltr) {
            if (
              btnsSort[currentFiltr - counter].classList.contains(
                "sort-arrow-up"
              )
            ) {
              btnsSort[currentFiltr - counter].classList.remove(
                "sort-arrow-up"
              );
              btnsSort[currentFiltr - counter].classList.add("sort-arrow-down");
            } else {
              btnsSort[currentFiltr - counter].classList.add("sort-arrow-up");
              btnsSort[currentFiltr - counter].classList.remove(
                "sort-arrow-down"
              );
            }
          } else if (i != currentFiltr) {
            // console.log("i rozny od current filtr");
            if (btnsSort[i - counter]) {
              btnsSort[i - counter].classList.remove(
                "sort-arrow-up",
                "sort-arrow-down"
              );
            }
          }
          counter++;
        }

        counter = 1;
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
      // console.log("deleteAllCookies() done");
    }
    deleteAllCookies();

    function getCookie(cname) {
      let name = cname + "=";
      let decodedCookie = decodeURIComponent(document.cookie);
      let ca = decodedCookie.split(";");
      for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    let filteredTermsFromCookies = "";
    if (
      document.cookie.indexOf("filteredTermsFromCookies=") == 0 ||
      document.cookie.indexOf("PriceMinFromCookies=") == 0 ||
      document.cookie.indexOf("PriceMaxFromCookies=") == 0
    ) {
      // cookies exist
      // console.log("cookies exist");
      filteredTermsFromCookies = getCookie("filteredTermsFromCookies");
      filteredPriceMinFromCookies = getCookie("PriceMinFromCookies");
      filteredPriceMaxFromCookies = getCookie("PriceMaxFromCookies");
      filteredMetrazMinFromCookies = getCookie("MetrazMinFromCookies");
      filteredMetrazMaxFromCookies = getCookie("MetrazMaxFromCookies");
      // console.log("cookies exist2: ", filteredPriceMaxFromCookies);
      // console.log('cookies exist min: ',filteredPriceMinFromCookies);
      // console.log('cookies exist2 max: ',filteredPriceMaxFromCookies);

      // dynamic term id for investition
      // currentInvestName = document.referrer.slice(document.referrer.match('o-inwestycji')['index']).replace('o-inwestycji-','').slice(-30,-1);
      // currentInvestID

      // dynamic filtr data
      allInvestmentsElements =
        document.querySelectorAll(".dropdown-filter")[1].childNodes[5]
          .childNodes;
      investIDsArr = [];

      allInvestmentsElements.forEach((el) => {
        if (el.childNodes[1] !== undefined) {
          investName = el.childNodes[1].dataset.name;
          investID = el.childNodes[1].dataset.termid;

          investIDsArr.push(Number(investID));
        }
      });
      // console.log("$$$$$$$$$$$$$ invest arr ids ", investIDsArr);

      // dynamic term id for city
      allCityElements =
        document.querySelectorAll(".dropdown-filter")[0].childNodes[5]
          .childNodes;
      cityIDsArr = [];

      allCityElements.forEach((el) => {
        if (el.childNodes[1] !== undefined) {
          cityID = el.childNodes[1].dataset.termid;
          cityName = el.childNodes[1].dataset.name;

          cityIDsArr.push(Number(cityID));
        }
      });

      let choosenMiastoArr = [];
      let choosenPokojeArr = [];
      let choosenPietroArr = [];
      let choosenTerminArr = [];
      let choosenInneArr = [];
      // let choosenInwestycjeCount = 1;
      // let choosenInwestycjeArr = [];
      // let choosenTempArr = [];
      // let choosenInneCount = 1;
      function showActiveFilterNameFromCookies() {
        let miastoArr = cityIDsArr;

        // console.log("2$$$$$$$$$$$ " + cityIDsArr);
        // let inwestycjaArr = [72,71,82,81,681];

        // console.log("111111111$$$$$$$$$$$$$ invest arr ids ", investIDsArr);
        let inwestycjaArr = investIDsArr;

        // let pokojeArr = [43,34,53,25];
        let pokojeArr = [640, 641, 642, 643, 644, 645, 646];
        let pietroArr = [97, 78, 60, 66];
        let terminArr = [49, 91, 38, 122, 93];
        let inneArr = [520, 521, 522, 650];
        // let menuActiveSpan = item.parentNode.previousElementSibling.childNodes[1];
        // let menuActiveTitle = item.parentNode.previousElementSibling.previousElementSibling.innerHTML.replace(':','').toLowerCase();

        // console.log(
          // "json check: ",
          // filteredTermsFromCookies.substring(1).slice(0, -1)
        // );
        // console.log("json check after parse: ", filteredTermsFromCookies);

        let tempArr = [];
        if (filteredTermsFromCookies.slice(-1) != ",") {
          tempArr.push(filteredTermsFromCookies);
        }
        // console.log("tempArr: ", tempArr);
        let filteredTermsFromCookiesArr;
        // let filteredTermsFromCookiesArr = JSON.parse("[" + filteredTermsFromCookies.slice(-1) != ',' ? tempArr : filteredTermsFromCookies.slice(0, -1) + "]");

        // console.log("filteredTermsFromCookiesArr", filteredTermsFromCookiesArr);

        // console.log("filteredTermsFromCookies*:", filteredTermsFromCookies);

        // console.log("slice test: ", tempArr.join(",").split(","));

        // console.log(
        //   "slice test2: ",
        //   [].concat(...tempArr.map((a) => a.split(",")))
        // );

        // console.log("*****", filteredTermsFromCookies.split(","));

        let returnChoosenFromCookies = [];
        let returnChoosenFromCookiesInwestycje = [];
        let returnChoosenFromCookiesPokoje = [];
        let returnChoosenFromCookiesPietro = [];
        let returnChoosenFromCookiesTermin = [];
        let returnChoosenFromCookiesInne = [];

        filteredTermsFromCookies.split(",").forEach((item) => {
          // console.log('item form filtered cookies: ', item);

          if (miastoArr.includes(+item)) {
            // console.log("wybrano z kategorii - miasto");
            // miasto
            // let menuActiveSpan = item.parentNode.previousElementSibling.childNodes[1];

            if (tempMiastoArr.includes(item)) {
              removeItemAll(tempMiastoArr, item);
            } else {
              tempMiastoArr.push(item);
            }

            choosenMiastoArr = [];
            tempMiastoArr.forEach((choosenItem) => {
              passiveOptions.forEach((item) => {
                if (item.childNodes[1].dataset.termid == choosenItem) {
                  choosenMiastoArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add("active");
                }

                // item.parentNode.previousElementSibling.childNodes[1];
                // menuActiveSpan.innerHTML = menuActiveSpan.innerHTML + item.childNodes[1].dataset.name;
              });
            });

            let activeSpan;
            passiveOptions.forEach((option) => {
              if (option.childNodes[1].dataset.termid == item) {
                // console.log("option from cookies for finding parent: ", option);
                activeSpan =
                  option.parentNode.previousElementSibling.childNodes[1];
                returnChoosenFromCookies.push(option);
              }
            });

            // console.log("active span: ", activeSpan);

            returnChoosenFromCookies.forEach((el) => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML =
                choosenMiastoArr.join(", ");
            });
            // menuActiveSpan.innerHTML = menuActiveSpan.innerHTML + item.childNodes[1].dataset.name;
          } else if (inwestycjaArr.includes(+item)) {
            // inwestycje
            tempInwestycjaArr.includes(item)
              ? removeItemAll(tempInwestycjaArr, item)
              : tempInwestycjaArr.push(item);

            if (tempInwestycjaArr.length > 0) {
              choosenInwestycjeCount = tempInwestycjaArr.length;
            } else if (tempInwestycjaArr.length == 0) {
              choosenInwestycjeCount = 0;
            }

            tempInwestycjaArr.forEach((choosenItem) => {
              passiveOptions.forEach((item) => {
                if (item.childNodes[1].dataset.termid == choosenItem) {
                  choosenMiastoArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add("active");
                }
              });
            });

            passiveOptions.forEach((option) => {
              if (option.childNodes[1].dataset.termid == item) {
                // console.log("option from cookies for finding parent: ", option);
                returnChoosenFromCookiesInwestycje.push(option);
              }
            });

            returnChoosenFromCookiesInwestycje.forEach((el) => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML =
                "Wybrano: " + returnChoosenFromCookiesInwestycje.length;
            });
          } else if (pokojeArr.includes(+item)) {
            // pokoje
            if (tempPokojeArr.includes(item)) {
              removeItemAll(tempPokojeArr, item);
            } else {
              tempPokojeArr.push(item);
            }

            choosenPokojeArrv = [];
            tempPokojeArr.forEach((choosenItem) => {
              passiveOptions.forEach((item) => {
                if (item.childNodes[1].dataset.termid == choosenItem) {
                  choosenPokojeArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add("active");
                }
              });
            });

            passiveOptions.forEach((option) => {
              if (option.childNodes[1].dataset.termid == item) {
                // console.log("option from cookies for finding parent: ", option);
                returnChoosenFromCookiesPokoje.push(option);
              }
            });

            returnChoosenFromCookiesPokoje.forEach((el) => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML =
                choosenPokojeArr.join(", ");
            });
          } else if (pietroArr.includes(+item)) {
            // pietro
            if (tempPietroArr.includes(item)) {
              removeItemAll(tempPietroArr, item);
            } else {
              tempPietroArr.push(item);
            }

            choosenPietroArr = [];
            tempPietroArr.forEach((choosenItem) => {
              passiveOptions.forEach((item) => {
                if (item.childNodes[1].dataset.termid == choosenItem) {
                  choosenPietroArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add("active");
                }
              });
            });

            passiveOptions.forEach((option) => {
              if (option.childNodes[1].dataset.termid == item) {
                // console.log("option from cookies for finding parent: ", option);
                returnChoosenFromCookiesPietro.push(option);
              }
            });

            returnChoosenFromCookiesPietro.forEach((el) => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML =
                choosenPietroArr.join(", ");
            });
          } else if (terminArr.includes(+item)) {
            // termin
            tempTerminArr.includes(item)
              ? removeItemAll(tempTerminArr, item)
              : tempTerminArr.push(item);

            if (tempTerminArr.length > 0) {
              choosenTerminCount = tempTerminArr.length;
            } else if (tempTerminArr.length == 0) {
              choosenTerminCount = 0;
            }

            tempTerminArr.forEach((choosenItem) => {
              passiveOptions.forEach((item) => {
                if (item.childNodes[1].dataset.termid == choosenItem) {
                  choosenTerminArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add("active");
                }
              });
            });

            passiveOptions.forEach((option) => {
              if (option.childNodes[1].dataset.termid == item) {
                // console.log("option from cookies for finding parent: ", option);
                returnChoosenFromCookiesTermin.push(option);
              }
            });

            returnChoosenFromCookiesTermin.forEach((el) => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML =
                "Wybrano: " + returnChoosenFromCookiesTermin.length;
            });
          } else if (inneArr.includes(+item)) {
            if (tempInneArr.length > 0) {
              choosenTerminCount = tempInneArr.length;
            } else if (tempInneArr.length == 0) {
              choosenTerminCount = 0;
            }

            tempInneArr.forEach((choosenItem) => {
              passiveOptions.forEach((item) => {
                if (item.childNodes[1].dataset.termid == choosenItem) {
                  choosenInneArr.push(item.childNodes[1].dataset.name);
                  item.childNodes[1].classList.add("active");
                }
              });
            });

            passiveOptions.forEach((option) => {
              if (option.childNodes[1].dataset.termid == item) {
                // console.log("option from cookies for finding parent: ", option);
                returnChoosenFromCookiesInne.push(option);
              }
            });

            returnChoosenFromCookiesInne.forEach((el) => {
              el.parentNode.previousElementSibling.childNodes[1].innerHTML =
                "Wybrano: " + returnChoosenFromCookiesInne.length;
            });
          } else {
            // console.log('error');
          }
        });
        priceMinUpdate = getCookie("PriceMinFromCookies");
        priceMaxUpdate = getCookie("PriceMaxFromCookies");

        // console.log("prices from cookies: ", priceMinUpdate, priceMaxUpdate);

        document.querySelector(".dropdown__value-min #inputPriceMin").value =
          filteredPriceMinFromCookies == "" || filteredPriceMinFromCookies == 0
            ? ""
            : filteredPriceMinFromCookies;

        document.querySelector(".dropdown__value-max #inputPriceMax").value =
          filteredPriceMaxFromCookies == "NaN"
            ? ""
            : filteredPriceMaxFromCookies == 10000000
            ? ""
            : filteredPriceMaxFromCookies == ""
            ? ""
            : filteredPriceMaxFromCookies;

        document.querySelector(
          ".dropdown__value-min-metraz"
        ).childNodes[0].innerHTML =
          filteredMetrazMinFromCookies == ""
            ? 0
            : Number(filteredMetrazMinFromCookies);

        document.querySelector(
          ".dropdown__value-max-metraz"
        ).childNodes[0].innerHTML =
          filteredMetrazMaxFromCookies == "NaN"
            ? "Max"
            : filteredMetrazMaxFromCookies == 10000000
            ? "Max"
            : filteredMetrazMaxFromCookies == ""
            ? "Max"
            : Number(filteredMetrazMaxFromCookies).toLocaleString();

        let filteredCustomPriceFromCookies = runSearchingPrice();

        // console.log(filteredCustomPriceFromCookies.join());
        // console.log("filteredTermsFromCookies", filteredTermsFromCookies);
        // console.log(
        //   "filteredTermsFromCookies from frontpage: ",
        //   filteredTermsFromCookies
        // );
        // console.log("max metraz***: ", filteredMetrazMaxFromCookies);

        // console.log("after write", filteredMetrazMaxFromCookies);
      }

      showActiveFilterNameFromCookies();

      let filterID = getFilterId()

      function runFromCookies() {
        let searchedFromActiveIDs = getActiveTermsId()

        YMCTools({
          target: filterID,
          terms: filteredTermsFromCookies + "," + searchedFromActiveIDs.join(),
        }).apiTermUpdate();
        // console.log("after YMC api update from runFromCookies()");
      }

      if (filteredTermsFromCookies != null) {
        // wp.hooks.addAction('ymc_before_loaded_data_148_2', 'smartfilter', function(class_name, response){
        //   runFromCookies();
        // });

        // setTimeout(() => {
          runFromCookies();
          document.cookie = "filteredTermsFromCookies=; path=/";
          document.cookie = "filteredTermsFromCookies=; path=/pl";
        // }, 2000);
      }

      deleteAllCookies();
    } else {
      // console.log("no cookies");

      let globalFoundedPostsCount;
      currentYmcFilterID = document
        .querySelector(".short-code-ymc-filter")
        .childNodes[1].getAttribute("id")
        .replace("ymc-smart-filter-container-", "");
      // console.log("current filter id **********************");
      // console.log(currentYmcFilterID);

      wp.hooks.addAction(
        "ymc_after_loaded_data_148_" + currentYmcFilterID,
        "smartfilter",
        function (class_name, response) {
          globalFoundedPostsCount = response.post_count;
          // console.log("Number of found posts: " + response.found);
          // console.log("global2**********************");
          // console.log(globalFoundedPostsCount);
          // console.log("**********************");

          if (globalFoundedPostsCount == 1) {
            document.querySelector(".js-oInwestycji").innerHTML =
              "Znaleziono " +
              globalFoundedPostsCount +
              " ofertę pasującą do Twoich kryteriów";
          } else if (
            globalFoundedPostsCount == 2 ||
            globalFoundedPostsCount == 3 ||
            globalFoundedPostsCount == 4
          ) {
            document.querySelector(".js-oInwestycji").innerHTML =
              "Znaleziono " +
              globalFoundedPostsCount +
              " oferty pasujące do Twoich kryteriów";
          } else if (
            globalFoundedPostsCount > 4 ||
            globalFoundedPostsCount == 3 ||
            globalFoundedPostsCount == 4
          ) {
            document.querySelector(".js-oInwestycji").innerHTML =
              "Znaleziono " +
              globalFoundedPostsCount +
              " ofert pasujących do Twoich kryteriów";
          } else if (globalFoundedPostsCount < 1) {
            document.querySelector(".js-oInwestycji").innerHTML =
              "Nie znaleziono ofert";
          }
        }
      );

      let filterId = getFilterId()
      let pricesID = runSearchingPrice();
      let metrazeID = runSearchingMetraz();
      let searchedFromActiveIDs = getActiveTermsId()

      YMCTools({
        target: filterId,
        terms:
          pricesID.join() +
          "," +
          metrazeID.join() +
          "," +
          choosenOptions.join() +
          "," +
          searchedFromActiveIDs.join(),
      }).apiTermUpdate();

    }

    // ------------------------------------------------------------------------------

    // priceMinValue = cenaOd;
    // priceMaxValue = cenaDo;

    function runSearchingPrice() {
      priceValueArr = [];
      newArr = [];
      newArrHTMLList = [];

      const dropDownFilters = document.querySelectorAll(".dropdown-filter");
      let priceValueArrNodeList = dropDownFilters[5].childNodes[1].childNodes;

      document.querySelector(".dropdown__value-min").childNodes[0].innerHTML =
        document.getElementById("inputPriceMin").value;
      document.querySelector(".dropdown__value-max").childNodes[0].innerHTML =
        document.getElementById("inputPriceMax").value;

      priceMinValue =
        document.querySelector(".dropdown__value-min").childNodes[1].value == ""
          ? 0
          : parseInt(
              document
                .querySelector(".dropdown__value-min")
                .childNodes[0].innerHTML.split(" ")
                .join("")
            );
      priceMaxValue =
        document.querySelector(".dropdown__value-max").childNodes[1].value == ""
          ? 10000000
          : parseInt(
              document
                .querySelector(".dropdown__value-max")
                .childNodes[0].innerHTML.split(" ")
                .join("")
            );

      for (i = 0; i < priceValueArrNodeList.length; i++) {
        priceValueArr.push(
          parseInt(
            priceValueArrNodeList[i].childNodes[1].dataset.name
              .split(" ")
              .join("")
          )
        );
        priceValueArrNodeList[i].childNodes[1].dataset.name = parseInt(
          priceValueArrNodeList[i].childNodes[1].dataset.name
            .split(" ")
            .join("")
        );
      }

      priceValueArr.forEach((priceValue) => {
        priceMaxValue.isNaN
          ? (priceMaxValue = 10000000)
          : (priceMaxValue = priceMaxValue);
        // console.log("price max value ", priceMaxValue);
        if (priceValue <= priceMaxValue && priceValue >= priceMinValue) {
          newArr.push(priceValue);
        }
      });
      // console.log("prices from range: ", priceValueArr);

      // clear active classes and chosen options
      for (i = 0; i < priceValueArrNodeList.length; i++) {
        let priceTermId = priceValueArrNodeList[i].childNodes[1].dataset.termid;

        if (priceTermId !== "677") {
          priceValueArrNodeList[i].childNodes[1].classList.remove("active");

          if (choosenOptions.includes(priceTermId)) {
            removeItemAll(choosenOptions, priceTermId);
          }
        }
      }

      newArr.forEach((elem) => {
        for (j = 0; j < priceValueArrNodeList.length; j++) {
          if (
            parseInt(priceValueArrNodeList[j].childNodes[1].dataset.name) ==
            elem
          ) {
            newArrHTMLList.push(priceValueArrNodeList[j].childNodes[1]);

            //add active class for filters to recegonize on auto-search
            priceValueArrNodeList[j].childNodes[1].classList.add("active");
          }
        }
      });

      let filteredTermsID = [];
      // console.log("filtered new arr html elements: ", newArrHTMLList);

      if (priceMinValue == 0 && priceMaxValue == 10000000) {
        // console.log("price not changed");
      } else {
        // console.log("price changed");
        newArrHTMLList.forEach((el2) => {
          filteredTermsID.push(el2.dataset.termid);
        });
      }

      if(filteredTermsID && document.querySelectorAll('.item-zapytaj').length && filteredTermsID.length){
        const customStaticPriceId = 677 // cena 'Zapytaj'
         filteredTermsID.push(customStaticPriceId)
      }
      // console.log("new filtered id", filteredTermsID.join(","));

      priceValueArr = [];
      newArr = [];
      newArrHTMLList = [];
      priceValueArrNodeList = [];

      return filteredTermsID;
    }

    function runSearchingMetraz() {
      // console.log("run");
      metrazValueArr = [];
      newArrMetraz = [];
      newArrHTMLListMetraz = [];
      const dropDownFiltersMetraz =
        document.querySelectorAll(".dropdown-filter");
      let metrazValueArrNodeList =
        dropDownFiltersMetraz[8].childNodes[1].childNodes;
      metrazMinValue = parseInt(
        document
          .querySelector(".dropdown__value-min-metraz")
          .childNodes[0].innerHTML.split(" ")
          .join("")
      );
      metrazMaxValue =
        document.querySelector(".dropdown__value-max-metraz").childNodes[0]
          .innerHTML == "Max"
          ? 10000000
          : parseInt(
              document
                .querySelector(".dropdown__value-max-metraz")
                .childNodes[0].innerHTML.split(" ")
                .join("")
            );

      // console.log("no spaces", metrazMinValue, metrazMaxValue);

      for (i = 0; i < metrazValueArrNodeList.length; i++) {
        metrazValueArr.push(
          parseInt(
            metrazValueArrNodeList[i].childNodes[1].dataset.name
              .split(" ")
              .join("")
          )
        );
        metrazValueArrNodeList[i].childNodes[1].dataset.name = parseInt(
          metrazValueArrNodeList[i].childNodes[1].dataset.name
            .split(" ")
            .join("")
        );
      }

      metrazValueArr.forEach((metrazValue) => {
        metrazMaxValue.isNaN
          ? (metrazMaxValue = 10000000)
          : (metrazMaxValue = metrazMaxValue);
        // console.log("metraz max value ", metrazMaxValue);
        if (metrazValue <= metrazMaxValue && metrazValue >= metrazMinValue) {
          newArrMetraz.push(metrazValue);
        }
      });
      // console.log("metraz from range: ", metrazValueArr);

      // console.log('new metraz arr: ',newArr);

      for (i = 0; i < metrazValueArrNodeList.length; i++) {
        metrazValueArrNodeList[i].childNodes[1].classList.remove("active");

        let metrazTermId =
          metrazValueArrNodeList[i].childNodes[1].dataset.termid;
        if (choosenOptions.includes(metrazTermId)) {
          removeItemAll(choosenOptions, metrazTermId);
        }
      }

      newArrMetraz.forEach((elem) => {
        for (j = 0; j < metrazValueArrNodeList.length; j++) {
          if (
            parseInt(metrazValueArrNodeList[j].childNodes[1].dataset.name) ==
            elem
          ) {
            newArrHTMLListMetraz.push(metrazValueArrNodeList[j].childNodes[1]);
            metrazValueArrNodeList[j].childNodes[1].classList.add("active");
          }
        }
      });

      let filteredTermsIDMetraz = [];

      if (metrazMinValue == 0 && metrazMaxValue == 10000000) {
        // console.log("metraz not changed");
        filteredTermsIDMetraz = [];
      } else {
        // console.log("metraz changed");
        newArrHTMLListMetraz.forEach((el2) => {
          filteredTermsIDMetraz.push(el2.dataset.termid);
        });
      }

      // newArrHTMLListMetraz.forEach(el2 =>{
      //   filteredTermsIDMetraz.push(el2.dataset.termid);
      // });

      // console.log("metraze po ifie", filteredTermsIDMetraz.join(","));

      metrazValueArr = [];
      newArrMetraz = [];
      newArrHTMLListMetraz = [];
      metrazValueArrNodeList = [];

      return filteredTermsIDMetraz;
    }

    // *******************************************************

    btnSearch.addEventListener("click", () => {
      let pricesID = runSearchingPrice();
      let metrazeID = runSearchingMetraz();
      let searchedFromActiveIDs = getActiveTermsId()

      // console.log("logggggg: ", searchedFromActiveIDs.join());

      deleteAllCookies();
      // document.cookie = "filteredTermsFromCookies=; PriceMinFromCookies=; PriceMaxFromCookies=;";

      let filterID = getFilterId() 

      // old
      // YMCTools({
      //   target: filterID,
      //   terms: choosenOptions.join() + ',' + pricesID.join() + ',' + metrazeID.join() + ',' + searchedFromActiveIDs.join(),
      // }).apiTermUpdate();

      YMCTools({
        target: filterID,
        terms:
          pricesID.join() +
          "," +
          metrazeID.join() +
          "," +
          choosenOptions.join() +
          "," +
          searchedFromActiveIDs.join(),
      }).apiTermUpdate();

      // console.log("in btn prices: ", pricesID.join());
      // console.log("in btn metraze: ", metrazeID.join());
      // console.log(
      //   "all terms id searched: ",
      //   pricesID.join() +
      //     "," +
      //     metrazeID.join() +
      //     "," +
      //     choosenOptions.join() +
      //     "," +
      //     searchedFromActiveIDs.join()
      // );
      // console.log(
      //   "all terms id searched2: ",
      //   pricesID.join() + "," + metrazeID.join() + "," + choosenOptions.join()
      // );
      // console.log(
      //   "all terms id searched3: ",
      //   searchedFromActiveIDs.join() +
      //     "," +
      //     pricesID.join() +
      //     "," +
      //     metrazeID.join()
      // );
      // console.log(
      //   "all terms id searched4: ",
      //   searchedFromActiveIDs.join() + "," + choosenOptions.join()
      // );
    });

    // *******************************************************

    // let counterPostsLoad = 0;

    wp.hooks.addAction(
      "ymc_after_loaded_data_148_2",
      "smartfilter",
      function (class_name, response) {
        foundedPostOnStart.innerHTML =
          "Znaleziono " +
          response.found +
          " ofert pasujących do Twoich kryteriów " +
          '<span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń ' +
          foundedPostOnStart.dataset.allposts +
          ")</span></p>";
        document.cookie = "filteredTermsFromCookies=;";
        // console.log("cookies cleared");

        // console.log("Container class: " + class_name);
        // console.log("Post count: " + response.post_count);
        postsFoundFromAfterHook = response.post_count;
        // console.log("Number of found posts: " + response.found);
        postsFoundFromAfterHook2 = response.found;

        let currentPriceArr = document.querySelectorAll(
          ".list-item-mieszkanie"
        );

        currentPriceArr.forEach((el) => {
          if (el.childNodes[7].innerText == "Zapytaj zł") {
            el.childNodes[7].innerText = "Zapytaj";
          }
        });

        // console.log("posts loaded before if");
      }
    );

    wp.hooks.addAction(
      "ymc_after_loaded_data_2323_2",
      "smartfilter",
      function (class_name, response) {
        foundedPostOnStart.innerHTML =
          "Znaleziono " +
          response.found +
          " ofert pasujących do Twoich kryteriów " +
          '<span class="text-[16px] text-[#8a8f99]">(wszystkich ogłoszeń ' +
          foundedPostOnStart.dataset.allposts +
          ")</span></p>";
        document.cookie = "filteredTermsFromCookies=;";
        // console.log("cookies cleared");

        // console.log("Container class: " + class_name);
        // console.log("Post count: " + response.post_count);
        postsFoundFromAfterHook = response.post_count;
        // console.log("Number of found posts: " + response.found);
        postsFoundFromAfterHook2 = response.found;

        let currentPriceArr = document.querySelectorAll(
          ".list-item-mieszkanie"
        );

        currentPriceArr.forEach((el) => {
          if (el.childNodes[7].innerText == "Zapytaj zł") {
            el.childNodes[7].innerText = "Zapytaj";
          }
        });

        // console.log("posts loaded before if");
      }
    );

    let globalFoundedPostsCount;
    // dynamic ymc filter id
    currentYmcFilterID = document
      .querySelector(".short-code-ymc-filter")
      .childNodes[1].getAttribute("id")
      .replace("ymc-smart-filter-container-", "");
    // console.log("current filter id **********************");
    // console.log(currentYmcFilterID);

    wp.hooks.addAction(
      "ymc_after_loaded_data_148_" + currentYmcFilterID,
      "smartfilter",
      function (class_name, response) {
        globalFoundedPostsCount = response.post_count;
        // console.log("Number of found posts: " + response.found);
        // console.log("global**********************");
        // console.log(globalFoundedPostsCount);
        // console.log("**********************");

        if (globalFoundedPostsCount == 1) {
          document.querySelector(".js-oInwestycji").innerHTML =
            "Znaleziono " +
            globalFoundedPostsCount +
            " ofertę pasującą do Twoich kryteriów";
        } else if (
          globalFoundedPostsCount == 2 ||
          globalFoundedPostsCount == 3 ||
          globalFoundedPostsCount == 4
        ) {
          document.querySelector(".js-oInwestycji").innerHTML =
            "Znaleziono " +
            globalFoundedPostsCount +
            " oferty pasujące do Twoich kryteriów";
        } else if (
          globalFoundedPostsCount > 4 ||
          globalFoundedPostsCount == 3 ||
          globalFoundedPostsCount == 4
        ) {
          document.querySelector(".js-oInwestycji").innerHTML =
            "Znaleziono " +
            globalFoundedPostsCount +
            " ofert pasujących do Twoich kryteriów";
        } else if (globalFoundedPostsCount < 1) {
          document.querySelector(".js-oInwestycji").innerHTML =
            "Nie znaleziono ofert";
        }
      }
    );

    document.querySelectorAll(".menu-passive__item").forEach((passive) => {
      passive.addEventListener("click", (e) => {
        e.target.parentNode.parentNode.style.display = "none";
        e.target.parentNode.parentNode.previousElementSibling.childNodes[1].classList.toggle(
          "newAfter"
        );
        // console.log("parent parent: ", e.target.parentNode.parentNode);
      });
    });

    document.querySelectorAll(".menu-active").forEach((menuActive) => {
      menuActive.addEventListener("click", (e) => {
        document.querySelectorAll(".dropdown__list").forEach((customDrop) => {
          customDrop.classList.remove("dropdown__list_active");
        });
        e.target.classList.toggle("newAfter");
      });
    });

    document.querySelectorAll(".dropdown__value").forEach((customDropValue) => {
      // cleaning default dropdowns
      customDropValue.addEventListener("click", () => {
        document.querySelectorAll(".menu-passive").forEach((passive) => {
          if (passive.style.display == "block") {
            passive.style.display = "none";
          }
        });
      });
    });

    wp.hooks.addAction(
      "ymc_after_loaded_data_2323_" + currentYmcFilterID,
      "smartfilter",
      function (class_name, response) {
        globalFoundedPostsCount = response.post_count;
        // console.log("Number of found posts: " + response.found);
        // console.log("global for 2323**********************");
        // console.log(globalFoundedPostsCount);
        // console.log("**********************");

        if (globalFoundedPostsCount == 1) {
          document.querySelector(".js-oInwestycji").innerHTML =
            "Znaleziono " +
            globalFoundedPostsCount +
            " ofertę pasującą do Twoich kryteriów";
        } else if (
          globalFoundedPostsCount == 2 ||
          globalFoundedPostsCount == 3 ||
          globalFoundedPostsCount == 4
        ) {
          document.querySelector(".js-oInwestycji").innerHTML =
            "Znaleziono " +
            globalFoundedPostsCount +
            " oferty pasujące do Twoich kryteriów";
        } else if (
          globalFoundedPostsCount > 4 ||
          globalFoundedPostsCount == 3 ||
          globalFoundedPostsCount == 4
        ) {
          document.querySelector(".js-oInwestycji").innerHTML =
            "Znaleziono " +
            globalFoundedPostsCount +
            " ofert pasujących do Twoich kryteriów";
        } else if (globalFoundedPostsCount < 1) {
          document.querySelector(".js-oInwestycji").innerHTML =
            "Nie znaleziono ofert";
        }

        // if(document.body.classList.contains('post-type-archive-lokale')){
        //   if (document.querySelector('.js-after-search-click')){
        //     document.querySelector('.js-foundedPostOnStart').classList.replace('z-[1]', 'z-[0]');
        //      console.log('z replace test');
        //   };
        // };
      }
    );

    // if(document.body.classList.contains('post-type-archive-lokale')){
    //   if (document.querySelector('.js-after-search-click')){
    //     document.querySelector('.js-foundedPostOnStart').classList.replace('z-[1]', 'z-[0]');
    //       console.log('z replace test');
    //   };
    // };

    // end if page
    // -------------------------------------------------------------------------------------
  }
});
