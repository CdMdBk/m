<?php

session_start();
include '../connect-database.php';

$name_user = $_SESSION['name_user'];
$id_user = $_SESSION['id_user'];

$array_request = json_decode(file_get_contents('php://input'), true);
$name = $array_request['name'];
$email = $array_request['email'];
$telephone = $array_request['telephone'];
$nickname = $array_request['nickname'];
$brief_information = $array_request['brief_information'];
$array_response = array(
    'name' => $name,
    'email' => $email,
    'telephone' => $telephone,
    'nickname' => $nickname,
    'brief_information' => $brief_information,
);

$update_data = "UPDATE `users` SET name = '$name', email = '$email', telephone = '$telephone', nickname = '$nickname', brief_information = '$brief_information' WHERE name = '$name_user'";
$connect->query($update_data);

$update_records = "UPDATE `records` SET client = '$email' WHERE id_user = '$id_user'";
$connect->query($update_records);

$_SESSION['name_user'] = $name;
$_SESSION['email_user'] = $email;
$_SESSION['telephone_user'] = $telephone;
$_SESSION['nickname_user'] = $nickname;
$_SESSION['brief_information_user'] = $brief_information;

echo json_encode($array_response);