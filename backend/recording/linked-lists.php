<?php

include '../connect-database.php';

$array_response = json_decode(file_get_contents('php://input'), true);
$button_number = $array_response['button_number'];
$id_city = $array_response['id_city'];
$id_style = $array_response['id_style'];
$array_json = array();

if ($button_number === 0) {
    $array_json['number'] = 1;
    $get_id_styles = "SELECT * FROM `styles` WHERE id_city = '$id_city'";
    $array_styles = $connect->query($get_id_styles);
    if ($array_styles->num_rows > 0) {
        $count = 0;
        while ($row = $array_styles->fetch_assoc()) {
            $array_json[$count]['id'] = $row['id'];
            $array_json[$count]['id_city'] = $row['id_city'];
            $array_json[$count]['name'] = $row['name'];
            $count++;
        }
        $array_json['number_option'] = --$count;
    }
} elseif ($button_number === 1) {
    $array_json['number'] = 2;
    $get_id_services = "SELECT * FROM `services` WHERE id_style = '$id_style'";
    $array_services = $connect->query($get_id_services);
    if ($array_services->num_rows > 0) {
        $count = 0;
        while ($row = $array_services->fetch_assoc()) {
            $array_json[$count]['id'] = $row['id'];
            $array_json[$count]['id_style'] = $row['id_style'];
            $array_json[$count]['name'] = $row['name'];
            $count++;
        }
        $array_json['number_option'] = --$count;
    }
}

echo json_encode($array_json);