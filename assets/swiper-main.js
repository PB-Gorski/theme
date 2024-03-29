
document.addEventListener("DOMContentLoaded", function(event) {
  let swipers = document.querySelectorAll('.js-gallery-top');

  swipers.forEach(swiperNode => {
    let swiperInstance = new Swiper(swiperNode, {
      navigation: {
        nextEl: swiperNode.querySelector(".js-swiper-button-next"),
        prevEl: swiperNode.querySelector(".js-swiper-button-prev"),
      },
      slidesPerView: 2.2,
      spaceBetween: 20,
      keyboardControl: true,
    });

    // click per slider

    swiperNode.querySelectorAll('.swiper-slide').forEach(function(slide){
      slide.addEventListener('click', function(event) {
        let clickedSlideIndex = Array.prototype.indexOf.call(slide.parentElement.children, slide);
  
        swiperNode.parentNode.classList.add('fullscreen');
        
        let params = swiperInstance.params;
        params.slidesPerView = 1;
        swiperInstance.update();
        swiperInstance.slideTo(clickedSlideIndex,0);
        swiperInstance.update();
      
        swiperNode.parentNode.querySelector('.close-button').addEventListener('click', function(event) {
          let params2 = swiperInstance.params;
          params2.slidesPerView = 2.2;
          swiperInstance.slideTo(clickedSlideIndex,0);
          swiperInstance.update();
          swiperNode.parentNode.classList.remove('fullscreen');
        });
      });
    })
  });
});