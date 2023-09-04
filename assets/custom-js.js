window.addEventListener("load", function() {
  // AOS.init({
  //   duration: 1200,
  // });

  const hoverMenuItem = document.querySelector('.hover-item');
  const modal = document.querySelector('.modal');

  hoverMenuItem.addEventListener('mouseover',()=>{
    modal.classList.replace('opacity-0', 'opacity-100');
  });

  modal.addEventListener('mouseleave',()=>{
    modal.classList.replace('opacity-100', 'opacity-0');

  })


});