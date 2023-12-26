<section class="login" id="login">
    <div class="exit" onclick="document.getElementById('login').style.display = 'none';">
    </div>
    <div class="form">
        <div class="exit-btn">
            <img src="images/form/exit.png" alt="Exit" onclick="document.getElementById('login').style.display = 'none';">
        </div>
        <aside id="login-form">
            <div class="lr">
                <a onclick="">Войти</a>
                <a onclick="document.getElementById('reg').style.display = 'flex'; document.getElementById('login-form').style.display = 'none';">Регистрация</a>
            </div>
            <label for = "name">Почта:
                <input type="email" name="name" id="name" maxlength="500" autocomplete="off" placeholder="mail@example.ru" required></label>
            <label for = "pass-login">Пароль:
                <input type="password" name="pass" id="pass-login" minlength="8" maxlength="500" autocomplete="off" required></label>
            <label for = "remember-me" class = "remember"><input type = "checkbox" name = "remember-me" id = "remember-me">Запомнить меня</label>
            <div class="button">
                <button name="login" id="btn-login">Войти</button>
            </div>
        </aside>
        <script>
            
            $("#btn-login").on('click', function() {
                var name = $("#name").val();
                var pass = $("#pass-login").val();
                var remember = $("#remember-me").val();
                
                if($("#remember-me").is(":checked")) remember = "on";
                else remember = "off";

                if ($("#name").is(':valid') && $("#pass-login").is(':valid')) {
                    $.ajax({
                            method: "POST",
                            url: "php/ajax/confirmed.php",
                            data: {
                                name: name,
                                pass: pass
                            }
                        })
                        .done(function(msg) {
                            if (msg == "Не подтвержден") {
                                $("#login").css("display", "none");
                                $("#message").css("display", "flex");
                                $("#message aside label").html("Подтвердите почту");
                                $("#message aside input").attr("value", name);
                                $("#message aside input").css("background", "rgba(145, 215, 242, 0.5)");
                                return false;
                            } else if(msg == "Неверный пароль") {
                                $("#message aside input #pass-login").val("");
                                $("#message aside input #pass-login").attr("value", msg);
                            } else if(msg == "Подтвержден") {
                                $.ajax({
                                        method: "POST",
                                        url: "php/ajax/session.php",
                                        data: {
                                            name: name,
                                            pass: pass,
                                            remember: remember
                                        }
                                    })
                                    .done(function(msg) {
                                    if(msg == "Сессии подключены") {
                                        location.reload();
                                    }
                                });
                            }
                        });
                    $("#name").val('');
                    $("#pass-login").val('');
                }
            });
            
            document.addEventListener("keydown", function (e) {
                if(e.code == "Enter") {
                    if($("#login").css("display") != "none") {
                        if($("#login-form").css("display") != "none") {
                            $("#btn-login").click();
                        } else {
                            $("#btn-register").click();
                        }
                    }
                }
                if(e.code == "Escape") {
                    if($("#login").css("display") != "none") {
                        $("#login").css("display", "none");
                    }
                }
            });

        </script>
        <aside id="reg">
            <div class="lr">
                <a onclick="document.getElementById('reg').style.display = 'none'; document.getElementById('login-form').style.display = 'flex';">Войти</a>
                <a onclick="">Регистрация</a>
            </div>
            <label for = "email">Почта:
                <input type="email" name="email" maxlength="500" autocomplete="off" placeholder="mail@example.ru" id="email" required></label>
            <div class="pass">
                <label for = "pass">Пароль:
                    <input type="password" name="pass" minlength="8" maxlength="500" autocomplete="off" id="pass" required></label>
                <label for = "passrepeat">Повтор пароля:
                    <input type="password" name="passrepeat" maxlength="500" autocomplete="off" oninput="checkValid();" id="passrepeat" required></label>
            </div>
            <script src="js/valid-pass.js">
            </script>
            <div class="button">
                <button name="register" id="btn-register">Зарегистрироваться</button>
            </div>
        </aside>
        <script src="js/register.js">
        </script>
    </div>
</section>
<section class="message" id="message">
    <div class="exit" onclick="document.getElementById('message').style.display = 'none';">
    </div>
    <div class="onreg" id="onreg">
        <div class="exit-btn">
            <img src="images/form/exit.png" alt="Exit" onclick="document.getElementById('message').style.display = 'none';">
        </div>
        <aside>
            <label>
            </label>
            <input type="email" name="confirmed-email" minlength="8" maxlength="500" id="confirmed-email" readonly required>
            <input type="number" name="code" id="code" minlength="6" autocomplete="off" placeholder="000000" required>
            <button name = "confirm-btn" id = "confirm-btn">Подтвердить</button>
        </aside>
        <script src ="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
        
            $(document).ready(function() {
                $("#code").mask("999999");
            });
            
            $("#confirm-btn").on('click', function() {
                var email = $("#confirmed-email").val();
                var code = $("#code").val();
                
                if($("#code").is(":valid")) {
                    $.ajax({
                            method: "POST",
                            url: "php/ajax/setconfirmed.php",
                            data: {
                                email: email,
                                code: code
                            }
                        })
                        .done(function(msg) {
                        if(msg == "Верный код") {
                            $("#message aside label").html("Учетная запись подтверждена! Войдите в аккаунт");
                            $("#code").val("");
                            $("#confirm-btn").css("display", "none");
                            $("#message input").css("display", "none");
                        } else if(msg == "Неверный код") {
                            $("#code").val("");
                            $("#message aside label").attr("placeholder", msg);
                        }
                    });
                }
            });
            
            document.addEventListener("keydown", function (e) {
                if(e.code == "Enter") {
                    if($("#message").css("display") != "none") {
                        $("btn-login").click();
                    }
                }
                if(e.code == "Escape") {
                    if($("#message").css("display") != "none") {
                        $("#message").css("display", "none");
                    }
                }
            });
            
        </script>
    </div>
</section>
