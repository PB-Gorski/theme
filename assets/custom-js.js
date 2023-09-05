window.addEventListener("load", function() {
  // AOS.init({
  //   duration: 1200,
  // });

  const hoverMenuItem = document.querySelector('.hover-item');
  const modal = document.querySelector('.modal');
  const modalTab1 = document.querySelectorAll('.tab1');
  const modalTab2 = document.querySelectorAll('.tab2');
  const modalTab3 = document.querySelectorAll('.tab3');

  hoverMenuItem.addEventListener('mouseover',()=>{
    modal.classList.replace('opacity-0', 'opacity-100');
    modal.classList.replace('z-[0]', 'z-[1]');
  });
  // hoverMenuItem.addEventListener('mouseleave',()=>{
  //   modal.classList.replace('opacity-100', 'opacity-0');
  // });

  modal.addEventListener('mouseleave',()=>{
    // modal.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('z-[1]', 'z-[0]');
  })

  modalTab1.addEventListener('click',()=>{
    modalTab1.classList.remove('hidden');
    modalTab1.classList.add('block');
    modalTab2.classList.replace('block','hidden');
    modalTab3.classList.replace('block','hidden');
  })
  modalTab2.addEventListener('click',()=>{
    modalTab1.classList.add('hidden');
    modalTab1.classList.remove('block');
    modalTab2.classList.replace('hidden','block');
    modalTab3.classList.replace('block','hidden');
  })






});