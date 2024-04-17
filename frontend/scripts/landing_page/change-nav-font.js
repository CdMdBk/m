"use strict"

const arrNavText = document.querySelectorAll('.nav__ul_font');

arrNavText.forEach(item => {
    changeColorOnHover(item);
});

function changeColorOnHover(element) {
    element.addEventListener('mouseover', e => {
        e.target.classList.replace('nav__ul_font', 'nav__ul_font_active');
        element.addEventListener('mouseout', e => {
           e.target.classList.replace('nav__ul_font_active', 'nav__ul_font') ;
        });
    });
}