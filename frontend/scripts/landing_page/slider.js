"use strict"

const sliderWindow = document.querySelector('.feedback__slider-window');
const sliderLength = document.querySelector('.feedback__slider-length');
const arrSliderCard = document.querySelectorAll('.feedback__card');
const leftArrow = document.querySelector('.feedback__slider > .feedback__triangle-box:nth-child(1)');
const rightArrow = document.querySelector('.feedback__slider > .feedback__triangle-box:nth-child(3)');
let countClicks = 0;

changingWidthSliderLength();

window.addEventListener('resize', () => {
    changingWidthSliderLength();
});

leftArrow.addEventListener('click', () => {
    clickLeftArrow();
});

rightArrow.addEventListener('click', () => {
    clickRightArrow();
});

function clickLeftArrow() {
    countClicks--;
    changingSliderTransform();
}

function clickRightArrow() {
    countClicks++;
    changingSliderTransform();
}

function changingWidthSliderLength() {
    if (window.screen.width > 992) {
        changingWidthForLaptopScreen();
    } else if (window.screen.width <= 992 && window.screen.width > 576) {
        changingWidthForTabletScreen()
    } else {
        changingWidthForMobileScreen();
    }
}

function changingWidthForLaptopScreen() {
    sliderLength.style.width = `${sliderWindow.clientWidth * arrSliderCard.length / 3}px`;
    arrSliderCard.forEach(card => {
        card.style.width = `${sliderWindow.clientWidth / 3 - 60}px`;
    });
    changingSliderTransform();
}

function changingWidthForTabletScreen() {
    sliderLength.style.width = `${sliderWindow.clientWidth * arrSliderCard.length / 2}px`;
    arrSliderCard.forEach(card => {
        card.style.width = `${sliderWindow.clientWidth / 2 - 60}px`;
    });
    changingSliderTransform();
}

function changingWidthForMobileScreen() {
    sliderLength.style.width = `${sliderWindow.clientWidth * arrSliderCard.length}px`;
    arrSliderCard.forEach(card => {
        card.style.width = `${sliderWindow.clientWidth - 60}px`;
    });
    changingSliderTransform();
}

function changingSliderTransform() {
    if (window.screen.width > 992 && countClicks < arrSliderCard.length - 2 && countClicks >= 0) {
        sliderLength.style.transform = `translate(${-countClicks * arrSliderCard[0].clientWidth - countClicks * 60}px, 0px)`;
    } else if (window.screen.width <= 992 && window.screen.width > 576 && countClicks < arrSliderCard.length - 1 && countClicks >= 0) {
        sliderLength.style.transform = `translate(${-countClicks * arrSliderCard[0].clientWidth - countClicks * 60}px, 0px)`;
    } else if (window.screen.width <= 576 && countClicks < arrSliderCard.length && countClicks >= 0) {
        sliderLength.style.transform = `translate(${-countClicks * arrSliderCard[0].clientWidth - countClicks * 60}px, 0px)`;
    } else {
        countClicks = 0;
        changingSliderTransform();
    }
}

// Mobile

if (window.screen.width < 768) {
    let startTouchPosition;
    let differenceTouches;

    sliderWindow.addEventListener('touchstart', eventTouch => {
        startTouchPosition = eventTouch.changedTouches[0].clientX;
    });

    sliderWindow.addEventListener('touchmove', eventMove => {
        differenceTouches = Math.floor((startTouchPosition - eventMove.changedTouches[0].clientX));
        sliderLength.style.transform = `translate(${-countClicks * arrSliderCard[0].clientWidth - countClicks * 60 - differenceTouches}px, 0px)`;
    });

    sliderWindow.addEventListener('touchend', eventEnd => {
        if (differenceTouches > 60) {
            clickRightArrow();
        } else if (differenceTouches < -60) {
            clickLeftArrow();
        } else {
            sliderLength.style.transform = `translate(${-countClicks * arrSliderCard[0].clientWidth - countClicks * 60}px, 0px)`;
        }
    });
}