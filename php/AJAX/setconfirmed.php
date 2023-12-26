<?php

include_once "../classes.php";

$data = [
    "email" => htmlspecialchars($_POST['email']),
    "code" => htmlspecialchars($_POST['code'])
];

$setconfirmed = new Database();
echo $setconfirmed->set_confirmed($data["email"], $data["code"]);

?>