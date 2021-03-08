"use-strict"

let toggleNav = document.querySelector('[data-bs-toggle="offcanvas"]');
let nav = document.querySelector('.offcanvas-collapse');
let navLink = document.querySelectorAll('.nav-link');
let locker = document.querySelector('.locker');

function navAnimation() {
    nav.classList.toggle('open');
    toggleNav.classList.toggle('active');
    locker.classList.toggle('lock');
    
    navLink.forEach((element, i) => {
        setTimeout(() => {
          element.classList.toggle('nav-link--animation');
        }, i * 070);
    });
}


toggleNav.addEventListener("click",navAnimation);