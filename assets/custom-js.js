AOS.init({
  duration: 1200,
});
console.log('test');

window.addEventListener("load", function() {
  AOS.init({
    duration: 1200,
  });
  console.log('test2');
  document.getElementById('vid').play();
  document.getElementById('vid2').play();
});