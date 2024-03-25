window.addEventListener('load',function(){

  const smartFilterContainer = document.querySelector('.ymc-smart-filter-container');
  if (!smartFilterContainer) return;

  /*
  
  IDS BASED ON DEV ENVIRONMENT!!!

    Miasta:
    28 - Gdańsk
    40 - Gdynia
    681 - Gliwice
    
    Inwestycje:
    71 - Sw Piotra
    72 - Srebrniki
    677 - Sukiennicza
    82 - Torunska
    81 - Wiezycka
    680 - Zatorze
    682 - Zatorze2

    Pokoje:
    640 - 1
    641 - 2
    642 - 3
    643 - 4
    644 - 5
    645 - 6
    646 - 7
  
    */

  const cityDependencies = {
    28: [72,677,82,81],
    40: [71],
    681: [680,682]
  }
  const investmentsIds = [71,72,677,82,81,680,682];
  initDependenciesWatch(cityDependencies,investmentsIds)

  const investmentDependencies = {
    71: [640,641,642,643],
    72: [641,642,643],
    677: [640, 641],
    82: [640,642,643],
    81: [641,642,643],
    680: [642],
    682: []
  }

  const roomsIds = [640, 641, 642, 643, 644, 645, 646];
  initDependenciesWatch(investmentDependencies,roomsIds)


})

function initDependenciesWatch(dependencies,affectedIds) {

  const dependenciesIds = Object.keys(dependencies)
  setDependencies(dependencies, dependenciesIds,affectedIds)  //set dependencies on page enter
  
  dependenciesIds.forEach(id => {
    const target = getTargetElByTermId(id);
    if (!target) return;

    target.addEventListener('click',()=>{
      
      setTimeout(()=>{
        setDependencies(dependencies,dependenciesIds,affectedIds)
      },100)

    })
  })
}

function setDependencies(dependencies,dependenciesIds,affectedIds){
  const activeIds = dependenciesIds.filter(dependencyId => {
    const target = getTargetElByTermId(dependencyId);
    return target && target.classList.contains('active');
  })
  
  if (activeIds.length == 0) {
    showByIds(affectedIds)
    return 
  }
  
  // hideByIds(affectedIds);
  
  const idsToShow = []
  activeIds.forEach(activeDependencyId => {
    const affectedIdsVisible = dependencies[activeDependencyId]
    if (affectedIdsVisible.length > 0) idsToShow.push(...affectedIdsVisible)
  })
  const idsToHide = affectedIds.filter(item => !idsToShow.includes(item))
  hideByIds(idsToHide)
  showByIds(idsToShow)
}


function getTargetElByTermId(id){
  return document.querySelector(`[data-termid='${id}']`)
}

function getMenuItemElByTermId(id){
  return getTargetElByTermId(id)?.parentElement
}

function hideByIds(idArray){
  setVisibilityByIds(idArray,false)
}

function showByIds(idArray){
  setVisibilityByIds(idArray,true)
}

function setVisibilityByIds(idArray,visible){
  idArray.forEach(id => {
    const item = getMenuItemElByTermId(id)
    if (item){
      if (visible) {
        item.classList.remove('hidden')
      }else{
        item.classList.add('hidden')
        unsetActiveById(id)
      }
    } 
  })
}

function unsetActiveById(id){
  const item = getTargetElByTermId(id)
  if(item && item.classList.contains('active')) item.click()
}