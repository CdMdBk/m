<?php

session_start();
include('../connect-database.php');

$array_request = json_decode(file_get_contents('php://input'), true);
$name = $array_request['name'];
$email = $array_request['email'];
$password = $array_request['password'];
$array_response = array(
    'name' => $name,
    'email' => $email,
    'password' => $password
);

$select_name = "SELECT name, email FROM `users`";
$array_data = $connect->query($select_name);

if ($array_data->num_rows > 0) {
    while ($row = $array_data->fetch_assoc()) {
        if ($row['name'] === $name || $row['email'] === $email) {
            $array_response['error'] = true;
            echo json_encode($array_response);
            session_abort();
            exit();
        }
    }
}

$add_data = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
$connect->query($add_data);

$select_id_user = "SELECT id FROM `users` WHERE name = '$name'";
$id_user = $connect->query($select_id_user)->fetch_assoc();

$array_response['id'] = $id_user['id'];
$_SESSION['id_user'] = $id_user['id'];
$_SESSION['name_user'] = $name;
$_SESSION['email_user'] = $email;
$_SESSION['telephone_user'] = '';
$_SESSION['nickname_user'] = '';
$_SESSION['brief_information_user'] = '';

echo json_encode($array_response);