window.addEventListener("load", function() {
  // AOS.init({
  //   duration: 1200,
  // });

  const hoverMenuItem = document.querySelector('.hover-item');
  const modal = document.querySelector('.modal');

  hoverMenuItem.addEventListener('mouseover',()=>{
    modal.classList.add('opacity-100');
    console.log('test');
  });


});