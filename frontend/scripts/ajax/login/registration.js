formRegistration.addEventListener('submit', event => {
    event.preventDefault();

    const formDataRegistration = new FormData(formRegistration);

    const arrayJsonData = {
        name: formDataRegistration.get('nameUser'),
        email: formDataRegistration.get('emailUser'),
        password: formDataRegistration.get('passwordUser')
    };

    fetch('../../backend/login/registration.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(arrayJsonData)
    }).then(response => {
        return response.json();
    }).then(data => {
        if (data['error']) {
            alert('Пользователь с таким именем или почтой уже существует');
        } else {
            arrUserData = data;
            window.location.href = 'personal-account.php';
        }
    });
});