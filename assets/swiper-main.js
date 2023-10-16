
document.addEventListener("DOMContentLoaded", function(event) {
  // new Swiper('#id', {
  //   direction: "horizontal",
  //   slidesPerView: 'auto',
  //   clickable: true,
  //   grabCursor: true,
  //   navigation: {
  //     nextEl: '#services-next',
  //     prevEl: '#services-prev',
  //   },
  // });
  // var swiper = new Swiper(".mySwiper", {
  //   spaceBetween: 10,
  //   slidesPerView: 4,
  //   freeMode: true,
  //   watchSlidesProgress: true,
  // });
  // var swiper2 = new Swiper(".mySwiper2", {
  //   spaceBetween: 10,
  //   navigation: {
  //     nextEl: ".swiper-button-next",
  //     prevEl: ".swiper-button-prev",
  //   },
  //   thumbs: {
  //     swiper: swiper,
  //   },
  // });

  let galleryTop = new Swiper('.js-gallery-top', {
    navigation: {
      nextEl: ".js-swiper-button-next",
      prevEl: ".js-swiper-button-prev",
    },
    // initialSlide: 2,
    slidesPerView: 3.2,
    spaceBetween: 10,
    keyboardControl: true
  });
  let galleryTopTemp;
  let sliders = document.querySelectorAll('.swiper-slide');
  
  for (let i = 0; i < sliders.length; ++i) {
      sliders[i].addEventListener('click', function(event) {
        event.target.parentNode.parentNode.parentNode.parentNode.classList.add('fullscreen');
        // event.target.classList.add('fullscreen');
        // console.log(event.target.parentNode);
        // const params = galleryTop.params;
        // params.slidesPerView = 1; 
        // params.initialSlide = i; 

        galleryTop.destroy();

        let galleryTop2 = new Swiper('.js-gallery-top', {
          navigation: {
            nextEl: ".js-swiper-button-next",
            prevEl: ".js-swiper-button-prev",
          },
          initialSlide: i,
          slidesPerView: 1,
          spaceBetween: 10,
          keyboardControl: true
        });
        // console.log('open fullscreen');
        galleryTop2.update();

        galleryTopTemp = galleryTop2
      }, false);
  }


  // galleryTop.on('click', function () {
  //   console.log('slide clicked');
  //   console.log();
  // });
  
  
  let closeButtons = document.querySelectorAll('.close-button');
  for (let y = 0; y < closeButtons.length; ++y) {
    
      closeButtons[y].addEventListener('click', function(event) {
        // galleryTop2.destroy();
        // console.log('close');

        galleryTopTemp.destroy();
         let galleryTopTemp2 = new Swiper('.js-gallery-top', {
          navigation: {
            nextEl: ".js-swiper-button-next",
            prevEl: ".js-swiper-button-prev",
          },
          initialSlide: 0,
          slidesPerView: 3.2,
          spaceBetween: 10,
          keyboardControl: true
        });
        galleryTop.update();
        // const params = galleryTop2.params;
        // params.slidesPerView = 3.2; 
        galleryTop.update();
        let fullScreenElements = document.querySelectorAll('.fullscreen');

        galleryTop = galleryTopTemp2;

        for (let x = 0; x < fullScreenElements.length; ++x) {
          fullScreenElements[x].classList.remove('fullscreen');
          galleryTop.update();
        }
      });
  }
  
});