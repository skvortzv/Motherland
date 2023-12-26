<?php

if(isset($_SESSION['avatar'])) {
    ?>

<style>

    ul.login {
        justify-content: center !important;
        gap: 1rem;
    }
    
</style>

<nav id="nav">
    <ul class="menu">
        <li><img src="images/nav/menu.png" alt="Menu" onclick="menu()"></li>
    </ul>
    <ul class="navigation">
        <li><a href="?main">ГЛАВНАЯ</a></li>
        <li><a href="?ads">ОБЪЯВЛЕНИЯ</a></li>
        <li><a href="?blogs">БЛОГИ</a></li>
    </ul>
    <ul class="logo">
        <img src="images/nav/logo.png" alt="Logo">
    </ul>
    <ul class="login">
        <div class = "on-plus" id = "on-plus">
            <a href="?add-ads">Добавить объявление</a>
            <a>Добавить блог</a>
        </div>
        <a class = "plus" id = "plus"><div class = "img" alt = "Plus" id = "plus-img"></div></a>
        <script src = "js/click-plus.js">
        </script>
        <a href = "?me"><img src = "<?php print($_SESSION['avatar']); ?>" alt = "Avatar"></a>
    </ul>
</nav>
<section class="mobile-menu" id="mobile-menu">
    <nav class="navigation" id="navigation">
        <ul>
            <li><a href="?main">ГЛАВНАЯ</a></li>
            <li><a href="?ads">ОБЪЯВЛЕНИЯ</a></li>
            <li><a href="?blogs">БЛОГИ</a></li>
            <hr>
        </ul>
    </nav>
</section>

    <?php
} 
else {
    ?>

<nav id="nav">
    <ul class="menu">
        <li><img src="images/nav/menu.png" alt="Menu" onclick="menu()"></li>
    </ul>
    <ul class="navigation">
        <li><a href="?main">ГЛАВНАЯ</a></li>
        <li><a href="?ads">ОБЪЯВЛЕНИЯ</a></li>
        <li><a href="?blogs">БЛОГИ</a></li>
    </ul>
    <ul class="logo">
        <img src="images/nav/logo.png" alt="Logo">
    </ul>
    <ul class="login">
        <a class="button-secondary" onclick="document.getElementById('login').style.display = 'block';">
            <div class="img"></div> ВХОД
        </a>
    </ul>
</nav>
<section class="mobile-menu" id="mobile-menu">
    <nav class="navigation" id="navigation">
        <ul>
            <li><a href="?main">ГЛАВНАЯ</a></li>
            <li><a href="?ads">ОБЪЯВЛЕНИЯ</a></li>
            <li><a href="?blogs">БЛОГИ</a></li>
            <hr>
        </ul>
    </nav>
</section>

    <?php
}

?>

<script type="text/javascript" src="js/menu.js">
</script>
