buttonReport.addEventListener('click', () => {
    const countRecords = document.querySelectorAll('.orders-data__order');

    arrRecordsReport = {};
    for (let iterator = 1; iterator < countRecords.length; iterator++) {
        arrRecordsReport[iterator - 1] = {
            id: countRecords[iterator].children[0].innerText,
            status: countRecords[iterator].children[1].innerText,
            client: countRecords[iterator].children[3].innerText,
            style: countRecords[iterator].children[4].innerText,
            date: countRecords[iterator].children[5].innerText,
            amount: countRecords[iterator].children[6].innerText
        }
    }
    console.log(arrRecordsReport);

    fetch('../../backend/admin/report.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(arrRecordsReport)
    }).then(response => {
        alert('Отчёт сформирован');
    });
});