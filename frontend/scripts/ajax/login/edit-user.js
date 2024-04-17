formEditData.addEventListener('submit', event => {
    event.preventDefault();

    const formData = new FormData(formEditData);
    const jsonData = {};
    for (let [key, value] of formData) {
        if (value) jsonData[key] = value;
    }

    fetch('../../backend/login/edit-user.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(jsonData)
    }).then(response => {
        return response.json();
    }).then(data => {
        editDataUser(data);
    });
});