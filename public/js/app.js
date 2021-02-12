"use-strict"

let toggleNav = document.querySelector('[data-bs-toggle="offcanvas"]');
let nav = document.querySelector('.offcanvas-collapse');
let locker = document.querySelector('.locker');

function navAnimation() {
    nav.classList.toggle('open');
    toggleNav.classList.toggle('active');
    locker.classList.toggle('lock');
}


toggleNav.addEventListener("click",navAnimation);