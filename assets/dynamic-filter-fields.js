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
  
    */

  const cityDependencies = {
    28: [72,677,82,81],
    40: [71],
    681: [680,682]
  }

  const investmentsIds = [71,72,677,82,81,680,682];

  initDependenciesWatch(cityDependencies,investmentsIds)

})

function initDependenciesWatch(dependencies,affectedIds) {
  const dependenciesIds = Object.keys(dependencies)
  dependenciesIds.forEach(id => {
    const target = getTargetElByTermId(id);
    if (!target) return;

    target.addEventListener('click',()=>{
      
      setTimeout(()=>{
        const activeIds = dependenciesIds.filter(dependencyId => {
          const target = getTargetElByTermId(dependencyId);
          return target && target.classList.contains('active');
        })
        
        if (activeIds.length == 0) {
          showByIds(affectedIds)
          return 
        }
        
        hideByIds(affectedIds);

        activeIds.forEach(activeDependencyId => {
          const affectedIdsVisible = dependencies[activeDependencyId]
          if (affectedIdsVisible.length > 0) showByIds(affectedIdsVisible)
          
        })
      },100)

    })
  })
}

function getMenuItemElByTermId(id){
  return getTargetElByTermId(id)?.parentElement
}

function getTargetElByTermId(id){
  return document.querySelector(`[data-termid='${id}']`)
}

function hideByIds(idArray){
  setVisibilityByIds(idArray,false)
}

function showByIds(idArray){
  setVisibilityByIds(idArray,true)
}

function setVisibilityByIds(idArray,hidden){
  idArray.forEach(id => {
    const item = getMenuItemElByTermId(id)
    if (item) hidden ? item.classList.remove('hidden') : item.classList.add('hidden') 
  })
}