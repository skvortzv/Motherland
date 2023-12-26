<?php

include_once "../classes.php";

$data = [
    "filter_seeall" => htmlspecialchars($_POST['filter_seeall']),
    "filter_region" => htmlspecialchars($_POST['filter_region']),
    "select_region" => htmlspecialchars($_POST['select_region']),
    "filter_city" => htmlspecialchars($_POST['filter_city']),
    "select_city" => htmlspecialchars($_POST['select_city']),
    "filter_date" => htmlspecialchars($_POST['filter_date']),
    "select_date" => htmlspecialchars($_POST['select_date']),
    "filter_price" => htmlspecialchars($_POST['filter_price']),
    "price_after" => htmlspecialchars($_POST['price_after']),
    "price_before" => htmlspecialchars($_POST['price_before']),
    "filter_day" => htmlspecialchars($_POST['filter_day']),
    "value_1" => htmlspecialchars($_POST['value_1']),
    "value_2" => htmlspecialchars($_POST['value_2'])
];

$sort = new Database();
echo $sort->get_sort_ads($data["filter_seeall"], $data["filter_region"], $data["select_region"], $data["filter_city"], $data["select_city"], $data["filter_date"], $data["select_date"], $data["filter_price"], $data["price_after"], $data["price_before"], $data["filter_day"], $data["value_1"], $data["value_2"]);

?>