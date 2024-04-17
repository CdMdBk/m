formAuthorization.addEventListener('submit', event => {
    event.preventDefault();

    const formDataAuthorization = new FormData(formAuthorization);

    const arrayJsonData = {
        email: formDataAuthorization.get('emailUser'),
        password: formDataAuthorization.get('passwordUser')
    };

    fetch('../../backend/login/authorization.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify(arrayJsonData)
    }).then(response => {
        return response.json();
    }).then(data => {
        if (data['error']) {
            alert('Неправильно введена почта или пароль')
        } else {
            if (data['admin']) {
                window.location.href = 'admin.php';
            } else {
                arrUserData = data;
                window.location.href = 'personal-account.php';
            }
        }
    });
});