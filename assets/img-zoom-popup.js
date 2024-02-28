// window.addEventListener("load", function () {
  if (document.body.classList.contains('single-mieszkania')){
    let featuredImage = document.querySelector('.wp-post-image');
    let featuredImageLink = document.querySelector('.wp-post-image').src;


    if(featuredImageLink.includes('data:')){
      featuredImageLink = document.querySelector('.wp-post-image').dataset.src;
    }
    document.querySelector('.wp-post-image').dataset.src
    let featuredImageBig = document.querySelector('.js-featured-img-popup').childNodes[1];
    let popupImageCloseBtn = document.querySelector('.js-close-popup-featured-image');
    let popupImageContainer = document.querySelector('.js-featured_img_popup_container');

    featuredImageBig.src = featuredImageLink;
    featuredImageBig.style.height = '90%';

    // open popup
    featuredImage.addEventListener('click', () => {
      popupImageContainer.classList.toggle('opacity-100');
      popupImageContainer.classList.toggle('z-[2]');
    }, {passive: true});

    // close popup by clicking outiside img
    popupImageContainer.addEventListener('click', (e) => {
      popupImageContainer.classList.toggle('opacity-100');
      popupImageContainer.classList.toggle('z-[2]');
    }, {passive: true});
    featuredImageBig.addEventListener('click', (e) => {
      e.stopPropagation();
    }, {passive: true});
  };
// });