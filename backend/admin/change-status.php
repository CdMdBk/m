<?php

include '../connect-database.php';
$array_request = json_decode(file_get_contents('php://input'), true);

$array_response = array();
$status_record = '';
for ($iterator = 0; $iterator < count($array_request); $iterator++) {
    $id_record = $array_request[$iterator]['id'];
    switch($array_request[$iterator]['status']) {
        case 'Запланирована':
            $status_record = 0;
            $array_response[$iterator]['status'] = 'Запланирована';
            $array_response[$iterator]['other_status'] = 'Пройдена';
            break;
        case 'Пройдена':
            $status_record = 1;
            $array_response[$iterator]['status'] = 'Пройдена';
            $array_response[$iterator]['other_status'] = 'Запланирована';
    }

    $update_status = "UPDATE `records` SET status = '$status_record' WHERE id = '$id_record'";
    $connect->query($update_status);
}

echo json_encode($array_response);