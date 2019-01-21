function submitRegistration() {
    var fd = new FormData;
    fd.append('login', $("#registration-login").val());
    fd.append('password', $("#registration-password").val());
    fd.append('password-repeat', $("#registration-password-repeat").val());
    fd.append('name', $("#registration-name").val());
    fd.append('age', $("#registration-age").val());
    fd.append('description', $("#registration-description").val());
    fd.append('photo', $("#registration-photo").prop('files')[0]);

    $.ajax({
        type: "POST",
        url: "./php/registration.php",
        data: fd,
        processData: false,
        contentType: false,
        success: function (msg) {
            $('#message').html(msg);
            if (msg == 'Регистрация прошла успешно') {
                $('#message2').html(msg);
            }
        }
    });
};


function authorization() {
    var formData = new FormData;
    formData.append('login', $('#authorization-login').val());
    formData.append('password', $('#authorization-password').val());
    $.ajax({
        type: 'POST',
        url: './php/authorization.php',
        processData: false,
        contentType: false,
        data: formData,
        success: function (msg) {
            $('#message').html(msg);
            if (msg == 'Добро пожаловать!') {
                $('#message2').html(msg);
            }
        }
    });
}

$(document).ready(function () {
    $("#navbar ul li a").click(function () {
        $("#navbar ul li a").removeClass("active");
        $(this).toggleClass("active");
    });
});