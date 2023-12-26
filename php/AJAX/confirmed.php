<?php

include_once "../classes.php";

$data = [
    "name" => htmlspecialchars($_POST['name']),
    "pass" => htmlspecialchars($_POST['pass'])
];

$confirmed = new Database();
echo $confirmed->check_confirmed($data["name"], $data["pass"]);

?>