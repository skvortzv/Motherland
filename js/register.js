$("#btn-register").on('click', function () {
    var email = $("#email").val();
    var pass = $("#pass").val();
    if ($("#email").is(':valid')) {
        if (pass == $("#passrepeat").val() && pass.length > 7) {
            $.ajax({
                    method: "POST",
                    url: "php/ajax/validemail.php",
                    data: {
                        email: email
                    }
                })
                .done(function (msg) {
                    if (msg == "Такая почта уже существует") {
                        $("#email").val('');
                        $('#email').attr('placeholder', msg);
                        return false;
                    } else if (msg == "Такой почты не существует") {
                        $.ajax({
                                method: "POST",
                                url: "php/ajax/register.php",
                                data: {
                                    email: email,
                                    pass: pass
                                }
                            })
                            .done(function () {
                                $("#login").css("display", "none");
                                $("#message").css("display", "flex");
                                $("#message aside label").html("Регистрация прошла успешно! Подтвердите почту");
                                $("#message aside input").attr("value", email);
                            });
                        $("#email").val('');
                        $("#pass").val('');
                        $("#passrepeat").val('');
                    }
                });
        } else if (pass.length < 8) {
            $("#login #pass").val("");
            $("#login #passrepeat").val("");
            $('#pass').attr('placeholder', 'Пароль от 8 символов!');
            $('#passrepeat').attr('placeholder', 'Пароль от 8 символов!');
        } else {
            $("#login #pass").val("");
            $("#login #passrepeat").val("");
            $('#pass').attr('placeholder', 'Пароли не совпали!');
            $('#passrepeat').attr('placeholder', 'Пароли не совпали!');
        }
    } else {
        $("#email").val("");
        $('#email').attr('placeholder', 'Неправильный ввод');
    }
});