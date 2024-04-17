"use strict"

//Show validation form

const arrButtonValidation = document.querySelectorAll('[data-show-validation]');

const formRegistration = document.querySelector('form.validation__registration');
const formAuthorization = document.querySelector('form.validation__authorization');

// const formContainer = document.querySelector('#form-container');

arrButtonValidation.forEach(button => {
    button.addEventListener('click', () => {
        formRegistration.classList.add('validation_active');
        document.body.classList.add('body_lock');

        document.addEventListener('mouseup', event => {
            if (event.target === formRegistration || event.target === formAuthorization) {
                formRegistration.classList.remove('validation_active');
                formAuthorization.classList.remove('validation_active');
                document.body.classList.remove('body_lock');
            }
        })
    });
});

//Switch validation forms

function switchForm() {
    if (formRegistration.classList.contains('validation_active')) {
        formRegistration.classList.remove('validation_active');
        formAuthorization.classList.add('validation_active');
    } else {
        formRegistration.classList.add('validation_active');
        formAuthorization.classList.remove('validation_active');
    }


    // if (form.classList.contains('validation__registration')) {
        // formContainer.innerHTML = validationAuthorization.innerHTML;
        // form.classList.replace('validation__registration', 'validation__authorization');
        // submitAuthorization = document.querySelector('form.validation__authorization');
    // } else {
        // formContainer.innerHTML = validationRegistration.innerHTML;
        // form.classList.replace('validation__authorization', 'validation__registration');
        // submitRegistration = document.querySelector('form.validation__registration');
    // }
}