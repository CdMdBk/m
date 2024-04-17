<?php

include '../connect-database.php';

$get_records = "SELECT * FROM `records`";
$array_records = $connect->query($get_records);

include 'request-records.php';

echo json_encode($array_response);