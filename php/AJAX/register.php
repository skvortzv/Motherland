<?php

include_once "../classes.php";

$data = [
    "email" => htmlspecialchars($_POST['email']),
    "pass" => htmlspecialchars($_POST['pass'])
];

$user = new Database();
echo $user->add_user($data["email"], $data["pass"]);

?>