<?php

include_once "../classes.php";

$data = [
    "name" => htmlspecialchars($_POST['name']),
    "pass" => htmlspecialchars($_POST['pass']),
    "remember" => htmlspecialchars($_POST['remember'])
];

$session = new Database();
echo $session->add_session($data["name"], $data["pass"], $data["remember"]);

?>