<?php

session_start();
include '../connect-database.php';

$array_request = json_decode(file_get_contents('php://input'), true);
$email = $array_request['email'];
$password = $array_request['password'];
$array_response = array(
    'email' => $email,
    'password' => $password
);

$select_data = "SELECT * FROM `users`";
$array_data = $connect->query($select_data);

$coincidence = '';
if ($array_data->num_rows > 0) {
    while ($row = $array_data->fetch_assoc()) {
        if ($row['email'] === $email && $row['password'] === $password) {
            $coincidence = $row['id'];
            $_SESSION['name_user'] = $row['name'];
            $_SESSION['email_user'] = $row['email'];
            $_SESSION['telephone_user'] = $row['telephone'];
            $_SESSION['nickname_user'] = $row['nickname'];
            $_SESSION['brief_information_user'] = $row['brief_information'];

            $array_response['id'] = $row['id'];
            $_SESSION['id_user'] = $row['id'];

            if ($row['name'] === 'admin') {
                $array_response['admin'] = true;
                $_SESSION['name_user'] = '';
            } else {
                $array_response['name'] = $row['name'];
            }
        }
    }
}

if (empty($coincidence)) {
    $array_response['error'] = true;
    echo json_encode($array_response);
    session_abort();
    exit();
}

echo json_encode($array_response);