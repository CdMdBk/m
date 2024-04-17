<?php

$get_records = '';

//filtering a single field

if (!empty($id)) {
    $get_records = "SELECT * FROM `records` WHERE id = '$id'";
} elseif (!empty($client)) {
    $get_records = "SELECT * FROM `records` WHERE client = '$client'";
} elseif (!empty($style)) {
    $get_records = "SELECT * FROM `records` WHERE style = '$style'";
} elseif (!empty($date)) {
    $get_records = "SELECT * FROM `records` WHERE date = '$date'";
}

//filtering two fields

if (!empty($id) && !empty($client)) {
    $get_records = "SELECT * FROM `records` WHERE id = '$id' AND client = '$client'";
} elseif (!empty($id) && !empty($style)) {
    $get_records = "SELECT * FROM `records` WHERE id = '$id' AND style = '$style'";
} elseif (!empty($id) && !empty($date)) {
    $get_records = "SELECT * FROM `records` WHERE id = '$id' AND date = '$date'";
} elseif (!empty($client) && !empty($style)) {
    $get_records = "SELECT * FROM `records` WHERE client = '$client' AND style = '$style'";
} elseif (!empty($client) && !empty($date)) {
    $get_records = "SELECT * FROM `records` WHERE client = '$client' AND date = '$date'";
} elseif (!empty($style) && !empty($date)) {
    $get_records = "SELECT * FROM `records` WHERE style = '$style' AND date = '$date'";
}

//filtering three fields

if (!empty($id) && !empty($client) && !empty($style)) {
    $get_records = "SELECT * FROM `records` WHERE id = '$id' AND client = '$client' AND style = '$style'";
} elseif (!empty($id) && !empty($client) && !empty($date)) {
    $get_records = "SELECT * FROM `records` WHERE id = '$id' AND client = '$client' AND date = '$date'";
} elseif (!empty($id) && !empty($style) && !empty($date)) {
    $get_records = "SELECT * FROM `records` WHERE id = '$id' AND style = '$style' AND date = '$date'";
} elseif (!empty($client) && !empty($style) && !empty($date)) {
    $get_records = "SELECT * FROM `records` WHERE client = '$client' AND style = '$style' AND date = '$date'";
}

//filtering four fields

if (!empty($id) && !empty($client) && !empty($style) && !empty($date)) {
    $get_records = "SELECT * FROM `records` WHERE id = '$id' AND client = '$client' AND style = '$style' AND date = '$date'";
}

$array_records = $connect->query($get_records);