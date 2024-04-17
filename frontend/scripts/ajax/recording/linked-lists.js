arrButtonLinkedLists.forEach((button, index) => {
    button.addEventListener('change', () => {
        switch(index) {
            case 0:
                arrIdLinkedLists['button_number'] = 0;
                arrIdLinkedLists['id_city'] = button.value;
                break;
            case 1:
                arrIdLinkedLists['button_number'] = 1;
                arrIdLinkedLists['id_style'] = button.value;
        }

        if (index !== 2) {
            fetch('../../backend/recording/linked-lists.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json;charset=utf-8'
                },
                body: JSON.stringify(arrIdLinkedLists)
            }).then(response => {
                return response.json();
            }).then(data => {
                switch(data['number']) {
                    case 1:
                        arrButtonLinkedLists[1].innerHTML = `
                        <option disabled
                                selected
                                value>
                            Стиль
                        </option>
                    `;
                        arrButtonLinkedLists[2].innerHTML = `
                        <option disabled
                                selected
                                value>
                            Выберите стиль
                        </option>
                    `;
                        addSelectBlock(data);
                        break;
                    case 2:
                        arrButtonLinkedLists[2].innerHTML = `
                        <option disabled
                                selected
                                value>
                            Услуга
                        </option>
                    `;
                        addSelectBlock(data);
                }
            });
        }
    });
});

function addSelectBlock(data) {
    let blockOption = '';
    for (let i = 0; i <= data['number_option']; i++) {
        blockOption += `
            <option value="${data[i].id}">
                ${data[i].name}
            </option>
        `;
    }

    arrButtonLinkedLists[data['number']].innerHTML +=  blockOption;
}