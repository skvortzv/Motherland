<style>
    body {
        overflow: hidden;
        background: #F2F0EB;
    }

</style>

<title>Motherland - главная</title>
<section class="overflow" id="overflow">
    <section class="slide" id = "slide">
        <a id="slide-up" onclick = "slideUp();">▲</a>
        <a id="slide-down" onclick = "slideDown();">▼</a>
    </section>
    <header class="main-page" id="page-1">
        <section class="text">
            <h1 id="media">MOTHERLAND</h1>
            <p>Туристические объявления и блоги</p>
        </section>
        <section class="images">
            <img src="images/main-page/curves.png" alt="Curves" id = "curves">
        </section>
    </header>
    <section class="map" id="page-2">
        <div id="map">
        </div>
    </section>
    <section class="main-page-ads" id="page-3">
        <div class="text">
            <h2>Объявления</h2>
        </div>
        <div class="ads" id="ads">
            <img src="images/adbanners/hand-to-left.png" alt="Drag">
            <?php

            $ad_banners = new Database();
            echo $ad_banners->get_ad_banners();

            ?>
            <img src="images/adbanners/hand-to-right.png" alt="Drag">
        </div>
        <div class="button">
            <a href = "?ads">
                <div class="img"></div> ВСЕ ОБЪЯВЛЕНИЯ
            </a>
        </div>
    </section>
    <section class="main-page-blogs" id="page-4">
        <div class="text">
            <h2>Блоги</h2>
        </div>
        <div class="blogs" id="blogs">
            <img src="images/adbanners/hand-to-left.png" alt="Drag">
            <?php
            
            $blog_banners = new Database();
            echo $blog_banners->get_blog_banners();
            
            ?>
            <img src="images/adbanners/hand-to-right.png" alt="Drag">
        </div>
        <div class="button">
            <a href = "?blogs">
                <div class="img"></div> ВСЕ БЛОГИ
            </a>
        </div>
    </section>
    <?php

    include_once 'php/footer.php';

    ?>
</section>

<script type="text/javascript" src="js/media-main-page.js">
</script>
<script type="text/javascript" src="js/yandex-map.js">
</script>
<script src="js/main-page-drag.js">
</script>
<script src = "js/slide.js">
</script>
