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

<title>Motherland - личный кабинет</title>
<main class = "me">
    <?php
    
    if(isset($_SESSION['id'])) {
        $me = new Database();
        echo $me->get_personal($_SESSION['id']);
    } else {
        echo '<script>location.replace("?main");</script>'; exit;
    }
    
    ?>
</main>
<?php

include_once 'php/footer.php';

?>