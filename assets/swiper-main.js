
document.addEventListener("DOMContentLoaded", function(event) {
  let swipers = document.querySelectorAll('.js-gallery-top');

  swipers.forEach(swiperNode => {
    let swiperInstance = new Swiper(swiperNode, {
      navigation: {
        nextEl: swiperNode.querySelector(".js-swiper-button-next"),
        prevEl: swiperNode.querySelector(".js-swiper-button-prev"),
      },
      slidesPerView: 3.2,
      spaceBetween: 20,
      keyboardControl: true,
    });

    // click per slider
    swiperNode.querySelector('.swiper-slide').addEventListener('click', function(event) {
      let clickedSlideIndex = Array.prototype.indexOf.call(event.target.parentElement.children, event.target);
// test
      event.target.parentNode.parentNode.parentNode.parentNode.parentNode.classList.add('fullscreen');
      
      const params = swiperInstance.params;
      params.slidesPerView = 1;
      swiperInstance.slideTo(clickedSlideIndex);
      swiperInstance.update();
    
      swiperNode.parentNode.querySelector('.close-button').addEventListener('click', function(event) {
        const params2 = swiperInstance.params;
        params2.slidesPerView = 3.2;
        params2.initialSlide = 0;
        swiperInstance.update();
        swiperInstance.classList.remove('fullscreen');
      });
    });
  });

  





});