<?php

class Database {
    private $d_server = 'localhost';
    private $d_user = 'root';
    private $d_pass = '';
    private $d_dbname = 'Motherland';
    private $d_email = "";
    
    public function get_ad_banners() {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $sql = $conn->prepare('SELECT * FROM `Ad banners` ORDER BY `id` DESC LIMIT 6');
        $sql->execute();

        $result = $sql->fetchAll();
        
        if(count($result)) {
            foreach($result as $row) {
                ?>

<article style="background-image: url(<?php print($row['pathimage']); ?>);">
    <div class="margin"></div>
    <div class="content">
        <h3><?php print($row['header']); ?></h3>
        <p><?php print($row['description']); ?></p>
        <p><img src="images/adbanners/map.png" alt="Map" class="map"> <?php print($row['place']); ?></p>
        <a href="?ad=<?php print($row['id']); ?>">
            <div class="img"></div> ПЕРЕЙТИ
        </a>
    </div>
</article>

<?php
            }
        }
        
        $conn = null;
    }
    
    public function get_ad_banners_main($limit = 6) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $start = 0;
        $sql = $conn->prepare('SELECT * FROM `Ad banners` ORDER BY `id` LIMIT ' . $start . ', ' . $limit . ';');
        $sql->execute();

        $result = $sql->fetchAll();
        
        if(count($result)) {
            foreach($result as $row) {
                ?>

<article style="background-image: url(<?php print($row['pathimage']); ?>);">
    <div class="margin"></div>
    <div class="content">
        <h3><?php print($row['header']); ?></h3>
        <p><?php print($row['description']); ?></p>
        <p><img src="images/adbanners/map.png" alt="Map" class="map"> <?php print($row['place']); ?></p>
        <a href="?ad=<?php print($row['id']); ?>">
            <div class="img"></div> ПЕРЕЙТИ
        </a>
    </div>
</article>

<?php
            }
        }
        
