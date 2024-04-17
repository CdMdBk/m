formRecord.addEventListener('submit', event => {
    event.preventDefault();

    arrRecordData['status'] = 0;
    arrRecordData['client'] = '';
    arrRecordData['style'] = arrButtonLinkedLists[1].value;

    const arrDate = dateInput.value.split('T', 2);
    arrRecordData['date'] = `${arrDate[0]} ${arrDate[1]}`;

    switch(arrButtonLinkedLists[2].value) {
        case '1':
        case '7':
        case '9':
            arrRecordData['amount'] = 9000;
            break;
        case '3':
        case '10':
            arrRecordData['amount'] = 15000;
            break;
        case '2':
        case '8':
            arrRecordData['amount'] = 20000;
            break;
        case '4':
            arrRecordData['amount'] = 25000;
            break;
        case '5':
            arrRecordData['amount'] = 15000;
            break;
        case '6':
        case '11':
            arrRecordData['amount'] = 50000;
    }

    fetch('../../backend/recording/record.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(arrRecordData)
    }).then(response => {
        alert('Запись оформлена');
    });
});