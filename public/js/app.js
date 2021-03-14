"use-strict"
//Toutes page selection
let content = document.querySelector('.content');

//Nav selection
let toggleNav = document.querySelector('[data-bs-toggle="offcanvas"]');
let nav = document.querySelector('.offcanvas-collapse');
let navLink = document.querySelectorAll('.nav-link');
let locker = document.querySelector('.locker');

//Blog selection
let preview = document.querySelectorAll('.preview__container');

//Nav fonction
function navAnimation() {
    nav.classList.toggle('open');
    toggleNav.classList.toggle('active');
    locker.classList.toggle('lock');
    
    navLink.forEach((element, i) => {
        setTimeout(() => {
          if (element.style.opacity !== "1") {
            element.style.transition = ".3s ease-in-out .2s";
            element.style.opacity = "1";
          } else {
            element.style.opacity = "0";
          }
          
        }, i * 070);
    });
}

function onLoad() {

  content.style.opacity ="1";
  content.style.transition = ".3s ease-in-out .2s";
 
  
  
  preview.forEach((element, i) => {
    element.style.opacity ="0";
    setTimeout(() => {
      element.style.transition = ".3s ease-in-out .5s";
      element.style.opacity = "1";
    }, i * 070);
  });
}

//Nav event
toggleNav.addEventListener("click",navAnimation);

//window Event
window.addEventListener('load', onLoad);

