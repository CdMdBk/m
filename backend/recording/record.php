<?php

session_start();
include '../connect-database.php';

$array_request = json_decode(file_get_contents('php://input'), true);
$array_request['client'] = $_SESSION['email_user'];



$id_user = $_SESSION['id_user'];
$status = $array_request['status'];
$client = $array_request['client'];
$style = $array_request['style'];
$get_style = "SELECT name FROM `styles` WHERE id = '$style'";
$style = $connect->query($get_style)->fetch_assoc()['name'];
$date = $array_request['date'];
$amount = $array_request['amount'];

$add_data = "INSERT INTO `records` (`id_user`, `status`, `client`, `style`, `date`, `amount`) VALUES ('$id_user', '$status', '$client', '$style', '$date', '$amount')";
$connect->query($add_data);


$json_response = array($id_user, $status, $client, $style, $date, $amount);
echo json_encode($json_response);