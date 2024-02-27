// window.addEventListener("load", function () {
  if (document.body.classList.contains('single-mieszkania')){
    console.log('img-zoom-popup.js');

    let featuredImage = document.querySelector('.wp-post-image');
    let featuredImageLink = document.querySelector('.wp-post-image').src;
    let featuredImageBig = document.querySelector('.js-featured-img-popup').childNodes[1];
    let popupImageCloseBtn = document.querySelector('.js-close-popup-featured-image');
    let popupImageContainer = document.querySelector('.js-featured_img_popup_container');

    featuredImageBig.src = featuredImageLink;

    featuredImage.addEventListener('click', () => {
      popupImageContainer.classList.toggle('hidden');
    });

    popupImageCloseBtn.addEventListener('click', () => {
      popupImageContainer.classList.toggle('hidden');
    });
    
  };
// });