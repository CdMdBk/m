"use strict"

const arrPortfolioPhotos = document.querySelectorAll('.portfolio__item');
const gridContainer = document.querySelector('.portfolio_grid');
const button = document.querySelector('.portfolio__button');

hidePortfolioPhotos(arrPortfolioPhotos);

if (window.screen.width >= 768) {
    showPortfolioPhotos(arrPortfolioPhotos);
}

window.addEventListener('resize', () => {
    hidePortfolioPhotos(arrPortfolioPhotos);
    if (window.screen.width >= 768) {
        showPortfolioPhotos(arrPortfolioPhotos);
    }
});

button.addEventListener('click', () => {
    showPortfolioPhotos(arrPortfolioPhotos);
});

function hidePortfolioPhotos(array) {
    if (window.screen.width < 768) {
        array.forEach((element, index) => {
            if (index >= 6) {
                element.style.display = `none`;
                gridContainer.style.gridTemplateRows = `repeat(28, 1fr)`;
            }
        });
        button.style.display = `block`;
    }
}

function showPortfolioPhotos(array) {
    array.forEach((element, index) => {
        if (index >= 6) {
            element.style.display = `block`;
            gridContainer.style.gridTemplateRows = `repeat(56, 1fr)`;
        }
        button.style.display = `none`;
    });
}