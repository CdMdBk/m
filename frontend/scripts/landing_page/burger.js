"use strict"

const burger = document.querySelector('.nav__burger');
const navigation = document.querySelector('.nav__ul');

window.addEventListener('resize', () => {
    if (window.screen.width > 576) deleteNavigation();
});

burger.addEventListener('click', showNavigation);

for (let i = 0; i < navigation.children.length; i++) {
    navigation.children[i].children[0].addEventListener('click', () => {
        deleteNavigation();
    });
}

function showNavigation() {
    navigation.classList.toggle('nav__ul_active');
    document.body.classList.toggle('body_lock');
    burger.classList.toggle('nav__burger_active');
}

function deleteNavigation() {
    navigation.classList.remove('nav__ul_active');
    document.body.classList.remove('body_lock');
    burger.classList.remove('nav__burger_active');
}