<style>

    body {
        overflow-y: visible;
        background: #F2F0EB;
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

<title>Motherland - блоги</title>
<main class = "blogs">
    <section class = "filter">
        <label><input type = "search" name = "search" id = "search" maxlength = "500"><a id = "search-btn"><img src = "images/ads/search.png" alt = "Search"></a></label>
    </section>
    <section class = "blogs" id = "blogs-view">
        <?php

        $ad_banners = new Database();
        echo $ad_banners->get_blog_banners_main();

        ?>
    </section>
    <section class = "button">
         <a id = "more"><div class = "img"></div>БОЛЬШЕ</a>
    </section>
</main>
<script>

    let limit = 6;
    $("#more").on("click", function() {
        limit += 6;
        
        $.ajax({
                method: "POST",
                url: "php/ajax/more-blogs.php",
                data: {
                    limit: limit
                }
            })
            .done(function(msg) { $("#blogs-view").html(msg); });
    });
    
    $("#search-btn").on("click", function() {
        let search = $("#search").val();
        
        if(search == "") {
            location.reload();
        }
        else {
            $.ajax({
                    method: "POST",
                    url: "php/ajax/search-blog.php",
                    data: {
                        search: search
                    }
                })
                .done(function(msg) {
                    $("section.blogs").html(msg);
                    $("#more").css("display", "none");
                });
        }
    });
    
    document.addEventListener("keydown", function (e) {
        if(e.code == "Enter") {
            if($("#search").val() != "") {
                $("#search-btn").click();
            } else {
                location.reload();
            }
        }
    });

</script>
<?php

include_once 'php/footer.php';

?>