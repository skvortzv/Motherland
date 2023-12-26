<?php

include_once "../classes.php";

$data = [
    "email" => htmlspecialchars($_POST['email'])
];

$email = new Database();
echo $email->valid_email($data["email"]);

?>