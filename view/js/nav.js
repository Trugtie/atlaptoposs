//nav
const body = document.getElementsByTagName('body');
console.log(body);
const navBtn = document.getElementById('navBtn');
navBtn.addEventListener('click',function() {
  body[0].classList.toggle('open');
});