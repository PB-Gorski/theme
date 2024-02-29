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

    // image zoom
    const container = document.querySelector('#items-container');
    let startY;
    let startX;
    let scrollLeft;
    let scrollTop;
    let isDown;

    container.addEventListener('mousedown',e => mouseIsDown(e));  
    container.addEventListener('mouseup',e => mouseUp(e))
    container.addEventListener('mouseleave',e=>mouseLeave(e));
    container.addEventListener('mousemove',e=>mouseMove(e));

    function mouseIsDown(e){
      isDown = true;
      startY = e.pageY - container.offsetTop;
      startX = e.pageX - container.offsetLeft;
      scrollLeft = container.scrollLeft;
      scrollTop = container.scrollTop; 
    };

    function mouseUp(e){
      isDown = false;
    };

    function mouseLeave(e){
      isDown = false;
    };

    function mouseMove(e){
      if(isDown){
        e.preventDefault();
        //Move vertcally
        const y = e.pageY - container.offsetTop;
        const walkY = y - startY;
        container.scrollTop = scrollTop - walkY;

        //Move Horizontally
        const x = e.pageX - container.offsetLeft;
        const walkX = x - startX;
        container.scrollLeft = scrollLeft - walkX;

        console.log(walkY, walkX);
      };
    };

    let item = document.querySelector('.js-item');

    item.addEventListener('dblclick', () => {
      item.classList.toggle('w-[300%]');
    })
    featuredImageBig.parentElement.addEventListener('dblclick', () => {
      console.log('double clicked on popup img');
      // featuredImageBig.classList.toggle('w-[100%]');
      if (featuredImageBig.style.height == 'auto'){
        featuredImageBig.style.height = '90%';
      }else{
        featuredImageBig.style.height = 'auto';

      }

    })
  };
// });