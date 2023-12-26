<style>

    body {
        overflow-y: visible;
        background: #D9D9D9;
    }
    
    footer {
        height: 50vh;
    }
    
    div.text {
        height: 40vh !important;
    }
    
    div.links {
        height: 10vh !important;
    }
    
</style>

<main class = "ad">
    <?php
    
    $ad = new Database();
    echo $ad->get_ad(htmlspecialchars($_GET['ad']));
    
    ?>
</main>
<?php

include_once 'php/footer.php';

?>