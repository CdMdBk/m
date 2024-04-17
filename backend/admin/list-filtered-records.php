<?php

include '../connect-database.php';

$array_request = json_decode(file_get_contents('php://input'), true);
$id = $array_request['id'];
$client = $array_request['client'];
$style = $array_request['style'];
$date = $array_request['date'];

include 'filtered-records.php';
include 'request-records.php';

echo json_encode($array_response);