
document.addEventListener("DOMContentLoaded", function(event) {
  let swipers = document.querySelectorAll('.js-gallery-top');
  let galleryTop = new Swiper('.js-gallery-top', {
    navigation: {
      nextEl: ".js-swiper-button-next",
      prevEl: ".js-swiper-button-prev",
    },
    slidesPerView: 3.2,
    spaceBetween: 20,
    keyboardControl: true
  });
  // let galleryTop2 = new Swiper('.js-gallery-top2', {
  //   navigation: {
  //     nextEl: ".js-swiper-button-next",
  //     prevEl: ".js-swiper-button-prev",
  //   },
  //   slidesPerView: 3.2,
  //   spaceBetween: 20,
  //   keyboardControl: true
  // });
  let galleryTopTemp;
  let sliders = document.querySelectorAll('.swiper-slide');
  
  for (let i = 0; i < sliders.length; ++i) {
      sliders[i].addEventListener('click', function(event) {
        event.target.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add('fullscreen');
        // for (let j = 0 ; j<galleryTop.length ; ++j){
        //   galleryTop[i].destroy();
        // };
        galleryTop[0].destroy();
        // galleryTop2.destroy();

        let galleryTopTemp2 = new Swiper('.js-gallery-top', {
          navigation: {
            nextEl: ".js-swiper-button-next",
            prevEl: ".js-swiper-button-prev",
          },
          initialSlide: i,
          activeIndex: i,
          slidesPerView: 1,
          spaceBetween: 20,
          keyboardControl: true
        });

        galleryTopTemp2[0].update();
        galleryTopTemp = galleryTopTemp2;
      }, false);
  }
  
  let closeButtons = document.querySelectorAll('.close-button');
  for (let y = 0; y < closeButtons.length; ++y) {
    closeButtons[y].addEventListener('click', function(event) {
      const params = galleryTopTemp[0].params;
      params.slidesPerView = 3.2;
      params.initialSlide = 0;

      galleryTopTemp[0].update();
      galleryTop = galleryTopTemp;
      
      let fullScreenElements = document.querySelectorAll('.fullscreen');
      for (let x = 0; x < fullScreenElements.length; ++x) {
        fullScreenElements[x].classList.remove('fullscreen');
      };
    });
  };
  
});