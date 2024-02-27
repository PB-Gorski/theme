// window.addEventListener("load", function () {
  if (document.body.classList.contains('single-mieszkania')){
    let featuredImage = document.querySelector('.wp-post-image');
    let featuredImageLink = document.querySelector('.wp-post-image').src;
    let featuredImageBig = document.querySelector('.js-featured-img-popup').childNodes[1];
    let popupImageCloseBtn = document.querySelector('.js-close-popup-featured-image');
    let popupImageContainer = document.querySelector('.js-featured_img_popup_container');

    featuredImageBig.src = featuredImageLink;
    featuredImageBig.style.height = '100%';

    featuredImage.addEventListener('click', () => {
      popupImageContainer.classList.toggle('opacity-100');
      popupImageContainer.classList.toggle('z-[2]');
    });

    popupImageCloseBtn.addEventListener('click', () => {
      popupImageContainer.classList.toggle('opacity-100');
      popupImageContainer.classList.toggle('z-[2]');
    });
    
  };
// });