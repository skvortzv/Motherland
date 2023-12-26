<?php

include_once "../classes.php";

$data = [
    "limit" => htmlspecialchars($_POST['limit'])
];

$ads = new Database();
echo $ads->get_blog_banners_main_html($data["limit"]);

?>