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
  });
  gdanskTabBtn.addEventListener('click',()=>{
    allTabBtn.classList.remove('tab-active');
    gdanskTabBtn.classList.add('tab-active');
    gdyniaTabBtn.classList.remove('tab-active');
    modalTab1.classList.add('hidden');
    modalTab1.classList.remove('block');
    modalTab2.classList.replace('hidden','block');
    modalTab3.classList.replace('block','hidden');
  });
  gdyniaTabBtn.addEventListener('click',()=>{
    allTabBtn.classList.remove('tab-active');
    gdanskTabBtn.classList.remove('tab-active');
    gdyniaTabBtn.classList.add('tab-active');
    modalTab1.classList.add('hidden');
    modalTab1.classList.remove('block');
    modalTab2.classList.replace('block','hidden');
    modalTab3.classList.replace('hidden','block');
  });


  for (const dropdown of document.querySelectorAll(".select-wrapper")) {
    dropdown.addEventListener('click', function() {
        this.querySelector('.select').classList.toggle('open');
    })
  }

  for (const option of document.querySelectorAll(".custom-option")) {
    option.addEventListener('click', function() {
      if (!this.classList.contains('selected')) {
        // this.parentNode.querySelector('.custom-option.selected').classList.remove('selected');
        this.classList.add('selected');
        this.closest('.select').querySelector('.select__trigger span').textContent = this.textContent;
      };
    });
  };


  window.addEventListener('click', function(e) {
    for (const select of document.querySelectorAll('.select')) {
        if (!select.contains(e.target)) {
            select.classList.remove('open');
        }
    }
  });


  // search more options handle
  const btnMore = this.document.querySelector('.btn-more');
  const searchBar = this.document.querySelector('#search-bar');
  btnMore.addEventListener('click',()=>{
    searchBar.classList.toggle('h-[250px]')
  });


  // call pop up modal
  const btnCloseModal = document.querySelector('.btn-close');
  const callModal = document.querySelector('.call-back-modal');
  const modalBg = document.querySelector('.call-back-modal-bg');
  const btnOpenModal = document.querySelector('.btn-find-more');

  btnCloseModal.addEventListener('click',()=>{
    callModal.classList.replace('opacity-100', 'opacity-0');
    modalBg.classList.replace('opacity-100', 'opacity-0');
    console.log('close');
  });
  btnOpenModal.addEventListener('click',()=>{
    callModal.classList.replace('opacity-0', 'opacity-100');
    modalBg.classList.replace('opacity-0', 'opacity-100');
    console.log('open');
  })






});