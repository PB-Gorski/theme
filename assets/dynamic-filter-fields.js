window.addEventListener('load',function(){

  const smartFilterContainer = document.querySelector('.ymc-smart-filter-container');
  if (!smartFilterContainer) return;

  /*
  
  IDS BASED ON PROD ENVIRONMENT

    Miasta:
    28 - Gdańsk
    40 - Gdynia
    
    Inwestycje:
    72 - Srebrniki
    675 - Sukiennicza
    71 - Sw Piotra
    82 - Torunska
    81 - Wiezycka

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
    28: [72,675,82,81],
    40: [71],
  }
  const investmentsIds = [72,675,71,82,81];
  initDependenciesWatch(cityDependencies,investmentsIds)

  const investmentDependencies = {
    72: [640,641,642,643],
    675: [640, 641],
    71: [640,641,642,643],
    82: [640,642,643],
    81: [641,642,643],
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