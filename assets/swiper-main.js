
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

  const galleryTop = new Swiper('.gallery-top', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    keyboardControl: true
 });
 const galleryThumbs = new Swiper('.gallery-thumbs', {
       nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true
 });
 galleryTop.params.control = galleryThumbs;
 galleryThumbs.params.control = galleryTop;
 
 const sliders = document.querySelectorAll('.swiper-slide');
 for (const i = 0; i < sliders.length; ++i) {
    sliders[i].addEventListener('click', function(event) {
       console.log('click');
       event.target.parentNode.parentNode.parentNode.classList.add('fullscreen');
       setTimeout(function() {
          galleryTop.update();
          galleryThumbs.update();
       }, 200);
    }, false);
 }
 
 const closeButtons = document.querySelectorAll('.close-button');
 for (const y = 0; y < closeButtons.length; ++y) {
    closeButtons[y].addEventListener('click', function(event) {
       console.log(event);
       const fullScreenElements = document.querySelectorAll('.fullscreen');
       console.log(fullScreenElements);
       for (const x = 0; x < fullScreenElements.length; ++x) {
          fullScreenElements[x].classList.remove('fullscreen');
          setTimeout(function() {
             galleryTop.update();
             galleryThumbs.update();
          }, 200);
       }
    });
 }
  
});