// window.addEventListener("load", function () {
  if (document.body.classList.contains('single-mieszkania')){
    console.log('img-zoom-popup.js');

    let featuredImage = document.querySelector('.wp-block-post-featured-image');
    let featuredImageBig = document.querySelector('.js-featured-img-popup');
    let featuredImageLink = document.querySelector('.wp-block-post-featured-image').childNodes[0].src;
    let popupImageCloseBtn = document.querySelector('.js-close-popup-featured-image');
    let popupImageContainer = document.querySelector('.js-featured_img_popup_container');

    featuredImageBig.childNodes[1].src = featuredImageLink;
    featuredImageBig.classList.add('scale-[0.6]')



    featuredImage.addEventListener('click', () => {
      popupImageContainer.classList.toggle('hidden');
      console.log('popupImageContainer toggle1');
    });

    popupImageCloseBtn.addEventListener('click', () => {
      popupImageContainer.classList.toggle('hidden');
      console.log('popupImageContainer toggle2');

    });
    
  };
// });