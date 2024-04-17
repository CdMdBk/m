buttonSaveStatus.addEventListener('click', () => {

    arrRecords = {};
    document.querySelectorAll('p.orders-data__cell:nth-child(1)').forEach((id, index) => {
        arrRecords[index] = {
            id: id.innerHTML.trim(),
            status: document.querySelectorAll('select.orders-data__cell')[index].value
        };
    });
    console.log(arrRecords);
    fetch('../../backend/admin/change-status.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(arrRecords)
    }).then(response => {
        return response.json();
    }).then(data => {
        console.log(data);

        document.querySelectorAll('p.orders-data__cell:nth-child(2)').forEach((p, index) => {
            p.innerHTML = data[index]['status'];
        });

        document.querySelectorAll('select.orders-data__cell').forEach((select, index) => {
            select.innerHTML = `
                <option value="${data[index]['status']}">
                    ${data[index]['status']}
                </option>
                
                <option value="${data[index]['other_status']}">
                    ${data[index]['other_status']}
                </option>
            `;
        });
    });
});