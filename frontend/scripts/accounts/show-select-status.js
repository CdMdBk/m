const buttonChange = document.querySelector('.orders-data__button:nth-child(1)');
const buttonSaveStatus = document.querySelector('.orders-data__button:nth-child(2)');

buttonChange.addEventListener('click', () => {
    buttonChange.style.display = 'none';
    buttonSaveStatus.style.display = 'block';

    $('p.orders-data__cell:nth-child(2)').toggleClass('orders-data__cell_delete');
    $('select.orders-data__cell').toggleClass('orders-data__cell_delete');
});

buttonSaveStatus.addEventListener('click', () => {
    buttonChange.style.display = 'block';
    buttonSaveStatus.style.display = 'none';

    $('p.orders-data__cell:nth-child(2)').toggleClass('orders-data__cell_delete');
    $('select.orders-data__cell').toggleClass('orders-data__cell_delete');
});