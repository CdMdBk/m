const buttonProfile = $('.account-nav__content[data-nav-box-avatar]');
const buttonExitEdit = $('.profile__header-buttons .profile__button:nth-child(2)');
const buttonEdit = $('.profile__header-buttons .profile__button:first-child');
const buttonSubmit = $('.data__button_appearance');

const mainBlock = $('.account__container')[0];
const profile = $('.profile')[0];
const data = $('.data')[0];
const formData = $('form.data');

buttonProfile.click(switchBlocks);
buttonExitEdit.click(switchBlocks);

buttonEdit.click(switchForm);
buttonSubmit.click(switchForm);

function switchBlocks() {
    if (mainBlock.style.display === 'none') {
        mainBlock.style.display = `flex`;
        profile.style.display = `none`;
        data.style.display = `flex`;
        formData[0].style.display = `none`;
    } else {
        mainBlock.style.display = `none`;
        profile.style.display = `block`;
        data.style.display = `flex`;
        formData[0].style.display = `none`;
        buttonEdit[0].style.display = `block`;
    }
}

function switchForm() {
    if (data.style.display === `none`) {
        data.style.display = `flex`;
        formData[0].style.display = `none`;
        buttonEdit[0].style.display = `block`;
    } else {
        data.style.display = `none`;
        formData[0].style.display = `flex`;
        buttonEdit[0].style.display = `none`;
    }
}

formData.submit((event) => {
    event.preventDefault();
});