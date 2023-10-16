
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

  let galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 3.2,
    spaceBetween: 10,
    keyboardControl: true
  });
  // const galleryThumbs = new Swiper('.gallery-thumbs', {
  //     nextButton: '.swiper-button-next',
  //     prevButton: '.swiper-button-prev',
  //     spaceBetween: 10,
  //     centeredSlides: true,
  //     slidesPerView: 'auto',
  //     touchRatio: 0.2,
  //     slideToClickedSlide: true
  // });
  // galleryTop.params.control = galleryThumbs;
  // galleryThumbs.params.control = galleryTop;
  
  let sliders = document.querySelectorAll('.swiper-slide');
  for (let i = 0; i < sliders.length; ++i) {
      sliders[i].addEventListener('click', function(event) {



        // document.querySelector('.gallery-top').classList.remove('hidden');
        event.target.parentNode.parentNode.parentNode.classList.add('fullscreen');
        // setTimeout(function() {
        //     galleryTop.update();

        // }, 200);

        // galleryTop.destroy();


        const params = galleryTop.params; params.slidesPerView = 1; 
          galleryTop.update() 

        // let galleryTop2 = new Swiper('.gallery-top', {
        //   nextButton: '.swiper-button-next',
        //   prevButton: '.swiper-button-prev',
        //   slidesPerView: 'auto',
        //   spaceBetween: 10,
        //   keyboardControl: true
        // });
      }, false);
  }
  
  let closeButtons = document.querySelectorAll('.close-button');
  for (let y = 0; y < closeButtons.length; ++y) {
      closeButtons[y].addEventListener('click', function(event) {
        // document.querySelector('.gallery-top').classList.add('hidden');
        console.log(event);
        let fullScreenElements = document.querySelectorAll('.fullscreen');
        console.log(fullScreenElements);
        for (let x = 0; x < fullScreenElements.length; ++x) {
            fullScreenElements[x].classList.remove('fullscreen');
            setTimeout(function() {
              galleryTop.update();
              galleryThumbs.update();
            }, 200);
        }
      });
  }
  
});