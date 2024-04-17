<?php

$array_response = array();
if ($array_records->num_rows > 0) {
    $count = 0;
    while ($row = $array_records->fetch_assoc()) {
        $array_response[$count]['id'] = $row['id'];
        if ($row['status'] === '0') {
            $array_response[$count]['status'] = 'Запланирована';
            $array_response[$count]['other_status'] = 'Пройдена';
        } elseif ($row['status'] === '1') {
            $array_response[$count]['status'] = 'Пройдена';
            $array_response[$count]['other_status'] = 'Запланирована';
        }
        $array_response[$count]['client'] = $row['client'];
        $array_response[$count]['style'] = $row['style'];
        $array_response[$count]['date'] = $row['date'];
        $array_response[$count]['amount'] = $row['amount'];
        $count++;
    }
}