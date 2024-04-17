"use strict"

const preloader = document.querySelector('.loader');

setInterval(() => {
    preloader.style.opacity = `0`;
}, 100);

setInterval(() => {
    preloader.remove();
}, 500);