        $conn = null;
    }
    
    public function get_ad_banners_main_html($limit = 6) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $start = 0;
        $sql = $conn->prepare('SELECT * FROM `Ad banners` ORDER BY `id` LIMIT ' . $start . ', ' . intval($limit) . ';');
        $sql->execute();

        $result = $sql->fetchAll();
        
        $html = "";
        if(count($result)) {
            foreach($result as $row) {
                $html .= "<article style = \"background-image: url(" . $row['pathimage'] . ");\"><div class = \"margin\"></div><div class = \"content\"><h3>" . $row['header'] . "</h3><p>" . $row['description'] . "</p><p><img src = \"images/adbanners/map.png\" alt = \"Map\" class = \"map\"> " . $row['place'] . "</p><a href = \"?ad=" . $row['id'] . "\"><div class = \"img\"></div> ПЕРЕЙТИ</a></div></article>";
            }
        }
        
        if(intval($limit) > count($result)) $html .= "<p class = \"message\">К сожалению это все. Предложите свое объявление чтобы их стало больше!</p>";
        
        $conn = null;
        return $html;
    }
    
    public function get_ad_banners_main_search($search) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $sql = $conn->prepare("SELECT * FROM `Ad banners` WHERE header LIKE '%$search%';");
        $sql->execute();

        $result = $sql->fetchAll();
        
        $html = "";
        if(count($result)) {
            foreach($result as $row) {
                $html .= "<article style = \"background-image: url(" . $row['pathimage'] . ");\"><div class = \"margin\"></div><div class = \"content\"><h3>" . $row['header'] . "</h3><p>" . $row['description'] . "</p><p><img src = \"images/adbanners/map.png\" alt = \"Map\" class = \"map\"> " . $row['place'] . "</p><a href=\"" . $row['id'] . "\"><div class = \"img\"></div> ПЕРЕЙТИ</a></div></article>";
            }
        }
        if(count($result) == 0) {
            $html .= "<p class = \"message\">Ничего не найдено</p>";
        }
        
        $conn = null;
        return $html;
    }
    
    public function get_blog_banners() {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $sql = $conn->prepare('SELECT * FROM `Blog banners` ORDER BY `id` DESC LIMIT 6');
        $sql->execute();

        $result = $sql->fetchAll();
        
        if(count($result)) {
            foreach($result as $row) {
                ?>

<article style="background-image: url(<?php print($row['pathimage']); ?>);">
    <div class="margin"></div>
    <div class="content">
        <a><?php print($row['header']); ?></a>
        <p><?php print($row['description']); ?></p>
        <div class="criteria">
            <p><img src="images/blogbanners/like.png" alt="Like"> <?php print($row['likes']); ?></p>
            <p><img src="images/blogbanners/calendar.png" alt="Calendar"> <?php print($row['date']); ?></p>
        </div>
    </div>
</article>

<?php
            }
        }
        
        $conn = null;
    }
    
    public function get_blog_banners_main($limit = 6) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $start = 0;
        $sql = $conn->prepare('SELECT * FROM `Blog banners` ORDER BY `id` LIMIT ' . $start . ', ' . $limit . ';');
        $sql->execute();

        $result = $sql->fetchAll();
        
        if(count($result)) {
            foreach($result as $row) {
                ?>

<article style="background-image: url(<?php print($row['pathimage']); ?>);">
    <div class="margin"></div>
    <div class="content">
        <a><?php print($row['header']); ?></a>
        <p><?php print($row['description']); ?></p>
        <div class="criteria">
            <p><img src="images/blogbanners/like.png" alt="Like"> <?php print($row['likes']); ?></p>
            <p><img src="images/blogbanners/calendar.png" alt="Calendar"> <?php print($row['date']); ?></p>
        </div>
    </div>
</article>

<?php
            }
        }
        
        $conn = null;
    }
    
    public function get_blog_banners_main_html($limit = 6) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $start = 0;
        $sql = $conn->prepare('SELECT * FROM `Blog banners` ORDER BY `id` LIMIT ' . $start . ', ' . intval($limit) . ';');
        $sql->execute();

        $result = $sql->fetchAll();
        
        $html = "";
        if(count($result)) {
            foreach($result as $row) {
                $html .= "<article style=\"background-image: url(" . $row['pathimage'] . ");\"><div class = \"margin\"></div><div class = \"content\"><a>" . $row['header'] . "</a><p>" . $row['description'] . "</p><div class = \"criteria\"><p><img src = \"images/blogbanners/like.png\" alt = \"Like\">" . $row['likes'] . "</p><p><img src = \"images/blogbanners/calendar.png\" alt = \"Calendar\">" . $row['date'] . "</p></div></div></article>";
            }
        }
        
        if(intval($limit) > count($result)) $html .= "<p class = \"message\">К сожалению это все. Напишите свой блог чтобы их стало больше!</p>";
        
        $conn = null;
        return $html;
    }
    
    public function get_blog_banners_main_search($search) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $sql = $conn->prepare("SELECT * FROM `Blog banners` WHERE header LIKE '%$search%';");
        $sql->execute();

        $result = $sql->fetchAll();
        
        $html = "";
        if(count($result)) {
            foreach($result as $row) {
                $html .= "<article style=\"background-image: url(" . $row['pathimage'] . ");\"><div class = \"margin\"></div><div class = \"content\"><a>" . $row['header'] . "</a><p>" . $row['description'] . "</p><div class = \"criteria\"><p><img src = \"images/blogbanners/like.png\" alt = \"Like\">" . $row['likes'] . "</p><p><img src = \"images/blogbanners/calendar.png\" alt = \"Calendar\">" . $row['date'] . "</p></div></div></article>";
            }
        }
        
        $conn = null;
        return $html;
    }
    
    public function valid_email($email) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        $data = $conn->prepare('SELECT * FROM `Users`');
        $data->execute();

        $result = $data->fetchAll();
        
        if(count($result)) {
            foreach($result as $row) {
                if($row['email'] == $email) {
                    return("Такая почта уже существует");
                }
            }
        }
        
        return("Такой почты не существует");
        $conn = null;
    }
    
    public function add_user($email, $pass) {
        $name = "u" . mt_rand(0, 100000000);
        $hashpass = password_hash($pass, PASSWORD_DEFAULT);
        
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        $data = $conn->prepare('SELECT * FROM `Users`;');
        $data->execute();

        $result = $data->fetchAll();

        $isEqual = false;
        if(count($result)) {
            foreach($result as $row) {
                if($row['email'] == $email) {
                    $isEqual = true;
                } 
            }
        }
        
        $code = mt_rand(100000, 999999);
        if(!$isEqual) {
            $to = $email;
            $subject = "Motherland - Проверочный код для регистрации";
            $message = "Проверочный код: " . $code;
            $headers = "From: " . $d_email;
            mail($to, $subject, $message, $headers);
            $sql = "INSERT INTO `Users` (`email`, `nickname`, `password`, `code`, `confirmed`, `privilege`, `countads`) VALUES ('$email', '$name', '$hashpass', '$code', '0', 'User', 0);";
            $conn->exec($sql);
            
            $datadir = $conn->prepare("SELECT * FROM `Users` WHERE email='$email';");
            
            $datadir->execute();

            $result = $datadir->fetchAll();

            if(count($result)) {
                foreach($result as $row) {
                    $path = "../../images/users/" . $row['id'];
                    if (!file_exists($path)) {
                        mkdir($path, 0700, true);
                    }
                }
            }
            
            $conn = null;
        }
    }
    
    public function check_confirmed($name, $pass) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        $data = $conn->prepare('SELECT * FROM `Users`');
        $data->execute();

        $result = $data->fetchAll();
        
        if(count($result)) {
            foreach($result as $row) {
                if($row['email'] == $name) {
                    if(password_verify($pass, $row['password']))
                    {
                        if($row['confirmed'] == 0) {
                            return("Не подтвержден");
                        } else {
                            return("Подтвержден");
                        }
                    } else {
                        return("Неверный пароль");
                    }
                }
            }
        }
        
        $conn = null;
    }
    
    public function set_confirmed($email, $code) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        $data = $conn->prepare('SELECT * FROM `Users`;');
        $data->execute();

        $result = $data->fetchAll();
        
        if(count($result)) {
            foreach($result as $row) {
                if($row['email'] == $email) {
                    if($row['code'] == intval($code)) {
                        $sql = "UPDATE `Users` SET confirmed=1 WHERE email='$email'";
                        $conn->exec($sql);
                        return "Верный код";
                    } else {
                        return "Неверный код";
                    }
                }
            }
        }

        $conn = null;
    }
    
    public function add_session($name, $pass, $remember) {
        if($remember == "off") {
            session_start();

            $_SESSION['name'] = $name;

            $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
            $data = $conn->prepare("SELECT * FROM `Users` WHERE email='$name'");
            $data->execute();

            $result = $data->fetchAll();

            if(count($result)) {
                foreach($result as $row) {
                    $_SESSION['id'] = $row['id'];
                    if($row['pathavatar'] == null) {
                        $_SESSION['avatar'] = 'images/users/default.png';
                    } else {
                        $_SESSION['avatar'] = $row['pathavatar'];
                    }
                }
            }

            return "Сессии подключены";
            $conn = null;
        } 
        else {
            session_start();
            
            $_SESSION['name'] = $name;

            $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
            $data = $conn->prepare("SELECT * FROM `Users` WHERE email='$name'");
            $data->execute();

            $result = $data->fetchAll();

            if(count($result)) {
                foreach($result as $row) {
                    $_SESSION['id'] = $row['id'];
                    if($row['pathavatar'] == null) {
                        $_SESSION['avatar'] = 'images/users/default.png';
                    } else {
                        $_SESSION['avatar'] = $row['pathavatar'];
                    }
                    
                    $token = mt_rand(-100000000, 100000000);
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $strtoken = strval($token);
                    $strip = strval($ip);
                    $sql = "UPDATE `Users` SET token='$strtoken' WHERE email='$name'";
                    $conn->exec($sql);
                    $sql = "UPDATE `Users` SET ip='$strip' WHERE email='$name'";
                    $conn->exec($sql);
                }
            }

            setcookie("token", $strtoken, time() + 3600 * 24 * 7, '/');
            setcookie("ip", $strip, time() + 3600 * 24 * 7, '/');
            return "Сессии подключены";
            $conn = null;
        }
    }
    
    public function connection_by_token($token, $ip) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        $data = $conn->prepare('SELECT * FROM `Users`');
        $data->execute();

        $result = $data->fetchAll();

        if(count($result)) {
            foreach($result as $row) {
                if($row['token'] == $token) {
                    if($row['ip'] == $ip) {
                        session_start();

                        $_SESSION['name'] = $row['email'];
                        $_SESSION['id'] = $row['id'];
                        if($row['pathavatar'] == null) {
                            $_SESSION['avatar'] = 'images/users/default.png';
                        } else {
                            $_SESSION['avatar'] = $row['pathavatar'];
                        }
                    }
                    else {
                        setcookie('token', null, -1, '/');
                        setcookie('ip', null, -1, '/');
                    }
                }
            }
        }

        $conn = null;
    }
    
    public function get_sort_ads($filter_seeall, $filter_region, $select_region, $filter_city, $select_city, $filter_date, $select_date, $filter_price, $price_after, $price_before, $filter_day, $value_1, $value_2) {        
        if($filter_seeall == 0) {
            $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
            
            $sqlprepare = "SELECT * FROM `Ad banners` WHERE sort IS NULL";
            if($filter_region == 1) {
                $sqlprepare .= " AND region='$select_region'";
            }
            
            if($filter_city == 1) {
                $sqlprepare .= " AND city='$select_city'";
            }
            
            if($filter_date == 1) {
                $sqlprepare .= " AND date='$select_date'";
            }
            
            if($filter_price == 1) {
                $sqlprepare .= " AND price<='$price_before' AND price>='$price_after'";
            }
            
            if($filter_day == 1) {
                $sqlprepare .= " AND day<='$value_2' AND day>='$value_1'";
            }
            
            $sqlprepare .= " ORDER BY `id`";
            $sqlprepare .= ';';
            $sql = $conn->prepare($sqlprepare);
            $sql->execute();
            
            $result = $sql->fetchAll();
            
            $html = "";
            
            if(count($result)) {
                foreach($result as $row) {
                    $html .= "<article style = \"background-image: url(" . $row['pathimage'] . ");\"><div class = \"margin\"></div><div class = \"content\"><h3>" . $row['header'] . "</h3><p>" . $row['description'] . "</p><p><img src = \"images/adbanners/map.png\" alt = \"Map\" class = \"map\"> " . $row['place'] . "</p><a><div class = \"img\"></div> ПЕРЕЙТИ</a></div></article>";
                }
            } else if(!count($result)) {
                echo "<p class = \"warning\">Ничего не найдено!</p>";
            }

            $conn = null;
            return $html;
        } else {
            return "Restart";
        }
    }
    
    public function get_personal($id) {
            $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
            $data = $conn->prepare("SELECT * FROM `Users` WHERE id='$id';");
            $data->execute();

            $result = $data->fetchAll();

            if(count($result)) {
                foreach($result as $row) {
                    ?>

<form action = "" method = "post" enctype="multipart/form-data">
    <section class = "personal-info">
        <div class = "avatar">
            <span><p><?php print($row['nickname']); ?></p><p><?php print($row['privilege']); ?></p></span>
            <img src = "<?php print($_SESSION['avatar']); ?>" alt = "Avatar">
            <label for = "input-avatar" id = "edit-avatar">Изменить</label>
            <input type = "file" name = "input-avatar" id = "input-avatar" accept="image/png, image/jpeg" style = "visibility: hidden; width: 0; height: 0;">
        </div>
        <div class = "info">
            <span><p id = "input-nickname"><?php print($row['nickname']); ?></p><a id = "edit-nickname">Изменить</a></span>
            <span><p id = "input-email"><?php print($row['email']); ?></p><a id = "edit-email">Изменить</a></span>
            <span><p id = "input-password">●●●●●●●●●●●</p><a id = "edit-password">Изменить</a></span>
            <script>

                $("#input-avatar").on("change", function() {
                    $("#edit-avatar").css("display", "none");
                });
                $("#edit-nickname").on("click", function() {
                    var val = $("#input-nickname").html();
                    $("#input-nickname").html("<input name = 'nickname' id = 'nickname'>");
                    $("#nickname").val(val);
                    $("#edit-nickname").css("display", "none");
                });
                $("#edit-email").on("click", function() {
                    $("#input-email").html("<input type = 'email' name = 'email' id = 'email' placeholder = 'mail@example.ru'>");
                    $("#edit-email").css("display", "none");
                });
                $("#edit-password").on("click", function() {
                    $("#input-password").html("<input type = 'password' name = 'now-pass' id = 'now-pass' placeholder = 'Старый пароль'><input type = 'password' name = 'new-pass' id = 'new-pass' placeholder = 'Новый пароль'>");
                    $("#input-password").css("display", "flex");
                    $("#input-password").css("gap", "1rem");
                    $("#edit-password").css("display", "none");
                });

            </script>
        </div>
    </section>
    <div class = "buttons">
        <button type="submit" class = "btn-save" name="save">Сохранить изменения</button>
        <button class = "btn-exit">Выйти</button>
    </div>
</form>
<section class = "personal-more">
    <section class = "ads">
        <span><p>Объявления</p><a href = "?add-ads"><div class = "img" alt = "Plus" id = "plus-img"></div></a></span>
        <hr>
        <span>
            <a>Мои объявления</a>
            <a>Избранное</a>
        </span>
        <div class = "ads">
        <?php
        
                    $dataads = $conn->prepare("SELECT * FROM `Ad banners` WHERE author='$id';");
                    $dataads->execute();
                    
                    $result = $dataads->fetchAll();
                    
                    if(count($result)) {
                        foreach($result as $row) {
                            ?>
        
        <article style="background-image: url(<?php print($row['pathimage']); ?>);">
            <div class="margin"></div>
            <div class="content">
                <h3><?php print($row['header']); ?></h3>
                <p><?php print($row['description']); ?></p>
                <p><img src="images/adbanners/map.png" alt="Map" class="map"> <?php print($row['place']); ?></p>
                <a href="?ad=<?php print($row['id']); ?>" class = "go">
                    ПЕРЕЙТИ
                </a>
                <a>
                    УДАЛИТЬ
                </a>
            </div>
        </article>
        
                            <?php
                        }
                    }
        ?>
        </div>
    </section>
    <section class = "blogs">
        <span><p>Блоги</p><a><div class = "img" alt = "Plus" id = "plus-img"></div></a></span>
        <hr>
        <span>
            <a>Мои блоги</a>
            <a>Избранное</a>
        </span>
    </section>
<section>

                    <?php
                }
            }
        
        $conn = null;
        
        if(isset($_POST['save'])) {
            $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
            if(isset($_FILES['input-avatar'])) {
                if($_FILES['input-avatar']['size'] > 2097152)
                    return "Слишком большой файл";
                else {
                    $tmp_name = htmlspecialchars($_FILES['input-avatar']['tmp_name']);
                    $name_tmp = mt_rand(-1000000, 10000000);
                    $path = "images/users/" . $id;
                    if (!file_exists($path)) mkdir($path, 0700, true);
                    move_uploaded_file($tmp_name, "$path/$name_tmp.png");

                    $sql = "UPDATE `Users` SET pathavatar='$path/$name_tmp.png' WHERE id='$id';";
                    $conn->exec($sql);

                    $_SESSION['avatar'] = "$path/$name_tmp.png";
                }
            }

            if(isset($_POST['nickname'])) {
                $nickname = htmlspecialchars($_POST['nickname']);

                $sql = "UPDATE `Users` SET nickname='$nickname' WHERE id='$id';";
                $conn->exec($sql);
            }

            if(isset($_POST['email'])) {

            }

            if(isset($_POST['now-pass']) && isset($_POST['new-pass'])) {

            }
        }
        
        $conn = null;
    }
    
    public function add_ads($header, $description, $region, $city, $coordinates, $price, $day) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $id = $_SESSION['id'];
        $data = $conn->prepare("SELECT * FROM `Users` WHERE id='$id';");
        $data->execute();

        $result = $data->fetchAll();

        if(count($result)) {
            foreach($result as $row) {
                $countads = $row['countads'];
                $countads = $countads + 1;
                
                if($countads <= 10 && $row['privilege'] == "User") {
                    if($_FILES['ads-image']['size'] > 2097152)
                        return "Слишком большой файл";
                    else {
                        $tmp_name = htmlspecialchars($_FILES['ads-image']['tmp_name']);
                        $name_tmp = mt_rand(-1000000, 10000000);
                        $path = "images/users/" . $_SESSION['id'] . "/ads";
                        if (!file_exists($path)) {
                            mkdir($path, 0700, true);
                        }
                        move_uploaded_file($tmp_name, "$path/$name_tmp.png");

                        $now_date = date("d.m.Y");
                        $sql = "INSERT INTO `Ad banners` (`pathimage`, `header`, `description`, `place`, `sort`, `region`, `city`, `date`, `price`, `day`, `views`, `author`, `coordinates`) VALUES ('$path/$name_tmp.png', '$header', '$description', '$region', NULL, '$region', '$city', '$now_date', '$price', '$day', 0, '$id', '$coordinates');";

                        $conn->exec($sql);
                        
                        $sqluser = "UPDATE `Users` SET countads='$countads' WHERE id='$id';";
                        
                        $conn->exec($sqluser);
                        
                        $conn = null;
                    }
                }
            }
        }
        
        $conn = null;
    }
    
    public function get_ad($id) {
        $conn = new PDO("mysql:host=$this->d_server;dbname=$this->d_dbname", "$this->d_user", "$this->d_pass");
        
        $data = $conn->prepare("SELECT * FROM `Ad banners` WHERE id='$id';");
        $data->execute();

        $result = $data->fetchAll();

        if(count($result)) {
            foreach($result as $row) {
                $views = $row['views'];
                $views = $views + 1;
                $sql = "UPDATE `Ad banners` SET views='$views';";
                $conn->exec($sql);
                ?>
    
    <title>Motherland - <?php print($row['header']); ?></title>
    <style>
    
        main.ad {
            background-image: url(<?php print($row['pathimage']); ?>);
        }
        
        div.right {
            background: url(<?php print($row['pathimage']); ?>);
        }
        
    </style>
    <div class = "content">
        <div class = "left">
            <div class = "author">
                <?php
                
                $idauthor = $row['author'];
                $dataauthor = $conn->prepare("SELECT * FROM `Users` WHERE id='$idauthor';");
                $dataauthor->execute();
                
                $resultauthor = $dataauthor->fetchAll();
                
                if(count($resultauthor)) {
                    foreach($resultauthor as $rowauthor) {
                        ?>
                
                <img src = "<?php if($rowauthor['pathavatar'] != null) print($rowauthor['pathavatar']); else print('images/users/default.png'); ?>" alt = "Avatar">
                <div class = "copytext">
                    <input value = "<?php print($rowauthor['email']); ?>" id = "copy" readonly>
                    <img src = "images/ad/copy.png" alt = "Copy" class = "copy" onclick = "copyEmail()">
                </div>
                <script type="text/javascript">
                
                    function copyEmail() {
                        var copyText = document.getElementById("copy");
                        
                        copyText.select(); 
                        document.execCommand("copy");
                    }
                
                </script>
                <small>Почта для связи с автором</small>
                
                        <?php
                    }
                }
                
                ?>
            </div>
            <h1><?php print($row['header']); ?></h1>
            <hr>
            <p><?php print($row['description']); ?></p>
            <div class = "prop">
                <p><img src="images/adbanners/map.png" alt="Map" class="map"> <?php print($row['place']); ?></p>
                <p><img src="images/adbanners/city.png" alt="City" class="city"> <?php print($row['city']); ?></p>
                <p><img src="images/adbanners/date.png" alt="Date" class="date"> <?php print($row['date']); ?></p>
                <p><img src="images/adbanners/price.png" alt="Price" class="price"> <?php print($row['price']); ?><b>₽</b></p>
                <p><img src="images/adbanners/day.png" alt="Day" class="day"> <?php print($row['day']); ?> дней</p>
                <p><img src="images/adbanners/views.png" alt="Views" class="views"> <?php print($row['views']); ?></p>
            </div>
        </div>
        <div class = "right">
        
        </div>
    </div>
    
                <?php
            }
        }
        
        $conn = null;
    }
}

?>
