buttonFilterRecords.addEventListener('click', () => {
    arrFilterData['id'] = idFilter.value;
    arrFilterData['client'] = clientFilter.value;
    arrFilterData['style'] = styleFilter.value;
    if (dateFilter.value) {
        arrFilterData['date'] = `${dateFilter.value.split('T', 2)[0]} ${dateFilter.value.split('T', 2)[1]}`;
    } else {
        arrFilterData['date'] = '';
    }

    if (arrFilterData['id'] || arrFilterData['client'] || arrFilterData['style'] || arrFilterData['date']) {
        fetch('../../backend/admin/list-filtered-records.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json;charset=utf-8'
            },
            body: JSON.stringify(arrFilterData)
        })
            .then(response => {
                return response.json();
        })
            .then(data => {
                if (data['error'] === 'error') {
                    alert('Фильтрация отсутствует');
                } else {
                    recordContainer.innerHTML = recordHeader;
                    for (let iterator = 0; iterator < data.length; iterator++) {
                        record = `
                            <div class="orders-data__order">
                                <p class="orders-data__cell orders-data__cell_font">
                                    ${data[iterator]['id']}
                                </p>
                
                                <p class="orders-data__cell orders-data__cell_font">
                                    ${data[iterator]['status']}
                                </p>
                
                                <select class="orders-data__cell orders-data__cell_font orders-data__cell_delete"
                                        id="">
                                    <option value="${data[iterator]['status']}">
                                        ${data[iterator]['status']}
                                    </option>
                
                                    <option value="${data[iterator]['other_status']}">
                                        ${data[iterator]['other_status']}
                                    </option>
                                </select>
                
                                <p class="orders-data__cell orders-data__cell_font">
                                    ${data[iterator]['client']}
                                </p>
                
                                <p class="orders-data__cell orders-data__cell_font">
                                    ${data[iterator]['style']}
                                </p>
                
                                <p class="orders-data__cell orders-data__cell_font">
                                    ${data[iterator]['date']}
                                </p>
                
                                <p class="orders-data__cell orders-data__cell_font">
                                    ${data[iterator]['amount']}
                                </p>
                            </div>
                        `;
                        recordContainer.innerHTML += record;
                    }
                    document.querySelector('.admin-panel__count-recording_font').innerHTML = `Найдено: ${data.length}`;
                }
        });
    } else {
        alert('Заполните хотя бы одно поле фильтрации');
    }
});