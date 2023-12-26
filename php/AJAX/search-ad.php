<?php

include_once "../classes.php";

$data = [
    "search" => htmlspecialchars($_POST['search'])
];

$ads = new Database();
echo $ads->get_ad_banners_main_search($data["search"]);

?>