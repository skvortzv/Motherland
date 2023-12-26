<?php

include_once "../classes.php";

$data = [
    "limit" => htmlspecialchars($_POST['limit'])
];

$ads = new Database();
echo $ads->get_ad_banners_main_html($data["limit"]);

?>