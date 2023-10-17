
document.addEventListener("DOMContentLoaded", function(event) {
  let galleryTop = new Swiper('.js-gallery-top', {
    navigation: {
      nextEl: ".js-swiper-button-next",
      prevEl: ".js-swiper-button-prev",
    },
    slidesPerView: 3.2,
    spaceBetween: 20,
    keyboardControl: true
  });
  let galleryTop2 = new Swiper('.js-gallery-top2', {
    navigation: {
      nextEl: ".js-swiper-button-next",
      prevEl: ".js-swiper-button-prev",
    },
    slidesPerView: 3.2,
    spaceBetween: 20,
    keyboardControl: true
  });
  let galleryTopTemp;
  let sliders = document.querySelectorAll('.swiper-slide');
  
  for (let i = 0; i < sliders.length; ++i) {
      sliders[i].addEventListener('click', function(event) {
        event.target.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add('fullscreen');

        galleryTop.destroy();
        let galleryTop2 = new Swiper('.js-gallery-top', {
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

        galleryTop2.update();
        galleryTopTemp = galleryTop2;
      }, false);
  }
  
  let closeButtons = document.querySelectorAll('.close-button');
  for (let y = 0; y < closeButtons.length; ++y) {
    closeButtons[y].addEventListener('click', function(event) {
      const params = galleryTopTemp.params;
      params.slidesPerView = 3.2;
      params.initialSlide = 0;

      galleryTopTemp.update();
      galleryTop = galleryTopTemp;
      
      let fullScreenElements = document.querySelectorAll('.fullscreen');
      for (let x = 0; x < fullScreenElements.length; ++x) {
        fullScreenElements[x].classList.remove('fullscreen');
      };
    });
  };
  
});