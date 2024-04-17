<?php

$array_request = json_decode(file_get_contents('php://input'), true);

$header = "Отчёт по заявкам\r\n\r\n";
$filename = '../../report.txt';

file_put_contents($filename, $header);

for ($iterator = 0; $iterator < count($array_request); $iterator++) {
    $record = "id записи: ".$array_request[$iterator]['id']."\r\nСтатус записи: ".$array_request[$iterator]['status']
        ."\r\nКлиент: ".$array_request[$iterator]['client']."\r\nСтиль: ".$array_request[$iterator]['style']."\r\nДата: ".$array_request[$iterator]['date']."\r\nСумма: ".$array_request[$iterator]['amount']."\r\n";
    file_put_contents($filename, PHP_EOL . $record, FILE_APPEND);
}
