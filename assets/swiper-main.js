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
});