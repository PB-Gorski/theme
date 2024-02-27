// window.addEventListener("load", function () {
  if (document.body.classList.contains('single-mieszkania')){
    console.log('img-zoom-popup.js');

    let featuredImage = document.querySelector('.wp-block-post-featured-image');
    let featuredImageBig = document.querySelector('.js-featured-img-popup');
    let featuredImageBigLink = document.querySelector('.js-featured-img-popup').childNodes[1]
    let featuredImageLink = document.querySelector('.wp-block-post-featured-image').childNodes[0].src;

    featuredImageBigLink.src = featuredImageLink;
    featuredImageBigLink.classList.add('scale-[0.6]')



    featuredImage.addEventListener('click', () => {

    });
    
  };
// });