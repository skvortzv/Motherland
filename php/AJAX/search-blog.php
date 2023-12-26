<?php

include_once "../classes.php";

$data = [
    "search" => htmlspecialchars($_POST['search'])
];

$ads = new Database();
echo $ads->get_blog_banners_main_search($data["search"]);

?>