window.addEventListener("load", function() {
  // AOS.init({
  //   duration: 1200,
  // });

  const hoverMenuItem = document.querySelector('.hover-item');
  const modal = document.querySelector('.modal');
  const allTabBtn = document.querySelector('.allTabBtn');
  const gdanskTabBtn = document.querySelector('.gdanskTabBtn');
  const gdyniaTabBtn = document.querySelector('.gdyniaTabBtn');
  const modalTab1 = document.querySelector('.tab1');
  const modalTab2 = document.querySelector('.tab2');
  const modalTab3 = document.querySelector('.tab3');

  hoverMenuItem.addEventListener('mouseover',()=>{
    modal.classList.replace('opacity-0', 'opacity-100');
    modal.classList.replace('z-[0]', 'z-[1]');
  });
  // hoverMenuItem.addEventListener('mouseleave',()=>{
  //   modal.classList.replace('opacity-100', 'opacity-0');
  // });

  modal.addEventListener('mouseleave',()=>{
    modal.classList.replace('opacity-100', 'opacity-0');
    modal.classList.replace('z-[1]', 'z-[0]');
  });

  allTabBtn.addEventListener('click',()=>{
    allTabBtn.classList.add('tab-active');
    gdanskTabBtn.classList.remove('tab-active');
    gdyniaTabBtn.classList.remove('tab-active');
    modalTab1.classList.remove('hidden');
    modalTab1.classList.add('block');
    modalTab2.classList.replace('block','hidden');
    modalTab3.classList.replace('block','hidden');
    console.log('tab1 click');
  });
  gdanskTabBtn.addEventListener('click',()=>{
    allTabBtn.classList.remove('tab-active');
    gdanskTabBtn.classList.add('tab-active');
    gdyniaTabBtn.classList.remove('tab-active');
    modalTab1.classList.add('hidden');
    modalTab1.classList.remove('block');
    modalTab2.classList.replace('hidden','block');
    modalTab3.classList.replace('block','hidden');
    console.log('tab2 click');
  });
  gdyniaTabBtn.addEventListener('click',()=>{
    allTabBtn.classList.remove('tab-active');
    gdanskTabBtn.classList.remove('tab-active');
    gdyniaTabBtn.classList.add('tab-active');
    modalTab1.classList.add('hidden');
    modalTab1.classList.remove('block');
    modalTab2.classList.replace('block','hidden');
    modalTab3.classList.replace('hidden','block');
    console.log('tab2 click');
  });






});