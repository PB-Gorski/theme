
document.addEventListener("DOMContentLoaded", function(event) {
  new Swiper('#id', {
    direction: "horizontal",
    slidesPerView: 'auto',
    clickable: true,
    grabCursor: true,
    navigation: {
      nextEl: '#services-next',
      prevEl: '#services-prev',
    },
  });
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: true,
    watchSlidesProgress: true,
  });
  var swiper2 = new Swiper(".mySwiper2", {
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    thumbs: {
      swiper: swiper,
    },
  });
  
});