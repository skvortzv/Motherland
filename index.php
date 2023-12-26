<?php

session_start();
include_once "php/classes.php";

if(isset($_COOKIE['token'])) {
    if($_COOKIE['ip'] == $_SERVER['REMOTE_ADDR']) {
        $conntoken = new Database();
        echo $conntoken->connection_by_token($_COOKIE['token'], $_COOKIE['ip']);
    }
    else {
        setcookie('token', null, -1, '/');
        setcookie('ip', null, -1, '/');
    }
}

?>

<!DOCTYPE html>

<html>

    <head lang = "ru">
        <meta name = "description" content = "Motherland - все о туризме, блоги, туристические объявления...">
        <meta name = "keywords" content = "Motherland, туры, Россия, туры по России, блог, блоги, туристические блоги, туризм, все о туризме, объявления, туристические объявления, объявления на туризм">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <!-- CSS -->
        <link rel = "stylesheet" type = "text/css" href = "css/core.css">
        <!-- JQEURY CSS -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <!-- YANDEX MAP -->
        <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript">
        </script>
        <!-- JQUERY -->
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
        </script>
        <script src = "https://code.jquery.com/ui/1.11.3/jquery-ui.js">
        </script>
        <script src="js/jquery.ui.touch-punch.min.js">
        </script>
    </head>

    <body id = "body">
        <?php
        
        include_once 'php/login.php';
        
        ?>
        
        <?php

        include_once 'php/nav.php';

        ?>
        
        <?php
        
        if(isset($_GET['ads'])) {
            include_once 'php/ads.php';
        }
        else if(isset($_GET['blogs'])) {
            include_once 'php/blogs.php';
        }
        else if(isset($_GET['me'])) {
            include_once 'php/me.php';
        }
        else if(isset($_GET['add-ads'])) {
            include_once 'php/add-ads.php';
        }
        else if(isset($_GET['ad'])) {
            include_once 'php/ad.php';
        }
        else {
            include_once 'php/main-page.php';
        }
        
        ?>
    </body>

</html>